@extends('layouts.frontend.base')

@section('title', 'Demandez un devis gratuit — Dibmat & Build')
@section('meta_description', 'Obtenez un devis détaillé pour vos projets de construction ou rénovation avec Dibmat & Build. Réponse rapide et accompagnement personnalisé.')
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
                            <h2 class="wt-title site-text-primary" style="margin-bottom: 10px; color: #F57C00;">DIBMAT & BUILD</h2>
                            <h2 class="wt-title text-uppercase" style="margin-bottom: 100px;">Contactez-Nous</h2>
                        </div>
                    </div>
                    <!-- BREADCRUMB ROW -->                            
                        
                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="{{ route('home.accueil') }}">Dibmat & Build</a></li>
                            <li>Devis</li>
                        </ul>
                    </div>
                    
                    <!-- BREADCRUMB ROW END -->                        
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->
            
        <!-- CONTACT FORM -->
        <div class="section-full  p-t120 p-b90 bg-top-right bg-no-repeat" >   
            <div class="section-content">
                <div class="container">
                    <div class="contact-one">
                        <!-- CONTACT FORM-->
                        <div class="row d-flex justify-content-center flex-wrap align-items-center">
                            <div class="col-xl-12 col-lg-12 col-md-12 m-b50">
                                <div class="contact-left-media d-flex justify-content-center flex-wrap align-items-center">
                                    <div class="col-xl-3 col-lg-3 col-md-3">
                                        <p style="font-weight: bold; font-size: 14px;"><span style="background-color: #F57C00; padding: 5px 12px; color: white;
                                        border-radius: 50%; margin-right: 5px;">1</span>Soumettez votre devis</p>
                                    </div>
                                    <div class="col-xl-5 col-lg-5 col-md-5">
                                        <p style="font-weight: bold; font-size: 14px;"><span style="background-color: #F57C00; padding: 5px 12px; color: white;
                                        border-radius: 50%; margin-right: 5px;">2</span>Nous vous contactons dans un délai maximum de 24 H</p>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                        <p style="font-weight: bold; font-size: 14px;"><span style="background-color: #F57C00; padding: 5px 12px; color: white;
                                        border-radius: 50%; margin-right: 5px;">3</span>Recevez votre devis personnalisé</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12">


                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                {{-- <form action="{{ route('devis.store') }}" method="post">
                                    @csrf

                                    <input name="nom" id="nom" type="text" class="form-control" required placeholder="Nom">

                                    <input name="prenom" id="prenom" type="text" class="form-control" required placeholder="Prenom">

                                    <input name="email" id="email" type="email" class="form-control" required placeholder="Email">

                                    <input name="numero" id="telephone" type="text" class="form-control" required placeholder="Numero">

                                    <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message"></textarea>

                                    <button type="submit">Envoyer</button>

                                </form> --}}


                                <div class="contact-form-outer">
                                    {{-- <form class="cons-contact-form" method="POST" contact-form-outer> --}}
                                    <form class="" method="POST" action="{{ route('devis.store') }}">
                                        @csrf                                                                   
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group" style="border-radius: 5px;">
                                                <input name="nom" id="nom" type="text" class="form-control" required placeholder="Nom">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group" style="border-radius: 5px;">
                                                    <input name="prenom" id="prenom" type="text" class="form-control" required placeholder="Prenom">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group" style="border-radius: 5px;">
                                                <input name="email" id="email" type="email" class="form-control" required placeholder="Email">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group" style="border-radius: 5px;">
                                                    <input name="numero" id="telephone" type="text" class="form-control" required placeholder="Numero">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12 text-center">
                                                <button type="submit"  class="site-buttons btn-hover-animation"  style="margin: 0px auto">Envoyer</button>
                                            </div>
                                            
                                        </div>
                                    </form>
                                </div>
                            </div>                             
                            
                        </div>
                    </div>

                        <div class="section-head wt-small-separator-outer  p-t100 p-b50">
                            <div class="wt-small-separator site-text-primary">
                                <div>BESOIN D'ASSISTANCE ?</div>                                
                            </div>
                            <!-- <h2 class="wt-title">Latest news from Consza since 2013</h2> -->
                        </div>
                       
                        <div class="container">
                            <div class="section-content pt-4">
                        
                                <div class="row gx-4 gy-4 justify-content-center align-items-center">
                        
                                    <div class="col-xl-3 col-lg-3 col-md-6 text-center">
                                        <div class="p-4  devisHour">
                                            <i class="fas fa-clock fa-2x mb-2"></i>
                                            <div>HORAIRE</div>
                                            <div>Lundi au Vendredi <br> de 08H à 17H</div>
                                        </div>
                                    </div>
                        
                                    <div class="col-xl-3 col-lg-3 col-md-6 text-center">
                                        <div class="p-4 devisHour">
                                            <i class="flaticon-location mb-2"></i> 
                                            <!-- <i class="fas fa-clock fa-2x "></i> -->
                                            <div>LOCALISATION</div>
                                            <div>Yopougon <br> Sopim</div>
                                        </div>
                                    </div>
                        
                                    <div class="col-xl-3 col-lg-3 col-md-6 text-center">
                                        <div class="p-4 devisHour">
                                            <i class="flaticon-phone-call mb-2"></i>
                                            <div>Phone</div>
                                            <div>(+225) 27 23 49 57 59 <br>(+225) 01 03 17 58 00</div>
                                        </div>
                                    </div>
                        
                                    <div class="col-xl-3 col-lg-3 col-md-6 text-center">
                                        <div class="p-4 devisHour">
                                            <i class="fas fa-envelope mb-2"></i>
                                            <div>EMAIL</div>
                                            <div>dibmat22@gmail.com</div>
                                            <div>dibmat@dibmatbuild.ci</div>
                                        </div>
                                    </div>
                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>

@endsection 