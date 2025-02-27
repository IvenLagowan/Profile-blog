<!-- Hero Section -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            @if ($startup->image)
            <div style="max-height: 550px; overflow: hidden;">
                <img src="{{ asset('storage/' . $startup->image) }}" class="d-flex w-100" alt="{{ $startup->title }}">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x550?{{ $startup->category }}" class="d-flex w-100"
                alt="{{ $startup->category }}">
            @endif
        </div>
    </div>
    <!-- breadcumb -->
    <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="/startup">Start Up</a>
        </li>
        <li class="breadcrumb-item active">{{ $startup->title }}</li>
    </ol>
</div>
<!-- End Hero Section -->