@extends('layout.app')

@section('content')

    <div class="d-flex flex-column align-items-center justify-content-center">
        <div class="bg-light px-5 w-100 py-3 text-center mb-2">
            <h3 class="font-weight-bold">Users List</h3>
            <small>Admin and Faculty members</small>
        </div>

        <div class="row">
            <div class="col-6">
                <h4 class="text-center font-weight-bold mt-2">Admins ({{ count($userAdmins) }})</h4>
                <table class="table table-responsive">
                    <thead class="thead-dark">
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Department</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($userAdmins as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->department }}</td>
                          </tr>      
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-6">
                <h4 class="text-center font-weight-bold mt-2">Faculty ({{ count($userFaculty) }})</h4>
                <table class="table table-responsive">
                    <thead class="thead-dark">
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Department</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($userFaculty as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->department }}</td>
                          </tr>      
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection