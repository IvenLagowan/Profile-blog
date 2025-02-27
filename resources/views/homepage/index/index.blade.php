@extends('homepage.layouts.main')

@section('container')

@include('homepage.hero.home')

<!-- About -->
<section id="about">
    <div class="m-5">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <h1 style="font-size: 36px; font-family: Arial Narrow Bold p-3">Tentang Perusahaan </h1>
            </div>
            <div class="col-md-7">
                <p>Andromind merupakan perusahaan yang bergerak di bidang
                    teknologi, menjadi pionir dalam menciptakan solusi inovatif untuk memenuhi tuntutan masa depan.
                    Dengan fokus pada pengembangan kecerdasan buatan (AI), Andromind berkomitmen untuk memberikan
                    kontribusi signifikan dalam meredefinisi cara kita berinteraksi dengan teknologi.</p>
                <p>
                    Kata kunci utama yang melekat pada Andromind adalah "kecerdasan" dan "inovasi". Sebagai penggerak
                    utama di dunia teknologi, perusahaan ini telah berhasil menghadirkan berbagai produk dan layanan
                    unggulan yang mengubah cara kita bekerja, belajar, dan berkomunikasi.
                </p>
                <p>
                    Andromind menawarkan solusi AI yang canggih dan dapat disesuaikan, mencakup aplikasi berbasis
                    kecerdasan buatan untuk sektor bisnis, pendidikan, kesehatan, dan lainnya. Melalui pendekatan yang
                    holistik, Andromind memastikan bahwa teknologi yang dihasilkan tidak hanya efisien tetapi juga
                    beretika, memperhatikan dampak positif bagi masyarakat dan lingkungan.</p>
                <p>
                    Dalam perjalanannya, Andromind terus mengembangkan teknologi baru, seperti integrasi teknologi
                    wearable, pengolahan bahasa alami, dan analisis data tingkat tinggi. Semua ini bertujuan untuk
                    menciptakan ekosistem teknologi yang lebih cerdas, responsif, dan terhubung.
                </p>
                <p>
                    Andromind juga memegang teguh nilai-nilai keberlanjutan dan tanggung jawab sosial perusahaan. Dengan
                    memahami bahwa teknologi dapat menjadi kekuatan positif untuk perubahan, perusahaan ini aktif
                    berpartisipasi dalam berbagai inisiatif sosial dan lingkungan.</p>
            </div>
        </div>
    </div>
</section>
<!-- Last About -->

<!-- Jobs Prospect -->
<section id="jobsprospect" class="komoditas">
    <div class="m-4 py-5">
        <div class="row justify-content-center text-center text-light">
            <div class="col" data-aos="fade-up" data-aos-delay="100">
                <h1 style="font-size: 36px; font-family: Arial Narrow Bold">Prospek Pekerjaan</h1>
            </div>
        </div>
        <div class="row">
            @foreach ($prospect as $prospect)
            <div class="col-md-3 mt-3">
                <div class="card text-bg-light" data-aos="fade-up" data-aos-delay="200">
                    <a href="/detail_prospect/{{ $prospect->slug }}" class="text-light">
                        @if ($prospect->image)
                        <img src="{{ asset('storage/' . $prospect->image) }}" class="card-img"
                            alt="{{ $prospect->category->name }}" style="max-height: 350px">
                        @else
                        <img src="/notfound.png" class="card-img" alt="{{ $prospect->category->name }}"
                            style="max-height: 350px">
                        @endif


                        <div class="card-img-overlay"
                            style="background-image: linear-gradient(to top right, #000000, #00000027,  #00000000)">
                            <h3 class="card-title fs-5">{{ $prospect->title }}</h3>
                            <p class="card-text">Selengkapnya <i class="bi bi-arrow-right"></i></p>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Last Jobs Prospect-->

<!-- News -->
<section id="news">
    <div class="m-5">
        <div class="work-box">
            <div class="row mx-2 ">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <h1 style="font-size: 36px; font-family: Arial Narrow Bold">Berita</h1>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            @foreach ($news as $news)
            <div class="col-md-4">
                <div class="work-box mt-3" data-aos="fade-up" data-aos-delay="100">
                    <a href="/news/{{ $news->slug }}">
                        <div div class="work-img">
                            @if ($news->image)
                            <img src="{{ asset('storage/' . $news->image) }}" class="img-fluid"
                                alt="{{ $news->category->name }}">
                            @else
                            <img src="https://source.unsplash.com/400x200?{{ $news->category->name }}" class="img-fluid"
                                alt="{{ $news->category->name }}">
                            @endif
                        </div>
                    </a>

                    <div class="work-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="w-title px-3 pt-2">{{ $news->title }}</h4>
                                <div class="w-more px-3 pb-3">
                                    <small class="text-muted">{{ $news->created_at->diffForHumans() }}</small>
                                </div>
                                <p class="card-text">{{ $news->excerpt }}</p>
                                <div class="w-more px-3 pb-3">
                                    <a href="/news" class="text-decoration-none">Selengkapnya <span
                                            class="bi bi-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Last News -->

@endsection
