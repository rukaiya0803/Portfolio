<?php

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

Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('home');
Route::get('/admin/dashboard', [App\Http\Controllers\PagesController::class, 'dashboard'])->name('admin.dashboard');


Route::get('/admin/main', [App\Http\Controllers\MainPagesController::class, 'index'])->name('admin.main');
Route::put('/admin/main', [App\Http\Controllers\MainPagesController::class, 'update'])->name('admin.main.update');


Route::get('/admin/portfolios/create', [App\Http\Controllers\PortfolioPagesController::class, 'create'])->name('admin.portfolios.create');
Route::put('/admin/portfolios/create', [App\Http\Controllers\PortfolioPagesController::class, 'store'])->name('admin.portfolios.store');
Route::get('/admin/portfolios/list', [App\Http\Controllers\PortfolioPagesController::class, 'list'])->name('admin.portfolios.list');
Route::get('/admin/portfolios/edit/{id}', [App\Http\Controllers\PortfolioPagesController::class, 'edit'])->name('admin.portfolios.edit');
Route::post('/admin/portfolios/update/{id}', [App\Http\Controllers\PortfolioPagesController::class, 'update'])->name('admin.portfolios.update');
Route::delete('/admin/portfolios/destroy/{id}', [App\Http\Controllers\PortfolioPagesController::class, 'destroy'])->name('admin.portfolios.destroy');



//Route::get('/admin/services', [App\Http\Controllers\PagesController::class, 'services'])->name('admin.services');
//Route::get('/admin/about', [App\Http\Controllers\PagesController::class, 'about'])->name('admin.about');

Route::post('/contact', [App\Http\Controllers\ContactFormController::class, 'store'])->name('contact.store');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
