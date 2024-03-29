<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Komiteler</title>
<!--

Template 2086 Multi Color

http://www.tooplate.com/view/2086-multi-color

-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400">  
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="http://localhost/hacettepe_system2/application/views/main_screen/font-awesome-4.5.0/css/font-awesome.min.css">                
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://localhost/hacettepe_system2/application/views/main_screen/css/bootstrap.min.css">                                      
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="http://localhost/hacettepe_system2/application/views/main_screen/css/hero-slider-style.css">                              
    <!-- Hero slider style (http://codyhouse.co/gem/hero-slider/) -->
    <link rel="stylesheet" href="http://localhost/hacettepe_system2/application/views/main_screen/css/magnific-popup.css">                                 
    <!-- Magnific popup style (http://dimsemenov.com/plugins/magnific-popup/) -->
    <link rel="stylesheet" href="http://localhost/hacettepe_system2/application/views/main_screen/css/tooplate-style.css">                                   

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>

    <body>
        
        <!-- Content -->
        <div class="cd-hero">
            <ul class="cd-hero-slider">

                <!-- Page 1 Gallery One -->
                <li class="selected">                    
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="1" data-page-type="gallery">
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-one">
                                <!-- Gallery One pop up connected with JS code below -->                                    
                                    <div class="tm-img-gallery-info-container">                                    
                                        <h2 class="tm-text-title tm-gallery-title tm-white"><span class="tm-white">Dönem 2</span></h2>
                                    </div>
                                    <?php 

                                        foreach($commitees as $commitee){ ?>
                                            <div class="grid-item">
                                                <figure class="effect-bubba">

                                                    <img src="<?php echo $commitee['commitee_picture'] ?>" alt="Image" class="img-fluid tm-img">
                                                    <figcaption>
                                                        <h2 class="tm-figure-title"> <span><strong><?php echo $commitee['commitee_name'] ?></strong></span></h2>
                                                        <p class="tm-figure-description"><?php echo $commitee['commitee_subject'] ?></p>
                                                        <a href="<?php echo site_url('commitee/commitee_page/'.$commitee['commitee_slug']) ?>"></a>
                                                    </figcaption>           
                                                </figure>

                                            </div>
                                   <?php } ?>

                                    
                                    
    
                                                           
                                </div>                                 
                            </div>
                        </div>                                                    
                    </div>                    
                </li>

                <!-- Page 2 Gallery Two -->
                <li>                    
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="2" data-page-type="gallery">
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-two">
                                <!-- Gallery Two pop up connected with JS code below -->
                                    
                                    </div>
                            </div>
                        </div>                      
                    </div>
                </li>

                <!-- Page 3 Gallery Three -->
                <li>
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="3" data-page-type="gallery">                        
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-three">
                                <!-- Gallery Two pop up connected with JS code below -->
                                </div>                                 
                            </div> <!-- .tm-img-gallery-container -->
                        </div>         
                    </div>  
                </li>

               
            </ul> <!-- .cd-hero-slider -->
            
            <footer class="tm-footer">   
            </footer>
                    
        </div> <!-- .cd-hero -->
        

        <!-- Preloader, http://ihatetomatoes.net/create-custom-preloading-screen/ -->
        <div id="loader-wrapper">
            
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

        </div>
        
        <!-- load JS files -->
        <script src="http://localhost/hacettepe_system2/application/views/main_screen/js/jquery-1.11.3.min.js"></script>         <!-- jQuery (http://jquery.com/download/) -->
        <!-- Tether for Bootstrap (http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h) --> 
                   <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
               <!-- Hero slider (http://codyhouse.co/gem/hero-slider/) -->
        <script src="http://localhost/hacettepe_system2/application/views/main_screen/js/jquery.magnific-popup.min.js"></script> <!-- Magnific popup (http://dimsemenov.com/plugins/magnific-popup/) -->
        
        <script>

            function adjustHeightOfPage(pageNo) {

                var offset = 80;
                var pageContentHeight = 0;

                var pageType = $('div[data-page-no="' + pageNo + '"]').data("page-type");

                if( pageType != undefined && pageType == "gallery") {
                    pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .tm-img-gallery-container").height();
                }
                else {
                    pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .js-tm-page-content").height() + 20;
                }

                if($(window).width() >= 992) { offset = 120; }
                else if($(window).width() < 480) { offset = 40; }
               
                // Get the page height
                var totalPageHeight = $('.cd-slider-nav').height()
                                        + pageContentHeight + offset
                                        + $('.tm-footer').height();

                // Adjust layout based on page height and window height
                if(totalPageHeight > $(window).height()) 
                {
                    $('.cd-hero-slider').addClass('small-screen');
                    $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", totalPageHeight + "px");
                }
                else 
                {
                    $('.cd-hero-slider').removeClass('small-screen');
                    $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", "100%");
                }
            }

            /*
                Everything is loaded including images.
            */
            $(window).load(function(){

                adjustHeightOfPage(1); // Adjust page height

                /* Gallery One pop up
                -----------------------------------------*/
                
                
                /* Gallery Two pop up
                -----------------------------------------*/
                
                /* Gallery Three pop up
                -----------------------------------------*/
            
                /* Collapse menu after click 
                -----------------------------------------*/
             

               
                });
        
                // Remove preloader (http://ihatetomatoes.net/create-custom-preloading-screen/)
                $('body').addClass('loaded');
                           

            /* Google map
            ------------------------------------------------*/
            var map = '';
            var center;

            function initialize() {
                var mapOptions = {
                    zoom: 14,
                    center: new google.maps.LatLng(37.769725, -122.462154),
                    scrollwheel: false
                };
            
                map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

                google.maps.event.addDomListener(map, 'idle', function() {
                  calculateCenter();
                });
            
                google.maps.event.addDomListener(window, 'resize', function() {
                  map.setCenter(center);
                });
            }

            function calculateCenter() {
                center = map.getCenter();
            }

            function loadGoogleMap(){
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.src = 'http://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
                document.body.appendChild(script);
            }
        
            // DOM is ready
            $(function() {                
                loadGoogleMap(); // Google Map
            });

        </script>            

</body>
</html>