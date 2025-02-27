{{-- @extends('dashboard.layouts.main')

@section('content')

<div id="layoutSidenav" class="m-3">
    <div id="layoutSidenav_content">

        <div class="col-lg-8">
            <form method="post" action="/dashboard/categories/{{ $category->slug }}" class="mb-5"
                enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name Category</label>
                    <input type="text" class="form-control @error('name')
                  is-invalid
              @enderror" id="name" name="name" required autofocus value="{{ old('name', $category->name) }}">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control @error('slug')
              is-invalid
          @enderror" id="slug" name="slug" required value="{{ old('slug', $category->slug) }}">
                    @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <a href="/dashboard/categories" class="btn btn-danger">
                    <span data-feather="arrow-left"></span> Back
                </a>
                <button type="submit" class="btn btn-success"><span data-feather="send"></span> Update
                    Category</button>
            </form>
        </div>
    </div>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })
</script>

@endsection --}}

<form method="post" action="/dashboard/categories/{{ $categories->slug }}" class="mb-5" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="modal fade" id="modalEdit{{ $categories->slug }}" tabindex="-1" aria-labelledby="modalEditLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalEditLabel">Edit Kategori</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control @error('name')
                  is-invalid
              @enderror" id="name" name="name" required autofocus value="{{ old('name', $categories->name) }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control @error('slug')
              is-invalid
          @enderror" id="slug" name="slug" required value="{{ old('slug', $categories->slug) }}">
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