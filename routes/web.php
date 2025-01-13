<?php

use Illuminate\Support\Facades\Route;

// Auth Routes
// Auth::routes(['register' => false]);
Auth::routes();

// General Routes
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about_us', function () {
    return view('about_us');
})->name('about_us');

Route::get('/contact_us', function () {
    return view('contact_us');
})->name('contact_us');

Route::get('/our_services', function () {
    return view('our_services');
})->name('our_services');

Route::get('/our_gallery', function () {
    return view('our_gallery');
})->name('our_gallery');

// Dashboard Routes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/change_password', [App\Http\Controllers\HomeController::class, 'change_password'])->name('change_password');
Route::post('/update_password/{id}', [App\Http\Controllers\HomeController::class, 'update_password'])->name('update_password');

// Containers Routes
Route::middleware(['auth'])->controller(App\Http\Controllers\ContainersController::class)->group(function() {
    Route::get('/containers','index')->name('containers');
    Route::get('/add_container','create')->name('add_container');
    Route::post('/save_container','store')->name('save_container');
    Route::get('/edit_container/{id}','edit')->name('edit_container');
    Route::post('/update_container/{id}','update')->name('update_container');
});

// Products Routes
Route::middleware(['auth'])->controller(App\Http\Controllers\ProductsController::class)->group(function() {
    Route::get('/products','index')->name('products');
    Route::get('/add_product','create')->name('add_product');
    Route::post('/save_product','store')->name('save_product');
    Route::get('/edit_product/{id}','edit')->name('edit_product');
    Route::post('/update_product/{id}','update')->name('update_product');
});

// Customers Routes
Route::middleware(['auth'])->controller(App\Http\Controllers\CustomersController::class)->group(function() {
    Route::get('/customers','index')->name('customers');
    Route::get('/add_customer','create')->name('add_customer');
    Route::post('/save_customer','store')->name('save_customer');
    Route::get('/edit_customer/{id}','edit')->name('edit_customer');
    Route::post('/update_customer/{id}','update')->name('update_customer');
    Route::get('/customer_ledger/{id}','ledger')->name('customer_ledger');
});

// Expenses Routes
Route::middleware(['auth'])->controller(App\Http\Controllers\ExpensesController::class)->group(function() {
    Route::get('/expenses','index')->name('expenses');
    Route::get('/add_expense','create')->name('add_expense');
    Route::post('/save_expense','store')->name('save_expense');
    Route::get('/edit_expense/{id}','edit')->name('edit_expense');
    Route::post('/update_expense/{id}','update')->name('update_expense');
});

// Orders Routes
Route::middleware(['auth'])->controller(App\Http\Controllers\OrdersController::class)->group(function() {
    Route::get('/orders','index')->name('orders');
    Route::get('/add_order','create')->name('add_order');
    Route::post('/save_order','store')->name('save_order');
    Route::get('/edit_order/{id}','edit')->name('edit_order');
    Route::post('/update_order/{id}','update')->name('update_order');
    Route::get('/print_order_ur/{id}','print_order_receipt_urdu')->name('print_order_ur');
});

// Dispatch Routes
Route::middleware(['auth'])->controller(App\Http\Controllers\DispatchesController::class)->group(function() {
    Route::get('/dispatches','index')->name('dispatches');
    Route::get('/add_dispatch','create')->name('add_dispatch');
    Route::post('/save_dispatch','store')->name('save_dispatch');
    Route::get('/edit_dispatch/{id}','edit')->name('edit_dispatch');
    Route::post('/update_dispatch/{id}','update')->name('update_dispatch');
    Route::get('/print_dispatch_receipt/{id}','print_dispatch_receipt_urdu')->name('print_dispatch_receipt');
    Route::get('/print_gate_pass/{id}','print_gate_pass_urdu')->name('print_gate_pass');
});