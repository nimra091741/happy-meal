<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\Auth\RegisterController;
// use App\Http\Controllers\HomeController;
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
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/createcategory', function () {
        return view('createcategory');
    })->name('createcategory');

    Route::get('/createmenuitem', function () {
        return view('createmenuitem');
    })->name('createmenuitem');


    Route::get('/reviewsandratings', function () {
        return view('reviewsandratings');
    })->name('reviewsandratings');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
});

// Auth::routes();

require __DIR__ . '/auth.php';


  // });

    // Route::get('/complete-registration', [RegisterController::class, 'completeRegistration'])->name('complete.registration');
    // Route::middleware(['2fa'])->group(function () {

    //     Route::get('/home', [HomeController::class, 'index'])->name('home');
    //     Route::post('/2fa', function () {
    //         return redirect(route('home'));
    //     })->name('2fa');
