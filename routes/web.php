<?php

use App\Http\Controllers\Guest\PageController;
use App\Models\Comic;
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
    $comics = DB::table('comics')
                    ->limit(4)
                    ->get();
    $buy = config('comics.buy');
    $links = config('comics.links');
    $socials = config('comics.socials');
    return view('home', compact('comics', 'buy', 'links', 'socials'));
})->name('home');
Route::resource('comics', PageController::class);