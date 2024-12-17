<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventssController extends Controller
{
    // Store event data
    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'event_date' => 'required|date|after_or_equal:today',
            'location' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'capacity' => 'required|integer|min:1',
            'ticket_price' => 'required|numeric|min:0',
            'rsvp_deadline' => [
                'required',
                'date',
                function ($attribute, $value, $fail) use ($request) {
                    if (strtotime($value) < strtotime($request->event_date)) {
                        $fail('The RSVP deadline cannot be before the event date.');
                    }
                },
            ],
            'event_image' => 'nullable|image|max:2048',
            'organizer_contact' => 'required|string|max:255',
            'visibility' => 'required|in:Public,Private',
            'additional_notes' => 'nullable|string',
        ]);
    
        // Handle file upload
        $fileName = null;
        if ($request->hasFile('event_image')) {
            $fileName = time() . '.' . $request->event_image->extension();
            $request->event_image->storeAs('public/events', $fileName);
        }
    
        // Create a new Event instance
        $event = new Event();
        $event->user_id = auth()->id(); // Ensure the logged-in user's ID is saved
        $event->title = $request->title;
        $event->description = $request->description;
        $event->event_date = $request->event_date;
        $event->location = $request->location;
        $event->category = $request->category;
        $event->capacity = $request->capacity;
        $event->ticket_price = $request->ticket_price;
        $event->rsvp_deadline = $request->rsvp_deadline;
        $event->organizer_contact = $request->organizer_contact;
        $event->visibility = $request->visibility;
        $event->additional_notes = $request->additional_notes;
        $event->event_image = $fileName;

    
        // Save the event
        $event->save();
    
        // Redirect to events page
        return redirect()->route('events')->with('success', 'Event created successfully!');
    }
    
    
    public function index()
    {
        // Retrieve only the events that belong to the authenticated user
        $events = Event::where('user_id', auth()->id())->get();
        return view('events', compact('events'));
    }


    public function dashboard()
    {
        // Fetch upcoming events (limit to 5)
        $upcomingEvents = Event::where('event_date', '>=', now())
        ->orderBy('event_date', 'asc')
        ->take(5)
        ->get()
        ->map(function ($event) {
            $event->event_date = \Carbon\Carbon::parse($event->event_date); // Ensure it's a Carbon object
            return $event;
        });

        // Event Statistics
        $totalEvents = Event::count();
        $upcomingEventCount = Event::where('event_date', '>=', now())->count();
        $pastEventCount = Event::where('event_date', '<', now())->count();
    
        return view('dashboard', compact('upcomingEvents', 'totalEvents', 'upcomingEventCount', 'pastEventCount'));
    }
    


    public function destroy($id)
    {
        // Find the event by ID
        $event = Event::findOrFail($id);

        // Delete the event
        $event->delete();

        // Redirect to the events list with a success message
        return redirect()->route('events')->with('success', 'Event deleted successfully!');
    }

    public function show($id)
    {
        $event = Event::findOrFail($id); // Retrieve the event by ID
        return view('organizereventdetails', compact('event'));
    }


    public function edit($id)
    {
        // Retrieve event details by ID
        $event = Event::findOrFail($id);
    
        // Pass the event data to the edit form view
        return view('editevent', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);
    
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'event_date' => 'required|date',
            'location' => 'required|string|max:255',
            'category' => 'required|string',
            'capacity' => 'required|integer',
            'ticket_price' => 'required|numeric',
            'rsvp_deadline' => 'required|date',
            'organizer_contact' => 'required|string|max:255',
            'event_image' => 'nullable|image|max:2048',
            'additional_notes' => 'nullable|string',
            'visibility' => 'required|in:Public,Private', // Ensure visibility is validated
        ]);
    
        // Handle image upload
        if ($request->hasFile('event_image')) {
            $imagePath = $request->file('event_image')->store('events', 'public');
            $validated['event_image'] = $imagePath;
        }
    
        // Update the event
        $event->update($validated);
    
        return redirect()->route('events')->with('success', 'Event updated successfully!');
    }
    
    
}    