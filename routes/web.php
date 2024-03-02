<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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






Route::prefix('admin')->middleware('checkrole')->group(function () {
    Route::get('/', [back\AdminController::class,'index'])->name('admin.index');
    Route::get('/users', [back\UserController::class,'index'])->name('admin.users');
    Route::get('/profile/{user}', [back\UserController::class,'edit'])->name('admin.profile');
    Route::post('/profileupdate/{user}', [back\UserController::class ,'update'])->name('aadmin.profileupdate');
    Route::get('/users/delete/{user}', [back\UserController::class,'destroy'])->name('admin.user.delete');
   
});


Route::get('/profile/{user}', [UserController::class ,'edit'])->name('profile')->middleware(['auth', 'verified']);
Route::post('/update/{user}', [UserController::class ,'update'])->name('profileupdate');



                          



Route::middleware('auth')->group(function () {
    Route::get('/register', [auth\RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [auth\RegisteredUserController::class, 'store'])->name('registersave');
  
});







// Route::get('/login', [showLoginForm::class, 'show'])->name('login');
Route::get('/', [front\HomeController::class ,'index'])->name('home');

 Route::get('/', function () {
         return view('front.index');
 
       })->name('home');
require __DIR__.'/auth.php';
