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
                    <h1 class="masthead-heading mb-0">CATEGORIES</h1>
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
                <div class="card-group">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/category1.png" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Corporate</h5>
                        <p class="card-text">Professional events such as conferences, workshops, and product launches. Perfect for networking, training, and business growth.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="assets/img/category2.png" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Social</h5>
                        <p class="card-text">Celebrate life’s special moments with weddings, birthday parties, and reunions. Create memories that last a lifetime.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="assets/img/category3.png" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Community</h5>
                        <p class="card-text">Local fundraisers, festivals, and charity events. Strengthen connections and make a positive impact.</p>
                        </div>
                    </div>
                </div>
                <div class="card-group" style="margin-top:10px;">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/category4.png" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Entertainment</h5>
                        <p class="card-text">Experience the thrill of concerts, theater shows, and art exhibitions. Enjoy captivating performances and cultural expressions.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="assets/img/category5.png" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Sports</h5>
                        <p class="card-text">Engage in competitive spirit with tournaments, marathons, and fitness classes. Promote teamwork, health, and athleticism.</p>
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
