@extends('dashboard.layouts.main')

@section('title')Startup @endsection
@section('title1')Olah Data @endsection
@section('title2')Startup @endsection

@section('content')

@if (session()->has('success'))
<div class="alert alert-success col-lg-12" role="alert">
    {{ session('success') }}
</div>
@endif

{{-- <div class="m-3">
    <div class="card mx-3">
        <h5 class="card-header">@yield('title')</h5>
        <div class="col-md-4 mx-4">
            <a href="/dashboard/startup/create" class="btn btn-primary mb-3"><i class="bi bi-bookmark-plus"></i>
                Create New</a>
        </div>
        <div class="table-responsive text-nowrap px-4 pb-2">
            <table class="table table-striped table-bordered border-dark text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($startup as $startup)
                    <tr>
                        <td><strong>{{ $loop->iteration }}</strong></td>
                        <td>{{ $startup->title }}</td>
                        <td>
                            <a href="/dashboard/startup/{{ $startup->slug }}" class="btn btn-sm btn-success">
                                <i class=" bx bx-show-alt me-1"></i> Show
                            </a>
                            <a href="/dashboard/startup/{{ $startup->slug }}/edit" class="btn btn-sm btn-warning">
                                <i class=" bx bx-edit-alt me-1"></i> Edit
                            </a>
                            <form action="/dashboard/startup/{{ $startup->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal{{ $startup->slug }}">
                                    <i class="bi bi-trash"></i> Delete
                                </button>

                                <div class="modal fade" id="deleteModal{{ $startup->slug }}" tabindex="-1"
                                    aria-labelledby="deleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel">Confirm Delet</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah anda yakin ingin menghapus data {{ $startup->title }}?
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
        @include('dashboard.startup.create')
        <hr class="dropdown-divider">

        <div class="table-responsive">
            <table class="table table-bordered border-dark mb-0 table-hover table-striped" id="datatablesSimple">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Judul</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($perusahaan as $startup)
                    <tr>
                        <td class="text-center"><strong>{{ $loop->iteration }}</strong></td>
                        <td class="text-center">{{ $startup->title }}</td>
                        <td>
                            <a href="/dashboard/startup/{{ $startup->slug }}" class="btn btn-sm btn-success">
                                <i class=" bx bx-show-alt me-1"></i> Show
                            </a>
                            <button type="button" class="btn btn-sm btn-warning text-white" data-bs-toggle="modal"
                                data-bs-target="#modalEdit{{ $startup->slug }}">
                                <i class=" bx bx-edit-alt me-1"></i> Edit
                            </button>
                            <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal"
                                data-bs-target="#deleteModal{{ $startup->slug }}">
                                <i class="bi bi-trash"></i> Delete
                            </button>
                            @include('dashboard.startup.edit')
                        </td>
                    </tr>
                    @include('dashboard.startup.delete')
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
        fetch('/dashboard/startupss/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

</script>

<script>
    const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/startup/checkSlug?title=' + title.value)
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
