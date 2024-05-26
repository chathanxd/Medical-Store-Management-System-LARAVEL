<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MedController;
 
Route::get('/', function () {
    return view('welcome');
});
 
Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});
 
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});



Route::get('medicines/create', [MedController::class, 'create'])->name('create');
Route::post('medicines/create', [MedController::class, 'createPost']);


Route::get('medicines/index', [medController::class,'showList']);

Route::get('medicines/{id}/edit', [MedController::class, 'edit'])->name('medicines.edit');
Route::post('medicines/{id}/edit', [MedController::class, 'update'])->name('medicines.update');

Route::get('medicines/{id}/delete', [MedController::class, 'delete'])->name('medicines.delete');
Route::delete('medicines/{id}/delete', [MedController::class, 'destroy'])->name('medicines.destroy');