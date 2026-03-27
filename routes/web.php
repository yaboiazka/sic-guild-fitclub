<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

use function Pest\Laravel\get;

Route::get('/home', [AdminController::class, 'home']);
Route::get('/manage-articles', [AdminController::class, 'ManageArticles']);
Route::get('/manage-users', [AdminController::class, 'ManageUsers']);
Route::get('/user-detail', [HomeController::class, 'UserDetail']);
Route::get('/article-approval', [AdminController::class, 'home']);
Route::get('/new-article', [AdminController::class, 'NewArticle']);

Route::get('/', function () {
    return view('save-draft');
});
