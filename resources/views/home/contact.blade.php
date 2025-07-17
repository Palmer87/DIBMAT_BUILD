@extends('layouts.frontend.base')

@section('title', 'Contactez-nous — Dibmat & Build')
@section('meta_description', ' Vous avez un projet ? Contactez Dibmat & Build pour discuter de vos besoins en construction, rénovation ou aménagement. Réponse rapide et devis gratuit.')
@section('meta_keywords', 'construction Côte d\'Ivoire, rénovation Abidjan, entreprise bâtiment, aménagement intérieur, Dibmat & Build')
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
                        <h2 class="wt-title text-uppercase" style="margin-bottom: 100px;">Contactez-Nous</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->                            
                        
                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ route('home.accueil') }}">Dibmat & Build</a></li>
                        <li>Contact</li>
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
                    <div class="row equal-height">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="contact-left-media"  style="border: 1px solid #F57C00; padding: 10px; border-radius: 5px;">
                                <div class="wt-media-content">
                                    <div>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.4992867088854!2d-4.0588241!3d5.340477900000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ebcf5c4db451%3A0xcab03beb1052998e!2sGADYS%20INDUSTRIE!5e0!3m2!1sen!2sci!4v1746796179911!5m2!1sen!2sci" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                                    
                                <div class="widget">                    
                                    <ul class="widget_address p-lr15"> 
                                        <li style="color: #000!important;"><i class="flaticon-phone-call m-t15" style="color: #F57C00 !important;"></i>(+225) 27 23 49 57 59 <br>(+225) 01 03 17 58 00</li>
                                        <li style="color: #000!important;"><i class="fas fa-envelope" style="color: #F57C00 !important;"></i> dibmat22@gmail.com / dibmat@dibmatbuild.ci</li>
                                        <li style="color: #000!important;"><i class="flaticon-location" style="color: #F57C00 !important;"></i> Yopougon Sopim</li>
                                        <li style="color: #000!important;"><i class="fas fa-clock" style="color: #F57C00 !important;"></i> Lun–Sam : 08h–17h</li>
                                    </ul>  
                                </div>

                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="contact-form-outer" style="padding: 15px 15px; background-color: #FABD80; border-radius: 5px;">
                                <form method="POST" action="{{ route('contact.store') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group" style="border-radius: 5px;">
                                            <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required placeholder="Nom">
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group" style="border-radius: 5px;">
                                                <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required placeholder="Prenom">
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group" style="border-radius: 5px;">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Email">
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group" style="border-radius: 5px;">
                                                <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required  placeholder="N° Telephone">
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <textarea id="message" class="form-control @error('message') is-invalid @enderror" name="message" rows="4" required  placeholder="Message">{{ old('message') }}</textarea>
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
                    
                </div>

               
            </div>
        </div>

        <!-- GOOGLE MAP -->
             

        </div>

@endsection