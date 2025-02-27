@extends('dashboard.layouts.main')

@section('title')Lamaran @endsection
@section('title1')Karir @endsection
@section('title2')Lamaran @endsection

@section('content')

{{-- <div id="layoutSidenav" class="m-3">
    <div id="layoutSidenav_content">

        <div class="card mx-3">
            <h5 class="card-header">@yield('title')</h5>
            <div class="table-responsive text-nowrap px-4 pb-5">
                <table class="table table-striped table-bordered border-dark">
                    <thead class=" text-center">
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Education</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($apply1 as $apply)
                        <tr>
                            <td><strong>{{ $loop->iteration }}</strong></td>
                            <td>{{ $apply->title }}</td>
                            <td>{{ $apply->name }}</td>
                            <td>{{ $apply->email }}</td>
                            <td>{{ $apply->phone }}</td>
                            <td>{{ $apply->education }}</td>
                            <td>
                                <a href="#" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#myModal{{ $apply->id }}">
                                    <i class="bi bi-eye"></i> Show
                                </a>

                                @include('dashboard.apply.show')
                                <form action="/dashboard/apply/{{ $apply->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal{{ $apply->id  }}">
                                        <i class="bi bi-trash"></i> Delete
                                    </button>

                                    <div class="modal fade" id="deleteModal{{ $apply->id  }}" tabindex="-1"
                                        aria-labelledby="deleteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah anda yakin ingin menghapus data {{ $apply->name }}?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div> --}}


<section class="header-menu my-3">
    <div class="card m-0 border shadow-sm p-3">
        <div class="table-responsive">
            <table class="table table-bordered border-dark mb-0 table-hover table-striped" id="datatablesSimple">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Title</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">Education</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($apply1 as $apply)
                    <tr>
                        <td><strong>{{ $loop->iteration }}</strong></td>
                        <td>{{ $apply->title }}</td>
                        <td>{{ $apply->name }}</td>
                        <td>{{ $apply->email }}</td>
                        <td>{{ $apply->phone }}</td>
                        <td>{{ $apply->education }}</td>
                        <td>
                            <a href="#" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                data-bs-target="#myModal{{ $apply->id }}">
                                <i class="bi bi-eye"></i> Show
                            </a>
                            <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal"
                                data-bs-target="#deleteModal{{ $apply->id  }}">
                                <i class="bi bi-trash"></i> Delete
                            </button>


                            @include('dashboard.apply.show')
                            @include('dashboard.apply.delete')
                        </td>

                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
</section>
@endsection
