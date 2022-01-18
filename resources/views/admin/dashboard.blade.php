@extends('layout.app')

@section('content')

    <div class="d-flex flex-column align-items-center justify-content-center">
        <div class="bg-light px-5 w-100 py-3 text-center mb-2">
            <div class="flex-row align-items-center justify-content-center">
                <h3 class="font-weight-bold">Admin Dashboard</h3>
                    <button type="button" class="btn btn-warning">Forget password</button>
                
            </div>
            
            
        </div>

        {{-- forgot password section
        posted notices [Delete button]
        name
        department --}}
        <div class="row mb-5 text-center w-100">
            <div class="col-12">
                <h4>Notices Published</h4>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col">
                        <div class="list-group-item list-group-item-action">
                            <a href=" " class="font-weight-bold" style="color:rgb(128,33,33)">Technical festival Renaissance 2021-22"</a>
                        <a href="" class="text-dark d-flex justify-content-end">Delete</a>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col">
                        <div class="list-group-item list-group-item-action">
                            <a href=" " class="font-weight-bold" style="color:rgb(128,33,33)">Technical festival Renaissance 2021-22"</a>
                        <a href="" class="text-dark d-flex justify-content-end">Delete</a>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col ">
                        <div class="list-group-item list-group-item-action">
                            <a href=" " class="font-weight-bold" style="color:rgb(128,33,33)">Technical festival Renaissance 2021-22"</a>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
               
            </div>
            
          </div>
          </div>
    </div>

@endsection