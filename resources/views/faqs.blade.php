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
                                <li class="nav-item"><a
                                        href="{{ url('/dashboard') }}"
                                        class="nav-link"
                                        id="loginbtn"
                                    >
                                        DASHBOARD
                                    </a></li>
                                @else
                                <li class="nav-item"><a
                                        href="{{ route('login') }}"
                                        class="nav-link"
                                        id="loginbtn"
                                    >
                                        LOGIN
                                    </a></li>

                                    @if (Route::has('register'))
                                        <li class="nav-item"><a
                                            href="{{ route('register') }}"
                                            class="nav-link"
                                            id="registerbtn"
                                        >
                                            REGISTER
                                        </a></li>
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
                    <h1 class="masthead-heading mb-0">FAQS</h1>
                </div>
            </div>
            <div class="bg-circle-1 bg-circle"></div>
            <div class="bg-circle-2 bg-circle"></div>
            <div class="bg-circle-3 bg-circle"></div>
            <div class="bg-circle-4 bg-circle"></div>
        </header>
        <!-- Content section 1-->
        <section id="scroll">
            <div class="container px-5" style="padding: 50px;">
                <div class="row gx-5 align-items-center">
                <!--Section: FAQ-->
                    <section>
                    <p class="text-center mb-5">
                        Find the answers for the most frequently asked questions below
                    </p>

                    <div class="row">
                        <div class="col-md-6 col-lg-4 mb-4">
                        <h6 class="mb-3 text-primary"><i class="far fa-paper-plane text-primary pe-2"></i> What is Festiva? </h6>
                        <p>
                        Festiva is an all-in-one event management platform that helps you plan, organize, and execute events seamlessly. Whether you're hosting a small gathering or a large conference, Festiva has the tools you need to create a memorable experience.
                        </p>
                        </div>

                        <div class="col-md-6 col-lg-4 mb-4">
                        <h6 class="mb-3 text-primary"><i class="fas fa-pen-alt text-primary pe-2"></i> How do I create an event on Festiva?</h6>
                        <p>
                        Creating an event is easy! Simply log in to your account, go to the "Create Event" page, and fill out the event details like name, date, time, and venue. You can also customize the event with additional options like invitations and guest lists.
                        </p>
                        </div>

                        <div class="col-md-6 col-lg-4 mb-4">
                        <h6 class="mb-3 text-primary"><i class="fas fa-user text-primary pe-2"></i>Can I manage multiple events at once?
                        </h6>
                        <p>
                        Yes, Festiva allows you to manage multiple events simultaneously. From your dashboard, you can view, edit, and track all your events in one convenient place.
                        </p>
                        </div>

                        <div class="col-md-6 col-lg-4 mb-4">
                        <h6 class="mb-3 text-primary"><i class="fas fa-rocket text-primary pe-2"></i> Is Festiva suitable for all types of events?
                        </h6>
                        <p>
                        Yes, Festiva is designed to be versatile and can be used for various types of events, including weddings, corporate events, conferences, parties, and more. Our tools are flexible enough to accommodate any event size or type.
                        </p>
                        </div>

                        <div class="col-md-6 col-lg-4 mb-4">
                        <h6 class="mb-3 text-primary"><i class="fas fa-home text-primary pe-2"></i> How secure is my event information on Festiva?
                        </h6>
                        <p>We take your privacy and security very seriously. Festiva uses industry-standard encryption and security measures to protect your event information and personal data.</p>
                        </div>

                        <div class="col-md-6 col-lg-4 mb-4">
                        <h6 class="mb-3 text-primary"><i class="fas fa-book-open text-primary pe-2"></i> Is there customer support available if I need help?</h6>
                        <p>
                        Yes, Festiva offers customer support to assist you with any questions or issues. You can reach out to our support team via email, chat, or phone, and we’ll be happy to help.
                        </p>
                        </div>
                    </div>
                    </section>
                    <!--Section: FAQ-->
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-black">
            <div class="container px-5"><p class="m-0 text-center text-white small">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
