<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostBlog;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function store (Request $request){

    $blogdate = $request->validate([
        'author' => 'required',
        'blog_title' => 'required',
        'blog_content' => 'required',
    ]);

    $blogdate['date_created'] = Carbon::now();
    $blogdate['email'] = Auth::user()->email;
    $blogdate['user_id'] = Auth::user()-> email;

    $blogdate = PostBlog::create($blogdate);

    session()->flash('success', 'Blog entry created');

    return redirect('/blogs');

    }
}