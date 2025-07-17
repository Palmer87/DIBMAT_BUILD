<div class="footer-top bg-cover" style="background-image:url({{ url('assets/front/images/background/footer-bg.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="widget widget_about">
                    <div class="logo-footer clearfix">
                        <a href="{{ route('home.accueil') }}"><img src="{{ url('assets/front/images/logo_dibmat.jpg') }}" alt=""></a>
                    </div>
                    <p class="site-text-white">Votre entreprise de référence dans les domaines de la construction métallique, electricité, climatisation et bien d'autres.</p>
                </div>                                      
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="widget">
                    <h3 class="widget-title">Contactez-Nous</h3>
                    <ul class="widget_address "> 
                        <li><i class="flaticon-phone-call m-t15"></i>(+225) 27 23 49 57 59 <br>(+225) 01 03 17 58 00</li>
                        <li><i class="fas fa-envelope"></i> dibmat22@gmail.com</li>
                        <li><i class="flaticon-location"></i> Yopougon Sopim</li>
                        <li><i class="fas fa-clock"></i> Lun–Sam : 08h–17h</li>
                    </ul>  
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="widget widget_services">
                    <h3 class="widget-title">Nos services</h3>
                    <ul>
                        <li><a href="{{ route('home.service_construction') }}">Construction métallique</a></li>
                        <li><a href="{{ route('home.batiment') }}">Bâtiment</a></li>
                        <li><a href="{{ route('home.electricite') }}">Energie et électricité</a></li>
                        <li><a href="{{ route('home.climatisation') }}">Travaux de climatisation</a></li>
                    </ul>
                </div>
            </div>                                               

            <div class="col-lg-3 col-md-6">
                <div class="widget widget_services">
                    <h3 class="widget-title">Liens utile</h3>
                    <ul>
                        <li><a href="{{ route('home.histoire') }}">Notre histoire</a></li>
                        <li><a href="{{ route('home.expertise') }}">Notre expertise</a></li>
                        <li><a href="{{ route('home.projets') }}">Projets réalisés</a></li>
                        <li><a href="{{ route('home.contact') }}">Contactez-Nous</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>