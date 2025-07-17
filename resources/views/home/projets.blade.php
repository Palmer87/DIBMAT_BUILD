@extends('layouts.frontend.base')

@section('title', 'Nos réalisations — Projets de construction et rénovation | Dibmat & Build')
@section('meta_description', 'Découvrez les projets réalisés par Dibmat & Build : villas modernes, immeubles, rénovations complètes. Inspirez-vous et confiez-nous votre chantier.')
@section('meta_keywords', 'réalisation, projet, rénovation, construction, Dibmat & Build')
@section('meta-image', asset('assets/front/images/main-slider/slider2/image3.png'))


@section('content')

<div class="page-content">
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{ url('assets/front/images/main-slider/slider2/image3.png')}});">
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

    <!-- Project START -->
    <div class="section-full p-t120 p-b90 projects-outer-full  site-bg-white">
        <div class="container">
            <!-- TITLE START-->
            <div class="section-head center wt-small-separator-outer">
                <div class="wt-small-separator  mb-4">
                    <p style="color: black; font-weight: normal; font-size: 16px; line-height: 1.5;">Nous avons eu la chance de réaliser une multitude de projets basés sur le professionnalisme et le respect de la clientèle découvrez les projets que nous avons réalisés
                    </p>
                </div>
            </div>
            <!-- TITLE END-->

            <div class="s-section">
                <div class="row">
                    <!-- COLUMNS 1 --> 
                    @foreach($projets as $projet)
                    <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                        <div class="service-box-style2">

                            <div class="service-media">
                                <img src="{{ url($projet->image) }}" alt="">
                            </div>
                            
                            <div class="service-content">
                                <div class="service-media-hvr" style="background-image:url({{ url($projet->image)}});"></div>
                                <div class="service-content-data">
                                    <h3 class="service-title-large"><a href="{{ route('projets.detail', $projet->slug) }}">{{ $projet->name }}</a></h3>
                                    <p>{{ $projet->description }}</p>
                                    <a href="{{ route('projets.detail', $projet->slug) }}" class="site-buttons btn-hover-animation boxshadow">En savoir plus</a>
                                </div>
                            </div>

                            <div class="service-content2">
                                <h4 class="service-title-large2"><a href="{{ route('projets.detail', $projet->slug) }}">{{ $projet->name }}</a></h4>
                                
                            </div>

                        </div>
                    </div> 
                    @endforeach
                    

                    <!-- COLUMNS 2 --> 
                    {{-- <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                        <div class="service-box-style2">

                            <div class="service-media">
                                <img src="{{ url('assets/front/images/travaux_3.jpg')}}" alt="">
                            </div>
                            
                            <div class="service-content">
                                <div class="service-media-hvr" style="background-image:url({{ url('assets/front/images/travaux_3.jpg')}});"></div>
                                <div class="service-content-data">
                                    <h3 class="service-title-large"><a href="project-single.html">Racordement Electrique</a></h3>
                                    <p>You can dream, create, design and build the most wonderful place in the world.</p>
                                    <a href="project-single.html" class="site-buttons btn-hover-animation boxshadow">En savoir plus</a>
                                </div>
                            </div>

                            <div class="service-content2">
                                <h4 class="service-title-large2"><a href="project-single.html">Racordement Electrique</a></h4>
                                
                            </div>

                        </div>
                    </div> --}}
                    
                    <!-- COLUMNS 3 --> 
                    {{-- <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                        <div class="service-box-style2">

                            <div class="service-media">
                                <img src="{{ url('assets/front/images/travaux_3.jpg')}}" alt="">
                            </div>
                            
                            <div class="service-content">
                                <div class="service-media-hvr" style="background-image:url({{ url('assets/front/images/travaux_3.jpg')}});"></div>
                                <div class="service-content-data">
                                    <h3 class="service-title-large"><a href="project-single.html">Racordement Electrique</a></h3>
                                    <p>You can dream, create, design and build the most wonderful place in the world.</p>
                                    <a href="project-single.html" class="site-buttons btn-hover-animation boxshadow">En savoir plus</a>
                                </div>
                            </div>

                            <div class="service-content2">
                                <h4 class="service-title-large2"><a href="project-single.html">Racordement Electrique</a></h4>
                                
                            </div>

                        </div>
                    </div>  --}}
                    
                    <!-- COLUMNS 4 --> 
                    {{-- <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                        <div class="service-box-style2">

                            <div class="service-media">
                                <img src="{{ url('assets/front/images/travaux_3.jpg')}}" alt="">
                            </div>
                            
                            <div class="service-content">
                                <div class="service-media-hvr" style="background-image:url({{ url('assets/front/images/travaux_3.jpg')}});"></div>
                                <div class="service-content-data">
                                    <h3 class="service-title-large"><a href="project-single.html">Racordement Electrique</a></h3>
                                    <p>You can dream, create, design and build the most wonderful place in the world.</p>
                                    <a href="project-single.html" class="site-buttons btn-hover-animation boxshadow">En savoir plus</a>
                                </div>
                            </div>

                            <div class="service-content2">
                                <h4 class="service-title-large2"><a href="project-single.html">Racordement Electrique</a></h4>
                                
                            </div>

                        </div>
                    </div>  --}}

                        <!-- COLUMNS 5 --> 
                    {{-- <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                        <div class="service-box-style2">

                            <div class="service-media">
                                <img src="images/travaux_3.jpg" alt="">
                            </div>
                            
                            <div class="service-content">
                                <div class="service-media-hvr" style="background-image:url(images/travaux_3.jpg);"></div>
                                <div class="service-content-data">
                                    <h3 class="service-title-large"><a href="project-single.html">Racordement Electrique</a></h3>
                                    <p>You can dream, create, design and build the most wonderful place in the world.</p>
                                    <a href="project-single.html" class="site-buttons btn-hover-animation boxshadow">En savoir plus</a>
                                </div>
                            </div>

                            <div class="service-content2">
                                <h4 class="service-title-large2"><a href="project-single.html">Racordement Electrique</a></h4>
                                
                            </div>

                        </div>
                    </div>  --}}

                    <!-- COLUMNS 6 --> 
                    {{-- <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                        <div class="service-box-style2">

                            <div class="service-media">
                                <img src="images/travaux_3.jpg" alt="">
                            </div>
                            
                            <div class="service-content">
                                <div class="service-media-hvr" style="background-image:url(images/travaux_3.jpg);"></div>
                                <div class="service-content-data">
                                    <h3 class="service-title-large"><a href="project-single.html">Racordement Electrique</a></h3>
                                    <p>You can dream, create, design and build the most wonderful place in the world.</p>
                                    <a href="project-single.html" class="site-buttons btn-hover-animation boxshadow">En savoir plus</a>
                                </div>
                            </div>

                            <div class="service-content2">
                                <h4 class="service-title-large2"><a href="project-single.html">Racordement Electrique</a></h4>
                                
                            </div>

                        </div>
                    </div>  --}}
                </div>
                
            </div>

        </div>      
                        
    </div>
    <!-- Project SECTION END --> 

            

    <!-- GOOGLE MAP -->
    <div class="section-full">
             
        <div class="gmap-outline">
            <div class="google-map">
                <div style="width: 100%">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.4992867088854!2d-4.0588241!3d5.340477900000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ebcf5c4db451%3A0xcab03beb1052998e!2sGADYS%20INDUSTRIE!5e0!3m2!1sen!2sci!4v1746796179911!5m2!1sen!2sci" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                
            </div>
        </div>
            
    </div>  
            
                  
    <!-- CONTENT END -->

    


@endsection