{{-- @extends('dashboard.layouts.main')

@section('title')Edit Karier @endsection

@section('container')
<div class="m-3">

    <div class="col-lg-8">
        <div class="card shadow m-3">
            <form method="post" action="/dashboard/work/{{ $work->slug }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="card-body">

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                            name="title" required autofocus value="{{ old('title', $work->title) }}">
                        @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                            name="slug" required value="{{ old('slug', $work->slug) }}">
                        @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        @if ($work->image)
                        <img src="{{ asset('storage/' . $work->image) }}" class="d-block rounded img-fluid"
                            id="uploadedAvatar">
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
                        <label for="jobbrief" class="form-label">Job Brief</label>
                        @error('jobbrief')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input id="jobbrief" type="hidden" name="jobbrief" required
                            value="{{ old('jobbrief', $work->jobbrief) }}">
                        <trix-editor input="jobbrief"></trix-editor>
                    </div>

                    <div class="mb-3">
                        <label for="requirements" class="form-label">Requirements</label>
                        @error('requirements')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input id="requirements" type="hidden" name="requirements" required
                            value="{{ old('requirements', $work->requirements) }}">
                        <trix-editor input="requirements"></trix-editor>
                    </div>

                    <div class="mb-3">
                        <label for="placement" class="form-label">Placement</label>
                        <input type="text" class="form-control @error('placement') is-invalid @enderror" id="placement"
                            name="placement" required autofocus value="{{ old('placement', $work->placement) }}">
                        @error('placement')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="deadline" class="form-label">Deadline</label>
                        <input type="date" class="form-control @error('deadline') is-invalid @enderror" id="deadline"
                            name="deadline" required autofocus value="{{ old('deadline', $work->deadline) }}">
                        @error('deadline')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-end">
                        <a href="/dashboard/work" class="btn btn-outline-secondary me-2"> Close</a>
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
            fetch('/dashboard/works/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
</script>
@endsection --}}

<form method="post" action="/dashboard/work/{{ $work->slug }}" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="modal fade" id="modalEdit{{ $work->slug }}" tabindex="-1" aria-labelledby="modalEditLabel"
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
                            name="title" required autofocus value="{{ old('title', $work->title) }}">
                        @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                            name="slug" required value="{{ old('slug', $work->slug) }}">
                        @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        @if ($work->image)
                        <img src="{{ asset('storage/' . $work->image) }}" class="d-block rounded img-fluid"
                            id="uploadedAvatar">
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
                        <label class="form-label " for="image">work Image</label>
                        <input type="hidden" name="oldImage" value="{{ $work->image }}">
                        @if ($work->image)
                        <img src="{{ asset('storage/' . $work->image) }}"
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
                        <label for="jobbrief" class="form-label">Job Brief</label>
                        @error('jobbrief')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input id="jobbrief" type="hidden" name="jobbrief" required
                            value="{{ old('jobbrief', $work->jobbrief) }}">
                        <trix-editor input="jobbrief"></trix-editor>
                    </div>

                    <div class="mb-3">
                        <label for="requirements" class="form-label">Requirements</label>
                        @error('requirements')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input id="requirements" type="hidden" name="requirements" required
                            value="{{ old('requirements', $work->requirements) }}">
                        <trix-editor input="requirements"></trix-editor>
                    </div>

                    <div class="mb-3">
                        <label for="placement" class="form-label">Placement</label>
                        <input type="text" class="form-control @error('placement') is-invalid @enderror" id="placement"
                            name="placement" required autofocus value="{{ old('placement', $work->placement) }}">
                        @error('placement')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="deadline" class="form-label">Deadline</label>
                        <input type="date" class="form-control @error('deadline') is-invalid @enderror" id="deadline"
                            name="deadline" required autofocus value="{{ old('deadline', $work->deadline) }}">
                        @error('deadline')
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