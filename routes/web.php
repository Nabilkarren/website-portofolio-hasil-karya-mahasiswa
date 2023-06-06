<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\UserController;

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

// Route::get('/home', function () {
//     return view('home');
// });
Route::get('/', [UserController::class, 'guest'])->name('guest.home');

Route::get('/login', [UserController::class, 'index'])->name('guest.login');

Route::get('/karya', [UserController::class, 'lihatKarya'])->name('lihat.karya');

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');

Route::get('/my-work', [UserController::class, 'myWork'])->name('user.work');

Route::get('/work-detail', [UserController::class, 'myWorkDetail'])->name('user.work.detail');

Route::get('/add-work', [UserController::class, 'addWork'])->name('user.work.create');

Route::get('/edit-karya', [UserController::class, 'editKarya'])->name('user.work.edit');

Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
