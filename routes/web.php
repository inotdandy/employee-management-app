<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Backend\CityController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\StateController;
use App\Http\Controllers\Backend\CountryController;
use App\Http\Controllers\Backend\DepartmentController;
use App\Http\Controllers\Backend\ChangePasswordController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('user', UserController::class);
Route::post('user/{user}/change_password', [ChangePasswordController::class, 'changePassword'])->name('user.change_password');
Route::resource('country', CountryController::class);
Route::resource('state', StateController::class);
Route::resource('city', CityController::class);
Route::resource('department', DepartmentController::class);
Route::resource('employee', EmployeeController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::any('/{any}', function(){
    return view('employees.index');
})->where('any', '.*');

