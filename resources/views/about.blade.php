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
                    <h1 class="masthead-heading mb-0">ABOUT US</h1>
                </div>
            </div>
            <div class="bg-circle-1 bg-circle"></div>
            <div class="bg-circle-2 bg-circle"></div>
            <div class="bg-circle-3 bg-circle"></div>
            <div class="bg-circle-4 bg-circle"></div>
        </header>
        <section class="py-5">
	<div class="container">
		<div class="row align-items-center gx-4">
			<div class="col-md-5">
				<div class="ms-md-2 ms-lg-5"><img class="img-fluid rounded-3" src="assets/img/01.png"></div>
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

<!-- Content section 1-->
<section id="about">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="assets/img/picute.jpg" alt="Lourdes Ashley Santos" /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <p>Founded by Lourdes Ashley Santos, our CEO and visionary, Festiva is dedicated to making your event dreams a reality.</p>
                            <p>Lourdes Ashley Santos, a seasoned event planner and entrepreneur, saw an opportunity to revolutionize the event industry. With years of experience in planning and executing flawless events, Lourdes created Festiva to provide a comprehensive platform for event organizers and attendees alike.</p>
                            <p>At Festiva, we believe that every event should be a unique and unforgettable experience. Our platform is designed to simplify the planning process, providing you with the tools and resources you need to bring your vision to life. From intimate gatherings to grand celebrations, we're committed to helping you create memories that last a lifetime.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<section class="py-5">
	<div class="container">
		<div class="row justify-content-center text-center mb-3">
			<div class="col-lg-8 col-xxl-7">
				<span class="text-muted">Let's Talk</span>
				<h2 class="display-5 fw-bold mb-3">Contact Us</h2>
				<p class="lead">Lorem ipsum dolor, sit amet elit Quamnitm veniam dicta, quos nemo minima nulla ducimus officii nulla ducimus officiis! Lorem ipsum dolor, sit amet elit Quamnitm.</p>
			</div>
		</div>
		<div class="row justify-content-between">
			<div class="col-lg-6">
				<h5 class="fw-semibold mb-3" style="margin-left:50px;">Send us a message</h5>
				<form style="margin-left:50px;">
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3">
								<input class="form-control bg-light" placeholder="First name" type="text">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<input class="form-control bg-light" placeholder="Last name" type="text">
							</div>
						</div>
						<div class="col-12">
							<div class="mb-3">
								<input class="form-control bg-light" placeholder="Email address" type="text">
							</div>
						</div>
					</div>
					<div class="mb-3">
						<textarea class="form-control bg-light" placeholder="Your message" rows="4"></textarea>
					</div>
					<div class="col-md-4 ms-auto">
						<div class="d-grid">
							<button class="btn" type="submit" id="registerbtn">Send message</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-lg-5 mt-5 mt-lg-0">
				<div class="mb-4">
					<h5>Address</h5>
					<p>123 Mountain View, California, United States.</p>
				</div>
				<div class="mb-4">
					<h5>Phone</h5>
					<p>+1 123-456-7890</p>
				</div>
				<div class="mb-4">
					<h5>Email</h5>
					<p>hello@yourdomain.com</p>
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
