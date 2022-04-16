@extends('layout.app')

@section('content')

    <div class="d-flex flex-column align-items-center justify-content-center">
        <div class="bg-light px-5 w-100 py-3 text-center mb-2">
            <h3 class="font-weight-bold">Add Subjects</h3>
        </div>
    </div>

    <div class="mx-5 d-flex flex-column">
        <form action="{{ route('createSubjectInDB') }}" method="post">
            @csrf
            <h3>Semester</h3>
            <label class="sr-only" for="sem">Semester</label>
            <input type="number" class="form-control mb-2 mr-sm-2" name="sem" id="sem" placeholder="3">
            @error('sem')
                <div class="text-danger mt-2 text-sm">
                    {{ $message }}
                </div>
            @enderror

            <br>
            <h3>Subject Code</h3>
            <label class="sr-only" for="subCode">Subject Code</label>
            <input type="number" class="form-control mb-2 mr-sm-2" name="subCode" id="subCode" placeholder="20201">
        
            <br>
            <h3>Subject Name</h3>
            <label class="sr-only" for="subName">Subject Name</label>
            <input type="text" class="form-control mb-2 mr-sm-2" name="subName" id="subName" placeholder="Subject Name">

            <button type="submit" class="btn text-light font-weight-bold" style="background-color:rgb(128,33,33);">Submit</button>
            <button type="reset" class="btn text-light font-weight-bold" style="background-color:rgb(128,33,33);">Reset</button>
        </form>
    </div>

    <div class="m-5">
        <div id="accordion" role="tablist">
            @for ($i = 3; $i < 9; $i++)
                <div class="card mt-1">
                    <div class="card-header" role="tab" id="heading{{ $i }}">
                        <h5 class="mb-0">
                            <a style="color: black" data-toggle="collapse" href="#collapse{{ $i }}" aria-expanded="true" aria-controls="collapseOne">
                            Semester {{ $i }}
                            </a>
                        </h5>
                    </div>
                
                    <div id="collapse{{ $i }}" class="collapse" role="tabpanel" aria-labelledby="heading{{ $i }}">
                        <div class="card-body">
                            <table class="table table-sm">
                                <thead>
                                  <tr>
                                    <th>Subject Code</th>
                                    <th>Subject Name</th>
                                    <th>Department</th>
                                    <th>Delete</th>
                                  </tr>
                                </thead>
                                @foreach ($subjects as $subject)
                                    @if ($subject->semester == $i)
                                    <tbody>
                                        <tr>
                                          <td>{{ $subject->subject_code }}</td>
                                          <td>{{ $subject->subject_name }}</td>
                                          <td>{{ $subject->department}}</td>
                                          <td>
                                            <form action="{{ route('deleteSubject', $subject) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                          </td>
                                        </tr>
                                      </tbody>
                                    @endif    
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection