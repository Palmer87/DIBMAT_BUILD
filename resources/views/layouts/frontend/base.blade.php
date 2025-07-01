<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- META -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <meta name="robots" content="" />    
        <meta name="description" content="" />
        <!-- FAVICONS ICON -->
        <link rel="icon" href="{{ url('assets/front/images/logo_dibmat.ico') }}" type="image/x-icon" />
        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
        <!-- PAGE TITLE HERE -->
        <title>DIBMAT & BUILD</title>
        <!-- MOBILE SPECIFIC -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- BOOTSTRAP STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="{{ url('assets/front/css/bootstrap.min.css') }}">
        <!-- FONTAWESOME STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="{{ url('assets/front/css/font-awesome.min.css') }}" />
        <!-- OWL CAROUSEL STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="{{ url('assets/front/css/owl.carousel.min.css') }}">
    
        <!-- MAGNIFIC POPUP STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="{{ url('assets/front/css/magnific-popup.min.css') }}">
        <!-- MAIN STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="{{ url('assets/front/css/style.css') }}">
        <!-- FLATICON STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="{{ url('assets/front/css/flaticon.min.css') }}">
        <!-- Lc light box popup -->
        <link rel="stylesheet" href="{{ url('assets/front/css/lc_lightbox.css') }}" />     
        <!-- Price Range Slider -->
        <link rel="stylesheet" href="{{ url('assets/front/css/bootstrap-slider.min.css') }}" />
        <!-- THEME COLOR CHANGE STYLE SHEET -->
        <link rel="stylesheet" class="skin" type="text/css" href="{{ url('assets/front/css/skin-1.css') }}">
        <!-- REVOLUTION SLIDER CSS -->
        <link rel="stylesheet" type="text/css" href="{{ url('assets/front/plugins/revolution/revolution/css/settings.css') }}">
        <!-- REVOLUTION NAVIGATION STYLE -->
        <link rel="stylesheet" type="text/css" href="{{ url('assets/front/plugins/revolution/revolution/css/navigation.css') }}">
    </head>
    
    <body>
        <!-- LOADING AREA START ===== -->
        <div class="loading-area">
            <div class="loading-box"></div>
            <div class="loading-pic">
                <div class="cssload-spinner">
                    <div class="cssload-ball cssload-ball-1"></div>
                    <div class="cssload-ball cssload-ball-2"></div>
                    <div class="cssload-ball cssload-ball-3"></div>
                    <div class="cssload-ball cssload-ball-4"></div>
                </div>
            </div>
        </div>
        <!-- LOADING AREA  END ====== -->
	    <div class="page-wraper">
     
            <!-- HEADER START -->
            <header class="site-header header-style-2 mobile-sider-drawer-menu">
                <div class="header-style-2-content">    
                    @include('layouts.frontend.header')
                </div>                
            </header>
            <!-- HEADER END -->
    
            <!-- CONTENT START -->
            @yield('content')
            <!-- CONTENT END -->

            <!-- FOOTER START -->
            <footer class="site-footer footer-dark" >

                <!-- FOOTER BLOCKES START -->  
                @include('layouts.frontend.footer')
                <!-- FOOTER COPYRIGHT -->
                                    
                <div class="footer-bottom">
                    <div class="container">
                        <div class="footer-bottom-info">

                            <div class="footer-copy-right">
                                <span class="copyrights-text">© 2025 Dibmat&Build. conçu par <a href="#" class="site-text-primary">FAC COM</a></span>
                            </div>
                            
                        </div>
                    </div>   
                </div>   
        
            </footer>
            <!-- FOOTER END -->

            <!-- BUTTON TOP START -->
            <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

 	    </div>



        <!-- JAVASCRIPT  FILES ========================================= --> 
        <script  src="{{ url('assets/front/js/jquery-3.6.0.min.js') }}"></script><!-- JQUERY.MIN JS -->
        <script  src="{{ url('assets/front/js/popper.min.js') }}"></script><!-- POPPER.MIN JS -->
        <script  src="{{ url('assets/front/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->

        <script  src="{{ url('assets/front/js/magnific-popup.min.js') }}"></script><!-- MAGNIFIC-POPUP JS -->
        <script  src="{{ url('assets/front/js/waypoints.min.js') }}"></script><!-- WAYPOINTS JS -->
        <script  src="{{ url('assets/front/js/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
        <script  src="{{ url('assets/front/js/waypoints-sticky.min.js') }}"></script><!-- STICKY HEADER -->
        <script  src="{{ url('assets/front/js/isotope.pkgd.min.js') }}"></script><!-- MASONRY  -->
        <script  src="{{ url('assets/front/js/owl.carousel.min.js') }}"></script><!-- OWL  SLIDER  -->
        <script  src="{{ url('assets/front/js/theia-sticky-sidebar.js') }}"></script><!-- STICKY SIDEBAR  -->
        <script  src="{{ url('assets/front/js/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
        <script  src="{{ url('assets/front/js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
        <script  src="{{ url('assets/front/js/lc_lightbox.lite.js') }}" ></script><!-- IMAGE POPUP -->
        <script  src="{{ url('assets/front/js/bootstrap-slider.min.js') }}"></script><!-- Form js -->
        <script  src="{{ url('assets/front/js/jquery.bgscroll.js') }}"></script><!-- BACKGROUND SCROLL -->



        <!-- REVOLUTION JS FILES -->

        <script  src="{{ url('assets/front/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script  src="{{ url('assets/front/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
        <script  src="{{ url('assets/front/plugins/revolution/revolution/js/extensions/revolution-plugin.js') }}"></script>

        <!-- REVOLUTION SLIDER SCRIPT FILES -->
        <script  src="{{ url('assets/front/js/rev-script-1.js') }}"></script>
    </body>

</html>