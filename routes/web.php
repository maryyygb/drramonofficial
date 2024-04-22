<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Award;

// Calling from Controllers
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EnrollmentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/', function () {
//     return view('front');
// });

Route::get('/', function () {
    return view('parts.index');
});

// ROUTES TO DIFFERENT NAV-LINKS //

// EVENTS
Route::get('/events', function () {
    return view('parts.events');
});


// ABOUT
Route::get('/about', function () {
    return view('parts.about');
});
// ACADEMICS
Route::get('/academics', function () {
    return view('parts.academic');
});
// ENROLLMENT
Route::get('/enrollment', function () {
    return view('parts.enrollment');
});





// ADMIN PAGES
Route::prefix('/admin')->group(function () {
    // AWARD
    Route::get('/about', [AwardController::class, 'index'])->name('award.index');
    Route::get('/award/create', [AwardController::class, 'create'])->name('award.create');
    Route::post('/award', [AwardController::class, 'store'])->name('award.store');


    // EVENTS
    Route::get('/events', [EventController::class, 'index'])->name('event.index');
    Route::get('/events/create', [EventController::class, 'create'])->name('event.create');
    Route::post('/events', [EventController::class, 'store'])->name('event.store');
    Route::get('/events/{id}/edit', [EventController::class, 'edit'])->name('event.edit');
    Route::put('/events/{id}/edit', [EventController::class, 'update'])->name('event.update');
});

// Main Pages to Show What the Admin did to the regular user



// DASHBOARD //
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// MIDDLEWARE FOR NORMAL LOGIN //
Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // admin login user can access
    Route::get('/enrollment-list', [EnrollmentController::class, 'index'])->name('enrollment.index');
    Route::delete('/enrollment/{enrollment}/destroy', [EnrollmentController::class, 'destroy'])->name('enrollment.destroy');
});

require __DIR__ . '/auth.php';

// Login User

Route::get('/enrollment/create', [EnrollmentController::class, 'create'])->name('enrollment.create');
Route::post('/enrollment', [EnrollmentController::class, 'store'])->name('enrollment.store');
Route::get('/enrollment/{enrollment}/edit', [EnrollmentController::class, 'edit'])->name('enrollment.edit');
Route::put('/enrollment/{enrollment}/update', [EnrollmentController::class, 'update'])->name('enrollment.update');


// TEACHER ROUTE //

// MIDDLEWARE PRIVATE ROUTES //
Route::middleware('teacher')->prefix('teacher')->group(function () {
    Route::get('/dashboard', [TeacherController::class, 'dashboard'])->name('teacher_dashboard');
    Route::get('/logout', [TeacherController::class, 'logout'])->name('teacher_logout');
});
// PUBLIC ROUTES //
Route::prefix('teacher')->group(function () {
    Route::get('/login', [TeacherController::class, 'login'])->name('teacher_login');
    Route::post('/login-submit', [TeacherController::class, 'login_submit'])->name('teacher_login_submit');
});

Auth::routes();

Route::get('/profile', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
