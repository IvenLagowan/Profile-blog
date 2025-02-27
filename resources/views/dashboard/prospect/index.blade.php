@extends('dashboard.layouts.main')

@section('title')Prospect @endsection
@section('title1')Olah Data @endsection
@section('title2')Prospect @endsection
@section('content')

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
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
        @include('dashboard.prospect.create')
        <hr class="dropdown-divider">

        <div class="table-responsive">
            <table class="table table-bordered border-dark mb-0 table-hover table-striped" id="datatablesSimple">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Title</th>
                        <th class="text-center">Category</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prospect1 as $prospect)
                    <tr>
                        <td class="text-center"><strong>{{ $loop->iteration }}</strong> </td>
                        <td class="text-center">{{ $prospect->title }}</td>
                        <td class="text-center">{{ $prospect->category->name }}</td>
                        <td class="text-center">
                            <button type="button" class="btn btn-sm btn-warning text-white" data-bs-toggle="modal"
                                data-bs-target="#modalEdit{{ $prospect->slug }}">
                                <i class=" bx bx-edit-alt me-1"></i> Edit
                            </button>


                            <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal"
                                data-bs-target="#deleteModal{{ $prospect->slug }}">
                                <i class="bi bi-trash"></i> Delete
                            </button>


                        </td>
                    </tr>
                    @include('dashboard.prospect.edit')
                    @include('dashboard.prospect.delete')
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
</section>

{{-- create --}}
<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/prospects/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        })
</script>

{{-- edit --}}
<script>
    const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/prospects/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
</script>

@endsection



{{-- <div class="m-3">
    <div class="card m-3">
        <h5 class="card-header">@yield('title')</h5>
        <div class="col-md-3 mx-2">
            <a href="/dashboard/prospect/create" class="btn btn-primary mb-3 mx-3"><i class="bi bi-bookmark-plus"></i>
                Create New</a>
        </div>

        <div class="table-responsive text-nowrap px-4 pb-4">
            <table class="table table-striped table-bordered border-dark" id="datatablesSimple">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prospect1 as $prospect)
                    <tr>
                        <td class="text-center"><strong>{{ $loop->iteration }}</strong> </td>
                        <td class="text-center">{{ $prospect->title }}</td>
                        <td class="text-center">{{ $prospect->category->name }}</td>
                        <td>
                            <div class="d-flex align-items-center justify-content-center">
                                <a href="/dashboard/prospect/{{ $prospect->slug }}/edit"
                                    class="btn btn-warning btn-sm mx-2 text-white" data-toggle="modal"
                                    data-target="#editModal{{ $prospect->id }}">
                                    <i class="bi bi-pen"></i> Edit
                                </a>

                                <form action="/dashboard/prospect/{{ $prospect->slug }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal{{ $prospect->slug }}">
                                        <i class="bi bi-trash"></i> Delete
                                    </button>

                                    <div class="modal fade" id="deleteModal{{ $prospect->slug }}" tabindex="-1"
                                        aria-labelledby="deleteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel">Confirm Delet</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah anda yakin ingin menghapus data {{ $prospect->title }}?
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

                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row justify-content-end mt-3">
                <div class="col-md-2 mx-3">
                    {{ $prospect1->links() }}
                </div>
            </div>

        </div>
    </div>
</div> --}}
