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
        <link href="{{ asset('styles.css') }}" rel="stylesheet" />
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

        <section>
            <div class="container-fluid px-5 py-5" style="margin-top:5%;">
                <div class="row justify-content-center" style="display: flex;">
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
                            <!-- Interested Card -->
                    <div class="col-lg-4">
                        <div class="card shadow-sm" style="border-radius: 15px; border: none; background-color: #f8f9fa;">
                            <div class="card-body text-center">
                                <h3 class="fw-bold" style="color: #b23d26;">Interested?</h3>
                                <p class="text-muted">Fill up the form to get full details of the event.</p>
                                <form action="{{ route('mailinglist.store') }}" method="POST">
    @csrf
    <input type="hidden" name="event_id" value="{{ $event->id }}">
    <div class="mb-3">
        <label for="name" class="form-label fw-bold">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label fw-bold">Email</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
    </div>
    <div class="mb-3">
        <label for="contact" class="form-label fw-bold">Contact Number</label>
        <input type="text" name="contact_number" class="form-control" id="contact" placeholder="Enter your contact number" required>
    </div>
    <button type="submit" class="btn btn-success px-4 py-2" style="border-radius: 30px;">Submit</button>
</form>

@if (session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
@endif

<div id="successMessage" class="alert alert-success mt-3" style="display: none;"></div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#mailingListForm').on('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission

        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(), // Serialize the form data
            success: function(response) {
                // Show success message
                $('#successMessage').text('Your details have been saved successfully!').show();
                // Optionally, clear the form fields
                $('#mailingListForm')[0].reset();
            },
            error: function(xhr) {
                // Handle errors here
                var errors = xhr.responseJSON.errors;
                var errorMessage = '';
                for (var key in errors) {
                    errorMessage += errors[key][0] + '<br>';
                }
                $('#successMessage').html(errorMessage).removeClass('alert-success').addClass('alert-danger').show();
            }
        });
    });
});
</script>
    </body>
</html>
