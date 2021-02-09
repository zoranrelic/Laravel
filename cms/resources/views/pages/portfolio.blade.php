@extends('layouts.blog')

@section('title')
    Portfolio
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
                    <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">Portfolio grid with icon</h1>
                    <!-- end page title -->
                    <!-- start sub title -->
                    <span class="text-white-2 opacity6 alt-font">Choose from our wide range of portfolio layouts</span>
                    <!-- end sub title -->
                </div>
            </div>
        </div>
    </section>
    <!-- end page title section -->
    <!-- start portfolio section -->
    <section class="wow fadeIn padding-90px-top bg-light-gray md-padding-50px-top sm-padding-30px-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- start filter navigation -->
                    <ul class="portfolio-filter nav nav-tabs justify-content-center border-0 portfolio-filter-tab-1 font-weight-600 alt-font text-uppercase text-center margin-80px-bottom text-small md-margin-40px-bottom sm-margin-20px-bottom">
                        <li class="nav active"><a href="javascript:void(0);" data-filter="*" class="light-gray-text-link text-very-small">All</a></li>
                        <li class="nav"><a href="javascript:void(0);" data-filter=".web" class="light-gray-text-link text-very-small">Web</a></li>
                        <li class="nav"><a href="javascript:void(0);" data-filter=".advertising" class="light-gray-text-link text-very-small">Advertising</a></li>
                        <li class="nav"><a href="javascript:void(0);" data-filter=".branding" class="light-gray-text-link text-very-small">Branding</a></li>
                        <li class="nav"><a href="javascript:void(0);" data-filter=".design" class="light-gray-text-link text-very-small">Design</a></li>
                        <li class="nav"><a href="javascript:void(0);" data-filter=".photography" class="light-gray-text-link text-very-small">Photography</a></li>
                    </ul>                                                                           
                    <!-- end filter navigation -->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 px-3 p-md-0">
                    <div class="filter-content overflow-hidden">
                        <ul class="portfolio-grid work-3col gutter-medium hover-option6 lightbox-portfolio">
                            <li class="grid-sizer"></li>
                            <!-- start portfolio-item item -->
                            <li class="design web photography grid-item wow fadeInUp last-paragraph-no-margin">
                                <figure>
                                    <div class="portfolio-img bg-deep-pink position-relative text-center overflow-hidden">
                                        <img src="http://placehold.it/800x650" alt=""/>
                                        <div class="portfolio-icon">
                                            <a href="single-project-page-01.html"><i class="fas fa-link text-extra-dark-gray" aria-hidden="true"></i></a>
                                            <a class="gallery-link" title="IMAGE TITLE" href="http://placehold.it/800x650"><i class="fas fa-search text-extra-dark-gray" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <figcaption class="bg-white">
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <a href="single-project-page-01.html"><span class="line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block">Herbal Beauty Salon</span></a>
                                                    <p class="text-medium-gray text-extra-small text-uppercase">Branding and Identity</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="advertising grid-item wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                                <figure>
                                    <div class="portfolio-img bg-deep-pink position-relative text-center overflow-hidden">
                                        <img src="http://placehold.it/800x650" alt=""/>
                                        <div class="portfolio-icon">
                                            <a href="single-project-page-02.html"><i class="fas fa-link text-extra-dark-gray" aria-hidden="true"></i></a>
                                            <a class="gallery-link" title="IMAGE TITLE" href="http://placehold.it/800x650"><i class="fas fa-search text-extra-dark-gray" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <figcaption class="bg-white">
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <a href="single-project-page-02.html"><span class="line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block">Tailoring Interior</span></a>
                                                    <p class="text-medium-gray text-extra-small text-uppercase">Branding and Brochure</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="branding photography advertising web grid-item wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                                <figure>
                                    <div class="portfolio-img bg-deep-pink position-relative text-center overflow-hidden">
                                        <img src="http://placehold.it/800x650" alt=""/>
                                        <div class="portfolio-icon">
                                            <a href="single-project-page-03.html"><i class="fas fa-link text-extra-dark-gray" aria-hidden="true"></i></a>
                                            <a class="gallery-link" title="IMAGE TITLE" href="http://placehold.it/800x650"><i class="fas fa-search text-extra-dark-gray" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <figcaption class="bg-white">
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <a href="single-project-page-03.html"><span class="line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block">Designblast Inc</span></a>
                                                    <p class="text-medium-gray text-extra-small text-uppercase">Web and Photography</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="design photography grid-item wow fadeInUp last-paragraph-no-margin">
                                <figure>
                                    <div class="portfolio-img bg-deep-pink position-relative text-center overflow-hidden">
                                        <img src="http://placehold.it/800x650" alt=""/>
                                        <div class="portfolio-icon">
                                            <a href="single-project-page-04.html"><i class="fas fa-link text-extra-dark-gray" aria-hidden="true"></i></a>
                                            <a class="gallery-link" title="IMAGE TITLE" href="http://placehold.it/800x650"><i class="fas fa-search text-extra-dark-gray" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <figcaption class="bg-white">
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <a href="single-project-page-04.html"><span class="line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block">HardDot Stone</span></a>
                                                    <p class="text-medium-gray text-extra-small text-uppercase">Branding and Identity</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="design branding grid-item wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                                <figure>
                                    <div class="portfolio-img bg-deep-pink position-relative text-center overflow-hidden">
                                        <img src="http://placehold.it/800x650" alt=""/>
                                        <div class="portfolio-icon">
                                            <a href="single-project-page-05.html"><i class="fas fa-link text-extra-dark-gray" aria-hidden="true"></i></a>
                                            <a class="gallery-link" title="IMAGE TITLE" href="http://placehold.it/800x650"><i class="fas fa-search text-extra-dark-gray" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <figcaption class="bg-white">
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <a href="single-project-page-05.html"><span class="line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block">Crop Identity</span></a>
                                                    <p class="text-medium-gray text-extra-small text-uppercase">Branding and Brochure</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="advertising web grid-item wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                                <figure>
                                    <div class="portfolio-img bg-deep-pink position-relative text-center overflow-hidden">
                                        <img src="http://placehold.it/800x650" alt=""/>
                                        <div class="portfolio-icon">
                                            <a href="single-project-page-06.html"><i class="fas fa-link text-extra-dark-gray" aria-hidden="true"></i></a>
                                            <a class="gallery-link" title="IMAGE TITLE" href="http://placehold.it/800x650"><i class="fas fa-search text-extra-dark-gray" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <figcaption class="bg-white">
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <a href="single-project-page-06.html"><span class="line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block">Violator Series</span></a>
                                                    <p class="text-medium-gray text-extra-small text-uppercase">Web and Photography</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="branding advertising grid-item wow fadeInUp last-paragraph-no-margin">
                                <figure>
                                    <div class="portfolio-img bg-deep-pink position-relative text-center overflow-hidden">
                                        <img src="http://placehold.it/800x650" alt=""/>
                                        <div class="portfolio-icon">
                                            <a href="single-project-page-02.html"><i class="fas fa-link text-extra-dark-gray" aria-hidden="true"></i></a>
                                            <a class="gallery-link" title="IMAGE TITLE" href="http://placehold.it/800x650"><i class="fas fa-search text-extra-dark-gray" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <figcaption class="bg-white">
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <a href="single-project-page-02.html"><span class="line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block">Potato Islands</span></a>
                                                    <p class="text-medium-gray text-extra-small text-uppercase">Web and Photography</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="advertising web grid-item wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                                <figure>
                                    <div class="portfolio-img bg-deep-pink position-relative text-center overflow-hidden">
                                        <img src="http://placehold.it/800x650" alt=""/>
                                        <div class="portfolio-icon">
                                            <a href="single-project-page-03.html"><i class="fas fa-link text-extra-dark-gray" aria-hidden="true"></i></a>
                                            <a class="gallery-link" title="IMAGE TITLE" href="http://placehold.it/800x650"><i class="fas fa-search text-extra-dark-gray" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <figcaption class="bg-white">
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <a href="single-project-page-03.html"><span class="line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block">Daimler Financial</span></a>
                                                    <p class="text-medium-gray text-extra-small text-uppercase">Web and Photography</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="branding web grid-item wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                                <figure>
                                    <div class="portfolio-img bg-deep-pink position-relative text-center overflow-hidden">
                                        <img src="http://placehold.it/800x650" alt=""/>
                                        <div class="portfolio-icon">
                                            <a href="single-project-page-04.html"><i class="fas fa-link text-extra-dark-gray" aria-hidden="true"></i></a>
                                            <a class="gallery-link" title="IMAGE TITLE" href="http://placehold.it/800x650"><i class="fas fa-search text-extra-dark-gray" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <figcaption class="bg-white">
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <a href="single-project-page-04.html"><span class="line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block">Skoda Corporate</span></a>
                                                    <p class="text-medium-gray text-extra-small text-uppercase">Web and Photography</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="design photography branding grid-item wow fadeInUp last-paragraph-no-margin">
                                <figure>
                                    <div class="portfolio-img bg-deep-pink position-relative text-center overflow-hidden">
                                        <img src="http://placehold.it/800x650" alt=""/>
                                        <div class="portfolio-icon">
                                            <a href="single-project-page-07.html"><i class="fas fa-link text-extra-dark-gray" aria-hidden="true"></i></a>
                                            <a class="gallery-link" title="IMAGE TITLE" href="http://placehold.it/800x650"><i class="fas fa-search text-extra-dark-gray" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <figcaption class="bg-white">
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <a href="single-project-page-07.html"><span class="line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block">Jeremy Dupont</span></a>
                                                    <p class="text-medium-gray text-extra-small text-uppercase">Branding and Identity</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="branding advertising web grid-item wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                                <figure>
                                    <div class="portfolio-img bg-deep-pink position-relative text-center overflow-hidden">
                                        <img src="http://placehold.it/800x650" alt=""/>
                                        <div class="portfolio-icon">
                                            <a href="single-project-page-08.html"><i class="fas fa-link text-extra-dark-gray" aria-hidden="true"></i></a>
                                            <a class="gallery-link" title="IMAGE TITLE" href="http://placehold.it/800x650"><i class="fas fa-search text-extra-dark-gray" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <figcaption class="bg-white">
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <a href="single-project-page-08.html"><span class="line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block">Bill Gardner</span></a>
                                                    <p class="text-medium-gray text-extra-small text-uppercase">Web and Photography</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="branding advertising web grid-item wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                                <figure>
                                    <div class="portfolio-img bg-deep-pink position-relative text-center overflow-hidden">
                                        <img src="http://placehold.it/800x650" alt=""/>
                                        <div class="portfolio-icon">
                                            <a href="single-project-page-01.html"><i class="fas fa-link text-extra-dark-gray" aria-hidden="true"></i></a>
                                            <a class="gallery-link" title="IMAGE TITLE" href="http://placehold.it/800x650"><i class="fas fa-search text-extra-dark-gray" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <figcaption class="bg-white">
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <a href="single-project-page-01.html"><span class="line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block">The Aparthotel</span></a>
                                                    <p class="text-medium-gray text-extra-small text-uppercase">Web and Photography</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                            <!-- end portfolio item -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end portfolio section -->
    <!-- start call to action section -->
    <section class="wow fadeIn padding-50px-tb border-top border-color-extra-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 md-margin-30px-bottom text-center text-lg-left wow fadeInDown"> 
                    <span class="alt-font text-extra-large text-extra-dark-gray margin-5px-top md-no-margin-top d-inline-block width-100">We would love to hear about start your new project?</span>
                </div>
                <div class="col-12 col-lg-4 text-center text-lg-left wow fadeInDown"> 
                    <a href="contact-us-modern.html" class="btn btn-medium btn-rounded btn-transparent-dark-gray" data-wow-delay="0.4s">Start New Projects <i class="ti-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- end call to action section -->

      
    </main>
    
@endsection

@section('footer')

 @include('partials.footer')
    
@endsection
