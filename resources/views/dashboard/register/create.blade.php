@extends('dashboard.layouts.main')

@section('container')
    <div id="layoutSidenav" class="m-3">
        <div id="layoutSidenav_content">
            
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1><strong>C</strong>ereate <strong>N</strong>ew <strong>A</strong>dmin</h1>
            </div> 

            <div class="col-lg-6 mb-2">
                <main class="form-registration">
                    <form action="/dashboard/register" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mx-3">
                            <input type="text" name="name" class="form-control @error('name')is-invalid @enderror"
                                id="name" placeholder="Name" required value="{{ old('name') }}">
                            <label for="name">Name</label>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating m-3">
                            <input type="text" name="username"
                                class="form-control @error('username')is-invalid @enderror" id="username"
                                placeholder="Username" required value="{{ old('username') }}">
                            <label for="username">Username</label>
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating m-3">
                            <input type="email" name="email" class="form-control @error('email')is-invalid @enderror"
                                id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                            <label for="email">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating m-3">
                            <input type="password" name="password"
                                class="form-control @error('password')is-invalid @enderror" id="password"
                                placeholder="Password" required>
                            <label for="password">Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-12 m-3">
                            <a href="/dashboard/register" class="btn btn-danger">
                                <i class="bi bi-arrow-left"></i> Back
                            </a>
                            <button type="submit" class="btn btn-primary"><i class="bi bi-send"></i>
                                Register</button>
                        </div>
                        {{-- <button class="btn btn-lg btn-primary" type="submit">Register</button>
                                </div>
                                <div class="d-grid m-3">
                                    <a class="btn btn-lg btn-danger" type="submit">Cancel</a>
                                </div> --}}
                    </form>
                </main>
            </div>
            @include('dashboard.partials.footer')
        </div>
    </div>
@endsection
