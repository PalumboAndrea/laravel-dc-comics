<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController as PageController;
use App\Models\Comic;

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


Route::get('/admin', [PageController::class, 'index'])->name('admin.index');
Route::get('/admin/create', [PageController::class, 'create'])->name('admin.create');
Route::get('/admin/{id}', [PageController::class, 'show'])->name('admin.show');
