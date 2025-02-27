@extends('homepage.layouts.main')

@section('container')

{{-- Hero --}}
@include('homepage.hero.startup')

{{-- Name Categories --}}
<div class="container">
    <div class="row justify-content-center">
        <h1 class="m-5 text-center" data-aos="fade-up" data-aos-delay="100">Categories </h1>
    </div>
</div>

{{-- Card Categories --}}
<div class="container mb-5">
    <div class="row row-col-2">
        @foreach ($categories as $category)
        <div class="col-md-4 mb-3" data-aos="fade-up" data-aos-delay="100">
            <a href="/posts?category={{ $category->slug }}">
                <div class="card text-bg-dark">
                    <img src="https://source.unsplash.com/500x400?{{ $category->name }}" class="img-fluid"
                        alt="{{ $category->name }}">
                    <div class="card-img-overlay align-items-center d-flex p-0">
                        <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.5)">
                            {{ $category->name }}</h5>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection
