@extends('layout.app')

@section('content')

    <div class="d-flex flex-column align-items-center justify-content-center mb-5">
        <div class="bg-light px-5 w-100 py-3 text-center mb-2">
            <h3 class="font-weight-bold">Admin Panel</h3>
        </div>

        <div class="list-group w-50 text-center">
            <a href="{{ route('viewUsers') }}" class="list-group-item list-group-item-action p-3 font-weight-bold" style="color:rgb(128,33,33)">View Users</a>
            <a href="{{ route('registerSpecificUsers') }}" class="list-group-item list-group-item-action p-3 font-weight-bold" style="color:rgb(128,33,33)">Add Users</a>
            {{-- <a href="{{ route('editUserDetails') }}" class="list-group-item list-group-item-action p-3 font-weight-bold" style="color:rgb(128,33,33)">Change Faculty Credentials</a> --}}
            <a href="{{ route('createNotice') }}" class="list-group-item list-group-item-action p-3 font-weight-bold" style="color:rgb(128,33,33)">Create Notices</a>
            <a href="{{ route('editLabSchedule') }}" class="list-group-item list-group-item-action p-3 font-weight-bold" style="color:rgb(128,33,33)">Edit Oral/Practical Schedule</a>
            <a href="{{ route('createTermSchedule') }}" class="list-group-item list-group-item-action p-3 font-weight-bold" style="color:rgb(128,33,33)">Create Term Test Schdeule</a>
            <a href="{{ route('addSubjects') }}" class="list-group-item list-group-item-action p-3 font-weight-bold" style="color:rgb(128,33,33)">Add Subjects</a>
            <a href="{{ route('addLabs') }}" class="list-group-item list-group-item-action p-3 font-weight-bold" style="color:rgb(128,33,33)">Add Labs</a>
            <a href="{{ route('externalFacultyDetails') }}" class="list-group-item list-group-item-action p-3 font-weight-bold" style="color:rgb(128,33,33)">External Faculty Details</a>
          </div>
    </div>
        
@endsection