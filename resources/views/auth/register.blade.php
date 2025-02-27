@extends('auth.layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <div class="card">
            <main class="form-registration">
                <h1 class="card-header h3 mb-5 text-light text-center bg-success">Registration Form</h1>
                <form action="/register" method="post">
                    @csrf
                    <div class="form-floating m-3">
                        <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="name"
                            placeholder="Name" required value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating m-3">
                        <input type="text" name="username" class="form-control @error('username')is-invalid @enderror"
                            id="username" placeholder="Username" required value="{{ old('username') }}">
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

                    <div class="d-grid m-3">
                        <button class="btn btn-lg btn-success" type="submit">Register</button>
                    </div>

                </form>
                <small class="d-block text-center m-3">
                    Already have account? <a href="/login" class="text-decoration-none">Login</a>
                </small>
            </main>
        </div>
    </div>
</div>
@endsection