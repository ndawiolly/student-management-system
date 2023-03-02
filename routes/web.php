<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/ad_dash/admin_index', [PagesController::class, 'adminIndex'])->name('admin_dashboard');
Route::get('/ad_dash/st_classes/create_class', [PagesController::class, 'classes'])->name('class');
Route::get('/ad_dash/st_classes/manage_class', [PagesController::class, 'manageClass'])->name('m_class');
Route::get('/ad_dash/st_classes/edit', [PagesController::class, 'classEdit'])->name('edit_class');

Route::get('/ad_dash/subjects/create_subject', [PagesController::class, 'createSub'])->name('create_sub');
Route::get('/ad_dash/subjects/manage_subject', [PagesController::class, 'manageSub'])->name('manage_sub');
