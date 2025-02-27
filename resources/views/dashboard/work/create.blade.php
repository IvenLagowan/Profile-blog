{{-- @extends('dashboard.layouts.main')

@section('title')Create New Karier @endsection

@section('container')
<div class="m-3">

    <div class="col-lg-8">
        <div class="card shadow m-3">
            <form method="post" action="/dashboard/work" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                            name="title" required autofocus value="{{ old('title') }}" placeholder="Title Karier">
                        @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                            name="slug" required value="{{ old('slug') }}" disable>
                        @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <img src="/assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded img-fluid"
                            id="uploadedAvatar">
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
                        <label for="jobdesk" class="form-label">Job Description</label>
                        @error('jobdesk')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input id="jobdesk" type="hidden" name="jobdesk" required value="{{ old('jobdesk') }}">
                        <trix-editor input="jobdesk"></trix-editor>
                    </div>

                    <div class="mt-2 mb-3">
                        <label for="education" class="form-label">Select Education</label>
                        <select id="education" class="form-select" name="education">
                            <option disabled selected>Select Education</option>
                            <option value="smak">SMA/SMK</option>
                            <option value="d3">Diploma (D3)</option>
                            <option value="s1">Bachelor's Degree (S1)</option>
                            <option value="s2">Master's Degree (S2)</option>
                            <option value="s3">Doctorate Degree (S3)</option>
                        </select>
                    </div>


                    <div class="mt-2 mb-3">
                        <label for="gender" class="form-label">Select Gender</label>
                        <select id="gender" class="form-select" name="gender">
                            <option disabled selected>Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="both">Male/Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="mt-2 mb-3">
                        <label for="status" class="form-label">Select Job Status</label>
                        <select id="status" class="form-select" name="status">
                            <option disabled selected>Select Job Status</option>
                            <option value="parttime">Part-time</option>
                            <option value="fulltime">Full-time</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="deadline" class="form-label">Deadline</label>
                        <input type="date" class="form-control @error('deadline') is-invalid @enderror" id="deadline"
                            name="deadline" required autofocus value="{{ old('deadline') }}">
                        @error('deadline')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="kriteria" class="form-label">kriteria</label>
                        @error('kriteria')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input id="kriteria" type="hidden" name="kriteria" required value="{{ old('kriteria') }}">
                        <trix-editor input="kriteria"></trix-editor>
                    </div>

                    <div class="mt-2 mb-3">
                        <label class="form-label">Select Benefits:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="benefits[]" id="healthcare"
                                value="healthcare">
                            <label class="form-check-label" for="healthcare">Jaminan Kesehatan</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="benefits[]" id="employment"
                                value="employment">
                            <label class="form-check-label" for="employment">Ketenagakerjaan</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="benefits[]" id="financial"
                                value="financial">
                            <label class="form-check-label" for="financial">Financial Support</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="benefits[]" id="entertainment"
                                value="entertainment">
                            <label class="form-check-label" for="entertainment">Entertainment</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="benefits[]" id="education"
                                value="education">
                            <label class="form-check-label" for="education">Dana Pendidikan</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="benefits[]" id="familycare"
                                value="familycare">
                            <label class="form-check-label" for="familycare">Family Care</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="benefits[]" id="dll" value="dll">
                            <label class="form-check-label" for="dll">Dan Lain-lain</label>
                        </div>
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

<form method="post" action="/dashboard/work" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalTambahLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                            name="title" required autofocus value="{{ old('title') }}" placeholder="Title Karier">
                        @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                            name="slug" required value="{{ old('slug') }}" disable>
                        @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <img src="/assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded img-fluid"
                            id="uploadedAvatar">
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
                        <label for="jobdesk" class="form-label">Job Description</label>
                        @error('jobdesk')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input id="jobdesk" type="hidden" name="jobdesk" required value="{{ old('jobdesk') }}">
                        <trix-editor input="jobdesk"></trix-editor>
                    </div>

                    <div class="mt-2 mb-3">
                        <label for="education" class="form-label">Pendidikan</label>
                        <select id="education" class="form-select" name="education">
                            <option disabled selected>Pilih Pendidikan</option>
                            <option value="smak">SMA/SMK</option>
                            <option value="d3">Diploma (D3)</option>
                            <option value="s1">Strata 1 (S1)</option>
                            <option value="s2">Strata 2 (S2)</option>
                            <option value="s3">Strata 3 (S3)</option>
                        </select>
                    </div>


                    <div class="mt-2 mb-3">
                        <label for="gender" class="form-label">Jenis Kelamin</label>
                        <select id="gender" class="form-select" name="gender">
                            <option disabled selected>Pilih Jenis Kelamin</option>
                            <option value="male">Laki-laki</option>
                            <option value="female">Perempuan</option>
                            <option value="both">Laki-laki/Perempuan</option>
                            <option value="other">Lainnya</option>
                        </select>
                    </div>

                    <div class="mt-2 mb-3">
                        <label for="status" class="form-label">Select Job Status</label>
                        <select id="status" class="form-select" name="status">
                            <option disabled selected>Select Job Status</option>
                            <option value="parttime">Part-time</option>
                            <option value="fulltime">Full-time</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="deadline" class="form-label">Deadline</label>
                        <input type="date" class="form-control @error('deadline') is-invalid @enderror" id="deadline"
                            name="deadline" required autofocus value="{{ old('deadline') }}">
                        @error('deadline')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="kriteria" class="form-label">kriteria</label>
                        @error('kriteria')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input id="kriteria" type="hidden" name="kriteria" required value="{{ old('kriteria') }}">
                        <trix-editor input="kriteria"></trix-editor>
                    </div>

                    <div class="mt-2 mb-3">
                        <label class="form-label">Select Benefits:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="benefits[]" id="healthcare"
                                value="healthcare">
                            <label class="form-check-label" for="healthcare">Jaminan Kesehatan</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="benefits[]" id="employment"
                                value="employment">
                            <label class="form-check-label" for="employment">Ketenagakerjaan</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="benefits[]" id="financial"
                                value="financial">
                            <label class="form-check-label" for="financial">Financial Support</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="benefits[]" id="entertainment"
                                value="entertainment">
                            <label class="form-check-label" for="entertainment">Entertainment</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="benefits[]" id="education"
                                value="education">
                            <label class="form-check-label" for="education">Dana Pendidikan</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="benefits[]" id="familycare"
                                value="familycare">
                            <label class="form-check-label" for="familycare">Family Care</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="benefits[]" id="dll" value="dll">
                            <label class="form-check-label" for="dll">Dan Lain-lain</label>
                        </div>
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