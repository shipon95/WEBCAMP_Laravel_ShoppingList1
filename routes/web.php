<?php
declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShoppingListController;
use App\Http\Controllers\RandomController;
use App\Http\Controllers\TopController;

use App\Http\Controllers\CompletedShoppingListController;

use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\UserController as AdminUserController;


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

// 買い物リスト
Route::get('/', [AuthController::class, 'index'])->name('front.index');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/chatbot', [ChatbotController::class, 'index']);
Route::post('/chatbot', [ChatController::class, 'index']);

// 会員登録
Route::prefix('/user')->group(function () {
    Route::get('/register', [UserController::class, 'index'])->name('front.user.register');
    Route::post('/register', [UserController::class, 'register'])->name('front.user.register.post');
    Route::delete('/delete/{shopping_list_id}', [ShoppingListController::class, 'delete'])->whereNumber('shopping_list_id')->name('delete');
     Route::post('/complete/{shopping_list_id}', [ShoppingListController::class, 'complete'])->whereNumber('shopping_list_id')->name('complete');
});

// 認可処理
Route::middleware(['auth'])->group(function () {
    Route::prefix('/shopping_list')->group(function () {
     Route::get('/top', [TopController::class, 'top']);
     Route::get('/random', [RandomController::class, 'random']);
    Route::get('/list', [ShoppingListController::class, 'list'])->name('front.list');
    Route::post('/register', [ShoppingListController::class, 'register']);
    });
       Route::get('/completed_shopping_list/list', [CompletedShoppingListController::class, 'list']);
  Route::get('/logout', [AuthController::class, 'logout']);
});

// 管理画面
Route::prefix('/admin')->group(function () {
    Route::get('', [AdminAuthController::class, 'index'])->name('admin.index');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login');
    // 認可処理
    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/top', [AdminHomeController::class, 'top'])->name('admin.top');
        Route::get('/user/list', [AdminUserController::class, 'list'])->name('admin.user.list');
    });
    // ログアウト
    Route::get('/logout', [AdminAuthController::class, 'logout']);
});

