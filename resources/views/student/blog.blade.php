<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="    color: white;">
            {{ __('Dashboard') }}
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
                    <style>
                        .card-body table {
                            width: 100%;
                            table-layout: fixed;
                        }

                        .card-body th, .card-body td {
                            word-wrap: break-word;
                        }
                    </style>
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
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <div id="layoutSidenav_content">
                            <main>
                                <div class="container-fluid px-4">
                                    <div class="row" style="margin-top: 35px;">
                                        <div class="col-xl-6" style="width: fit-content;">
                                        <div class="row">
                                            @if (session('success'))
                                                <div class="alert alert-success">
                                                    {{ session('success') }}
                                                </ div>
                                            @endif

                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <div class="row">
                                                <div class="col-md-6" style="width: 68%;">
                                                    <div class="card mb-4">
                                                        <div class="card-header">
                                                            <i class="fa-solid fa-bars"></i>
                                                            EVENT LIST
                                                        </div>
                                                        <div class="card-body">
                                                            <table class="table table-striped table-bordered table-hover">
                                                                <thead class="thead-dark">
                                                                    <tr>
                                                                        <th scope="col">Event Manager</th>
                                                                        <th scope="col">Event Title</th>
                                                                        <th scope="col">Event Description</th>
                                                                        <th scope="col">Date Created</th>
                                                                        <th scope="col">User</th>
                                                                        <th scope="col">Actions</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($blogdate as $blogs)
                                                                        <tr>
                                                                            <td>{{$blogs['author']}}</td>
                                                                            <td>{{$blogs['blog_title']}}</td>
                                                                            <td>{{$blogs['blog_content']}}</td>
                                                                            <td>{{$blogs['date_created']}}</td>
                                                                            <td>{{$blogs['email']}}</td>
                                                                            <td>
                                                                                <a href="{{ route('showBlog', ['id' => $blogs['id']]) }}" class="btn btn-primary btn-sm">
                                                                                    <i class="fas fa-eye"></i>
                                                                                </a>
                                                                                <a href="{{ route ('editBlog', ['id' => $blogs['id'] ]) }}" class="btn btn-secondary btn-sm">
                                                                                    <i class="fas fa-edit"></i>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    {{ $blogdate->links() }}
                                                </div>
                                                <div class="col-md-6" style="width: 32%;">
                                                    <div class="card mb-4">
                                                        <div class="card-header">
                                                            <i class="fa-solid fa-bars"></i>
                                                            CREATE EVENT
                                                        </div>
                                                        <div class="card-body">
                                                            <form action="{{ route('post.store') }}" method="POST">
                                                                @csrf
                                                                <label for="author">Event Organizer:</label><br>
                                                                <input type="text" id="author" name="author" value="{{old('author')}}"><br>
                                                                <label for="blog_title">Event Title:</label><br>
                                                                <input type="text" id="blog_title" name="blog_title" value="{{old('blog_title')}}"><br>
                                                                <label for="blog_content">Event Description:</label><br>
                                                                <textarea id="blog_content" name="blog_content">{{old('blog_content')}}</textarea><br>
                                                                <input type="submit" value="Submit" class="btn btn-success">
                                                            </form>
                                                        </div>
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