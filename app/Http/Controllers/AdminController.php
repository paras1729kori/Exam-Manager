<?php

namespace App\Http\Controllers;

use App\Models\DepartmentNotices;
use App\Models\ExternalFaculty;
use App\Models\Lab;
use App\Models\OralTest;
use App\Models\Subject;
use App\Models\Subjects;
use App\Models\TermTest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    
    public function __construct(){
        $this->middleware(['auth'])->only(['delete']);
    }

    public function index(){
        return view('admin.panel');
    }


    // Admin Users Section
    public function viewUsers(){
        $userAdmins = User::all()->where('account_type','=','1')->where('department','=','Computer Engineering');
        $userFaculty = User::all()->where('account_type','=','0')->where('department','=','Computer Engineering');
        return view('admin.viewUsers', compact(['userAdmins','userFaculty']));
    }

    public function registerSpecificUsers(){
        return view('admin.registerSpecific');
    }

    public function editAdminInfo(){
        return view('admin.editAdminInfo');
    }

    public function updateAdminInfo(Request $request){
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required'
        ]);
    }

    // Notices Section
    public function createNotice(){
        return view('notices.create');
    }

    public function storeNotice(Request $request){
        $this->validate($request, [
            'title'=>'required|max:255',
            'body'=>'required',
        ]);

        DepartmentNotices::create([
            'title'=>$request->title,
            'body'=>$request->body,
            'user_id'=>auth()->user()->id,
            'department'=>$request->department,
        ]);

        Session::flash('success', 'Notice Created Successfully');
        return redirect()->route('adminPanel');
    }

    
    // Term Test Section
    public function createTermSchedule(){
        $subjects = Subject::all();
        $termDates = TermTest::all();
        return view('admin.createTermSchedule', compact(['subjects','termDates']));
    }

    public function storeTermTesDate(Request $request){
        $this->validate($request, [
            'sem'=>'required',
            'subName'=>'required',
            'examDate'=>'required',
            'startTime'=>'required',
            'endTime'=>'required'
        ]);

        TermTest::create([
            'semester'=>$request->sem,
            'subName'=>$request->subName,
            'examDate'=>$request->examDate,
            'startTime'=>$request->startTime,
            'endTime'=>$request->endTime,
            'user_id'=>auth()->user()->id
        ]);
        
        Session::flash('success', 'Notice Created Successfully');
        return back();
    }

    public function destroyTermExam(TermTest $term){
        $this->authorize('delete', $term);
        $term->delete();
        return back();
    }


    // Lab Test Section
    public function editLabSchedule(){
        $subjects = Subject::all();
        $oralDates = OralTest::all();
        return view('faculty.createLabSchedule', compact(['subjects','oralDates']));
    }


    // Subjects Section
    public function addSubjects(){
        $subjects = Subject::all();
        return view('class.addSubjects', compact(['subjects']));
    }

    public function storeSubjects(Request $request){
        $this->validate($request, [
            'sem'=>'required',
            'subCode'=>'required',
            'subName'=>'required|max:50'
        ]);

        Subject::create([
            'user_id'=>auth()->user()->id,
            'semester'=>$request->sem,
            'subject_code'=>$request->subCode,
            'subject_name'=>$request->subName,
            'department'=>auth()->user()->department
        ]);

        Session::flash('success', 'Subject added successfully');
        return redirect()->route('adminPanel');
    }

    public function destroySubject(Subject $subject){
        $this->authorize('delete', $subject);
        $subject->delete();
        return back();
    }


    // Labs Section
    public function addLabs(){
        $labs = Lab::all();
        return view('class.addLabs', compact(['labs']));
    }

    public function storeLabs(Request $request){
        $this->validate($request, [
            'sem'=>'required',
            'labCode'=>'required',
            'labName'=>'required|max:50'
        ]);

        Lab::create([
            'user_id'=>auth()->user()->id,
            'semester'=>$request->sem,
            'lab_code'=>$request->labCode,
            'lab_name'=>$request->labName,
            'department'=>auth()->user()->department
        ]);

        Session::flash('success', 'Subject added successfully');
        return redirect()->route('adminPanel');
    }

    public function destroyLab(Lab $lab){
        $this->authorize('delete', $lab);
        $lab->delete();
        return back();
    }

    public function externalFacultyDetails(){
        $externals = ExternalFaculty::all();
        return view('admin.externalFacultyDetails',compact(['externals']));
    }

    public function seatingArrangement(){
        return view('seatingArrangement.seatingArrangement');
    }
}



    // public function editUserDetails(){
    //     $users = User::all()->where('department','=',auth()->user()->department);
    //     return view('admin.editFacultyDetails', compact(['users']));
    // }

    // public function updateUserDetails(Request $request){
    //     // dd($request);
    //     $this->validate($request, [
    //         'name' => 'required|max:255',
    //         'password' => 'required|confirmed',
    //         'account_type' => 'required|in:0,1',
    //         'department' => 'required|not_in:null',
    //     ]);

    //     User::->update(['password','account_type','department']);
        
    //     Session::flash('success','Credentials Updated Successfully');
    //     return redirect()->route('adminPanel');
    // }