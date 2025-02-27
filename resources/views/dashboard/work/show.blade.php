@extends('dashboard.layouts.main')

@section('title')Edit Karier @endsection

@section('content')
<div class="m-3">

    <div class="col-md-12 mb-3">
        <div class="card h-100">
            @if ($work->image)
            <img src="{{ asset('storage/' . $work->image) }}" class="card-img-top" style="max-height: 50%">
            @else
            <img src="/assets/img/avatars/1.png" class="card-img-top" style="max-height: 350px">
            @endif


            <div class="panel d-flex mx-3 mt-3">
                <a href="/dashboard/work/{{ $work->slug }}/edit" class="btn btn-warning me-2">Edit</a>
                <form action="/dashboard/work/{{ $work->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" type="button" data-bs-toggle="modal"
                        data-bs-target="#deleteModal{{ $work->slug }}">
                        Delete
                    </button>
                </form>

                <div class="modal fade" id="deleteModal{{ $work->slug }}" tabindex="-1"
                    aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete the data {{ $work->title }}?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h5 class="card-title">About Job - {{ $work->title }}</h5>
                <h5 class="card-title">Job Brief</h5>
                <article class="card-text mb-3">
                    {!! $work->jobbrief !!}
                </article>
                <h5 class="card-title">Requirement</h5>
                <article class="card-text mb-3">
                    {!! $work->requirements !!}
                </article>

                <p class="card-text"><strong>Placement : </strong> {!! $work->placement !!}</p>
                <p class="card-text"><strong>Deadline : </strong> {!! $work->deadline !!}</p>
            </div>
        </div>
    </div>

    @endsection
