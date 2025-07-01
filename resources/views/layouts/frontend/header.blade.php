<div class="header-middle-wraper">     
    <div class="container">
        <div class="header-middle d-flex justify-content-between align-items-center">
            <div class="logo-header">
                <div class="logo-header-inner logo-header-one">
                    <a href="{{ route('home.accueil') }}">
                    <img src="{{ url('assets/front/images/logo_dibmat.jpg') }}" alt="">
                    </a>
                </div>
            </div>
                                
            <div class="header-info-wraper">
                <div class="header-info">
                    <ul>
                        <li>
                            <div class="wt-icon-box-wraper  left">
                                <div class="wt-icon-box-xs site-bg-primary radius">
                                    <span class="icon-cell site-text-white"><i class="fas fa-map-marker-alt"></i></span>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte">Notre localisation</h5>
                                    <p>Yopougon Sopim</p>
                                    
                                </div>
                            </div>
                        </li> 

                        <li>
                            <div class="wt-icon-box-wraper  left">
                                <div class="wt-icon-box-xs site-bg-primary radius">
                                    <span class="icon-cell site-text-white"><i class="fas fa-envelope"></i></span>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte">Email</h5>
                                    <p>dibmat22@gmail.com</p>
                                
                                </div>
                            </div>
                        </li>                                
                        
                        <li>
                            <div class="wt-icon-box-wraper left">
                                <div class="wt-icon-box-xs site-bg-primary radius">
                                    <span class="icon-cell site-text-white"><i class="fas fa-phone"></i></span>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte">Téléphone</h5>
                                    <p>(+225) 27 35 97 68 19</p>
                                </div>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header-bottom"> 
    <div class="sticky-header main-bar-wraper  navbar-expand-lg">
    
        <div class="main-bar header-bottom">
            <div class="container-block clearfix">

                <div class="navigation-bar">
                    <!-- NAV Toggle Button -->
                    <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar icon-bar-first"></span>
                        <span class="icon-bar icon-bar-two"></span>
                        <span class="icon-bar icon-bar-three"></span>
                    </button> 

                    <!-- MAIN Vav -->
                    <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-between">
                
                        <ul class=" nav navbar-nav">
                            <li class="has-child active">
                                <a href="{{ route('home.accueil') }}">DIBMAT & BUILD</a>
                            </li>


                            <li class="has-child">
                                <a href="{{ route('home.histoire') }}">NOTRE HISTOIRE</a>
                            </li>

                            <li class="has-child">
                                <a href="{{ route('home.expertise') }}">NOTRE EXPERTISE</a>
                            </li>
                
                            <li class="has-child">
                                <a href="{{ route('home.projets') }}">PROJETS REALISES</a>       
                            </li>

                            <li class="has-child">
                                <a href="{{ route('home.contact') }}">CONTACT</a>
                            </li>
                            <li class="has-child">
                                <a href="{{ route('home.actualites') }}">ACTUALITES</a>                    
                            </li>                                                                
                            <!-- <li><a href="contact.html">Contact</a></li>   -->
                    
                        </ul>

                    </div>
                    
                    <!-- Header Right Section-->
                    <div class="extra-nav header-1-nav">
                        <div class="extra-cell one">
                            <div class="header-search">
                                <a href="{{ route('home.devis') }}" class="header-search-icon">UN DEVIS ?</a>
                            </div>    
                        </div>
                    
                    </div> 

                </div>
                
            </div>   
        </div>

    </div>
</div>