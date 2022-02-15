@extends('layout.app')

@section('content')

    <div class="d-flex flex-column align-items-center justify-content-center mb-5">
        <div class="bg-light px-5 w-100 py-3 text-center mb-2">
            <h3 class="font-weight-bold">Term Exam Time Tables</h3>
        </div>

        <div class="list-group w-50 text-center">
          @for ($i = 3; $i < 9; $i++)
            <a href="{{ route('termTestTimeTable', [$i]) }}" class="list-group-item list-group-item-action p-3 font-weight-bold" style="color:rgb(128,33,33)">Semester {{ $i }}</a>
          @endfor
          </div>
    </div>
        
@endsection