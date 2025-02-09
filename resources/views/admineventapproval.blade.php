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
    <div class="container-fluid px-5 py-5">
        <div class="card shadow-sm" style="border-radius: 15px; border: none;">
            <div class="card-header text-center bg-dark text-white" style="border-radius: 15px 15px 0 0;">
                <h3 class="fw-bold mb-0">Event Approval Page</h3>
            </div>
            <div class="card-body">
                <!-- Filter Section -->
                <div class="row mb-4">
                    <div class="col-md-6">
                        <label for="statusFilter" class="form-label fw-bold">Filter by Status:</label>
                        <select id="statusFilter" class="form-select">
                            <option value="All">All</option>
                            <option value="Pending">Pending</option>
                            <option value="Approved">Approved</option>
                            <option value="Rejected">Rejected</option>
                        </select>
                    </div>
                </div>

                <!-- Table Section -->
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead class="bg-secondary text-white">
                            <tr>
                                <th scope="col">Event ID</th>
                                <th scope="col">Event Title</th>
                                <th scope="col">Organizer Name</th>
                                <th scope="col">Status</th>
                                <th scope="col" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Example Row -->
                            <tr data-status="Pending">
                                <td>EVT001</td>
                                <td>Music Festival 2024</td>
                                <td>John Doe</td>
                                <td><span class="badge bg-warning text-dark">Pending</span></td>
                                <td class="text-center">
                                    <!-- Check Details Button -->
                                    <!-- <a href="{{route('admineventdetails')}}"> -->
                                    <a href="{{route('admineventdetails')}}" class="btn btn-outline-dark btn-sm" title="Check Details">
                                        <i class="fas fa-info-circle"></i>
                                    </a>

                                    <!-- Set Status Button -->
                                    <a class="btn btn-outline-primary btn-sm" title="Set Status">
                                        <i class="fas fa-edit"></i>
</a>
                                </td>
                            </tr>
                            <tr data-status="Approved">
                                <td>EVT002</td>
                                <td>Art Workshop</td>
                                <td>Jane Smith</td>
                                <td><span class="badge bg-success">Approved</span></td>
                                <td class="text-center">
                                    <!-- Check Details Button -->      
                                    <a href="{{route('admineventdetails')}}" class="btn btn-outline-dark btn-sm" title="Check Details">
                                        <i class="fas fa-info-circle"></i>
                                    </a>
                                    <!-- Set Status Button -->
                                    <a class="btn btn-outline-primary btn-sm" title="Set Status">
                                        <i class="fas fa-edit"></i>
</a>
                                </td>
                            </tr>
                            <tr data-status="Rejected">
                                <td>EVT003</td>
                                <td>Food Expo 2024</td>
                                <td>Emily White</td>
                                <td><span class="badge bg-danger">Rejected</span></td>
                                <td class="text-center">
                                    <!-- Check Details Button -->
                                    <a href="{{route('admineventdetails')}}" class="btn btn-outline-dark btn-sm" title="Check Details">
                                        <i class="fas fa-info-circle"></i>
                                    </a>
                                    <!-- Set Status Button -->
                                    <a class="btn btn-outline-primary btn-sm" title="Set Status">
                                        <i class="fas fa-edit"></i>
</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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


