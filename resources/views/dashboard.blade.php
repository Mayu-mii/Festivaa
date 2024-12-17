<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="color: white;">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- Sidebar included, not removed -->
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

                            <!-- Main Content -->
                            <div id="layoutSidenav_content">
                                <div class="container-fluid px-4">
                                    <div class="row" style="margin-top: 35px;">
                                        <!-- Upcoming Events Card -->
                                        <div class="col-xl-12">
                                            <div class="card mb-4">
                                                <div class="card-header">
                                                    <i class="fa-solid fa-bars"></i>
                                                    Upcoming Events
                                                </div>
                                                <div class="card-body">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Event Title</th>
                                                                <th scope="col">Event Date</th>
                                                                <th scope="col">Location</th>
                                                                <th scope="col">Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($upcomingEvents as $event)
                                                            <tr>
                                                                <th scope="row">{{ $loop->iteration }}</th>
                                                                <td>{{ $event->title }}</td>
                                                                <td>{{ \Carbon\Carbon::parse($event->event_date)->format('Y-m-d H:i') }}</td>
                                                                <td>{{ $event->location }}</td>
                                                                <td><span class="badge bg-success">{{ $event->status }}</span></td>
                                                            </tr>
                                                        @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    

                                    
                                    <!-- Pending Events Card (Moved to the bottom) -->
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card mb-4">
                                                <div class="card-header">
                                                    <i class="fa-solid fa-chart-bar"></i>
                                                    Pending Events
                                                </div>

                                                <div class="card-body">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Event Title</th>
                                                                <th scope="col">Event Date</th>
                                                                <th scope="col">Location</th>
                                                                <th scope="col">Status</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($pendingEvents as $event)
                                                            <tr>
                                                                <th scope="row">{{ $loop->iteration }}</th>
                                                                <td>{{ $event->title }}</td>
                                                                <td>{{ \Carbon\Carbon::parse($event->event_date)->format('Y-m-d H:i') }}</td>
                                                                <td>{{ $event->location }}</td>
                                                                <td><span class="badge bg-warning">{{ $event->status }}</span></td>
                                                            </tr>
                                                        @endforeach

                                                        </tbody>
                                                    </table>
                                               
                                                    </div>
                                                    </div>
                                                    </div>
                      
                                    <!-- Event Statistics Card (Moved to the bottom) -->
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card mb-4">
                                                <div class="card-header">
                                                    <i class="fa-solid fa-chart-bar"></i>
                                                    Event Statistics
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                    <div class="col-md-3">
                                                    <div class="stats-info">
                                                        <h6>Total Events</h6>
                                                        <p>{{ $totalEvents }}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="stats-info">
                                                        <h6>Upcoming Events</h6>
                                                        <p>{{ $upcomingEventCount }}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="stats-info">
                                                        <h6>Pending Events</h6>
                                                        <p>{{ $pendingEventCount }}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="stats-info">
                                                        <h6>Past Events</h6>
                                                        <p>{{ $pastEventCount }}</p>
                                                    </div>
                                                </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </body>
                </html>

            </div>
        </div>
    </div>
</x-app-layout>
