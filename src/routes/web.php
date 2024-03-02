<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\TimeRecordController;
use App\Http\Controllers\WorkController;
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
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/history', function () {
        return view('history');
    })->name('history');
});

Route::post('/start', [WorkController::class, 'start'])->name('start')->middleware('auth');
Route::post('/end', [WorkController::class, 'end'])->name('end')->middleware('auth');
Route::post('/start_break', [WorkController::class, 'startBreak'])->name('start_break')->middleware('auth');
Route::post('/end_break', [WorkController::class, 'endBreak'])->name('end_break')->middleware('auth');

// Route::get('/attendances', [AttendanceController::class, 'attendance']);
// Route::post('/attendances', [AttendanceController::class, 'create']);
