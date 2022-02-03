<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exam Manager</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{ asset('js/app.js') }}"></script>

    <style>
        a {
            color: white;
        }
        a:hover{
            color:#c96d6d;
            text-decoration: none;
        }
    </style>

</head>
<body style="--tw-bg-opacity: 1; background-color: rgba(229, 231, 235, var(--tw-bg-opacity));">
    {{-- <h1>hero</h1> --}}
    {{-- Navbar --}}
    <nav style="background-color:rgb(128,33,33)" class="navbar navbar-expand-lg sticky-top">
        <a class="navbar-brand font-weight-bold" href="{{ route('home') }}">KJSIEIT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <img class="w-50" src="{{ asset('svg/ham.svg') }}" alt="Menu">
        </button>
      
        <div class="collapse navbar-collapse py-2" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link font-weight-bold" href="{{ route('notice') }}">Notice Board</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-weight-bold" href="{{ route('lab') }}">Oral/Practical</a>
            </li>
            <li class="nav-item">
                <a class="nav-link font-weight-bold" href="{{ route('term') }}">Term Exam</a>
            </li>
          </ul>
          
          <ul class="navbar-nav ml-auto">
            @auth
              @if(auth()->user()->account_type == '1')
                <li class="nav-item">
                  <a href="{{ route('seatingArrangement') }}" class="nav-link font-weight-bold">Seating Arrangement</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('adminPanel') }}" class="nav-link font-weight-bold">Admin Panel</a>
                </li>
                {{-- <li class="nav-item">
                  <a href="#" class="nav-link font-weight-bold">Question Paper Portal</a>
                </li> --}}
                <li class="nav-item">
                  <a href="{{ route('adminDashboard') }}" class="nav-link font-weight-bold">{{ auth()->user()->name }}</a>
                </li>
              @endif

              @if(auth()->user()->account_type == '0')
                <li class="nav-item">
                  <a href="{{ route('labExamScheduler') }}" class="nav-link font-weight-bold">Oral/Practical Scheduler</a>
                </li>
                {{-- <li class="nav-item">
                  <a href="#" class="nav-link font-weight-bold">Question Paper Portal</a>
                </li> --}}
                <li class="nav-item">
                    <a href="{{ route('facultyDashboard') }}" class="nav-link font-weight-bold">{{ auth()->user()->name }}</a>
                </li>
              @endif
              
              <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                  @csrf
                  <button class="mt-2 ml-2 font-weight-bold text-light p-0 btn" type="submit">Logout</button>
              </form>
              </li>
            @endauth
            @guest
              <li class="nav-item">
                <a href="{{ route('login') }}" class="nav-link font-weight-bold">Login</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('register') }}" class="nav-link font-weight-bold">Register</a>
              </li>
            @endguest
          </ul>
        </div>
      </nav>
    @yield('content')
</body>
</html>