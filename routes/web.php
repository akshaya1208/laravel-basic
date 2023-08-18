<?php

use App\Http\Controllers\Basiccontroller;
use Illuminate\Http\Request;
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

Route::get('/',action:[Basiccontroller::class,"home"])->name("home");

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::post("/result",function(Request $request){
    $name=$request->input("name");
    $email=$request->input("email");
    return view("/result",["name"=>$name,"email"=>$email]);
});