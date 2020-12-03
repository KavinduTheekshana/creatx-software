@extends('layouts.header')

@section('content')

        <div class="stricky-header stricked-menu">
            <div class="container">
                <div class="logo-box">
                    <a href="index.html"><img src="assets/images/logo-light.png" width="180" alt=""></a>
                </div><!-- /.logo-box -->
                <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
            </div><!-- /.container -->
        </div><!-- /.stricky-header -->

        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
    "effect": "fade",
    "autoplay": {
        "delay": 5000
    }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/main-slider/slider-1-1.jpg);"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-xl-7 col-lg-12 text-right">
                                    <p>We Are CreatX</p>
                                    <h2>We'll Code. <br>We'll Build. <br> You'll Relax.</h2>
                                    <a href="#" data-target=".donate-options"
                                        class="scroll-to-target thm-btn dynamic-radius">Start Donating</a>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.col-lg-7 text-right -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/main-slider/slider-1-6.jpg);"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-xl-8 col-lg-12 text-right">
                                    <p>Modern. Professional. Reliable.</p>
                                    <h2>Strong & <br> Certified <br> IT Solutions</h2>
                                    <a href="#" data-target=".donate-options"
                                        class="scroll-to-target thm-btn dynamic-radius">Start Donating</a>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.col-lg-7 text-right -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/main-slider/slider-1-5.jpg);"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-7 text-right">
                                    <p>Next Generation</p>
                                    <h2>High Quality <br> Best Hosting <br> Serivce</h2>
                                    <a href="#" data-target=".donate-options"
                                        class="scroll-to-target thm-btn dynamic-radius">Start Donating</a>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.col-lg-7 text-right -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/main-slider/slider-1-4.jpg);"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-7 text-right">
                                    <p>CreatX Support Platform</p>
                                    <h2>Smooth <br> Customer <br> Experiences</h2>
                                    <a href="#" data-target=".donate-options"
                                        class="scroll-to-target thm-btn dynamic-radius">Start Donating</a>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.col-lg-7 text-right -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.swiper-slide -->
                </div><!-- /.swiper-wrapper -->
                <div class="swiper-pagination" id="main-slider-pagination"></div>
            </div><!-- /.swiper-container thm-swiper__slider -->
        </section><!-- /.main-slider -->

        <section class="video-card-two">
            <div class="container wow fadeInUp" data-wow-duration="1500ms">
                <div class="inner-container dynamic-radius"
                    style="background-image: url(assets/images/shapes/video-bg-1-1.png);">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="video-card-two__box">
                                <img src="assets/images/resources/video-1-2.jpg" height="251px" alt="">
                                <!-- <a href="https://www.youtube.com/watch?v=-2e_pjdYTZw" class="video-card-two__box-btn video-popup"><i class="fa fa-play"></i></a> -->
                                <!-- /.video-card-two__box-btn -->
                            </div><!-- /.video-card-two__box -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-lg-4">
                            <h3>Managed IT Services Customized by Industries</h3>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-5">
                            <p>We leverage software development to grow your venture, scale your impact, and propel your
                                mission forward.</p>
                        </div><!-- /.col-lg-5 -->
                    </div><!-- /.row -->
                </div><!-- /.inner-container -->
            </div><!-- /.container -->
        </section><!-- /.video-card-two -->

        <section class="service-one pt-120 pb-90"
            style="background-image: url(assets/images/backgrounds/service-hand-bg-1-3.png);">
            <div class="container">
                <img src="assets/images/shapes/service-line-1-1.png" alt="" class="service-one__shape-1">
                <div class="block-title">
                    <p style="color: #fcad30;"><img src="assets/images/shapes/heart-2-1.png" width="30" alt="">Why
                        CreatX Software</p>
                    <h3>Our Software Development Process</h3>
                </div><!-- /.block-title -->
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="service-one__box">
                            <div class="service-one__icon background-secondary">
                                <div class="service-one__icon-inner">
                                    <img src="assets/images/icon/sketch.svg" width="60px" alt="">
                                    <!-- <i class="azino-icon-water-bottle"></i> -->
                                </div><!-- /.service-one__icon-inner -->
                            </div><!-- /.service-one__icon -->
                            <h3><a href="#">Planning</a></h3>
                            <p>Understanding what you want out of your site and how do you plant to implement it.</p>
                        </div><!-- /.service-one__box -->
                    </div><!-- /.col-md-6 col-lg-3 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="service-one__box">
                            <div class="service-one__icon background-base">
                                <div class="service-one__icon-inner">
                                    <img src="assets/images/icon/vector.svg" width="60px" alt="">
                                </div><!-- /.service-one__icon-inner -->
                            </div><!-- /.service-one__icon -->
                            <h3><a href="#">Design</a></h3>
                            <p>We will Create a beautiful, affordable website design for your creative marketing project
                            </p>
                        </div><!-- /.service-one__box -->
                    </div><!-- /.col-md-6 col-lg-3 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="service-one__box ">
                            <div class="service-one__icon background-primary">
                                <div class="service-one__icon-inner">
                                    <img src="assets/images/icon/seo.svg" width="60px" alt="">
                                </div><!-- /.service-one__icon-inner -->
                            </div><!-- /.service-one__icon -->
                            <h3><a href="#">Development</a></h3>
                            <p>We develop content management systems for clients who need more than just the basics</p>
                        </div><!-- /.service-one__box -->
                    </div><!-- /.col-md-6 col-lg-3 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="service-one__box">
                            <div class="service-one__icon background-special">
                                <div class="service-one__icon-inner">
                                    <img src="assets/images/icon/launch.svg" width="60px" alt="">
                                </div><!-- /.service-one__icon-inner -->
                            </div><!-- /.service-one__icon -->
                            <h3><a href="#">Launch</a></h3>
                            <p>After successful testing the product is delivered / deployed to the customer for their
                                use</p>
                        </div><!-- /.service-one__box -->
                    </div><!-- /.col-md-6 col-lg-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-one -->




        <section class="about-counter pt-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="block-title">
                            <p><img src="assets/images/shapes/heart-2-1.png" width="30" alt="">Your Workforce</p>
                            <h3>Custom Software Development
                                for Cloud and SaaS</h3>
                        </div><!-- /.block-title -->
                        <p class="about-counter__text">CreatX is a first-class customized software development and
                            quality assurance company that can provide customers with complete world-class software
                            solutions on various technology platforms. We have developed hundreds of successful software
                            projects, which have brought higher business standards and success to our customers.</p>
                        <!-- <ul class="list-unstyled ul-list-one">
                            <li>Nsectetur cing elit.</li>
                            <li>Suspe ndisse suscipit sagittis leo.</li>
                            <li>Entum estibulum dignissim posuere.</li>
                        </ul> -->
                        <!-- /.list-unstyled list-style-one -->
                        <!-- <div class="about-counter__count">
                            <h3 class="odometer" data-count="886">00</h3>
                            <p>Donation campaigns <br> are running</p>
                        </div> -->
                        <!-- /.about-counter__count -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6 ">
                        <div class="about-counter__image clearfix wow fadeInRight" data-wow-duration="1500ms">
                            <!-- <div class="about-counter__image-content">
                                <img src="assets/images/shapes/about-count-heart-1-1.png" alt="">
                                <p>We’re here to support you every step of the way.</p>
                            </div> -->
                            <!-- /.about-counter__image-content -->
                            <img src="assets/images/resources/about-counter-1-1.jpg"
                                style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); margin-bottom: 20px;"
                                height="692px" alt="" class="float-left">
                        </div><!-- /.about-counter__image -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.containerr -->
        </section><!-- /.about-counter -->

        <section class="event-home-two pb-120">
            <div class="container">
                <div class="row align-items-start align-items-md-center flex-column flex-md-row mb-80 pt-80">
                    <div class="col-lg-7">
                        <div class="block-title">
                            <p><img src="assets/images/shapes/heart-2-1.png" width="30" alt="">Meet our Services</p>
                            <h3>What You Get With Us.</h3>
                        </div><!-- /.block-title -->
                    </div><!-- /.col-lg-7 -->
                    <!-- <div class="col-lg-5 d-flex">
                        <div class="my-auto">
                            <p class="block-text pr-10 mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.
                                Have
                                you done google research which works all the time. </p>
                        </div>
                    </div> -->
                    <!-- /.col-lg-5 -->
                </div><!-- /.row -->
               
                <div class="news-3-col">
                    <div class="blog-card">
                        <div class="blog-card__inner">
                            <img src="assets/images/icon/seo-2.svg" width="80px" style="padding-top: 30px; display: block; margin-left: auto; margin-right: auto;" alt="">
                            <div class="blog-card__content">
                              <br>
                                <h3><a href="news-details.html">Web Development</a></h3>
                                <p style="padding-left: 40px; padding-right: 40px;">As a leading web development company in Sri Lanka, CreatX software has the expertise, experience and the ability to implement modern technologies with promising web solutions.</p>
                                <!-- /.blog-card__more -->
                            </div><!-- /.blog-card__content -->
                        </div><!-- /.blog-card__inner -->
                    </div><!-- /.blog-card -->

                    <div class="blog-card">
                        <div class="blog-card__inner">
                            <img src="assets/images/icon/application-development.svg" width="80px" style="padding-top: 30px; display: block; margin-left: auto; margin-right: auto;" alt="">
                            <div class="blog-card__content">
                              <br>
                                <h3><a href="news-details.html">Mobile Application</a></h3>
                                <p style="padding-left: 40px; padding-right: 40px;">CreateX develops mobile applications across devices and platforms with simple UI designs according to world accepted UI design standards for easier use, for consumer‑facing and corporate environments.</p>
                                <!-- /.blog-card__more -->
                            </div><!-- /.blog-card__content -->
                        </div><!-- /.blog-card__inner -->
                    </div><!-- /.blog-card -->

                    <div class="blog-card">
                        <div class="blog-card__inner">
                            <img src="assets/images/icon/enterprise_black.svg" width="80px" style="padding-top: 30px; display: block; margin-left: auto; margin-right: auto;" alt="">
                            <div class="blog-card__content">
                              <br>
                                <h3><a href="news-details.html">Enterprise Solutions</a></h3>
                                <p style="padding-left: 40px; padding-right: 40px;">CreateX provides enterprise applications, solutions with a strategic technical approach and a wide range of collaborative functions, thereby improving enterprise productivity.</p>
                                <!-- /.blog-card__more -->
                            </div><!-- /.blog-card__content -->
                        </div><!-- /.blog-card__inner -->
                    </div><!-- /.blog-card -->

                
              
           

                </div><!-- /.news-3-col -->



                <div class="cause-card__bottom" style="float: right; margin-top: 20px;">
                    <a href="services" class="thm-btn2 dynamic-radius">More Services</a>
                </div><!-- /.cause-card__bottom -->


            </div><!-- /.container -->
        </section><!-- /.event-home-two -->

        <section class="call-to-action-two">

            <div class="call-to-action-two__bg"
                style="background-image: url(assets/images/backgrounds/page-header-1-1.jpg);">
            </div>
            <!-- /.page-header__bg -->
            <div class="container pt-80 pb-80">
                <i class="call-to-action-two__icon" style="background-color: #fcad30;">
                    <img src="assets/images/icon/target.svg" width="60px" alt="">
                </i>

                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="block-title">
                            <p><img src="assets/images/shapes/heart-2-1.png" width="30" alt="">CreatX Mission...</p>
                            <h3>Relax, <br> enjoy your time, <br> We enjoy coding for you !</h3>
                        </div><!-- /.block-title -->

                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-5 d-flex justify-content-start justify-content-lg-end">
                        <!-- <div class="btn-wrap">
                            <a href="#" data-target=".donate-options" class="scroll-to-target thm-btn dynamic-radius">Start
                                Donating</a>
                        </div> -->
                        <!-- /.btn-wrap -->
                    </div><!-- /.col-lg-6 d-flex justify-content-end -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.call-to-action-two -->



        <section class="causes-page causes-home pt-120 pb-120"
            style="background-image: url(assets/images/shapes/testimonials-map-1-1.png);">
            <div class="container">
                <div class="row align-items-start align-items-md-center flex-column flex-md-row mb-60">
                    <div class="col-lg-12">
                        <div class="block-title">
                            <p><img src="assets/images/shapes/heart-2-1.png" width="30" alt="">Industries</p>
                            <h3>Who We
                                Serve</h3>
                        </div><!-- /.block-title -->
                    </div><!-- /.col-lg-7 -->

                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="testimonials-one__single"
                            style="padding-left: 30px; padding-right: 30px; padding-bottom: 30px;">
                            <div class="price-one__single2">
                                <i style="background-color: #6f42c1;">
                                    <img src="assets/images/icon/statistics.svg" width="50px" alt="">
                                </i>
                            </div>
                            <!-- <div class="testimonials-one__image">
                                <img src="assets/images/resources/testimonial-1-2.jpg" alt="">
                            </div> -->
                            <!-- /.testimonials-one__image -->
                            <h4 style="margin-top: 20px;">Finance and Insurance</h4>
                            <br>
                            <p style="line-height: normal;">We've designed and deployed smart, custom-built technology
                                systems for financial and insurance industries. Syberry's products always meet the
                                highest security and quality standards.</p>
                        </div><!-- /.testimonials-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-3">
                        <div class="testimonials-one__single"
                            style="padding-left: 30px; padding-right: 30px; padding-bottom: 30px;">
                            <div class="price-one__single2">
                                <i style="background-color: #ed4b4b;">
                                    <img src="assets/images/icon/daily-health-app.svg" width="50px" alt="">
                                </i>
                            </div>
                            <!-- <div class="testimonials-one__image">
                                <img src="assets/images/resources/testimonial-1-2.jpg" alt="">
                            </div> -->
                            <!-- /.testimonials-one__image -->
                            <h4 style="margin-top: 20px;">Healthcare</h4>
                            <br>
                            <p style="line-height: normal;">Our efficiency solutions for healthcare and life sciences
                                organizations, including hospitals and pharmaceutical companies, meet rigorous
                                compliance standards like HIPAA and other certifications.</p>
                        </div><!-- /.testimonials-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-3">
                        <div class="testimonials-one__single"
                            style="padding-left: 30px; padding-right: 30px; padding-bottom: 30px;">
                            <div class="price-one__single2">
                                <i style="background-color: #1d1c1c;">
                                    <img src="assets/images/icon/hook.svg" width="50px" alt="">
                                </i>
                            </div>
                            <!-- <div class="testimonials-one__image">
                                <img src="assets/images/resources/testimonial-1-2.jpg" alt="">
                            </div> -->
                            <!-- /.testimonials-one__image -->
                            <h4 style="margin-top: 20px;">Construction</h4>
                            <br>
                            <p style="line-height: normal;">Our custom
                                construction management solutions make it easy to track and manage the many facets of
                                construction projects, including single-family homes, large office
                                buildings, and everything in between.</p>
                        </div><!-- /.testimonials-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-3">
                        <div class="testimonials-one__single"
                            style="padding-left: 30px; padding-right: 30px; padding-bottom: 30px;">
                            <div class="price-one__single2">
                                <i style="background-color: #ffc107;;">
                                    <img src="assets/images/icon/wholesaler.svg" width="50px" alt="">
                                </i>
                            </div>
                            <!-- <div class="testimonials-one__image">
                                <img src="assets/images/resources/testimonial-1-2.jpg" alt="">
                            </div> -->
                            <!-- /.testimonials-one__image -->
                            <h4 style="margin-top: 20px;">Wholesale</h4>
                            <br>
                            <p style="line-height: normal;">The CRM systems we have designed and supported handle
                                comprehensive operations for wholesale and retail providers, invoicing,
                                tracking, shipping, and more. we can build a system that your existing processes.</p>
                        </div><!-- /.testimonials-one__single -->
                    </div><!-- /.col-lg-4 -->

                </div><!-- /.row -->


                <div class="row">
                    <div class="col-lg-3">
                        <div class="testimonials-one__single"
                            style="padding-left: 30px; padding-right: 30px; padding-bottom: 30px;">
                            <div class="price-one__single2">
                                <i style="background-color: #5366c2;">
                                    <img src="assets/images/icon/sun-energy.svg" width="50px" alt=""></i>
                            </div>
                            <!-- <div class="testimonials-one__image">
                                <img src="assets/images/resources/testimonial-1-2.jpg" alt="">
                            </div> -->
                            <!-- /.testimonials-one__image -->
                            <h4 style="margin-top: 20px;">Energy and Utilities</h4>
                            <br>
                            <p style="line-height: normal;">Syberry has considerable experience adding value in the
                                energy sector. Our team can deliver unique software services to oil and gas management,
                                monitoring, reporting, data analysis, and end-user operations companies.</p>
                        </div><!-- /.testimonials-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-3">
                        <div class="testimonials-one__single"
                            style="padding-left: 30px; padding-right: 30px; padding-bottom: 30px;">
                            <div class="price-one__single2">
                                <i style="background-color: #7e7e7e;">
                                    <img src="assets/images/icon/mortarboard.svg" width="50px" alt=""></i>
                            </div>
                            <!-- <div class="testimonials-one__image">
                                <img src="assets/images/resources/testimonial-1-2.jpg" alt="">
                            </div> -->
                            <!-- /.testimonials-one__image -->
                            <h4 style="margin-top: 20px;">Education</h4>
                            <br>
                            <p style="line-height: normal;">We're a little nerdy, so we know a lot about education. From
                                e-learning and training portals to certification software, a custom Syberry solution
                                will add value for your students and organization.
                                will add value for your students and organization.</p>
                        </div><!-- /.testimonials-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-3">
                        <div class="testimonials-one__single"
                            style="padding-left: 30px; padding-right: 30px; padding-bottom: 30px;">
                            <div class="price-one__single2">
                                <i style="background-color: #e83e8c;;">
                                    <img src="assets/images/icon/delivery.svg" width="50px" alt="">
                                </i>
                            </div>
                            <!-- <div class="testimonials-one__image">
                                <img src="assets/images/resources/testimonial-1-2.jpg" alt="">
                            </div> -->
                            <!-- /.testimonials-one__image -->
                            <h4 style="margin-top: 20px;">Transportation</h4>
                            <br>
                            <p style="line-height: normal;">From dispatching and job assignments to cargo tracking,
                                ordering automation, and performance monitoring, Syberry’s custom solutions and
                                applications add considerable value companies, working in the transportation and
                                logistics industry.</p>
                        </div><!-- /.testimonials-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-3">
                        <div class="testimonials-one__single"
                            style="padding-left: 30px; padding-right: 30px; padding-bottom: 30px;">
                            <div class="price-one__single2">
                                <i>
                                    <img src="assets/images/icon/confetti.svg" width="50px" alt=""></i>
                            </div>
                            <!-- <div class="testimonials-one__image">
                                <img src="assets/images/resources/testimonial-1-2.jpg" alt="">
                            </div> -->
                            <!-- /.testimonials-one__image -->
                            <h4 style="margin-top: 20px">Entertainment</h4>
                            <br>
                            <p style="line-height: normal;">We’ve designed, deployed, and maintained software solutions
                                to optimize processes in the entertainment industry, from the royalty tracking and
                                payments to engineering and implementation of video and audio streaming solutions.</p>
                        </div><!-- /.testimonials-one__single -->
                    </div><!-- /.col-lg-4 -->

                </div><!-- /.row -->


            </div><!-- /.container -->
        </section><!-- /.causes-page -->
















        <section class="donate-options pt-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="donate-options__content">
                            <div class="block-title">
                                <p><img src="assets/images/shapes/heart-2-1.png" width="30" alt="">Next Generation</p>
                                <h3>High Quality
                                    Website Hosting</h3>
                            </div><!-- /.block-title -->
                            <p>A company that provides cutting-edge web hosting, premium performance enhancement, & pro
                                support. </p>
                            <div class="donate-options__call">
                                <i class="azino-icon-telephone"></i>
                                <div class="donate-options__call-content">
                                    <p>Have any question about host? <br> <span>Call us now:</span> <a
                                            href="tel:+94 71 542 14 23">+94 71 542 14 23</a></p>
                                </div><!-- /.donate-options__call-content -->
                            </div><!-- /.donate-option__call -->

                        </div><!-- /.donate-options__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="donate-options__form wow fadeInUp" style="overflow: hidden; padding: 0px;">
                            <img src="assets/images/resources/about-counter-1-4.jpg"
                                style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"
                                height="592px" alt="">
                        </div>
                        <!-- <form action="#" class="donate-options__form wow fadeInUp" data-wow-duration="1500ms">
                            <h3 class="text-center">Start donating now</h3>
                            <p class="text-center">Lorem ipsum dolor sit amet, conse ctetur <br> adipisicing elit sed do
                                eiusm
                                od tempor ut labore.</p>
                            <label for="donate-name" class="sr-only"></label>
                            <input type="text" id="donate-name" placeholder="Your Name">
                            <label for="donate-amount" class="sr-only"></label>
                            <input type="text" value="" placeholder="Insert Value" id="donate-amount">
                            <ul id="donate-amount__predefined" class="list-unstyled">
                                <li><a href="#">$10</a></li>
                                <li><a href="#">$20</a></li>
                                <li><a href="#">$50</a></li>
                            </ul>
                            <button type="submit" class="thm-btn dynamic-radius">Donate Now</button>
                           
                        </form> -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.donate-options -->











        <section class="gallery-home-two pt-120 pb-120">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-7">
                        <div class="block-title">
                            <p><img src="assets/images/shapes/heart-2-1.png" width="30" alt="">Custom Software
                                Development for all Business</p>
                            <h3>Our Latest Projects</h3>
                        </div><!-- /.block-title -->
                    </div><!-- /.col-md-12 col-lg-6 -->
                    <div class="col-md-12 col-lg-5">


                        <div class="cause-card__bottom" style="float: right; margin-top: 20px; z-index: 11;">
                            <a style="z-index: 11;" href="projects" class="thm-btn2 dynamic-radius">All
                                Projects</a>
                        </div><!-- /.cause-card__bottom -->


                    </div><!-- /.col-md-12 col-lg-6 -->
                </div><!-- /.row -->

                <br><br>


                <img src="assets/images/shapes/gallery-dot-1-1.png" alt="" class="gallery-home-two__dots">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 4, "autoplay": { "delay": 5000 }, "breakpoints": {
            "0": {
                "spaceBetween": 0,
                "slidesPerView": 1
            },
            "425": {
                "spaceBetween": 0,
                "slidesPerView": 1
            },
            "575": {
                "spaceBetween": 30,
                "slidesPerView": 2
            },
            "767": {
                "spaceBetween": 30,
                "slidesPerView": 3
            },
            "991": {
                "spaceBetween": 30,
                "slidesPerView": 3
            },
            "1199": {
                "spaceBetween": 30,
                "slidesPerView": 4
            }
        }}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="gallery-card">
                                <img src="assets/images/gallery/gallery-2-1.jpg" width="297px" class="img-fluid" alt="">
                                <div class="gallery-content">
                                    <a href="assets/images/gallery/gallery-2-1.jpg" class="img-popup"
                                        aria-label="open image"><i class="fal fa-search"></i></a>
                                </div><!-- /.gallery-content -->
                            </div><!-- /.gallery-card -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="gallery-card">
                                <img src="assets/images/gallery/gallery-2-2.jpg" class="img-fluid" alt="">
                                <div class="gallery-content">
                                    <a href="assets/images/gallery/gallery-2-2.jpg" class="img-popup"
                                        aria-label="open image"><i class="fal fa-search"></i></a>
                                </div><!-- /.gallery-content -->
                            </div><!-- /.gallery-card -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="gallery-card">
                                <img src="assets/images/gallery/gallery-2-3.jpg" class="img-fluid" alt="">
                                <div class="gallery-content">
                                    <a href="assets/images/gallery/gallery-2-3.jpg" class="img-popup"
                                        aria-label="open image"><i class="fal fa-search"></i></a>
                                </div><!-- /.gallery-content -->
                            </div><!-- /.gallery-card -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="gallery-card">
                                <img src="assets/images/gallery/gallery-2-4.jpg" class="img-fluid" alt="">
                                <div class="gallery-content">
                                    <a href="assets/images/gallery/gallery-2-4.jpg" class="img-popup"
                                        aria-label="open image"><i class="fal fa-search"></i></a>
                                </div><!-- /.gallery-content -->
                            </div><!-- /.gallery-card -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="gallery-card">
                                <img src="assets/images/gallery/gallery-2-1.jpg" class="img-fluid" alt="">
                                <div class="gallery-content">
                                    <a href="assets/images/gallery/gallery-2-1.jpg" class="img-popup"
                                        aria-label="open image"><i class="fal fa-search"></i></a>
                                </div><!-- /.gallery-content -->
                            </div><!-- /.gallery-card -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="gallery-card">
                                <img src="assets/images/gallery/gallery-2-2.jpg" class="img-fluid" alt="">
                                <div class="gallery-content">
                                    <a href="assets/images/gallery/gallery-2-2.jpg" class="img-popup"
                                        aria-label="open image"><i class="fal fa-search"></i></a>
                                </div><!-- /.gallery-content -->
                            </div><!-- /.gallery-card -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="gallery-card">
                                <img src="assets/images/gallery/gallery-2-3.jpg" class="img-fluid" alt="">
                                <div class="gallery-content">
                                    <a href="assets/images/gallery/gallery-2-3.jpg" class="img-popup"
                                        aria-label="open image"><i class="fal fa-search"></i></a>
                                </div><!-- /.gallery-content -->
                            </div><!-- /.gallery-card -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="gallery-card">
                                <img src="assets/images/gallery/gallery-2-4.jpg" class="img-fluid" alt="">
                                <div class="gallery-content">
                                    <a href="assets/images/gallery/gallery-2-4.jpg" class="img-popup"
                                        aria-label="open image"><i class="fal fa-search"></i></a>
                                </div><!-- /.gallery-content -->
                            </div><!-- /.gallery-card -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="gallery-card">
                                <img src="assets/images/gallery/gallery-2-1.jpg" class="img-fluid" alt="">
                                <div class="gallery-content">
                                    <a href="assets/images/gallery/gallery-2-1.jpg" class="img-popup"
                                        aria-label="open image"><i class="fal fa-search"></i></a>
                                </div><!-- /.gallery-content -->
                            </div><!-- /.gallery-card -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="gallery-card">
                                <img src="assets/images/gallery/gallery-2-2.jpg" class="img-fluid" alt="">
                                <div class="gallery-content">
                                    <a href="assets/images/gallery/gallery-2-2.jpg" class="img-popup"
                                        aria-label="open image"><i class="fal fa-search"></i></a>
                                </div><!-- /.gallery-content -->
                            </div><!-- /.gallery-card -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="gallery-card">
                                <img src="assets/images/gallery/gallery-2-3.jpg" class="img-fluid" alt="">
                                <div class="gallery-content">
                                    <a href="assets/images/gallery/gallery-2-3.jpg" class="img-popup"
                                        aria-label="open image"><i class="fal fa-search"></i></a>
                                </div><!-- /.gallery-content -->
                            </div><!-- /.gallery-card -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="gallery-card">
                                <img src="assets/images/gallery/gallery-2-4.jpg" class="img-fluid" alt="">
                                <div class="gallery-content">
                                    <a href="assets/images/gallery/gallery-2-4.jpg" class="img-popup"
                                        aria-label="open image"><i class="fal fa-search"></i></a>
                                </div><!-- /.gallery-content -->
                            </div><!-- /.gallery-card -->
                        </div><!-- /.swiper-slide -->
                    </div><!-- /.swiper-wrapper -->


                </div><!-- /.swiper-container -->
            </div><!-- /.container -->
        </section><!-- /.gallery-home-two -->







        <section class="call-to-action">
            <div class="container wow fadeInLeft" data-wow-duration="1500ms">
                <div class="row align-items-center">
                    <div class="col-xl-9 col-lg-8">
                        <div class="call-to-action__content">
                            <div class="call-to-action__icon">
                                <i>
                                    <img src="assets/images/icon/curriculum-vitae.svg" width="80px" alt="">
                                </i>
                            </div><!-- /.call-to-action__icon -->
                            <h3>Looking For a Job? <br>
                                You’re at the Right Place!</h3>
                        </div><!-- /.call-to-action__content -->
                    </div><!-- /.col-lg-9 -->
                    <div
                        class="col-xl-3 col-lg-4 d-flex justify-content-start justify-content-md-center justify-content-xl-end justify-content-lg-end">
                        <a href="become-volunteer.html" class="thm-btn dynamic-radius">CreatX Careers</a>
                        <!-- /.thm-btn dynamic-radius -->
                    </div><!-- /.col-lg-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.call-to-action -->

        <div class="google-map__home">
            <iframe frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed/v1/place?q=place_id:EilBbmFuZGFtYWl0aHJlZSBSZCwgUGFubmlwaXRpeWEsIFNyaSBMYW5rYSIuKiwKFAoSCe2LQm5pUOI6ETSj-QYXd42QEhQKEgld783NSlDiOhGk9-a4c_7mdA&key=AIzaSyAcuvYDk04jY_H-o_EIcdr8vQi3Mz0eWnc"
                allowfullscreen></iframe>
            <!-- <iframe src="https://www.google.com/maps/embed/v1/place
           ?key=AIzaSyAcuvYDk04jY_H-o_EIcdr8vQi3Mz0eWnc
           &q=Eiffel+Tower,Paris+France" class="map__contact" allowfullscreen></iframe> -->
        </div><!-- /.google-map -->


        @endsection