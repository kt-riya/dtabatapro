<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// Route::get('/',[PostController::class,'homePage']) ->name('home');
Route::get('user',[PostController::class,'userPage']) ->name('user');
Route::get('adduser',[PostController::class,'addPage']) ->name('adduser');
Route::get('save-user',[PostController::class,'savePage']) ->name('save.user');
Route::get('edit-user/{user_id}',[PostController::class,'editPage']) ->name('edit.user');
Route::post('edit-user',[PostController::class,'updateUser']) ->name('update.user');
Route::get('delete-user/{user_id}',[PostController::class,'deleteUser']) ->name('delete.user');
Route::get('view_deleted-user',[PostController::class,'viewDeletedUser']) ->name('view.deleted.user');
Route::get('activate-user/{user_Id}',[PostController::class,'activateUser']) ->name('activate.user');
Route::post('manage-user',[PostController::class,'changeRole']) ->name('change.role');
Route::get('weight-user',[PostController::class,'userWeight']) ->name('weight.user');
Route::get('save-weight',[PostController::class,'saveWeight']) ->name('save.weight');
Route::get('/',[PostController::class,'list']);