<!-- Hero Section -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            @if ($news->image)
            <div style="max-height: 550px; overflow: hidden;">
                <img src="{{ asset('storage/' . $news->image) }}" class="d-flex w-100"
                    alt="{{ $news->category->name }}">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x550?{{ $news->category->name }}" class="d-flex w-100"
                alt="{{ $news->category->name }}">
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-hero">{{ $news->title }}</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcumb -->
    <ol class="breadcrumb d-flex justify-content-center">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="/news">News</a>
        </li>
        <li class="breadcrumb-item active">{{ $title }}</li>
    </ol>
</div>
<!-- End Hero Section -->