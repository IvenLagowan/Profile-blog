@extends('dashboard.layouts.main')

@section('container')
    <div id="layoutSidenav" class="m-3">
        <div id="layoutSidenav_content">

            <div class="table-responsive col-md-12 mr-3">

            @foreach ($user as $user)

            <p>{{ $user->title }}</p>
            <p>{{ $user->placement }}</p>
            
            @endforeach
            </div>








        </div>
    </div>
@endsection
