<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="color: white;">
            {{ __('Event Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div id="layoutSidenav">
                    <!-- Sidebar -->
                    <div id="layoutSidenav_nav">
                        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                            <div class="sb-sidenav-menu" style="background-color: #b23d26;">
                                <div class="nav">
                                    <div class="sb-sidenav-menu-heading">- General -</div>
                                    <a class="nav-link" href="{{ route('dashboard') }}">
                                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                        Dashboard
                                    </a>
                                    <div class="sb-sidenav-menu-heading">- Manage -</div>
                                    <a class="nav-link" href="{{ route('events') }}">
                                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                        My Events
                                    </a>
                                    <a class="nav-link" href="{{ route('createevent') }}">
                                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                        Create Event
                                    </a>
                                    <a class="nav-link" href="{{ route('mailinglist') }}">
                                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                        Mailing List
                                    </a>
                                </div>
                            </div>
                        </nav>
                    </div>

                    <!-- Content -->
                    <div id="layoutSidenav_content">
                        <main>
                            <div class="container-fluid px-4">
                                <h1 class="mt-4" style="color: #b23d26; font-weight: bold;">Event Details</h1>
                                <div class="row mt-4">
                                    <!-- Event Card -->
                                    <div class="col-md-12">
                                        <div class="card shadow-sm">
                                            <!-- Dynamic Event Image -->
                                            <img src="{{ $event->event_image ? asset('storage/events/' . $event->event_image) : asset('assets/img/default_event.png') }}" 
                                                 class="card-img-top" alt="Event Image">

                                            <!-- Event Details -->
                                            <div class="card-body">
                                                <h5 class="card-title text-primary" style="font-weight: bold;">{{ $event->title }}</h5>
                                                <p class="card-text"><strong>Description:</strong> {{ $event->description }}</p>
                                                <p class="card-text"><strong>Date & Time:</strong> {{ $event->event_date }}</p>
                                                <p class="card-text"><strong>Location:</strong> {{ $event->location }}</p>
                                                <p class="card-text"><strong>Category:</strong> {{ $event->category }}</p>
                                                <p class="card-text"><strong>Capacity:</strong> {{ $event->capacity }} Attendees</p>
                                                <p class="card-text"><strong>Ticket Price:</strong> ${{ $event->ticket_price }}</p>
                                                <p class="card-text"><strong>RSVP Deadline:</strong> {{ $event->rsvp_deadline }}</p>
                                                <p class="card-text"><strong>Contact:</strong> {{ $event->organizer_contact }}</p>
                                                <p class="card-text"><strong>Additional Notes:</strong> {{ $event->additional_notes }}</p>
                                                <p class="card-text"><strong>Visibility:</strong> {{ $event->visibility }}</p>
                                                <div class="d-flex justify-content-between">
                                                <a href="{{ route('editevent', $event->id) }}" class="btn btn-success btn-sm">
                                                <i class="fas fa-edit"></i> Edit
                                               </a>

                                               <form action="{{ route('deleteevent', $event->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this event?');">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </button>
                                            </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<!-- Include Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
