@extends('layout.app')

@section('content')

    <div class="d-flex flex-column align-items-center justify-content-center">
        <div class="bg-light px-5 w-100 py-3 text-center mb-2">
            <h3 class="font-weight-bold">Edit User Credentials</h3>
        </div>

        <div class="w-50">
            <form action="{{ route('updateUserDetails') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="account_type" class="sr-only">User</label>
                    <select name="name" class="custom-select border border-dark">
                        <option value="null">Select User</option>
                        @if (count($users) > 0)
                            @foreach ($users as $user)
                                <option value="{{ $user->name }}">{{ $user->name }}</option>                            
                            @endforeach
                        @endif
                      </select>
                      @error('account_type')
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
                        <option value="{{ auth()->user()->department }}">{{ auth()->user()->department }}</option>
                      </select>
                      @error('department')
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