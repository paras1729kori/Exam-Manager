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

        <div class="row">
            <div class="col-12">
                <table class="table table-responsive">
                    <thead class="thead-dark">
                      <tr>
                        <th>Subject</th>
                        <th>Exam Date</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($termTestDates as $term)
                            @if ($term->semester == $sem)
                                <tr>
                                    <td>{{ $term->subName }}</td>
                                    <td>{{ $term->examDate }}</td>
                                    <td>{{ $term->startTime }}</td>
                                    <td>{{ $term->endTime }}</td>
                                </tr>
                            @endif   
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <button class="btn btn-info text-light">Download</button>
    </div>

@endsection