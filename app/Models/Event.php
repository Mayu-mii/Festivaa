<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    public function user()
{
    return $this->belongsTo(User::class);
}

    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'event_date',
        'location',
        'category',
        'capacity',
        'ticket_price',
        'rsvp_deadline',
        'event_image',
        'organizer_contact',
        'visibility',
        'additional_notes',
        'user_id',
    ];
}
