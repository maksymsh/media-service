<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GoodController;
use App\Http\Controllers\Admin\LayoutController;
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

Route::prefix($prefix)->as('admin.')->group(function () {
    Route::spladeTable();
    Route::spladeUploads();
    Route::spladePasswordConfirmation();

    // Auth routes
    Route::middleware(['guest.admin'])->group(function () {
        Route::get('login', [AuthController::class, 'index'])->name('login');
        Route::post('login', [AuthController::class, 'login']);
    });
    Route::any('logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware(['auth.admin'])->group(function () {
        // Helpers
        Route::post('/sorting', [SortingController::class, 'update'])->name('sorting.update');
        Route::post('/publishing', [PublishingController::class, 'update'])->name('publishing.update');

        // Media Library
//        Route::post('editor/upload', [UploadController::class, 'editor'])->name('editor.upload');
//        Route::post('media/upload', [UploadController::class, 'mediaStore'])->name('media.store');
//        Route::post('media/order', [UploadController::class, 'mediaOrder'])->name('media.order');
//        Route::patch('media/{media}', [UploadController::class, 'mediaUpdate'])->name('media.update');
//        Route::delete('media/{media}', [UploadController::class, 'mediaDelete'])->name('media.destroy');

        // Main
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

        // Content
        Route::resource('pages', PageController::class);
        Route::resource('layouts', LayoutController::class);
        Route::resource('menus', MenuController::class);
        Route::resource('menu_items', MenuItemController::class);
        Route::resource('banners', BannerController::class);

        // Media
        Route::resource('news', NewsController::class);
        Route::resource('goods', GoodController::class);
        Route::resource('products', ProductController::class);
        Route::resource('services', ServiceController::class);
        Route::resource('{category_type}/categories', CategoryController::class);

        // Data
        Route::resource('projects', ProjectController::class);
        Route::resource('studies', StudyController::class);
        Route::resource('vacancies', VacancyController::class);

        // Orders
        Route::resource('orders', OrderController::class);

        // ACL
        Route::resource('users', UserController::class);
        Route::resource('roles', RoleController::class);

        // Settings
        Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
        Route::post('/settings', [SettingsController::class, 'save']);
    });
});
