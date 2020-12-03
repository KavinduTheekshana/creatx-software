
@extends('layouts.header')

@section('content') 

        <div class="stricky-header stricked-menu">
            <div class="container">
                <div class="logo-box">
                    <a href="index.html"><img src="assets/images/logo-light.png" width="101" alt=""></a>
                </div><!-- /.logo-box -->
                <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
            </div><!-- /.container -->
        </div><!-- /.stricky-header -->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-1-1.jpg);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2>Careers</h2>
 
            </div><!-- /.container -->
        </section><!-- /.page-header -->



        <section class="donate-options pt-120 mb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="donate-options__content">
                            <div class="block-title">
                                <p><img src="assets/images/shapes/heart-2-1.png" width="30" alt="">Join Us Now</p>
                                <h3>If our values also drive you, then we should be together.</h3>
                            </div><!-- /.block-title -->
                            <p>Our fast-paced environment will constantly challenge you to step out of your comfort zone. You will learn and evolve with the best people you've ever worked with.</p>
                            <div class="donate-options__call">
                            <i class="fas fa-envelope"></i>
                                <div class="donate-options__call-content">
                                    <p>If You Like Join with us<br> <span>Send Your CV:</span> <a
                                            href="">careers@creatxsoftware.com</a></p>
                                </div><!-- /.donate-options__call-content -->
                            </div><!-- /.donate-option__call -->

                        </div><!-- /.donate-options__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="donate-options__form wow fadeInUp" style="overflow: hidden; padding: 0px;">
                            <img src="assets/images/resources/about-counter-1-5.jpg"
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



      @endsection