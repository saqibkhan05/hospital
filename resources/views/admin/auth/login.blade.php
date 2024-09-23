@extends('admin.layouts.auth')

@section('title')
    Login page
@endsection

@section('body')
    <div class="auth-page-wrapper pt-5">
        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                <a href="index.html" class="d-inline-block auth-logo">
                                    <img src="assets/img/logo/logo.png" alt="" height="200">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5>Sign in to</h5>
                                    <p class="text-muted">Login</p>
                                </div>
                                <div class="p-2 mt-4">
                                    <form action="{{ route('admin.signin') }}" method="POST">

                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Username</label>
                                            <input type="text" class="form-control" placeholder="Enter username"
                                                name="email">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" class="form-control pe-5"
                                                    placeholder="Enter password" name="password">
                                            </div>
                                        </div>


                                        <div class="mt-4">
                                            <button class="btn btn-primary w-100" type="submit"
                                                name="submit">Sign-In</button>
                                            <br>
                                            <br>

                                        </div>

                                    </form>

                                    <a href="{{ route('home') }}" class="btn btn-danger w-100" type="submit"
                                        name="submit">Back to Website
                                    </a>

                                </div>
                            </div>
                            <!-- end card body -->
                        </div>


                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>

    </div>
@endsection
