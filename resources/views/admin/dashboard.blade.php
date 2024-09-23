@extends('admin.layouts.app')

@section('body')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Dashboard</h2>
                        </div>
                        <div class="card-body">

                            <table class="table table-nowrap">

                                <tbody>
                                    <tr>
                                        <th scope="row"><a href="#" class="fw-semibold">Hospitals</a></th>
                                        <td>{{$hospital}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#" class="fw-semibold">Doctors</a></th>
                                        <td>{{$Doctors}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#" class="fw-semibold">Specility</a></th>
                                        <td>{{$Specialist}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#" class="fw-semibold">Diseases treated</a></th>
                                        <td>{{$Disease}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- container-fluid -->
    </div>

</div>
@endsection