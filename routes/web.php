<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ForewordController;
use App\Http\Controllers\frontend\ClubsController;
use App\Http\Controllers\frontend\ContactUsController;
use App\Http\Controllers\frontend\AboutsController;
use App\Http\Controllers\frontend\EventsController;
use App\Http\Controllers\frontend\GalleriesController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\OtherssController;
use App\Http\Controllers\frontend\SchoolsController;
use App\Http\Controllers\frontend\StaffsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PerformerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');});
Route::get('/',[HomeController::class,'index'])->name('home');

//about
Route::get('about_us/',[AboutsController::class,'index'])->name('about.index');
Route::get('articles/',[EventsController::class,'index'])->name('event.index');
Route::get('/events/view/{id}',[EventsController::class, 'ViewAll']);
//frontend

Route::get('contactus/',[ContactUsController::class,'create'])->name('contact.create');
Route::post('contact_store',[ContactUsController::class,'store'])->name('contact.store');
Route::get('staff',[StaffsController::class,'index'])->name('staff.index');
Route::get('staff/category/{category}',[StaffsController::class,'filter'])->name('staff.filter');

Route::get('gallery',[GalleriesController::class,'index'])->name('gallery.index');
Route::get('clubs',[ClubsController::class,'index'])->name('club.index');
Route::get('school',[SchoolsController::class,'index'])->name('school.index');
Route::get('other_activities',[OtherssController::class,'index'])->name('activities.index');

//backend
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('staffs',StaffController::class)->middleware('auth');
Route::resource('events',EventController::class)->middleware('auth');
Route::post('upload/',[EventController::class,'upload'])->middleware('auth')->name('events.upload');
Route::resource('forewords',ForewordController::class)->middleware('auth');
Route::resource('abouts',AboutController::class)->middleware('auth');
Route::resource('galleries',GalleryController::class)->middleware('auth');
Route::resource('contacts',ContactController::class)->middleware('auth')->except('create','store');
Route::resource('performers',PerformerController::class)->middleware('auth');
Route::resource('programs',ProgramController::class)->middleware('auth');

require __DIR__.'/auth.php';