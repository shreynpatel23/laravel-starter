<?php

use App\Http\Controllers\PersonController;
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
    return view('home');
});

Route::get('/courses', [
    'uses' => 'App\Http\Controllers\CourseController@index',
    'as' => 'courses.index'
]);

Route::get('persons/trash/{id}', [PersonController::class, 'trash'])->name('persons.trash');
Route::get('persons/trashed/', [PersonController::class, 'trashed'])->name('persons.trashed');
Route::get('persons/restore/{id}', [PersonController::class, 'restore'])->name('persons.restore');

Route::resource('persons', PersonController::class);
