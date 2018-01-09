<!DOCTYPE html>
<html>
<head>
<!-- Head elements-->
@include('partials/_head')
<style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
</head>
<body id="page-top" class="landing-page no-skin-config">
    <div class="navbar-wrapper">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">PSX</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="page-scroll" href="#page-top">Home</a></li>
                            <li><a class="page-scroll" href="#features">Features</a></li>
                            <li><a class="page-scroll" href="#team">Team</a></li>
                            <li><a class="page-scroll" href="#contact">Contact</a></li>
                            <li><a class="page-scroll" href="auth/register">SignUp</a></li>
                            <li><a class="page-scroll" href="auth/login">Login</a></li>

                        </ul>
                    </div>
                </div>
            </nav>
    </div>
    <div id="inSlider" class="carousel carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#inSlider" data-slide-to="0" class="active"></li>
            <li data-target="#inSlider" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Pakistan Stock Exchnage <br/>
                            Real Time<br/>
                            </h1>
                      
                    </div>
                    <!-- <div class="carousel-image wow zoomIn">
                        <img src="img/landing/laptop.png" alt="laptop"/>
                    </div> -->
                </div>
                <!-- Set background for slide in css -->
                <div class="header-back one"></div>

            </div>
            <div class="item">
                <div class="container">
                    <div class="carousel-caption blank">
                        <h1>Pakistan Stock Exchnage <br/>Real Time.</h1>
                    </div>
                </div>
                <!-- Set background for slide in css -->
                <div class="header-back two"></div>
            </div>
        </div>
        <a class="left carousel-control" href="#inSlider" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#inSlider" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    
    <section id="features" class="container services">
        <div class="row">
            <div class="col-sm-3">
                <h2>Full responsive</h2>
                <p>The Website is fully responsive and works on all the screensizes and platforms</p>
            </div>
            <div class="col-sm-3">
                <h2>Real Time Updates</h2>
                <p>Currently in Pakistan there is no website that provides real time updates regarding stock market prices. Our website will implement real time updates without the need of refreshing the page</p>
            </div>
            <div class="col-sm-3">
                <h2>Prediction of Stocks</h2>
                <p>We also want to aid users with market share prediction which might help users to decide which shares they could buy by looking at theirs stats and invest if they feel confident.</p>
            </div>
            <div class="col-sm-3">
                <h2>Customized Portfolio</h2>
                <p>Customized Portfolio feature is also implemented in this project</p>
            </div>
        </div>
    </section>

    <section id="team" class="gray-section team">
        <div class="container">
            <div class="row m-b-lg">
                <div class="col-lg-12 text-center">
                    <div class="navy-line"></div>
                    <h1>Our Team</h1>
            
                </div>
            </div>
            <div class="row">
               <div class="col-sm-3">
                    <div class="team-member wow zoomIn">
                        <img src="img/landing/avatar1.jpg" class="img-responsive img-circle" alt="">
                        <h4><span class="navy">Aqsa</span> Nadeem</h4>
                        <p>Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.</p>
                        <ul class="list-inline social-icon">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member wow zoomIn">
                        <img src="img/landing/avatar1.jpg" class="img-responsive img-circle" alt="">
                        <h4><span class="navy">Abdul</span> Rafay</h4>
                        <p>Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.</p>
                        <ul class="list-inline social-icon">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member wow zoomIn">
                        <img src="img/landing/avatar1.jpg" class="img-responsive img-circle" alt="">
                        <h4><span class="navy">Rafah</span> Mehfooz</h4>
                        <p>Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.</p>
                        <ul class="list-inline social-icon">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="team-member wow zoomIn">
                        <img src="img/landing/avatar1.jpg" class="img-responsive img-circle" alt="">
                        <h4><span class="navy">Maha</span> Taqi</h4>
                        <p>Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.</p>
                        <ul class="list-inline social-icon">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
    </section> 

    <section class="timeline gray-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="navy-line"></div>
                    <h1>Our workflow</h1>
                    
                </div>
            </div>
            <div class="row features-block">

                <div class="col-lg-12">
                    <div id="vertical-timeline" class="vertical-container light-timeline center-orientation">
                        <div class="vertical-timeline-block">
                            <div class="vertical-timeline-icon navy-bg">
                                <i class="fa fa-briefcase"></i>
                            </div>

                            <div class="vertical-timeline-content">
                                <h2>Idea Development</h2>
                                <p>Pakistan Stock Exchange is a website for the share market. No real time updates are implemented on that website and user have to refresh everytime he wants to see the updated data which results in poor user experience. so we came up with the idea of Pakistan Stock Exchange with real time updates.  </p>
                    
                                <span class="vertical-date"> 1st<br/> <small>Nov 2017</small> </span>
                            </div>
                        </div>

                        <div class="vertical-timeline-block">
                            <div class="vertical-timeline-icon navy-bg">
                                <i class="fa fa-briefcase"></i>
                            </div>

                            <div class="vertical-timeline-content">
                                <h2>Front End Deliverable</h2>
                                <p>Front end of our project includes pages like Market Summary, Portfolio, Landing Page, Registration etc. All these pages are designed using HTML,CSS,javascript,Jquery and Bootstrap </p>
                                <span class="vertical-date"> 20th <br/> <small>Dec 2017</small> </span>
                            </div>
                        </div>

                        <div class="vertical-timeline-block">
                            <div class="vertical-timeline-icon navy-bg">
                                <i class="fa fa-briefcase"></i>
                            </div>

                            <div class="vertical-timeline-content">
                                <h2>Back End </h2>
                                <p>Back end is implemented using Laravel framewrok. </p>
                                <span class="vertical-date"> Monday <br/> <small>Jan 02</small> </span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </section>

    <section id="contact" class="gray-section contact">
        <div class="container">
            <div class="row m-b-lg">
                <div class="col-lg-12 text-center">
                    <div class="navy-line"></div>
                    <h1>Contact Us</h1>
                </div>
            </div>
          
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="mailto:test@email.com" class="btn btn-primary">Send us mail</a>
                    <p class="m-t-sm">
                        Or follow us on social platform
                    </p>
                    <ul class="list-inline social-icon">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div id="map" style="margin: 50px"></div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                    <p><strong>&copy; Pakistan Stock Exchnage</strong><br/></p>
                </div>
            </div>
        </div>
    </section>    
