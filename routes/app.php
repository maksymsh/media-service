<?php

use App\Http\Controllers\App\AboutController;
use App\Http\Controllers\App\ContactsController;
use App\Http\Controllers\App\GoodController;
use App\Http\Controllers\App\HomeController;
use App\Http\Controllers\App\NewsController;
use App\Http\Controllers\App\ProductController;
use App\Http\Controllers\App\ProjectController;
use App\Http\Controllers\App\SeoUrlController;
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

Route::middleware(['splade'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');

    Route::get('/about', [AboutController::class, 'index'])->name('about.index');
    Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts.index');

    Route::get('/news', [NewsController::class, 'index'])->name('news.index');
    Route::get('/news/category/{category}', [NewsController::class, 'category'])->name('news.category');
    Route::get('/news/{news}', [NewsController::class, 'post'])->name('news.post');

    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/category/{category}', [ProductController::class, 'category'])->name('products.category');
    Route::get('/products/{product}', [ProductController::class, 'product'])->name('products.product');

    Route::get('/goods', [GoodController::class, 'index'])->name('goods.index');
    Route::get('/goods/category/{category}', [GoodController::class, 'category'])->name('goods.category');
    Route::get('/goods/{good}', [GoodController::class, 'good'])->name('goods.good');

    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/services/category/{category}', [ServiceController::class, 'category'])->name('services.category');
    Route::get('/services/{service}', [ServiceController::class, 'service'])->name('services.service');

    Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('/projects/category/{category}', [ProjectController::class, 'category'])->name('projects.category');
    Route::get('/projects/{project}', [ProjectController::class, 'project'])->name('projects.project');

    Route::get('/study', [StudyController::class, 'index'])->name('study.index');
    Route::get('/study/courses', [StudyController::class, 'courses'])->name('study.courses');
    Route::get('/study/courses/{course}', [StudyController::class, 'course'])->name('study.course');
    Route::get('/study/videos', [StudyController::class, 'videos'])->name('study.videos');
});

Route::get('/{slug}', SeoUrlController::class)->name('seo-url');
