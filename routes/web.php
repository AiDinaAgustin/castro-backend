<?php

use Clockwork\Storage\Search;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\CategoryController;

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

Route::get('/cari', [CategoryController::class, 'index']);

Route::get('/{podcast:slug}', [PodcastController::class, 'show']);

Route::get('/', [PodcastController::class, 'index']);

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/cari/{category:slug}', function(Category $category){
    return view('category',[
        "title" => "Post By Category : $category->name",
        "podcasts" => $category->podcasts,
        "category" => $category->name
    ]);
});




