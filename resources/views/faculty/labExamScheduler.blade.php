@extends('layout.app')

@section('content')

    <div class="d-flex flex-column align-items-center justify-content-center">
        <div class="bg-light px-5 w-100 py-3 text-center mb-2">
            <h3 class="font-weight-bold">Lab Exam Scheduler</h3>
        </div>
    </div>

    <div class="mx-5 d-flex flex-column">
        <form>
            @csrf
            <h3>Internal Faculty Details</h3>
            <label class="sr-only" for="factID">ID Number</label>
            <input type="number" class="form-control mb-2 mr-sm-2" name="factID" id="factID" placeholder="202101">
            
            <label class="sr-only" for="fname">First Name</label>
            <input type="text" class="form-control mb-2 mr-sm-2" name="fname" id="fname" placeholder="first name">

            <label class="sr-only" for="lname">Last Name</label>
            <input type="text" class="form-control mb-2 mr-sm-2" name="lname" id="lname" placeholder="last name">
        
            <br>
            <h3>External Faculty Details</h3>
            <label class="sr-only" for="exName">External Name</label>
            <input type="text" class="form-control mb-2 mr-sm-2" name="exName" id="exName" placeholder="External Name">

            <label class="sr-only" for="exCollege">External College/Institute</label>
            <input type="text" class="form-control mb-2 mr-sm-2" name="exCollege" id="exCollege" placeholder="External College/Institute">

            <label class="sr-only" for="exExperience">External Experience</label>
            <input type="number" class="form-control mb-2 mr-sm-2" name="exExperience" id="exExperience" placeholder="External Experience">

            <label class="sr-only" for="exEmail">External Email</label>
            <input type="email" class="form-control mb-2 mr-sm-2" name="exEmail" id="exEmail" placeholder="External Email">

            <label class="sr-only" for="exPhone">External Phone Number</label>
            <input type="text" class="form-control mb-2 mr-sm-2" name="exPhone" id="exPhone" placeholder="External Phone Number">

            <button type="submit" class="btn text-light font-weight-bold" style="background-color:rgb(128,33,33);">Submit</button>
            <button type="reset" class="btn text-light font-weight-bold" style="background-color:rgb(128,33,33);">Reset</button>
        </form>
    </div>


@endsection