@extends('layout.app')

@section('content')

    <style>
        .table td{
            border: 1px solid #000;
        }
    </style>

    <div class="d-flex flex-column align-items-center justify-content-center">
        <div class="bg-light px-5 w-100 py-3 text-center mb-2">
            <h3 class="font-weight-bold">Create/Edit Term Schedule</h3>
        </div>
    </div>

    <div class="row mb-4" style="padding: 0; margin: 0">
        <div class="col-4">
            <div class="mx-5 d-flex">
                <form action="{{ route('addTermDateInDB') }}" method="post">
                    @csrf
                    <h3>Select Semester</h3>
                    <label class="sr-only" for="sem">Semester</label>
                    <select class="custom-select mb-4 mr-sm-2" name="sem" id="sem">
                        @for ($i = 3; $i < 9; $i++)
                            <option value={{ $i }}>{{ $i }}</option>
                        @endfor
                    </select>

                    <h3>Select Division</h3>
                    <label class="sr-only" for="div">Division</label>
                    <select class="custom-select mb-4 mr-sm-2" name="div" id="div">
                        <option value="A">A</option>
                        <option value="B">B</option>
                    </select>

                    <h3>Select Batch</h3>
                    <label class="sr-only" for="batch">Batch</label>
                    <select class="custom-select mb-4 mr-sm-2" name="batch" id="batch">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
        
                    <br>
                    <h3>Select Subject</h3>
                    <label class="sr-only" for="subName">Select Subject</label>
                    <select class="custom-select mb-4 mr-sm-2" name="subName" id="subName">
                        <option value="none">Select an option</option>
                        @foreach ($subjects as $subject)
                            <option value="{{ $subject->subject_name }}">{{ $subject->subject_name }}</option>                        
                        @endforeach
                    </select>
                
                    <br>
                    <h3>Select Date</h3>
                    <label class="sr-only" for="examDate">Select Date</label>
                    <input type="date" class="form-control mb-1 mr-sm-2" name="examDate" id="examDate">
        
                    <br>
                    <h3>Start Time</h3>
                    <label class="sr-only" for="startTime">Start Time</label>
                    <input type="time" class="form-control mb-1 mr-sm-2" name="startTime" id="startTime">
        
                    <br>
                    <h3>End Time</h3>
                    <label class="sr-only" for="endTime">End Time</label>
                    <input type="time" class="form-control mb-3 mr-sm-2" name="endTime" id="endTime">
        
                    <button type="submit" class="btn text-light font-weight-bold" style="background-color:rgb(128,33,33);">Submit</button>
                    <button type="reset" class="btn text-light font-weight-bold" style="background-color:rgb(128,33,33);">Reset</button>
                </form>
            </div>
        </div>

        <div class="col-8 text-center">
            <div class="row">
                <div class="col-12">
                    @for ($i = 3; $i < 9; $i++)
                    <h5 class="font-weight-bold text-center">Semester {{ $i }}</h5>
                    <table class="table table-sm table-bordered">
                        <thead class="thead-dark">
                          <tr>
                            <th>Subject</th>
                            <th>Date</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Division</th>
                            <th>Batch</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                            <tbody>
                                @foreach ($termDates as $term)
                                @if ($term->semester == $i)
                                    <tr>
                                    <td>{{ $term->subName }}</td>
                                    <td>{{ $term->examDate }}</td>
                                    <td>{{ $term->startTime}}</td>
                                    <td>{{ $term->endTime}}</td>
                                    <td>{{ $term->div }}</td>
                                    <td>{{ $term->batch }}</td>
                                    <td>
                                        <form action="{{ route('deleteTermExam', $term) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                    </tr>
                                @endif    
                            @endforeach
                        </tbody>
                    </table>
                    @endfor
                </div>
            </div>
        </div>
    </div>

    

@endsection