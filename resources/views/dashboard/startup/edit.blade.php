{{-- @extends('dashboard.layouts.main')

@section('title')Edit Startup @endsection

@section('container')
<div class="m-3">

    <div class="col-lg-8">
        <div class="card shadow m-3">
            <form method="post" action="/dashboard/startup/{{ $startup->slug }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                            name="title" required autofocus value="{{ old('title', $startup->title) }}"
                            placeholder="Title">
                        @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input type="hidden" class="form-control @error('slug') is-invalid @enderror" id="slug"
                            name="slug" required value="{{ old('slug', $startup->slug) }}">
                        @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        @if ($startup->image)
                        <img src="{{ asset('storage/' . $startup->image) }}" alt="user-avatar"
                            class="d-block rounded img-fluid" id="uploadedAvatar">
                        @else
                        <img src="/assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded img-fluid"
                            id="uploadedAvatar">
                        @endif
                        <label for="upload" class="btn btn-primary mt-2 btn-sm" tabindex="0">
                            <span class="d-none d-sm-block">Upload Image</span>
                            <i class="bx bx-upload d-block"></i>
                            <input type="file" id="upload" name="image" class="account-file-input" hidden
                                accept="image/png, image/jpeg">
                            @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </label>
                        <button type="button" class="btn btn-outline-secondary mt-2 account-image-reset btn-sm">
                            <i class="bx bx-reset d-block"></i>
                            <span class="d-none d-sm-block">Reset</span>
                        </button>
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">Body</label>
                        @error('body')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input id="body" type="hidden" name="body" required value="{{ old('body', $startup->body) }}">
                        <trix-editor input="body"></trix-editor>
                    </div>

                    <div class="d-flex justify-content-end">
                        <a href="/dashboard/startup" class="btn btn-outline-secondary me-2"> Close</a>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

</div>

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

@endsection --}}


<form method="post" action="/dashboard/startup/{{ $startup->slug }}" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="modal fade" id="modalEdit{{ $startup->slug }}" tabindex="-1" aria-labelledby="modalEditLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">

            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalEditLabel">Edit Kategori</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                            name="title" required autofocus value="{{ old('title', $startup->title) }}"
                            placeholder="Title">
                        @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input type="hidden" class="form-control @error('slug') is-invalid @enderror" id="slug"
                            name="slug" required value="{{ old('slug', $startup->slug) }}">
                        @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        @if ($startup->image)
                        <img src="{{ asset('storage/' . $startup->image) }}" alt="user-avatar"
                            class="d-block rounded img-fluid" id="uploadedAvatar">
                        @else
                        <img src="/assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded img-fluid"
                            id="uploadedAvatar">
                        @endif
                        <label for="upload" class="btn btn-primary mt-2 btn-sm" tabindex="0">
                            <span class="d-none d-sm-block">Upload Image</span>
                            <i class="bx bx-upload d-block"></i>
                            <input type="file" id="upload" name="image" class="account-file-input" hidden
                                accept="image/png, image/jpeg">
                            @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </label>
                        <button type="button" class="btn btn-outline-secondary mt-2 account-image-reset btn-sm">
                            <i class="bx bx-reset d-block"></i>
                            <span class="d-none d-sm-block">Reset</span>
                        </button>
                    </div>

                    {{-- <div class="mb-3">
                        <label class="form-label " for="image">startup Image</label>
                        <input type="hidden" name="oldImage" value="{{ $startup->image }}">
                        @if ($startup->image)
                        <img src="{{ asset('storage/' . $startup->image) }}"
                            class="img-preview img-fluid mb-3 col-sm-5 d-block">
                        @else
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                        @endif
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                            name="image" onchange="previewImage()">
                        @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div> --}}

                    <div class="mb-3">
                        <label for="body" class="form-label">Body</label>
                        @error('body')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input id="body" type="hidden" name="body" required value="{{ old('body', $startup->body) }}">
                        <trix-editor input="body"></trix-editor>
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
