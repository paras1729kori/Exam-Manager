@extends('layout.app')

@section('content')
    <style>
        .table tr, td{
            border: 1px solid #000;
        }
    </style>

    <div class="d-flex flex-column align-items-center justify-content-center">
        <div class="bg-light px-5 w-100 py-3 text-center mb-2">
            <h3 class="font-weight-bold">Semester {{ $sem }} Term Test Timetable</h3>
        </div>

        <div class="row text-center">
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
                        @foreach ($termTestA as $term)
                            @if ($term->semester == $sem)
                                <tr>
                                    <td>{{ $term->subName }}</td>
                                    <td>{{ $term->examDate }}</td>
                                    <td>{{ $term->startTime }}</td>
                                    <td>{{ $term->endTime }}</td>
                                    <td>{{ $term->div }}</td>
                                    <td>{{ $term->batch }}</td>
                                </tr>
                            @endif   
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row text-center">
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
                        @foreach ($termTestB as $term)
                            @if ($term->semester == $sem)
                                <tr>
                                    <td>{{ $term->subName }}</td>
                                    <td>{{ $term->examDate }}</td>
                                    <td>{{ $term->startTime }}</td>
                                    <td>{{ $term->endTime }}</td>
                                    <td>{{ $term->div }}</td>
                                    <td>{{ $term->batch }}</td>
                                </tr>
                            @endif   
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{-- <button class="btn btn-info text-light">Download</button> --}}
    </div>

@endsection