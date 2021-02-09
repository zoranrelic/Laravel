@extends('layouts.blog')

@section('title')
    E-commerce solutions
@endsection


@section('header')

        @include('partials.header')

    
@endsection

@section('content')


    <!-- Main Content -->
    <main class="main-content">

            <!-- start page title section -->
        <section class="p-0 one-third-screen position-relative wow fadeIn">
            <div class="opacity-medium bg-extra-dark-gray z-index-0"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 one-third-screen page-title-large d-flex flex-column justify-content-center text-center">
                        <!-- start sub title -->
                        <span class="d-block text-white-2 opacity6 margin-10px-bottom alt-font">We provide innovative solutions to expand business</span>
                        <!-- end sub title -->
                        <!-- start page title -->
                        <h1 class="alt-font text-white-2 font-weight-600 mx-auto width-55 md-width-80 sm-width-100 mb-0">We have been helping build brands</h1>
                        <!-- end page title -->
                    </div>
                    <div class="down-section text-center"><a href="#section-down" class="inner-link"><i class="ti-arrow-down icon-extra-small text-white-2 bg-deep-pink padding-15px-all sm-padding-10px-all rounded-circle"></i></a></div>
                </div>
            </div>
            <div class="swiper-auto-fade swiper-container z-index-minus2 position-absolute top-0 width-100 height-100">
                <div class="swiper-wrapper">
                    <!-- start slider item -->
                    <div class="swiper-slide cover-background one-third-screen" style="background-image:url('http://placehold.it/1920x1080');"></div>
                    <!-- end slider item -->
                    <!-- start slider item -->
                    <div class="swiper-slide cover-background one-third-screen" style="background-image:url('http://placehold.it/1920x1080');"></div>
                    <!-- end slider item -->
                    <!-- start slider item -->
                    <div class="swiper-slide cover-background one-third-screen" style="background-image:url('http://placehold.it/1920x1080');"></div>
                    <!-- end slider item -->
                </div>
                <div class="swiper-pagination swiper-auto-pagination display-none"></div>
            </div>
        </section>
        <!-- end page title section -->
        <!-- start hero section -->
        <section class="pb-0 wow fadeIn" id="section-down">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-8 col-lg-9 margin-six-bottom text-center last-paragraph-no-margin">
                        <div class="alt-font text-deep-pink margin-10px-bottom text-uppercase text-small">We combine design, thinking and craft</div>
                        <h5 class="alt-font text-extra-dark-gray font-weight-600">Beautiful and easy to use UI, professional animations and drag & drop feature</h5>
                        <p class="width-80 mx-auto d-inline-block sm-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid wow fadeIn">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="http://placehold.it/1000x501" alt=""/>
                    </div>
                </div>
            </div>
        </section>
        <!-- end banner section -->
        <!-- start feature box section -->
        <section class="parallax wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('http://placehold.it/1920x1080');">
            <div class="container">
                <div class="row">
                    <!-- start feature box item -->
                    <div class="col-12 col-lg-4 last-paragraph-no-margin md-margin-30px-bottom wow fadeInRight">
                        <div class="padding-50px-all lg-padding-40px-all sm-padding-30px-all bg-white box-shadow text-center">
                            <div class="padding-35px-all d-inline-block rounded-circle margin-40px-bottom sm-margin-30px-bottom bg-light-gray"><img src="images/image-icon4.png" alt=""/></div>
                            <div class="text-small alt-font text-medium-gray text-uppercase">Creative People</div>
                            <span class="alt-font text-extra-dark-gray font-weight-600 d-block margin-20px-bottom">Creative Thinking & Design</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text.</p>
                        </div>                    
                    </div>
                    <!-- end feature box block -->
                    <!-- start feature box item -->
                    <div class="col-12 col-lg-4 last-paragraph-no-margin md-margin-30px-bottom wow fadeInRight" data-wow-delay="0.2s">
                        <div class="padding-50px-all lg-padding-40px-all sm-padding-30px-all bg-white box-shadow text-center">
                            <div class="padding-35px-all d-inline-block rounded-circle margin-40px-bottom sm-margin-30px-bottom bg-light-gray"><img src="images/image-icon2.png" alt=""/></div>
                            <div class="text-small alt-font text-medium-gray text-uppercase">Digital Marketing</div>
                            <span class="alt-font text-extra-dark-gray font-weight-600 d-block margin-20px-bottom">Digital Branding & Marketing</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                        </div>                    
                    </div>
                    <!-- end feature box block -->
                    <!-- start feature box item -->
                    <div class="col-12 col-lg-4 last-paragraph-no-margin wow fadeInRight" data-wow-delay="0.4s">
                        <div class="padding-50px-all lg-padding-40px-all sm-padding-30px-all bg-white box-shadow text-center">
                            <div class="padding-35px-all d-inline-block rounded-circle margin-40px-bottom sm-margin-30px-bottom bg-light-gray"><img src="images/image-icon3.png" alt=""/></div>
                            <div class="text-small alt-font text-medium-gray text-uppercase">Amazing Analytics</div>
                            <span class="alt-font text-extra-dark-gray font-weight-600 d-block margin-20px-bottom">Search Analytics & Marketing</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                        </div>                    
                    </div>
                    <!-- end feature box block -->
                </div>
            </div>
        </section>
        <!-- end feature box section -->
        <!-- start feature box section -->
        <section class="wow fadeIn lg-padding-two-lr md-no-padding-lr">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-8 col-lg-9 margin-eight-bottom text-center last-paragraph-no-margin">
                        <div class="alt-font text-deep-pink margin-10px-bottom text-uppercase text-small">Find more creative ideas for your projects</div>
                        <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">Build perfect websites, Beautifully handcrafted templates for your website</h5>                        
                    </div>
                </div>
                <div class="row">
                    <!-- start feature box item -->
                    <div class="col-12 col-xl-4 col-md-6 margin-six-bottom lg-margin-six-bottom sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin">
                        <div class="feature-box-5 position-relative">
                            <i class="icon-desktop text-medium-gray icon-medium"></i>
                            <div class="feature-content">
                                <div class="text-extra-dark-gray margin-10px-bottom alt-font font-weight-600">Web Development</div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy text.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-12 col-xl-4 col-md-6 margin-six-bottom lg-margin-six-bottom sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                        <div class="feature-box-5 position-relative">
                            <i class="icon-pricetags text-medium-gray icon-medium"></i>
                            <div class="feature-content">
                                <div class="text-extra-dark-gray margin-10px-bottom alt-font font-weight-600">Logo and Identity</div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy text.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item-->
                    <!-- start feature box item-->
                    <div class="col-12 col-xl-4 col-md-6 margin-six-bottom lg-margin-six-bottom sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                        <div class="feature-box-5 position-relative">
                            <i class="icon-pictures text-medium-gray icon-medium"></i>
                            <div class="feature-content">
                                <div class="text-extra-dark-gray margin-10px-bottom alt-font font-weight-600">Graphics Design</div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy text.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item-->
                    <!-- start feature box item-->
                    <div class="col-12 col-xl-4 col-md-6 md-margin-six-bottom lg-margin-six-bottom sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin">
                        <div class="feature-box-5 position-relative ">
                            <i class="icon-mobile text-medium-gray icon-medium"></i>
                            <div class="feature-content">
                                <div class="text-extra-dark-gray margin-10px-bottom alt-font font-weight-600">App Development</div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy text.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item-->
                    <!-- start feature box item-->
                    <div class="col-12 col-xl-4 col-md-6 sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                        <div class="feature-box-5 position-relative">
                            <i class="icon-target text-medium-gray icon-medium"></i>
                            <div class="feature-content">
                                <div class="text-extra-dark-gray margin-10px-bottom alt-font font-weight-600">Social Marketing</div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy text.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item-->
                    <!-- start feature box item-->
                    <div class="col-12 col-xl-4 col-md-6 wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                        <div class="feature-box-5 position-relative">
                            <i class="icon-tools text-medium-gray icon-medium"></i>
                            <div class="feature-content">
                                <div class="text-extra-dark-gray margin-10px-bottom alt-font font-weight-600">Content Creation</div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy text.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item-->
                </div>
            </div>
        </section>
        <!-- end feature box section -->
        <!-- start parallax section -->
        <section class="parallax big-section wow fadeIn" data-stellar-background-ratio="0.5" style="background-image:url('http://placehold.it/1920x1080');">
            <div class="opacity-extra-medium bg-black"></div>
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6 text-center">
                        <a href="https://www.youtube.com/watch?v=nrJtHemSPW4" class="popup-youtube"><img src="images/icon-play.png" class="width-30" alt=""/></a>
                        <h5 class="alt-font text-white-2">Unique. Powerful. Creative.</h5>
                    </div>
                </div>
            </div>
        </section>
        <!-- end parallax section -->
        <!-- start feature box section -->
        <section class="wow fadeIn last-paragraph-no-margin">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-8 col-lg-9 margin-eight-bottom text-center last-paragraph-no-margin">
                        <div class="alt-font text-deep-pink margin-10px-bottom text-uppercase text-small">Technology Expert Analysis</div>
                        <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">We provide high quality and cost effective offshore web development services</h5>                        
                    </div>
                </div>
                <div class="row">
                    <!-- start feature box item -->
                    <div class="col-12 col-md-4 sm-margin-30px-bottom wow fadeInUp">
                        <div class="feature-box-16 sm-width-100">
                            <img src="http://placehold.it/750x950" alt="">
                            <div class="feature-box-content text-center">
                                <div class="opacity-full-dark bg-extra-dark-gray"></div>
                                <div class="d-table h-100 w-100 position-relative">
                                    <div class="align-middle d-table-cell padding-15px-lr padding-20px-tb">
                                        <div class="text-white-2 alt-font text-medium margin-15px-bottom">We believe in creativity</div> 
                                        <p class="width-85 mx-auto text-extra-light-gray">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-12 col-md-4 sm-margin-30px-bottom wow fadeInUp" data-wow-delay="0.25s">
                        <div class="feature-box-16 sm-width-100">
                            <img src="http://placehold.it/750x950" alt="">
                            <div class="feature-box-content text-center text-white-2">
                                <div class="opacity-full-dark bg-extra-dark-gray"></div>
                                <div class="d-table h-100 w-100 position-relative">
                                    <div class="align-middle d-table-cell padding-15px-lr padding-20px-tb">
                                        <div class="text-white-2 alt-font text-medium margin-15px-bottom">We believe in quality</div> 
                                        <p class="width-85 mx-auto text-extra-light-gray">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="feature-box-16 sm-width-100">
                            <img src="http://placehold.it/750x950" alt="">
                            <div class="feature-box-content text-center text-white-2">
                                <div class="opacity-full-dark bg-extra-dark-gray"></div>
                                <div class="d-table h-100 w-100 position-relative">
                                    <div class="align-middle d-table-cell padding-15px-lr padding-20px-tb">
                                        <div class="text-white-2 alt-font text-medium margin-15px-bottom">We believe in relation</div> 
                                        <p class="width-85 mx-auto text-extra-light-gray">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                </div> 
            </div>
        </section>
        <!-- end feature box section -->
        <!-- start feature box section  -->
        <section class="bg-extra-dark-gray">
            <div class="container-fluid">
                <div class="row">
                    <!-- start feature box item -->
                    <div class="col-12 col-xl-3 col-md-6 last-paragraph-no-margin lg-margin-30px-bottom wow fadeInLeft" data-wow-delay="0.6s">
                        <div class="padding-40px-lr text-center border-right border-width-1 border-color-medium-dark-gray lg-no-border-right sm-padding-15px-lr">
                            <h3 class="font-weight-300 letter-spacing-minus-2 text-deep-pink alt-font margin-10px-bottom">01</h3>
                            <span class="alt-font d-block text-uppercase text-small">Save your Time</span>
                            <span class="text-white-2 text-uppercase alt-font text-extra-large font-weight-700 margin-20px-bottom d-block">Best Services</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-12 col-xl-3 col-md-6 last-paragraph-no-margin lg-margin-30px-bottom wow fadeInLeft" data-wow-delay="0.4s">
                        <div class="padding-40px-lr text-center border-right border-color-medium-dark-gray lg-no-border-right sm-padding-15px-lr">
                            <h3 class="font-weight-300 letter-spacing-minus-2 text-deep-pink alt-font margin-10px-bottom">02</h3>
                            <span class="alt-font d-block text-uppercase text-small">All you Need</span>
                            <span class="text-white-2 text-uppercase alt-font text-extra-large font-weight-700 margin-20px-bottom d-block">Professional</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-12 col-xl-3 col-md-6 last-paragraph-no-margin md-margin-30px-bottom wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="padding-40px-lr text-center border-right border-color-medium-dark-gray lg-no-border-right sm-padding-15px-lr">
                            <h3 class="font-weight-300 letter-spacing-minus-2 text-deep-pink alt-font margin-10px-bottom">03</h3>
                            <span class="alt-font d-block text-uppercase text-small">Dedicated Supports</span>
                            <span class="text-white-2 text-uppercase alt-font text-extra-large font-weight-700 margin-20px-bottom d-block">Support</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-12 col-xl-3 col-md-6 last-paragraph-no-margin wow fadeInLeft">
                        <div class="padding-40px-lr text-center sm-padding-15px-lr">
                            <h3 class="font-weight-300 letter-spacing-minus-2 text-deep-pink alt-font margin-10px-bottom">04</h3>
                            <span class="alt-font d-block text-uppercase text-small">Creative Thinking</span>
                            <span class="text-white-2 text-uppercase alt-font text-extra-large font-weight-700 margin-20px-bottom d-block">Digital Marketing</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                        </div>
                    </div>
                    <!-- end feature box item -->
                </div>
            </div>
        </section>
        <!-- end feature box section  -->
        <!-- start feature box section -->
        <section class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="images/image-right.png" alt=""/>
                    </div>
                </div>
            </div>
            <div class="container margin-one-top lg-margin-three-top md-no-margin-top">  
                <div class="row">
                    <div class="col-12 col-lg-4 text-center text-lg-left md-margin-40px-bottom sm-margin-30px-bottom">
                        <h5 class="text-extra-dark-gray font-weight-600 alt-font mb-0">The world's most powerful wordpress website builder</h5>
                    </div>
                    <!-- start feature box item -->
                    <div class="col-12 col-lg-4 col-md-6 text-center text-lg-left sm-margin-30px-bottom wow fadeIn last-paragraph-no-margin" data-wow-delay="0.2s">
                        <div class="row m-0">
                            <div class="col-12 col-lg-3 text-center md-no-padding-lr">
                                <h2 class="text-light-gray alt-font letter-spacing-minus-3 mb-0 md-margin-10px-bottom">01</h2>
                            </div>
                            <div class="col-12 col-lg-9 margin-5px-top text-center text-lg-left md-no-margin-top sm-no-padding-lr">
                                <span class="alt-font text-medium text-extra-dark-gray margin-5px-bottom d-block">Modern Framework</span>
                                <p class="width-80 lg-width-100">Lorem Ipsum is simply text the printing and typesetting standard industry.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-12 col-lg-4 col-md-6 text-center text-lg-left wow fadeIn last-paragraph-no-margin" data-wow-delay="0.4s">
                        <div class="row m-0">
                            <div class="col-12 col-lg-3 text-center sm-no-padding-lr">
                                <h2 class="text-light-gray alt-font letter-spacing-minus-3 mb-0 md-margin-10px-bottom">02</h2>
                            </div>
                            <div class="col-12 col-lg-9 margin-5px-top text-center text-lg-left md-no-margin-top sm-no-padding-lr">
                                <span class="alt-font text-medium text-extra-dark-gray margin-5px-bottom d-block">Live Website Builder</span>
                                <p class="width-80 lg-width-100">Lorem Ipsum is simply text the printing and typesetting standard industry.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                </div>
            </div>
        </section>
        <!-- start feature box section -->
        <!-- start subscribe section -->
        <section class="bg-light-gray wow fadeIn">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8 text-center">
                        <h4 class="alt-font font-weight-600 text-extra-dark-gray">Subscribe to our newsletter</h4>
                        <p class="width-65 mx-auto md-width-100"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text.</p>
                        <form id="subscribenewsletterform" action="javascript:void(0)" method="post" class="position-relative">
                            <div id="success-subscribe-newsletter" class="no-margin-lr"></div>
                            <div class="input-group margin-40px-tb">
                                <input name="email" id="email" data-email="required" type="text" placeholder="* Email Address" class="extra-big-input border-0 form-control" />
                                <div class="input-group-append">
                                    <button id="button-subscribe-newsletter" type="submit" class="btn btn-large bg-white text-deep-pink"><i class="ti-email icon-small m-0"></i></button>
                                </div>
                            </div>
                        </form>
                        <span class="text-extra-small">* We don't share your personal info with anyone. Check out our <a href="#" class="text-decoration-underline">Privacy Policy</a> for more information.</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- end subscribe section -->

      
    </main>
    
@endsection

@section('footer')

 @include('partials.footer')
    
@endsection
