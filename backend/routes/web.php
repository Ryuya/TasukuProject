<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes();
Route::get('/',[\App\Http\Controllers\TopPageController::class, 'index'])->name('top');

Route::group(['middleware' => ['auth']], function () {
    Route::post('/{user_id}/create/project',[\App\Http\Controllers\ProjectController::class, 'create'])->name('createProject');
    Route::get('/{project_id}/edit/project/',[\App\Http\Controllers\ProjectController::class, 'showEdit'])->name('showEditProject');
    Route::post('/{project_id}/edit/project/',[\App\Http\Controllers\ProjectController::class, 'editStore'])->name('editStoreProject');
    Route::post('/{project_id}/delete/project/',[\App\Http\Controllers\ProjectController::class, 'delete'])->name('DeleteProject');
});

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
