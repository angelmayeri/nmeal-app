#!/bin/bash
set -e

mkdir -p /app/writable/cache /app/writable/logs /app/writable/session /app/writable/uploads /app/writable/debugbar
chmod -R 777 /app/writable

docker-php-entrypoint --config /Caddyfile --adapter caddyfile 2>&1
