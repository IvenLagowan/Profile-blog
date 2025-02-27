@extends('homepage.layouts.main')

@section('container')
@include('homepage.hero.startup')

<!-- contoh -->
@foreach ($startup as $startup)
<section id="unicorn">
    <div class="row justify-content-center m-5">
        <div class="col-md-5" data-aos="fade-up" data-aos-delay="100">
            <h1>{{ $startup->title }}</h1>
            @if ($startup->image)
            {{-- Untuk Gambar, Jika Ada Gambar Yang di Upload --}}
            <img src="{{ asset('storage/' . $startup->image) }}" class="card-img mt-5" height="250px" data-aos="fade-up"
                data-aos-delay="200">
            @endif
        </div>
        <div class="col-md-7" data-aos="fade-up" data-aos-delay="300">
            <p>{!! $startup->excerpt !!}</p>

            <a href="/detail_startup/{{ $startup->slug }}" class="text-decoration-none">Read more <span
                    class="bi bi-arrow-right"></span></a>
        </div>
        <hr class="m-3">
    </div>
</section>
@endforeach
@endsection
