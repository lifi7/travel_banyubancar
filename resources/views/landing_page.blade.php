@extends('components.app')
@section('content')
<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"
                    data-aos="zoom-out">
                    <h1>Best For Your Trip</h1>
                    <p>Bersama Banyu Bancar, perjalanan bukan sekadar perjalanan ini tentang kenyamanan dan kepercayaan</p>
                    <div class="d-flex">
                      <a href="{{ route('login') }}" class="btn-get-started">Pesan Sekarang</a>
                  </div>                      
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>
    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Tentang Kami</h2>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6 content text-center" data-aos="fade-up" data-aos-delay="100">
                    <img src="assets/img/logo3.png" alt="Tentang Banyu Bancar" class="img-fluid">
                </div>                    

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <p> Banyu Bancar, di bawah naungan PT Banyu Bancar Nusantara, telah menjadi pilihan utama dalam layanan travel dan transportasi 
                        sejak 2014. Dengan pengalaman lebih dari satu dekade, kami berkomitmen memberikan layanan antar jemput langsung sesuai alamat
                        yang nyaman, efisien, dan tepat waktu. Kami melayani rute <strong>Malang – Gresik – Lamongan – Tuban (PP)</strong> dengan armada 
                        Toyota Hiace dan Innova Reborn yang selalu prima, didukung sopir berpengalaman untuk memastikan perjalanan yang aman 
                        dan menyenangkan. </p>
                </div>

            </div>

        </div>

    </section><!-- /About Section -->
 
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

    <!-- Layanan Section -->
    <section id="team" class="team section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Layanan Kami</h2>
            <p>Kami menyediakan layanan transportasi dan logistik yang aman, nyaman, dan terpercaya.</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/team/team-1.jpg?v=2" class="img-fluid"
                                alt=""></div>
                        <div class="member-info">
                            <h4>Travel</h4>
                            <p>Layanan travel kami menyediakan transportasi antar-jemput dengan armada yang nyaman, siap mengantar Anda dengan aman.</p>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/team/team-2.jpg?v=2" class="img-fluid"
                                alt=""></div>
                        <div class="member-info">
                            <h4>Kirim Paket/Barang</h4>
                            <p>Kami juga melayani pengiriman paket. Layanan ini memastikan paket Anda sampai tujuan dengan cepat, aman, dan terpercaya.</p>
                        </div>
                    </div>
                </div><!-- End Team Member -->
            </div>

        </div>

    </section><!-- /Layanan Section -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Jadwal Perjalanan</h2>
            <p>Jadwal Perjalanan Tersedia Untuk Anda</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">
    
              <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="100">
                <div class="pricing-item"  style="background: linear-gradient(rgba(255, 255, 255, 1), rgba(124, 126, 209, 0.7)),url('assets/img/jadwal-bg.jpeg'); background-size: cover; background-position: center;"">
                  <h3>Tuban - Malang</h3>
                  <h4><sup>Rp</sup>150.000<span> / <del>200.000</del></span></h4>
                  <ul>
                    <li><i class="bi bi-check"></i> <span>Pemberangkatan pukul 07:00 - 08:00 WIB</span></li>
                    <li><i class="bi bi-check"></i> <span>Penjemputan area Malang yaitu Rampal, Sulfat, Sawojajar, Suhat, Pakis, Wendit, Arjosari</span></li>
                    <li><i class="bi bi-check"></i> <span>Kapasitas Armada 8-12 penumpang</span></li>
                  </ul>
                  <a href="{{ url('/sign-in') }}" class="buy-btn">Booking</a>
                </div>
              </div><!-- End Pricing Item -->
    
              <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="100">
                <div class="pricing-item"  style="background: linear-gradient(rgba(255, 255, 255, 1), rgba(124, 126, 209, 0.7)),url('assets/img/jadwal-bg.jpeg'); background-size: cover; background-position: center;"">
                  <h3>Lamongan - Malang</h3>
                  <h4><sup>Rp</sup>145.000<span> / <del>200.000</del></span></h4>
                  <ul>
                    <li><i class="bi bi-check"></i> <span>Pemberangkatan pukul 07:00 - 08:00 WIB</span></li>
                    <li><i class="bi bi-check"></i> <span>Penjemputan area Malang yaitu Rampal, Sulfat, Sawojajar, Suhat, Pakis, Wendit, Arjosari</span></li>
                    <li><i class="bi bi-check"></i> <span>Kapasitas Armada 8-12 penumpang</span></li>
                  </ul>
                  <a href="{{ url('/sign-in') }}" class="buy-btn">Booking</a>
                </div>
              </div><!-- End Pricing Item -->
    
              <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="100">
                <div class="pricing-item"  style="background: linear-gradient(rgba(255, 255, 255, 1), rgba(124, 126, 209, 0.7)),url('assets/img/jadwal-bg.jpeg'); background-size: cover; background-position: center;"">
                  <h3>Gresik - Malang</h3>
                  <h4><sup>Rp</sup>130.000<span> / <del>200.000</del></span></h4>
                  <ul>
                    <li><i class="bi bi-check"></i> <span>Pemberangkatan pukul 07:00 - 08:00 WIB</span></li>
                    <li><i class="bi bi-check"></i> <span>Penjemputan area Malang yaitu Rampal, Sulfat, Sawojajar, Suhat, Pakis, Wendit, Arjosari</span></li>
                    <li><i class="bi bi-check"></i> <span>Kapasitas Armada 8-12 penumpang</span></li>
                  </ul>
                  <a href="{{ url('/sign-in') }}" class="buy-btn">Booking</a>
                </div>
              </div><!-- End Pricing Item -->
    
              <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="100">
                <div class="pricing-item"  style="background: linear-gradient(rgba(255, 255, 255, 1), rgba(124, 126, 209, 0.7)),url('assets/img/jadwal-bg.jpeg'); background-size: cover; background-position: center;"">
                  <h3>Malang - Tujuan</h3>
                  <h4><sup>Rp</sup>130.000<span> / <del>200.000</del></span></h4>
                  <ul>
                    <li><i class="bi bi-check"></i> <span>Pemberangkatan pukul 07:00 - 08:00 WIB</span></li>
                    <li><i class="bi bi-check"></i> <span>Penjemputan area Malang yaitu Rampal, Sulfat, Sawojajar, Suhat, Pakis, Wendit, Arjosari</span></li>
                    <li><i class="bi bi-check"></i> <span>Kapasitas Armada 8-12 penumpang</span></li>
                  </ul>
                  <a href="{{ url('/sign-in') }}" class="buy-btn">Booking</a>
                </div>
              </div><!-- End Pricing Item -->
    
            </div>
    
          </div>

    </section><!-- /Pricing Section -->

    <!-- Faq 2 Section -->
    <section id="faq-2" class="faq-2 section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Frequently Asked Questions</h2>
            <p>Temukan jawaban dari pertanyaan yang sering diajukan tentang layanan travel kami. 
                Jika masih ada hal yang ingin ditanyakan, silakan hubungi kami.</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-10">

                    <div class="faq-container">

                        <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Apa saja rute perjalanan yang dilayani oleh Banyu Bancar?</h3>
                            <div class="faq-content">
                                <p>Kami melayani rute perjalanan Malang – Gresik – Lamongan – Tuban (PP) dengan layanan antar jemput langsung sesuai alamat.<p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Jenis kendaraan apa yang digunakan untuk perjalanan?</h3>
                            <div class="faq-content">
                                <p>Kami menggunakan armada yang nyaman dan berkualitas, yaitu Toyota Hiace dan Innova Reborn, yang selalu dalam kondisi prima 
                                    untuk memastikan perjalanan yang aman dan menyenangkan.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Bagaimana cara melakukan pemesanan tiket?</h3>
                            <div class="faq-content">
                                <p>Anda dapat memesan tiket melalui website kami atau langsung menghubungi layanan pelanggan. Cukup isi formulir 
                                    pemesanan, unggah bukti transfer, dan konfirmasi pemesanan. Setelah pembayaran diverifikasi, tiket dapat dicetak.
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Apakah ada batasan jumlah bagasi yang diperbolehkan?<h3>
                            <div class="faq-content">
                                <p>Setiap penumpang diperbolehkan membawa bagasi dengan ukuran dan berat yang wajar. Jika melebihi batas wajar, 
                                    akan dikenakan biaya tambahan. Untuk informasi lebih lanjut mengenai batasan bagasi dan biaya tambahan, 
                                    silakan menghubungi pihak travel.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Apakah tersedia layanan perjalanan di luar rute utama?</h3>
                            <div class="faq-content">
                                <p>Saat ini, kami hanya melayani rute utama Malang – Gresik – Lamongan – Tuban (PP). Namun, untuk kebutuhan perjalanan 
                                    khusus atau charter, Anda dapat menghubungi pihak travel untuk informasi lebih lanjut mengenai ketersediaan 
                                    dan tarif layanan tambahan.
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                    </div>

                </div>

            </div>

        </div>

    </section><!-- /Faq 2 Section -->

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
    </section>

    </section><!-- /Contact Section -->

</main>
@endsection