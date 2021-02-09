<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    

    <!--new code-->
     <!-- title -->
     <title>{{ config('app.name', 'Laravel') }}</title>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
     <meta name="author" content="ThemeZaa">
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <!-- description -->
     <meta name="description" content="POFO is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template with 25 ready home page demos.">
     <!-- keywords -->
     <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
     <!-- favicon -->
     <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
     <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon-57x57.png') }}">
     <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png') }}">
     <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png') }}">
     <!-- animation -->
     <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
     <!-- bootstrap -->
     <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
     <!-- et line icon --> 
     <link rel="stylesheet" href="{{ asset('css/et-line-icons.css') }}" />
     <!-- font-awesome icon -->
     <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
     <!-- themify icon -->
     <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
     <!-- swiper carousel -->
     <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
     <!-- justified gallery  -->
     <link rel="stylesheet" href="{{ asset('css/justified-gallery.min.css') }}">
     <!-- magnific popup -->
     <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />
     <!-- revolution slider -->
     <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/settings.css') }}" media="screen" />
     <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/layers.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/navigation.css') }}">
     <!-- bootsnav -->
     <link rel="stylesheet" href="{{ asset('css/bootsnav.css') }}">
     <!-- style -->
     <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
     <!-- responsive css -->
     <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
     <!--[if IE]>
         <script src="js/html5shiv.js"></script>
     <![endif]-->
    @yield('css')
</head>
<body>

    
    <div id="app">
        @yield('header')
       

        <main class="py-4">
           
            @auth

                <div class="navbar-collapse collapse justify-content-end">
                    @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                    
                    @endif
                    @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                    
                    @endif
                    <div class="row">
                        <div class="col-md-4">

                            <ul id="accordion" class="nav navbar-nav no-margin alt-font text-normal" data-in="fadeIn" data-out="fadeOut">
                                @if(auth()->user()->isAdmin())

                                    <li class="megamenu-fw">
                                        <a href=" {{ route('users.index') }}">
                                            Users
                                        </a>
                                    </li>

                                @endif
                            </ul>
        
                            <ul class="id="accordion" class="nav navbar-nav no-margin alt-font text-normal" data-in="fadeIn" data-out="fadeOut"">
                            <li class="megamenu-fw"><a href=" {{ route('posts.index') }}">Posts</a></li>
                            
                            </ul>

                            <ul class="id="accordion" class="nav navbar-nav no-margin alt-font text-normal" data-in="fadeIn" data-out="fadeOut"">
                            <li class="megamenu-fw"><a href=" {{ route('categories.index') }}">Categories</a></li>
                            </ul>

                            <ul class="id="accordion" class="nav navbar-nav no-margin alt-font text-normal" data-in="fadeIn" data-out="fadeOut"">
                                
                                <li class="megamenu-fw"><a href=" {{ route('tags.index') }}">Tags</a></li>
                                </ul>

                            <ul class="id="accordion" class="nav navbar-nav no-margin alt-font text-normal" data-in="fadeIn" data-out="fadeOut"">
                               
                                <li class="megamenu-fw"><a href=" {{ route('trashed-posts.index') }}">Trashed Posts</a></li>
                            </ul>
    
                                                        <!-- Authentication Links -->
                                    @guest
                                    @if (Route::has('login'))
                                        <li class="megamenu-fw">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif
                                    
                                    @if (Route::has('register'))
                                        <li class="megamenu-fw">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="megamenu-fw">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('users.edit-profile') }}">
                                                My Profile
                                            </a>
                                            
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            
        
                        </div>
        
                        <div class="col-md-8">
        
                            @yield('content')
        
                        </div>
                    </div>
                </div>

            @else
                @yield('content')
            @endauth
            
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')

    <!-- start scroll to top -->
    <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
    <!-- end scroll to top  -->
    <!-- javascript libraries -->
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/skrollr.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/smooth-scroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.appear.js') }}"></script>
    <!-- menu navigation -->
    <script type="text/javascript" src="{{ asset('js/bootsnav.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.nav.js') }}"></script>
    <!-- animation -->
    <script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
    <!-- page scroll -->
    <script type="text/javascript" src="{{ asset('js/page-scroll.js') }}"></script>
    <!-- swiper carousel -->
    <script type="text/javascript" src="{{ asset('js/swiper.min.js') }}"></script>
    <!-- counter -->
    <script type="text/javascript" src="{{ asset('js/jquery.count-to.js') }}"></script>
    <!-- parallax -->
    <script type="text/javascript" src="{{ asset('js/jquery.stellar.js') }}"></script>
    <!-- magnific popup -->
    <script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- portfolio with shorting tab -->
    <script type="text/javascript" src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <!-- images loaded -->
    <script type="text/javascript" src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- pull menu -->
    <script type="text/javascript" src="{{ asset('js/classie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/hamburger-menu.js') }}"></script>
    <!-- counter  -->
    <script type="text/javascript" src="{{ asset('js/counter.js') }}"></script>
    <!-- fit video  -->
    <script type="text/javascript" src="{{ asset('js/jquery.fitvids.js') }}"></script>
    <!-- skill bars  -->
    <script type="text/javascript" src="{{ asset('js/skill.bars.jquery.js') }}"></script> 
    <!-- justified gallery  -->
    <script type="text/javascript" src="{{ asset('js/justified-gallery.min.js') }}"></script>
    <!--pie chart-->
    <script type="text/javascript" src="{{ asset('js/jquery.easypiechart.min.js') }}"></script>
    <!-- retina -->
    <script type="text/javascript" src="{{ asset('js/retina.min.js') }}"></script>
    <!-- revolution -->
    <script type="text/javascript" src="{{ asset('revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js')"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
    <!-- setting -->
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>
</html>
