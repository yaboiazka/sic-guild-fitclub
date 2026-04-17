<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

use function Pest\Laravel\get;



Route::get('/', [HomeController::class, 'home']);

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register.post');
});

Route::middleware('auth')->group(function () {
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        // namenya nanti akan jadi (dashboard.posts.index) dan seterusnya sesuai dengan pakem resource route
        Route::resource('article', PostController::class)->only(['create', 'edit']);
    });
    Route::get('/likes', [HomeController::class, 'like']);
    Route::get('/saved', [HomeController::class, 'save']);
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
    Route::put('/profile', [AuthController::class, 'profileUpdate'])->name('profile.update');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/user-detail', [HomeController::class, 'UserDetail']);
});

Route::middleware('is_admin')->group(function() {
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::resource('users', UserController::class)->only(['index', 'edit', 'update', 'destroy']);
        Route::resource('article', PostController::class);
    });
});

Route::middleware('is_admin')->group(function() {
    Route::get('/article-approval', [AdminController::class, 'ArticeApproval']);
    Route::get('/manage-users', [AdminController::class, 'ManageUsers']);
    Route::get('/manage-articles', [AdminController::class, 'ManageArticles']);
});
