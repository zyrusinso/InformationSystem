<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Admin;

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



Route::get('/', [App\Http\Controllers\AdminController::class, 'index']);


Auth::routes();

Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth']
], function() {
    
    Route::get('', [App\Http\Controllers\AdminController::class, 'index']);
    Route::get('student', [App\Http\Controllers\StudentController::class, 'index']);
    Route::post('student', [App\Http\Controllers\StudentController::class, 'store']);
    Route::get('student/register', function(){
        return view('student.studentRegister');
    });
    Route::patch('{id}', [App\Http\Controllers\AdminController::class, 'update'])->name('changepass');

});

Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->middleware('auth');


Route::group([
    'prefix' => 'profile',
    'middleware' => ['auth']
], function() {
    
    Route::get('{id}', [App\Http\Controllers\ProfileController::class, 'index']);
    Route::get('{id}/grades', [App\Http\Controllers\StudentGradesController::class, 'index']);
    Route::get('{id}/edit', [App\Http\Controllers\ProfileController::class, 'edit']);
    Route::patch('{id}', [App\Http\Controllers\ProfileController::class, 'update']);
    Route::delete('delete/{id}', [App\Http\Controllers\ProfileController::class, 'destroy']);

});

Route::group([
    'prefix' => 'user',
    'middleware' => ['auth', 'Admin']
], function() {
    
    Route::get('', [App\Http\Controllers\UserController::class, 'index']);
    Route::get('{id}/edit', [App\Http\Controllers\UserController::class, 'edit']);
    Route::delete('delete/{id}', [App\Http\Controllers\UserController::class, 'destroy']);
    Route::patch('{id}', [App\Http\Controllers\UserController::class, 'update']);


});



