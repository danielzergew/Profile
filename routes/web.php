<?php

use App\Http\Controllers\controllerAchievements;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/education', function () {
    return view('education');
});

// Route::get('/achievements', function () {
//     return view('achievements');
// });

Route::get('/experiencesandskills', function () {
    return view('experiencesandskills');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/achievements', [controllerAchievements::class, 'index']);

Route::get('/achievements/{slug}', [controllerAchievements::class, 'single']);
