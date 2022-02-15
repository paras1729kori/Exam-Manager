@extends('layout.app')

@section('content')
    <div class="d-flex flex-column align-items-center justify-content-center">
        <div class="bg-light px-5 w-100 py-3 text-center mb-2">
            <h3 class="font-weight-bold">Edit Information</h3>
        </div>
        <div class="w-50">
            <form action="{{ route('updateAdminInfo') }}" method="post">
                @csrf
                <div class="mb-4 mt-2">
                    <label for="newName" class="sr-only">Name</label>
                    <input name="newName" class="form-control w-100 rounded-lg border border-dark p-4" type="text" placeholder="username">
                    @error('newName')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input name="password" class="form-control w-100 rounded-lg border border-dark p-4" type="password" placeholder="password" />
                    @error('password')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <button type="submit" style="background-color:rgb(128,33,33)" class="btn text-light font-weight-bold px-4 py-3 rounded w-100">Update</button>
                </div>
            </form>
        </div>
        
    </div>

@endsection