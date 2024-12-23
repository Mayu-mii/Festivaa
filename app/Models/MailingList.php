<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailingList extends Model
{
    use HasFactory;

    // Define the fillable attributes
    protected $fillable = [
        'event_id',      // Add this line
        'user_id',       // Assuming you have this as well
        'name',
        'email',
        'contact_number',
    ];

    public function event()
{
    return $this->belongsTo(Event::class);
}
}