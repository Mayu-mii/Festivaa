<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="color: white;">
            {{ __('Event Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                <h1 class="text-center text-primary fw-bold">{{ $event->title }}</h1>
                <div class="row mt-4">
                    <!-- Event Image -->
                    <div class="col-md-4 mb-4">
                        <img src="{{ $event->event_image ? asset('storage/events/' . $event->event_image) : asset('assets/img/default_event.png') }}" 
                             class="img-fluid rounded shadow" alt="Event Image">
                    </div>
                    <!-- Event Details -->
                    <div class="col-md-8">
                        <p><strong>Description:</strong> {{ $event->description }}</p>
                        <p><strong>Date & Time:</strong> {{ \Carbon\Carbon::parse($event->event_date)->format('F d, Y - h:i A') }}</p>
                        <p><strong>Location:</strong> {{ $event->location }}</p>
                        <p><strong>Category:</strong> {{ $event->category }}</p>
                        <p><strong>Capacity:</strong> {{ $event->capacity }} Attendees</p>
                        <p><strong>Ticket Price:</strong> ${{ number_format($event->ticket_price, 2) }}</p>
                        <p><strong>RSVP Deadline:</strong> {{ \Carbon\Carbon::parse($event->rsvp_deadline)->format('F d, Y') }}</p>
                        <p><strong>Contact:</strong> {{ $event->organizer_contact }}</p>
                        <p><strong>Additional Notes:</strong> {{ $event->additional_notes ?? 'None' }}</p>
                        <p><strong>Visibility:</strong> {{ $event->visibility }}</p>
                        <!-- Set Status Dropdown -->
                        <div class="mt-3">
                <strong>Set Status:</strong>
                <div class="dropdown d-inline-block ms-2">
                    <!-- Button reflects the current status -->
                    <button class="btn {{ $event->status === 'Approved' ? 'btn-success' : ($event->status === 'Rejected' ? 'btn-danger' : 'btn-outline-secondary') }} dropdown-toggle"
                            type="button" id="setStatusDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ $event->status ?? 'Set Status' }}
                    </button>

        <!-- Dropdown Menu -->
        <ul class="dropdown-menu" aria-labelledby="setStatusDropdown">
            <!-- Approve Option -->
            <li>
                <form action="{{ route('updateeventstatus', ['id' => $event->id, 'status' => 'Approved']) }}" method="POST" onsubmit="return confirmAction('approve');">
                    @csrf
                    <button class="dropdown-item text-success" type="submit">
                        <i class="fas fa-check-circle"></i> Approve
                    </button>
                </form>
            </li>
            <!-- Reject Option -->
            <li>
                <form action="{{ route('updateeventstatus', ['id' => $event->id, 'status' => 'Rejected']) }}" method="POST" onsubmit="return confirmAction('reject');">
                    @csrf
                    <button class="dropdown-item text-danger" type="submit">
                        <i class="fas fa-times-circle"></i> Reject
                    </button>
                </form>
            </li>
        </ul>
    </div>
</div>
            </div>

         </div>
                </div>
                <!-- Back Button -->
                <div class="text-center mt-4">
                    <a href="{{ route('admineventapproval') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Back to Event Approval
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- JavaScript for Confirmation Prompt -->
<script>
    function confirmAction(action) {
        let message = `Are you sure you want to ${action} this event?`;
        return confirm(message);
    }
</script>