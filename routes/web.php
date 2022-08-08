<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsControllers;

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

Route::get('/', [ViewsControllers::class, 'home'])->name('home');
Route::get('/about_us', [ViewsControllers::class, 'about'])->name('about');
Route::get('/service', [ViewsControllers::class, 'service'])->name('service');

