<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class AdminController extends Controller
{
    // Display all events for approval
    public function admineventapproval()
    {
        $events = Event::all(); // Retrieve all events
        return view('admineventapproval', compact('events'));
    }
    public function showEventDetails($id)
    {
        $event = Event::findOrFail($id); // Fetch the event by ID
        return view('admineventdetails', compact('event')); // Pass the event to the view
    }
    public function updateStatus($id, $status = null)
    {
        $event = Event::findOrFail($id);
    
        if ($status === 'Approved' || $status === 'Rejected' || $status === null) {
            $event->status = $status;
            $event->save();
    
            return redirect()->back()->with('success', 'Event status updated successfully!');
        }
    
        return redirect()->back()->with('error', 'Invalid status provided.');
    }
    public function dashboard()
{
    $events = Event::all(); // Fetch all events
    $totalEvents = Event::count();
    $upcomingEvents = Event::where('event_date', '>=', now())->count();
    $pastEvents = Event::where('event_date', '<', now())->count();

    return view('admindashboard', compact('events', 'totalEvents', 'upcomingEvents', 'pastEvents'));
}




}
