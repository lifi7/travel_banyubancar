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
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

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
                <h2>Riwayat Pesanan</h2>
                <p>Riwayat Pesanan dan Tiket Anda
                <p>
            </div><!-- End Section Title -->

            <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kode Pemesanan</th>
                            <th scope="col">Nama Pemesan</th>
                            <th scope="col">Rute Perjalanan</th>
                            <th scope="col">Jumlah Tiket</th>
                            <th scope="col">Status Pembayaran</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>TRV12345</td>
                            <td>Mark Otto</td>
                            <td>Malang → Gresik</td>
                            <td>2</td>
                            <td><span class="badge bg-success">Lunas</span></td>
                            <td><a href="#" class="btn btn-primary btn-sm">Lihat E-Ticket</a></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>TRV67890</td>
                            <td>Jacob Thornton</td>
                            <td>Gresik → Lamongan</td>
                            <td>1</td>
                            <td><span class="badge bg-warning">Belum Lunas</span></td>
                            <td><a href="#" class="btn btn-primary btn-sm">Lihat E-Ticket</a></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>TRV11223</td>
                            <td>Larry Bird</td>
                            <td>Lamongan → Tuban</td>
                            <td>3</td>
                            <td><span class="badge bg-success">Lunas</span></td>
                            <td><a href="#" class="btn btn-primary btn-sm">Lihat E-Ticket</a></td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>TRV44556</td>
                            <td>Rina Aulia</td>
                            <td>Tuban → Malang</td>
                            <td>2</td>
                            <td><span class="badge bg-danger">Dibatalkan</span></td>
                            <td><a href="#" class="btn btn-secondary btn-sm disabled">Lihat E-Ticket</a></td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>TRV78901</td>
                            <td>Ahmad Fauzan</td>
                            <td>Malang → Tuban</td>
                            <td>1</td>
                            <td><span class="badge bg-warning">Belum Lunas</span></td>
                            <td><a href="#" class="btn btn-primary btn-sm">Lihat E-Ticket</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>                

        </section><!-- /Team Section -->

    </main>


    <footer id="footer" class="footer">

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">TravelBanyuBancar</strong> <span>All Rights
                    Reserved</span>
            </p>
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
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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
