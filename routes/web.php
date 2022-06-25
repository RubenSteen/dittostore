<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Examples
|--------------------------------------------------------------------------
|
| Route::get('users', [UserController::class, 'index'])->name('user.index');
| Route::get('user/create', [UserController::class, 'create'])->name('user.create');
| Route::post('user', [UserController::class, 'store'])->name('user.store');
| Route::get('user{user_id}', [UserController::class, 'show'])->name('user.show');
| Route::get('user/{user_id}/edit', [UserController::class, 'edit'])->name('user.edit');
| Route::patch('user/{user_id}', [UserController::class, 'update'])->name('user.update');
| Route::delete('user/{user_id}', [UserController::class, 'delete'])->name('user.delete');
| Route::put('user/{user_id}', [UserController::class, 'restore'])->name('user.restore');
|
| For autodiscovery use {user:id} instead of ${user_id}
*/

/*
|--------------------------------------------------------------------------
| Guests routes (must be unauthenticated)
|--------------------------------------------------------------------------
|
*/

Route::group(['middleware' => ['guest']], function () {
    // Login/Logout routes
    Route::get('login', [LoginController::class, 'create'])->name('login');
    Route::post('login', [LoginController::class, 'store']);

    // Register routes
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);
});

/*
|--------------------------------------------------------------------------
| Routes behind authentication
|--------------------------------------------------------------------------
|
*/
Route::group(['middleware' => ['auth']], function () {

    Route::post('logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');

    Route::get('/account', function () {
        return "You should do something with this page";
    })->name('account');

    /*
    |--------------------------------------------------------------------------
    | Admin Routes
    |--------------------------------------------------------------------------
    |
    */
    Route::group(['middleware' => ['admin'], 'namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
        // Admin routes
    });
});



Route::get('/', function () {
    return inertia('Welcome', [
        'users' => App\Models\User::orderBy('created_at', 'desc')->take(5)->get()
    ]);
})->name('home');

Route::get('/product', function () {
    return inertia('Product');
});

Route::get('/categories', function () {
    return inertia('Categories');
});

Route::get('/cart', function () {
    return inertia('Cart');
})->name('cart');

Route::get('/checkout', function () {
    return inertia('Checkout');
});

Route::get('/order-history', function () {
    return inertia('OrderHistory');
});

Route::get('/purchased', function () {
    return inertia('Purchased');
});


Route::get('newsletter/{newsletter_id}', [NewsletterController::class, 'show'])->name('newsletter.show');
Route::post('newsletter', [NewsletterController::class, 'store'])->name('newsletter');
Route::delete('newsletter', [NewsletterController::class, 'delete'])->name('newsletter');