<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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

Route::get('/', [WebController::class, 'index']);
Route::get('/gioithieu', [WebController::class, 'gioithieu'])->name('gioithieu');
Route::get('/tin', [WebController::class, 'tin'])->name('tin');
Route::get('/chitiet', [WebController::class, 'chitiet'])->name('chitiet');
Route::get('/dangnhap', [WebController::class, 'dangnhap'])->name('dangnhap');
Route::get('/dangky', [WebController::class, 'dangky'])->name('dangky');
Route::get('/quenmk', [WebController::class, 'quenmk'])->name('quenmk');
// admin
Route::get('/admin', [WebController::class, 'admin'])->name('admin');

Route::get('/listus', [WebController::class, 'listus'])->name('listus');
Route::get('/listtin', [WebController::class, 'addtin_'])->name('listtin');

Route::get('/addtin', [WebController::class, 'addtin'])->name('addtin');
Route::post('/addtin', [WebController::class, 'addtin_']);

Route::get('/capnhattin', [WebController::class, 'capnhattin'])->name('capnhattin');

Route::get('/listLT', [WebController::class, 'listLT'])->name('listLT');

Route::get('/addLT', [WebController::class, 'addLT'])->name('addLT');
Route::get('/capnhatLT', [WebController::class, 'capnhatLT'])->name('capnhatLT');
Route::get('/layout', [WebController::class, 'layout'])->name('layout');
