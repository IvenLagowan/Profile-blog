@extends('homepage.layouts.main')

@section('container')
@include('homepage.hero.work')

<div class="m-5">
    <div class="row justify-content-center text-center">
        <div class="col-md-10">

            @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif

            <h1 data-aos="fade-up" data-aos-delay="100">Find Your Dream Job in Andro Mind</h1>
            <small>
                <p data-aos="fade-up" data-aos-delay="100">We're looking for great people to join our growing team</p>
            </small>
            <p data-aos="fade-up" data-aos-delay="300">Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Numquam, magni, iusto ex sapiente libero porro beatae molestias et quam fuga nam animi
                pariatur necessitatibus, provident repudiandae soluta enim nihil sed laborum ducimus doloribus sunt.
                Doloremque, laudantium? Aliquam itaque dicta quam non, obcaecati exercitationem, explicabo adipisci
                vitae velit ad atque vero quas aliquid omnis </p>
        </div>
    </div>
    <hr>

    <div class="row justify-content-center text-center m-2">
        <div class="col-md-4">
            <div class="work-box" data-aos="fade-up" data-aos-delay="100">
                <h2 style="text-transform: uppercase; color: #0F3460; font-family: Arial Narrow Bold">
                    <strong>O</strong>ur <strong>O</strong>pening
                </h2>
                <small>
                    <p class="pb-2">Many Positions Are Needed Annually</p>
                </small>
            </div>
        </div>
    </div>

    <div class="work-box pb-2">
        <div class="row">
            @foreach ($work as $work)
            <div class="col-md-3 mb-5">
                <div class="card text-bg-light" data-aos="fade-up" data-aos-delay="100">
                    <div class="row justify-content-center text-center">
                        <div class="position-absolute mt-0 pt-1"
                            style="background-color: #0f3360a6; font-size: 15px; font-family: Arial Narrow Bold">
                            <p class="text-white">We Are Hiring</p>
                        </div>
                        <p class="position-absolute mt-4"
                            style="background-color: #ffffff94; font-size: 12px; font-family: Arial; color: #0F3460;">
                            Deadline until
                            <small>{{ $work->deadline }}</small>
                        </p>
                    </div>

                    @if ($work->image)
                    <img src="{{ asset('storage/' . $work->image) }}" class="card-img" alt="{{ $work->name }}"
                        height="305px">
                    @else
                    <img src="/notfound.png" class="card-img" alt="{{ $work->name }}" height="305px">
                    @endif

                    <div class="row justify-content-center text-center">
                        <div class="card-img-overlay">
                            <h3 class="card-title"
                                style="background-color: #ffffff94; font-size: 150%;color: #0F3460; font-family: Arial Narrow Bold ">
                                {{ $work->title }}
                            </h3>
                            <div class="col-md-12">
                                <a class="work-box btn btn-light"
                                    style="color: #0F3460; font-size: 18px; font-family: Arial Narrow Bold"
                                    href="/detail_work/{{ $work->slug }}">Apply <i class="bi bi-send"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
