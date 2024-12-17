<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class AdminController extends Controller
{
    // Display all events for approval
    public function admineventapproval(Request $request)
{
    // Retrieve the status filter from the query parameters
    $filter = $request->query('status');

    // Fetch events based on the filter
    if ($filter && in_array($filter, ['Pending', 'Approved', 'Rejected'])) {
        $events = Event::where('status', $filter)->get();
    } else {
        $events = Event::all(); // Fetch all events if no filter is applied
    }

    return view('admineventapproval', compact('events', 'filter'));
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
    public function admindashboard()
{
    $events = Event::all(); // Fetch all events
    $totalEvents = Event::count();

    // Calculate counts for statistics
    $upcomingEventCount = Event::where('event_date', '>=', now())->count();
    $pendingEventCount = Event::where('status', 'Pending')->count();
    $approvedEventCount = Event::where('status', 'Approved')->count();
    $rejectedEventCount = Event::where('status', 'Rejected')->count();
    $pastEventCount = Event::where('event_date', '<', now())->count();

    // Fetch pending events
    $pendingEvents = Event::where('status', 'Pending')->get();

    // Pass all variables to the view
    return view('admindashboard', compact(
        'events', 
        'totalEvents', 
        'upcomingEventCount', 
        'pendingEventCount', 
        'approvedEventCount',
        'rejectedEventCount',
        'pastEventCount', 
        'pendingEvents'
    ));
}

}
