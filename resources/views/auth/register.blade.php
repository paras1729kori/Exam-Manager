@extends('layout.app')

@section('content')

    <div class="d-flex flex-column align-items-center justify-content-center">
        <div class="bg-light px-5 w-100 py-3 text-center mb-2">
            <h3 class="font-weight-bold">Register</h3>
        </div>

        <div class="w-50">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="mb-4 mt-2">
                    <label for="name" class="sr-only">Name</label>
                    <input name="name" class="form-control w-100 rounded-lg border border-dark p-4" type="text" placeholder="Your Name" value="{{ old('name') }}">
                    @error('name')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input name="email" class="form-control w-100 rounded-lg border border-dark p-4" type="email" placeholder="test@company.com" value="{{ old('email') }}">
                    @error('email')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input name="password" class="form-control w-100 rounded-lg border border-dark p-4" type="password" placeholder="Your password">
                    @error('password')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Password</label>
                    <input name="password_confirmation" class="form-control w-100 rounded-lg border border-dark p-4" type="password" placeholder="Repeat your password">
                </div>

                <div class="mb-4">
                    <label for="account_type" class="sr-only">Account Type</label>
                    <select name="account_type" class="custom-select border border-dark">
                        <option value="null">Select Account Type</option>
                        <option value="0">Faculty</option>
                        <option value="1">Admin</option>
                      </select>
                      @error('account_type')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="department" class="sr-only">Department</label>
                    <select name="department" class="custom-select border border-dark">
                        <option value="null">Select Department</option>
                        <option value="Computer Engineering">Computer Engineering</option>
                        <option value="Information Technology">Information Technology</option>
                        <option value="Electronics and Telecommunication">Electronics and Telecommunication</option>
                        <option value="Electronic Engineering">Electronic Engineering</option>
                        <option value="Artificial Intelligence and Data Science">Artificial Intelligence and Data Science</option>
                      </select>
                      @error('department')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <button type="submit" style="background-color:rgb(128,33,33)" class="btn text-light font-weight-bold px-4 py-3 rounded w-100">Register</button>
                </div>
            </form>
        </div>
        
    </div>

@endsection