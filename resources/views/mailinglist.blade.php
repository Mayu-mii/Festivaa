<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="    color: white;">
            {{ __('Event Details') }}
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
                                <h1 class="mt-4" style="color: #b23d26; font-weight: bold;">Mailing List</h1>

                                <!-- Filter Section -->
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <label for="eventFilter" class="form-label">Filter by Event Title:</label>
                                        <select id="eventFilter" class="form-select">
                                            <option value="">All Events</option>
                                            <option value="Event 1">Event 1</option>
                                            <option value="Event 2">Event 2</option>
                                            <option value="Event 3">Event 3</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Mailing List Table -->
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <div class="card shadow-sm">
                                            <div class="card-header" style="background-color: #b23d26; color: white; font-weight: bold;">
                                                Mailing List Table
                                            </div>
                                            <div class="card-body">
                                            <table class="table table-striped table-hover" id="mailingListTable">
    <thead>
        <tr>
            <th>#</th>
            <th>Event Title</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact Number</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mailingLists as $mailingList)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $mailingList->event ? $mailingList->event->title : 'N/A' }}</td> <!-- Check if event exists -->
                <td>{{ $mailingList->name }}</td>
                <td>{{ $mailingList->email }}</td>
                <td>{{ $mailingList->contact_number }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- JavaScript for Filtering -->
                            <script>
                                document.getElementById("eventFilter").addEventListener("change", function () {
                                    const filterValue = this.value.toLowerCase();
                                    const tableRows = document.querySelectorAll("#mailingListTable tbody tr");

                                    tableRows.forEach(row => {
                                        const eventTitle = row.children[1].textContent.toLowerCase();
                                        if (filterValue === "" || eventTitle.includes(filterValue)) {
                                            row.style.display = "";
                                        } else {
                                            row.style.display = "none";
                                        }
                                    });
                                });
                            </script>
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


