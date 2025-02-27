@extends('dashboard.layouts.main')

@section('container')
    <div id="layoutSidenav" class="m-3">
        <div id="layoutSidenav_content">

            <div class="table-responsive col-md-12 mr-3">

                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1><strong>A</strong>dmin</h1>
            </div>
            
                <a href="/dashboard/register/create" class="btn btn-success mb-3"><i class="bi bi-bookmark-plus"></i> Create
                    New User</a>
                <div class="card">
                    <table class="table table-bordered border-dark">
                        <thead class="table-success">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">User</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user->skip(1) as $user)
                                <tr>
                                    <td><strong>{{ $loop->iteration }}</strong></td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                        {{-- <a href="/dashboard/register/{{ $user->slug }}/edit" class="btn btn-warning">
                                        <i class="bi bi-pen text-light"></i>
                                    </a> --}}
                                        {{-- <form action="/dashboard/register/{{ $user->email }}" method="get" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?')">
                                            <i class="bi bi-trash"></i></button>
                                    </form> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @include('dashboard.partials.footer')
        </div>
    </div>
@endsection
