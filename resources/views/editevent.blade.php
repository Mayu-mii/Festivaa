<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="    color: white;">
            {{ __('Edit Event') }}
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
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <div id="layoutSidenav_content">
                            <main>
                                <div class="container-fluid px-4">
                                    <div class="row" style="margin-top: 35px;">
                                        <div class="card" style="padding: 20px; margin:30px; margin-top:0; margin-right:0; width:85%">
                                            <h5 class="">Edit Event</h5>
                                            <div class="card-body">
                                            <form>
                                                <div class="form-group row">
                                                    <label for="eventTitle" class="col-sm-2 col-form-label">Event Title:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="eventTitle" placeholder="Event Title">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="eventDescription" class="col-sm-2 col-form-label">Event Description:</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" id="eventDescription" placeholder="Event Description"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="eventDate" class="col-sm-2 col-form-label">Event Date and Time:</label>
                                                    <div class="col-sm-10">
                                                        <input type="datetime-local" class="form-control" id="eventDate" placeholder="Event Date and Time">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="eventLocation" class="col-sm-2 col-form-label">Event Location:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="eventLocation" placeholder="Event Location">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="eventCategory" class="col-sm-2 col-form-label">Event Category:</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control" id="eventCategory">
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
                                                    <label for="eventCapacity" class="col-sm-2 col-form-label">Event Capacity:</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" class="form-control" id="eventCapacity" placeholder="Event Capacity">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="ticketPrice" class="col-sm-2 col-form-label">Ticket Price:</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" class="form-control" id="ticketPrice" placeholder="Ticket Price">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="rsvpDeadline" class="col-sm-2 col-form-label">RSVP Deadline:</label>
                                                    <div class="col-sm-10">
                                                        <input type="date" class="form-control" id="rsvpDeadline" placeholder="RSVP Deadline">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="eventImage" class="col-sm-2 col-form-label">Event Image:</label>
                                                    <div class="col-sm-10">
                                                        <input type="file" class="form-control" id="eventImage" placeholder="Event Image">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="organizerContact" class="col-sm-2 col-form-label">Organizer Contact Information:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="organizerContact" placeholder="Organizer Contact Information">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="additionalNotes" class="col-sm-2 col-form-label">Additional Notes:</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" id="additionalNotes" placeholder="Additional Notes"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="eventVisibility" class="col-sm-2 col-form-label">Event Visibility:</label>
                                                    <div class="col-sm-10">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="eventVisibility" id="public" value="Public">
                                                            <label class="form-check-label" for="public">
                                                                Public
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="eventVisibility" id="private" value="Private">
                                                                        <label class="form-check-label" for="private">
                                                                            Private
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-10">
                                                                    <button type="submit" class="btn" style="background-color: #e85336;  color: white; border-radius: 100px; padding-left: 25px; padding-right: 25px;">Create Event</button>
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
