<?php

namespace App\Http\Controllers;

use App\Models\DepartmentNotices;
use App\Models\OralTest;
use App\Models\TermTest;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Nette\Utils\Json;
use PhpParser\Node\Expr\Cast\String_;
use Symfony\Component\HttpKernel\Event\RequestEvent;

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
        $termTestA = TermTest::all()->where('div','=','A');
        $termTestB = TermTest::all()->where('div','=','B');
        return view('main.termTestTimeTable',compact(['sem','termTestA','termTestB']));
    }
  
    public function oralPracticalTimeTable(Request $request){
        $sem = $request->id;
        $oralTestA = OralTest::all()->where('div','=','A');
        $oralTestB = OralTest::all()->where('div','=','B');
        return view('main.oralPracticaltimetable',compact(['sem','oralTestA','oralTestB']));
    }

    public function downloadPDF(Request $request){
        $sem = $request->id;
        $oralA = $request->oralTestA;
        $oralB = $request->oralTestB;
        return view('main.downloadScreen', compact(['sem','oralA','oralB']));
    }
}
