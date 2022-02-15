@extends('layout.app')

@section('content')

    <div class="d-flex flex-column align-items-center justify-content-center">
        <div class="bg-light px-5 w-100 py-3 text-center mb-2">
            <h3 class="font-weight-bold">Faculty Dashboard</h3>

                <a href="{{ route('editUserInfo') }}">
                    <button type="button"  class="btn btn-sm btn-primary">Edit information</button>
                </a>
        </div>
        
    </div>

@endsection