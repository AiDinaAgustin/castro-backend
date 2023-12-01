<?php

use Clockwork\Storage\Search;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PodcastController;

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
//     return view('home');
// });

Route::get('/live', function () {
    return view('live');
});

Route::get('/cari', [SearchController::class, 'index']);

Route::get('/{podcast:slug}', [PodcastController::class, 'show']);

Route::get('/', [PodcastController::class, 'index']);




