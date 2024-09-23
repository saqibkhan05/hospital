@extends('admin.layouts.app')

@session('title')
    Create PG
@endsession

@section('body')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1"><b>Hospitals List</b></h4>
                            <div class="flex-shrink-0">
                                <div class="dropdown card-header-dropdown">
                                    <a href="{{route('hospital.create')}}" class="btn btn-sm btn-success"><i
                                            class="ri-add-line align-middle me-1"></i>
                                        Add Hospital</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div>
                                <table class="table table-borderless align-middle table-nowrap mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Hospital</th>
                                            <th scope="col">No of Doctors</th>
                                            <th scope="col">No of Diseases</th>
                                            <th scope="col">Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($hospitals as $hospital)
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">{{$hospital->name}}</th>
                                                <th scope="col">{{$hospital->doctors_count}}</th>
                                                <th scope="col">{{$hospital->diseases_count}}</th>
                                                <th scope="col"><a href="">Edit</a></th>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection