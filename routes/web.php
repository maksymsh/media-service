<?php

use App\Http\Controllers\Admin\PublishingController;
use App\Http\Controllers\Admin\SortingController;
use App\Http\Controllers\Admin\UploadController;
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

Route::spladeTable();
Route::spladeUploads();
Route::spladePasswordConfirmation();

// Helpers
Route::post('/sorting', [SortingController::class, 'update'])->name('sorting.update');
Route::post('/publishing', [PublishingController::class, 'update'])->name('publishing.update');

// Media Library
Route::post('editor/upload', [UploadController::class, 'editor'])->name('editor.upload');
Route::post('media/upload', [UploadController::class, 'mediaStore'])->name('media.store');
Route::post('media/order', [UploadController::class, 'mediaOrder'])->name('media.order');
Route::patch('media/{media}', [UploadController::class, 'mediaUpdate'])->name('media.update');
Route::delete('media/{media}', [UploadController::class, 'mediaDelete'])->name('media.destroy');
