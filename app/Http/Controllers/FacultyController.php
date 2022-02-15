<?php

namespace App\Http\Controllers;

use App\Models\ExternalFaculty;
use App\Models\OralTest;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FacultyController extends Controller
{
    public function index(){
        return view('faculty.labExamScheduler');
    }

    public function createLabSchedule(Request $request){
        // add external faculty details to db
        $this->validate($request, [
            'exName'=>'required',
            'exCollege'=>'required',
            'exExperience'=>'required',
            'exEmail'=>'required|email',
            'exPhone' => 'required|numeric',
        ]);

        if(ExternalFaculty::where('exEmail','=',$request->exEmail)->exists()){
            $subjects = Subject::all();
            $oralDates = OralTest::all();
            return view('faculty.createLabSchedule', compact(['subjects','oralDates']));
        } 
        else {
            ExternalFaculty::create([
                'fullname'=>$request->exName,
                'experience'=>$request->exExperience,
                'college'=>$request->exCollege,
                'phone_no'=>$request->exPhone,
                'exEmail'=>$request->exEmail,
                'user_id'=>auth()->user()->id
            ]);
            Session::flash('success', 'External Faculty added successfully');
    
            $subjects = Subject::all();
            $oralDates = OralTest::all();
            return view('faculty.createLabSchedule', compact(['subjects','oralDates']));
        }
    }

    public function storeLabInDB(Request $request){
        $this->validate($request, [
            'sem'=>'required',
            'div'=>'required',
            'batch'=>'required',
            'subName'=>'required|not_in:none',
            'examDate'=>'required',
            'startTime'=>'required',
            'endTime'=>'required'
        ]);

        OralTest::create([
            'semester'=>$request->sem,
            'div'=>$request->div,
            'batch'=>$request->batch,
            'subName'=>$request->subName,
            'examDate'=>$request->examDate,
            'startTime'=>$request->startTime,
            'endTime'=>$request->endTime,
            'user_id'=>auth()->user()->id
        ]);
        
        Session::flash('success', 'Oral schedule created successfully');
        return back();
    }
}
