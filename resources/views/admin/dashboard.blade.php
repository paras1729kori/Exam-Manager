@extends('layout.app')

@section('content')

    <div class="d-flex flex-column align-items-center justify-content-center">
        <div class="bg-light px-5 w-100 py-3 text-center mb-4">
            <div class="flex-row align-items-center justify-content-center">
                
                <h3 class="font-weight-bold">Admin Dashboard</h3>
                <a href="{{ route('editUserInfo') }}">
                    <button type="button"  class="btn btn-sm btn-primary">Edit information</button>
                </a>
            </div>
        </div>

        <h5 class="font-weight-bold">Notices Published</h5>
        <div class="row w-100 mt-1">
            @foreach ($notices as $notice)
            <div class="col-3">
                <div class="card rounded-lg">
                    <div class="card-body text-center">
                        <a href="{{ route('displayNotice', [$notice->id]) }}" class="font-weight-bold text-dark w-100">{{ $notice->title }}</a>
                        <br>
                        <form action="{{ route('deleteNotice', $notice) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger m-2">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection