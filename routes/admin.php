<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GoodController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\MenuItemController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\PublishingController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\SortingController;
use App\Http\Controllers\Admin\StudyController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VacancyController;
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

$prefix = config('admin.prefix');

Route::spladeTable();
Route::spladeUploads();

// Auth routes
Route::middleware(['guest'])->group(function () {
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('login', [AuthController::class, 'login']);
});
Route::any('logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix($prefix)->as('admin.')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::post('/sorting', [SortingController::class, 'update'])->name('sorting.update');
        Route::post('/publishing', [PublishingController::class, 'update'])->name('publishing.update');

        // MEDIA LIBRARY
        Route::post('editor/upload', [UploadController::class, 'editor'])->name('editor.upload');
        Route::post('media/upload', [UploadController::class, 'mediaStore'])->name('media.store');
        Route::post('media/order', [UploadController::class, 'mediaOrder'])->name('media.order');
        Route::patch('media/{media}', [UploadController::class, 'mediaUpdate'])->name('media.update');
        Route::delete('media/{media}', [UploadController::class, 'mediaDelete'])->name('media.destroy');

        Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

        Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
        Route::post('/settings', [SettingsController::class, 'save']);

        Route::resource('banners', BannerController::class);
        Route::resource('categories', CategoryController::class);
        Route::resource('goods', GoodController::class);
        Route::resource('menus', MenuController::class);
        Route::resource('menu_items', MenuItemController::class);
        Route::resource('news', NewsController::class);
        Route::resource('pages', PageController::class);
        Route::resource('products', ProductController::class);
        Route::resource('projects', ProjectController::class);
        Route::resource('roles', RoleController::class);
        Route::resource('services', ServiceController::class);
        Route::resource('studies', StudyController::class);
        Route::resource('users', UserController::class);
        Route::resource('vacancies', VacancyController::class);
        Route::resource('orders', OrderController::class);
    });
});
