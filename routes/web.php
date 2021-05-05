<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\datbaseconnection;

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

    return view('smartbuilder');
});

Route::get('/construction', function () {
    return view('Construction');
});
Route::get('/smartbuilder.blade.php', function () {

    return view('smartbuilder');
});
Route::get('/plumber.blade.php', function () {
    return view('plumber');
});
Route::get('/tile.blade.php', function () {
    return view('tile');
});
Route::get('/electrical.blade.php', function () {
    return view('electrical');
});
Route::get('/furniture.blade.php', function () {
    return view('furniture');
});
Route::get('/painting.blade.php', function () {
    return view('painting');
});
Route::get('/materialshop.blade.php', function () {
    return view('materialshop');
});
Route::get('/furnitureshop.blade.php', function () {
    return view('furniture');
});
Route::get('/plumbershop.blade.php', function () {
    return view('plumber');
});
Route::get('/tilesmaterialshop.blade.php', function () {
    return view('tilesmaterialshop');
});
Route::get('/electricshop.blade.php', function () {
    return view('electricshop');
});

Route::get('/tileslabor.blade.php', function () {
    return view('tileslabor');
});
Route::get('/laborplumber.blade.php', function () {
    return view('laborplumber');
});
Route::get('/labormeason.blade.php', function () {
    return view('labormeason');
});

Route::get('/electricianlabor.blade.php', function () {
    return view('electricianlabor');
});
Route::get('/furniturelabor.blade.php', function () {
    return view('furniturelabor');
});
Route::get('/easysearch.blade.php', function () {
    return view('searchresult');
});
