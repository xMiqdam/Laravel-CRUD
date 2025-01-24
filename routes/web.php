<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\admin\StudentAdminController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\admin\DepartmentAdminController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\admin\GradeAdminController;
use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Grade;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [HomeController::class, 'index']);

Route::get('/contact',[ContactController::class, 'index']);

Route::get('/students',[StudentController::class, 'index']);

Route::get('/student-admin',[StudentAdminController::class, 'index']);

Route::get('/grade',[GradeController::class, 'index']);

Route::get('/grade-admin',[GradeAdminController::class, 'index']);

Route::get('/department',[DepartmentController::class, 'index']);

Route::get('/department-admin',[DepartmentAdminController::class, 'index']);

Route::prefix('students')->group(function () {
    Route::get('/', [StudentController::class, 'index']);
    Route::get('/{student}', [StudentController::class, 'show']);
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::prefix('students')->group(function () {
        Route::get('/', [\App\Http\Controllers\admin\StudentAdminController::class, 'index']);
        Route::get('/create', [\App\Http\Controllers\admin\StudentAdminController::class, 'create']);
        Route::post('/store', [\App\Http\Controllers\admin\StudentAdminController::class, 'store']);
        Route::get('/edit/{student}', [\App\Http\Controllers\admin\StudentAdminController::class, 'edit']);
        Route::put('/update/{student}', [\App\Http\Controllers\admin\StudentAdminController::class, 'update']);
        Route::delete('/delete/{student}', [\App\Http\Controllers\admin\StudentAdminController::class, 'destroy']);
    });

    Route::prefix('grades')->group(function () {
        Route::get('/', [\App\Http\Controllers\admin\GradeAdminController::class, 'index']);
        Route::get('/create', [\App\Http\Controllers\admin\GradeAdminController::class, 'create']);
        Route::post('/store', [\App\Http\Controllers\admin\GradeAdminController::class, 'store']);
        Route::get('/edit/{grade}', [\App\Http\Controllers\admin\GradeAdminController::class, 'edit']);
        Route::put('/update/{grade}', [\App\Http\Controllers\admin\GradeAdminController::class, 'update']);
    });

    Route::prefix('departments')->group(function () {
        Route::get('/', [\App\Http\Controllers\admin\DepartmentAdminController::class, 'index']);
        Route::get('/create', [\App\Http\Controllers\admin\DepartmentAdminController::class, 'create']);
        Route::post('/store', [\App\Http\Controllers\admin\DepartmentAdminController::class, 'store']);
        Route::get('/edit/{department}', [\App\Http\Controllers\admin\DepartmentAdminController::class, 'edit']);
        Route::put('/update/{department}', [\App\Http\Controllers\admin\DepartmentAdminController::class, 'update']);
    });
});
