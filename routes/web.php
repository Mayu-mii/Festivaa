<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\UserMiddleware;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EventssController;
use App\Http\Controllers\AdminController;


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

//events
Route::middleware(['auth', UserMiddleware::class])->group(function () {
    Route::get('/events', [EventssController::class, 'index'])->name('events');
    Route::post('/storeevent', [EventssController::class, 'store'])->name('storeevent');
    Route::delete('/events/{id}', [EventssController::class, 'destroy'])->name('deleteevent');
    Route::get('/organizereventdetails/{id}', [EventssController::class, 'show'])->name('organizereventdetails');
    Route::get('/editevent/{id}', [EventssController::class, 'edit'])->name('editevent');
    Route::put('/updateevent/{id}', [EventssController::class, 'update'])->name('updateevent');
    Route::delete('/deleteevent/{id}', [EventssController::class, 'destroy'])->name('deleteevent');

    Route::get('/dashboard', [EventssController::class, 'dashboard'])->name('dashboard');
    Route::put('/events/{id}/done', [EventssController::class, 'markAsDone'])->name('doneevent');
});

//admin

Route::middleware('auth')->group(function () {
    Route::get('/admindashboard', function () {
        if (Auth::user()->role === 'admin') {
            return app()->make(AdminController::class)->admindashboard();
        }
        abort(403, 'Unauthorized Access');
    })->name('admindashboard');

    Route::get('/admineventapproval', function () {
        if (Auth::user()->role === 'admin') {
            return app()->make(AdminController::class)->admineventapproval();
        }
        abort(403, 'Unauthorized Access');
    })->name('admineventapproval');

    Route::get('/admineventdetails/{id}', function ($id) {
        if (Auth::user()->role === 'admin') {
            return app()->make(AdminController::class)->showEventDetails($id);
        }
        abort(403, 'Unauthorized Access');
    })->name('admineventdetails');

    Route::post('/admineventdetails/{id}/{status}', function ($id, $status) {
        if (Auth::user()->role === 'admin') {
            return app()->make(AdminController::class)->updateStatus($id, $status);
        }
        abort(403, 'Unauthorized Access');
    })->name('updateeventstatus');
});