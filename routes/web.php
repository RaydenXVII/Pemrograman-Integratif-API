<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CollectionController;

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

Route::get('callApiWithToken', [ApiController::class, 'memanggilApi']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/user', function () {
    return view('daftarPengguna');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Rute User
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/userRegistration', [UserController::class, 'create'])->name('userRegistration');
    Route::get('/userView/{user}', [UserController::class, 'show'])->name('userDetail');
    Route::post('/updateUser/{user}', [UserController::class,'edit'])->name('updateUser');
    Route::post('/userRegistration', [UserController::class,'store'])->name('newUser');

    //Rute Collection
    // Collection Router
    Route::get('/koleksi', [CollectionController::class, 'index'])->name('collection');
    Route::get('/koleksiTambah', [CollectionController::class, 'create'])->name('registerCollection');
    Route::get('/collectionView/{collection}', [CollectionController::class, 'show'])->name('collectionDetail');
    Route::post('/koleksiStore', [CollectionController::class, 'store'])->name('newCollection');

});

require __DIR__.'/auth.php';
