@extends('layout.app')

@section('content')

    <div class="d-flex flex-column align-items-center justify-content-center mb-5">
        <div class="bg-light px-5 w-100 py-3 text-center mb-2">
            <h3 class="font-weight-bold">{{ $notice->title }}</h3>
        </div>

        <div class="mx-5">
            <div class="card text-dark mx-5">
                <div class="card-body">
                    <h6>Written on {{$notice->created_at}} by {{$notice->user->name}}</h6>
                    <p class="card-text">
                        {{$notice->body}}
                    </p>
                    {{-- @if(!Auth::guest())
                    @if(Auth::user()->id == $notice->user_id)
                        <a href="/notices/{{$notice->id}}/edit" class="btn btn-success btn-default">Edit</a>
                    @endif
                    @endif --}}
                </div>
            </div>
        </div> 
    </div>        
@endsection