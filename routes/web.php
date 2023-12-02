<?php

use App\Models\Posting;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;

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

// Index (main page)
Route::get('/', [ShowController::class, 'show']);

// Show form 
Route::get('/create', [ShowController::class, 'showForm']);

// Store form data to DB
Route::post('/create', function() {
    Posting::create([
        'pickup' => request('pickup'),
        'dropoff' => request('dropoff'),
        'date' => request('date'),
        'weight' => request('weight'),
        'price' => request('price'),
        'broker' => request('broker'),
    ]);
    return redirect('/create');
});