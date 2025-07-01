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
                        <div class="row equal-height">

                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="contact-left-media"  style="border: 1px solid #F57C00; padding: 10px; border-radius: 5px;">
                                    <div class="wt-media-content">
                                        <div>
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.4992867088854!2d-4.0588241!3d5.340477900000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ebcf5c4db451%3A0xcab03beb1052998e!2sGADYS%20INDUSTRIE!5e0!3m2!1sen!2sci!4v1746796179911!5m2!1sen!2sci" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                    
                                    <div class="widget">
                                        <!-- <h3 class="widget-title">Contactez-Nous</h3> -->
                                        <!-- <p>Our support available to help you
                                            24 hours a day, seven days a week.</p>                             -->
                                        <ul class="widget_address p-lr15"> 
                                            <li style="color: #000!important;"><i class="flaticon-phone-call m-t15" style="color: #F57C00 !important;"></i> 27 23 49 57 59 <br> 27 23 49 57 59</li>
                                            <li style="color: #000!important;"><i class="fas fa-envelope" style="color: #F57C00 !important;"></i> infowebmax@gmail.com</li>
                                            <li style="color: #000!important;"><i class="flaticon-location" style="color: #F57C00 !important;"></i> Yopougon Sopim</li>
                                            <li style="color: #000!important;"><i class="fas fa-clock" style="color: #F57C00 !important;"></i> Lun–Sam : 08h–18h</li>
                                        </ul>  
                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="contact-form-outer" style="padding: 15px 15px;
                                background-color: #FABD80;
                                border-radius: 5px;">
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
                    
                </div>

               
            </div>
        </div>

        <!-- GOOGLE MAP -->
             

        </div>

@endsection