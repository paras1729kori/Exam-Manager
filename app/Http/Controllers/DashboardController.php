<?php

namespace App\Http\Controllers;

use App\Models\DepartmentNotices;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        if(auth()->user()->account_type == '0'){
            return view('faculty.dashboard');
        } 
        else if (auth()->user()->account_type == '1'){
            return view('admin.dashboard');
        }
    }

    public function notices(){
        $CSnotices = DepartmentNotices::all()->where('department','=','Computer Engineering');
        $ITnotices = DepartmentNotices::all()->where('department','=','Information Technology');
        $EXTCnotices = DepartmentNotices::all()->where('department','=','Electronics and Telecommunication');
        $ETRXnotices = DepartmentNotices::all()->where('department','=','Electronics Engineering');
        $AIDSnotices = DepartmentNotices::all()->where('department','=','Artificial Intelligence and Data Science');
        return view('main.noticeBoard', compact('CSnotices', 'ITnotices', 'EXTCnotices', 'ETRXnotices', 'AIDSnotices')); 
    }

    public function displayNotice($id){
        $notice = DepartmentNotices::find($id);
        return view('notices.show', compact('notice'));
    }
}
