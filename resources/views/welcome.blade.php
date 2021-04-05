<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Movrev - Movie Review for all genre</title>
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

    <body>
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand">Movie Review</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="{{route('welcome')}}" class="nav-item nav-link active">Home</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Category</a>
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

        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/knives-out.png" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Knives Out</h1>
                            <p>
                            Knives Out is a 2019 American mystery film written and directed by Rian Johnson, and produced by Johnson and Ram Bergman. It follows a master detective investigating the death of the patriarch of a wealthy, dysfunctional family.
                            </p>
                            <div class="carousel-btn">
                                <a class="btn btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/qOg3AoRc4nI" data-target="#videoModal"><i class="fa fa-play"></i>Watch Trailer</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/the-gifted.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>The Gifted</h1>
                            <p>
                            Pawaret "Pang" Sermrittirong (Korapat Kirdpan) is a struggling, ordinary 10th grade student in Ritdha High School. Here, a classification system is strictly implemented wherein students are divided into classes based on academic excellence. Pang is in Class VIII, the lowest level, and has no hopes of rising up the hierarchy.
                            </p>
                            <div class="carousel-btn">
                                <a class="btn btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/1c3FJXZBmIk" data-target="#videoModal"><i class="fa fa-play"></i>Watch Trailer</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/start-up.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Start Up</h1>
                            <p>
                            Set in South Korea's fictional Silicon Valley called Sandbox, Start-Up tells the story of people in the world of startup companies.
                            Seo Dal-mi (Bae Suzy) is a bright and ambitious young woman who dreams of becoming Korea’s Steve Jobs. Dal-mi doesn’t have a fancy background but she’s passionate about her work. She has bright energy and is a person of great vitality, having experience in a wide range of part-time jobs.
                            </p>
                            <div class="carousel-btn">
                                <a class="btn btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/BemKyzbLDDc" data-target="#videoModal"><i class="fa fa-play"></i>Watch Trailer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Video Modal Start-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Video Modal End -->

        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header">
                    <h2>Latest Movie Review</h2>
                </div>
                <div class="owl-carousel blog-carousel">
                @foreach($articles as $a)
                    <div class="blog-item">
                        <div class="blog-img">
                            <img style="width: 100%;height: 20vw;object-fit: cover;" src="<?php echo asset("uploads/banner/$a->banner")?>" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h2 class="blog-title">{{$a->title}}</h2>
                            <div class="blog-meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="{{route('cdetail',  $a->category->slug)}}">{{$a->category->name}}</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p><?php echo $a->created_at->format('l, j F Y')?></p>
                            </div>
                            <div class="blog-text">
                                <p>
                                {{str_limit($a->content, 100 ," ...")}}
                                </p>
                                <a class="btn" href="{{ route('detail', [$a->category->slug, $a->slug])}}">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Blog End -->

        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header">
                    <p>Get In Touch</p>
                    <h2>Get In Touch For Any Query</h2>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Our Head Office</h3>
                                <p>123 Street, New York, USA</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Call for Help</h3>
                                <p>+012 345 6789</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Email for Information</h3>
                                <p>info@example.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                <div class="control-group">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


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