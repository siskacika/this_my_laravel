<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasyarakatController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect()->route('Masyarakat.index');
});

Route::resource('Masyarakat', MasyarakatController::class);