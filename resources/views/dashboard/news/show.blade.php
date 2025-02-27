@extends('dashboard.layouts.main')

@section('container')
    <div id="layoutSidenav" class="m-3">
        <div id="layoutSidenav_content">
            <div class="container">
                <div class="row my-3">
                    <div class="col-lg-12">
                        @if ($news->image)
                            <div style="max-height: 350px; overflow: hidden;" class="mt-3">
                                <img src="{{ asset('storage/' . $news->image) }}" class="img-fluid"
                                    alt="{{ $news->category->name }}" >
                            </div>
                        @else
                            <img src="https://source.unsplash.com/1200x400?{{ $news->category->name }}"
                                class="img-fluid mt-3" alt="{{ $news->category->name }}">
                        @endif
                        <h3 class="mb-3">{{ $news->title }}</h3>

                        <a href="/dashboard/news" class="btn btn-success"><i class="bi bi-arrow-left"></i> Back </a>
                        <a href="/dashboard/news/{{ $news->slug }}/edit" class="btn btn-warning text-light"><i class="bi bi-pen text-light"></i>
                            Edit</a>
                        <form action="/dashboard/news/{{ $news->slug }}" method="news" class="d-inline"> @method('delete')
                            @csrf
                            <button class="btn btn-danger" onclick="return confirm('Are you sure?')"> <i class="bi bi-trash"></i> Delete</button>
                        </form>

                        <article class="my-3 fs-5">
                            {!! $news->body !!}
                        </article>

                    </div>
                </div>
            </div>
            @include('dashboard.partials.footer')
        </div>
    </div>
@endsection
