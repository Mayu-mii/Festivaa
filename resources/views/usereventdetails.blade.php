<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Festiva | Event Details</title>
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
                        <li class="nav-item"><a class="nav-link" href="{{ route('welcome') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('eventsgeneral') }}">EVENTS</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('categories') }}">Categories</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('faqs') }}">FAQs</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">ABOUT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section>
            <div class="container-fluid px-5 py-5" style="margin-top:5%;">
                <div class="row justify-content-center">
                    <!-- Event Details -->
                    <div class="col-lg-8">
                        <div class="card shadow-sm" style="border-radius: 15px; border: none;">
                            <!-- Dynamic Event Image -->
                            <div class="card-header p-0" style="border-radius: 15px 15px 0 0; overflow: hidden;">
                                <img src="{{ $event->event_image ? asset('storage/events/' . $event->event_image) : asset('assets/img/default_event.png') }}" 
                                     class="card-img-top" alt="Event Image">
                            </div>
                            <!-- Event Title -->
                            <div class="card-body text-center py-4">
                                <h1 class="fw-bold" style="color: #b23d26; font-size: 2.5rem;">{{ $event->title }}</h1>
                            </div>
                            <!-- Event Details -->
                            <div class="card-body px-5">
                                <div class="mb-3">
                                    <h5 class="fw-bold">Event Description:</h5>
                                    <p class="text-muted">{{ $event->description }}</p>
                                </div>
                                <div class="mb-3">
                                    <h5 class="fw-bold">Event Date & Time:</h5>
                                    <p class="text-muted">{{ \Carbon\Carbon::parse($event->event_date)->format('F j, Y, g:i a') }}</p>
                                </div>
                                <div class="mb-3">
                                    <h5 class="fw-bold">Event Location:</h5>
                                    <p class="text-muted">{{ $event->location }}</p>
                                </div>
                                <div class="mb-3">
                                    <h5 class="fw-bold">Event Category:</h5>
                                    <p class="text-muted">{{ $event->category }}</p>
                                </div>
                                <div class="mb-3">
                                    <h5 class="fw-bold">Event Capacity:</h5>
                                    <p class="text-muted">{{ $event->capacity }} Attendees</p>
                                </div>
                                <div class="mb-3">
                                    <h5 class="fw-bold">Ticket Price:</h5>
                                    <p class="text-muted">${{ $event->ticket_price }}</p>
                                </div>
                                <div class="mb-3">
                                    <h5 class="fw-bold">RSVP Deadline:</h5>
                                    <p class="text-muted">{{ \Carbon\Carbon::parse($event->rsvp_deadline)->format('F j, Y') }}</p>
                                </div>
                                <div class="mb-3">
                                    <h5 class="fw-bold">Organizer Contact Information:</h5>
                                    <p class="text-muted">{{ $event->organizer_contact }}</p>
                                </div>
                                <div class="mb-3">
                                    <h5 class="fw-bold">Additional Notes:</h5>
                                    <p class="text-muted">{{ $event->additional_notes }}</p>
                                </div>
                                <div class="mb-3">
                                    <h5 class="fw-bold">Event Visibility:</h5>
                                    <p class="text-muted">{{ $event->visibility }}</p>
                                </div>
                                <div class="text-center">
                                    <a href="{{ route('eventsgeneral') }}" class="btn btn-danger px-4 py-2" style="border-radius: 30px;">Back to Events</a>
                                </div>
                            </div>
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
