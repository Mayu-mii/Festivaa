<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Festiva | Home</title>
        <link rel="icon" type="image/x-icon" href="logo.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
            <div class="container px-5">
                <a><img class="festivaLogo" src="festivaLogo.png" alt="Image" style="width: 30%;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="{{route('welcome')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('eventsgeneral')}}">EVENTS</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('categories')}}">Categories</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('faqs')}}">FAQs</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('about')}}">ABOUT</a></li>
                        @if (Route::has('login'))
                            @auth
                            <li class="nav-item"><a href="{{ url('/dashboard') }}" class="nav-link" id="loginbtn">DASHBOARD</a></li>
                            @else
                            <li class="nav-item"><a href="{{ route('login') }}" class="nav-link" id="loginbtn">LOGIN</a></li>
                            @if (Route::has('register'))
                                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link" id="registerbtn">REGISTER</a></li>
                            @endif
                            @endauth
                        @endif   
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Header-->
        <header class="masthead text-center text-white" style="height:100px;">
            <div class="masthead-content">
                <div class="container px-5">
                    <h1 class="masthead-heading mb-0">ABOUT US</h1>
                </div>
            </div>
            <div class="bg-circle-1 bg-circle"></div>
            <div class="bg-circle-2 bg-circle"></div>
            <div class="bg-circle-3 bg-circle"></div>
            <div class="bg-circle-4 bg-circle"></div>
        </header>

        <!-- Our Story Section-->
        <section class="py-5">
            <div class="container">
                <div class="row align-items-center gx-4">
                    <div class="col-md-5">
                        <div class="ms-md-2 ms-lg-5"><img class="img-fluid rounded-3" src="assets/img/01.png" alt="Festiva Overview"></div>
                    </div>
                    <div class="col-md-6 offset-md-1">
                        <div class="ms-md-2 ms-lg-5">
                            <img class="festivaLogo" src="festivaLogo.png" alt="Image" style="width: 50%;"><br>
                            <span class="text-muted">Our Story</span>
                            <p class="lead">At Festiva, we believe that every event, big or small, is an opportunity to create lasting memories. Our journey began with a simple idea: to make event planning accessible, seamless, and enjoyable for everyone. From weddings to corporate conferences, we wanted to empower individuals and businesses to bring their visions to life without the stress. With a passion for innovation and a commitment to excellence, Festiva has grown into a trusted platform that helps people celebrate life’s moments with ease. Today, we continue to strive for perfection, ensuring that every detail of your event is taken care of, so you can focus on what truly matters—making memories.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Meet the Founders Section-->
        <section id="about">
            <div class="container px-5">
                <h2 class="text-center mb-5">Meet the Founders</h2>
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-3 mb-4">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-3" src="goldie.jpg" alt="Founder 1" />
                            <h5 class="fw-bold">Pare, Goldie May M.</h5>
                            <p class="text-muted">Founder & Developer</p>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-3" src="dom.jpg" alt="Founder 2" />
                            <h5 class="fw-bold">Raminto, Jabriel Dominic S. </h5>
                            <p class="text-muted">Founder & Developer</p>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-3" src="aly.jpg" alt="Founder 3" />
                            <h5 class="fw-bold">Romen, Alyssa Marie R.</h5>
                            <p class="text-muted">Founder & Developer</p>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-3" src="ashley.jpg" alt="Founder 4" />
                            <h5 class="fw-bold">Santos, Lourdes Ashley L.</h5>
                            <p class="text-muted">Founder & Developer</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Mission Section -->
        <section class="bg-light py-5">
            <div class="container px-5">
                <h2 class="text-center mb-5">Our Mission</h2>
                <p class="lead text-center">At Festiva, our mission is to simplify event planning for individuals and businesses by providing a comprehensive and user-friendly platform. We aim to bring people together, foster creativity, and turn every event into a memorable celebration. Our goal is to offer seamless solutions for planning events of all sizes, from small gatherings to large conferences, all while maintaining exceptional customer service and attention to detail.</p>
            </div>
        </section>

        <!-- Our Values Section -->
        <section class="py-5">
            <div class="container px-5">
                <h2 class="text-center mb-5">Our Values</h2>
                <div class="row gx-5">
                    <div class="col-md-4 mb-4">
                        <div class="text-center">
                            <i class="fas fa-heart fa-3x mb-3"></i>
                            <h5 class="fw-bold">Passion</h5>
                            <p>We are passionate about creating unforgettable experiences and ensuring every event we plan is a success.</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="text-center">
                            <i class="fas fa-cogs fa-3x mb-3"></i>
                            <h5 class="fw-bold">Innovation</h5>
                            <p>We continuously strive for innovation, embracing new technologies and creative ideas to improve the event experience.</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="text-center">
                            <i class="fas fa-users fa-3x mb-3"></i>
                            <h5 class="fw-bold">Community</h5>
                            <p>We believe in fostering a strong sense of community, both with our clients and within our team.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us Section -->
        <section class="" style="background-color: #f3be66; padding:5%;;">
            <div class="container px-5">
                <h2 class="text-center mb-5">Why Choose Festiva?</h2>
                <p class="lead text-center">Choosing Festiva means choosing a team that understands your needs and strives to deliver nothing less than perfection. We are committed to making event planning easier, faster, and more enjoyable, ensuring your special day is exactly as you envision it. With our personalized services, expert guidance, and cutting-edge technology, you can trust us to create lasting memories that you and your guests will cherish forever.</p>
            </div>
        </section>

        <!-- Footer-->
        <footer class="py-5 bg-black">
            <div class="container px-5">
                <p class="m-0 text-center text-white small">Copyright &copy; Your Website 2023</p>
            </div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
