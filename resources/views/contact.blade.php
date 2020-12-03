

@extends('layouts.header')

@section('content') 

        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-1-2.jpg);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2>Contact Page</h2>
      
            </div><!-- /.container -->
        </section><!-- /.page-header -->
        <section class="contact-page pt-120 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="contact-page__content mb-40">
                            <div class="block-title">
                                <p><img src="assets/images/shapes/heart-2-1.png" width="15" alt="">Contact With Us</p>
                                <h3>Feel free to write us <br> a message.</h3>
                            </div><!-- /.block-title -->
                            <!-- <ul class="list-unstyled ul-list-one">
                                <li></li>
                            </ul> -->
                            <p style="margin-bottom: 0px;" class="block-text mb-30 pr-10">EMAIL US AT  </p>
                            <p style="margin-top: 0px; color: black;">info@creatxsoftware.com</p>
                            <div class="footer-social black-hover">
                                <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                                <a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                            </div><!-- /.footer-social -->
                        </div><!-- /.contact-page__content -->
                    </div><!-- /.col-lg-5 -->
                    <div class="col-lg-7">
                        <form action="assets/inc/sendemail.php" class="contact-form-validated contact-page__form form-one mb-40">
                            <div class="form-group">
                                <div class="form-control">
                                    <label for="name" class="sr-only">Name</label>
                                    <input type="text" name="name" id="name" placeholder="Your Name">
                                </div><!-- /.form-control -->
                                <div class="form-control">
                                    <label for="email" class="sr-only">email</label>
                                    <input type="text" name="email" id="email" placeholder="Email Address">
                                </div><!-- /.form-control -->
                                <div class="form-control">
                                    <label for="phone" class="sr-only">phone</label>
                                    <input type="text" name="phone" id="phone" placeholder="Phone Number">
                                </div><!-- /.form-control -->
                                <div class="form-control">
                                    <label for="subject" class="sr-only">subject</label>
                                    <input type="text" name="subject" id="subject" placeholder="Subject">
                                </div><!-- /.form-control -->
                                <div class="form-control form-control-full">
                                    <label for="message" class="sr-only">message</label>
                                    <textarea name="message" placeholder="Write a Message" id="message"></textarea>
                                </div><!-- /.form-control -->
                                <div class="form-control form-control-full">
                                    <button type="submit" class="thm-btn dynamic-radius">Submit Message</button>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.form-control -->
                            </div><!-- /.form-group -->
                        </form><!-- /.contact-page__form -->
                        <div class="result"></div><!-- /.result -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-page -->

     
        <div class="google-map__contact">
            <iframe frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed/v1/place?q=place_id:EilBbmFuZGFtYWl0aHJlZSBSZCwgUGFubmlwaXRpeWEsIFNyaSBMYW5rYSIuKiwKFAoSCe2LQm5pUOI6ETSj-QYXd42QEhQKEgld783NSlDiOhGk9-a4c_7mdA&key=AIzaSyAcuvYDk04jY_H-o_EIcdr8vQi3Mz0eWnc"
                allowfullscreen></iframe>
        </div><!-- /.google-map -->

        @endsection