<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\Homepage;
use App\Http\Controllers\Back\Dashboard;
use App\Http\Controllers\Back\Auth;
/*
|--------------------------------------------------------------------------
| Back Root
|--------------------------------------------------------------------------
*/

Route::get('/admin', [Dashboard::class, 'index']);
Route::get('/admin/login', [Auth::class, 'login'])->name('admin.login');


/*
|--------------------------------------------------------------------------
| Front Root
|--------------------------------------------------------------------------
*/

Route::get('/', [Homepage::class, 'index'])->name('index');
Route::get('/sayfa',[Homepage::class,'index']);
Route::get('/kategori/{category}', [Homepage::class, 'category'])->name('category');
Route::get('/iletisim', [Homepage::class, 'contact'])->name('contact');

Route::post('/iletisim',[Homepage::class,'contactpost'])->name('contact.post');

Route::get('/{category}/{slug}', [Homepage::class, 'single'])->name('single');
Route::get('/{sayfa}', [Homepage::class, 'page'])->name('page');