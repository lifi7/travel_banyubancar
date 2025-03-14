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
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Baloo+2&display=swap");
        $main-green: #79dd09 !default;
        $main-green-rgb-015: rgba(121, 221, 9, 0.1) !default;
        $main-yellow: #bdbb49 !default;
        $main-yellow-rgb-015: rgba(189, 187, 73, 0.1) !default;
        $main-red: #bd150b !default;
        $main-red-rgb-015: rgba(189, 21, 11, 0.1) !default;
        $main-blue: #0076bd !default;
        $main-blue-rgb-015: rgba(0, 118, 189, 0.1) !default;

        /* This pen */
        body {
            font-family: "Baloo 2", cursive;
            font-size: 16px;
            color: #ffffff;
            text-rendering: optimizeLegibility;
            font-weight: initial;
        }

        a,
        a:hover {
            text-decoration: none;
            transition: color 0.3s ease-in-out;
        }

        #pageHeaderTitle {
            margin: 2rem 0;
            text-transform: uppercase;
            text-align: center;
            font-size: 2.5rem;
        }

        /* Cards */
        .postcard {
            flex-wrap: wrap;
            display: flex;

            box-shadow: 0 4px 21px -12px rgba(0, 0, 0, 0.66);
            border-radius: 10px;
            margin: 0 0 2rem 0;
            overflow: hidden;
            position: relative;
            color: #ffffff;

            &.dark {
                background-color: #18151f;
            }

            &.light {
                background-color: #e1e5ea;
            }

            .t-dark {
                color: #18151f;
            }

            a {
                color: inherit;
            }

            h1,
            .h1 {
                margin-bottom: 0.5rem;
                font-weight: 500;
                line-height: 1.2;
            }

            .small {
                font-size: 80%;
            }

            .postcard__title {
                font-size: 1.75rem;
            }

            .postcard__img {
                max-height: 180px;
                width: 100%;
                object-fit: cover;
                position: relative;
            }

            .postcard__img_link {
                display: contents;
            }

            .postcard__bar {
                width: 50px;
                height: 10px;
                margin: 10px 0;
                border-radius: 5px;
                background-color: #424242;
                transition: width 0.2s ease;
            }

            .postcard__text {
                padding: 1.5rem;
                position: relative;
                display: flex;
                flex-direction: column;
            }

            .postcard__preview-txt {
                overflow: hidden;
                text-overflow: ellipsis;
                text-align: justify;
                height: 100%;
            }

            .postcard__tagbox {
                display: flex;
                flex-flow: row wrap;
                font-size: 14px;
                margin: 20px 0 0 0;
                padding: 0;
                justify-content: center;

                .tag__item {
                    display: inline-block;
                    background: rgba(83, 83, 83, 0.4);
                    border-radius: 3px;
                    padding: 2.5px 10px;
                    margin: 0 5px 5px 0;
                    cursor: default;
                    user-select: none;
                    transition: background-color 0.3s;

                    &:hover {
                        background: rgba(83, 83, 83, 0.8);
                    }
                }
            }

            &:before {
                content: "";
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                background-image: linear-gradient(-70deg, #424242, transparent 50%);
                opacity: 1;
                border-radius: 10px;
            }

            &:hover .postcard__bar {
                width: 100px;
            }
        }

        @media screen and (min-width: 769px) {
            .postcard {
                flex-wrap: inherit;

                .postcard__title {
                    font-size: 2rem;
                }

                .postcard__tagbox {
                    justify-content: start;
                }

                .postcard__img {
                    max-width: 300px;
                    max-height: 100%;
                    transition: transform 0.3s ease;
                }

                .postcard__text {
                    padding: 3rem;
                    width: 100%;
                }

                .media.postcard__text:before {
                    content: "";
                    position: absolute;
                    display: block;
                    background: #18151f;
                    top: -20%;
                    height: 130%;
                    width: 55px;
                }

                &:hover .postcard__img {
                    transform: scale(1.1);
                }

                &:nth-child(2n+1) {
                    flex-direction: row;
                }

                &:nth-child(2n+0) {
                    flex-direction: row-reverse;
                }

                &:nth-child(2n+1) .postcard__text::before {
                    left: -12px !important;
                    transform: rotate(4deg);
                }

                &:nth-child(2n+0) .postcard__text::before {
                    right: -12px !important;
                    transform: rotate(-4deg);
                }
            }
        }

        @media screen and (min-width: 1024px) {
            .postcard__text {
                padding: 2rem 3.5rem;
            }

            .postcard__text:before {
                content: "";
                position: absolute;
                display: block;

                top: -20%;
                height: 130%;
                width: 55px;
            }

            .postcard.dark {
                .postcard__text:before {
                    background: #18151f;
                }
            }

            .postcard.light {
                .postcard__text:before {
                    background: #e1e5ea;
                }
            }
        }

        /* COLORS */
        .postcard .postcard__tagbox .green.play:hover {
            background: $main-green;
            color: black;
        }

        .green .postcard__title:hover {
            color: $main-green;
        }

        .green .postcard__bar {
            background-color: $main-green;
        }

        .green::before {
            background-image: linear-gradient(-30deg,
                    $main-green-rgb-015,
                    transparent 50%);
        }

        .green:nth-child(2n)::before {
            background-image: linear-gradient(30deg, $main-green-rgb-015, transparent 50%);
        }

        .postcard .postcard__tagbox .blue.play:hover {
            background: $main-blue;
        }

        .blue .postcard__title:hover {
            color: $main-blue;
        }

        .blue .postcard__bar {
            background-color: $main-blue;
        }

        .blue::before {
            background-image: linear-gradient(-30deg, $main-blue-rgb-015, transparent 50%);
        }

        .blue:nth-child(2n)::before {
            background-image: linear-gradient(30deg, $main-blue-rgb-015, transparent 50%);
        }

        .postcard .postcard__tagbox .red.play:hover {
            background: $main-red;
        }

        .red .postcard__title:hover {
            color: $main-red;
        }

        .red .postcard__bar {
            background-color: $main-red;
        }

        .red::before {
            background-image: linear-gradient(-30deg, $main-red-rgb-015, transparent 50%);
        }

        .red:nth-child(2n)::before {
            background-image: linear-gradient(30deg, $main-red-rgb-015, transparent 50%);
        }

        .postcard .postcard__tagbox .yellow.play:hover {
            background: $main-yellow;
            color: black;
        }

        .yellow .postcard__title:hover {
            color: $main-yellow;
        }

        .yellow .postcard__bar {
            background-color: $main-yellow;
        }

        .yellow::before {
            background-image: linear-gradient(-30deg,
                    $main-yellow-rgb-015,
                    transparent 50%);
        }

        .yellow:nth-child(2n)::before {
            background-image: linear-gradient(30deg,
                    $main-yellow-rgb-015,
                    transparent 50%);
        }

        @media screen and (min-width: 769px) {
            .green::before {
                background-image: linear-gradient(-80deg,
                        $main-green-rgb-015,
                        transparent 50%);
            }

            .green:nth-child(2n)::before {
                background-image: linear-gradient(80deg,
                        $main-green-rgb-015,
                        transparent 50%);
            }

            .blue::before {
                background-image: linear-gradient(-80deg,
                        $main-blue-rgb-015,
                        transparent 50%);
            }

            .blue:nth-child(2n)::before {
                background-image: linear-gradient(80deg, $main-blue-rgb-015, transparent 50%);
            }

            .red::before {
                background-image: linear-gradient(-80deg, $main-red-rgb-015, transparent 50%);
            }

            .red:nth-child(2n)::before {
                background-image: linear-gradient(80deg, $main-red-rgb-015, transparent 50%);
            }

            .yellow::before {
                background-image: linear-gradient(-80deg,
                        $main-yellow-rgb-015,
                        transparent 50%);
            }

            .yellow:nth-child(2n)::before {
                background-image: linear-gradient(80deg,
                        $main-yellow-rgb-015,
                        transparent 50%);
            }
        }
    </style>
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
                <h2>Berita</h2>
                <p>Penjelasan
                <p>
            </div><!-- End Section Title -->

            <div class="container">
                <section class="light">
                    <article class="postcard light blue">
                        <a class="postcard__img_link" href="#">
                            <img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title" />
                        </a>
                        <div class="postcard__text t-dark">
                            <h1 class="postcard__title blue"><a href="#">Podcast Title</a></h1>
                            <div class="postcard__subtitle small">
                                <time datetime="2020-05-25 12:00:00">
                                    <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                                </time>
                            </div>
                            <div class="postcard__bar"></div>
                            <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim,
                                commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti
                                tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto
                                quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum
                                quos!</div>
                            <ul class="postcard__tagbox">
                                <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                                <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                                <li class="tag__item play blue">
                                    <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <article class="postcard light red">
                        <a class="postcard__img_link" href="#">
                            <img class="postcard__img" src="https://picsum.photos/501/500" alt="Image Title" />
                        </a>
                        <div class="postcard__text t-dark">
                            <h1 class="postcard__title red"><a href="#">Podcast Title</a></h1>
                            <div class="postcard__subtitle small">
                                <time datetime="2020-05-25 12:00:00">
                                    <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                                </time>
                            </div>
                            <div class="postcard__bar"></div>
                            <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim,
                                commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti
                                tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto
                                quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum
                                quos!</div>
                            <ul class="postcard__tagbox">
                                <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                                <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                                <li class="tag__item play red">
                                    <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <article class="postcard light green">
                        <a class="postcard__img_link" href="#">
                            <img class="postcard__img" src="https://picsum.photos/500/501" alt="Image Title" />
                        </a>
                        <div class="postcard__text t-dark">
                            <h1 class="postcard__title green"><a href="#">Podcast Title</a></h1>
                            <div class="postcard__subtitle small">
                                <time datetime="2020-05-25 12:00:00">
                                    <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                                </time>
                            </div>
                            <div class="postcard__bar"></div>
                            <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim,
                                commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti
                                tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto
                                quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum
                                quos!</div>
                            <ul class="postcard__tagbox">
                                <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                                <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                                <li class="tag__item play green">
                                    <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <article class="postcard light yellow">
                        <a class="postcard__img_link" href="#">
                            <img class="postcard__img" src="https://picsum.photos/501/501" alt="Image Title" />
                        </a>
                        <div class="postcard__text t-dark">
                            <h1 class="postcard__title yellow"><a href="#">Podcast Title</a></h1>
                            <div class="postcard__subtitle small">
                                <time datetime="2020-05-25 12:00:00">
                                    <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                                </time>
                            </div>
                            <div class="postcard__bar"></div>
                            <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim,
                                commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti
                                tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto
                                quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum
                                quos!</div>
                            <ul class="postcard__tagbox">
                                <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                                <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                                <li class="tag__item play yellow">
                                    <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                                </li>
                            </ul>
                        </div>
                    </article>
                </section>
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
