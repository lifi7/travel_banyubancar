<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Starter Page - Arsha Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="starter-page-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <x-header />
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="container">
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Riwayat Pemesanan</li>
          </ol>
        </nav>
        <h1>Pemesanan Tiket</h1>
      </div>
    </div><!-- End Page Title -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
          <h2>Form Pemesanan Travel</h2>
          {{-- <p>Kami menyediakan layanan transportasi dan logistik yang aman, nyaman, dan terpercaya.</p> --}}
      </div><!-- End Section Title -->

      <div class="container">
        <form action="proses_pemesanan.php" method="POST" class="mt-4">
          <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal Keberangkatan</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
          </div>
          <div class="mb-3">
            <label for="waktu" class="form-label">Pilih Waktu</label>
            <select class="form-control" id="waktu" required>
              <option value="06:00 Malang">Jam 6 pagi dari Malang</option>
              <option value="15:00 Malang">Jam 3 sore dari Malang</option>
              <option value="06:00 Tuban">Jam 6 pagi dari Tuban</option>
              <option value="13:00 Tuban">Jam 1 siang dari Tuban</option>
              <option value="07:00 Lamongan">Jam 7 pagi dari Lamongan</option>
              <option value="14:00 Lamongan">Jam 2 siang dari Lamongan</option>
              <option value="09:00 Gresik">Jam 9 pagi dari Gresik</option>
              <option value="15:00 Gresik">Jam 3 sore dari Gresik</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Penumpang</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>
          <div class="mb-3">
            <label for="nomor_hp" class="form-label">Nomor HP</label>
            <input type="tel" class="form-control" id="nomor_hp" name="nomor_hp" required>
          </div>
          <div class="mb-3">
            <label for="alamat_jemput" class="form-label">Alamat Penjemputan</label>
            <textarea class="form-control" id="alamat_jemput" name="alamat_jemput" required></textarea>
          </div>
          <div class="mb-3">
            <label for="alamat_tujuan" class="form-label">Alamat Tujuan</label>
            <textarea class="form-control" id="alamat_tujuan" name="alamat_tujuan" required></textarea>
          </div>
          <div class="mb-3">
            <label for="jumlah_penumpang" class="form-label">Jumlah Penumpang</label>
            <input type="number" class="form-control" id="jumlah_penumpang" name="jumlah_penumpang" required>
          </div>
          <div class="mb-3">
            <label for="note" class="form-label">Catatan Tambahan</label>
            <textarea class="form-control" id="note" name="note"></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100">Pesan Sekarang</button>
        </form>
      </div>

  </section><!-- /Team Section -->

  </main>


  <footer id="footer" class="footer">

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">TravelBanyuBancar</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>