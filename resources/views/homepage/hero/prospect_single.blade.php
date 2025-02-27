<!-- Hero Section -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            @if ($prospect->image)
            <div style="max-height: 550px; overflow: hidden;">
                <img src="{{ asset('storage/' . $prospect->image) }}" class="d-flex w-100"
                    alt="{{ $prospect->category->name }}">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x550?{{ $prospect->category->name }}" class="d-flex w-100"
                alt="{{ $prospect->category->name }}">
            @endif
            <div class="row row-cols-2">
                <div class="col-md-8">
                    <h1 class="text-hero">{{ $prospect->title }}</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcumb -->
    <ol class="breadcrumb d-flex justify-content-center">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active">{{ $title }}</li>
    </ol>
</div>
<!-- End Hero Section -->