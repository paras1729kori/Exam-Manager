@extends('layout.app')

@section('content')

    

    <div class="d-flex flex-column align-items-center justify-content-center mb-3">
        <div class="bg-light px-5 w-100 py-3 text-center mb-2">
            <h3 class="font-weight-bold">Notice Board</h3>
        </div>

        <div class="row mb-5 text-center">
          <div class="col-12">
            @if ( count($CSnotices) > 0)
              @foreach ($CSnotices as $notice)
                <a href="{{ route('displayNotice', [$notice->id]) }}" class="list-group-item list-group-item-action p-3 font-weight-bold" style="color:rgb(128,33,33)">{{ $notice->title }}</a>
              @endforeach
            @else 
              <p>No notices posted yet</p>
            @endif
          </div>
          {{-- <div class="col-6">
            <h4>Information Technology</h4>
            @if ( count($ITnotices) > 0)
              @foreach ($ITnotices as $notice)
                <a href="{{ route('displayNotice', [$notice->id]) }}" class="list-group-item list-group-item-action p-3 font-weight-bold" style="color:rgb(128,33,33)">{{ $notice->title }}</a>
              @endforeach
            @else 
              <p>No notices posted yet</p>
            @endif
          </div>
        </div>
        <div class="row mb-5 text-center w-100">
          <div class="col-6">
            <h4>Electronics and Telecommunication</h4>
            @if ( count($EXTCnotices) > 0)
              @foreach ($EXTCnotices as $notice)
                <a href="{{ route('displayNotice', [$notice->id]) }}" class="list-group-item list-group-item-action p-3 font-weight-bold" style="color:rgb(128,33,33)">{{ $notice->title }}</a>
              @endforeach
            @else 
              <p>No notices posted yet</p>
            @endif
          </div>
          <div class="col-6">
            <h4>Electronic Engineering</h4>
            @if ( count($ETRXnotices) > 0)
              @foreach ($ETRXnotices as $notice)
                <a href="{{ route('displayNotice', [$notice->id]) }}" class="list-group-item list-group-item-action p-3 font-weight-bold" style="color:rgb(128,33,33)">{{ $notice->title }}</a>
              @endforeach
            @else 
              <p>No notices posted yet</p>
            @endif
          </div>
        </div>
        <div class="row text-center w-100">
          <div class="col-6">
            <h4>Artificial Intelligence and Data Science</h4>
            @if ( count($AIDSnotices) > 0)
              @foreach ($AIDSnotices as $notice)
                <a href="{{ route('displayNotice', [$notice->id]) }}" class="list-group-item list-group-item-action p-3 font-weight-bold" style="color:rgb(128,33,33)">{{ $notice->title }}</a>
              @endforeach
            @else 
              <p>No notices posted yet</p>
            @endif
          </div>
        </div> --}}
    </div>
        
@endsection