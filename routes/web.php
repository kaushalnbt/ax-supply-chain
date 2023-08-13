<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Manage\ItemController;
use App\Http\Controllers\Manage\PartController;
use App\Http\Controllers\Manage\ProductController;
use App\Http\Controllers\Manage\SupplierController;
use App\Http\Controllers\Order\ApparelController;
use App\Http\Controllers\Order\SupplementController;
use App\Http\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Order\Apparel\Create;
use App\Http\Livewire\Order\Apparel\ItemList;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'home'])->middleware('auth')->name('home');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::group(['middleware' => 'auth', 'prefix' => 'manage', 'as' => 'manage.'], function () {
    Route::get('/', [HomeController::class, 'manage'])->name('index');
    Route::get('suppliers', [SupplierController::class, 'index'])->name('suppliers');
    Route::get('parts', [PartController::class, 'index'])->name('parts');
    Route::get('items', [ItemController::class, 'index'])->name('items');
    Route::get('products', [ProductController::class, 'index'])->name('products');
});

Route::group(['middleware' => 'auth', 'prefix' => 'order-category', 'as' => 'order.'], function () {
    Route::get('/', [HomeController::class, 'order'])->name('index');
    Route::get('supplements', [SupplementController::class, 'index'])->name('supplements');
    Route::get('apparel', [ApparelController::class, 'index'])->name('apparel');
    Route::get('/create-po', [ItemList::class, 'createPO'])->name('create.po');
    Route::get('/order/apparel/create', App\Http\Livewire\Order\Apparel\Create::class)->name('order.apparel.create');
    Route::get('/create-order', Create::class)->name('order.apparel.create');
    Route::get('items', [ItemController::class, 'index'])->name('items');
    Route::get('products', [ProductController::class, 'index'])->name('products');
});

