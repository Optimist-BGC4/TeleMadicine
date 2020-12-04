<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('font/css/style.css')}}">
    <title>OXY Theme</title>
</head>
<body>
<!--MARKUP FOR HEADER-->
<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container">
        <h3><a href="{{asset('font/index.html')}}" class="navbar-brand"><img src="{{asset('font/images/logo-8.png')}}" class="img-fluid" alt="Logo"style="width: 140px;"></a></h3>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="menu" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto hoverColor">
                <li class="nav-item active text-primary"><a href="index.html" class="nav-link text-dark font-weight-bold">HOME</a></li>
                <li class="nav-item text-primary"><a href="aboutUs.html" class="nav-link text-dark font-weight-bold">ABOUT</a> </li>
                <li class="nav-item text-primary"><a href="contractUs.html" class="nav-link text-dark font-weight-bold">CONTRACT</a> </li>
                <li class="nav-item text-primary"><a href="portfolio.html" class="nav-link text-dark font-weight-bold">APPOINTMENT</a> </li>
                <li class="nav-item text-primary"><a href="termsPrivacy.html" class="nav-link text-dark font-weight-bold">TERMS &AMP; POLICY</a> </li>
                <li class="nav-item text-primary"><a href="" class="nav-link text-dark font-weight-bold">LOG IN</a></li>
            </ul>
        </div>
    </div>
</nav>
</header>

<!--Carousel section-->
<section class="mt-5">
    <div class="container-fluid">
        <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" data-intervel="">
                    <img src="{{asset('font/images/slider111.jpg')}}" class="d-block w-100 img-fluid" alt="Carousel Image">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="display-4 font-weight-bold text-dark">BEST <span class="text-success">CONSULTANCY</span> IS HERE</h1>
                        <a class="btn btn-success btn-lg" href="#" role="button">Take an Appointment</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('font/images/slider222.jpg')}}" class="d-block w-100 img-fluid" alt="Carousel Image">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="display-4 font-weight-bold text-dark">BEST <span class="text-success">CONSULTANCY</span> IS HERE</h1>
                        <a class="btn btn-success btn-lg" href="#" role="button">Take an Appointment</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('font/images/slider333.jpg')}}" class="d-block w-100 img-fluid" alt="Carousel Image">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="display-4 font-weight-bold text-dark">BEST <span class="text-success">CONSULTANCY</span> IS HERE</h1>
                        <a class="btn btn-success btn-lg" href="#" role="button">Take an Appointment</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('font/images/slider444.jpg')}}" class="d-block w-100 img-fluid" alt="Carousel Image">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="display-4 font-weight-bold text-dark">BEST <span class="text-success">CONSULTANCY</span> IS HERE</h1>
                        <a class="btn btn-success btn-lg" href="#" role="button">Take an Appointment</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="{{asset('font/#myCarousel')}}" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="{{asset('font/#myCarousel')}}" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<!--Our services Section-->
