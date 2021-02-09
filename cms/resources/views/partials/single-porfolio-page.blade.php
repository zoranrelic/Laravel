@extends('layouts.blog')

@section('title')
    single portfolio page
@endsection


<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- title -->
        <title>POFO – Creative Agency, Corporate and Portfolio Multi-purpose Template</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="author" content="ThemeZaa">
        <!-- description -->
        <meta name="description" content="POFO is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template with 25 ready home page demos.">
        <!-- keywords -->
        <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        <!-- animation -->
        <link rel="stylesheet" href="css/animate.css" />
        <!-- bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- et line icon --> 
        <link rel="stylesheet" href="css/et-line-icons.css" />
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <!-- themify icon -->
        <link rel="stylesheet" href="css/themify-icons.css">
        <!-- swiper carousel -->
        <link rel="stylesheet" href="css/swiper.min.css">
        <!-- justified gallery  -->
        <link rel="stylesheet" href="css/justified-gallery.min.css">
        <!-- magnific popup -->
        <link rel="stylesheet" href="css/magnific-popup.css" />
        <!-- revolution slider -->
        <link rel="stylesheet" type="text/css" href="revolution/css/settings.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">
        <!-- bootsnav -->
        <link rel="stylesheet" href="css/bootsnav.css">
        <!-- style -->
        <link rel="stylesheet" href="css/style.css" />
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css" />
        <!--[if IE]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
    </head>
    <body>
        @section('header')

    @include('partials.header')


    @endsection
        <!-- start product hero section -->
        <section id="home" class="p-0 parallax mobile-height wow fadeIn" data-stellar-background-ratio="0.5" style="background-image:url('http://placehold.it/1920x1200');">
            <div class="opacity-full bg-black"></div>
            <div class="container position-relative full-screen">
                <div class="slider-typography text-center">
                    <div class="slider-text-middle-main">
                        <div class="slider-text-middle">
                            <div class="text-bottom-line border-color-deep-pink margin-25px-bottom"></div>
                            <h1 class="text-white-2 alt-font font-weight-700">Filamento Lamps</h1>
                            <span class="width-60 mx-auto text-extra-large d-block margin-20px-top line-height-30 sm-width-90">Based in Guadalajara and founded by Enrique, Filamento creates beautiful lamp designs with an eye on simplicity for the modern homes.</span>
                            <div class="down-section text-center"><a href="#down-section" class="inner-link"><i class="ti-arrow-down icon-extra-small text-white-2 bg-deep-pink padding-15px-all sm-padding-10px-all rounded-circle"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end product hero section -->
        <!-- start product information section -->
        <section class="wow fadeIn big-section" id="down-section">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-11 mx-auto text-center margin-70px-bottom md-margin-50px-bottom sm-margin-30px-bottom wow fadeInUp">
                        <h6 class="alt-font text-extra-dark-gray mb-0">Holistic brand redesign focusing product design, interface design, studio photograph style, icon design, editorial design, web design & motion design.</h6>
                    </div>
                </div>
                <div class="row margin-70px-bottom md-margin-50px-bottom sm-margin-30px-bottom">
                    <div class="col-12 col-lg-3 padding-30px-lr fadeInUp">
                        <ul class="list-style-6">
                            <li class="text-extra-small text-uppercase text-black font-weight-500 line-height-22">Client</li>
                            <li>Filamento Lamps</li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-3 padding-30px-lr fadeInUp">
                        <ul class="list-style-6">
                            <li class="text-extra-small text-uppercase text-black font-weight-500 line-height-22">Industry</li>
                            <li>Lighting, Decoration</li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-3 padding-30px-lr fadeInUp">
                        <ul class="list-style-6">
                            <li class="text-extra-small text-uppercase text-black font-weight-500 line-height-22">Services</li>
                            <li>Design, Art Direction, Website</li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-3 padding-30px-lr fadeInUp">
                        <ul class="list-style-6">
                            <li class="text-extra-small text-uppercase text-black font-weight-500 line-height-22">Art Director</li>
                            <li>Jackson Smith</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-10 mx-auto text-center wow fadeInUp" data-wow-delay="0.4s">
                        <a href="index.html" class="btn btn-transparent-dark-gray btn-large">Launch Website</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end product information section -->
        <!-- start product image section -->
        <section class="wow fadeIn p-0">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-12 col-lg-6 wow fadeInUp">
                        <img src="http://placehold.it/1000x673" class="width-100" alt=""/>
                    </div>
                    <div class="col-12 col-lg-6 wow fadeInUp">
                        <img src="http://placehold.it/1000x673" class="width-100" alt=""/>
                    </div>
                </div>
            </div>
        </section>
        <!-- end product image section -->
        <!-- start product information section -->
        <section class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5 offset-lg-1 line-height-28 wow fadeInUp">
                        <ul class="list-style-6">
                            <li class="text-extra-small text-uppercase text-black font-weight-500 line-height-22">About Project</li>
                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-5 offset-lg-1 line-height-28 wow fadeInUp" data-wow-delay="0.2s">
                        <ul class="list-style-6">
                            <li class="text-extra-small text-uppercase text-black font-weight-500 line-height-22">Project Brief</li>
                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end product information section -->
        <!-- start product slider section -->
        <section class="wow fadeIn p-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="swiper-blog white-move">
                            <div class="swiper-wrapper">
                                <!-- start slider item -->
                                <div class="swiper-slide width-50 md-width-80 sm-width-100">
                                    <img src="http://placehold.it/1000x673" class="width-100" alt=""/>
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide width-50 md-width-80 sm-width-100">
                                    <img src="http://placehold.it/1000x673" class="width-100" alt=""/>
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide width-50 md-width-80 sm-width-100">
                                    <img src="http://placehold.it/1000x673" class="width-100" alt=""/>
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide width-50 md-width-80 sm-width-100">
                                    <img src="http://placehold.it/1000x673" class="width-100" alt=""/>
                                </div>
                                <!-- end slider item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end product slider section -->
        <!-- start product video section -->
        <section class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-11 mx-auto text-center margin-70px-bottom sm-margin-15px-bottom wow fadeInUp">
                        <span class="text-uppercase alt-font text-small text-medium-gray margin-5px-bottom d-block">How to make decorative light</span>
                        <h6 class="alt-font text-extra-dark-gray mb-0">Holistic brand redesign focusing product design, interface design, studio photograph style, icon design, editorial design, web design & motion design.</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center d-table md-margin-50px-bottom sm-margin-30px-bottom mx-auto wow fadeIn">
                        <div class="d-table-cell align-middle">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                                <img src="http://placehold.it/1000x673" class="width-100" alt=""/>
                                <div class="icon-play">
                                    <div class="absolute-middle-center">
                                        <img src="images/icon-play.png" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end product video section -->
        <!-- start progress bar section -->
        <section class="wow fadeIn bg-light-gray">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 wow fadeIn last-paragraph-no-margin padding-ten-right md-padding-15px-lr text-center text-lg-left md-padding-30px-bottom">
                        <h6 class="text-extra-dark-gray width-90 alt-font md-width-100 margin-15px-bottom">Project skills & expertise</h6>
                        <p class="width-90 margin-30px-bottom md-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum has been the industry's standard dummy text since. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    </div>
                    <div class="col-12 col-lg-6 wow fadeIn">
                        <div class="skillbar-bar-main skillbar-bar-style2">
                            <!-- start progress bar item -->
                            <div class="skillbar margin-45px-bottom" data-percent="92%">
                                <span class="skill-bar-text text-extra-small text-uppercase text-dark-gray">Jquery - 4 years Experience</span>
                                <p class="skillbar-bar"></p>
                                <span class="skill-bar-percent text-small"></span>
                            </div>
                            <!-- end progress bar item -->
                            <!-- start progress bar item -->
                            <div class="skillbar margin-45px-bottom" data-percent="97%">
                                <span class="skill-bar-text text-extra-small text-uppercase text-dark-gray">Wordpress - 6 years Experience</span>
                                <p class="skillbar-bar"></p>
                                <span class="skill-bar-percent text-small"></span>
                            </div>
                            <!-- end progress bar item -->
                            <!-- start progress bar item -->
                            <div class="skillbar margin-45px-bottom" data-percent="98%">
                                <span class="skill-bar-text text-extra-small text-uppercase text-dark-gray">HTML5 - 5 years Experience</span>
                                <p class="skillbar-bar"></p>
                                <span class="skill-bar-percent text-small"></span>
                            </div>
                            <!-- end progress bar item -->
                            <!-- start progress bar item -->
                            <div class="skillbar" data-percent="92%">
                                <span class="skill-bar-text text-extra-small text-uppercase text-dark-gray">Photography - 6 years Experience</span>
                                <p class="skillbar-bar"></p>
                                <span class="skill-bar-percent text-small"></span>
                            </div>
                            <!-- end progress bar item -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end progress bar section -->
        <!-- start parallax section -->
        <section id="home-bottom" class="parallax one-fourth-screen wow fadeIn" data-stellar-background-ratio="0.2" style="background-image:url('http://placehold.it/1920x1292');">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    </div>
                </div>
            </div>
        </section>
        <!-- end parallax section -->
        <!-- start blockquote section -->
        <section class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-7 mx-auto text-center">
                        <i class="fas fa-quote-left icon-small text-deep-pink d-block margin-25px-bottom"></i>
                        <h6 class="alt-font text-extra-dark-gray">This is an excellent company! I personally enjoyed the energy and the professional support the whole team gave to us into creating website.</h6>
                        <span class="text-uppercase text-extra-small alt-font letter-spacing-3 text-medium-gray">Mattie Stepanek</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- end blockquote section -->
        <!-- start blog navigation bar section -->
        <section class="wow fadeIn border-top border-color-medium-gray no-padding">
            <div class="container-fluid p-0">
                <div class="row justify-content-between align-items-center no-gutters padding-30px-lr md-padding-15px-lr">
                    <div class="width-45 text-left">
                        <div class="blog-nav-link blog-nav-link-prev text-extra-dark-gray">
                            <span class="text-medium-gray text-extra-small text-uppercase d-none d-md-block">Previous Project</span>
                            <a href="single-project-page-01.html">
                                <i class="ti-arrow-left blog-nav-icon"></i>
                                Mammut adventure
                            </a>
                        </div>
                    </div>
                    <div class="width-10 text-center">
                        <a href="portfolio-boxed-grid-overlay.html" class="blog-nav-link blog-nav-home"><i class="ti-layout-grid2-alt"></i></a>
                    </div>
                    <div class="width-45 text-right">
                        <div class="blog-nav-link blog-nav-link-next text-extra-dark-gray">    
                            <span class="text-medium-gray text-extra-small text-uppercase d-none d-md-block">Next Project</span>
                            <a href="single-project-page-03.html">
                                <i class="ti-arrow-right blog-nav-icon"></i>
                                Aura Herbals
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end blog navigation bar section -->
        @section('footer')

        @include('partials.footer')
           
        @endsection
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
        <!-- end scroll to top  -->
        <!-- javascript libraries -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/modernizr.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/skrollr.min.js"></script>
        <script type="text/javascript" src="js/smooth-scroll.js"></script>
        <script type="text/javascript" src="js/jquery.appear.js"></script>
        <!-- menu navigation -->
        <script type="text/javascript" src="js/bootsnav.js"></script>
        <script type="text/javascript" src="js/jquery.nav.js"></script>
        <!-- animation -->
        <script type="text/javascript" src="js/wow.min.js"></script>
        <!-- page scroll -->
        <script type="text/javascript" src="js/page-scroll.js"></script>
        <!-- swiper carousel -->
        <script type="text/javascript" src="js/swiper.min.js"></script>
        <!-- counter -->
        <script type="text/javascript" src="js/jquery.count-to.js"></script>
        <!-- parallax -->
        <script type="text/javascript" src="js/jquery.stellar.js"></script>
        <!-- magnific popup -->
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <!-- portfolio with shorting tab -->
        <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
        <!-- images loaded -->
        <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
        <!-- pull menu -->
        <script type="text/javascript" src="js/classie.js"></script>
        <script type="text/javascript" src="js/hamburger-menu.js"></script>
        <!-- counter  -->
        <script type="text/javascript" src="js/counter.js"></script>
        <!-- fit video  -->
        <script type="text/javascript" src="js/jquery.fitvids.js"></script>
        <!-- skill bars  -->
        <script type="text/javascript" src="js/skill.bars.jquery.js"></script> 
        <!-- justified gallery  -->
        <script type="text/javascript" src="js/justified-gallery.min.js"></script>
        <!-- scrollie  -->
        <!--pie chart-->
        <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
        <!-- retina -->
        <script type="text/javascript" src="js/retina.min.js"></script>
        <!-- revolution -->
        <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
        <!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->
        <!--<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>-->
        <!-- setting -->
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>