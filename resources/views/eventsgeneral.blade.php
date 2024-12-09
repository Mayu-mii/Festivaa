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
                    <h1 class="masthead-heading mb-0">EVENTS</h1>
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
                    <div class="card" style="width: 31%; margin:10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <img class="card-img-top" src="assets/img/event1.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">EVENT</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#"  class="btn" id="registerbtn" style="margin-left:0;">SEE DETAILS</a>
                        </div>
                    </div>
                    <div class="card" style="width: 31%; margin:10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <img class="card-img-top" src="assets/img/event2.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">EVENT</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#"  class="btn" id="registerbtn" style="margin-left:0;">SEE DETAILS</a>
                        </div>
                    </div>
                    <div class="card" style="width: 31%; margin:10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <img class="card-img-top" src="assets/img/event3.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">EVENT</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn" id="registerbtn" style="margin-left:0;">SEE DETAILS</a>
                        </div>
                    </div>
                </div>
                <div class="row gx-5 align-items-center">
                    <div class="card" style="width: 31%; margin:10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <img class="card-img-top" src="assets/img/event1.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">EVENT</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#"  class="btn" id="registerbtn" style="margin-left:0;">SEE DETAILS</a>
                        </div>
                    </div>
                    <div class="card" style="width: 31%; margin:10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <img class="card-img-top" src="assets/img/event2.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">EVENT</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#"  class="btn" id="registerbtn" style="margin-left:0;">SEE DETAILS</a>
                        </div>
                    </div>
                    <div class="card" style="width: 31%; margin:10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <img class="card-img-top" src="assets/img/event3.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">EVENT</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn" id="registerbtn" style="margin-left:0;">SEE DETAILS</a>
                        </div>
                    </div>
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
