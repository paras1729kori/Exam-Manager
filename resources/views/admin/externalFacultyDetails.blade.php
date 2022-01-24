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
                        <th>Sr no</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Department</th>
                        <th>Delete Record</th>
                      </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($userAdmins as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->department }}</td>
                          </tr>      
                        @endforeach --}}
                        <tr >
                          <td>1</td>
                            <td>Vishesh</td>
                            <td>vishesh.k@somksdf</td>
                            <td>Computer Science</td>
                            <td class="text-center"><button type="button" class="btn btn-danger btn-sm">Delete</button></td>
                          </tr>      
                        <tr>
                          <td>1</td>
                            <td>Vishesh</td>
                            <td>vishesh.k@somksdf</td>
                            <td>Computer Science</td>
                            <td class="text-center"><button type="button" class="btn btn-danger btn-sm">Delete</button></td>
                          </tr>      
                        <tr>
                          <td>1</td>
                            <td>Vishesh</td>
                            <td>vishesh.k@somksdf</td>
                            <td>Computer Science</td>
                            <td class="text-center"><button type="button " class="btn btn-danger btn-sm">Delete</button></td>
                          </tr>      
                        <tr>
                          <td>1</td>
                            <td>Vishesh</td>
                            <td>vishesh.k@somksdf</td>
                            <td>Computer Science</td>
                            <td class="text-center"><button type="button" class="btn btn-danger btn-sm">Delete</button></td>
                          </tr>      
                    </tbody>
                </table>
            </div>
            
            
        </div>

    </div>

@endsection