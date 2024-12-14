<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\UserMiddleware;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/categories', function () {
    return view('categories');
})->name('categories');

Route::get('/faqs', function () {
    return view('faqs');
})->name('faqs');

Route::get('/eventsgeneral', function () {
    return view('eventsgeneral');
})->name('eventsgeneral');

Route::get('/usereventdetails', function () {
    return view('usereventdetails');
})->name('usereventdetails');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/events', function () {
        return view('events');
    })->name('events');
    Route::get('/createevent', function () {
        return view('createevent');
    })->name('createevent');

    Route::get('admin/profile', function () {
        return dd('admin profile page');
    })->name('adminprofile');

    Route::get('/editevent', function () {
        return view('editevent');
    })->name('editevent');

    Route::get('/organizereventdetails', function () {
        return view('organizereventdetails');
    })->name('organizereventdetails');

    Route::get('/mailinglist', function () {
        return view('mailinglist');
    })->name('mailinglist');

    Route::get('/admindashboard', function () {
        return view('admindashboard');
    })->name('admindashboard');

    Route::get('/admineventapproval', function () {
        return view('admineventapproval');
    })->name('admineventapproval');

    Route::get('/admineventdetails', function () {
        return view('admineventdetails');
    })->name('admineventdetails');

    Route::get('/blogs',[UserController::class,'index']); 
    Route::get('/blogs-create',[UserController::class,'create']);
    Route::get('/blogs/{id}', [UserController::class, 'show']);
    Route::post('/blogs', [UserController::class, 'store']);
    Route::get('/blogs/{id}/edit', [UserController::class, 'edit']);
    Route::put('/blogs/{id}', [UserController::class, 'update']);
    Route::get('/usercreate', [UserController::class, 'userCreate']);
    Route::post('/post', [PostController::class, 'store'])->name('post.store');
    Route::get('/showblog/{id}', [UserController::class, 'showBlog'])->name('showBlog'); 
    Route::get('/editblog/{id}', [UserController::class, 'editBlog'])->name('editBlog');
    Route::put('/updateblog/{id}', [UserController::class, 'updateBlog'])->name('updateBlog');
});