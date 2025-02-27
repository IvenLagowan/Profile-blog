@extends('homepage.layouts.main')

@section('container')

<div class="contiainer m-5">


    <div class="row justify-content-center" style="margin-top: 150px;">
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
            <svg viewBox="0 0 24 24" width="32" height="32" stroke="currentColor" stroke-width="2" fill="none"
                stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                <polyline points="22 4 12 14.01 9 11.01"></polyline>
            </svg>
            <button type="button" class="btn-close float-end" aria-label="Close"></button>
        </div>
        @endif
        <div class="col-md-7 mb-3">
            <h2 class="title-style"><strong>{{ $work->title }}</strong></h2>
            <p class="text-justify">Andro Mind adalah perusahaan manufaktur pembuat alat-alat uji Tanah, Beton, Aspal,
                Hidrologi dan
                Klimatologi
                terbaik di Indonesia, yang memiliki pengalaman lebih dari 0 tahun dan memiliki ribuan pelanggan di
                Indonesia.</p>

            <p class="text-justify">Dengan slogan "Good Product Good Service" kami berusaha untuk memberikan produk yang
                berkualitas dan
                pelayanan purna jual yang terbaik. Kami mengundang Anda untuk tumbuh bersama mencapai visi kami menjadi
                perusahaan manufaktur alat uji bertaraf multinasional. Saat ini kami membuka peluang karir sebagai
                {{ $work->title }}.</p>

            <h2 class="title-style">Job Description</h2>
            <p>{!! $work->jobdesk !!} </p>

            <h2 class="title-style">Ringkasan</h2>

            <div>
                <ul class="list-unstyled">
                    <li>
                        <div class="icon-text">
                            <i class="bi bi-building bg-circle"></i>
                            <div class="item-info">
                                <p><strong>Tingkat Pendidikan</strong></p>
                                <p>{{ $work->education }}</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="icon-text">
                            <i class="bi bi-gender-ambiguous bg-circle"></i>
                            <div class="item-info">
                                <p><strong>Gender</strong></p>
                                <p>{{ $work->gender }}</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="icon-text">
                            <i class="bi bi-briefcase-fill bg-circle"></i>
                            <div class="item-info">
                                <p><strong>Status Kerja</strong></p>
                                <p>{{ $work->status }}</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="icon-text">
                            <i class="bi bi-calendar-check bg-circle"></i>
                            <div class="item-info">
                                <p><strong>Batas Lamaran</strong></p>
                                <p>{{ \Carbon\Carbon::parse($work->deadline)->formatLocalized('%d %B %Y') }}</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <h2 class="title-style">Kriteria</h2>
            <p>{!! $work->kriteria !!}</p>

            <h2 class="title-style">Benefit</h2>
            <p>{{ $work->benefit }}</p>

            <p class="text-justify">Jika Anda merasa bahwa posisi {{ $work->title }} di Andro Mind tepat untuk Anda,
                maka jangan ragu untuk mengirimkan CV terbaru Anda ke <a
                    href="mailto:recruitment@andromind.co.id?subject={{ urlencode($work->title) }}">recruitment@andromind.co.id</a>
                atau gunakan formulir pendaftaran di halaman ini.</p>
        </div>

        <div class="col-md-4">
            <div class="card p-4 shadow">
                <h4 class="mb-3">Sumbit Your Application</h4>
                <form action="/applywork" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input class="form-control @error('title') is-invalid @enderror" type="hidden" name="title"
                        value="{{ $work->title }}">
                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3">
                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name"
                                placeholder="Nama Lengkap" required="">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3">
                            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email"
                                placeholder="Email" value="{{ old('email') }}">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3">
                            <input class="form-control @error('phone') is-invalid @enderror" type="text" name="phone"
                                placeholder="No Handphone" value="{{ old('phone') }}">
                            @error('phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3">
                            <input class="form-control @error('education') is-invalid @enderror" type="text"
                                name="education" placeholder="Pendidikan Terakhir" value="{{ old('education') }}">
                            @error('education')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3">
                            <input class="form-control @error('school') is-invalid @enderror" type="text" name="school"
                                placeholder="Asal Sekolah / Universitas" value="{{ old('school') }}">
                            @error('school')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3">
                            <input class="form-control @error('major') is-invalid @enderror" type="text" name="major"
                                placeholder="Jurusan" value="{{ old('major') }}">
                            @error('major')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3">
                            <label for="dokumen">CV dan Dokumen Lainnya</label>
                            <input class="form-control" type="file" id="dokumen" name="cv"
                                placeholder="CV dan Dokumen Lainnya">
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <button class="btn btn-primary" type="submit" name="submit"><span class="btn-title">Submit
                                    Now</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
