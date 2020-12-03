@extends('layouts.header')

@section('content')

<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-1-6.jpg);"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2>About Us</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->



<section class="about-one pt-120 pb-40">
    <div class="container">

    </div><!-- /.container -->
    <div class="container">
        <div class="team-about__top ">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="block-title">
                        <p><img src="assets/images/shapes/heart-2-1.png" width="30" alt="">Make a Difference</p>
                        <h3>Who We Are</h3>
                    </div><!-- /.block-title -->
                </div><!-- /.col-md-12 col-lg-6 -->
                <div class="col-md-12 col-lg-8">
                    <p class="team-about__top-text">We do what we love to do, and we enjoy doing it more than anything. A fully completed, the bug-free product is the only satisfaction that makes us happy. We came together from various backgrounds and with years of experience with one vision: to bring a robust and quality approach to product innovation and software development by thoroughly understanding the business needs before building anything. <br>
                        <span style="color: #fcad30;"> We are developers.
                            We are designers.
                            It's our passion. </span> </p>
                </div><!-- /.col-md-12 col-lg-6 -->

            </div><!-- /.row -->
        </div><!-- /.team-about__top -->

    </div><!-- /.container -->

</section><!-- /.about-one -->






<section class="video-card">
    <div class="video-card__bg" style="background-image: url(assets/images/backgrounds/page-header-1-7.jpg);"></div>
    <!-- /.video-card__bg -->
    <div class="container text-center pt-120 pb-120">
        <p><img src="assets/images/shapes/heart-2-1.png" width="30" alt="">Experience, Rigour, and a User-Centric Approach.</p>
        <h3>Our Team = Your Team</h3>

    </div><!-- /.container -->
</section><!-- /.video-card -->




<section class="testimonials-one pt-120 pb-90">
    <div class="container">
        <div class="team-about__top">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-12">
                    <div class="block-title">
                        <p><img src="assets/images/shapes/heart-2-1.png" width="30" alt="">Technologies</p>
                        <h3>What Technologies are we use</h3>
                    </div><!-- /.block-title -->
                </div><!-- /.col-md-12 col-lg-6 -->

            </div><!-- /.row -->
        </div><!-- /.team-about__top -->



        <div class="client-carousel2 pb-50 ">
            <div class="container">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-6.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-8.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-9.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-10.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-11.png" alt="">
                        </div><!-- /.swiper-slide -->
                    </div><!-- /.swiper-wrapper -->
                </div><!-- /.thm-swiper__slider -->
            </div><!-- /.container -->
        </div>

        <div class="client-carousel2 pb-50 ">
            <div class="container">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-7.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-12.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-13.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-14.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-15.png" alt="">
                        </div><!-- /.swiper-slide -->
                    </div><!-- /.swiper-wrapper -->
                </div><!-- /.thm-swiper__slider -->
            </div><!-- /.container -->
        </div>

        <div class="client-carousel2 pb-120 ">
            <div class="container">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-16.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-17.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-18.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-19.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-20.png" alt="">
                        </div><!-- /.swiper-slide -->
                    </div><!-- /.swiper-wrapper -->
                </div><!-- /.thm-swiper__slider -->
            </div><!-- /.container -->
        </div>


    </div><!-- /.container -->
</section><!-- /.testimonials-one -->


@endsection