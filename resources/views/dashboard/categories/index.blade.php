@extends('dashboard.layouts.main')

@section('title')Kategori @endsection
@section('title1')Olah Data @endsection
@section('title2')Kategori @endsection

@section('content')

@if (session()->has('success'))
<div class="alert alert-success col-lg-12" role="alert">
    {{ session('success') }}
</div>
@endif


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
        @include('dashboard.categories.create')
        <hr class="dropdown-divider">

        <div class="table-responsive">
            <table class="table table-bordered border-dark mb-0 table-hover table-striped" id="datatablesSimple">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($categories as $categories)
                    <tr>
                        <td><strong>{{ $loop->iteration }}</strong></td>
                        <td>{{ ucwords($categories->name) }}</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-warning text-white" data-bs-toggle="modal"
                                data-bs-target="#modalEdit{{ $categories->slug }}">
                                <i class=" bx bx-edit-alt me-1"></i> Edit
                            </button>


                            <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal"
                                data-bs-target="#deleteModal{{ $categories->slug }}">
                                <i class="bi bi-trash"></i> Delete
                            </button>

                        </td>
                    </tr>
                    @include('dashboard.categories.edit')
                    @include('dashboard.categories.delete')
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
</section>
<script>
    const title = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/categorie/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });
</script>
@endsection


{{-- <div class="card mx-3">
    <h5 class="card-header">@yield('title')</h5>
    <div class="col-md-4 mx-4">
        <a href="/dashboard/categories/create" class="btn btn-primary mb-3"><i class="bi bi-bookmark-plus"></i>
            Create New</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered border-dark mb-0 table-hover table-striped" id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Category Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $loop->iteration
                            }}</strong>
                    </td>
                    <td>{{ $category->name }}</td>
                    <td><a href="/dashboard/categories/{{ $category->slug }}/edit" class="btn btn-sm btn-warning">
                            <i class=" bx bx-edit-alt me-1"></i> Edit
                        </a>
                        <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal"
                                data-bs-target="#deleteModal{{ $category->slug }}">
                                <i class="bi bi-trash"></i> Delete
                            </button>

                            <div class="modal fade" id="deleteModal{{ $category->slug }}" tabindex="-1"
                                aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah anda yakin ingin menghapus data {{ $category->name }}?
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
</div> --}}
