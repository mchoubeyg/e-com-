<?php


use App\Http\Controllers\Userscontroller;
use App\Http\Controllers\ProductController;

/********* 
use App\Http\Controllers\yadav;
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
****/





Route::get("/login",[Userscontroller::class,'login'])->middleware('isLoggedIn');
Route::get("/registration",[Userscontroller::class,'registration'])->middleware('isLoggedIn');
Route::post("/register-user",[Userscontroller::class,'registerUser'])->name('register-user');
Route::post("/login-user",[Userscontroller::class,'loginUser'])->name('login-user');



Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});


Route::get("/",[ProductController::class,'index']);
Route::get("/mobiles",[ProductController::class,'electronics']);
Route::get("/fashion",[ProductController::class,'fashion']);
Route::view("/contact","contactus");
Route::post("contact",[ProductController::class,'contact']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::post("add_to_cart",[ProductController::class,'addTocart']);
Route::get("cartlist",[ProductController::class,'cartList']);
Route::get("removecart/{id}",[ProductController::class,'removeCart']);
Route::get("ordernow",[ProductController::class,'orderNow']);
Route::post("orderplace",[ProductController::class,'orderPlace']);
Route::get("myorders",[ProductController::class,'myOrders']);
