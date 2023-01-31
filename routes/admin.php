<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GoodController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\MenuItemController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\StudyController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VacancyController;
use App\Http\Controllers\OrderController;
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

Route::prefix($prefix)->as('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
    Route::post('/settings', [SettingsController::class, 'save']);

    Route::resource('banners', BannerController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('goods', GoodController::class);
    Route::resource('menus', MenuController::class);
    Route::resource('menu-items', MenuItemController::class);
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
