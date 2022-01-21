<?php

namespace App\Http\Controllers;

use App\Models\DepartmentNotices;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index(){
        return view('admin.panel');
    }

    public function viewUsers(){
        $userAdmins = User::all()->where('account_type','=','1');
        $userFaculty = User::all()->where('account_type','=','0');
        return view('admin.viewUsers', compact(['userAdmins','userFaculty']));
    }

    public function registerSpecificUsers(){
        return view('admin.registerSpecific');
    }
    public function editAdminInfo(){
        return view('admin.editAdminInfo');
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

    public function editLabSchedule(){
        return view('admin.editLabSchedule');
    }

    public function editTermSchedule(){
        return view('admin.editTermSchedule');
    }

    public function addSubjects(){
        return view('admin.addSubjects');
    }

    public function addLabs(){
        return view('admin.addLabs');
    }

    public function externalFacultyDetails(){
        return view('admin.externalFacultyDetails');
    }

    public function seatingArrangement(){
        return view('admin.seatingArrangement');
    }
}
