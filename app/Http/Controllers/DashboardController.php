<?php

namespace App\Http\Controllers;

use App\Models\DepartmentNotices;
use App\Models\OralTest;
use App\Models\TermTest;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        if(auth()->user()->account_type == '0'){
            return view('faculty.dashboard');
        } 
        else if (auth()->user()->account_type == '1'){
            $notices = DepartmentNotices::all()->where('user_id','=',auth()->user()->id);
            return view('admin.dashboard', compact(['notices']));
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

    public function termTestTimeTable(Request $request){
        $sem = $request->id;
        $termTestDates = TermTest::all();
        return view('main.termTestTimeTable',compact(['sem','termTestDates']));
    }
  
    public function oralPracticalTimeTable(Request $request){
        $sem = $request->id;
        $oralTestDates = OralTest::all();
        return view('main.oralPracticaltimetable',compact(['sem','oralTestDates']));
    }
}
