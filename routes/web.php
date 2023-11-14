<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AccessController;
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

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'postRegister']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('post-login');


Route::group([
    "middleware" => [
        "auth"
    ],
], function () {

    Route::group([
        "middleware" => [
            'role:admin'
        ],
        "prefix"     => "admin/"
    ], function () {
        Route::get('/', [UserController::class, 'homeAdmin'])->name('admin-home');
    });


    Route::group([
        "middleware" => [
            'permission:show users|edit user|delete user | create and assign role'
        ],
        "prefix"     => "admin/"
    ], function () {
        Route::get('/users', [UserController::class, 'userList']);
        Route::get('/roles', [AccessController::class, 'roles']);
        Route::get('/create-role', [AccessController::class, 'create']);
        Route::get('/access-control', [AccessController::class, 'showEditAccessForm']);
    });

    Route::group([
        "middleware" => [
            'permission:show users|edit user|delete user'
        ],
        "prefix"     => "admin/"
    ], function () {
        Route::get('/users', [UserController::class, 'userList']);
    });

    Route::group([
        "middleware" => [
            'permission:show attendances|give attendance|edit attendance'
        ],
        "prefix"     => "manager/"
    ], function () {
        Route::get('/', [UserController::class, 'homeManager'])->name('manager-home');

    });

    Route::group([
        "middleware" => [
            'permission:show attendances|give attendance'
        ],
        "prefix"     => "employee/"
    ], function () {
        Route::get('/', [UserController::class, 'homeEmployee'])->name('employee-home');
    });

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
