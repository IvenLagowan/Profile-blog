@extends('dashboard.layouts.main')

@section('title')Halaman Utama @endsection
@section('title1')Dashboard @endsection
@section('title2')Halaman Utama @endsection

@section('content')
<div class="row">

    <!-- Left side columns -->
    <div class="col-lg-12">
        <div class="row justify-content-center">

            <!-- Sales Card -->
            <div class="col-md-3 col-sm-6">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title">Kategori</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-cart"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $categories }}</h6>
                                <span class="text-danger small pt-1 fw-bold">Total</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title">Berita</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-newspaper"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $news }}</h6>
                                <span class="text-danger small pt-1 fw-bold">Total</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title">Prospect</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-buildings"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $prospects }}</h6>
                                <span class="text-danger small pt-1 fw-bold">Total</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title">Anggota</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-buildings"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $startups }}</h6>
                                <span class="text-danger small pt-1 fw-bold">Total</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title">Lowongan</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-person"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $works }}</h6>
                                <span class="text-danger small pt-1 fw-bold">Total</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title">Lamaran</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-send"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $apply }}</h6>
                                <span class="text-danger small pt-1 fw-bold">Total</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