<section id="ourServices" class="bg-white mt-5 pb-5">
    <div class="container">
        <div class="text-center">
            <h2> OUR SERVICES</h2>
            <p> Business consectetur adipisicing elit eiusmod tempor incididunt ut labore et dolore magna<br>
                aliqua quis nostrud exercitation consequat.</p>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="row">
                        <div class="col-sm-3">
                            <p><i class="fas fa-pencil-ruler fa-3x text-success p-lg-4"></i></p>
                        </div>
                        <div class="col-sm-9">
                            <div class="card-title">
                                <h5>Contant Marketing</h5>
                            </div>
                            <div class="card-body mt-n4">
                                <p>We help you to grow up your business and solution for your impressive projects.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="row">
                        <div class="col-sm-3">
                            <p><i class="fas fa-parachute-box fa-3x text-success p-lg-4"></i></p>
                        </div>
                        <div class="col-sm-9">
                            <div class="card-title">
                                <h5>Finance Analysis</h5>
                            </div>
                            <div class="card-body mt-n4">
                                <p>We help you to grow up your business and solution for your impressive projects.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="row">
                        <div class="col-sm-3">
                            <p><i class="fas fa-mobile-alt fa-3x text-success p-lg-4"></i></p>
                        </div>
                        <div class="col-sm-9">
                            <div class="card-title">
                                <h5>Detail Report</h5>
                            </div>
                            <div class="card-body mt-n4">
                                <p>We help you to grow up your business and solution for your impressive projects.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-lg-4">
            <div class="col-sm-4">
                <div class="card">
                    <div class="row">
                        <div class="col-sm-3">
                            <p><i class="fas fa-database fa-3x text-success p-lg-4"></i></p>
                        </div>
                        <div class="col-sm-9">
                            <div class="card-title">
                                <h5>Investment Plan</h5>
                            </div>
                            <div class="card-body mt-n4">
                                <p>We help you to grow up your business and solution for your impressive projects.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="row">
                        <div class="col-sm-3">
                            <p><i class="fas fa-chart-line fa-3x text-success p-lg-4"></i></p>
                        </div>
                        <div class="col-sm-9">
                            <div class="card-title">
                                <h5>Media Marketing</h5>
                            </div>
                            <div class="card-body mt-n4">
                                <p>We help you to grow up your business and solution for your impressive projects.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="row">
                        <div class="col-sm-3">
                            <p><i class="fas fa-hand-holding-usd fa-3x text-success p-lg-4"></i></p>
                        </div>
                        <div class="col-sm-9">
                            <div class="card-title">
                                <h5>Finance Analysis</h5>
                            </div>
                            <div class="card-body mt-n4">
                                <p>We help you to grow up your business and solution for your impressive projects.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Feedback section-->
<section id="feedback">
    <div class="container-fluid text-white">
        <div class="row text-center" style="padding-top: 5rem;">
            <div class="col-4">
                <h5 class="font-weight-bold mb-3" style="font-size: 35px;"> 1530+</h5>
                <p class="font-weight-bold" style="font-size: 22px;">Happy Clients</p>
            </div>
            <div class="col-4">
                <h5 class="font-weight-bold mb-3" style="font-size: 35px;">1010+</h5>
                <p class="font-weight-bold mt-2" style="font-size: 22px;">Projects Finished</p>
            </div>
            <div class="col-4">
                <h5 class="font-weight-bold mb-3" style="font-size: 35px;">590+</h5>
                <p class="font-weight-bold mt-2" style="font-size: 22px;">Award Winner</p>
            </div>
        </div>
    </div>
</section>

<!--Features Section-->
<section id="features" class="bg-light pb-5 pt-5 mt-5">
    <div class="container">
        <div class="row lead pb-sm-5 pt-sm-5">
            <div class="col-sm-5">
                <img src="images/feature-01.jpg" class="img-fluid" alt="Image">
            </div>
            <div class="col-sm-7">
                <h2>Febrex is the most creative template for your multipurpose use.</h2>
                <p>Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
                    sit voluptatem accusantium laudantium, totam aperiam, eaque ab illo inventore veritatis et quasi
                    architecto beatae vitae dicta sunt explicabo.</p>
                <ul type="circle">
                    <li>Marketing business plan</li>
                    <li>Advice business plan</li>
                    <li>Strategic business plan</li>
                    <li> Analize business plan</li>
                    <li>Consulting business plan</li>
                </ul>
                <button type="button" class="btn-success">Read more</button>
            </div>
        </div>
    </div>
