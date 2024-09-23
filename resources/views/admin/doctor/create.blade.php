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
                            <h4 class="card-title mb-0 flex-grow-1"><b>+ Add Doctor</b></h4>
                            <div class="flex-shrink-0">
                                <div class="dropdown card-header-dropdown">
                                    <a href="{{route('doctor.index')}}" class="btn btn-sm btn-danger">
                                        Back Home</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('doctor.store') }}" method="post">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-8">
                                        <div>
                                            <label class="form-label">Name</label>
                                            <input type="test" class="form-control" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div>
                                            <label class="form-label">Experiance</label>
                                            <input type="number" class="form-control" name="experience">
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <hr width="50%">
                                <h5><b>Specialist of</b></h5>
                                <div class="row mt-3">
                                    @foreach ($specialists as $specialist)
                                        <div class="col-md-3">
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="checkbox" id="formCheck2"
                                                    name="specialist[]" value="{{$specialist->id}}">
                                                <label class="form-check-label" for="formCheck2">
                                                    {{$specialist->name}}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>


                                <br>
                                <hr width="50%">
                                <h5><b>Doctor of diseases</b></h5>
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
                                <h5><b>Doctor of Hospital</b></h5>
                                <div class="row mt-3">
                                    @foreach ($hospitals as $hospital)
                                        <div class="col-md-3">
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="checkbox" id="formCheck2"
                                                    name="hospital[]" value="{{$hospital->id}}">
                                                <label class="form-check-label" for="formCheck2">
                                                    {{$hospital->name}}
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