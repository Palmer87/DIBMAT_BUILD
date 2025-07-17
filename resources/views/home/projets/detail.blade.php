@extends('layouts.frontend.base')

@section('title', $projet->name . " — Réalisation Dibmat & Build")
@section('meta_description', 'Découvrez notre projet "' . $projet->name . '" réalisé par Dibmat & Build : détails, photos et expertise.')
@section('meta_keywords', 'réalisation, projet ' . $projet->name . ', rénovation, construction, Dibmat & Build')
@section('meta-image', asset('assets/front/images/main-slider/slider2/image3.png'))

@section('content')

<!-- CONTENT START -->
        <div class="page-content">

        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url( {{ url('assets/front/images/main-slider/slider2/image3.png') }});">
            <div class="overlay-main site-bg-black opacity-07"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <div class="banner-title-outer">
                        <div class="banner-title-name">
                            <h2 class="wt-title site-text-primary" style="margin-bottom: 10px; color: #F57C00;">DIBMAT & BUILD</h2>
                            <h2 class="wt-title text-uppercase" style="margin-bottom: 100px;">Decouvrez nos projets réalisés</h2>
                        </div>
                    </div>
                    <!-- BREADCRUMB ROW -->                            
                    
                        <div>
                            <ul class="wt-breadcrumb breadcrumb-style-2">
                                <li><a href="{{ route('home.accueil') }}">Dibmat & Build</a></li>
                                <li>Projets réalisés</li>
                            </ul>
                        </div>
                    
                    <!-- BREADCRUMB ROW END -->                        
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        <!-- info SECTION START -->
        <div class="section-full p-t120 p-b90 bg-gray">
            <div class="container">                               
                <div class="section-content"> 
                    <div class="project-single">
                        <div class="project-single-media">
                            <div class="row project-single-img-column m-b30">
                                <div class="col-md-6 col-lg-6"><img src="{{ url($projet->image) }}" alt="" style="height: 400px;"></div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="project-single-sibar-info m-b30">
                                        <ul class="info-list-1">
                                            <li><h5 class="title">Date :</h5><span>{{ $projet->date }}</span></li>
                                            <li><h5 class="title">Category :</h5><span>{{ $projet->categorie }}</span></li>
                                            <li><h5 class="title">Clients :</h5><span>{{ $projet->client }}</span></li>
                                            <li><h5 class="title">Location :</h5><span>{{ $projet->lieu }}</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           
                            <div class="col-md-12 col-lg-12">
                                <div class="project-single-row-section">
                                    {{ $projet->description }}
                                </div>
                            </div>
                        </div>



                    </div>
             

                </div>
               
            </div>                                        
        </div>   
        <!-- info  SECTION END -->

       
        <!-- LATEST PRJECTS SLIDER START -->
        <div class="section-full p-t120 p-b90 project-style-new site-bg-gray-light">

            <div class="container">
            
                <!-- TITLE START-->
                <div class="section-head center text-uppercase wt-small-separator-outer">
                    <h4 class="site-text-primary">Quelques clichés du projet</h4>
                </div>
                <!-- TITLE END-->

            </div>

            <!-- IMAGE CAROUSEL START -->
            <div class="container">
                <div class="section-content">
                    <div class="owl-carousel project-carousel  owl-btn-vertical-center m-b30">
                        <!-- COLUMNS 1 --> 
                        {{-- <div class="item cat-1">
                            <div class="project-new-2">
                                <div class="wt-img-effect">
                                    <img src="images/travaux_2.jpg" style="height: 400px;" alt="">
                                </div>
                            </div>
                        </div> --}}
                        <!-- COLUMNS 2 --> 
                        {{-- <div class="item cat-2">
                            <div class="project-new-2">
                                <div class="wt-img-effect">
                                    <img src="images/travaux_3.jpg" style="height: 400px;" alt="">
                                </div>
                            </div>                            
                        </div>                         --}}
                        <!-- COLUMNS 3 --> 
                        {{-- <div class="item cat-3">
                            <div class="project-new-2">
                                <div class="wt-img-effect">
                                    <img src="images/travaux_4.jpg" style="height: 400px;" alt="">
                                </div>
                            </div>                            
                        </div> --}}
                        <!-- COLUMNS 4 --> 
                        {{-- <div class="item cat-4">
                            <div class="project-new-2">
                                <div class="wt-img-effect">
                                    <img src="images/travaux_3.jpg" style="height: 400px;" alt="">
                                </div>
                            </div>                            
                        </div>                         --}}
                        <!-- COLUMNS 5 --> 
                        {{-- <div class="item cat-5">
                            <div class="project-new-2">
                                <div class="wt-img-effect">
                                    <img src="images/travaux_2.jpg" style="height: 400px;" alt="">
                                </div>
                            </div>                            
                        </div>                         --}}
                        <!-- COLUMNS 6 --> 
                        {{-- <div class="item cat-1">
                            <div class="project-new-2">
                                <div class="wt-img-effect">
                                    <img src="images/travaux_1.jpg" style="height: 450px;" alt=""> 
                                </div>
                            </div>                            
                        </div> --}}
                        
                        @if($projet->imagecliche)
                            @foreach(json_decode($projet->imagecliche, true) as $cliche)
                                {{-- <img src="{{ asset($cliche) }}" alt="Cliché" width="150"> --}}
                                <div class="item cat-1">
                            <div class="project-new-2">
                                    <div class="wt-img-effect">
                                        <img src="{{ asset($cliche) }}" style="height: 450px;" alt=""> 
                                    </div>
                                </div>                            
                            </div>
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>
            
            
        </div>   
        <!-- LATEST PRJECTS SLIDER END -->        

                    <!-- Project START -->
                    <div class="section-full p-t90 p-b90 projects-outer-full  site-bg-white">
                
                        <div class="container">
                        
                            <!-- TITLE START-->
                            <div class="section-head center wt-small-separator-outer">
                                <div class="wt-small-separator  mb-4">
                                    <h4 class="site-text-primary text-uppercase">
                                        Quelques projets réalisés
                                    </h4>
                                </div>
                                
                            </div>
                            <!-- TITLE END-->
        
                            <div class="s-section">
                                <div class="row">
                                    <!-- COLUMNS 1 --> 
                                    @foreach ($projetsRecents as $projetsRecent)
                                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                                        <div class="service-box-style2">
        
                                            <div class="service-media">
                                                <img src="{{ url($projetsRecent->image) }}" alt="">
                                            </div>
                                            
                                            <div class="service-content">
                                                <div class="service-media-hvr" style="background-image:url({{ url($projetsRecent->image) }});"></div>
                                                <div class="service-content-data">
                                                    <h3 class="service-title-large"><a href="{{ route('projets.detail', $projetsRecent->slug) }}">{{ $projetsRecent->name }}</a></h3>
                                                    <p>{{ $projetsRecent->description }}</p>
                                                    <a href="{{ route('projets.detail', $projetsRecent->slug) }}" class="site-buttons btn-hover-animation boxshadow">En savoir plus</a>
                                                </div>
                                            </div>
        
                                            <div class="service-content2">
                                                <h4 class="service-title-large2"><a href="{{ route('projets.detail', $projetsRecent->slug) }}">{{ $projetsRecent->name }}</a></h4>
                                               
                                            </div>
        
                                        </div>
                                    </div>
                                    @endforeach
                                    
         
                                </div>
                               
                            </div>
        
                        </div>      
                                
                    </div>
                    <!-- Project SECTION END --> 


        </div>
        <!-- CONTENT END -->

@endsection