@extends('layout.app')

@section('content')
    <div class="d-flex flex-column align-items-center justify-content-center">
        <div class="bg-light px-5 w-100 py-3 text-center mb-2">
            <h3 class="font-weight-bold">Edit Admin Information</h3>
        </div>
        <div class="w-50">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="mb-4 mt-2">
                    <label for="name" class="sr-only">Name</label>
                    <input name="name" class="form-control w-100 rounded-lg border border-dark p-4" type="text" placeholder="Your Name" value="Vishesh karan">
                    @error('name')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input name="email" class="form-control w-100 rounded-lg border border-dark p-4" type="email" placeholder="test@company.com" value="vishesh.k@somaiya.edu">
                    @error('email')
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