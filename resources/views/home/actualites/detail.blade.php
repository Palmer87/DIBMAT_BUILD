@extends('layouts.frontend.base')

@section('title', $article->titre . ' — Blog Dibmat & Build')
@section('meta_description', Str::limit(strip_tags($article->contenu), 150))
@section('meta_keywords', 'actualité, blog bâtiment, ' . $article->titre . ', construction Côte d\'Ivoire, Dibmat & Build')
@section('meta-image', asset('assets/front/images/main-slider/slider2/image3.png'))


{{-- @section("title")
    {{ $article->titre }}
@endsection --}}

@section('content')

<div class="page-content">

            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url( {{ url('assets/front/images/main-slider/slider2/image3.png')}} );">
            	<div class="overlay-main site-bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                                <h2 class="wt-title text-uppercase" style="margin-bottom: 10px;">Decouvrez l'actualité</h2>
                                <h2 class="wt-title site-text-primary" style="margin-bottom: 100px; color: #F57C00;">DIBMAT & BUILD</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="{{ route('home.accueil') }}">Dibmat & Build</a></li>
                                    <li>Actualité</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->



        <!-- OUR BLOG START -->
        <div class="section-full  p-t120 p-b90 bg-white">
            <div class="container">
            
                <!-- BLOG SECTION START -->
                <div class="section-content">
                    <div class="row d-flex justify-content-center">
                    
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 m-b30">
                            <!-- BLOG START -->
                            <div class="blog-post-single-outer">
                                <div class="blog-post-style-2 blog-post-single bg-white">                                    

                                    <div class="wt-post-media">
                                        <div class="wt-post-title m-b60">
                                            <h3 class="post-title site-text-primary text-uppercase">{{ $article->titre }}</h3>
                                        </div>
                                        <img src="{{ url($article->image) }}" alt="">
                                        <div class="detail-actu mt-3 d-flex justify-content-between">
                                            <div class="detail-date">
                                                <div class="date d-flex align-items-center">
                                                    <i class="fas fa-calendar site-text-primary"></i>
                                                    <p style="font-weight: 300; margin-bottom: 0; margin-left: 5px;" >{{ $article->created_at->format('d/m/y') }}</p>
                                                </div>
                                            </div>
                                            <div class="dossier d-flex align-items-center">
                                                <i class="fa-solid fa-folder site-text-primary"></i>
                                                <p style="font-weight: 300; margin-bottom: 0; margin-left: 5px;" >Actualité, {{ $article->categorie }}</p>
                                            </div>
                                            
                                        </div>
                                    </div>                                        

                                    <div class="wt-post-info">
                          
                                      
                                        
                                        <div class="wt-post-discription">

                                            {!! $article->contenu !!}    

                                        </div>                                            
                                    </div>


                                </div>

                            </div>                             
                        </div> 
                        
                        <!-- SIDE BAR START -->
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 rightSidebar  m-b30">
                        
                            <aside  class="side-bar">                                              

                                <div class="widget widget_team">
                                    <div class="m-b30">
                                        <h4 class="widget-title">A Propos de nous</h4>
                                    </div>
                                    <div class="team-detail  text-left">
                                        <p>
                                            DIBMAT & BUILD est une entreprise de construction, 
                                            de génie électrique, d’énergie, de climatisation et de 
                                            prestations diverses. Grâce à son sérieux et à son savoir-faire 
                                            professionnel depuis sa création, elle va très tôt bénéficier de 
                                            la confiance de clients privés et publics. S’appuyant sur une équipe 
                                            d’ingénieurs, de techniciens et d’ouvriers qualifiés et expérimentés 
                                            ainsi qu’un management de qualité des projets qui lui sont confiés.
                                        </p>
                                        <div class="wt-post-readmore ">
                                            <a href="{{ route('home.histoire') }}" class="site-button-link ">Lire plus<i class="fa fa-play"></i></a>
                                        </div> 
                                     </div>                                            
                                    
                                </div>

                                <!-- TAGS -->
                                <div class="widget widget_tag_cloud">
                                        <div class="m-b30">
                                            <h4 class="widget-title">Categories</h4>
                                        </div>
                                        
                                        <div class="tagcloud">
                                            <a href="blog-grid.html">Construction</a>
                                            <a href="blog-grid.html">Factory</a>                                            
                                            <a href="blog-grid.html">Engineering </a>
                                            <a href="blog-grid.html">Repairing</a>
                                            <a href="blog-grid.html">Buildings</a>
                                            
                                        </div>
                                    </div>                                        
                                
                            
                            </aside>

                        </div>
                        <!-- SIDE BAR END -->                          

                                                    
                    </div>
                                            
                </div>
                
            </div>
            
        </div>   

        <div class="section-full p-t120  p-b60" style="background-color: #f5f5f5;">
            <div class="container">
                <div class="section-head center wt-small-separator-outer">
                    <div class="wt-small-separator site-text-primary">
                        <div>DES ARTICLES QUI VOUS INTERESSERONT</div>                                
                    </div>
                    <!-- <h2 class="wt-title">Latest news from Consza since 2013</h2> -->
                </div>
            </div>

            <div class="container">
                <div class="section-content">
                    <div class="row d-flex justify-content-center">
                        
                         @foreach ($articlesRecents as $article )
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                <!--Block one-->
                                <div class="blog-post blog-post-4-outer">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="{{route('actualites.show', $article->slug ) }}">
                                            <div class="img-actu">
                                                <img src="{{ url($article->image) }}" alt="articleimg"></a>
                                            </div>
                                    </div>                                    
                                    <div class="wt-post-info">
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-date"><span> Publié le {{ $article->created_at->format('d/m/y') }}</span> </li>
                                            </ul>
                                        </div>                                 
                                        <div class="wt-post-title ">
                                            <h4 class="post-title"><a href="{{route('actualites.show', $article->slug ) }}">{{ $article->titre }}</a></h4>
                                                <p>{!! Str::limit(strip_tags($article->contenu), 30)  !!}</</p>
                                        </div>
                                        
                                        <div class="wt-post-readmore ">
                                            <a href="{{route('actualites.show', $article->slug ) }}" class="site-button-link ">Lire plus<i class="fa fa-play"></i></a>
                                        </div>                                        
                                    </div>                                
                                </div>
                            </div> 
                        @endforeach
                    </div>

                    <!-- <div class="text-center m-b30"> 
                        <a href="blog-single.html" class="site-buttons btn-hover-animation">TOUTE NOTRE ACTUALITE</a> 
                    </div> -->

                </div>
            </div>
        </div>  
        <!-- OUR BLOG END -->          
            
     
        </div>

@endsection