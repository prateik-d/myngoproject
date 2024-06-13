
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Empowering Social Welfare</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Empowering Social Welfare" name="keywords">
        <meta content="To provide world class solutions to the Sporting, healthcare, educational, environmental issues of the individuals and institutions" name="description">
        <meta property="og:image" content="{{ asset('public/img/logo.png') }}"/>
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />

        <!-- Favicon -->
        <link href="{{ asset('favicon.ico') }}" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/flaticon/font/flaticon.css') }}" rel="stylesheet"> 
        <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">


        <!-- Template Stylesheet -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>

    <body>
       
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="/" class="navbar-brand">
                    <!-- Y<span>oo</span>ga -->
                    <img src="{{ asset('img/logo.png') }}" alt="logo" />
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#service" class="nav-item nav-link">Service</a>
                        <a href="#csr" class="nav-item nav-link">CSR</a>
                        <a href="#offers" class="nav-item nav-link">Offering</a>
                        <a href="#team" class="nav-item nav-link">Team</a>
                        <a href="#contactForm" class="nav-item nav-link">Contact</a>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Hero Start -->
        <div class="hero">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-6">
                        <div class="hero-text">
                            <h1>Empowering Social Welfare</h1>
                            <p>
                                Uplifting socio economic structure via Sports, Environment and Educational revolution.
                            </p>
                            <!-- <div class="hero-btn">
                                <a class="btn" href="">Join Now</a>
                                <a class="btn" href="">Contact Us</a>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 d-none d-md-block">
                        <div class="hero-image">
                            <img src="{{ asset('img/web/header.png') }}" alt="Hero Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- About Start -->
        <div class="about wow fadeInUp" id='about' data-wow-delay="0.1s">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="{{ asset('img/web/about.png') }}" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="section-header text-left">
                            <p>Learn About Us</p>
                            <h2>Welcome</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                Traditionally, as an underdeveloped economy, India never fully realized its potential in sports, environment, and education. 
                            </p>
                            <p>
                                However, with the remarkable recent economic growth, a former third world country like India is making strides in all three sectors. 
                            </p>
                            <p>

                                Empowering Social Welfare is dedicated to transforming people's life via sporting, environmental, and academic revolution. 
                            </p>
                            <p>
                                Our vision is to revive the golden era of an Indian ancient universities, martial arts, sports, environmental consciousness, and lifestyle."
                            </p>
                            <!-- <a class="btn" href="">Learn More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="service" id='service'>
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>What we do</p>
                    <!-- <h2>Yoga For Health</h2> -->
                    <h2>We Provides You</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="service-item">
                            <div class="service-icon">
                                <!--<i class="flaticon-workout"></i>-->
                                <img src="{{ asset('img/icon/icons8-karate-64.png') }}" />
                            </div>
                            <h3>Self Defence Program</h3>
                            <p>
                                Skill India & Sports ministry affiliated certificate program for 'Skill Development in Self Defence'.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item active">
                            <div class="service-icon">
                                <!--<i class="flaticon-workout-1"></i>-->
                                <img src="{{ asset('img/icon/icons8-jiu-jitsu-64.png') }}" />
                                
                            </div>
                            <h3>Sports Trainer Provision</h3>
                            <p>
                                We Provide all sports trainers doorstep services for all your B2B and B2C requirements.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-icon">
                                <!--<i class="flaticon-workout-2"></i>-->
                                <img src="{{ asset('img/icon/icons8-olympic-rings-80.png') }}" />
                                
                            </div>
                            <h3>Mission 100 Olympic Golds</h3>
                            <p>
                                Commiting Creating top-notch international level atheletes.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item active">
                            <div class="service-icon">
                                <!--<i class="flaticon-workout-3"></i>-->
                                <img src="{{ asset('img/icon/icons8-environments-64.png') }}" />
                                
                            </div>
                            <h3>Environmental Betterment</h3>
                            <p>
                                Assisting Government and local bodies in their efforts to sutain environmental structure considering the rise of global warming.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="service-item">
                            <div class="service-icon">
                                <!--<i class="flaticon-workout-4"></i>-->
                                <img src="{{ asset('img/icon/icons8-education-80.png') }}" />
                            </div>
                            <h3>Educational Revolutional</h3>
                            <p>
                                Creating Educational revolution by organising competitive yet interesting educational student engaging activities.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1s">
                        <div class="service-item active">
                            <div class="service-icon">
                                <!--<i class="flaticon-yoga-pose"></i>-->
                                <img src="{{ asset('img/icon/icons8-women-wrestling-48.png') }}" />
                            </div>
                            <h3>Crash Course Program in Self Defence</h3>
                            <p>
                                Learn fundamentals of Self Defence in shorter span.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Class Start -->
        <div class="class" id='class'>
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>Things We Offer</p>
                    <h2>Skills Development in self defence certificate</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!--<ul id="class-filter">-->
                        <!--    <li data-filter="*" class="filter-active">All Classes</li>-->
                        <!--    <li data-filter=".filter-1">Pilates Yoga</li>-->
                        <!--    <li data-filter=".filter-2">Hatha Yoga</li>-->
                        <!--    <li data-filter=".filter-3">Vinyasa yoga</li>-->
                        <!--</ul>-->
                    </div>
                </div>
                <div class="row class-container">
                    <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="class-wrap">
                            <div class="class-img">
                                <img src="{{ asset('img/class/boxing.jpeg') }}" alt="Image">
                            </div>
                            <div class="class-text">
                                <!--<div class="class-teacher">-->
                                <!--    <img src="teacher-1.png" alt="Image">-->
                                <!--    <h3>Elise Moran</h3>-->
                                <!--    <a href="">+</a>-->
                                <!--</div>-->
                                <h2>Boxing</h2>
                                <!--<div class="class-meta">-->
                                <!--    <p><i class="far fa-calendar-alt"></i>Sun, Tue, Thu</p>-->
                                <!--    <p><i class="far fa-clock"></i>9:00 - 10:00</p>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-2 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="class-wrap">
                            <div class="class-img">
                                <img src="{{ asset('img/class/muay-thai.png') }}" alt="Image">
                                
                            </div>
                            <div class="class-text">
                                <!--<div class="class-teacher">-->
                                <!--    <img src="teacher-2.png" alt="Image">-->
                                <!--    <h3>Kate Glover</h3>-->
                                <!--    <a href="">+</a>-->
                                <!--</div>-->
                                <h2>Muay-Thai</h2>
                                <!--<div class="class-meta">-->
                                <!--    <p><i class="far fa-calendar-alt"></i>Sun, Tue, Thu</p>-->
                                <!--    <p><i class="far fa-clock"></i>9:00 - 10:00</p>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="class-wrap">
                            <div class="class-img">
                                <img src="{{ asset('img/class/wrestling.png') }}" alt="Image">
                            </div>
                            <div class="class-text">
                                <!--<div class="class-teacher">-->
                                <!--    <img src="teacher-3.png" alt="Image">-->
                                <!--    <h3>Elina Ekman</h3>-->
                                <!--    <a href="">+</a>-->
                                <!--</div>-->
                                <h2>Wrestling</h2>
                                <!--<div class="class-meta">-->
                                <!--    <p><i class="far fa-calendar-alt"></i>Sun, Tue, Thu</p>-->
                                <!--    <p><i class="far fa-clock"></i>9:00 - 10:00</p>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-1 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="class-wrap">
                            <div class="class-img">
                                <img src="{{ asset('img/class/bjj.png') }}" alt="Image">
                            </div>
                            <div class="class-text">
                                <!--<div class="class-teacher">-->
                                <!--    <img src="teacher-4.png" alt="Image">-->
                                <!--    <h3>Lilly Fry</h3>-->
                                <!--    <a href="">+</a>-->
                                <!--</div>-->
                                <h2>Brazilian Jiu Jitsu</h2>
                                <!--<div class="class-meta">-->
                                <!--    <p><i class="far fa-calendar-alt"></i>Sun, Tue, Thu</p>-->
                                <!--    <p><i class="far fa-clock"></i>9:00 - 10:00</p>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-2 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="class-wrap">
                            <div class="class-img">
                                <img src="{{ asset('img/class/combinations.png') }}" alt="Image">
                            </div>
                            <div class="class-text">
                                <!--<div class="class-teacher">-->
                                <!--    <img src="teacher-5.png" alt="Image">-->
                                <!--    <h3>Olivia Yates</h3>-->
                                <!--    <a href="">+</a>-->
                                <!--</div>-->
                                <h2>Combinations</h2>
                                <!--<div class="class-meta">-->
                                <!--    <p><i class="far fa-calendar-alt"></i>Sun, Tue, Thu</p>-->
                                <!--    <p><i class="far fa-clock"></i>9:00 - 10:00</p>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-3 wow fadeInUp" data-wow-delay="1s">
                        <div class="class-wrap">
                            <div class="class-img">
                                <img src="{{ asset('img/class/sparring.png') }}" alt="Image">
                            </div>
                            <div class="class-text">
                                <!--<div class="class-teacher">-->
                                <!--    <img src="teacher-6.png" alt="Image">-->
                                <!--    <h3>Millie Harper</h3>-->
                                <!--    <a href="">+</a>-->
                                <!--</div>-->
                                <h2>Sparring</h2>
                                <!--<div class="class-meta">-->
                                <!--    <p><i class="far fa-calendar-alt"></i>Sun, Tue, Thu</p>-->
                                <!--    <p><i class="far fa-clock"></i>9:00 - 10:00</p>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Class End -->
        
        
        <!-- Discount Start -->
        <div class="discount wow zoomIn" id='csr' data-wow-delay="0.1s">
            <div class="container">
                <div class="section-header text-center">
                    <p>CSR Opportunity</p>
                    <h2>We welcome all CSR funds</h2>
                </div>
                <div class="container discount-text">
                    <p>
                        As a leading force in the corporate world, your commitment to corporate social responsibility (CSR) has undoubtedly made a significant difference in various communities. Today, we're reaching out to present an exciting opportunity for your esteemed organization to further amplify its social impact.
                    </p>
                    <p>
                        Empowering Social Welfare is a dedicated NGO with a proven track record of executing impactful welfare programs over the past five years. Our initiatives have touched the lives of countless individuals, empowering communities and fostering positive change across various sectors.
                    </p>
                    
                </div>
            </div>
        </div>
        <!-- Discount End -->
        
        
        <!-- Price Start -->
        <div class="price" id='offers'>
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>Our Sports Offering</p>
                    <h2>Welfare through Sports</h2>
                </div>
                <div class="row">
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="price-item">
                            <div class="price-header">
                                <div class="price-title">
                                    <h2>Self Defence Crash Course</h2>
                                </div>
                                <div class="price-prices">
                                    <!-- <h2><small>$</small>49<span>/ mo</span></h2> -->
                                </div>
                            </div>
                            <div class="price-body">
                                <div class="price-description">
                                    <ul>
                                        <li>Personal Trainer</li>
                                        <li>Training in school/college</li>
                                        <li>Corporate Training</li>
                                        <li>Training in Getted Societies</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-footer">
                                <div class="price-action">
                                    <a class="btn" href="#contactForm">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <div class="price-status">
                                    <span>Popular</span>
                                </div>
                                <div class="price-title">
                                    <h2>Self Defence Certificate Program</h2>
                                </div>
                                <div class="price-prices">
                                    <!-- <h2><small>$</small>99<span>/ mo</span></h2> -->
                                </div>
                            </div>
                            <div class="price-body">
                                <div class="price-description">
                                    <ul>
                                        <li>Personal Trainer</li>
                                        <li>Training in school/college</li>
                                        <li>Corporate Training</li>
                                        <li>Training in Getted Societies</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-footer">
                                <div class="price-action">
                                    <a class="btn" href="#contactForm">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="price-item">
                            <div class="price-header">
                                <div class="price-title">
                                    <h2>All Sports Trainer Provision</h2>
                                </div>
                                <div class="price-prices">
                                    <!-- <h2><small>$</small>149<span>/ mo</span></h2> -->
                                </div>
                            </div>
                            <div class="price-body">
                                <div class="price-description">
                                    <ul>
                                        <li>Personal Trainer</li>
                                        <li>Training in school/college</li>
                                        <li>Corporate Training</li>
                                        <li>Training in Getted Societies</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-footer">
                                <div class="price-action">
                                    <a class="btn" href="#contactForm">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Price End -->
        
        
        <!-- Team Start -->
        <div class="team" id='team'>
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <!--<p>Our Team</p>-->
                    <h2>Our Team</h2>
                </div>
                <div class="row">
                    <div class="col-lg-1"> </div>
                    <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('img/team/yogesh.jpg') }}" alt="Image">
                                <!--<div class="team-social">-->
                                <!--    <a href=""><i class="fab fa-twitter"></i></a>-->
                                <!--    <a href=""><i class="fab fa-facebook-f"></i></a>-->
                                <!--    <a href=""><i class="fab fa-linkedin-in"></i></a>-->
                                <!--    <a href=""><i class="fab fa-instagram"></i></a>-->
                                <!--</div>-->
                            </div>
                            <div class="team-text">
                                <h2>Yogesh Desai</h2>
                                <p>Trustee</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('img/team/shantanu.jpg') }}" alt="Image">
                                <!--<div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>-->
                            </div>
                            <div class="team-text">
                                <h2>Ambildhok Shantanu</h2>
                                <p>Trustee</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('img/team/prateik.jpg') }}" alt="Image">
                                <!--<div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>-->
                            </div>
                            <div class="team-text">
                                <h2>Pratik Dhotmal</h2>
                                <p>Trustee</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('img/team/parag.jpeg') }}" alt="Image">
                                <!--<div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>-->
                            </div>
                            <div class="team-text">
                                <h2>Parag Ghatage</h2>
                                <p>Partner</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('img/team/nimesh.jpg') }}" alt="Image">
                                <!--<div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>-->
                            </div>
                            <div class="team-text">
                                <h2>Nimesh Patkar</h2>
                                <p>Medical Expert</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Team End -->


        
    <!-- Contact form section -->
    <div class="contact" id="contactForm">
        <div class="container">
            <div class="section-header text-center wow fadeIn" data-wow-delay="0.1s">
                <p>Contact Us</p>
                <h2>Get in Touch</h2>
            </div>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    @if(session("success"))
                        <div class="alert alert-success">
                            {{ session("success") }}
                        </div>
                    @endif

                    <form id="contact-form" method="post" action="{{ route('contact.submit') }}" role="form">



                        @csrf

                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                            @if ($errors->has("name"))
                                <div class="text-danger">{{ $errors->first("name") }}</div>
                            @endif

                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" >
                            @if ($errors->has("email"))
                                <div class="text-danger">{{ $errors->first("email") }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="contact" name="contact" placeholder="Your Contact No." >
                            @if ($errors->has("contact"))
                                <div class="text-danger">{{ $errors->first("contact") }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message" ></textarea>
                            @if ($errors->has("message"))
                                <div class="text-danger">{{ $errors->first("message") }}</div>
                            @endif
                        </div>
                        <!-- <div class="form-group">
                            <label for="captcha">Please solve the following math problem:</label>
                            <div id="captcha"></div>
                            <input type="text" class="form-control" id="userCaptcha" name="userCaptcha" placeholder="Enter the result" >
                        </div> -->
                        <div class="form-group">
                            <label for="captcha">Captcha</label>
                            <div class="mb-3">
                                <img src="{{ route('captcha') }}" alt="captcha" class="captcha-img" data-refresh-config="default">
                                <button type="button" class="btn btn-info btn-refresh">Refresh</button>
                            </div>
                            <input type="text" class="form-control" id="captcha" name="captcha" placeholder="Enter Captcha">
                            @if ($errors->has('captcha'))
                                <div class="text-danger">{{ $errors->first('captcha') }}</div>
                            @endif
                        </div>
                        <div class="text-center"><button type="submit" class="btn btn-primary">Send Message</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>




        <!-- Footer Start -->
        <div class="footer wow fadeIn" id="footer" data-wow-delay="0.3s">
            <div class="container-fluid">
                <div class="container">
                    <div class="footer-info">
                        <a href="/" class="footer-logo">
                            <!-- ith logo takaychay -->
                            <img src="{{ asset('img/logo.png') }}" alt="logo" />
                        </a>
                        <h3>Connect With Us</h3>
                        <div class="footer-menu">
                            <p>+91-7588225594</p>
                            <p>support@empoweringsocialwelfare.in</p>
                        </div>
                        <div class="footer-social">
                            <a href="https://twitter.com/empower_welfare" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/people/Empowering-Social-Welfare/61559748684951/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.youtube.com/@empoweringsocialwelfare" target="_blank"><i class="fab fa-youtube"></i></a>
                            <a href="https://www.instagram.com/empoweringsocialwelfare/" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/company/empowering-social-welfare/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://api.whatsapp.com/send/?phone=917588225594&text&type=phone_number&app_absent=0" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <a href="#">Empowering Social Welfare</a>, All Right Reserved.</p>
                        </div>
                        <div class="col-md-6 invisible">
                            <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

        
        <!-- Contact Javascript File -->

        <!-- Template Javascript -->
        <script src="js/main.js"></script>

        <script>
             $(document).ready(function () {
                
                // var captchaResult = generateCaptcha();
                
                $("#contact-form").submit(function (event) {
                // $("#contact-form").on('submit', function (event) {
                    // Prevent default form submission
                    event.preventDefault();
                    event.stopPropagation();
                    
                    // var userCaptcha = parseInt($('#userCaptcha').val());

                    // if (userCaptcha === captchaResult) 
                    // {

        
                        // Get form data
                        var formData = $(this).serialize();
            
                        // AJAX request
                        $.ajax({
                            type: "POST",
                            url: "{{ route('contact.submit') }}",
                            data: formData,
                            dataType: "json",
                            success: function (response) {
                                // Show success message or handle response
                                
                                console.log(response);
                                
                                if (response.success) {

                                    // alert(response.message);
                                    Toastify({
                                        text: response.message,
                                        backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                                        duration: 3000,
                                        close: true
                                    }).showToast();
                                    // Clear form fields
                                    $('#name').val('');
                                    $('#email').val('');
                                    $('#contact').val('');
                                    $('#message').val('');
                                    // $('#userCaptcha').val('');
                                }
                                else {
                                    // alert("An error occurred: " + response.message);
                                    Toastify({
                                        text: response.message,
                                        backgroundColor: "linear-gradient(to right, #ff4b1f, #ff9068)",
                                        duration: 3000,
                                        close: true
                                    }).showToast();
                                }
                            },
                            error: function (xhr, status, error) {
                                // Show error message or handle error

                                if (xhr.status === 422) {
                                    
                                    // Validation error occurred
                                    
                                    var errors = xhr.responseJSON.errors;
                                    var errorMessage = 'Validation errors:';
                                    $.each(errors, function(key, value) {
                                        errorMessage += '\n' + value;
                                    });
                                    Toastify({
                                        text: errorMessage,
                                        backgroundColor: "linear-gradient(to right, #ff4b1f, #ff9068)",
                                        duration: 5000,
                                        close: true
                                    }).showToast();
                                } else {
                                    Toastify({
                                        text: "An error occurred while sending your message.",
                                        backgroundColor: "linear-gradient(to right, #ff4b1f, #ff9068)",
                                        duration: 3000,
                                        close: true
                                    }).showToast();
                                }

                                // Toastify({
                                //     text: "An error occurred while sending your message.",
                                //     backgroundColor: "linear-gradient(to right, #ff4b1f, #ff9068)",
                                //     duration: 3000,
                                //     close: true
                                // }).showToast();

                            }
                        });
                        // } 
                        // else {
                        //     // CAPTCHA incorrect, show error toast
                        //     Toastify({
                        //         text: "CAPTCHA incorrect, please try again.",
                        //         backgroundColor: "linear-gradient(to right, #ff4b1f, #ff9068)",
                        //         duration: 3000,
                        //         close: true
                        //     }).showToast();
                        //     // Generate a new CAPTCHA
                        //     captchaResult = generateCaptcha();
                        //     $('#userCaptcha').val('');
                        // }
                });
                
               
            });
           
       
            $(document).ready(function () {
                $(document).on('click', '.btn-refresh', function(){
                    var captcha = $('.captcha-img');
                    var url = "{{ route('captcha') }}";
                    captcha.attr('src', url + '?' + Math.random());
                });
            });

        </script>


    </body>
</html>
