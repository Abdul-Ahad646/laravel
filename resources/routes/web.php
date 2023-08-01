<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BaseController;


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

//student  page route  baseController

route::get('student/student',[BaseController::class, 'student'])->name('student');
route::get('student/registration',[BaseController::class, 'registration'])->name('registration');
route::get('student/profile',[BaseController::class, 'profile'])->name('profile');
route::get('student/course/add',[BaseController::class, 'courseAdd'])->name('courseAdd');

//admin page route basecontroller

route::get('admin',[BaseController::class, 'admin'])->name('admin');
route::get('admin/department/add',[BaseController::class, 'department'])->name('department');
route::get('admin/course/add',[BaseController::class, 'course'])->name('course');
route::get('admin/department/view',[BaseController::class, 'departmentView'])->name('departmentView');
route::get('admin/student/view',[BaseController::class, 'studentView'])->name('studentView');
route::get('admin/search',[BaseController::class, 'search'])->name('search');

