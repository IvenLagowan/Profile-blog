@extends('homepage.layouts.main')

@section('container')

{{-- Hero --}}
@include('homepage.hero.detail_startup')

<div class="row justify-content-center m-5">
    <div class="col-md-5">
        <h1 class="my-3" data-aos="fade-up" data-aos-delay="100">{{ $startup->title }}</h1>
        @if ($startup->image)
        <div style="max-height: 1000px; overflow: hidden;">
            <img src="{{ asset('storage/' . $startup->image) }}" class="img-fluid" alt="image">
        </div>
        @endif
    </div>
    <div class="col-md-7">
        <article class="my-3 fs-5" data-aos="fade-up" data-aos-delay="200">
            {!! $startup->body !!}
        </article>
    </div>

</div>

@endsection
