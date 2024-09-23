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
                            <h4 class="card-title mb-0 flex-grow-1"><b>Doctors List</b></h4>
                            <div class="flex-shrink-0">
                                <div class="dropdown card-header-dropdown">
                                    <a href="{{route('doctor.create')}}" class="btn btn-sm btn-success"><i
                                            class="ri-add-line align-middle me-1"></i>
                                        Add Doctor</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div>
                                <table class="table table-borderless align-middle table-nowrap mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Disease</th>
                                            <th scope="col">No of specialists</th>
                                            <th scope="col">No of Hospital</th>
                                            <th scope="col">No of Diseases</th>
                                            <th scope="col">Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($doctors as $doctor)
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">{{$doctor->name}}</th>
                                                <th scope="col">{{$doctor->specialists_count}}</th>
                                                <th scope="col">{{$doctor->hospitals_count}}</th>
                                                <th scope="col">{{$doctor->diseases_count}}</th>
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