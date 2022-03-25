@extends('layout.app')

@section('content')

    <div class="d-flex flex-column align-items-center justify-content-center">
        <div class="bg-light px-5 w-100 py-3 text-center mb-2">
            <h3 class="font-weight-bold">Block Answer Sheet Counter</h3>
        </div>
    </div>

    {{-- <h5>Term Test</h5>
    <label class="sr-only" for="termTest">Term Test</label>
    <select class="custom-select mb-4 mr-sm-2" name="termTest" id="termTest">
        @for ($i = 1; $i < 3; $i++)
            <option value={{ $i }}>{{ $i }}</option>
        @endfor
    </select> --}}

    {{-- Remember to add required keyword in all inputs --}}

    <form action="{{ route('blockDataDisplay') }}" method="GET">
        @csrf
        <div class="row m-0">
            {{-- Second Year Data --}}
            <div class="col-4 m-0 p-0">
                <div class="mx-5 mb-3 d-flex flex-column">
                    <h3 class="font-weight-bold">Second Year</h3>
                        <h5>Date</h5>
                        <label class="sr-only" for="date2">Date</label>
                        <input type="date" class="form-control mr-sm-2" name="date2" id="date2" placeholder="2022-23">
            
                        <br>
                        <h5>Time</h5>
                        <label class="sr-only" for="time2">Time</label>
                        <input type="text" class="form-control mr-sm-2" name="time2" id="time2" placeholder="9.15-10.15">
            
                        <br>
                        <h5>Room No. 1</h5>
                        <label class="sr-only" for="room21">Room No. 1</label>
                        <input type="text" class="form-control mr-sm-2" name="room21" id="room21" placeholder="CR4">
            
                        <br>
                        <h5>Room No. 2</h5>
                        <label class="sr-only" for="room22">Room No. 2</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" name="room22" id="room22" placeholder="CR5">

                        <br>
                        <h5>Issued</h5>
                        <label class="sr-only" for="iss2">Issued</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" name="iss2" id="iss2" placeholder="45">

                        <br>
                        <h5>Supplement</h5>
                        <label class="sr-only" for="suppl2">Supplement</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" name="suppl2" id="suppl2" placeholder="45">

                        <br>
                        <h5>Return</h5>
                        <label class="sr-only" for="ret2">Return</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" name="ret2" id="ret2" placeholder="45">
                </div>
            </div>
            
            {{-- Third Year Data --}}
            <div class="col-4 m-0 p-0">
                <div class="mx-5 mb-3 d-flex flex-column">
                    <h3 class="font-weight-bold">Third Year</h3>
                        <h5>Date</h5>
                        <label class="sr-only" for="date3">Date</label>
                        <input type="date" class="form-control mr-sm-2" name="date3" id="date3" placeholder="2022-23">
            
                        <br>
                        <h5>Time</h5>
                        <label class="sr-only" for="time3">Time</label>
                        <input type="text" class="form-control mr-sm-2" name="time3" id="time3" placeholder="9.15-10.15">
            
                        <br>
                        <h5>Room No. 1</h5>
                        <label class="sr-only" for="room31">Room No. 1</label>
                        <input type="text" class="form-control mr-sm-2" name="room31" id="room31" placeholder="CR4">
            
                        <br>
                        <h5>Room No. 2</h5>
                        <label class="sr-only" for="room32">Room No. 2</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" name="room32" id="room32" placeholder="CR5">
                        
                        <br>
                        <h5>Issued</h5>
                        <label class="sr-only" for="iss3">Issued</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" name="iss3" id="iss3" placeholder="45">

                        <br>
                        <h5>Supplement</h5>
                        <label class="sr-only" for="suppl3">Supplement</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" name="suppl3" id="suppl3" placeholder="45">

                        <br>
                        <h5>Return</h5>
                        <label class="sr-only" for="ret3">Return</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" name="ret3" id="ret3" placeholder="45">
                </div>
            </div>

            {{-- Last Year Data --}}
            <div class="col-4 m-0 p-0">
                <div class="mx-5 mb-3 d-flex flex-column">
                    <h3 class="font-weight-bold">Last Year</h3>
                        <h5>Date</h5>
                        <label class="sr-only" for="date4">Date</label>
                        <input type="date" class="form-control mr-sm-2" name="date4" id="date4" placeholder="2022-23">
            
                        <br>
                        <h5>Time</h5>
                        <label class="sr-only" for="time4">Time</label>
                        <input type="text" class="form-control mr-sm-2" name="time4" id="time4" placeholder="9.15-10.15">
            
                        <br>
                        <h5>Room No. 1</h5>
                        <label class="sr-only" for="room41">Room No. 1</label>
                        <input type="text" class="form-control mr-sm-2" name="room41" id="room41" placeholder="CR4">
            
                        <br>
                        <h5>Room No. 2</h5>
                        <label class="sr-only" for="room42">Room No. 2</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" name="room42" id="room42" placeholder="CR5">
                        
                        <br>
                        <h5>Issued</h5>
                        <label class="sr-only" for="iss4">Issued</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" name="iss4" id="iss4" placeholder="45">

                        <br>
                        <h5>Supplement</h5>
                        <label class="sr-only" for="suppl4">Supplement</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" name="suppl4" id="suppl4" placeholder="45">

                        <br>
                        <h5>Return</h5>
                        <label class="sr-only" for="ret4">Return</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" name="ret4" id="ret4" placeholder="45">            
                </div>
            </div>
        </div>

        <div class="d-flex align-items-center justify-content-center mb-2">
            <button type="submit" class="btn mr-2 text-light font-weight-bold" style="background-color:rgb(128,33,33);">Submit</button>
            <button type="reset" class="btn text-light font-weight-bold" style="background-color:rgb(128,33,33);">Reset</button>
        </div>
    </form>
        
@endsection