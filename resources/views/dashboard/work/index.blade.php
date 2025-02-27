@extends('dashboard.layouts.main')

@section('title')Lowongan @endsection
@section('title1')Karir @endsection
@section('title2')Lowongan @endsection

@section('content')

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif
{{-- <div class="m-3">


    <div class="card mx-3">
        <h5 class="card-header">@yield('title')</h5>
        <div class="col-md-3 mx-4">
            <a href="/dashboard/work/create" class="btn btn-primary mb-3"><i class="bi bi-bookmark-plus"></i>
                Create New</a>
        </div>
        <div class="table-responsive text-nowrap px-4 pb-5">
            <table class="table table-striped table-bordered border-dark text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Placement</th>
                        <th>Dedline</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($work1 as $work)
                    <tr>
                        <td><strong>{{ $loop->iteration }}</strong></td>
                        <td>{{ $work->title }}</td>
                        <td>{{ $work->placement }}</td>
                        <td>{{ $work->deadline }}</td>
                        <td>
                            <a href="/dashboard/work/{{ $work->slug }}" class="btn btn-sm btn-success">
                                <i class=" bx bx-show-alt me-1"></i> Show
                            </a>
                            <a href="/dashboard/work/{{ $work->slug }}/edit" class="btn btn-sm btn-warning">
                                <i class=" bx bx-edit-alt me-1"></i> Edit
                            </a>
                            <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal"
                                data-bs-target="#deleteModal{{ $work->slug }}">
                                <i class="bi bi-trash"></i> Delete
                            </button>


                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div> --}}

<section class="header-menu my-3">
    <div class="card m-0 border shadow-sm p-3">

        <div class="d-flex justify-content-between mx-2">
            <h5 class="mt-3"><i class="bi bi-table"></i> Data @yield('title')</h5>
            <div class="d-flex align-items-center justify-content-end">
                <button type="button" data-bs-toggle="modal" data-bs-target="#modalTambah"
                    class="btn btn-success btn-sm mt-2 me-2">Tambah
                    Data <i class="bi bi-plus-circle"></i></button>
            </div>
        </div>
        @include('dashboard.work.create')
        <hr class="dropdown-divider">

        <div class="table-responsive">
            <table class="table table-bordered border-dark mb-0 table-hover table-striped" id="datatablesSimple">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Title</th>
                        <th class="text-center">Placement</th>
                        <th class="text-center">Dedline</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($work1 as $work)
                    <tr>
                        <td><strong>{{ $loop->iteration }}</strong></td>
                        <td>{{ $work->title }}</td>
                        <td>{{ $work->placement }}</td>
                        <td>{{ $work->deadline }}</td>
                        <td>
                            <a href="/dashboard/work/{{ $work->slug }}" class="btn btn-sm btn-success">
                                <i class=" bx bx-show-alt me-1"></i> Show
                            </a>
                            <button type="button" class="btn btn-sm btn-warning text-white" data-bs-toggle="modal"
                                data-bs-target="#modalEdit{{ $work->slug }}">
                                <i class=" bx bx-edit-alt me-1"></i> Edit
                            </button>


                            <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal"
                                data-bs-target="#deleteModal{{ $work->slug }}">
                                <i class="bi bi-trash"></i> Delete
                            </button>


                        </td>
                    </tr>
                    @include('dashboard.work.edit')
                    @include('dashboard.work.delete')
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
</section>

<script>
    const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/works/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

</script>
@endsection
