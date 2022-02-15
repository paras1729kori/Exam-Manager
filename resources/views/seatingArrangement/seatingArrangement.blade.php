@extends('layout.app')

@section('content')

<style>
    /* table {
	display: table;
}
table tr {
	display: table-cell;
}
table tr td {
	display: block;
} */
</style>

    <div class="d-flex flex-column align-items-center justify-content-center">
        <div class="bg-light px-5 w-100 py-3 text-center mb-2">
            <h3 class="font-weight-bold">Seating Arrangement Details</h3>
        </div>

        Input: Date, Year, Classroom No.
        TH -- Entrance, Row 1, Row 2, Row 3, Row 4, Row 5
        Make 5 rows and 1-46 input
    </div>

    <div class="row mb-4" style="padding: 0; margin: 0">
        <div class="col-4">
            <div class="mx-5 d-flex">
                <form action="{{ route('home') }}" method="GET">
                    @csrf
                    <h5>Select Date</h5>
                    <input type="date" class="form-control mb-1 mr-sm-2" name="date" id="date">

                    <br>

                    <h5>Select 1st Academic Year</h5>
                    <select class="custom-select mb-4 mr-sm-2" name="firstBatch" id="firstBatch">
                        <option value="none">Select an option</option>
                        <option value="FY">FY</option>
                        <option value="SY">SY</option>
                        <option value="TY">TY</option>
                        <option value="LY">LY</option>
                    </select>
                    
                    <h5>Select 2nd Academic Year</h5>
                    <select class="custom-select mb-4 mr-sm-2" name="secondBatch" id="secondBatch">
                        <option value="none">Select an option</option>
                        <option value="FY">FY</option>
                        <option value="SY">SY</option>
                        <option value="TY">TY</option>
                        <option value="LY">LY</option>
                    </select>
                
                    <h5>Entrance</h5>
                    <div class="row m-0">
                        <div class="col p-0">
                            <select class="custom-select mb-4 mr-sm-2" name="entrance1" id="entrance1">
                                <option value="none">Select an option</option>
                                @for ($i = 1; $i < 46; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="col p-0">
                            <select class="custom-select mb-4 mr-sm-2" name="entrance2" id="entrance2">
                                <option value="none">Select an option</option>
                                @for ($i = 1; $i < 46; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>

                    <h5>Row 1</h5>
                    <div class="row m-0">
                        <div class="col p-0">
                            <select class="custom-select mb-4 mr-sm-2" name="row11" id="row11">
                                <option value="none">Select an option</option>
                                @for ($i = 1; $i < 46; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="col p-0">
                            <select class="custom-select mb-4 mr-sm-2" name="row12" id="row12">
                                <option value="none">Select an option</option>
                                @for ($i = 1; $i < 46; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>

                    <h5>Row 2</h5>
                    <div class="row m-0">
                        <div class="col p-0">
                            <select class="custom-select mb-4 mr-sm-2" name="row21" id="row21">
                                <option value="none">Select an option</option>
                                @for ($i = 1; $i < 46; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="col p-0">
                            <select class="custom-select mb-4 mr-sm-2" name="row22" id="row22">
                                <option value="none">Select an option</option>
                                @for ($i = 1; $i < 46; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>

                    <h5>Row 3</h5>
                    <div class="row m-0">
                        <div class="col p-0">
                            <select class="custom-select mb-4 mr-sm-2" name="row31" id="row31">
                                <option value="none">Select an option</option>
                                @for ($i = 1; $i < 46; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="col p-0">
                            <select class="custom-select mb-4 mr-sm-2" name="row32" id="row32">
                                <option value="none">Select an option</option>
                                @for ($i = 1; $i < 46; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>

                    <h5>Row 4</h5>
                    <div class="row m-0">
                        <div class="col p-0">
                            <select class="custom-select mb-4 mr-sm-2" name="row41" id="row41">
                                <option value="none">Select an option</option>
                                @for ($i = 1; $i < 46; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="col p-0">
                            <select class="custom-select mb-4 mr-sm-2" name="row42" id="row42">
                                <option value="none">Select an option</option>
                                @for ($i = 1; $i < 46; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
              

                    <h5>Select Classroom</h5>
                    <select class="custom-select mb-4 mr-sm-2" name="classNo" id="classNo">
                        <option value="none">Select an option</option>
                        @for ($i = 1; $i < 11; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>

                    <button type="submit" class="btn text-light font-weight-bold" style="background-color:rgb(128,33,33);">Submit</button>
                    <button type="reset" class="btn text-light font-weight-bold" style="background-color:rgb(128,33,33);">Reset</button>
                </form>
            </div>
        </div>
        <div class="col-8">
            <table class="table table-resposive text-center">
                <thead class="thead-dark">
                    <th colspan="2">Entrance</th>
                    <th colspan="2">Row 1</th>
                    <th colspan="2">Row 2</th>
                    <th colspan="2">Row 3</th>
                    <th colspan="2">Row 4</th>
                </thead>
                <tbody>
                    <tr class="bg-dark text-light">
                        <td class="font-weight-bold">FY</td>
                        <td class="font-weight-bold">SY</td>
                        <td class="font-weight-bold">FY</td>
                        <td class="font-weight-bold">SY</td>
                        <td class="font-weight-bold">FY</td>
                        <td class="font-weight-bold">SY</td>
                        <td class="font-weight-bold">FY</td>
                        <td class="font-weight-bold">SY</td>
                        <td class="font-weight-bold">FY</td>
                        <td class="font-weight-bold">SY</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


@endsection