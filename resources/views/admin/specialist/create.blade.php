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
                            <h4 class="card-title mb-0 flex-grow-1"><b>+ Add specialist</b></h4>
                            <div class="flex-shrink-0">
                                <div class="dropdown card-header-dropdown">
                                    <a href="{{route('specialist.create')}}" class="btn btn-sm btn-danger">
                                        Back Home</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('specialist.store') }}" method="post">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-8">
                                        <div>
                                            <label class="form-label">Name</label>
                                            <input type="test" class="form-control" name="name">
                                        </div>
                                    </div>
                                </div>
                                
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