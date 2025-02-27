<!-- Hero Section -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/hero/hero-slide-4.png" class="d-block w-100" alt="home-slide-1.jpg">
      <div class="row row-cols-2">
        <div class="col-md-8">
          <h1 class="text-hero">{{ $startup->title }}</h1>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/img/hero/hero-slide-5.png" class="d-block w-100" alt="home-slide-2.jpg">
      <div class="row row-cols-2">
        <div class="col-md-8">
          <h1 class="text-hero">{{ $startup->title }}</h1>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/img/hero/hero-slide-6.png" class="d-block w-100" alt="home-slide-3.jpeg">
      <div class="row row-cols-2">
        <div class="col-md-8">
          <h1 class="text-hero">{{ $startup->title }}</h1>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>


    <div class="carousel-inner">
      <div class="carousel-item active">
        {{-- @if ($startup->image)    --}}
        {{-- <img src="/img/hero/hero-slide-4.png" class="d-block w-100" alt="home-slide-1.jpg"> --}}
        {{-- @else
            <img src="https://source.unsplash.com/1200x550?{{ $startup->category->name }}" class="d-block w-100" alt="{{ $startup->category->name }}"> --}}
        {{-- @endif --}}
        {{-- <img src="https://source.unsplash.com/1200x400?{{ $startup->category->name }}" class="d-block w-100" alt="home-slide-1.jpg"> --}}
        {{-- <div class="row row-cols-2">
          <div class="col-md-8">
            <h1 class="text-hero">{{ $startup->title }}</h1>
          </div>
        </div> --}}
      </div>
    </div>
     <!-- breadcumb -->
     <ol class="breadcrumb d-flex justify-content-center">
      <li>
        <a href="/dashboard/startup" class="btn btn-success"><span data-feather="arrow-left"></span> Back To My
          startup</a>
      <a href="/dashboard/startup/{{ $startup->slug }}/edit" class="btn btn-warning"><span
              data-feather="edit"></span>
          Edit</a>
      <form action="/dashboard/startup/{{ $startup->slug }}" method="startup" class="d-inline"> @method('delete')
          @csrf
          <button class="btn btn-danger" onclick="return confirm('Are you sure?')"> <span data-feather="x-circle"></span> Delete</button>
      </form>
      </li>
    </ol>
  </div>
  <!-- End Hero Section -->