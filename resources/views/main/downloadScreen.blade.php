{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exam Manager</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="{{ asset('js/app.js') }}"></script>   
    <script src="{{ asset('js/downloadPDF.js') }}"></script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        p {
            margin: 0;
            padding: 0;
        }
        a {
            color: white;
        }
        a:hover{
            color:#c96d6d;
            text-decoration: none;
        }
    </style>
</head>
<body style="background-color:#fff; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif"> --}}
@extends('layout.app')

@section('content')
    <div id="htmlContent">
        <div class="d-flex flex-column align-items-center justify-content-center">
            <div class="row">
                <div class="col-2">
                    <img src="{{ asset('images/logo.jpg') }}" style="width:90px;" alt="Logo">
                </div>
                <div class="col-10">
                    <div class="font-weight-bold">
                        <p class="m-0 p-0" style="color:rgb(128,33,33)">SOMAIYA <br> VIDYAVIHAR</p>
                        <p class="m-0 p-0">K J Somaiya Institute of Engineering and Information Techbology</p>
                        <p class="m-0 p-0">An Autonomous Institute affiliated to University of Mumbai</p>
                        <p class="m-0 p-0">Accredited by NAAC and NBA, Approved by AICTE, New Delhi</p>
                    </div>
                </div>
            </div>
        </div>
        
        <hr style="height:2px;">
        
        <div class="d-flex flex-column align-items-center justify-content-center">
            <div class="text-center">
                <h4 class="font-weight-bold mt-4">Department of Computer Engineering</h4>
                <h5 class="font-weight-bold">Oral/Practical Test Time Table</h5>
                <div class="row">
                    <div class="col-12">
                        <table class="table table-responsive">
                            <thead class="thead-dark">
                              <tr>
                                <th>Subject</th>
                                <th>Exam Date</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Division</th>
                                <th>Batch</th>
                              </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($oralA as $oral)
                                    @if ($oral->semester == $sem)
                                        <tr class="text-center">
                                            <td>{{ $oral->subName }}</td>
                                            <td>{{ $oral->examDate }}</td>
                                            <td>{{ $oral->startTime }}</td>
                                            <td>{{ $oral->endTime }}</td>
                                            <td>{{ $oral->div }}</td>
                                            <td>{{ $oral->batch }}</td>
                                        </tr>
                                    @endif   
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <table class="table table-responsive">
                            <thead class="thead-dark">
                              <tr>
                                <th>Subject</th>
                                <th>Exam Date</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Division</th>
                                <th>Batch</th>
                              </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($oralB as $oral)
                                    @if ($oral->semester == $sem)
                                        <tr class="text-center">
                                            <td>{{ $oral->subName }}</td>
                                            <td>{{ $oral->examDate }}</td>
                                            <td>{{ $oral->startTime }}</td>
                                            <td>{{ $oral->endTime }}</td>
                                            <td>{{ $oral->div }}</td>
                                            <td>{{ $oral->batch }}</td>
                                        </tr>
                                    @endif   
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    
            <div class="row mt-5 text-center">
                <div class="col">
                    <p class="m-0 p-0 font-weight-bold">Ms. Shubhda Labde <br> Test Coordinator</p>
                </div>
                <div class="col">
                    <p class="m-0 p-0 font-weight-bold">Dr. Sarita Ambadekar <br> HOD Computer Engineering Dept</p>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-5">
        <button id="generatePDF" class="btn btn-primary">Download</button>
    </div>
@endsection

    {{-- <div class="text-center mt-1">
        <a href="{{ route('home') }}" class="btn btn-secondary">Home</a>
    </div>
</body>
</html> --}}
