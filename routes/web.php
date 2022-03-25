<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FacultyController;

use App\Models\DepartmentNotices;

use Illuminate\Support\Facades\Route;

// Main Home Routes
Route::get('/', function (){ 
    $notices = DepartmentNotices::all()->sortByDesc('created_at');
    return view('main.home', compact(['notices'])); })->name('home');
Route::get('/about', function (){ return view('main.about'); })->name('about');
Route::get('/noticeBoard', [DashboardController::class, 'notices'])->name('notice');
Route::get('/notice/{id}', [DashboardController::class, 'displayNotice'])->name('displayNotice');
Route::get('/labExams', function (){ return view('main.lab'); })->name('lab');
Route::get('/oralPracticalTimeTable/{id}', [DashboardController::class, 'oralPracticalTimeTable'])->name('oralPracticalTimeTable');
Route::get('/termExams', function (){ return view('main.term'); })->name('term');
Route::get('/termTestTimeTable/{id}', [DashboardController::class, 'termTestTimeTable'])->name('termTestTimeTable');


// Download PDF
Route::get('/downlaodPDF', [DashboardController::class,'downloadPDF'])->name('downloadPDF');


// Faculty Routes
Route::get('/labExamScheduler', [FacultyController::class, 'index'])->name('labExamScheduler');
Route::get('/createLabSchedule', [FacultyController::class, 'createLabSchedule'])->name('createLabSchedule');
Route::post('/storeLabInDB', [FacultyController::class, 'storeLabInDB'])->name('storeLabInDB');
Route::get('/facultyDashboard', [DashboardController::class, 'index'])->name('facultyDashboard');


// Admin Routes
Route::get('/seatingArrangement', [AdminController::class, 'seatingArrangement'])->name('seatingArrangement');

Route::get('/viewUsers', [AdminController::class, 'viewUsers'])->name('viewUsers');
Route::get('/registerSpecificUsers', [AdminController::class, 'registerSpecificUsers'])->name('registerSpecificUsers');
Route::get('/editUserInfo', [AdminController::class, 'editUserInfo'])->name('editUserInfo');
Route::post('/updateAdminInfo', [AdminController::class, 'updateAdminInfo'])->name('updateAdminInfo');

Route::get('/createNotice', [AdminController::class, 'createNotice'])->name('createNotice');
Route::post('/image_upload', [AdminController::class, 'upload'])->name('upload');
Route::post('/createNotice', [AdminController::class, 'storeNotice']);
Route::delete('/deleteNotice/{notice}', [AdminController::class,'destroyNotices'])->name('deleteNotice');

Route::get('/addLabs', [AdminController::class, 'addLabs'])->name('addLabs');
Route::post('/createLabInDB', [AdminController::class, 'storeLabs'])->name('createLabInDB');
Route::get('/editLabSchedule', [AdminController::class, 'editLabSchedule'])->name('editLabSchedule');
Route::delete('/deleteLab/{lab}', [AdminController::class,'destroyLab'])->name('deleteLab');

Route::get('/addSubjects', [AdminController::class, 'addSubjects'])->name('addSubjects');
Route::post('/createSubjectInDB', [AdminController::class, 'storeSubjects'])->name('createSubjectInDB');
Route::delete('/deleteSubject/{subject}', [AdminController::class,'destroySubject'])->name('deleteSubject');

Route::delete('/deleteOralExam/{oral}', [AdminController::class,'destroyOralExam'])->name('deleteOralExam');

Route::get('/createTermSchedule', [AdminController::class, 'createTermSchedule'])->name('createTermSchedule');
Route::post('/addTermDateInDB', [AdminController::class, 'storeTermTesDate'])->name('addTermDateInDB');
Route::delete('/deleteTermExam/{term}', [AdminController::class,'destroyTermExam'])->name('deleteTermExam');

Route::get('/externalFacultyDetails', [AdminController::class, 'externalFacultyDetails'])->name('externalFacultyDetails');
Route::delete('/deleteExternal/{external}', [AdminController::class,'destroyExternalDetails'])->name('deleteExternal');

// Exam Documents Panel
Route::get('/examDocsPanel', [AdminController::class, 'examDocsPanel'])->name('examDocsPanel');
Route::get('/facultySuppCounter', [AdminController::class, 'facultySuppCounter'])->name('facultySuppCounter');
Route::get('/blockDataDisplay', [AdminController::class, 'blockDataDisplay'])->name('blockDataDisplay');

Route::get('/adminDashboard', [DashboardController::class, 'index'])->name('adminDashboard');
Route::get('/adminPanel', [AdminController::class, 'index'])->name('adminPanel');



// Auth Routes
Route::post('/logout',[LogoutController::class, 'store'])->name('logout');
Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'store']);

Route::get('/register',[RegisterController::class, 'index'])->name('register');
Route::post('/register',[RegisterController::class, 'store']);


// Route::get('/editUserDetails', [AdminController::class, 'editUserDetails'])->name('editUserDetails');
// Route::post('/updateUserDetails', [AdminController::class, 'updateUserDetails'])->name('updateUserDetails');