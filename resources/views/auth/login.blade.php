@extends('layout.app')

@section('content')

    <div class="d-flex flex-column align-items-center justify-content-center">
        <div class="bg-light px-5 w-100 py-3 text-center mb-2">
            <h3 class="font-weight-bold">Login</h3>
        </div>

        <div class="w-50">
            @if (session('status'))
                <div class="bg-danger p-3 rounded-lg mb-4 text-white font-weight-bold text-center">{{ session('status') }}</div>
            @endif

            <form action="{{ route('login') }}" method="post">
                @csrf
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
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="mr-2">
                        <label for="remember">Remember me</label>
                    </div>
                </div>

                <div>
                    <button type="submit" style="background-color:rgb(128,33,33)" class="btn text-light font-weight-bold px-4 py-3 rounded w-100">Login</button>
                </div>
            </form>
        </div>
        
    </div>

@endsection