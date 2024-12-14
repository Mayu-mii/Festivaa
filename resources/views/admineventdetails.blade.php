<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="    color: white;">
            {{ __('Admin Dashboard') }}
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
                                            Events Summary
                                        </a>
                                        <a class="nav-link" href="{{route('admineventapproval')}}">
                                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                            Event Approval
                                        </a>
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <div id="layoutSidenav_content">
                        <main>
                            <div class="container-fluid px-4">
                                <h1 class="mt-4" style="color: #b23d26; font-weight: bold;">Event Details</h1>
                                <div class="row mt-4">
                                    <!-- Event Card -->
                                    <div class="col-md-4 mb-4"  style="width:100%;">
                                        <div class="card shadow-sm h-100">
                                            <img src="assets/img/event1.png" class="card-img-top" alt="Event Image">
                                            <div class="card-body">
                                                <h5 class="card-title text-primary" style="font-weight: bold;">Event Title</h5>
                                                <p class="card-text">
                                                    <strong>Description:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                                </p>
                                                <p class="card-text">
                                                    <strong>Date & Time:</strong> January 20, 2025, 5:00 PM
                                                </p>
                                                <p class="card-text">
                                                    <strong>Location:</strong> Conference Hall, Downtown
                                                </p>
                                                <p class="card-text">
                                                    <strong>Category:</strong> Workshop
                                                </p>
                                                <p class="card-text">
                                                    <strong>Capacity:</strong> 50 Attendees
                                                </p>
                                                <p class="card-text">
                                                    <strong>Ticket Price:</strong> $20
                                                </p>
                                                <p class="card-text">
                                                    <strong>RSVP Deadline:</strong> January 15, 2025
                                                </p>
                                                <p class="card-text">
                                                    <strong>Contact:</strong> organizer@example.com
                                                </p>
                                                <p class="card-text">
                                                    <strong>Additional Notes:</strong> Please arrive 15 minutes early.
                                                </p>
                                                <p class="card-text">
                                                    <strong>Visibility:</strong> Public
                                                </p>
                                                <div class="d-flex justify-content-between">
                                                    <button class="btn btn-success btn-sm">
                                                        <i class="fas fa-edit"></i> Set Event Status
                                                    </button>
                                                    
                                                </div>
                                            </div>
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


