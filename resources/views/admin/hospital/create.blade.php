@extends('admin.layouts.app')

@session('title')
    Create PG
@endsession

@section('body')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1"><b>+ Add Hospital</b></h4>
                            <div class="flex-shrink-0">
                                <div class="dropdown card-header-dropdown">
                                    <a href="{{route('hospital.index')}}" class="btn btn-sm btn-danger">
                                        Back Home</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('hospital.store') }}" method="post">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-8">
                                        <div>
                                            <label class="form-label">Name</label>
                                            <input type="test" class="form-control" name="name">
                                        </div>
                                    </div>

                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <div>
                                            <label class="form-label">Address</label>
                                            <input type="test" class="form-control" name="address">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div>
                                            <label class="form-label">City</label>
                                            <input type="text" class="form-control" name="city">
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div>
                                            <label class="form-label">State</label>
                                            <input type="text" class="form-control" name="state">
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div>
                                            <label class="form-label">Pincode</label>
                                            <input type="text" class="form-control" name="pincode">
                                        </div>
                                    </div>
                                </div>


                                <br>
                                <hr width="50%">
                                <h5><b>Hospital of diseases</b></h5>
                                <div class="row mt-3">
                                    @foreach ($diseases as $disease)
                                        <div class="col-md-3">
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="checkbox" id="formCheck2"
                                                    name="disease[]" value="{{$disease->id}}">
                                                <label class="form-check-label" for="formCheck2">
                                                    {{$disease->name}}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>


                                <br>
                                <hr width="50%">
                                <h5><b>Hospital of Doctors</b></h5>
                                <div class="row mt-3">
                                    @foreach ($doctors as $doctor)
                                        <div class="col-md-3">
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="checkbox" id="formCheck2"
                                                    name="doctor[]" value="{{$doctor->id}}">
                                                <label class="form-check-label" for="formCheck2">
                                                    {{$doctor->name}}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <br>
                                <hr width="50%">
                                <button type="submit"
                                    class="btn btn-primary waves-effect waves-light mt-3">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection