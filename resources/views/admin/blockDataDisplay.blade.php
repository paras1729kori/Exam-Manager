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
        
        <hr style="border:2px solid #000;">
        
        <div class="d-flex flex-column align-items-center justify-content-center">
            <div class="text-center">
                <h4 class="font-weight-bold">Department of Computer Engineering</h4>
                <h5 class="font-weight-bold">SY Answer Sheets</h5>
                @include('layout.blockAnsTables')

                {{-- Third Year Data --}}
                <h5 class="font-weight-bold">TY Answer Sheets</h5>
                @include('layout.blockAnsTables')

                {{-- Last Year Data --}}
                <h5 class="font-weight-bold">LY Answer Sheets</h5>
                @include('layout.blockAnsTables')
            </div>

            <br>
            <br>
    
            <div class="row mt-5 mb-3 text-center">
                <div class="col-4">
                    <p class="m-0 p-0 font-weight-bold">Test Co-Coordinator</p>
                </div>
                <div class="col-4">
                    <p class="m-0 p-0 font-weight-bold">Test Co-Coordinator</p>
                </div>
                <div class="col-4">
                    <p class="m-0 p-0 font-weight-bold">Dr. Sarita Ambadekar <br> HOD Computer Engineering Dept</p>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="text-center my-3">
        <button id="generatePDF" class="btn btn-primary">Download</button>
    </div> --}}
        
@endsection