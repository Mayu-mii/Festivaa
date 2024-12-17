<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="    color: white;">
            {{ __('My Events') }}
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

                            <div class="py-12">
                                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                                        <div class="container-fluid px-4">
                                        <div class="row" style="margin-top: 35px;">
                                            @foreach($events as $event)
                                                @if($event->status !== 'Done') <!-- Exclude "Done" events -->
                                                    <div class="card" style="width: 33%; margin:10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                                    <img class="eventlistimage" 
                                                    src="{{ $event->event_image ? asset('storage/events/' . $event->event_image) : asset('assets/img/default_event.png') }}" 
                                                    alt="Event Image" style="width: 100%; height: auto;">

                                                        <div class="card-body">
                                                            <h5 class="card-title">{{ $event->title }}</h5>
                                                            <p class="card-text">{{ $event->description }}</p>
                                                            <p class="card-text"><strong>Date:</strong> {{ $event->event_date }}</p>
                                                            <p class="card-text"><strong>Location:</strong> {{ $event->location }}</p>
                                                            <p class="card-text"><strong>Status:</strong> 
                                                                <span style="font-weight: bold; color: #ffc107;">{{ $event->status }}</span>
                                                            </p>

                                                            <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                                                                <a href="{{ route('organizereventdetails', $event->id) }}" class="btn btn-success" style="border-radius: 100px;">SEE DETAILS</a>
                                                                <a href="{{ route('editevent', $event->id) }}" class="btn btn-primary" style="border-radius: 100px;">EDIT</a>
                                                                
                                                                <!-- Mark as Done Button -->
                                                                <form action="{{ route('events.done', $event->id) }}" method="POST" onsubmit="return confirm('Mark this event as done?');">
                                                                    @csrf
                                                                    @method('PATCH')
                                                                    <button class="btn btn-warning" style="border-radius: 100px;">DONE</button>
                                                                </form>

                                                                <!-- Delete Button -->
                                                                <form action="{{ route('deleteevent', $event->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this event?');">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btn btn-danger" style="border-radius: 100px;">DELETE</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </x-app-layout>