@extends('homepage.layouts.main')

@section('container')
@include('homepage.hero.news_single')

<div class="row justify-content-center m-5">
    <div class="col-md-5">
        <h1 class="my-3" data-aos="fade-up" data-aos-delay="100">{{ $news->title }}</h1>
        <p><small class="text-muted" data-aos="fade-up" data-aos-delay="200">{{ $news->created_at->diffForHumans() }}
                <a href="/news/category={{ $news->category->slug }}" class="text-decoration-none">{{
                    $news->category->name }}</a>
            </small></p>
        @if ($news->image)
        <div style="max-height: 350px; overflow: hidden;">
            <img src="{{ asset('storage/' . $news->image) }}" class="img-fluid" alt="{{ $news->category->name }}">
        </div>
        @else
        <img src="https://source.unsplash.com/1200x400?{{ $news->category->name }}" class="img-fluid"
            alt="{{ $news->category->name }}">
        @endif
    </div>
    <div class="col-md-7">
        <article class="my-3 fs-5" data-aos="fade-up" data-aos-delay="100">
            {!! $news->body !!}
        </article>
    </div>
</div>
@endsection
