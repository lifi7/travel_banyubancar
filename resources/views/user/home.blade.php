@extends('components.app')
@section('content')
<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"
                    data-aos="zoom-out">
                    <h1>Best For Your Trip!</h1>
                    <p>We are team of talented designers making websites with Bootstrap</p>
                    <div class="d-flex">
                      <a href="{{ route('pemesanan') }}" class="btn-get-started">Pesan Sekarang</a>
                  </div>                      
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>
    </section><!-- /Hero Section -->

    <!-- Services Section -->
    <section id="services" class="services section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Cara Pemesanan</h2>
            <p>Cara Pemesanan dan Booking Travel Banyu Bancar</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-search icon"></i></div>
                        <h4><a href="" class="stretched-link">1.Temukan Perjalanan yang Sesuai</a></h4>
                        <p>Telusuri jadwal perjalanan yang tersedia melalui menu “Jadwal Perjalanan”. 
                            Pastikan tanggal dan rute yang sesuai kebutuhan Anda tersedia.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-pencil-square icon"></i></div>
                        <h4><a href="" class="stretched-link">2. Isi Formulir Pemesanan dengan Data yang Benar</a></h4>
                        <p>Lengkapi formulir pemesanan dengan data yang akuratdan pastikan semua informasi yang diinput 
                            sudah benar sebelum melanjutkan.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-upload icon"></i></div>
                        <h4><a href="" class="stretched-link">3. Lakukan Pembayaran dan Konfirmasi</a></h4>
                        <p>Setelah memilih perjalanan, lakukan pembayaran. Unggah bukti transfer 
                            sebagai konfirmasi agar proses verifikasi berjalan lebih cepat.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-printer icon"></i></div>
                        <h4><a href="" class="stretched-link">4. Cetak Tiket dan Bersiap untuk Berangkat</a></h4>
                        <p>Setelah pembayaran diverifikasi, tiket akan tersedia dan siap untuk dicetak dan pastikan 
                            Anda membawa tiket pada hari keberangkatan.</p>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Services Section -->

  <!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action section dark-background">
    <img src="assets/img/cta-bg.jpg" alt="">

    <div class="container">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-xl-9 text-center text-xl-start">
                <h3>WhatsApp Business</h3>
                <p>Jika ingin memesan atau bertanya lebih lanjut, silakan hubungi kami melalui WhatsApp Business.</p>
            </div>
            <div class="col-xl-3 cta-btn-container text-center">
                <a class="cta-btn align-middle" href="https://wa.me/6282140490944" target="_blank">Hubungi via WhatsApp</a>
            </div>
        </div>
    </div>
</section><!-- /Call To Action Section -->

    </section><!-- /Contact Section -->

</main>

@endsection