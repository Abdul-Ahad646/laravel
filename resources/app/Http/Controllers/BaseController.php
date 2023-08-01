<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    //student route 

    public function student(){
        return view('student.student');
    }
    public function registration(){
        return view('student.registration');
    }
    public function courseAdd(){
        return view('student.courseadd');
    }
    public function profile(){
        
        return view('student.profile');
    }

    //admin route


 public function admin (){
        return view('admin/admin');
    }
 public function course (){
        return view('admin.course');
    }
    public function department(){
        return view('admin/department');
    }
    public function departmentView(){
        return view('admin/departmentView');
    }
    public function search(){
        return view('admin/search');
    }
    public function studentView(){
        return view('admin/studentView');
    }
}
