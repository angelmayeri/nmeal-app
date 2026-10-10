#!/bin/bash
set -e

echo "==> Setting up writable and uploads directories..."
mkdir -p /app/writable/cache /app/writable/logs /app/writable/session /app/writable/uploads /app/writable/debugbar
mkdir -p /app/public/uploads/foto_dokumentasi /app/public/uploads/foto_user
chmod -R 777 /app/writable
chmod -R 777 /app/public/uploads
echo "==> Database config check:"
echo "    database_default_hostname: ${database_default_hostname:-(not set)}"
echo "    MYSQLHOST: ${MYSQLHOST:-(not set)}"
echo "    MYSQL_URL: $(echo "${MYSQL_URL:-(not set)}" | sed -E 's/:([^@:]+)@/:****@/')"
echo "    MYSQL_PRIVATE_URL: $(echo "${MYSQL_PRIVATE_URL:-(not set)}" | sed -E 's/:([^@:]+)@/:****@/')"
echo "    MYSQL_PUBLIC_URL: $(echo "${MYSQL_PUBLIC_URL:-(not set)}" | sed -E 's/:([^@:]+)@/:****@/')"

DB_DETECTED=""
if [ -n "$database_default_hostname" ] || [ -n "$MYSQLHOST" ] || [ -n "$MYSQL_URL" ] || [ -n "$MYSQL_PRIVATE_URL" ] || [ -n "$MYSQL_PUBLIC_URL" ] || [ -n "$DATABASE_URL" ]; then
    DB_DETECTED="true"
fi

if [ "$DB_DETECTED" = "true" ]; then
    echo "==> Running database migrations..."
    php spark migrate --all || echo "Warning: Migration failed or database not ready yet."

    if [ "$RUN_DB_SEED" = "true" ]; then
        echo "==> Running initial database seeding..."
        php spark db:seed DatabaseSeeder || echo "Warning: Seeding failed."
    fi
else
    echo "==> WARNING: No database configuration detected in environment variables!"
fi

echo "==> Starting FrankenPHP / Caddy web server..."
docker-php-entrypoint --config /Caddyfile --adapter caddyfile 2>&1
