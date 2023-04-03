<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\StudentController;
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

// Auth::routes(['register'=> false]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::prefix('/ad_dash')->middleware(['auth', 'logAdmin'])->group(function(){
Route::group([
    'middleware'=>['auth', 'logAdmin'],
    'prefix'=> "/ad_dash"
],function(){

    Route::get('/admin_index', [PagesController::class, 'adminIndex'])->name('admin_dashboard');

    Route::get('/st_classes/create_class', [PagesController::class, 'classes'])->name('class');
    Route::post('/st_classes/class', [PagesController::class, 'create_c'])->name('create_class');
    Route::get('/st_classes/manage_class', [PagesController::class, 'manageClass'])->name('m_class');
    Route::delete('/st_classes/manage_class/{id}', [PagesController::class, 'destroyClass'])->name('delete_class');
    Route::get('/st_classes/edit/{id}', [PagesController::class, 'classEdit'])->where("id","[0-9]+")->name('edit_class');
    Route::patch('/st_classes/edit/update/{id}', [PagesController::class, 'update_class'])->name('update class');

    // subject
    Route::get('/subjects/create_subject', [PagesController::class, 'createSubject'])->name('subject');
    Route::post('/subjects/subject', [PagesController::class, 'createSub'])->name('create sub');
    Route::get('/subjects/manage_subject', [PagesController::class, 'manageSub'])->name('manage_sub');
    Route::delete('/subjects/manage_subject/{id}', [PagesController::class, 'deleteSub'])->name('delete subject');
    Route::get('/subjects/edit_sub/{id}', [PagesController::class, 'editSub'])->where("id","[0-9]+")->name('edit_sub');
    Route::patch('/subjects/edit_sub/update/{id}', [PagesController::class, 'updateSub'])->name('update_sub');

    Route::get('/subjects/add_subject_combo', [PagesController::class, 'combo'])->name('sub_combo');
    Route::post('/subjects/subject_combo', [PagesController::class, 'subCombo'])->name('combo');
    Route::get('/subjects/manage_subject_combo', [PagesController::class, 'subComboMan'])->name('sub_combo_mang');
    Route::get('/subject_combination/manage_subject', [PagesController::class, 'mangSub'])->name('sub_combine');

    Route::get('/students_record', [PagesController::class, 'stuRec'])->name('students_record');
    // send pin
    Route::get('/accept/{id}', [PagesController::class, 'accept'])->name('accept_student');
    Route::patch('/accept/update/{id}', [PagesController::class, 'sendPin'])->name('pin');

    Route::get('/result/add_result', [ResultController::class, 'prepResult'])->name('prepare result');
});


Route::group(['prefix'=> "student_dash"],function(){
    Route::get('wait', [StudentController::class, 'firstPage'])->name('wait');
});
