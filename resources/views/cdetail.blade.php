<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Confer - Consulting Website Template Free Download</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Consulting Website Template Free Download" name="keywords">
        <meta content="Consulting Website Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('lib/animate/animate.min.css" rel="stylesheet')}}">
        <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    </head>

    <body class="page">
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand">Movie Review</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="{{route('welcome')}}" class="nav-item nav-link">Home</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Category</a>
                            <div class="dropdown-menu">
                            <?php $i=0 ?>
                                @foreach($cat as $c)
                                <a href="{{route('cdetail',  $cat[$i]['slug'])}}" class="dropdown-item">{{$cat[$i]["name"]}}</a>
                                <?php $i++ ?>
                                @endforeach
                            </div>
                        </div>
                        @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}" class="nav-item nav-link">Profile</a>
                                @else
                                <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="nav-item nav-link" >Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
        
        
        <!-- Blog Start -->
        <div class="blog blog-page mt-125">
            <div class="container">
                <div class="section-header">
                    <p>All reviews from category</p>
                    <h2>{{$category[0]["name"]}}</h2>
                </div>
                <div class="row">
				    <?php $i=0 ?>
                    @foreach($categories as $category)
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img style="width: 100%;height: 20vw;object-fit: cover;" src="<?php echo asset("uploads/banner/".$categories[$i]["banner"])?>" alt="Blog">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">{{$categories[$i]["title"]}}</h2>
                                <div class="blog-meta">
                                    <i class="fa fa-list-alt"></i>
                                    <a href="">{{$categories[$i]["category"]["name"]}}</a>
                                    <i class="fa fa-calendar-alt"></i>
                                    <p>{{$categories[$i]["created_at"]->format('l, j F Y')}}</p>
                                </div>
                                <div class="blog-text">
                                    <p>
                                    {{str_limit($categories[$i]["content"], 100 ," ...")}}    
                                    </p>
                                    <a class="btn" href="{{ route('detail', [$categories[$i]['category']['slug'], $categories[$i]['slug']]) }}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++ ?>
                    @endforeach
				</div>	
            </div>
        </div>
		
        <!-- Blog End -->


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-contact">
                                    <h2>Our Head Office</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>123 Street, New York, USA</p>
                                    <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                                    <p><i class="fa fa-envelope"></i>info@example.com</p>
                                    <div class="footer-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-youtube"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-link">
                                    <h2>Quick Links</h2>
                                    <a href="">Terms of use</a>
                                    <a href="">Privacy policy</a>
                                    <a href="">Cookies</a>
                                    <a href="">Help</a>
                                    <a href="">FQAs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="footer-newsletter">
                            <h2>Newsletter</h2>
                            <p>
                                Lorem ipsum dolor sit amet elit. Quisque eu lectus a leo dictum nec non quam. Tortor eu placerat rhoncus, lorem quam iaculis felis, sed lacus neque id eros.
                            </p>
                            <div class="form">
                                <input class="form-control" placeholder="Email goes here">
                                <button class="btn">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="#">Your Site Name</a>, All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('lib/easing/easing.min.js')}}"></script>
        <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{ asset('lib/counterup/counterup.min.js')}}"></script>
        
        <!-- Contact Javascript File -->
        <script src="{{ asset('mail/jqBootstrapValidation.min.js')}}"></script>
        <script src="{{ asset('mail/contact.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('js/main.js')}}"></script>
    </body>
</html>