<!-- Default Scripts for bottom-->
@include('partials/_bodyscripts')
<script type="text/javascript">
     function initMap() {
        var uluru = {lat: 33.642537, lng: 72.990474};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkKISWA8Q4znUfjs3HmHC--NTVz-Sm5GA&callback=initMap">
    </script> 
<script src="js/plugins/wow/wow.min.js"></script>


<script>

    $(document).ready(function () {

        $('body').scrollspy({
            target: '.navbar-fixed-top',
            offset: 80
        });

        // Page scrolling feature
        $('a.page-scroll').bind('click', function(event) {
            var link = $(this);
            $('html, body').stop().animate({
                scrollTop: $(link.attr('href')).offset().top - 50
            }, 500);
            event.preventDefault();
            $("#navbar").collapse('hide');
        });
    });

    var cbpAnimatedHeader = (function() {
        var docElem = document.documentElement,
                header = document.querySelector( '.navbar-default' ),
                didScroll = false,
                changeHeaderOn = 200;
        function init() {
            window.addEventListener( 'scroll', function( event ) {
                if( !didScroll ) {
                    didScroll = true;
                    setTimeout( scrollPage, 250 );
                }
            }, false );
        }
        function scrollPage() {
            var sy = scrollY();
            if ( sy >= changeHeaderOn ) {
                $(header).addClass('navbar-scroll')
            }
            else {
                $(header).removeClass('navbar-scroll')
            }
            didScroll = false;
        }
        function scrollY() {
            return window.pageYOffset || docElem.scrollTop;
        }
        init();

    })();

    // Activate WOW.js plugin for animation on scrol
    new WOW().init();

</script>
</body>    
</html>