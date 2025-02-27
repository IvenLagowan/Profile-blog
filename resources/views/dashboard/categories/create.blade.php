{{-- @extends('dashboard.layouts.main')

@section('title')Create New Categories @endsection

@section('content')

<div class="m-3">

    <div class="col-lg-8">
        <div class="card shadow m-3">
            <form method="post" action="/dashboard/categories" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                    <div class="mb-3">
                        <label for="name" class="form-label">Category</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" required autofocus value="{{ old('name') }}" placeholder="Name Category">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                            name="slug" required value="{{ old('slug') }}" placeholder="Slug" readonly
                            style="background-color: #ffffff;">
                        @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-end">
                        <a href="/dashboard/categories" class="btn btn-outline-secondary me-2"> Close</a>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const title = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/categorie/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });
</script>
@endsection --}}
<form method="post" action="/dashboard/categories" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalTambahLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Category</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" required autofocus value="{{ old('name') }}" placeholder="Name Category">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                            name="slug" required value="{{ old('slug') }}" placeholder="Slug" readonly
                            style="background-color: #ffffff;">
                        @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>
