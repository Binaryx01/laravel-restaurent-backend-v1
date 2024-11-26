<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Your custom routes for the menu pages
Route::get('/starter', function () {
    return view('starter');
})->name('starter');

Route::get('/main-course', function () {
    return view('main-course');
})->name('main-course');

Route::get('/drinks', function () {
    return view('drinks');
})->name('drinks');




Route::get('/', function () {
    return redirect()->route('dashboard'); // Redirect to Dashboard by default
});

Route::get('/dashboard', function () {
    return view('backend.dashboard'); // Path to the dashboard view
})->name('dashboard');

Route::get('/products', function () {
    return view('backend.products'); // Path to the products view
})->name('products');

Route::get('/categories', function () {
    return view('backend.categories'); // Path to the categories view
})->name('categories');

Route::get('/reports', function () {
    return view('backend.reports'); // Path to the reports view
})->name('reports');

Route::get('/settings', function () {
    return view('backend.settings'); // Path to the settings view
})->name('settings');


Route::get('/staff', function () {
    return view('backend.staff'); // Path to the reports view
})->name('staff');










// Ensure auth.php is loaded at the end
require __DIR__.'/auth.php';
