<!-- Hero Section -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            @if ($work->image)
            <div style="max-height: 550px; overflow: hidden;">
                <img src="{{ asset('storage/' . $work->image) }}" class="d-flex w-100" alt="{{ $work->title }}">
            </div>
            @else
            <div style="max-height: 550px; overflow: hidden;">
                <img src="/notfound.png" class="d-flex w-100" alt="{{ $work->title }}">
            </div>
            @endif
        </div>
    </div>
    <!-- breadcumb -->
    <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item">
            <a href="/work">Job Openings</a>
        </li>
        <li class="breadcrumb-item">
            <a href="/detail_work/{{ $work->slug}}">{{ $work->title }}</a>
        </li>
        <li class="breadcrumb-item active">Apply</li>
    </ol>
</div>
<!-- End Hero Section -->
