<?php

use App\Http\Controllers\App\AboutController;
use App\Http\Controllers\App\ContactsController;
use App\Http\Controllers\App\HomeController;
use App\Http\Controllers\App\NewsController;
use App\Http\Controllers\App\ProductController;
use App\Http\Controllers\App\ProjectController;
use App\Http\Controllers\App\ServiceController;
use App\Http\Controllers\App\StudyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| App Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts.index');
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{category}', [NewsController::class, 'category'])->name('news.category');
Route::get('/news/{news}', [NewsController::class, 'post'])->name('news.post');
Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/products2', [ProductController::class, 'index2'])->name('product.index2');
Route::get('/products/{category}', [ProductController::class, 'category'])->name('product.category');
Route::get('/products2/{category}', [ProductController::class, 'category2'])->name('product.category2');
Route::get('/products/{product}', [ProductController::class, 'product'])->name('product.product');
Route::get('/products2/{product}', [ProductController::class, 'product2'])->name('product.product2');
Route::get('/projects', [ProjectController::class, 'index'])->name('project.index');
Route::get('/projects/{category}', [ProjectController::class, 'category'])->name('project.category');
Route::get('/projects/{project}', [ProjectController::class, 'project'])->name('project.project');
Route::get('/services', [ServiceController::class, 'index'])->name('service.index');
Route::get('/service/{category}', [ServiceController::class, 'category'])->name('service.category');
Route::get('/service/{service}', [ServiceController::class, 'service'])->name('service.service');
Route::get('/study', [StudyController::class, 'index'])->name('study.index');
Route::get('/study/courses', [StudyController::class, 'courses'])->name('study.courses');
Route::get('/study/courses/{course}', [StudyController::class, 'course'])->name('study.course');
Route::get('/study/videos', [StudyController::class, 'videos'])->name('study.videos');
