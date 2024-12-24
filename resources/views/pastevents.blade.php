<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="color: white;">
            {{ __('Past Events') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="    
            margin-top: 2%;
            height: 296px;
            margin-bottom: 2%;">
                <div class="container-fluid px-4">
                    <div class="row" style="margin-top: 35px;">
                        @foreach($events as $event)
                            <div class="card" style="width: 33%; margin:10px;">
                                <img src="{{ asset('storage/events/' . $event->event_image) }}" alt="Event Image" style="width: 100%; height: auto;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $event->title }}</h5>
                                    <p class="card-text">{{ $event->description }}</p>
                                    <p class="card-text"><strong>Date:</strong> {{ $event->event_date }}</p>
                                    <p class="card-text"><strong>Status:</strong> {{ $event->status }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
