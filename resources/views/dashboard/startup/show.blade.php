@extends('dashboard.layouts.main')

@section('content')
    <div id="layoutSidenav" class="m-3">
        <div id="layoutSidenav_content">
            @include('dashboard.hero.startup')
            <div class="container">
                <div class="row my-3">
                    <div class="col-lg-12">
                        {{-- @if ($startup->image)
                            <div style="max-height: 350px; overflow: hidden;" class="mt-3">
                                <img src="{{ asset('storage/' . $startup->image) }}" class="img-fluid"
                                    alt="{{ $startup->category->name }}">
                            </div>
                        @else
                            <img src="https://source.unsplash.com/1200x400?{{ $startup->category->name }}"
                                class="img-fluid mt-3" alt="{{ $startup->category->name }}">
                        @endif --}}

                        {{-- <a href="/dashboard/startup" class="btn btn-success"><span data-feather="arrow-left"></span> Back To My
                            startup</a>
                        <a href="/dashboard/startup/{{ $startup->slug }}/edit" class="btn btn-warning"><span
                                data-feather="edit"></span>
                            Edit</a>
                        <form action="/dashboard/startup/{{ $startup->slug }}" method="startup" class="d-inline"> @method('delete')
                            @csrf
                            <button class="btn btn-danger" onclick="return confirm('Are you sure?')"> <span data-feather="x-circle"></span> Delete</button>
                        </form> --}}
                        {{-- <h3 class="mb-3">{{ $startup->title }}</h3> --}}
                        <article class="my-3 fs-5">
                            {!! $startup->body !!}
                        </article>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
