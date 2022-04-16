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
                <h5 class="font-weight-bold">SY Computer</h5>
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th>Faculty Name</th>
                        <th>Subject</th>
                        <th>No. of Answer Sheets</th>
                        <th>Date of Issue</th>
                        <th>Date of Submission</th>
                        <th>Signature</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($SYsubjects as $sub)
                        <tr>
                            <td><input type="text" name="" id=""></td>
                            <td>{{ $sub->subject_name }}</td>
                            <td>
                                <select name="" id="">
                                    @for ($i = 1; $i <= 25; $i++)
                                        <option value={{ $i*2 }}>{{ $i*2 }}</option>
                                    @endfor
                                </select>
                            </td>
                            <td><input type="date" name="" id=""></td>
                            <td><input type="date" name="" id=""></td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>

                {{-- Third Year Data --}}
                <h5 class="font-weight-bold">TY Computer</h5>
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th>Faculty Name</th>
                        <th>Subject</th>
                        <th>No. of Answer Sheets</th>
                        <th>Date of Issue</th>
                        <th>Date of Submission</th>
                        <th>Signature</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($TYsubjects as $sub)
                        <tr>
                            <td><input type="text" name="" id=""></td>
                            <td>{{ $sub->subject_name }}</td>
                            <td>
                                <select name="" id="">
                                    @for ($i = 1; $i <= 25; $i++)
                                        <option value={{ $i*2 }}>{{ $i*2 }}</option>
                                    @endfor
                                </select>
                            </td>
                            <td><input type="date" name="" id=""></td>
                            <td><input type="date" name="" id=""></td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>

                {{-- Last Year Data --}}
                <h5 class="font-weight-bold">LY Computer</h5>
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th>Faculty Name</th>
                        <th>Subject</th>
                        <th>No. of Answer Sheets</th>
                        <th>Date of Issue</th>
                        <th>Date of Submission</th>
                        <th>Signature</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($LYsubjects as $sub)
                        <tr>
                            <td><input type="text" name="" id=""></td>
                            <td>{{ $sub->subject_name }}</td>
                            <td>
                                <select name="" id="">
                                    @for ($i = 1; $i <= 25; $i++)
                                        <option value={{ $i*2 }}>{{ $i*2 }}</option>
                                    @endfor
                                </select>
                            </td>
                            <td><input type="date" name="" id=""></td>
                            <td><input type="date" name="" id=""></td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>

            <br>
            <br>
    
            <div class="row mt-5 mb-3 text-center">
                <div class="col-6">
                    <p class="m-0 p-0 font-weight-bold">Test Coordinator</p>
                </div>
                <div class="col-6">
                    <p class="m-0 p-0 font-weight-bold">Dr. Sarita Ambadekar <br> HOD Computer Engineering Dept</p>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="text-center my-3">
        <a href="{{ route('makePDF') }}" id="generatePDF" class="btn btn-primary">Download</a>
    </div> --}}
        
@endsection