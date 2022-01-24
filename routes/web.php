<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FacultyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){ return view('main.home'); })->name('home');

Route::get('/facultyDashboard', [DashboardController::class, 'index'])->name('facultyDashboard');
Route::get('/labExamSheduler', [FacultyController::class, 'index'])->name('labExamScheduler');

Route::get('/adminDashboard', [DashboardController::class, 'index'])->name('adminDashboard');
Route::get('/adminPanel', [AdminController::class, 'index'])->name('adminPanel');
Route::get('/viewUsers', [AdminController::class, 'viewUsers'])->name('viewUsers');
Route::get('/registerSpecificUsers', [AdminController::class, 'registerSpecificUsers'])->name('registerSpecificUsers');
Route::get('/editAdminInfo', [AdminController::class, 'editAdminInfo'])->name('editAdminInfo');
// Route::get('/editUserDetails', [AdminController::class, 'editUserDetails'])->name('editUserDetails');
// Route::post('/updateUserDetails', [AdminController::class, 'updateUserDetails'])->name('updateUserDetails');
Route::get('/createNotice', [AdminController::class, 'createNotice'])->name('createNotice');
Route::post('/createNotice', [AdminController::class, 'storeNotice']);
Route::get('/editLabSchedule', [AdminController::class, 'editLabSchedule'])->name('editLabSchedule');
Route::get('/editTermSchedule', [AdminController::class, 'editTermSchedule'])->name('editTermSchedule');
Route::get('/addSubjects', [AdminController::class, 'addSubjects'])->name('addSubjects');
Route::get('/addLabs', [AdminController::class, 'addLabs'])->name('addLabs');
Route::get('/externalFacultyDetails', [AdminController::class, 'externalFacultyDetails'])->name('externalFacultyDetails');
Route::get('/oralPracticaltimetable', [AdminController::class, 'oralPracticaltimetable'])->name('oralPracticaltimetable');

Route::post('/logout',[LogoutController::class, 'store'])->name('logout');

Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'store']);

Route::get('/register',[RegisterController::class, 'index'])->name('register');
Route::post('/register',[RegisterController::class, 'store']);

Route::get('/noticeBoard', [DashboardController::class, 'notices'])->name('notice');
Route::get('/notice/{id}', [DashboardController::class, 'displayNotice'])->name('displayNotice');

Route::get('/labExams', function (){ return view('main.lab'); })->name('lab');
Route::get('/termExams', function (){ return view('main.term'); })->name('term');
