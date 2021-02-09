@extends('layouts.blog')

@section('title')
    Blog
@endsection


@section('header')

        @include('partials.header')

    
@endsection

@section('content')


    <!-- Main Content -->
    <main class="main-content">
            <!-- start page title section -->
        <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('http://placehold.it/1920x1100');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 d-flex flex-column justify-content-center text-center extra-small-screen page-title-large">
                        <!-- start page title -->
                        <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">Blog right sidebar</h1>
                        <span class="text-white-2 opacity6 alt-font">Lorem Ipsum is simply dummy text printing</span>
                        <!-- end page title --> 
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title section --> 
        <!-- start post content section --> 
        <section>
            <div class="container">
                <div class="row">
                    <main class="col-12 col-lg-9 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom pl-0 md-no-padding-right">
                        <!-- start post item --> 
                        <div class="col-12 blog-post-content margin-60px-bottom sm-margin-30px-bottom text-center text-md-left">
                            <div class="blog-image"><a href="blog-standard-post.html"><img src="http://placehold.it/1200x752" alt=""/></a></div>
                            <div class="blog-text border-all d-inline-block width-100">
                                <div class="content padding-50px-all sm-padding-20px-all">
                                    <div class="text-medium-gray text-extra-small margin-5px-bottom text-uppercase alt-font"><span>Posted on June 30, 2017</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span><a href="blog-grid.html" class="text-medium-gray ">Branding</a></span></div>
                                    <a href="blog-standard-post.html" class="text-extra-dark-gray text-uppercase alt-font text-large font-weight-600 margin-15px-bottom d-block">This is a standard post with a preview image</a>
                                    <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text.</p>
                                </div>
                                <div class="row m-0 author border-top border-color-extra-light-gray text-center">
                                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center name padding-15px-all">
                                        <div>
                                            <img src="http://placehold.it/149x149" alt="" class="rounded-circle width-30px">
                                            <span class="text-medium-gray text-uppercase text-extra-small alt-font padding-10px-left">by <a href="blog-grid.html" class="text-medium-gray">Paul Scrivens</a></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center name border-lr padding-15px-all border-color-extra-light-gray sm-no-border">
                                        <div>
                                            <a href="#" class="text-extra-small alt-font text-medium-gray text-uppercase"><i class="far fa-heart margin-5px-right text-small"></i>5 like(s)</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center name padding-15px-all">
                                        <div>
                                            <a href="#" class="text-extra-small alt-font text-medium-gray text-uppercase"><i class="far fa-comment margin-5px-right text-small"></i>3 Comment(s)</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end post item --> 
                        <!-- start post item --> 
                        <div class="col-12 blog-post-content margin-60px-bottom sm-margin-30px-bottom text-center text-md-left">
                            <div class="swiper-full-screen swiper-container white-move">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><a href="blog-slider-post.html"><img src="http://placehold.it/1200x752" alt=""></a></div>
                                    <div class="swiper-slide"><a href="blog-slider-post.html"><img src="http://placehold.it/1200x752" alt=""></a></div>
                                    <div class="swiper-slide"><a href="blog-slider-post.html"><img src="http://placehold.it/1200x752" alt=""></a></div>                            
                                </div>  
                                <div class="swiper-pagination swiper-pagination-square swiper-pagination-white swiper-full-screen-pagination"></div>
                                <div class="swiper-button-next swiper-button-black-highlight"></div>
                                <div class="swiper-button-prev swiper-button-black-highlight"></div>
                            </div> 
                            <div class="blog-text border-all d-inline-block width-100">
                                <div class="content padding-50px-all sm-padding-20px-all">
                                    <div class="text-medium-gray text-extra-small margin-5px-bottom text-uppercase alt-font"><span>Posted on June 02, 2017</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span><a href="blog-grid.html" class="text-medium-gray ">Designing</a></span></div>
                                    <a href="blog-slider-post.html" class="text-extra-dark-gray text-uppercase alt-font text-large font-weight-600 margin-15px-bottom d-block">This is a standard post with a images slider</a>
                                    <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text.</p>
                                </div>
                                <div class="row m-0 author border-top border-color-extra-light-gray text-center">
                                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center name padding-15px-all">
                                        <div>
                                            <img src="http://placehold.it/149x149" alt="" class="rounded-circle width-30px">
                                            <span class="text-medium-gray text-uppercase text-extra-small alt-font padding-10px-left">by <a href="blog-grid.html" class="text-medium-gray">Paul Scrivens</a></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center name border-lr padding-15px-all border-color-extra-light-gray sm-no-border">
                                        <div>
                                            <a href="#" class="text-extra-small alt-font text-medium-gray text-uppercase"><i class="far fa-heart margin-5px-right text-small"></i>5 like(s)</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center name padding-15px-all">
                                        <div>
                                            <a href="#" class="text-extra-small alt-font text-medium-gray text-uppercase"><i class="far fa-comment margin-5px-right text-small"></i>3 Comment(s)</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end post item --> 
                        <!-- start post item --> 
                        <div class="col-12 blog-post-content margin-60px-bottom sm-margin-30px-bottom text-center text-md-left">
                            <div class="fit-videos">
                                <!-- start vimeo video -->
                                <iframe src="https://player.vimeo.com/video/176916362?title=0&byline=0&portrait=0" width="640" height="360" allowfullscreen></iframe>
                                <!-- end vimeo video -->
                            </div> 
                            <div class="blog-text border-all d-inline-block width-100">
                                <div class="content padding-50px-all sm-padding-20px-all">
                                    <div class="text-medium-gray text-extra-small margin-5px-bottom text-uppercase alt-font"><span>Posted on August 28, 2016</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span><a href="blog-grid.html" class="text-medium-gray ">Feature</a></span></div>
                                    <a href="blog-vimeo-video-post.html" class="text-extra-dark-gray text-uppercase alt-font text-large font-weight-600 margin-15px-bottom d-block">This is a Standard post with an Embedded Video</a>
                                    <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text.</p>
                                </div>
                                <div class="row m-0 author border-top border-color-extra-light-gray text-center">
                                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center name padding-15px-all">
                                        <div>
                                            <img src="http://placehold.it/149x149" alt="" class="rounded-circle width-30px">
                                            <span class="text-medium-gray text-uppercase text-extra-small alt-font padding-10px-left">by <a href="blog-grid.html" class="text-medium-gray">Paul Scrivens</a></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center name border-lr padding-15px-all border-color-extra-light-gray sm-no-border">
                                        <div>
                                            <a href="#" class="text-extra-small alt-font text-medium-gray text-uppercase"><i class="far fa-heart margin-5px-right text-small"></i>5 like(s)</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center name padding-15px-all">
                                        <div>
                                            <a href="#" class="text-extra-small alt-font text-medium-gray text-uppercase"><i class="far fa-comment margin-5px-right text-small"></i>3 Comment(s)</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end post item --> 
                        <!-- start post item --> 
                        <div class="col-12 blog-post-content margin-60px-bottom sm-margin-30px-bottom text-center text-md-left">
                            <div class="fit-videos">
                                <!-- start vimeo video -->
                                <video autoplay muted loop controls><source src="video/video.mp4" type="video/mp4"></video>
                                <!-- end vimeo video -->
                            </div> 
                            <div class="blog-text border-all d-inline-block width-100">
                                <div class="content padding-50px-all sm-padding-20px-all">
                                    <div class="text-medium-gray text-extra-small margin-5px-bottom text-uppercase alt-font"><span>Posted on July 10, 2016</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span><a href="blog-grid.html" class="text-medium-gray ">Branding</a></span></div>
                                    <a href="blog-html5-video-post.html" class="text-extra-dark-gray text-uppercase alt-font text-large font-weight-600 margin-15px-bottom d-block">This is a Standard post with a HTML5 Video</a>
                                    <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text.</p>
                                </div>
                                <div class="row m-0 author border-top border-color-extra-light-gray text-center">
                                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center name padding-15px-all">
                                        <div>
                                            <img src="http://placehold.it/149x149" alt="" class="rounded-circle width-30px">
                                            <span class="text-medium-gray text-uppercase text-extra-small alt-font padding-10px-left">by <a href="blog-grid.html" class="text-medium-gray">Paul Scrivens</a></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center name border-lr padding-15px-all border-color-extra-light-gray sm-no-border">
                                        <div>
                                            <a href="#" class="text-extra-small alt-font text-medium-gray text-uppercase"><i class="far fa-heart margin-5px-right text-small"></i>5 like(s)</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center name padding-15px-all">
                                        <div>
                                            <a href="#" class="text-extra-small alt-font text-medium-gray text-uppercase"><i class="far fa-comment margin-5px-right text-small"></i>3 Comment(s)</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end post item --> 
                        <!-- start post item --> 
                        <div class="col-12 blog-post-content margin-60px-bottom sm-margin-30px-bottom text-center text-md-left">
                            <div class="fit-videos">
                                <!-- start vimeo video -->
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/sU3FkzUKHXU?rel=0&amp;controls=0&amp;showinfo=0" allowfullscreen></iframe>
                                <!-- end vimeo video -->
                            </div> 
                            <div class="blog-text border-all d-inline-block width-100">
                                <div class="content padding-50px-all sm-padding-20px-all">
                                    <div class="text-medium-gray text-extra-small margin-5px-bottom text-uppercase alt-font"><span>Posted on April 11, 2016</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span><a href="blog-grid.html" class="text-medium-gray ">Onepage Fashion</a></span></div>
                                    <a href="blog-youtube-video-post.html" class="text-extra-dark-gray text-uppercase alt-font text-large font-weight-600 margin-15px-bottom d-block">This is a Standard post with a youtube Video</a>
                                    <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text.</p>
                                </div>
                                <div class="row m-0 author border-top border-color-extra-light-gray text-center">
                                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center name padding-15px-all">
                                        <div>
                                            <img src="http://placehold.it/149x149" alt="" class="rounded-circle width-30px">
                                            <span class="text-medium-gray text-uppercase text-extra-small alt-font padding-10px-left">by <a href="blog-grid.html" class="text-medium-gray">Paul Scrivens</a></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center name border-lr padding-15px-all border-color-extra-light-gray sm-no-border">
                                        <div>
                                            <a href="#" class="text-extra-small alt-font text-medium-gray text-uppercase"><i class="far fa-heart margin-5px-right text-small"></i>5 like(s)</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center name padding-15px-all">
                                        <div>
                                            <a href="#" class="text-extra-small alt-font text-medium-gray text-uppercase"><i class="far fa-comment margin-5px-right text-small"></i>3 Comment(s)</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end post item -->
                        <!-- start post item --> 
                        <div class="col-12 blog-post-content margin-60px-bottom sm-margin-30px-bottom text-center text-md-left">
                            <div class="lightbox-gallery">
                                <ul class="portfolio-grid work-3col hover-option4">
                                    <li class="grid-sizer"></li>
                                    <!-- start portfolio item -->
                                    <li class="grid-item web branding design">
                                        <a href="http://placehold.it/800x650" title="Lightbox gallery image title...">
                                            <figure>
                                                <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt="" class="project-img-gallery"/></div>
                                                <figcaption>
                                                    <div class="portfolio-hover-main text-center">
                                                        <div class="portfolio-hover-box align-middle">
                                                            <div class="portfolio-hover-content position-relative">
                                                                <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                    <!-- end portfolio item -->
                                    <!-- start portfolio item -->
                                    <li class="grid-item web branding design">
                                        <a href="http://placehold.it/800x650" title="Lightbox gallery image title...">
                                            <figure>
                                                <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt="" class="project-img-gallery"/></div>
                                                <figcaption>
                                                    <div class="portfolio-hover-main text-center">
                                                        <div class="portfolio-hover-box align-middle">
                                                            <div class="portfolio-hover-content position-relative">
                                                                <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                    <!-- end portfolio item -->
                                    <!-- start portfolio item -->
                                    <li class="grid-item web branding design">
                                        <a href="http://placehold.it/800x650" title="Lightbox gallery image title...">
                                            <figure>
                                                <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt="" class="project-img-gallery"/></div>
                                                <figcaption>
                                                    <div class="portfolio-hover-main text-center">
                                                        <div class="portfolio-hover-box align-middle">
                                                            <div class="portfolio-hover-content position-relative">
                                                                <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                    <!-- end portfolio item -->
                                    <!-- start portfolio item -->
                                    <li class="grid-item web branding design">
                                        <a href="http://placehold.it/800x650" title="Lightbox gallery image title...">
                                            <figure>
                                                <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt="" class="project-img-gallery"/></div>
                                                <figcaption>
                                                    <div class="portfolio-hover-main text-center">
                                                        <div class="portfolio-hover-box align-middle">
                                                            <div class="portfolio-hover-content position-relative">
                                                                <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                    <!-- end portfolio item -->
                                    <!-- start portfolio item -->
                                    <li class="grid-item web branding design">
                                        <a href="http://placehold.it/800x650" title="Lightbox gallery image title...">
                                            <figure>
                                                <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt="" class="project-img-gallery"/></div>
                                                <figcaption>
                                                    <div class="portfolio-hover-main text-center">
                                                        <div class="portfolio-hover-box align-middle">
                                                            <div class="portfolio-hover-content position-relative">
                                                                <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                    <!-- end portfolio item -->
                                    <!-- start portfolio item -->
                                    <li class="grid-item web branding design">
                                        <a href="http://placehold.it/800x650" title="Lightbox gallery image title...">
                                            <figure>
                                                <div class="portfolio-img bg-extra-dark-gray"><img src="http://placehold.it/800x650" alt="" class="project-img-gallery"/></div>
                                                <figcaption>
                                                    <div class="portfolio-hover-main text-center">
                                                        <div class="portfolio-hover-box align-middle">
                                                            <div class="portfolio-hover-content position-relative">
                                                                <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                    <!-- end portfolio item --> 
                                </ul>
                            </div> 
                            <div class="blog-text border-all d-inline-block width-100">
                                <div class="content padding-50px-all sm-padding-20px-all">
                                    <div class="text-medium-gray text-extra-small margin-5px-bottom text-uppercase alt-font"><span>Posted on June 08, 2016</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span><a href="blog-grid.html" class="text-medium-gray ">Branding</a></span></div>
                                    <a href="blog-gallery-post.html" class="text-extra-dark-gray text-uppercase alt-font text-large font-weight-600 margin-15px-bottom d-block">This is a Standard post with a Image gallery</a>
                                    <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text.</p>
                                </div>
                                <div class="row m-0 author border-top border-color-extra-light-gray text-center">
                                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center name padding-15px-all">
                                        <div>
                                            <img src="http://placehold.it/149x149" alt="" class="rounded-circle width-30px">
                                            <span class="text-medium-gray text-uppercase text-extra-small alt-font padding-10px-left">by <a href="blog-grid.html" class="text-medium-gray">Paul Scrivens</a></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center name border-lr padding-15px-all border-color-extra-light-gray sm-no-border">
                                        <div>
                                            <a href="#" class="text-extra-small alt-font text-medium-gray text-uppercase"><i class="far fa-heart margin-5px-right text-small"></i>5 like(s)</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center name padding-15px-all">
                                        <div>
                                            <a href="#" class="text-extra-small alt-font text-medium-gray text-uppercase"><i class="far fa-comment margin-5px-right text-small"></i>3 Comment(s)</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end post item --> 
                        <!-- start post item --> 
                        <div class="col-12 blog-post-content text-center text-md-left">
                            <div class="blog-image">
                                <blockquote class="bg-extra-dark-gray">
                                    <h6 class="text-white-2 font-weight-300 line-height-35 alt-font margin-15px-bottom">Thousands of candles can be lighted from a single candle, and the life of the candle will not be shortened. Happiness never decreases by being shared.</h6>
                                </blockquote>
                            </div>
                            <div class="blog-text border-all d-inline-block width-100">
                                <div class="content padding-50px-all sm-padding-20px-all">
                                    <div class="text-medium-gray text-extra-small margin-5px-bottom text-uppercase alt-font"><span>Posted on June 14, 2015</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span><a href="blog-grid.html" class="text-medium-gray ">Designing</a></span></div>
                                    <a href="blog-blockquote-post.html" class="text-extra-dark-gray text-uppercase alt-font text-large font-weight-600 margin-15px-bottom d-block">This is a Standard post with a blockquote</a>
                                    <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text.</p>
                                </div>
                                <div class="row m-0 author border-top border-color-extra-light-gray text-center">
                                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center name padding-15px-all">
                                        <div>
                                            <img src="http://placehold.it/149x149" alt="" class="rounded-circle width-30px">
                                            <span class="text-medium-gray text-uppercase text-extra-small alt-font padding-10px-left">by <a href="blog-grid.html" class="text-medium-gray">Paul Scrivens</a></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center name border-lr padding-15px-all border-color-extra-light-gray sm-no-border">
                                        <div>
                                            <a href="#" class="text-extra-small alt-font text-medium-gray text-uppercase"><i class="far fa-heart margin-5px-right text-small"></i>5 like(s)</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center name padding-15px-all">
                                        <div>
                                            <a href="#" class="text-extra-small alt-font text-medium-gray text-uppercase"><i class="far fa-comment margin-5px-right text-small"></i>3 Comment(s)</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end post item -->
                        <!-- start pagination -->
                        <div class="col-12 text-center margin-100px-top md-margin-50px-top wow fadeInUp">
                            <div class="pagination text-small text-uppercase text-extra-dark-gray">
                                <ul class="mx-auto">
                                    <li><a href="#"><i class="fas fa-long-arrow-alt-left margin-5px-right d-none d-md-inline-block"></i> Prev</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">Next <i class="fas fa-long-arrow-alt-right margin-5px-left d-none d-md-inline-block"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- end pagination -->
                    </main>
                    <aside class="col-12 col-lg-3 float-right">
                        <div class="d-inline-block width-100 margin-45px-bottom sm-margin-25px-bottom">
                            <form>
                                <div class="position-relative">
                                    <input type="email" class="bg-transparent text-small m-0 border-color-extra-light-gray medium-input float-left" placeholder="Enter your keywords...">
                                    <button type="submit" class="bg-transparent  btn position-absolute right-0 top-1"><i class="fas fa-search no-margin-left"></i></button>
                                </div>   
                            </form>
                        </div>
                        <div class="margin-45px-bottom sm-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase text-small font-weight-600 aside-title"><span>About Me</span></div>
                            <a href="about-me.html"><img src="http://placehold.it/800x533" alt="" class="margin-25px-bottom"/></a>
                            <p class="margin-20px-bottom text-small">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard.</p>
                            <a class="btn btn-very-small btn-dark-gray text-uppercase" href="about-me.html">About Author</a>
                        </div>
                        <div class="margin-50px-bottom">
                            <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Follow Us</span></div>
                            <div class="social-icon-style-1 text-center">
                                <ul class="extra-small-icon">
                                    <li><a class="facebook" href="http://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a class="twitter" href="http://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a class="google" href="http://google.com" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a class="dribbble" href="http://dribbble.com" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                                    <li><a class="linkedin" href="http://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="margin-45px-bottom sm-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Categories</span></div>
                            <ul class="list-style-6 margin-50px-bottom text-small">
                                <li><a href="blog-masonry.html">Arts and Entertainment</a><span>12</span></li>
                                <li><a href="blog-masonry.html">Blog</a><span>05</span></li>
                                <li><a href="blog-masonry.html">Blog Full width</a><span>08</span></li>
                                <li><a href="blog-masonry.html">Blog Grid</a><span>10</span></li>
                                <li><a href="blog-masonry.html">Branding</a><span>21</span></li>
                                <li><a href="blog-masonry.html">Design Tutorials</a><span>09</span></li>
                                <li><a href="blog-masonry.html">Designing</a><span>07</span></li>
                                <li><a href="blog-masonry.html">Feature</a><span>06</span></li>
                                <li><a href="blog-masonry.html">Home Blog</a><span>10</span></li>
                                <li><a href="blog-masonry.html">Onepage Fashion</a><span>11</span></li>
                                <li><a href="blog-masonry.html">Sample</a><span>06</span></li>
                            </ul>   
                        </div>
                        <div class="bg-deep-pink padding-30px-all text-white-2 text-center margin-45px-bottom sm-margin-25px-bottom">
                            <i class="fas fa-quote-left icon-small margin-15px-bottom d-block"></i>
                            <span class="text-extra-large font-weight-300 margin-20px-bottom d-block">The future belongs to those who believe in the beauty of their dreams.</span>
                            <a class="btn btn-very-small btn-transparent-white border-width-1 text-uppercase" href="portfolio-boxed-grid-overlay.html">Explore Portfolio</a>
                        </div>
                        <div class="margin-45px-bottom sm-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Popular post</span></div>
                            <ul class="latest-post position-relative">
                                <li class="media">
                                    <figure>
                                        <a href="blog-masonry.html"><img src="http://placehold.it/480x358" alt=""></a>
                                    </figure>
                                    <div class="media-body text-small"><a href="blog-masonry.html" class="text-extra-dark-gray"><span class="d-inline-block margin-5px-bottom">Traveling abroad will change you forever</span></a> <span class="d-block text-medium-gray text-small">April 30, 2016</span></div>
                                </li>
                                <li class="media">
                                    <figure>
                                        <a href="blog-masonry.html"><img src="http://placehold.it/480x358" alt=""></a>
                                    </figure>
                                    <div class="media-body text-small"><a href="blog-masonry.html" class="text-extra-dark-gray"><span class="d-inline-block margin-5px-bottom">Having a new perspec-tive on new york city</span></a> <span class="d-block text-medium-gray text-small">March 10, 2016</span></div>
                                </li>
                                <li class="media">
                                    <figure>
                                        <a href="blog-masonry.html"><img src="http://placehold.it/480x358" alt=""></a>
                                    </figure>
                                    <div class="media-body text-small"><a href="blog-masonry.html" class="text-extra-dark-gray"><span class="d-inline-block margin-5px-bottom">The incredible talents of street performers</span></a> <span class="d-block text-medium-gray text-small">March 05, 2016</span></div>
                                </li>
                                <li class="media">
                                    <figure>
                                        <a href="blog-masonry.html"><img src="http://placehold.it/480x358" alt=""></a>
                                    </figure>
                                    <div class="media-body text-small"><a href="blog-masonry.html" class="text-extra-dark-gray"><span class="d-inline-block margin-5px-bottom">Praesent placerat risus quis eros</span></a> <span class="d-block text-medium-gray text-small">March  01, 2016</span></div>
                                </li>
                            </ul>
                        </div>
                        <div class="margin-45px-bottom sm-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>tags cloud</span></div>
                            <div class="tag-cloud">
                                <a href="blog-grid.html">ADVERTISEMENT</a>
                                <a href="blog-grid.html">ARTISTRY</a>
                                <a href="blog-grid.html">BLOG</a>
                                <a href="blog-grid.html">CONCEPTUAL</a>
                                <a href="blog-grid.html">DESIGN</a>
                                <a href="blog-grid.html">FASHION</a>
                                <a href="blog-grid.html">INSPIRATION</a>
                                <a href="blog-grid.html">SMART</a>
                                <a href="blog-grid.html">QUOTES</a>
                                <a href="blog-grid.html">UNIQUE</a>
                                <a href="blog-grid.html">CONCEPTS</a>
                            </div>
                        </div>
                        <div class="margin-45px-bottom sm-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Archive</span></div>
                            <ul class="list-style-6 margin-20px-bottom text-small">
                                <li><a href="blog-grid.html">July 2017</a><span>12</span></li>
                                <li><a href="blog-grid.html">June 2017</a><span>05</span></li>
                                <li><a href="blog-grid.html">May 2017</a><span>08</span></li>
                                <li><a href="blog-grid.html">April 2017</a><span>10</span></li>
                                <li><a href="blog-grid.html">March 2017</a><span>21</span></li>
                                <li><a href="blog-grid.html">February 2017</a><span>09</span></li>
                                <li><a href="blog-grid.html">January 2017</a><span>07</span></li>
                            </ul>   
                        </div>
                        <div class="margin-45px-bottom sm-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Newsletter</span></div>
                            <div class="d-inline-block width-100">
                                <form>
                                    <div class="position-relative">
                                        <input type="email" class="bg-transparent text-small m-0 border-color-extra-light-gray medium-input float-left" placeholder="Enter your email...">
                                        <button type="submit" class="bg-transparent text-large btn position-absolute right-0 top-3"><i class="far fa-envelope no-margin-left"></i></button>
                                    </div>   
                                </form>
                            </div>
                        </div>
                        <div>
                            <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Instagram</span></div>
                            <div class="instagram-follow-api">
                                <ul id="instaFeed-aside"></ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
        <!-- end blog content section -->  

      
    </main>
    
@endsection

@section('footer')

 @include('partials.footer')
    
@endsection