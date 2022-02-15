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
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    
    public function __construct(){
        $this->middleware(['auth']);
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

    public function editUserInfo(){
        return view('admin.editUserInfo');
    }

    public function updateAdminInfo(Request $request){
        $this->validate($request, [
            'newName'=>'required',
            'password'=>'required'
        ]);

        $hashedPassword = Hash::make($request->password);
        User::where('id','=',auth()->user()->id)->update([
            'name'=>$request->newName,
            'password'=>$hashedPassword,
        ]);

        Session::flash('success', 'Details updated successfully');
        return redirect()->route('adminDashboard');
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

    public function destroyNotices(DepartmentNotices $notice){
        $notice->delete();
        return back();
    }


    // Oral/Practical Section
    public function destroyOralExam(OralTest $oral){
        $oral->delete();
        return back();
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
            'div'=>'required',
            'batch'=>'required',
            'subName'=>'required|not_in:none',
            'examDate'=>'required',
            'startTime'=>'required',
            'endTime'=>'required'
        ]);

        TermTest::create([
            'semester'=>$request->sem,
            'div'=>$request->div,
            'batch'=>$request->batch,
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
        $term->delete();
        return back();
    }


    // Oral Test Section
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
            'sem'=>'required|not_in:1,2',
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
        return back();
    }

    public function destroySubject(Subject $subject){
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
            'sem'=>'required|not_in:1,2',
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
        return back();
    }

    public function destroyLab(Lab $lab){
        $lab->delete();
        return back();
    }


    // External Faculty Section
    public function externalFacultyDetails(){
        $externals = ExternalFaculty::all();
        return view('admin.externalFacultyDetails',compact(['externals']));
    }

    public function destroyExternalDetails(ExternalFaculty $external){
        $external->delete();
        return back();
    }


    // Seating Arrangement Section
    public function seatingArrangement(){
        return view('seatingArrangement.seatingArrangement');
    }

    
}