<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MailingList;
use App\Models\Event; // Import the Event model

class MailingListController extends Controller
{
    public function index()
    {
        // Get all event IDs for the logged-in user
        $events = Event::where('user_id', auth()->id())->pluck('id');
    
        // Retrieve all mailing list entries for those events
        $mailingLists = MailingList::whereIn('event_id', $events)->get();
    
        return view('mailinglist', compact('mailingLists'));
    }

    public function store(Request $request)
{
    $request->validate([
        'event_id' => 'required|exists:events,id',
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:mailing_lists,email',
        'contact_number' => 'required|string|max:15',
    ]);

    // Create the mailing list entry
    MailingList::create([
        'event_id' => $request->event_id,
        'user_id' => auth()->check() ? auth()->id() : null,
        'name' => $request->name,
        'email' => $request->email,
        'contact_number' => $request->contact_number,
    ]);

    // Redirect back to the same page with a success message
    return redirect()->back()->with('success', 'Your details have been saved successfully!');
}

}