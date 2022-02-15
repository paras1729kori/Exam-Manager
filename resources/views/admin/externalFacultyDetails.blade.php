@extends('layout.app')

@section('content')

    <div class="d-flex flex-column align-items-center justify-content-center">
        <div class="bg-light px-5 w-100 py-3 text-center mb-2">
            <h3 class="font-weight-bold">External Faculty Details</h3>
        </div>
        <div class="row">
            <div >
                {{-- <h4 class="text-center font-weight-bold mt-2">Admins ({{ count($userAdmins) }})</h4> --}}
                <table class="table table-responsive">
                    <thead class="thead-dark">
                      <tr>
                        <th>Name</th>
                        <th>College</th>
                        <th>Email</th>
                        <th>Phone No.</th>
                        <th>Experience</th>
                        <th>Delete Record</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($externals as $external)
                        <tr class="font-weight-bold">
                          <td>{{ $external->fullname }}</td>
                          <td>{{ $external->college }}</td>
                          <td>{{ $external->exEmail }}</td>
                          <td>{{ $external->phone_no }}</td>
                          <td>{{ $external->experience }}</td>
                          <form action="{{ route('deleteExternal', $external) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <td class="text-center"><button type="submit" class="btn btn-danger btn-sm">Delete</button></td>                          
                          </form>
                        </tr>  
                      @endforeach
                    </tbody>
                </table>
            </div>
            
            
        </div>

    </div>

@endsection