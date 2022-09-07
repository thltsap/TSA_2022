@extends('layout.main')

@section('content')

        <!-- header image -->
        <div class="header-img-3"></div>
        <!-- end header image -->
        <!-- Welcome message -->
        <div class="welcome-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="welcome-wrapper">
                            <h2 class="welcome-title text-uppercase">Work</h2>
                            <img src="img/welcome-divider-lines.png" alt="Welcome divider" class="welcome-divider-lines-img">
                            <p class="welcome-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere lectus augue, non rhoncus erat accumsan eu. Sed dictum sem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Welcome message -->
        <!-- main content -->
        <section class="templatemo-container">
            <div class="container">
                <div class="row margin-bottom-30">
                    <div class="col-lg-12 text-uppercase text-center">
                        <h2 class="section-title">Profile</h2>
                        <div class="section-title-underline-blue"></div>
                        <hr class="section-title-underline">
                        <p class="small">Proin Gravidani</p>
                    </div>
                </div>
                <div class="row margin-bottom-30">
                    <div class="col-lg-12">
                        <ul id="filters" class="folio-filters">
                            <li class="current"><a href="#" data-filter="*">All</a></li>
                            <li class=""><a href="#" data-filter=".design">Design</a></li>
                            <li class=""><a href="#" data-filter=".web">Web</a></li>
                            <li class=""><a href="#" data-filter=".branding">Branding</a></li>
                            <li class=""><a href="#" data-filter=".print">Print</a></li>
                        </ul>
                    </div>
                </div>
                <div id="folio-container" class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item design">
                        <img src="img/18.jpg" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item design">
                        <img src="img/19.jpg" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item design">
                        <img src="img/20.jpg" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item design">
                        <img src="img/21.jpg" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item web">
                        <img src="img/22.jpg" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item web">
                        <img src="img/23.jpg" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item web">
                        <img src="img/24.jpg" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item branding">
                        <img src="img/25.jpg" alt="Image" class="img-thumbnail">
                        </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item branding">
                        <img src="img/26.jpg" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item branding">
                        <img src="img/27.jpg" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item print">
                        <img src="img/28.jpg" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item print">
                        <img src="img/29.jpg" alt="Image" class="img-thumbnail">
                    </div>
                </div>
            </div>
        </section>
    
        <!-- JS -->
        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
        <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>      <!-- Isotope, http://isotope.metafizzy.co -->
        <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
        <script>
            // All images are loaded. Call isotope
            $(window).load(function() {
                 var $container = $('#folio-container');
                // init
                $container.isotope({
                // options
                itemSelector: '.folio-item',
                animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    },
                });

                // filter items when filter link is clicked
                jQuery('#filters a').click(function(){
                    var selector = $(this).attr('data-filter');
                    $container.isotope({ filter: selector });
                    return false;
                });

                jQuery('#filters li a').click(function(){

                    jQuery('#filters li').removeClass('current');
                    jQuery(this).parent().addClass('current');
                });
            });
        </script>
   
@endsection        