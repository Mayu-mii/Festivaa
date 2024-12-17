<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="    color: white;">
            {{ __('Create Event') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            </div>
        </div>
        <!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta charset="utf-8" />
                    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
                    <meta name="description" content="" />
                    <meta name="author" content="" />
                    <title>Dashboard - SB Admin</title>
                    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
                    <link href="styless.css" rel="stylesheet" />
                    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
                </head>
                <body class="sb-nav-fixed">
                    <div id="layoutSidenav">
                        <div id="layoutSidenav_nav">
                            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                                <div class="sb-sidenav-menu" style="background-color: #b23d26;">
                                    <div class="nav">
                                        <div class="sb-sidenav-menu-heading">- General -</div>
                                        <a class="nav-link" href="{{route('dashboard')}}">
                                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                            Dashboard
                                        </a>
                                        <div class="sb-sidenav-menu-heading">- Manage -</div>
                                        <a class="nav-link" href="{{route('events')}}">
                                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                            My Events
                                        </a>
                                        <a class="nav-link" href="{{route('createevent')}}">
                                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                            Create Event
                                        </a>
                                        <a class="nav-link" href="{{route('mailinglist')}}">
                                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                            Mailing List
                                        </a>

                                        
                                        <a class="nav-link" href="{{ route('events.past') }}">
                                            <div class="sb-nav-link-icon"><i class="fas fa-calendar-check"></i></div>
                                            Past Events
                                        </a>

                                    </div>
                                </div>
                            </nav>
                        </div>
                        <div id="layoutSidenav_content">
                            <main>
                                <div class="container-fluid px-4">
                                    <div class="row" style="margin-top: 35px;">
                                        <div class="card" style="padding: 20px; margin:30px; margin-top:0; margin-right:0; width:85%">
                                            <h5 class="">Create New Event</h5>
                                            <div class="card-body">
                                            <form method="POST" action="{{ route('storeevent') }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group row">
                                                    <label for="title" class="col-sm-2 col-form-label">Event Title:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="title" id="title" placeholder="Event Title" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="description" class="col-sm-2 col-form-label">Event Description:</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="description" id="description" placeholder="Event Description" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="event_date" class="col-sm-2 col-form-label">Event Date and Time:</label>
                                                    <div class="col-sm-10">
                                                        <input type="datetime-local" class="form-control" name="event_date" id="event_date" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="location" class="col-sm-2 col-form-label">Event Location:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="location" id="location" placeholder="Event Location" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="category" class="col-sm-2 col-form-label">Event Category:</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control" name="category" id="category" required>
                                                            <option value="Concert">Concert</option>
                                                            <option value="Workshop">Workshop</option>
                                                            <option value="Conference">Conference</option>
                                                            <option value="Meetup">Meetup</option>
                                                            <option value="Webinar">Webinar</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="capacity" class="col-sm-2 col-form-label">Event Capacity:</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" class="form-control" name="capacity" id="capacity" placeholder="Event Capacity" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="ticket_price" class="col-sm-2 col-form-label">Ticket Price:</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" step="0.01" class="form-control" name="ticket_price" id="ticket_price" placeholder="Ticket Price" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="rsvp_deadline" class="col-sm-2 col-form-label">RSVP Deadline:</label>
                                                    <div class="col-sm-10">
                                                        <input type="date" class="form-control" name="rsvp_deadline" id="rsvp_deadline" required>
                                                        @error('rsvp_deadline')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>

                                                  <div class="form-group row">
                                                    <label for="event_image" class="col-sm-2 col-form-label">Event Image:</label>
                                                    <div class="col-sm-10">
                                                        <input type="file" class="form-control" name="event_image" id="event_image" accept="image/*">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label for="organizer_contact" class="col-sm-2 col-form-label">Organizer Contact:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="organizer_contact" id="organizer_contact" placeholder="Organizer Contact" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="additional_notes" class="col-sm-2 col-form-label">Additional Notes:</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="additional_notes" id="additional_notes" placeholder="Additional Notes"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Event Visibility:</label>
                                                    <div class="col-sm-10">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="visibility" id="public" value="Public" required>
                                                            <label class="form-check-label" for="public">Public</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="visibility" id="private" value="Private" required>
                                                            <label class="form-check-label" for="private">Private</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-10">
                                                        <button type="submit" class="btn btn-success">Create Event</button>
                                                    </div>
                                                </div>
                                            </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </main>
                        </div>
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
                    <script src="js/scripts.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
                    <script src="assets/demo/chart-area-demo.js"></script>
                    <script src="assets/demo/chart-bar-demo.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
                    <script src="js/datatables-simple-demo.js"></script>
                </body>
            </html>

    </div>
</x-app-layout>