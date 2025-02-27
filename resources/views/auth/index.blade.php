@extends('auth.layouts.main')

@section('content')

@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (session()->has('loginError'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('loginError') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="card shadow">
    <div class="card-body">


        <form id="formAuthentication" class="mb-3" aaction="/login" method="post">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email or Username</label>

                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                    placeholder="Enter your email" autofocus value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                </div>
                <div class="input-group input-group-merge">
                    <input type="password" id="password" class="form-control" name="password" placeholder="password"
                        aria-describedby="password">
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
            </div>
        </form>
    </div>
</div>
@endsection
