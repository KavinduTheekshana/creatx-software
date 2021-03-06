<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreatX Software | We Build Your Imagination</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <meta name="description" content="Azino Charity HTML Template">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/azino-icons.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/main.css">

</head>

<body>

    <div class="preloader">
        <img class="preloader__image" src="assets/images/loader.png" alt="">
    </div>
    <div class="page-wrapper">

        <header class="main-header">
            <div class="container">
                <div class="inner-container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-2">
                            <div class="logo-box">
                                <a href="/" aria-label="logo image"><img src="assets/images/logo-dark.png" width="180" alt=""></a>
                                <span class="fa fa-bars mobile-nav__toggler"></span>
                            </div><!-- /.logo-box -->
                        </div><!-- /.col-sm-12 -->
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-10 d-none d-md-none d-lg-none d-xl-block">
                            <div class="main-header__top">
                                <p>Welcome to CreatX Software - We Build Your Imagination</p>
                                <div class="main-header__social">
                                    <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/creatxsoftware" target="_blank" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                                </div><!-- /.main-header__social -->
                            </div><!-- /.main-header__top -->
                            <nav class="main-menu dynamic-radius">
                                <ul class="main-menu__list">
                                    <li>
                                        <a href="/">Home</a>
                                    </li>

                                    <li>
                                        <a href="services">Services</a>
                                    </li>

                                    <li>
                                        <a href="projects">Projects</a>
                                    </li>

                                    <li>
                                        <a href="hosting">Hosting</a>
                                    </li>


                                    <li>
                                        <a href="about">About Us</a>
                                    </li>

                                    <li>
                                        <a href="contact">Contact</a>
                                    </li>

                                    <li class="search-btn search-toggler">
                                        <a href="#"><i class="azino-icon-magnifying-glass"></i></a>
                                    </li>
                                </ul>
                                <!-- /.main-menu__list -->
                            </nav>
                            <!-- /.main-menu -->
                            <div class="main-header__info">
                                <ul class="list-unstyled main-header__info-list">
                                    <li>
                                        <i class="azino-icon-email"></i>
                                        <a href="info@creatxsoftware.com">info@creatxsoftware.com</a>
                                    </li>
                                    <li>
                                        <i class="azino-icon-telephone"></i>
                                        <a href="tel:666-888-0000">071 542 1423</a>
                                    </li>
                                </ul><!-- /.list-unstyled -->
                                <div class="main-header__language">
                                    <div class="main-header__language-image">
                                        <img src="assets/images/resources/flag-1-1.jpg" alt="">
                                    </div>
                                    <!-- <label for="language-header" class="sr-only">select language</label>
                                    <select class="selectpicker" id="language-header">
                                        <option value="english">Sri Lanka</option>
                                        <option value="arabic">Arabic</option>
                                    </select> -->
                                </div>
                                <!-- /.main-header__language -->
                            </div><!-- /.main-header__info -->
                        </div><!-- /.col-sm-12 -->
                    </div><!-- /.row -->
                </div><!-- /.inner-container -->
            </div><!-- /.container -->
        </header><!-- /.main-header -->

        <div class="stricky-header stricked-menu">
    <div class="container">
        <div class="logo-box">
            <a href="/"><img src="assets/images/logo-light.png" width="180" alt=""></a>
        </div><!-- /.logo-box -->
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.container -->
</div><!-- /.stricky-header -->


        @yield('content')


        <section class="site-footer">
            <div class="main-footer pt-142 pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-widget mb-40 footer-widget__about">
                                <a href="/" aria-label="logo image">
                                    <img src="assets/images/logo-light.png" class="footer-widget__logo" width="180" alt="">
                                </a>
                                <p>A smart and professional solution
                                    for all SaaS, software and tech
                                    companies & digital agencies.</p>
                                <ul class="list-unstyled footer-widget__contact">
                                    <li><a href="#"><i class="azino-icon-telephone"></i>+94 71 542 14 23</a></li>
                                    <li><a href="#"><i class="azino-icon-email"></i>info@creatxsoftware.com</a></li>
                                    <li><a href="#"><i class="azino-icon-pin"></i>4/6B Ananda Mithree MW, Maharagama</a>
                                    </li>
                                </ul><!-- /.footer-widget__contact -->
                            </div><!-- /.footer-widget footer-widget__about -->
                        </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-widget footer-widget__link mb-40">
                                <h3 class="footer-widget__title">Explore</h3><!-- /.footer-widget__title -->
                                <ul class="list-unstyled footer-widget__blog">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="services">Services</a></li>
                                    <li><a href="projects">Projects</a></li>
                                    <li><a href="hosting">Hosting</a></li>
                                    <li><a href="about">About</a></li>
                                    <li><a href="contact">Contact</a></li>
                                </ul><!-- /.footer-widget__link-list -->
                            </div><!-- /.footer-widget footer-widget__link -->
                        </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-widget mb-40 footer-widget__blog">
                                <h3 class="footer-widget__title">Services</h3><!-- /.footer-widget__title -->
                                <ul class="list-unstyled footer-widget__blog">
                                    <li><a href="services">Web Development</a></li>
                                    <li><a href="services">Mobile Application</a></li>
                                    <li><a href="services">Enterprise Solutions</a></li>
                                    <li><a href="services">IOT Solutions</a></li>
                                    <li><a href="services">UI/UX Design</a></li>
                                    <li><a href="services">Source Code Recovery</a></li>
                                    <li><a href="services">Hosting</a></li>
                                    <li><a href="services">Graphic Design</a></li>


                                </ul><!-- /.footer-widget__blog -->
                            </div><!-- /.footer-widget footer-widget__blog -->
                        </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-widget mb-40 footer-widget__newsletter">
                                <h3 class="footer-widget__title">Newletter</h3><!-- /.footer-widget__title -->
                                <p>Signup now to get daily latest news
                                    & updates from us</p>
                                <form action="javascript:void(0)" method="post" id="contact-form" class="footer-widget__newsletter-form mc-form">
                                    <label for="mc-email" class="sr-only">Email Address</label>
                                    <input type="email" name="email" id="email" class="dynamic-radius" placeholder="Email address">
                                    <div class="footer-widget__newsletter-btn-wrap d-flex justify-content-end">
                                        <button type="submit" id="submit" name="submit" class="thm-btn dynamic-radius">Subscribe Now</button>
                                    </div><!-- /.footer-widget__newsletter-btn-wrap -->
                                    <!-- /.thm-btn -->
                                </form><!-- /.footer-widget__newsletter-form -->
                                <br>
                                <div id="progress" class="mc-form__response d-none"><span>Your Email Send Sucessfully.</span></div><!-- /.mc-form__response -->
                                <div id="progresserror" class="mc-form__response d-none"><span>Error</span></div><!-- /.mc-form__response -->

                                <script type="text/javascript">
                                    $('#contact-form').on('submit', function(event) {
                                 
                                        event.preventDefault();
                                        email = $('#email').val();
                                 
                                        $.ajax({
                                            url: "/newslettersubmit",
                                            type: "POST",
                                            data: {
                                                "_token": "{{ csrf_token() }}",
                                                email: email,
                                            },
                                            success: function(response) {
                                                $('#progress').removeClass("d-none");
                                                $('#progresserror').addClass("d-none");
                                                $('#email').val('');
                                            },
                                            error: function(response) {
                                                $('#progresserror').removeClass("d-none");
                                                $('#progress').addClass("d-none");
                                            }
                                        });
                                    });
                                </script>



                            </div><!-- /.footer-widget footer-widget__newsletter -->
                        </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.main-footer -->
            <div class="footer-bottom">
                <div class="container">
                    <span class="scroll-to-top scroll-to-target" data-target="html"><i class="far fa-angle-up"></i></span>
                    <p>© Copyright 2020 by creatxsoftware.com</p>
                    <div class="footer-social">
                        <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.facebook.com/creatxsoftware" target="_blank" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                        <a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                    </div><!-- /.footer-social -->
                </div><!-- /.container -->
            </div><!-- /.footer-bottom -->
        </section><!-- /.site-footer -->

    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="far fa-times"></i></span>

            <div class="logo-box">
                <a href="/" aria-label="logo image"><img src="assets/images/logo-light.png" width="121" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="azino-icon-email"></i>
                    <a href="info@creatxsoftware.com">info@creatxsoftware.com</a>
                </li>
                <li>
                    <i class="azino-icon-telephone"></i>
                    <a href="tel:666-888-0000">071 542 1423</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__language">
                    <img src="assets/images/resources/flag-1-1.jpg" alt="">

                </div><!-- /.mobile-nav__language -->
                <div class="mobile-nav__social">
                    <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.facebook.com/creatxsoftware" target="_blank" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                    <a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>

    <!-- template js -->
    <script src="assets/js/theme.js"></script>




</body>

</html>