</section>
<!--Our Expert Mind section-->
<section id="ourExpert" class="mt-5">
    <div class="container">
        <div class="text-center">
            <h3 class="mb-sm-2">OUR CONSULTANT</h3>
            <p>Business consectetur adipisicing elit eiusmod tempor incididunt ut labore et dolore magna aliqua quis<br>
                nostrud exercitation consequat.</p>
        </div>
        <div class="row mt-sm-4">
            <div class="col-sm-3"><div class="card">
                <img src="images/founder.jpg" class="card-img-top" alt="Founder Image">
                <div class="card-body text-center">
                    <h5 class="card-title">JAMARA KARLE</h5>
                    <p class="card-text">Founder</p>
                    <hr>
                    <p><a href="https://web.facebook.com"><i class="fab fa-facebook-square fa-2x text-secondary ml-2"></i></a>
                        <a href="https://web.facebook.com"><i class="fab fa-twitter-square fa-2x text-secondary ml-2"></i></a>
                        <a href="https://web.facebook.com"><i class="fab fa-youtube fa-2x text-secondary ml-2"></i></a>
                        <a href="https://web.facebook.com"><i class="fab fa-google-plus-g fa-2x text-secondary ml-2"></i></a>
                        <a href="https://web.facebook.com"><i class="fab fa-linkedin fa-2x text-secondary"></i></a></p>
                </div>
            </div></div>
            <div class="col-sm-3"><div class="card">
                <img src="images/cofounder.jpg" class="card-img-top" alt="CoFounder Image">
                <div class="card-body text-center">
                    <h5 class="card-title">KEIR PRESTONLY</h5>
                    <p class="card-text">CO-FOUNDER</p>
                    <hr>
                    <p><a href="https://web.facebook.com"><i class="fab fa-facebook-square fa-2x text-secondary ml-2"></i></a>
                        <a href="https://web.facebook.com"><i class="fab fa-twitter-square fa-2x text-secondary ml-2"></i></a>
                        <a href="https://web.facebook.com"><i class="fab fa-youtube fa-2x text-secondary ml-2"></i></a>
                        <a href="https://web.facebook.com"><i class="fab fa-google-plus-g fa-2x text-secondary ml-2"></i></a>
                        <a href="https://web.facebook.com"><i class="fab fa-linkedin fa-2x text-secondary"></i></a></p>
                </div>
            </div></div>
            <div class="col-sm-3"><div class="card">
                <img src="images/developer.jpg" class="card-img-top" alt="developer Image">
                <div class="card-body text-center">
                    <h5 class="card-title">FINLEY WALKEROR</h5>
                    <p class="card-text">DEVELOPER</p>
                    <hr>
                    <p><a href="https://web.facebook.com"><i class="fab fa-facebook-square fa-2x text-secondary ml-2"></i></a>
                        <a href="https://web.facebook.com"><i class="fab fa-twitter-square fa-2x text-secondary ml-2"></i></a>
                        <a href="https://web.facebook.com"><i class="fab fa-youtube fa-2x text-secondary ml-2"></i></a>
                        <a href="https://web.facebook.com"><i class="fab fa-google-plus-g fa-2x text-secondary ml-2"></i></a>
                        <a href="https://web.facebook.com"><i class="fab fa-linkedin fa-2x text-secondary"></i></a></p>
                </div>
            </div></div>
            <div class="col-sm-3"><div class="card">
                <img src="images/designer.jpg" class="card-img-top" alt="Designer Image">
                <div class="card-body text-center">
                    <h5 class="card-title">NIAMAH HOWER</h5>
                    <p class="card-text">DESIGNER</p>
                    <hr>
                    <p><a href="https://web.facebook.com"><i class="fab fa-facebook-square fa-2x text-secondary ml-2"></i></a>
                        <a href="https://web.facebook.com"><i class="fab fa-twitter-square fa-2x text-secondary ml-2"></i></a>
                        <a href="https://web.facebook.com"><i class="fab fa-youtube fa-2x text-secondary ml-2"></i></a>
                        <a href="https://web.facebook.com"><i class="fab fa-google-plus-g fa-2x text-secondary ml-2"></i></a>
                        <a href="https://web.facebook.com"><i class="fab fa-linkedin fa-2x text-secondary"></i></a></p>
                </div>
            </div>
            </div>
        </div>
        </div>
