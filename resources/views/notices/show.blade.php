@extends('layout.app')

@section('content')

    <div class="d-flex flex-column align-items-center justify-content-center mb-5">
        <div class="bg-light px-5 w-100 py-3 text-center mb-2">
            <h3 class="font-weight-bold">{{ $notice->title }}</h3>
        </div>

        <div class="mx-5">
            <div class="card text-dark mx-5">
                <div class="card-body">
                    <p class="card-text">
                        {{ $notice->body }}
                    </p>
                    <small class="float-right">Written on {{$notice->created_at}} by {{$notice->user->name}}</small>
                </div>
            </div>
        </div>
    </div>        
@endsection