<?= $this->extend('layouts/main') ?>

<?= $this->section('styles') ?>
<link rel="stylesheet" href="<?= base_url('assets/css/pages/landing.css') ?>">
<?= $this->endSection() ?>

<?= $this->section('content-wrapper') ?>
<div class="landing-container">

  <div class="left-section">

    <div class="logo-row">
      <img src="<?= base_url('assets/images/landing/1 Logo mbg.png') ?>" alt="Badan Gizi Nasional" class="logo-mbg">
      <div class="logo-spacer"></div>
      <img src="<?= base_url('assets/images/landing/2 logo sd tarsisius.png') ?>" alt="SD Katolik 17" class="logo-sd">
    </div>

    <div class="welcome-area">
      <div class="welcome-title-wrapper">
        <div class="welcome-words">
          <h1 class="welcome-heading">Selamat</h1>
          <h1 class="welcome-heading">Datang di</h1>
        </div>
        <div class="nmeal-inline-large">
          <img src="<?= base_url('assets/images/landing/3 logo nmeal.png') ?>" alt="+NMeal">
        </div>
      </div>

      <div class="gold-banner">
        <p>Sistem Pemantauan Pelaksanaan Program Makan Bergizi di SD Katolik 17 ST.Tarsisius Manado Secara Mudah dan Real-Time.</p>
        <p>Kami Memastikan Setiap Siswa Menerima Asupan Gizi yang Tepat, Terdata Dengan Baik, dan Dikelola Secara Efektif</p>
      </div>

      <div class="login-area">
        <a href="<?= site_url('login') ?>" class="btn-login" id="btn-login">
          Login <i class="bi bi-box-arrow-in-right"></i>
        </a>
      </div>
    </div>

    <div class="left-spacer"></div>

  </div>

  <div class="right-section">

    <div class="photo-grid">
      <img src="<?= base_url('assets/images/landing/foto 1.jpeg') ?>" class="pg-1" alt="Siswa makan bergizi di kelas">
      <img src="<?= base_url('assets/images/landing/foto 2.jpeg') ?>" class="pg-2" alt="Monitoring program MBG">
      <img src="<?= base_url('assets/images/landing/foto 3.png') ?>" class="pg-3" alt="Distribusi makanan">
      <img src="<?= base_url('assets/images/landing/foto 4.jpeg') ?>" class="pg-4" alt="Suasana makan di kelas">
      <img src="<?= base_url('assets/images/landing/foto 5.png') ?>" class="pg-5" alt="Papan nama SD Katolik XVII">
      <img src="<?= base_url('assets/images/landing/foto 6.jpg') ?>" class="pg-6" alt="Upacara bendera">
    </div>
  </div>

</div>
<?= $this->endSection() ?>