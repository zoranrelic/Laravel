@extends('layouts.blog')

@section('title')
    About
@endsection


@section('header')

        @include('partials.header')

    
@endsection

@section('content')


    <!-- Main Content -->
    <main class="main-content">
       <!-- start parallax hero section -->
<section class="wow fadeIn p-0 parallax sm-background-image-center" data-stellar-background-ratio="0.5" style="background-image:url('http://placehold.it/1920x1200');">
    <div class="opacity-extra-medium bg-black"></div>
    <div class="container-fluid padding-thirteen-lr one-fourth-screen sm-padding-15px-lr">
        <div class="row h-100">
            <div class="position-relative h-100 w-100">
                <div class="slider-typography">
                    <div class="slider-text-middle-main">
                        <div class="slider-text-bottom">
                            <div class="col-12 text-center">
                                <h4 class="text-white-2 alt-font font-weight-300 width-60 mx-auto margin-ten-bottom lg-margin-fifteen-bottom lg-width-80 md-margin-twenty-bottom sm-width-100 sm-margin-100px-bottom">About <strong>Zorland</strong> </h4>
                            </div>
                        </div>
                        <div class="down-section text-center">
                            <a href="#about" class="inner-link"><i class="ti-arrow-down icon-medium text-deep-pink"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end parallax hero section -->
    <!-- end page title section -->     
    <!-- start story section -->
    <section class="wow fadeIn">
        <div class="container"> 
            <div class="row align-items-center">
                <div class="col-12 col-lg-5 text-center md-margin-30px-bottom wow fadeInLeft">
                    <img src="http://placehold.it/900x650" alt="" class="border-radius-6 w-100">
                </div> 
                <div class="col-12 col-lg-7 padding-eight-lr text-center text-lg-left lg-padding-nine-right md-padding-15px-lr wow fadeInRight" data-wow-delay="0.2s">
                    <span class="text-deep-pink alt-font margin-10px-bottom d-inline-block text-medium">Don’t worry, you’re in safe hands.</span>
                    <h6 class="alt-font text-extra-dark-gray">We are committed to our customers’ success from start to finish. Our input helps make their solutions.</h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum is printing and typesetting simply dummy text.</p>
                    <a href="services-simple.html" class="btn btn-dark-gray btn-small text-extra-small btn-rounded margin-5px-top"><i class="fas fa-play-circle icon-very-small margin-5px-right no-margin-left" aria-hidden="true"></i> Our Services</a>
                </div>
            </div>
            <div class="divider-full bg-extra-light-gray margin-seven-bottom margin-eight-top"></div>
            <!-- start feature box -->
            <div class="row">
                <!-- start feature box item -->
                <div class="col-12 col-md-4 text-center text-md-left sm-margin-15px-bottom wow fadeInUp">
                    <div class="row m-0">
                        <div class="col-12 col-lg-3 col-md-4 pl-0 sm-no-padding-lr float-left sm-margin-15px-bottom">
                            <i class="icon-desktop text-medium-gray icon-extra-medium top-6"></i>
                        </div>
                        <div class="col-12 col-lg-9 col-md-8 p-0">
                            <span class="margin-5px-bottom text-extra-dark-gray alt-font d-block font-weight-600">Digital Solutions</span>
                            <p class="width-75 lg-width-100">Lorem Ipsum is simply text the printing and typesetting standard industry.</p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col-12 col-md-4 text-center text-md-left sm-margin-15px-bottom wow fadeInUp" data-wow-delay="0.2s">
                    <div class="row m-0">
                        <div class="col-12 col-lg-3 col-md-4 pl-0 sm-no-padding-lr float-left sm-margin-15px-bottom">
                            <i class="icon-book-open text-medium-gray icon-extra-medium top-6"></i>
                        </div>
                        <div class="col-12 col-lg-9 col-md-8 p-0">
                            <span class="margin-5px-bottom text-extra-dark-gray alt-font d-block font-weight-600">SEO Marketing</span>
                            <p class="width-75 lg-width-100">Lorem Ipsum is simply text the printing and typesetting standard industry.</p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col-12 col-md-4 text-center text-md-left wow fadeInUp" data-wow-delay="0.4s">
                    <div class="row m-0">
                        <div class="col-12 col-lg-3 col-md-4 pl-0 sm-no-padding-lr float-left sm-margin-15px-bottom">
                            <i class="icon-gift text-medium-gray icon-extra-medium top-6"></i>
                        </div>
                        <div class="col-12 col-lg-9 col-md-8 p-0">
                            <span class="margin-5px-bottom text-extra-dark-gray alt-font d-block font-weight-600">Creative Strategy</span>
                            <p class="width-75 lg-width-100">Lorem Ipsum is simply text the printing and typesetting standard industry.</p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
            </div>
            <!-- start feature box -->
        </div>
    </section>
    <!-- end story section -->
    <!-- start feature box  -->
    <section class="bg-extra-dark-gray wow fadeIn md-padding-one-half-lr sm-padding-two-lr">
        <div class="container">
            <div class="row">
                <!-- feature box item-->
                <div class="col-12 col-md-4 feature-box-1 sm-margin-30px-bottom wow fadeInRight">
                    <div class="margin-15px-bottom alt-font">
                        <h3 class="char-value letter-spacing-minus-1 text-medium-gray font-weight-300">01.</h3>
                        <span class="text-large line-height-22 padding-20px-left sm-padding-15px w-100 d-table-cell align-middle">Creativity.<br> Discover talent.</span>
                    </div>
                    <p class="width-90 lg-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry.</p>
                    <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top float-left"></div>
                </div>
                <!-- end feature box item-->
                <!-- start feature box item-->
                <div class="col-12 col-md-4 feature-box-1 sm-margin-30px-bottom wow fadeInRight" data-wow-delay="0.2s">
                    <div class="margin-15px-bottom alt-font">
                        <h3 class="char-value letter-spacing-minus-1 text-medium-gray font-weight-300">02.</h3>
                        <span class="text-large line-height-22 padding-20px-left w-100 d-table-cell align-middle">Technology.<br> Expert analysis.</span>
                    </div>
                    <p class="width-90 lg-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry.</p>
                    <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top float-left"></div>
                </div>
                <!-- end feature box item-->
                <!-- start feature box item-->
                <div class="col-12 col-md-4 feature-box-1 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="margin-15px-bottom alt-font">
                        <h3 class="char-value letter-spacing-minus-1 text-medium-gray font-weight-300">03.</h3>
                        <span class="text-large line-height-22 padding-20px-left w-100 d-table-cell align-middle">Discover.<br> Explore work.</span>
                    </div>
                    <p class="width-90 lg-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry.</p>
                    <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top float-left"></div>
                </div>
                <!-- end feature box item-->
            </div>
        </div>
    </section>
    <!-- end feature box -->
    <!-- start section -->
    <section class="wow fadeIn last-paragraph-no-margin">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-6 col-lg-8 col-md-10 text-center margin-70px-bottom md-margin-40px-bottom sm-margin-30px-bottom">
                    <span class="alt-font text-deep-pink text-medium margin-5px-bottom d-block">We are delivering beautiful digital products</span>
                    <h6 class="font-weight-400 text-extra-dark-gray alt-font mb-0">Wide range of web and software development services across the world</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-12 margin-eight-bottom md-margin-30px-bottom">
                    <div class="row">
                        <div class="col-12 col-md-8 sm-margin-15px-bottom wow fadeInLeft" data-wow-delay="0.2s">
                            <img src="http://placehold.it/1000x700" alt="" class="border-radius-6">
                        </div>
                        <div class="col-12 col-md-4 wow fadeInRight" data-wow-delay="0.4s">
                            <img src="http://placehold.it/500x730" alt="" class="border-radius-6 sm-width-100">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-lg-4 md-margin-15px-bottom">
                    <span class="text-extra-large text-extra-dark-gray alt-font width-90 display-block">We're fortunate to work with fantastic clients from across the globe in over 11 countries on design and branding.</span>
                </div>
                <div class="col-12 col-lg-4 md-margin-15px-bottom">
                    <strong class="font-weight-600 text-extra-dark-gray margin-5px-bottom d-block alt-font">Our approach</strong>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                </div>
                <div class="col-12 col-lg-4">
                    <strong class="font-weight-600 text-extra-dark-gray margin-5px-bottom d-block alt-font">Our Mission</strong>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                </div>                    
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start slider section  -->
    <section id="clients" class="parallax wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('http://placehold.it/1920x1200');">
        <div class="opacity-medium bg-extra-dark-gray"></div>
        <div class="container text-center">
            <div class="row">    
                <div class="swiper-slider-clients swiper-container white-move">
                    <div class="swiper-wrapper">
                        <!-- start slide item--><div class="swiper-slide text-center"><a href="http://envato.com"><img src="images/clients-logo1.png" alt=""></a></div><!-- end slide item -->
                        <!-- start slide item--><div class="swiper-slide text-center"><a href="http://woocommerce.com"><img src="images/clients-logo2.png" alt=""></a></div><!-- end slide item -->
                        <!-- start slide item--><div class="swiper-slide text-center"><a href="http://wordpress.com"><img src="images/clients-logo3.png" alt=""></a></div><!-- end slide item -->
                        <!-- start slide item--><div class="swiper-slide text-center"><a href="http://magento.com"><img src="images/clients-logo4.png" alt=""></a></div><!-- end slide item -->
                        <!-- start slide item--><div class="swiper-slide text-center"><a href="http://envato.com"><img src="images/clients-logo1.png" alt=""></a></div><!-- end slide item -->
                        <!-- start slide item--><div class="swiper-slide text-center"><a href="http://woocommerce.com"><img src="images/clients-logo2.png" alt=""></a></div><!-- end slide item -->
                        <!-- start slide item--><div class="swiper-slide text-center"><a href="http://wordpress.com"><img src="images/clients-logo3.png" alt=""></a></div><!-- end slide item -->
                        <!-- start slide item--><div class="swiper-slide text-center"><a href="http://magento.com"><img src="images/clients-logo4.png" alt=""></a></div><!-- end slide item -->
                    </div>
                </div>
            </div>    
        </div>
    </section>
    <!-- end slider section -->
    <!-- start testimonial section -->
    <section class="wow fadeIn bg-light-gray testimonial-style3">
        <div class="container">                
            <div class="row justify-content-center">
                <div class="col-12 col-md-7 col-lg-12">
                    <div class="row">
                        <div class="col-12 col-lg-4 md-margin-two-bottom wow fadeIn last-paragraph-no-margin testimonial-style3">
                            <div class="testimonial-content-box padding-twelve-all bg-white border-radius-6 box-shadow arrow-bottom md-padding-seven-all sm-padding-eight-all">
                                I wanted to hire the best and after looking at several other companies, I knew Jacob was the perfect guy for the job. He is a true professional.
                            </div>
                            <!-- start testimonials item -->
                            <div class="testimonial-box padding-25px-all sm-padding-20px-all">
                                <div class="image-box width-20"><img src="http://placehold.it/149x149" class="rounded-circle" alt=""></div>
                                <div class="name-box padding-20px-left">
                                    <div class="alt-font font-weight-600 text-small text-uppercase text-extra-dark-gray">Shoko Mugikura</div>
                                    <p class="text-extra-small text-uppercase text-medium-gray">Graphic Designer</p>
                                </div>
                            </div>
                        </div>
                        <!-- end testimonials item -->
                        <!-- start testimonials item -->
                        <div class="col-12 col-lg-4 sm-margin-two-bottom wow fadeIn last-paragraph-no-margin testimonial-style3" data-wow-delay="0.2s">
                            <div class="testimonial-content-box padding-twelve-all bg-white border-radius-6 box-shadow arrow-bottom md-padding-seven-all sm-padding-eight-all">
                                This is an excellent company! I personally enjoyed the energy and the professional support the whole team gave to us into creating website.
                            </div>
                            <div class="testimonial-box padding-25px-all sm-padding-20px-all">
                                <div class="image-box width-20"><img src="http://placehold.it/149x149" class="rounded-circle" alt=""></div>
                                <div class="name-box padding-20px-left">
                                    <div class="alt-font font-weight-600 text-small text-uppercase text-extra-dark-gray">Alexander Harvard</div>
                                    <p class="text-extra-small text-uppercase text-medium-gray">Creative Director</p>
                                </div>
                            </div>
                        </div>
                        <!-- end testimonials item -->
                        <!-- start testimonials item -->
                        <div class="col-12 col-lg-4 wow fadeIn last-paragraph-no-margin testimonial-style3" data-wow-delay="0.4s">
                            <div class="testimonial-content-box padding-twelve-all bg-white border-radius-6 box-shadow arrow-bottom md-padding-seven-all sm-padding-eight-all">
                                Their team are easy to work with and helped me make amazing websites in a short amount of time. Thanks again guys for all your hard work.
                            </div>
                            <div class="testimonial-box padding-25px-all sm-padding-20px-all">
                                <div class="image-box width-20"><img src="http://placehold.it/149x149" class="rounded-circle" alt=""></div>
                                <div class="name-box padding-20px-left">
                                    <div class="alt-font font-weight-600 text-small text-uppercase text-extra-dark-gray">Herman Miller</div>
                                    <p class="text-extra-small text-uppercase text-medium-gray">Co Founder / CEO</p>
                                </div>
                            </div>
                        </div>
                        <!-- end testimonials item -->
                    </div>
                </div>
            </div> 
        </div> 
    </section>
    <!-- end testimonial section -->     
    <!-- start information section -->     
    <section class="bg-extra-dark-gray wow fadeIn">
        <div class="container">
            <div class="row align-items-center"> 
                <div class="col-12 col-lg-5 lg-margin-50px-bottom wow fadeInLeft">
                    <h5 class="alt-font text-light-gray margin-30px-bottom">Beautifully handcrafted templates for your website</h5>
                    <ul class="p-0 list-style-4 list-style-color">
                        <li>Beautiful and easy to understand UI, professional animations</li>
                        <li>Theme advantages are pixel perfect design & clear code delivered</li>
                        <li>Present your services with flexible, convenient and multipurpose</li>
                        <li>Find more creative ideas for your projects </li>
                        <li>Unlimited power and customization possibilities</li> 
                    </ul>
                    <a href="services-modern.html" class="btn btn-white btn-small text-extra-small btn-rounded margin-20px-top"><i class="fas fa-play-circle icon-very-small margin-5px-right no-margin-left" aria-hidden="true"></i> ALL advantages</a>
                </div>
                <div class="col-12 col-lg-7 wow fadeInRight">
                    <img src="http://placehold.it/850x550" alt="" class="w-100">
                </div> 
            </div>
        </div>
    </section>
    <!-- end information section -->     
    <!-- start team section -->
    <section class="wow fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-7 col-lg-8 col-md-6 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                    <div class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">we believe in business growth</div>
                    <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">Talent wins games, but teamwork and intelligence wins championships</h5>
                </div>
            </div>
            <div class="row">
                <!-- start team item -->
                <div class="col-12 col-lg-3 col-md-6 team-block text-left team-style-1 md-margin-seven-bottom sm-margin-30px-bottom wow fadeInRight" data-wow-duration="900ms">
                    <figure>
                        <div class="team-image sm-width-100">
                            <img src="http://placehold.it/700x892" alt="">
                            <div class="overlay-content text-center align-items-end d-flex">
                                <div class="icon-social-small padding-twelve-all width-100">
                                    <span class="text-white-2 text-small d-inline-block">Lorem Ipsum is simply dummy text of the printing and typesetting industry dummy text.</span>
                                    <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb"></div>
                                    <a href="http://facebook.com" class="text-white-2" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="http://twitter.com" class="text-white-2" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="http://plus.google.com" class="text-white-2" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="http://instagram.com" class="text-white-2" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-overlay bg-extra-dark-gray opacity8"></div>
                        </div>
                        <figcaption>
                            <div class="team-member-position margin-20px-top text-center">
                                <div class="text-small font-weight-500 text-extra-dark-gray text-uppercase">Herman Miller</div>
                                <div class="text-extra-small text-uppercase text-medium-gray">Co-Founder / Design</div>
                            </div>   
                        </figcaption>
                    </figure>
                </div>
                <!-- end team item -->
                <!-- start team item -->
                <div class="col-12 col-lg-3 col-md-6 team-block text-left team-style-1 md-margin-seven-bottom sm-margin-30px-bottom wow fadeInRight" data-wow-duration="900ms" data-wow-delay="0.2s">
                    <figure>
                        <div class="team-image sm-width-100">
                            <img src="http://placehold.it/700x892" alt="">
                            <div class="overlay-content text-center align-items-end d-flex">
                                <div class="icon-social-small padding-twelve-all width-100">
                                    <span class="text-white-2 text-small d-inline-block no-margin">Lorem Ipsum is simply dummy text of the printing and typesetting industry dummy text.</span>
                                    <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb"></div>
                                    <a href="http://facebook.com" class="text-white-2" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="http://twitter.com" class="text-white-2" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="http://plus.google.com" class="text-white-2" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="http://instagram.com" class="text-white-2" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-overlay bg-extra-dark-gray opacity8"></div>
                        </div>
                        <figcaption>
                            <div class="team-member-position margin-20px-top text-center">
                                <div class="text-small font-weight-500 text-extra-dark-gray text-uppercase">Bill Gardner</div>
                                <div class="text-extra-small text-uppercase text-medium-gray">Co-Founder / Design</div>
                            </div>   
                        </figcaption>
                    </figure>
                </div>
                <!-- end team item -->
                <!-- start team item -->
                <div class="col-12 col-lg-3 col-md-6 team-block text-left team-style-1 md-margin-30px-bottom wow fadeInRight" data-wow-duration="900ms" data-wow-delay="0.4s">
                    <figure>
                        <div class="team-image sm-width-100">
                            <img src="http://placehold.it/700x892" alt="">
                            <div class="overlay-content text-center align-items-end d-flex">
                                <div class="icon-social-small padding-twelve-all width-100">
                                    <span class="text-white-2 text-small d-inline-block no-margin">Lorem Ipsum is simply dummy text of the printing and typesetting industry dummy text.</span>
                                    <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb"></div>
                                    <a href="http://facebook.com" class="text-white-2" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="http://twitter.com" class="text-white-2" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="http://plus.google.com" class="text-white-2" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="http://instagram.com" class="text-white-2" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-overlay bg-extra-dark-gray opacity8"></div>
                        </div>
                        <figcaption>
                            <div class="team-member-position margin-20px-top text-center">
                                <div class="text-small font-weight-500 text-extra-dark-gray text-uppercase">Jeremy Dupont</div>
                                <div class="text-extra-small text-uppercase text-medium-gray">Creative Director</div>
                            </div>   
                        </figcaption>
                    </figure>
                </div>
                <!-- end team item -->
                <!-- start team item -->
                <div class="col-12 col-lg-3 col-md-6 team-block text-left team-style-1 wow fadeInRight" data-wow-duration="900ms" data-wow-delay="0.6s">
                    <figure>
                        <div class="team-image sm-width-100">
                            <img src="http://placehold.it/700x892" alt="">
                            <div class="overlay-content text-center align-items-end d-flex">
                                <div class="icon-social-small padding-twelve-all width-100">
                                    <span class="text-white-2 text-small d-inline-block no-margin">Lorem Ipsum is simply dummy text of the printing and typesetting industry dummy text.</span>
                                    <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb"></div>
                                    <a href="http://facebook.com" class="text-white-2" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="http://twitter.com" class="text-white-2" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="http://plus.google.com" class="text-white-2" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="http://instagram.com" class="text-white-2" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-overlay bg-extra-dark-gray opacity8"></div>
                        </div>
                        <figcaption>
                            <div class="team-member-position margin-20px-top text-center">
                                <div class="text-small font-weight-500 text-extra-dark-gray text-uppercase">Sara Smith</div>
                                <div class="text-extra-small text-uppercase text-medium-gray">Creative Studio Head</div>
                            </div>   
                        </figcaption>
                    </figure>
                </div>
                <!-- end team item -->
            </div>                
        </div>
    </section>
    <!-- end team section -->

      
    </main>
    
@endsection

@section('footer')

 @include('partials.footer')
    
@endsection