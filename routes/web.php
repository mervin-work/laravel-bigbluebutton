<?php

use App\Http\Controllers\BBB;
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
    dd(bigbluebutton()->all());
    return view('welcome');
});


Route::get('createRoom', [BBB::class, 'index']);
Route::get('joinRoom', [BBB::class, 'joinRoom']);
