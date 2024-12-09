<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostBlog extends Model
{
    use HasFactory;

    protected $table = 'bloglist';

    protected $fillable = [
        'author',
        'blog_title',
        'blog_content',
        'email',
        'user_id',
        'date_created',
    ];

    public function user()
        {
            return $this->belongsTo(User::class);
        }
}