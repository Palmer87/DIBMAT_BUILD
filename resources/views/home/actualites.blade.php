@extends('layouts.frontend.base')

@section('title', 'Actualités & conseils — Dibmat & Build')
@section('meta_description', 'Suivez les dernières actualités de Dibmat & Build : nouveautés, conseils travaux, innovations et tendances du bâtiment en Côte d\'Ivoire.')
@section('meta_keywords', 'construction Côte d\'Ivoire, rénovation Abidjan, entreprise bâtiment, aménagement intérieur, Dibmat & Build')
@section('meta-image', asset('assets/front/images/main-slider/slider2/image3.png'))



@section('content')

<div class="page-content">

            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{ url('assets/front/images/main-slider/slider2/image3.png') }});">
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
                                    <li>Actualités</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->


            <!-- OUR BLOG START -->
            <div class="container">
                <div class="section-content p-t100 p-b60">
                    <div class="row d-flex justify-content-center">
                        @foreach($articles as $key => $article)
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                            <!--Block one-->
                            <div class="blog-post blog-post-4-outer">
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{route('actualites.show', $article->slug ) }}">
                                        <div class="img-actu">
                                            <img src="{{ url($article->image) }}" alt="">
                                        </div>
                                        
                                    </a>
                                </div>                                    
                                <div class="wt-post-info">
                                    <div class="wt-post-meta ">
                                        <ul>
                                            <li class="post-date"><span> Publié le {{ $article->created_at->format('d/m/y') }}</span> </li>
                                        </ul>
                                    </div>                                 
                                    <div class="wt-post-title ">
                                        <h4 class="post-title"><a href="{{route('actualites.show', $article->slug ) }}">{{ $article->titre }}</a></h4>
                                        <p>{!! Str::limit(strip_tags($article->contenu), 30)  !!}</p>
                                    </div>
                                    
                                    <div class="wt-post-readmore ">
                                        <a href="{{route('actualites.show', $article->slug ) }}" class="site-button-link ">Lire plus<i class="fa fa-play"></i></a>
                                    </div>                                        
                                </div>                                
                            </div>
                        </div>
                        @endforeach
                
                    </div>

                </div>
            </div>
     
        </div>

@endsection