</section>


<!--FOOTER SECTION-->
<footer class="mt-sm-5">
    <!--Markup For Logos-->
    
    <!--MARKUP FOR FOOTER-->
    <div class="container pt-5">
       <div class="row">
           <div class="col-sm-3 text-white">
               <h3><a href="index.html" class="navbar-brand"><img src="images/logo-8.png" class="img-fluid" alt="Logo"></a></h3>
               <p class="text-white">Nemo enim enim voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                   magni dolores eos qui ratione voluptatem.</p>
               <p><a href="https://web.facebook.com"><i class="fab fa-facebook-square fa-2x text-secondary ml-2"></i></a>
                   <a href="https://web.facebook.com"><i class="fab fa-twitter-square fa-2x text-secondary ml-2"></i></a>
                   <a href="https://web.facebook.com"><i class="fab fa-youtube fa-2x text-secondary ml-2"></i></a>
                   <a href="https://web.facebook.com"><i class="fab fa-google-plus-g fa-2x text-secondary ml-2"></i></a>
                   <a href="https://web.facebook.com"><i class="fab fa-linkedin fa-2x text-secondary"></i></a></p>
           </div>
           <div class="col-sm-3">
               <h4 class="text-white border-bottom border-success mb-sm-2 pb-sm-1">Quick Links</h4>
               <ul>
                   <li class="mb-sm-4"><a href="#" class="text-white-50">Financial Planning</a></li>
                   <li class="mb-sm-4"><a href="#" class="text-white-50">Software & Research</a></li>
                   <li class="mb-sm-4"><a href="#" class="text-white-50"> Market Research</a></li>
                   <li class="mb-sm-4"><a href="#" class="text-white-50">Sales Services</a></li>
                   <li class="mb-sm-4"><a href="#" class="text-white-50">Healthcare Services</a></li>
                   <li class="mb-sm-4"><a href="#" class="text-white-50">Market Analysis</a></li>
               </ul>
           </div>
           <div class="col-sm-3">
               <h4 class="text-white border-bottom border-success mb-sm-2 pb-sm-1">Recent Posts</h4>
               <div class="row">
                   <div class="col-sm-4">
                       <img src="images/t-1.jpg" alt="Image" class="img-fluid">
                   </div>
                   <div class="col-sm-8">
                       <p><a href="#" class="text-secondary">Your Consultant Business</a><br>
                           <span class="text-white">March 25, 2018</span></p>
                   </div>
               </div>
               <div class="row">
                   <div class="col-sm-4">
                       <img src="images/t-2.jpg" alt="Image" class="img-fluid">
                   </div>
                   <div class="col-sm-8">
                       <p><a href="#" class="text-secondary">Always Look On The Glorious.</a><br>
                           <span class="text-white">Jan 5, 2018</span></p>
                   </div>
               </div>
               <div class="row">
                   <div class="col-sm-4">
                       <img src="images/t-3.jpg" alt="Image" class="img-fluid">
                   </div>
                   <div class="col-sm-8">
                       <p> <a href="#" class="text-secondary">Markets Research Financial.</a> <br>
                           <span class="text-white">Feb 12, 2018</span></p>
                   </div>
               </div>
           </div>
           <div class="col-sm-3">
               <h4 class="text-white border-bottom border-success mb-sm-2 pb-1">Newsletter</h4>
               <p class="text-white">Nemo enim enim voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
           </div>
       </div>
    </div>
    <div class="container-fluid pt-lg-1 pb-lg-1">
        <p class="mt-sm-5 text-center text-white-50">&copy; 2019 Fabrex is Powered by Chitrakoot Web</p>
    </div>
</footer>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="{{asset('font/js/bootstrap.min.js')}}"></script>
<script>
    $('.carousel').carousel({
        interval: 1800
    })
</script>
</body>
</html>