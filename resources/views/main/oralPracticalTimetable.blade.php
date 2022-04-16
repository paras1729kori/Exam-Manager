@extends('layout.app')

@section('content')

    <style>
        .table tr, td{
            border: 1px solid #000;
        }
    </style>

    
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>

<script type="text/javascript">
    $('#generatePDF').click(function() {
        var doc = new jsPDF()
        var content = document.querySelector('#htmlContent')
        doc.fromHTML(content,15,15)
        doc.save("time_table.pdf")
    })
</script>

    <div class="d-flex flex-column align-items-center justify-content-center">
        <div class="bg-light px-5 w-100 py-3 text-center mb-2">
            <h3 class="font-weight-bold">Semester {{ $sem }} Oral/Practical Timetable</h3>
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
                        @foreach ($oralTestA as $oral)
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
                        @endforeach
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
                        @foreach ($oralTestB as $oral)
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
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{-- <form action="{{ route('downloadPDF') }}" method="GET">
            <button type="submit" class="btn btn-info text-light">Print</button>
        </form> --}}
    </div>

@endsection