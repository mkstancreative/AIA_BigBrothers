<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OfficialController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.user.index');
});

Route::middleware(['guest:admin'])->group(function(){
    Route::controller(AuthController::class)->group(function(){
        Route::get('/login', 'createLogin')->name('login');
        Route::post('/login', 'storeAdmin')->name('admin.store');
    });
    Route::controller(UserController::class)->name('user.')
    ->group(function(){
        Route::get('/', 'index')->name('index');
        Route::get('/index', 'index')->name('index');
        Route::get('/about', 'indexAbout')->name('about');
        Route::get('/contact', 'indexContact')->name('contact');
        Route::get('/register', 'indexRegister')->name('register');
        Route::get('/become-a-member', 'createRegister')->name('create');
        Route::post('/become-a-member', 'storeRegister')->name('store');
        Route::get('/blog-details/{id}', 'showBlog')->name('show');
    });

    

});
Route::middleware(['auth:admin'])->group(function () {

    Route::controller(AuthController::class)
    ->group(function () {
        Route::post('/logout', 'logout')->name('logout');
        Route::get('/home', 'createHome')->name('dashboard');
        Route::get('/change-password', 'createChangePassword')->name('change-password');
        Route::post('/change-password', 'storeChangePassword')->name('change-password.store');
    });

    Route::controller(MemberController::class)
    ->prefix('members')
    ->name('members.')
    ->group(function () {
            Route::get('/', 'indexMember')->name('index');
            Route::get('/create', 'createMember')->name('create');
            Route::post('/', 'storeMembers')->name('store');
            Route::get('/activate/{id}', 'showMember')->name('show');
            Route::put('/activate/{id}', 'updateMember')->name('update');
            Route::delete('/{id}', 'destroyMember')->name('delete');
    });

    Route::controller(OfficialController::class)
    ->prefix('officials')
    ->name('officials.')
    ->group(function () {
        Route::get('/', 'indexOfficials')->name('index');    
        Route::post('/', 'storeOfficials')->name('store');      
        Route::get('/{id}', 'showOfficials')->name('show');     
        Route::delete('/{id}', 'destroyOfficials')->name('destroy'); 
    });


    Route::controller(BlogController::class)
    ->prefix('blogs')
    ->name('blogs.')
    ->group(function () {
            Route::get('/', 'createBlog')->name('index');
            Route::post('/', 'storeBlog')->name('store');
            Route::get('/{id}', 'showBlog')->name('show');
            Route::put('/{id}', 'updateBlog')->name('update');
            Route::delete('/{id}', 'destroyBlog')->name('delete');
        });


   
});