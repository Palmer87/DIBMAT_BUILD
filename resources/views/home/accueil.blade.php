@extends('layouts.frontend.base')

@section('title', 'Dibmat & Build — Expert en construction et rénovation en Côte d\'Ivoire')
@section('meta_description', 'Dibmat & Build vous accompagne dans vos projets de construction, rénovation et aménagement. Qualité, expertise et respect des délais.')
@section('meta_keywords', 'construction Côte d\'Ivoire, rénovation Abidjan, entreprise bâtiment, aménagement intérieur, Dibmat & Build')
@section('meta-image', asset('assets/front/images/main-slider/slider2/image1.png'))


@section('content')

<div class="page-content">

    <!-- SLIDER START --> 
              
            <div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="typewriter-effect" data-source="gallery">
                <div id="welcome_two" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">                
                    <ul>
                
                        <!-- SLIDE 1 -->
                        <li data-index="rs-901" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ url('assets/front/images/main-slider/slider2/image1.png' )}}"  data-rotate="0" data-saveperformance="off"  data-title="Slide" data-param1="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{ url('assets/front/images/main-slider/slider2/image1.png' )}}"  alt=""  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina/>
                            <!-- LAYERS -->
                        
                            <!-- LAYER NR. 1 [ for overlay ] -->
                            <div class="tp-caption tp-shape tp-shapewrapper " id="slide-901-layer-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[ {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"}, {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 1;background-color:rgba(0, 0, 0, 0.1);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
                            </div>
                        
                            <!-- LAYER NR. 2 [ Small Title ] -->
                            <div class="tp-caption   tp-resizeme site-text-primary" id="slide-901-layer-2" data-x="['left','left','left','center']" data-hoffset="['30','50','50','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-180','-180','-180','-140']" data-fontsize="['20','20','20','20']" data-lineheight="['20','20','20','20']" data-width="['700','700','700','400']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"}, {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; white-space: normal; font-weight: 700; font-family: 'Montserrat', sans-serif;">
                            </div> 
                                                        
                            <!-- LAYER NR. 3 [ Large Title ] -->
                            <div class="tp-caption   tp-resizeme" id="slide-901-layer-3" data-x="['left','left','left','center']" data-hoffset="['30','50','50','0']"  data-y="['middle','middle','middle','middle']" data-voffset="['-60','-60','-60','-60']"   data-fontsize="['48','48','36','24']"  data-lineheight="['64','64','64','64']"  data-width="['900','900','700','400']"  data-height="['none','none','none','none']"  data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','center']" data-paddingtop="[5,5,5,5]" data-paddingright="[0,0,0,0]" data-paddingbottom="[100,100,100,100]" data-paddingleft="[30,30,30,30]" style="z-index: 13; white-space: normal; font-weight: 900; color:#fff; border-width:0px; font-family: 'Montserrat', sans-serif;">BÂTIR AVEC EXCELLENCE, INNOVER POUR DEMAIN.</div>
                        
                            <!-- LAYER NR. 4 [ for paragraph] -->
                            <div class="tp-caption  tp-resizeme" id="slide-901-layer-4" data-x="['left','left','left','center']" data-hoffset="['30','50','50','0']" data-y="['middle','middle','middle','middle']" data-voffset="['80','80','50','20']" data-fontsize="['18','20','20','14']" data-lineheight="['30','30','30','22']" data-width="['800','800','900','600']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[ {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"}, {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"} ]' data-textAlign="['left','left','left','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[30,30,30,30]" style="z-index: 13; font-weight: 500; color:#fff; border-width:0px;font-family: 'Montserrat', sans-serif;"> Chez DIBMAT & BUILD, nous sommes spécialisés dans la construction métallique sur mesure.  Grâce à notre savoir-faire et à l'utilisation de matériaux de qualité, nous concevons des structures solides, esthétiques et durables. Qu’il s’agisse d’un hangar, d’un entrepôt ou d’un bâtiment industriel, nous vous accompagnons de la conception à la réalisation, avec un souci constant de fiabilité et de précision.
                            </div>
                        
                            <!-- LAYER NR. 5 [ for see all service botton ] -->
                            <div class="tp-caption tp-resizeme" id="slide-901-layer-5" data-x="['left','left','left','center']" data-hoffset="['30','50','50','0']" data-y="['middle','middle','middle','middle']" data-voffset="['180','180','150','100']"  data-lineheight="['none','none','none','none']"  data-width="['200','200','200','200']"  data-height="['none','none','none','none']"  data-whitespace="['normal','normal','normal','normal']"  data-type="text" data-responsive_offset="on"  data-frames='[ {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},  {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"} ]' data-textAlign="['left','left','left','center']"  data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[30,30,30,30]" style="z-index:13; text-transform:uppercase;">
                                <a href="{{ route('home.projets') }}" class="site-button btn-hover-animation">DECOUVREZ NOS PROJETS</a>
                            </div>

                                <!-- LAYER NR. 6 large number -->
                            <div class="tp-caption tp-resizeme" id="slide-901-layer-6"  data-x="['right','right','right','center']" data-hoffset="['40','40','40','0']"  data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','100']"  data-fontsize="['400','400','200','100']" data-lineheight="['400','400','200','100']"  data-width="['800','800','800','800']"  data-height="['none','none','none','none']"  data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[ {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"}, {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]' data-textAlign="['right','right','right','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; white-space: normal; font-weight: 900; color:rgba(0,0,0,0);">
                            <!-- <span class="slider-text-outline" style="font-family: 'Montserrat', sans-serif;text-transform:uppercase;">01</span> -->
                            </div>  
                                                    

                        </li>

                        <!-- SLIDE 2 -->
                        <li data-index="rs-902" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="{{ url('assets/front/images/main-slider/slider2/image2.png' )}}" data-rotate="0"  data-saveperformance="off" data-title="Slide" data-param1="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{ url('assets/front/images/main-slider/slider2/image2.png' )}}"  alt=""  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina/>
                            <!-- LAYERS -->
                        
                            <!-- LAYER NR. 1 [ for overlay ] -->
                            <div class="tp-caption tp-shape tp-shapewrapper " id="slide-902-layer-0"  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"   data-width="full" data-height="full"  data-whitespace="nowrap"  data-type="shape"  data-basealign="slide"  data-responsive_offset="off"  data-responsive="off" data-frames='[ {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"}, {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"} ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"data-paddingleft="[0,0,0,0]" style="z-index: 1;background-color:rgba(0, 0, 0, 0.1);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
                            </div>
                        
                            <!-- LAYER NR. 2 [ Small Title ] -->
                            <div class="tp-caption   tp-resizeme site-text-primary" 
                            id="slide-902-layer-2" 
                            data-x="['left','left','left','center']" data-hoffset="['30','50','50','0']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['-180','-180','-180','-140']"    
                            data-fontsize="['20','20','20','20']"
                            data-lineheight="['20','20','20','20']"
                            data-width="['900','900','900','600']"
                            data-height="['none','none','none','none']"
                            data-whitespace="['normal','normal','normal','normal']"
                        
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames='[
                            {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                            {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                            ]'
                            data-textAlign="['left','left','left','center']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                        
                            style="z-index: 13; 
                            white-space: normal; 
                            font-weight: 700;
                            font-family: 'Montserrat', sans-serif;">
                            <!-- <span style="background-color: #fff; display: inline-block;padding: 5px 10px;">We Make Sure</span> -->
                        </div>
                                                        
                            <!-- LAYER NR. 3 [ Large Title ] -->
                            <div class="tp-caption   tp-resizeme" 
                            id="slide-902-layer-3" 
                            data-x="['left','left','left','center']" data-hoffset="['30','50','50','0']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['-60','-60','-60','-60']"  
                            data-fontsize="['48','48','36','24']"
                            data-lineheight="['64','64','36','24']"
                            data-width="['900','900','700','400']"
                            data-height="['none','none','none','none']"
                            data-whitespace="['normal','normal','normal','normal']"
                        
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
                            
                            data-textAlign="['left','left','left','center']"
                            data-paddingtop="[5,5,5,5]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[100,100,100,100]"
                            data-paddingleft="[30,30,30,30]"
                        
                            style="z-index: 13; 
                            white-space: normal; 
                            font-weight: 900;
                            color:#fff;
                            border-width:0px; font-family: 'Montserrat', sans-serif;">BÂTIR AVEC EXCELLENCE, INNOVER POUR DEMAIN.</div>
                        
                            <!-- LAYER NR. 4 [ for paragraph] -->
                            <div class="tp-caption  tp-resizeme" id="slide-902-layer-4"  data-x="['left','left','left','center']" data-hoffset="['30','50','50','0']"  data-y="['middle','middle','middle','middle']" data-voffset="['80','80','50','20']"  data-fontsize="['18','18','20','14']"  data-lineheight="['30','30','30','22']"  data-width="['800','800','900','600']"  data-height="['none','none','none','none']"   data-whitespace="['normal','normal','normal','normal']"  data-type="text"  data-responsive_offset="on" data-frames='[ {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},   {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"} ]'  data-textAlign="['left','left','left','center']"  data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[30,30,30,30]" style="z-index: 13;  font-weight: 500;  color:#fff;  border-width:0px;font-family: 'Montserrat', sans-serif;">
                                DIBMAT & BUILD est une entreprise spécialisée dans les travaux d’électricité, intervenant 
                                aussi bien dans le courant fort que dans l’électricité bâtiment. Forte d’une expertise reconnue 
                                et d’une équipe de professionnels qualifiés, nous accompagnons particuliers, professionnels et 
                                collectivités dans la conception, la réalisation et la maintenance de leurs installations électriques.                          
                                </div>
                        
                            <!-- LAYER NR. 5 [ for see all service botton ] -->
                            <div class="tp-caption tp-resizeme" id="slide-902-layer-5" data-x="['left','left','left','center']" data-hoffset="['30','50','50','0']"  data-y="['middle','middle','middle','middle']" data-voffset="['180','180','150','100']"   data-lineheight="['none','none','none','none']"  data-width="['200','200','200','200']"  data-height="['none','none','none','none']"  data-whitespace="['normal','normal','normal','normal']"  data-type="text"   data-responsive_offset="on" data-frames='[ {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"}, {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"} ]' data-textAlign="['left','left','left','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[30,30,30,30]" style="z-index:13; text-transform:uppercase;">
                            <a href="{{ route('home.projets') }}" class="site-button btn-hover-animation">DECOUVREZ NOS PROJETS</a>
                            </div>

                                <!-- LAYER NR. 6 large number -->
                            <div class="tp-caption tp-resizeme" id="slide-902-layer-6" data-x="['right','right','right','center']" data-hoffset="['40','40','40','0']"  data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','100']" data-fontsize="['400','400','200','100']" data-lineheight="['400','400','200','100']" data-width="['800','800','800','800']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[ {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"}, {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"} ]' data-textAlign="['right','right','right','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; white-space: normal; font-weight: 900; color:rgba(0,0,0,0);">
                            <!-- <span class="slider-text-outline" style="font-family: 'Montserrat', sans-serif;text-transform:uppercase;">02</span> -->
                            </div>  

                                                    
                        </li>                                
                    
                        <!-- SLIDE 3 -->
                        <li data-index="rs-903" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="{{ url('assets/front/images/main-slider/slider2/image3.png' )}}" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{ url('assets/front/images/main-slider/slider2/image3.png' )}}"  alt=""  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina/>
                            <!-- LAYERS -->
                        
                            <!-- LAYER NR. 1 [ for overlay ] -->
                            <div class="tp-caption tp-shape tp-shapewrapper " id="slide-902-layer-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[ {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"}, {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"} ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[30,30,30,30]" style="z-index: 1;border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
                            </div>
                        
                            <!-- LAYER NR. 2 [ Small Title ] -->
                            <div class="tp-caption   tp-resizeme site-text-primary" id="slide-902-layer-2" data-x="['left','left','left','center']" data-hoffset="['30','50','50','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-180','-180','-180','-140']" data-fontsize="['20','20','20','20']" data-lineheight="['20','20','20','20']" data-width="['700','700','700','400']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[ {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"}, {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"} ]' data-textAlign="['left','left','left','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; white-space: normal; font-weight: 700; font-family: 'Montserrat', sans-serif;"></div>
                                                        
                            <!-- LAYER NR. 3 [ Large Title ] -->
                            <div class="tp-caption   tp-resizeme" id="slide-902-layer-3" data-x="['left','left','left','center']" data-hoffset="['30','50','50','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-60','-60','-60','-60']"  data-fontsize="['48','48','36','24']" data-lineheight="['64','64','36','24']" data-width="['900','900','700','400']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','center']" data-paddingtop="[5,5,5,5]" data-paddingright="[0,0,0,0]" data-paddingbottom="[100,100,100,100]" data-paddingleft="[30,30,30,30]" style="z-index: 13; white-space: normal; font-weight: 900; color:#fff; border-width:0px; font-family: 'Montserrat', sans-serif;">BÂTIR AVEC EXCELLENCE,INNOVER POUR DEMAIN.</div>
                        
                            <!-- LAYER NR. 4 [ for paragraph] -->
                            <div class="tp-caption  tp-resizeme" id="slide-902-layer-4" data-x="['left','left','left','center']" data-hoffset="['30','50','50','0']" data-y="['middle','middle','middle','middle']" data-voffset="['80','80','50','20']" data-fontsize="['18','18','20','14']" data-lineheight="['30','30','30','22']" data-width="['800','800','900','600']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[ {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[30,30,30,30]" style="z-index: 13; font-weight: 500; color:#fff; border-width:0px;font-family: 'Montserrat', sans-serif;">
                          Experts en travaux de gros œuvre et second œuvre nous  vous accompagne de l’étude à la réalisation complète de vos projets.
                        Nous assurons la conception sur mesure, la planification technique et la mise en œuvre clé en main de vos constructions 
                        ou rénovations, avec un engagement constant pour la qualité, la sécurité et le respect des délais.
                          
                            </div>
                        
                            <!-- LAYER NR. 5 [ for see all service botton ] -->
                            <div class="tp-caption tp-resizeme" id="slide-902-layer-5"  data-x="['left','left','left','center']" data-hoffset="['30','50','50','0']" data-y="['middle','middle','middle','middle']" data-voffset="['180','180','150','100']"  data-lineheight="['none','none','none','none']"  data-width="['200','200','200','200']"  data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text"  data-responsive_offset="on" data-frames='[  {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},  {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"} ]' data-textAlign="['left','left','left','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[30,30,30,30]" style="z-index:13; text-transform:uppercase; white-space: nowrap;">
                            <a href="{{ route('home.projets') }}" class="site-button btn-hover-animation">DECOUVREZ NOS PROJETS</a>
                            </div>

                                <!-- LAYER NR. 6 large number -->
                            <div class="tp-caption tp-resizeme" id="slide-902-layer-6" data-x="['right','right','right','center']" data-hoffset="['40','40','40','0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','100']" data-fontsize="['400','400','200','100']" data-lineheight="['400','400','200','100']" data-width="['800','800','800','800']"data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[ {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"}, {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"} ]'data-textAlign="['right','right','right','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; white-space: normal; font-weight: 900; color:rgba(0,0,0,0);">
                            <!-- <span class="slider-text-outline" style="font-family: 'Montserrat', sans-serif;text-transform:uppercase;">02</span> -->
                            </div>  

                                                    
                        </li>  
                        
                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	
                </div>
            </div>
                
            <!-- SLIDER END -->


                <!-- INTRO SECTION START -->
                <div class="section-full p-t120 p-b90 site-bg-white">
                            
                    <div class="container">

                        <!-- TITLE START-->
                        <div class="wt-separator-two-part">
                            <div class="row wt-separator-two-part-row">
                                <div class="col-lg-12 col-md-12 wt-separator-two-part-left">
                                    <!-- TITLE START-->
                                    <div class="section-head center wt-small-separator-outer">
                                        <div class="wt-small-separator site-text-primary">
                                            <div>DECOUVREZ NOS SERVICES</div>
                                        </div>
                                        <p class="wt-title">DIBMAT & BUILD est une entreprise de construction,
                                            de génie électrique, d’énergie, de climatisation et de prestations
                                            diverses.</p>
                                    </div>
                                    <!-- TITLE END-->
                                </div>
                                                            
                            </div>
                        </div>
                        <!-- TITLE END-->


                        <div class="s-section">
                            <div class="row d-flex justify-content-center">
                        
                                <!-- COLUMNS 1 --> 
                                <div class="col-lg-3 col-md-6  col-sm-6 m-b30">
                                    <div class="square-flip">
                                        <div class="square shadow-bx">
                                            <div class="square-container">
                                                <div class="wt-icon-box-wraper m-b30">
                                                    <div class="icon-lg inline-icon">
                                                        <span class="icon-cell site-text-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" id="Line" width="100" height="100" stroke="#f57c00" stroke-width="2" viewBox="0 0 64 64">
                                                                <path d="m59.98965 22.16718a1.01561 1.01561 0 0 0 -.67492-.91284c-.96673-.21476-38.64923-13.11567-39.72293-13.20152l-14.66106 1.24467a1.022 1.022 0 0 0 -.93074.99741v2.72349a.99906.99906 0 0 0 .53611.8857l5.55637 2.91007v7.01914h-4.53884c-.02307 0-.0423.0116-.06494.01312a1.0273 1.0273 0 0 0 -.935.98686v3.19123a.99942.99942 0 0 0 .3633.77149l32.60484 26.9225a1.03766 1.03766 0 0 0 .89449.19432l20.25392-5.404a.99942.99942 0 0 0 .73923-1.0478l-.375-4.5535a1.07054 1.07054 0 0 0 -.39257-.7148l-6.2987-4.77523.65738-10.54735 6.17452-1.11414a1.00092 1.00092 0 0 0 .82223-.98433c-.00921-.03529.01571-4.57502-.00769-4.60449zm-5.27551-.34312-16.20467 2.3924-29.57233-13.2526 10.61778-.90139zm-48.71424-9.98531 31.36765 14.05683v2.94615l-31.36765-16.42873zm31.90376 19.54107a1.07541 1.07541 0 0 0 .64157.09862l6.89518-1.2442v16.6623c-.00387.00911-33.34473-22.59577-33.348-22.59359v-6.44141zm.06018 17.25766-29.4834-22.80427h2.30537l31.99719 21.68213zm-31.41025-21.76703 30.21341 23.36894.19988 2.42653-30.41329-25.11209zm32.50334 26.80225-.26171-3.17563 18.34093-4.27128.21092 2.56629zm16.67834-9.17345-3.76337.87636.222-3.56123zm-5.79666 1.34985-2.49829.5817v-16.55738l3.5337-.63767zm8.05882-19.91336-18.63 3.36215v-3.18638l18.63-2.75084z"/></svg>
                                                            </svg>
                                                        </span>
                                                        
                                                    </div>
                                                </div>
                                                <h4 class="wt-title">
                                                    <a href="">CONSTRUCTION METALLIQUE, TUYAUTERIE ET INSTALLATION D'EQUIPEMENT INDUSTRIELS</a>
                                                </h4>
                                                
                                            </div>
                                            
                                        </div>
                                        <div class='square2'>
                                            <div class="square-container2">
                                                <div class="wt-icon-box-wraper m-b30">
                                                    <div class="icon-lg inline-icon">
                                                        <span class="icon-cell site-text-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" id="Line" width="100" height="100" fill="#f57c00"  viewBox="0 0 64 64">
                                                                <path d="m59.98965 22.16718a1.01561 1.01561 0 0 0 -.67492-.91284c-.96673-.21476-38.64923-13.11567-39.72293-13.20152l-14.66106 1.24467a1.022 1.022 0 0 0 -.93074.99741v2.72349a.99906.99906 0 0 0 .53611.8857l5.55637 2.91007v7.01914h-4.53884c-.02307 0-.0423.0116-.06494.01312a1.0273 1.0273 0 0 0 -.935.98686v3.19123a.99942.99942 0 0 0 .3633.77149l32.60484 26.9225a1.03766 1.03766 0 0 0 .89449.19432l20.25392-5.404a.99942.99942 0 0 0 .73923-1.0478l-.375-4.5535a1.07054 1.07054 0 0 0 -.39257-.7148l-6.2987-4.77523.65738-10.54735 6.17452-1.11414a1.00092 1.00092 0 0 0 .82223-.98433c-.00921-.03529.01571-4.57502-.00769-4.60449zm-5.27551-.34312-16.20467 2.3924-29.57233-13.2526 10.61778-.90139zm-48.71424-9.98531 31.36765 14.05683v2.94615l-31.36765-16.42873zm31.90376 19.54107a1.07541 1.07541 0 0 0 .64157.09862l6.89518-1.2442v16.6623c-.00387.00911-33.34473-22.59577-33.348-22.59359v-6.44141zm.06018 17.25766-29.4834-22.80427h2.30537l31.99719 21.68213zm-31.41025-21.76703 30.21341 23.36894.19988 2.42653-30.41329-25.11209zm32.50334 26.80225-.26171-3.17563 18.34093-4.27128.21092 2.56629zm16.67834-9.17345-3.76337.87636.222-3.56123zm-5.79666 1.34985-2.49829.5817v-16.55738l3.5337-.63767zm8.05882-19.91336-18.63 3.36215v-3.18638l18.63-2.75084z"/></svg>
                                                            </svg>
                                                        </span>
                                                        
                                                    </div>
                                                </div>
                                                <h4 class="wt-title">
                                                    <a href="{{ route('home.service_construction') }}">CONSTRUCTION METALLIQUE, TUYAUTERIE ET INSTALLATION D'EQUIPEMENT INDUSTRIELS</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                                <!-- COLUMNS 2 --> 
                                <div class="col-lg-3 col-md-6  col-sm-6 m-b30">
                                    <div class="square-flip">
                                        <div class="square shadow-bx">
                                            <div class="square-container">
                                                <div class="wt-icon-box-wraper m-b30">
                                                    <div class="icon-lg inline-icon">
                                                        <span class="icon-cell site-text-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 426.667 426.667" width="100" height="100" stroke="#f57c00" fill="#f57c00" style="enable-background:new 0 0 426.667 426.667;" xml:space="preserve">
                                                                <g>
                                                                    <g>
                                                                        <path d="M405.333,362.667V149.333H320V0H149.333v106.667h-128v256H0v64h426.667v-64H405.333z M106.667,362.667H64V320h42.667    V362.667z M106.667,277.333H64v-42.667h42.667V277.333z M106.667,192H64v-42.667h42.667V192z M277.333,362.667H192v-64h85.333    V362.667z M277.333,234.667H192v-64h85.333V234.667z M277.333,106.667H192v-64h85.333V106.667z"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g><g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                            </svg>                                                    </span>
                                                    </div>
                                                </div>
                                                <h4 class="wt-title">
                                                    <a href="{{ route('home.batiment') }}">BÂTIMENT</a>
                                                </h4>
                                                
                                            </div>
                                            
                                        </div>
                                        <div class='square2'>
                                            <div class="square-container2">
                                                <div class="wt-icon-box-wraper m-b30">
                                                    <div class="icon-lg inline-icon">
                                                        <span class="icon-cell site-text-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 426.667 426.667" width="100" height="100" stroke="#f57c00" fill="#f57c00" style="enable-background:new 0 0 426.667 426.667;" xml:space="preserve">
                                                                <g>
                                                                    <g>
                                                                        <path d="M405.333,362.667V149.333H320V0H149.333v106.667h-128v256H0v64h426.667v-64H405.333z M106.667,362.667H64V320h42.667    V362.667z M106.667,277.333H64v-42.667h42.667V277.333z M106.667,192H64v-42.667h42.667V192z M277.333,362.667H192v-64h85.333    V362.667z M277.333,234.667H192v-64h85.333V234.667z M277.333,106.667H192v-64h85.333V106.667z"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                            </svg>                                                    
                                                        </span>
                                                    </div>
                                                </div>
                                                <h4 class="wt-title">
                                                    <a href="{{ route('home.batiment') }}">BÂTIMENT</a>
                                                </h4>                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- COLUMNS 3 -->
                                <div class="col-lg-3 col-md-6  col-sm-6 m-b30">
                                    <div class="square-flip">
                                        <div class="square shadow-bx">
                                            <div class="square-container">
                                                <div class="wt-icon-box-wraper m-b30">
                                                    <div class="icon-lg inline-icon">
                                                        <span class="icon-cell site-text-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="100" height="100" fill="#f57C00" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                                <g>
                                                                    <g>
                                                                        <path d="M271.092,436.315V343.56h-0.002c-4.9,0.85-9.95,1.29-15.09,1.29c-5.08,0-10.06-0.43-14.91-1.26v92.718l-42.828,35.763    l19.229,23.027l23.6-19.706V512h30v-36.601l23.591,19.698l19.229-23.027L271.092,436.315z"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M294.68,17.487l-23.59,19.698V0h-30v37.193l-23.6-19.706l-19.229,23.027l42.828,35.763v92.133h0.001    c4.85-0.83,9.83-1.26,14.91-1.26c5.14,0,10.19,0.44,15.09,1.29V76.269l42.819-35.755L294.68,17.487z"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M139.605,118.306l4.996-55.564l-29.88-2.688L111.97,90.66L85.68,64.37L64.46,85.59l26.29,26.29l0.004,0.004l-30.614,2.753    l2.686,29.879l55.564-4.995l65.14,65.14c5.82-8.21,13.01-15.39,21.23-21.2L139.605,118.306z"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M421.829,400.528l30.615-2.753l-2.687-29.878l-55.565,4.995l-0.003-0.003l-65.65-65.65c-5.81,8.22-12.99,15.41-21.2,21.24    l65.637,65.637l-4.995,55.553l29.88,2.688l2.752-30.605l25.877,25.877l21.22-21.22l-25.88-25.88L421.829,400.528z"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M512,241.21h-36.608l19.706-23.599l-23.027-19.229l-35.761,42.827h-92.7c0.82,4.81,1.24,9.75,1.24,14.79    c0,5.19-0.45,10.27-1.31,15.21h92.775l35.755,42.82l23.027-19.229l-19.699-23.592H512V241.21z"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M167.15,256c0-5.04,0.42-9.98,1.24-14.79H76.275l-35.761-42.827l-23.027,19.229l19.705,23.599H0v30h37.186l-19.699,23.592    l23.027,19.229l35.755-42.82h92.191v-0.002C167.6,266.27,167.15,261.19,167.15,256z"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M421.751,111.677L447.63,85.8l-21.22-21.22l-25.88,25.88l-0.001,0.001l-2.752-30.613l-29.88,2.688l4.996,55.562    L307.41,183.58c8.2,5.83,15.38,13.03,21.18,21.26l65.526-65.526l55.556,4.995l2.686-29.879L421.751,111.677z"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M204.84,328.59c-8.23-5.8-15.43-12.98-21.26-21.18l-65.276,65.276l-55.563-4.996l-2.687,29.879l30.613,2.753L64.37,426.62    l21.22,21.22l26.295-26.294l2.752,30.607l29.88-2.688l-4.995-55.555L204.84,328.59z"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M298.6,215.4c-0.16-0.17-0.33-0.34-0.49-0.5l-1-1c-0.17-0.17-0.34-0.33-0.51-0.5c-10.56-10.07-24.86-16.25-40.6-16.25    c-16.25,0-30.96,6.59-41.61,17.24c-10.65,10.65-17.24,25.36-17.24,41.61c0,16,6.39,30.5,16.75,41.11c0.33,0.34,0.66,0.67,1,1    c10.6,10.36,25.11,16.74,41.1,16.74c16.25,0,30.96-6.59,41.61-17.24c10.65-10.65,17.24-25.36,17.24-41.61    C314.85,240.26,308.67,225.96,298.6,215.4z"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                                <h4 class="wt-title text-uppercase">
                                                    <a href="{{ route('home.climatisation') }}">Travaux de climatisation</a>
                                                </h4>
                                                
                                            </div>
                                            
                                        </div>
                                        <div class='square2'>
                                            <div class="square-container2">
                                                <div class="wt-icon-box-wraper m-b30">
                                                    <div class="icon-lg inline-icon">
                                                        <span class="icon-cell site-text-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="100" height="100" fill="#f57C00" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                                <g>
                                                                    <g>
                                                                        <path d="M271.092,436.315V343.56h-0.002c-4.9,0.85-9.95,1.29-15.09,1.29c-5.08,0-10.06-0.43-14.91-1.26v92.718l-42.828,35.763    l19.229,23.027l23.6-19.706V512h30v-36.601l23.591,19.698l19.229-23.027L271.092,436.315z"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M294.68,17.487l-23.59,19.698V0h-30v37.193l-23.6-19.706l-19.229,23.027l42.828,35.763v92.133h0.001    c4.85-0.83,9.83-1.26,14.91-1.26c5.14,0,10.19,0.44,15.09,1.29V76.269l42.819-35.755L294.68,17.487z"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M139.605,118.306l4.996-55.564l-29.88-2.688L111.97,90.66L85.68,64.37L64.46,85.59l26.29,26.29l0.004,0.004l-30.614,2.753    l2.686,29.879l55.564-4.995l65.14,65.14c5.82-8.21,13.01-15.39,21.23-21.2L139.605,118.306z"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M421.829,400.528l30.615-2.753l-2.687-29.878l-55.565,4.995l-0.003-0.003l-65.65-65.65c-5.81,8.22-12.99,15.41-21.2,21.24    l65.637,65.637l-4.995,55.553l29.88,2.688l2.752-30.605l25.877,25.877l21.22-21.22l-25.88-25.88L421.829,400.528z"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M512,241.21h-36.608l19.706-23.599l-23.027-19.229l-35.761,42.827h-92.7c0.82,4.81,1.24,9.75,1.24,14.79    c0,5.19-0.45,10.27-1.31,15.21h92.775l35.755,42.82l23.027-19.229l-19.699-23.592H512V241.21z"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M167.15,256c0-5.04,0.42-9.98,1.24-14.79H76.275l-35.761-42.827l-23.027,19.229l19.705,23.599H0v30h37.186l-19.699,23.592    l23.027,19.229l35.755-42.82h92.191v-0.002C167.6,266.27,167.15,261.19,167.15,256z"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M421.751,111.677L447.63,85.8l-21.22-21.22l-25.88,25.88l-0.001,0.001l-2.752-30.613l-29.88,2.688l4.996,55.562    L307.41,183.58c8.2,5.83,15.38,13.03,21.18,21.26l65.526-65.526l55.556,4.995l2.686-29.879L421.751,111.677z"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M204.84,328.59c-8.23-5.8-15.43-12.98-21.26-21.18l-65.276,65.276l-55.563-4.996l-2.687,29.879l30.613,2.753L64.37,426.62    l21.22,21.22l26.295-26.294l2.752,30.607l29.88-2.688l-4.995-55.555L204.84,328.59z"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M298.6,215.4c-0.16-0.17-0.33-0.34-0.49-0.5l-1-1c-0.17-0.17-0.34-0.33-0.51-0.5c-10.56-10.07-24.86-16.25-40.6-16.25    c-16.25,0-30.96,6.59-41.61,17.24c-10.65,10.65-17.24,25.36-17.24,41.61c0,16,6.39,30.5,16.75,41.11c0.33,0.34,0.66,0.67,1,1    c10.6,10.36,25.11,16.74,41.1,16.74c16.25,0,30.96-6.59,41.61-17.24c10.65-10.65,17.24-25.36,17.24-41.61    C314.85,240.26,308.67,225.96,298.6,215.4z"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                                <h4 class="wt-title text-uppercase">
                                                    <a href="{{ route('home.climatisation') }}">Travaux de climatisation</a>
                                                </h4>                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- COLUMNS 4 --> 
                                <div class="col-lg-3 col-md-6  col-sm-6 m-b30">
                                    <div class="square-flip">
                                        <div class="square shadow-bx">
                                            <div class="square-container">
                                                <div class="wt-icon-box-wraper m-b30">
                                                    <div class="icon-lg inline-icon">
                                                        <span class="icon-cell site-text-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 511.998 511.998" width="100" height="100" fill="#f57C00" style="enable-background:new 0 0 511.998 511.998;" xml:space="preserve">
                                                                <g>
                                                                    <g>
                                                                        <path d="M465.135,165.947L325.631,126.09V56.438h88.512v16.036h-13.194c-4.149,0-7.512,3.362-7.512,7.512v31.062    c0,4.15,3.363,7.512,7.512,7.512h41.415c4.149,0,7.512-3.362,7.512-7.512V79.987c0-4.15-3.363-7.512-7.512-7.512h-13.197V56.438    h33.905c3.746,0,6.92-2.76,7.44-6.47c0.52-3.71-1.774-7.235-5.376-8.265L320.359,0.341c-0.008-0.003-0.017-0.005-0.025-0.007    l-0.152-0.043c-0.059-0.017-0.117-0.026-0.176-0.041c-0.161-0.042-0.323-0.082-0.488-0.113c-0.12-0.023-0.239-0.038-0.359-0.055    c-0.119-0.017-0.237-0.035-0.358-0.046c-0.166-0.015-0.332-0.021-0.498-0.025C318.241,0.008,318.181,0,318.119,0h-0.161    c-0.007,0-0.015,0-0.022,0H194.064c-0.013,0-0.027,0-0.04,0h-0.147c-0.057,0-0.113,0.007-0.17,0.009    c-0.172,0.004-0.344,0.01-0.516,0.026c-0.115,0.01-0.228,0.028-0.343,0.044c-0.124,0.018-0.248,0.033-0.374,0.057    c-0.162,0.031-0.321,0.07-0.478,0.111c-0.061,0.016-0.122,0.025-0.183,0.042l-0.156,0.045c-0.006,0.002-0.012,0.003-0.018,0.005    L46.861,41.703c-3.602,1.03-5.895,4.555-5.375,8.265c0.52,3.71,3.694,6.47,7.44,6.47h33.903v16.036H69.632    c-4.149,0-7.512,3.362-7.512,7.512v31.062c0,4.15,3.363,7.512,7.512,7.512h41.415c4.149,0,7.512-3.362,7.512-7.512V79.987    c0-4.15-3.363-7.512-7.512-7.512H97.851V56.438h88.514v69.651L46.861,165.947c-3.602,1.03-5.895,4.555-5.375,8.265    c0.52,3.71,3.694,6.47,7.44,6.47h33.903v16.036H69.632c-4.149,0-7.512,3.362-7.512,7.512v31.062c0,4.15,3.363,7.512,7.512,7.512    h41.415c4.149,0,7.512-3.362,7.512-7.512v-31.062c0-4.15-3.363-7.512-7.512-7.512H97.851v-16.036h88.514v74.265l-30.723,107.526    c-0.001,0.004-0.002,0.009-0.004,0.013l-0.06,0.209c-0.001,0.003-0.002,0.007-0.003,0.01l-0.014,0.049    c-0.002,0.009-0.005,0.018-0.008,0.026l-29.467,103.13h-15.041c-4.149,0-7.512,3.362-7.512,7.512v23.551H88.183    c-4.149,0-7.512,3.362-7.512,7.512s3.363,7.512,7.512,7.512h22.864h289.904h22.862c4.149,0,7.512-3.362,7.512-7.512    s-3.363-7.512-7.512-7.512h-15.35v-23.551c0-4.15-3.363-7.512-7.512-7.512h-15.042l-29.465-103.123    c-0.004-0.015-0.009-0.031-0.013-0.046l-0.068-0.239c-0.004-0.012-0.007-0.024-0.01-0.036l-30.721-107.52v-74.265h88.512v16.036    h-13.194c-4.149,0-7.512,3.362-7.512,7.512v31.062c0,4.15,3.363,7.512,7.512,7.512h41.415c4.149,0,7.512-3.362,7.512-7.512V204.23    c0-4.15-3.363-7.512-7.512-7.512h-13.197v-16.036h33.905c3.746,0,6.92-2.76,7.44-6.47    C471.03,170.502,468.736,166.977,465.135,165.947z M434.852,87.499v16.038h-26.391V87.499H434.852z M325.631,17.472l83.804,23.943    h-83.804V17.472z M103.535,87.499v16.038H77.144V87.499H103.535z M103.535,211.741v16.038H77.144v-16.038H103.535z     M201.389,15.024h109.218v26.391H201.389V15.024z M310.607,56.438v61.281l-91.922-61.281H310.607z M201.389,62.963l91.92,61.28    h-91.92V62.963z M201.389,139.267h109.218v26.392H201.389V139.267z M186.647,357.199l69.352-48.546l69.352,48.546H186.647z     M317.361,372.223l-61.363,30.682l-61.362-30.682H317.361z M217.708,263.511h76.58l-38.29,26.802L217.708,263.511z     M310.607,180.682v61.28l-91.921-61.28H310.607z M201.389,187.206l91.923,61.282h-91.923V187.206z M102.56,41.414l83.805-23.943    v23.943H102.56z M102.56,165.658l83.805-23.945v23.945H102.56z M198.204,268.198l44.695,31.286l-67.042,46.928L198.204,268.198z     M167.552,375.477l71.649,35.825l-95.533,47.767L167.552,375.477z M380.237,480.939L380.237,480.939h0.002    c0.009,0,0.019-0.002,0.028-0.002h13.173v16.039h-0.001H118.56v-16.039h13.172c0.01,0,0.019,0.002,0.028,0.002    c0.011,0,0.023-0.002,0.034-0.002h0.108c0.013,0,0.027,0,0.04,0h70.751c4.149,0,7.512-3.362,7.512-7.512    c0-4.15-3.363-7.512-7.512-7.512h-39.119l92.424-46.212l92.424,46.212H236.184c-4.149,0-7.512,3.362-7.512,7.512    c0,4.15,3.363,7.512,7.512,7.512h144.019C380.214,480.937,380.226,480.939,380.237,480.939z M368.328,459.069l-95.533-47.767    l71.649-35.825L368.328,459.069z M336.14,346.413l-67.043-46.929l44.695-31.286L336.14,346.413z M325.631,165.658v-23.944    l83.805,23.944H325.631z M434.852,211.741v16.038h-26.391v-16.038H434.852z"/>
                                                                    </g>
                                                                </g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                                <h4 class="wt-title text-uppercase"><a href="{{ route('home.electricite') }}">travaux d’ Électricité et énergie</a></h4>
                                                
                                            </div>
                                            
                                        </div>
                                        <div class='square2'>
                                            <div class="square-container2">
                                                <div class="wt-icon-box-wraper m-b30">
                                                    <div class="icon-lg inline-icon">
                                                        <span class="icon-cell site-text-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 511.998 511.998" width="100" height="100" fill="#f57C00" style="enable-background:new 0 0 511.998 511.998;" xml:space="preserve">
                                                                <g>
                                                                    <g>
                                                                        <path d="M465.135,165.947L325.631,126.09V56.438h88.512v16.036h-13.194c-4.149,0-7.512,3.362-7.512,7.512v31.062    c0,4.15,3.363,7.512,7.512,7.512h41.415c4.149,0,7.512-3.362,7.512-7.512V79.987c0-4.15-3.363-7.512-7.512-7.512h-13.197V56.438    h33.905c3.746,0,6.92-2.76,7.44-6.47c0.52-3.71-1.774-7.235-5.376-8.265L320.359,0.341c-0.008-0.003-0.017-0.005-0.025-0.007    l-0.152-0.043c-0.059-0.017-0.117-0.026-0.176-0.041c-0.161-0.042-0.323-0.082-0.488-0.113c-0.12-0.023-0.239-0.038-0.359-0.055    c-0.119-0.017-0.237-0.035-0.358-0.046c-0.166-0.015-0.332-0.021-0.498-0.025C318.241,0.008,318.181,0,318.119,0h-0.161    c-0.007,0-0.015,0-0.022,0H194.064c-0.013,0-0.027,0-0.04,0h-0.147c-0.057,0-0.113,0.007-0.17,0.009    c-0.172,0.004-0.344,0.01-0.516,0.026c-0.115,0.01-0.228,0.028-0.343,0.044c-0.124,0.018-0.248,0.033-0.374,0.057    c-0.162,0.031-0.321,0.07-0.478,0.111c-0.061,0.016-0.122,0.025-0.183,0.042l-0.156,0.045c-0.006,0.002-0.012,0.003-0.018,0.005    L46.861,41.703c-3.602,1.03-5.895,4.555-5.375,8.265c0.52,3.71,3.694,6.47,7.44,6.47h33.903v16.036H69.632    c-4.149,0-7.512,3.362-7.512,7.512v31.062c0,4.15,3.363,7.512,7.512,7.512h41.415c4.149,0,7.512-3.362,7.512-7.512V79.987    c0-4.15-3.363-7.512-7.512-7.512H97.851V56.438h88.514v69.651L46.861,165.947c-3.602,1.03-5.895,4.555-5.375,8.265    c0.52,3.71,3.694,6.47,7.44,6.47h33.903v16.036H69.632c-4.149,0-7.512,3.362-7.512,7.512v31.062c0,4.15,3.363,7.512,7.512,7.512    h41.415c4.149,0,7.512-3.362,7.512-7.512v-31.062c0-4.15-3.363-7.512-7.512-7.512H97.851v-16.036h88.514v74.265l-30.723,107.526    c-0.001,0.004-0.002,0.009-0.004,0.013l-0.06,0.209c-0.001,0.003-0.002,0.007-0.003,0.01l-0.014,0.049    c-0.002,0.009-0.005,0.018-0.008,0.026l-29.467,103.13h-15.041c-4.149,0-7.512,3.362-7.512,7.512v23.551H88.183    c-4.149,0-7.512,3.362-7.512,7.512s3.363,7.512,7.512,7.512h22.864h289.904h22.862c4.149,0,7.512-3.362,7.512-7.512    s-3.363-7.512-7.512-7.512h-15.35v-23.551c0-4.15-3.363-7.512-7.512-7.512h-15.042l-29.465-103.123    c-0.004-0.015-0.009-0.031-0.013-0.046l-0.068-0.239c-0.004-0.012-0.007-0.024-0.01-0.036l-30.721-107.52v-74.265h88.512v16.036    h-13.194c-4.149,0-7.512,3.362-7.512,7.512v31.062c0,4.15,3.363,7.512,7.512,7.512h41.415c4.149,0,7.512-3.362,7.512-7.512V204.23    c0-4.15-3.363-7.512-7.512-7.512h-13.197v-16.036h33.905c3.746,0,6.92-2.76,7.44-6.47    C471.03,170.502,468.736,166.977,465.135,165.947z M434.852,87.499v16.038h-26.391V87.499H434.852z M325.631,17.472l83.804,23.943    h-83.804V17.472z M103.535,87.499v16.038H77.144V87.499H103.535z M103.535,211.741v16.038H77.144v-16.038H103.535z     M201.389,15.024h109.218v26.391H201.389V15.024z M310.607,56.438v61.281l-91.922-61.281H310.607z M201.389,62.963l91.92,61.28    h-91.92V62.963z M201.389,139.267h109.218v26.392H201.389V139.267z M186.647,357.199l69.352-48.546l69.352,48.546H186.647z     M317.361,372.223l-61.363,30.682l-61.362-30.682H317.361z M217.708,263.511h76.58l-38.29,26.802L217.708,263.511z     M310.607,180.682v61.28l-91.921-61.28H310.607z M201.389,187.206l91.923,61.282h-91.923V187.206z M102.56,41.414l83.805-23.943    v23.943H102.56z M102.56,165.658l83.805-23.945v23.945H102.56z M198.204,268.198l44.695,31.286l-67.042,46.928L198.204,268.198z     M167.552,375.477l71.649,35.825l-95.533,47.767L167.552,375.477z M380.237,480.939L380.237,480.939h0.002    c0.009,0,0.019-0.002,0.028-0.002h13.173v16.039h-0.001H118.56v-16.039h13.172c0.01,0,0.019,0.002,0.028,0.002    c0.011,0,0.023-0.002,0.034-0.002h0.108c0.013,0,0.027,0,0.04,0h70.751c4.149,0,7.512-3.362,7.512-7.512    c0-4.15-3.363-7.512-7.512-7.512h-39.119l92.424-46.212l92.424,46.212H236.184c-4.149,0-7.512,3.362-7.512,7.512    c0,4.15,3.363,7.512,7.512,7.512h144.019C380.214,480.937,380.226,480.939,380.237,480.939z M368.328,459.069l-95.533-47.767    l71.649-35.825L368.328,459.069z M336.14,346.413l-67.043-46.929l44.695-31.286L336.14,346.413z M325.631,165.658v-23.944    l83.805,23.944H325.631z M434.852,211.741v16.038h-26.391v-16.038H434.852z"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                <g>
                                                                </g>
                                                                </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                                <h4 class="wt-title text-uppercase"><a href="{{ route('home.electricite') }}">travaux d’ Électricité et énergie</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>                            
                                

                                
                            </div>
                        </div>                  
                    </div>

                </div>   
                <!-- INTRO SECTION END -->  


                <!-- ABOUT ONE SECTION START -->
                <div class="section-full p-t120 p-b90 site-bg-light">
                    <div class="about-section-one">
                        <div class="container">
                            <div class="wt-separator-two-part">
                                <div class="row wt-separator-two-part-row">
                                    <div class="col-lg-12 col-md-12 wt-separator-two-part-left">
                                        <!-- TITLE START-->
                                        <div class="section-head center wt-small-separator-outer">
                                            <div class="wt-small-separator text-uppercase mb-4 site-text-primary">
                                                <div>L’expertise au service de vos projets</div>
                                            </div>
                                            
                                        </div>
                                        <!-- TITLE END-->
                                    </div>
                                                                
                                </div>
                            </div>
                            <div class="section-content">                 
                                <div class="row justify-content-center d-flex">

                                    <div class="col-lg-6 col-md-12 m-b30">
                                        <div class="about-section-two-right">
                                        

                                            <div class="about-one">
                                                <p>
                                                DIBMAT & BUILD est une entreprise spécialisée dans la construction, le génie électrique, les solutions énergétiques, le froid, ainsi que dans diverses prestations techniques. Depuis notre création, nous nous sommes imposé comme un acteur de confiance auprès de nos clients privés et publics, grâce à notre sérieux, notre professionnalisme et notre engagement de qualité. Notre force repose sur une équipe pluridisciplinaire composée d’ingénieurs, de techniciens et d’ouvriers qualifiés, tous animés par le souci du travail bien fait. Chaque projet est encadré par un management rigoureux, garantissant le respect des délais, des normes de sécurité, et des exigences spécifiques de nos clients.
                                                </p>
                                                <p class="text-uppercase mt-5 site-text-primary">
                                                    <strong style="color: #f57c00;">CE QUI NOUS DIFFERENCIE DES AUTRES</strong>
                                                </p> 
                                            </div>
                                            <div class="row about-one-icon-box">
                                                <div class="col-xl-6 col-md-12 col-sm-6 m-t30">
                                                    <div class="wt-icon-box-wraper left">
                                                        <div class="icon-md inline-icon m-b20">
                                                            <span class="icon-cell "><i class="flaticon-worker"></i></span>
                                                        </div>
                                                        <div class="icon-content">
                                                            <h4 class="wt-tilte text-uppercase">PROFESSIONNALISME</h4>
                                                            <!-- <p>Lorem ipsum dolor sit piscing sed nonmy</p> -->
                                                        </div>
                                                    </div>                                         
                                                </div>  
                                                                                
                                                <div class="col-xl-6 col-md-12 col-sm-6 m-t30">
                                                    <div class="wt-icon-box-wraper left">
                                                        <div class="icon-md inline-icon m-b20">
                                                            <span class="icon-cell"><i class="flaticon-design"></i></span>
                                                        </div>
                                                        <div class="icon-content">
                                                            <h4 class="wt-tilte text-uppercase">RIGUEUR ET RESPECT</h4>
                                                            <!-- <p>Lorem ipsum dolor sit piscing sed nonmy</p> -->
                                                        </div>
                                                    </div> 
                                                </div>
                                                            
                                            </div>

                                            

                                            <a href="{{ route('home.histoire') }}" class="site-buttons btn-hover-animation">En SAVOIR PLUS</a> 
                                    </div>
                                </div>
                                
                                    <div class="col-lg-6 col-md-12 m-b30 about-max-two-position">
                                        <div class="about-max-two">
                                            <div class="about-max-two-media">
                                                <img src="{{ url('assets/front/images/travaux_2.jpg')}}" alt="">
                                            </div>
                                            <div class="about-max-two-video">
                                                @php
                                                    $startYear = 2022;
                                                    $experienceYears = now()->year - $startYear;
                                                @endphp
                                                <p class="ripple center site-text-white">+{{ $experienceYears }}  <br> ANS D'EXPERIENCES</p>
                                                
                                            </div>
                                        </div>
                                    </div> 

                                
                                                        
                            </div>
                            </div> 
                        </div>
                    </div>
                </div>   
                <!-- ABOUT ONE SECTION END -->

                <!-- PROJECT SECTION START -->

                <div class="section-full p-t120  p-b90 site-bg-white" style="background-image: url('{{ url('assets/front/images/background/image-background.png')}}') !important;">
                            
                    <div class="container">
                        <!-- TITLE START-->
                        <div class="container">
                            <!-- TITLE START-->
                            <div class="section-head center wt-small-separator-outer">
                                <div class="wt-small-separator site-text-primary">
                                    <div style="line-height: 1.8;"> DECOUVREZ LES PROJETS <br> QUE NOUS AVONS REALISES</div>
                                </div>
                                <!-- <h2>We provide a variety of construction services</h2> -->
                            </div>
                            <!-- TITLE END--> 
                        </div>
                        <!-- TITLE END-->  
                        <div class="s-section">
                            <div class="row">
                                

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
                            <div style="display: flex; justify-content: center; " class="m-b20">
                                <a href="{{ route('home.projets') }}" class="site-buttons btn-hover-animation boxshadow" style="margin: 0 auto;">
                                DECOUVREZ NOS PROJETS
                                </a>
                            </div>
                        </div>
                        
                    
                    </div>

                </div> 

                <!-- PROJECT SECTION END -->
            
                <!-- CLIENT LOGO SECTION START -->

                <div class="section-full site-bg-white p-t100 p-b120 bg-moving"  style="background-color: #fff;">
                
                    <!-- TITLE START-->
                    <div class="container">
                        <!-- TITLE START-->
                        <div class="section-head center wt-small-separator-outer">
                            <div class="wt-small-separator site-text-primary">
                                <div>UNE RELATION DE CONFIANCE AVEC NOS CLIENTS</div>
                            </div>
                            <!-- <h2>We provide a variety of construction services</h2> -->
                        </div>
                        <!-- TITLE END--> 
                    </div>
                    <!-- TITLE END-->  

                    <div class="container home-client3-outer">
                        <div class="section-content">
                            <div class="home-client-carousel3-wrap">
                                <div class="owl-carousel home-client-carousel3 owl-btn-vertical-center">
                                
                                    <div class="item">
                                        <div class="ow-client-logo">
                                            <div class="client-logo client-logo-media">
                                            <a href="about-2.html"><img src="{{ url('assets/front/images/client-logo/images.jpg')}}" alt=""></a></div>
                                        </div>
                                    </div>
                                    
                                    <div class="item">
                                        <div class="ow-client-logo">
                                            <div class="client-logo client-logo-media">
                                            <a href="about-2.html"><img src="{{ url('assets/front/images/client-logo/images_dabou.jpeg')}}" alt=""></a></div>
                                        </div>
                                    </div>
                                    
                                    <div class="item">
                                        <div class="ow-client-logo">
                                            <div class="client-logo client-logo-media">
                                            <a href="about-2.html"><img src="{{ url('assets/front/images/client-logo/coris logo.png')}}" alt=""></a></div>
                                        </div>
                                    </div>
                                    
                                    <div class="item">
                                        <div class="ow-client-logo">
                                            <div class="client-logo client-logo-media">
                                            <a href="about-2.html"><img src="{{ url('assets/front/images/client-logo/LOGO_APS_H-01.jpg')}}" alt=""></a></div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CLIENT LOGO  SECTION End -->  
                        

                <!-- OUR BLOG START -->
                <div class="section-full p-t120  p-b60" style="background-color: #f5f5f5;">
                    <div class="container">
                        <div class="section-head center wt-small-separator-outer">
                            <div class="wt-small-separator site-text-primary">
                                <div>DECOUVREZ NOTRE ACTUALITE</div>                                
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

                            <div class="text-center m-b30"> 
                                <a href="{{ route('home.actualites') }}" class="site-buttons btn-hover-animation">TOUTE NOTRE ACTUALITE</a> 
                            </div>

                        </div>
                    </div>
                </div>   
                <!-- OUR BLOG END -->                      


            </div>

@endsection