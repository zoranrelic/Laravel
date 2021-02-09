@extends('layouts.blog')

@section('title')
    contact
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
        <!-- start page title section -->
        <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('http://placehold.it/1920x1100');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 extra-small-screen page-title-large d-flex flex-column justify-content-center text-center">
                        <!-- start page title -->
                        <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-15px-bottom">Contact us classic</h1>
                        <!-- end page title -->
                        <!-- start sub title -->
                        <span class="text-white-2 opacity6 alt-font">Unlimited power and customization possibilities</span>
                        <!-- end sub title -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title section -->
        <!-- start contact info -->
        <section class="wow fadeIn">
            <div class="container px-0">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6 col-md-8 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center last-paragraph-no-margin">
                        <h5 class="alt-font font-weight-700 text-extra-dark-gray text-uppercase mb-0">We love to talk</h5>
                    </div>  
                </div>
                <div class="row">
                    <!-- start contact info item -->
                    <div class="col-12 col-lg-3 col-md-6 text-center md-margin-eight-bottom sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin">
                        <div class="d-inline-block margin-20px-bottom">
                            <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-map-pin icon-medium text-white-2"></i></div>
                        </div>
                        <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Visit Our Office</div>
                        <p class="mx-auto">401 Broadway, 24th Floor<br>New York, NY 10013.</p>
                        <a href="#" class="text-decoration-line-through-deep-pink text-uppercase text-deep-pink text-small margin-15px-top sm-margin-10px-top d-inline-block">GET DIRECTION</a>
                    </div>
                    <!-- end contact info item -->
                    <!-- start contact info item -->
                    <div class="col-12 col-lg-3 col-md-6 text-center md-margin-eight-bottom sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                        <div class="d-inline-block margin-20px-bottom">
                            <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-chat icon-medium text-white-2"></i></div>
                        </div>
                        <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Let's Talk</div>
                        <p class="mx-auto">Phone: 1-800-222-000<br>Fax: 1-800-222-002</p>
                        <a href="#" class="text-decoration-line-through-deep-pink text-uppercase text-deep-pink text-small margin-15px-top sm-margin-10px-top d-inline-block">call us</a>
                    </div>
                    <!-- end contact info item -->
                    <!-- start contact info item -->
                    <div class="col-12 col-lg-3 col-md-6 text-center sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                        <div class="d-inline-block margin-20px-bottom">
                            <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-envelope icon-medium text-white-2"></i></div>
                        </div>
                        <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">E-mail Us</div>
                        <p class="mx-auto"><a href="mailto:info@yourdomain.com">info@yourdomain.com</a><br><a href="mailto:hr@yourdomain.com">hr@yourdomain.com</a></p>
                        <a href="#" class="text-decoration-line-through-deep-pink text-uppercase text-deep-pink text-small margin-15px-top sm-margin-10px-top d-inline-block">send e-mail</a>
                    </div>
                    <!-- end contact info item -->
                    <!-- start contact info item -->
                    <div class="col-12 col-lg-3 col-md-6 text-center wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.6s">
                        <div class="d-inline-block margin-20px-bottom">
                            <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-megaphone icon-medium text-white-2"></i></div>
                        </div>
                        <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Customer Services</div>
                        <p class="mx-auto">Lorem Ipsum is simply dummy<br>text of the printing.</p>
                        <a href="#" class="text-decoration-line-through-deep-pink text-uppercase text-deep-pink text-small margin-15px-top sm-margin-10px-top d-inline-block">open ticket</a>
                    </div>
                    <!-- end contact info item -->
                </div>
            </div>
        </section>
        <!-- end contact info section -->
        <!-- start contact form -->
        <section id="contact" class="wow fadeIn p-0 bg-extra-dark-gray">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-6 cover-background md-height-450px sm-height-350px wow fadeIn" style="background: url(http://placehold.it/1200x854)"></div>
                    <div class="col-12 col-lg-6 text-center padding-six-lr padding-five-half-tb md-padding-ten-half-tb md-padding-twelve-half-lr sm-padding-15px-lr wow fadeIn">
                        <div class="text-medium-gray alt-font text-small text-uppercase margin-5px-bottom sm-margin-three-bottom">Fill out the form and we'll be in touch soon!</div>
                        <h5 class="margin-55px-bottom text-white-2 alt-font font-weight-700 text-uppercase sm-margin-ten-bottom">Ready to request a quote?</h5>
                        <form id="project-contact-form" action="javascript:void(0)" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <div id="success-project-contact-form" class="mx-0"></div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="text" name="name" id="name" placeholder="Name *" class="bg-transparent border-color-medium-dark-gray medium-input">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="text" name="phone" id="phone" placeholder="Phone" class="bg-transparent border-color-medium-dark-gray medium-input">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="text" name="email" id="email" placeholder="E-mail *" class="bg-transparent border-color-medium-dark-gray medium-input">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="select-style bg-transparent border-color-medium-dark-gray medium-select">
                                        <select name="budget" id="budget" class="bg-transparent mb-0">
                                            <option value="">Select your budget</option>
                                            <option value="$500 - $1000">$500 - $1000</option>
                                            <option value="$1000 - $2000">$1000 - $2000</option>
                                            <option value="$2000 - $5000">$2000 - $5000</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <textarea name="comment" id="comment" placeholder="Describe your project" rows="7" class="bg-transparent border-color-medium-dark-gray medium-textarea"></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button id="project-contact-us-button" type="submit" class="btn btn-deep-pink btn-medium margin-15px-top">send message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- end contact form -->
        <!-- start map section -->
        <section class="p-0 one-second-screen md-height-400px wow fadeIn"><iframe class="w-100 h-100" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJo7XpBq3XZUcRlehXS1R5CPk&key=AIzaSyBW8bWcPDeusg0V__ufb5fZk9xclrjA_C0" allowfullscreen"></iframe></section>
        <!-- end map section -->
        <!-- start social section -->
        <section class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center social-style-1 social-icon-style-5">
                        <ul class="large-icon mb-0">
                            <li><a class="facebook" href="http://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i><span></span></a></li>
                            <li><a class="twitter" href="http://twitter.com" target="_blank"><i class="fab fa-twitter"></i><span></span></a></li>
                            <li><a class="google" href="http://google.com" target="_blank"><i class="fab fa-google-plus-g"></i><span></span></a></li>
                            <li><a class="dribbble" href="http://dribbble.com" target="_blank"><i class="fab fa-dribbble"></i><span></span></a></li>
                            <li><a class="linkedin" href="http://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i><span></span></a></li>
                        </ul>
                    </div>                   
                </div>
            </div>
        </section>
        <!-- end social section -->

        
@section('footer')

@include('partials.footer')
   
@endsection