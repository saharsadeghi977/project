<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
  use App\Http\Controllers\Auth;
  use App\Http\Controllers\usercontroller;
  use App\Http\Controllers\back\usercontroller as uc ;
  use App\Http\Controllers\back\AdminController AS AD;
   use App\Http\Controllers\back\categorycontroller AS CA;
   use App\Http\Controllers\back\productController AS PR;


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



Route::get('/profile/{user}', [UserController::class ,'edit'])->name('profile')->middleware(['auth', 'verified']);
Route::post('/update/{user}', [usercontroller::class ,'update'])->name('profileupdate');


Route::prefix('admin')->middleware('checkrole')->group(function () {
    Route::get('/', [AD::class,'index'])->name('admin.index');
    Route::get('/users', [uc::class,'index'])->name('admin.users');
    Route::get('/profile/{user}', [uc::class,'edit'])->name('admin.profile');
    Route::post('/profileupdate/{user}', [uc::class ,'update'])->name('admin.profileupdate');
    Route::get('/users/delete/{user}', [uc::class,'destroy'])->name('admin.user.delete');
   
});

Route::prefix('admin/categories')->middleware('checkrole')->group(function () {
  Route::get('/', [CA::class ,'index'])->name('admin.categories');
  Route::post('/store', [CA::class ,'store'])->name('admin.categories.store');
  Route::get('/edit/{category}', [CA::class ,'edit'])->name('admin.categories.edit');
  Route::post('/update/{category}', [CA::class ,'update'])->name('admin.categories.update');
  Route::get('/destroy/{category}', [CA::class ,'destroy'])->name('admin.categories.destroy');
});


Route::prefix('admin/products')->middleware('checkrole')->group(function () {
  Route::get('/', [PR::class , 'index'])->name('admin.products');
  Route::get('/create', [PR::class ,'create'])->name('admin.products.create');
  Route::post('/store', [PR::class ,'store'])->name('admin.products.store');
  Route::get('/edit/{products}', [PR::class,'edit'])->name('admin.products.edit');
  Route::post('/update/{products}', [PR::class,'update'])->name('admin.products.update');
  Route::get('/destroy/{products}', [PR::class,'destroy'])->name('admin.products.destroy');
  
});





                          



Route::middleware('auth')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store'])->name('registersave');
  
});







  Route::get('/login', [showLoginForm::class, 'show'])->name('login');
  Route::get('/', [front\HomeController::class ,'index'])->name('home');

 Route::get('/', function () {
         return view('front.index');
 
       })->name('home');
require __DIR__.'/auth.php';
Route::get('/profile/{user}', [UserController::class ,'edit'])->name('profile')->middleware(['auth', 'verified']);
Route::post('/update/{user}', [usercontroller::class ,'update'])->name('profileupdate');
