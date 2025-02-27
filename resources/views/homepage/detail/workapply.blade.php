@extends('homepage.layouts.main')

@section('container')

{{-- Hero --}}
@include('homepage.hero.apply_work')

<div class="row justify-content-center m-5">
    <div class="col-md-8 work-box">
        <div class=" p-5">
            <h4>{{ $work->title }}</h4>

            {{-- Form --}}
            <form action="/applywork" method="post" enctype="multipart/form-data">
                @csrf
                {{-- Title Job Type Hidden --}}
                <div class="mb-3">
                    <input type="hidden" class="form-control @error('title') is-invalid @enderror" id="title"
                        name="title" required value="{{ old('title', $work->title) }}" readonly>
                </div>
                {{-- Id Card --}}
                <div class="mb-3">
                    <label for="idcard" class="form-label">ID Card Number / Nomor KTP <span
                            style="color: red">*</span></label>
                    <input type="text" class="form-control @error('idcard') is-invalid @enderror" id="idcard"
                        name="idcard" required autofocus value="{{ old('idcard') }}"
                        placeholder="ID Card Number / Nomor KTP">
                    @error('idcard')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name / Nama Lengkap sesuai KTP <span
                            style="color: red">*</span></label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                        required autofocus value="{{ old('name') }}" placeholder="Full Name / Nama Lengkap sesuai KTP">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                {{-- Gander --}}
                <div class="mb-3">
                    <label for="name" class="form-label">Gender / Jenis Kelamin (Male = Pria, Female = Wanita) <span
                            style="color: red">*</span></label>
                    <select class="form-control" name="gander" id="gander">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address on ID Card/ Alamat sesuai KTP <span
                            style="color: red">*</span></label>
                    <input name="address" id="address" class="form-control @error('address') is-invalid @enderror"
                        placeholder="Address on ID Card/ Alamat sesuai KTP" required value="{{ old('address') }}">
                    @error('address')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">City or District on ID Card / Kota atau Kabupaten sesuai KTP
                        <span style="color: red">*</span></label>
                    <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city"
                        required autofocus value="{{ old('city') }}"
                        placeholder="City or District on ID Card / Kota atau Kabupaten sesuai KTP">
                    @error('city')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date of Birth / Tanggal Lahir <span
                            style="color: red">*</span></label>
                    <input type="date" name="date" id="date" class="form-control" required value="{{ old('date') }}">
                    @error('date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address / Alamat Email<span
                            style="color: red">*</span></label>
                    <input type="text" name="email" id="email" class="form-control"
                        placeholder="email address / alamat email" required value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number / Nomor Handphone <span
                            style="color: red">*</span></label>
                    <input type="text" name="phone" id="phone" class="form-control"
                        placeholder="Phone Number / Nomor Handphone" required value="{{ old('phone') }}">
                    @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="education" class="form-label">Last Education Level / Tingkat Pendidikan Terakhir <span
                            style="color: red">*</span></label>
                    <select class="form-control" name="education" id="education">
                        <option value="S3">S3 / Doctoral Degree / PhD</option>
                        <option value="S2">S2 / Master Degree</option>
                        <option value="S1">S1 / Bachelor Degree</option>
                        <option value="D4">D4 / Associate Degree</option>
                        <option value="D123">D1-D2-D3 / Diploma I-II-III</option>
                        <option value="smk">SMA / SMK/ Paket C </option>
                        <option value="smp">SMP / Paket B</option>
                        <option value="sd">SD</option>
                        <option value="non">Non Education</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="school" class="form-label">School or University / Sekolah atau Universitas <span
                            style="color: red">*</span></label>
                    <input type="text" name="school" id="school" class="form-control"
                        placeholder="School or University / Sekolah atau Universitas" required
                        value="{{ old('school') }}">
                    @error('school')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="major" class="form-label">Major / Jurusan <span style="color: red">*</span></label>
                    <input type="text" name="major" id="major" class="form-control" placeholder="Major / Jurusan"
                        required value="{{ old('major') }}">
                    @error('major')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="gpa" class="form-label">GPA / IPK (sesuai transkrip) <span
                            style="color: red">*</span></label>
                    <input type="text" name="gpa" id="gpa" class="form-control"
                        placeholder="GPA / IPK (sesuai transkrip)" required value="{{ old('gpa') }}">
                    @error('gpa')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="graduation" class="form-label">Date of Graduation / Tanggal Lulus <span
                            style="color: red">*</span></label>
                    <input type="date" name="graduation" id="graduation" class="form-control"
                        placeholder="Date of Graduation / Tanggal Lulus" required value="{{ old('graduation') }}">
                    @error('graduation')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="course1" class="form-label">Training - Course - Certification Name / Nama Pelatihan -
                        Kursus - Sertifikasi (Jika Belum Pernah Megikuti Tulis Tidak Pernah) </label>
                    <input type="text" name="course1" id="course1" class="form-control"
                        placeholder="Training - Course1 - Certification Name / Nama Pelatihan - Kursus - Sertifikasi"
                        value="{{ old('course1') }}">
                </div>
                <div class="mb-3">
                    <label for="course2" class="form-label">Training - Course - Certification Name / Nama Pelatihan -
                        Kursus - Sertifikasi (Jika Belum Pernah Megikuti Tulis Tidak Pernah)</label>
                    <input type="text" name="course2" id="course2" class="form-control"
                        placeholder="Training - Course2 - Certification Name / Nama Pelatihan - Kursus - Sertifikasi"
                        value="{{ old('course2') }}">
                </div>
                <div class="mb-3">
                    <label for="course3" class="form-label">Training - Course - Certification Name / Nama Pelatihan -
                        Kursus - Sertifikasi (Jika Belum Pernah Megikuti Tulis Tidak Pernah)</label>
                    <input type="text" name="course3" id="course3" class="form-control"
                        placeholder="Training - Course3 - Certification Name / Nama Pelatihan - Kursus - Sertifikasi"
                        value="{{ old('course3') }}">
                </div>
                <div class="mb-3">
                    <label for="experience1" class="form-label">Working Experience - Company Name / Pengalaman - Nama
                        Perusahaan/Organisasi (Jika Frashgradute Tulis Frashgradute)</label>
                    <input type="text" name="experience1" id="experience1" class="form-control"
                        placeholder="Working Experience - Company Name / Pengalaman - Nama Perusahaan/Organisasi"
                        value="{{ old('experience1') }}">
                </div>
                <div class="mb-3">
                    <label for="experience2" class="form-label">Working Experience - Company Name / Pengalaman - Nama
                        Perusahaan/Organisasi (Jika Frashgradute Tulis Frashgradute)</label>
                    <input type="text" name="experience2" id="experience2" class="form-control"
                        placeholder="Working Experience - Company Name / Pengalaman - Nama Perusahaan/Organisasi"
                        value="{{ old('experience2') }}">
                </div>
                <div class="mb-3">
                    <label for="experience3" class="form-label">Working Experience - Company Name / Pengalaman - Nama
                        Perusahaan/Organisasi (Jika Frashgradute Tulis Frashgradute)</label>
                    <input type="text" name="experience3" id="experience3" class="form-control"
                        placeholder="Working Experience - Company Name / Pengalaman - Nama Perusahaan/Organisasi"
                        value="{{ old('experience3') }}">
                </div>
                <div class="mb-3">
                    <label class="form-label " for="cv">Latest CV / CV Terbaru(Tipe file PDF dan Ukuran file Max.
                        5MB)<span style="color: red">*</span></label>
                    <input type="file" class="form-control" id="cv" name="cv">
                    {{-- @error('cv') is-invalid @enderror --}}
                    @error('cv')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label " for="image">Image / Gambar (Background Red / Latar Belakang Merah Max.
                        5MB)<span style="color: red">*</span></label>
                    <input type="file" class="form-control" id="image" name="image">
                    @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                {{-- Submit --}}
                <button class="work-box btn btn-primary"
                    style="color: #fff; font-size: 18px; font-family: Arial Narrow Bold" data-aos="fade-up"
                    type="submit">Send Apply
                    <span class="bi bi-send"></span></button>
            </form>
            {{-- Last Form --}}
        </div>
    </div>
</div>

@endsection
