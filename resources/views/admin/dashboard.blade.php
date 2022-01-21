@extends('layout.app')

@section('content')

    <div class="d-flex flex-column align-items-center justify-content-center">
        <div class="bg-light px-5 w-100 py-3 text-center mb-2">
            <div class="flex-row align-items-center justify-content-center">
                
                <h3 class="font-weight-bold">Admin Dashboard</h3>
                <a href="{{ route('editAdminInfo') }}">
                    <button type="button"  class="btn btn-primary">Edit information</button>
                </a>
                    
                    <button type="button" class="btn btn-danger">Forget password</button>
            </div>
        </div>

        {{-- forgot password section
        posted notices [Delete button]
        name
        department --}}
        <div class="row mb-5 text-center w-100" >
            <div class="col-12">
                <h4>Notices Published</h4>
            </div>
            <div class="col-4 mb-2">
                <div class="row">
                    <div class="col">
                        <div class="list-group-item list-group-item-action">
                        {{-- id pass krna hai notice ka --}}
                            <a href="{{ route('displayNotice',1) }}" class="font-weight-bold " style="color:rgb(128,33,33)">Technical festival Renaissance 2021-22"</a>
                            <br>
                            <button type="button" class="btn btn-danger m-2">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-2">
                <div class="row">
                    <div class="col">
                        <div class="list-group-item list-group-item-action">
                            <a href=" " class="font-weight-bold " style="color:rgb(128,33,33)">Technical festival Renaissance 2021-22"</a>
                            <br>
                            <button type="button" class="btn btn-danger m-2">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-2">
                <div class="row">
                    <div class="col">
                        <div class="list-group-item list-group-item-action">
                            <a href=" " class="font-weight-bold " style="color:rgb(128,33,33)">Technical festival Renaissance 2021-22"</a>
                            <br>
                            <button type="button" class="btn btn-danger m-2">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-2">
                <div class="row">
                    <div class="col">
                        <div class="list-group-item list-group-item-action">
                            <a href=" " class="font-weight-bold " style="color:rgb(128,33,33)">Technical festival Renaissance 2021-22"</a>
                            <br>
                            <button type="button" class="btn btn-danger m-2">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            
            
          </div>
          </div>
    </div>

@endsection