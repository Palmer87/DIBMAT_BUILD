@extends('layouts.frontend.base')

@section('content')

<div class="page-content">

            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/main-slider/slider2/image3.png);">
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
                                    <li><a href="index.html">Dibmat & Build</a></li>
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
                            <div class="row d-flex justify-content-center flex-wrap align-items-center">

                                <div class="col-xl-12 col-lg-12 col-md-12 m-b50">
                                    <div class="contact-left-media d-flex justify-content-center flex-wrap align-items-center">
                                        <div class="col-xl-3 col-lg-3 col-md-3">
                                            <p style="font-weight: bold; font-size: 14px;"><span style="background-color: #F57C00; padding: 5px 12px; color: white;
                                            border-radius: 50%; margin-right: 5px;">1</span>Soumettez votre devis</p>
                                        </div>
                                        <div class="col-xl-5 col-lg-5 col-md-5">
                                            <p style="font-weight: bold; font-size: 14px;"><span style="background-color: #F57C00; padding: 5px 12px; color: white;
                                            border-radius: 50%; margin-right: 5px;">2</span>Nous vous contactons dans un delai maximum de 24 H</p>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <p style="font-weight: bold; font-size: 14px;"><span style="background-color: #F57C00; padding: 5px 12px; color: white;
                                            border-radius: 50%; margin-right: 5px;">3</span>Recevez votre devis personnalisé</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="contact-form-outer">
                                        <form  class="cons-contact-form" method="post" action="form-handler2.php">

                                                <!-- <h2 class="wt-title m-b30">Feel free to contact us to solve any problem!</h2> -->
                                                                                
                                                                                    
                                            <div class="row">

                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group" style="border-radius: 5px;">
                                                    <input name="Nom" type="text" class="form-control" required placeholder="Nom">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group" style="border-radius: 5px;">
                                                        <input name="Prenom" type="text" class="form-control" required placeholder="Prenom">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group" style="border-radius: 5px;">
                                                    <input name="email" type="text" class="form-control" required placeholder="Email">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group" style="border-radius: 5px;">
                                                        <input name="Numero" type="text" class="form-control" required placeholder="Numero">
                                                    </div>
                                                </div>
                                                
                                                <!-- <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <input name="subject" type="text" class="form-control" required placeholder="Subject">
                                                    </div>
                                                </div> -->
                                                
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                    <textarea name="message" class="form-control" rows="4" placeholder="Message"></textarea>
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
                                            <div>lundi au vendredi <br> de 08H à 18H</div>
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
                                            <div>27 23 49 57 59 <br> 27 23 49 57 59</div>
                                        </div>
                                    </div>
                        
                                    <div class="col-xl-3 col-lg-3 col-md-6 text-center">
                                        <div class="p-4 devisHour">
                                            <i class="fas fa-envelope mb-2"></i>
                                            <div>EMAIL</div>
                                            <div>dibmat22@gmail.com</div>
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