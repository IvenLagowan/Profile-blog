@extends('homepage.layouts.main')

@section('container')
{{-- Hero --}}
@include('homepage.hero.news')


{{-- serach --}}
{{-- <div class="row justify-content-center mb-3 mt-5">
    <div class="col-md-6">
        <form action="/news">
            @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="search"
                    value="{{ request('search') }}">
                <button class="btn btn-success" type="submit">search</button>
            </div>
        </form>
    </div>
</div> --}}

{{-- Card --}}
<div
    class="d-flex justify-content-between flex-wrap flex-md-nowrap  align-items-center pt-3 pb-2 mb-3 border-bottom mx-5">
    <h1>15 <strong>N</strong>ews</h1>
</div>
<div class="row row-cols-2 mx-2">
    @foreach ($news1 as $news)
    <div class="col-md-4 mb-3">
        <a href="/news/{{ $news->slug }}" class="text-decoration-none text-dark">
            <div class="work-box" data-aos="fade-up" data-aos-delay="100">

                @if ($news->image)
                {{-- Untuk Gambar, Jika Ada Gambar Yang di Upload --}}
                <img src="{{ asset('storage/' . $news->image) }}" class="img-fluid" alt="{{ $news->category->name }}">
                @else
                {{-- Jika Gambar Tidak di Upload Oleh User Maka Akan Menampilkan dari Unsplash --}}
                <img src="https://source.unsplash.com/400x200?{{ $news->category->name }}" class="card-img-top"
                    alt="{{ $news->category->name }}">
                @endif

                {{-- Card Body --}}
                <div class="work-content">
                    <div class="row">
                        <div class="col-sm-12">
                            {{-- Buat Judul Berita --}}
                            <h4 class="card-title w-title pt-2 px-2">{{ $news->title }}</h4>
                            <div class="w-more p-2">
                                {{-- Waktu Upload Berita --}}
                                <p><small class="text-muted">{{ $news->created_at->diffForHumans() }}</small></p>
                                {{-- Isi Berita Sedikit --}}
                                <p class="card-text">{{ $news->excerpt }}</p>
                                {{-- Melihat Detail Berita --}}
                                <a href="/news/{{ $news->slug }}" class="text-decoration-none">Read more <span
                                        class="bi bi-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>


<div class="d-flex justify-content-center mt-3 mb-5">
    {{ $news1->links() }}
</div>
@endsection
