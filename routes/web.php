<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\classroomController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\UkmController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'auth']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/students', [studentController::class, 'index'])->middleware('auth');
Route::get('/student/{id}', [studentController::class, 'show'])->middleware(['auth', 'must-adminordosen']);
Route::get('/students-add', [studentController::class, 'create'])->middleware(['auth', 'must-adminordosen']);
Route::post('/students', [studentController::class, 'store'])->middleware('auth');
Route::get('/student-edit/{id}', [studentController::class, 'edit'])->middleware(['auth', 'must-adminordosen']);
Route::put('/students-update/{id}', [studentController::class, 'update'])->middleware(['auth','must-adminordosen']);
Route::get('/student-delete/{id}', [studentController::class, 'delete'])->middleware(['auth', 'must-admin']);

Route::get('/classroom', [classroomController::class, 'index'])->middleware('auth')->middleware('auth');
Route::get('/classroom-detail/{id}', [classroomController::class, 'show'])->middleware('auth');
Route::get('/classroom-add', [classroomController::class, 'create'])->middleware('auth');

Route::get('/ukm', [UkmController::class, 'index'])->middleware('auth')->middleware('auth');
Route::get('/ukm-detail/{id}', [UkmController::class, 'show'])->middleware('auth');
Route::get('/ukm-add', [UkmController::class, 'create'])->middleware('auth');

Route::get('/dosen', [DosenController::class, 'index'])->middleware('auth')->middleware('auth');
Route::get('/dosen-detail/{id}', [DosenController::class, 'show'])->middleware('auth');
Route::get('/dosen-add', [DosenController::class, 'create'])->middleware('auth');
