<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Middleware\userMiddleware;
use App\Http\Middleware\bookMiddleware;
use App\Http\Middleware\adminMiddleware;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/home', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/property', [HomeController::class, 'property'])->name('property');

Route::get('/property-detail/{id?}', [HomeController::class, 'property_detail'])->middleware(bookMiddleware::class);

Route::get('/register', [HomeController::class, 'registerView'])->middleware(userMiddleware::class);
Route::post('/frontend/register',[HomeController::class,'addUser']);

Route::get('/login', [HomeController::class, 'login'])->middleware(userMiddleware::class);
Route::post('/frontend/login', [HomeController::class, 'userLogin']);

Route::get('/contact', [HomeController::class, 'contact']);
Route::post('/frontend/contact', [HomeController::class, 'addContact']);

Route::get('logout',[HomeController::class,'logout']);

Route::get('/checkout/{id?}',[HomeController::class,'checkout']);
Route::post('/submit-order', [HomeController::class, 'submit_checkout']);

Route::get('/orderList',[HomeController::class,'order_list']);

Route::post('/mysearch',[HomeController::class,'search']);

// backend
Route::get('/admin/login', [HomeController::class, 'adminLoginView']);
Route::post('/backend/login', [HomeController::class, 'adminLoginAdd']);

Route::get('/admin/propertyAdd', [HomeController::class, 'adminPropertyView'])->middleware(adminMiddleware::class);
Route::post('/backend/propertyAdd', [HomeController::class, 'adminPropertyAdd']);

Route::get('/admin/propertyEdit/{id?}', [HomeController::class, 'adminPropertyEdit'])->middleware(adminMiddleware::class);
Route::post('/backend/propertyEdit', [HomeController::class, 'adminPropertyEditAdd']);

Route::get('admin/logout',[HomeController::class,'adminLogout'])->middleware(adminMiddleware::class);

Route::get('/admin/dashboard', [HomeController::class, 'adminDashboard'])->middleware(adminMiddleware::class);
Route::get('/admin/listing', [HomeController::class, 'adminListing'])->middleware(adminMiddleware::class);
Route::get('/admin/propertyList', [HomeController::class, 'adminPropertyList'])->middleware(adminMiddleware::class);
Route::get('/admin/orderList', [HomeController::class, 'adminOrderList'])->middleware(adminMiddleware::class);
Route::get('/admin/inquiryList', [HomeController::class, 'adminInquiryList'])->middleware(adminMiddleware::class);