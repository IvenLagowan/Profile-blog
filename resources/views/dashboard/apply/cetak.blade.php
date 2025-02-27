@extends('dashboard.layouts.main-cetak')

@section('container')
    <div class="mt-3 mx-5">
        <div class="card-header">
            <img src="/img/logo/logo.png" alt="logo" style="max-width: 30%">
        </div>
        <div class="row row-cols-2  mx-2 mt-5">
            <div class="col-md-2">
                <div class="work-box">
                    <div class="card-img">
                        @if ($apply->image)
                            <div style="max-height: 90%; max-width: 80%;">
                                <img src="{{ asset('storage/' . $apply->image) }}" class="img-fluid mx-4 mb-3"
                                    alt="{{ $apply->name }}">
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <h1><strong>{{ $apply->name }}</strong></h1>
                <p><strong>
                        <td>Job Title </td>
                    </strong>
                    <td>{!! $apply->title !!}</td>
                </p>
                <p><strong>
                        <td>Id Card</td>
                        <td>:</td>
                    </strong>{{ $apply->idcard }}</p>
                <p><strong>
                        <td>Date Brithday</td>
                        <td>:</td>
                    </strong>
                    <td>{{ $apply->date }}</td>
                </p>
                <p><strong>
                        <td>Gander</td>
                        <td>:</td>
                    </strong>
                    <td>{{ $apply->gander }}</td>
                </p>
                <p><strong>
                        <td>Address</td>
                        <td>:</td>
                    </strong>
                    <td>{{ $apply->address }}, {{ $apply->city }}</td>
                </p>
                <p><strong>
                        <td>Email</td>
                        <td>:</td>
                    </strong>
                    <td>{{ $apply->email }}</td>
                </p>
            </div>

            <div class="col-md-3 mt-3">
                <p><strong>
                        <td>Phone</td>
                        <td>:</td>
                    </strong>
                    <td>{{ $apply->phone }}</td>
                </p>
                <p><strong>
                        <td>Education</td>
                        <td>: </td>
                    </strong>
                    <td>{{ $apply->education }}</td>
                </p>
                <p><strong>
                        <td>School</td>
                        <td>: </td>
                    </strong>
                    <td>{{ $apply->school }}</td>
                </p>
                <p><strong>
                        <td>Major</td>
                        <td>: </td>
                    </strong>
                    <td>{{ $apply->major }} </td>
                </p>
                <p><strong>
                        <td>Tahun Lulus</td>
                        <td>: </td>
                    </strong>
                    <td>{{ $apply->graduation }}</td>
                </p>
                <p>
                    <strong>
                        <td>GPA / IPK</td>
                        <td>: </td>
                    </strong>
                    <td>{{ $apply->gpa }}
                </p>
                <p><strong>
                        <td>Course</td>
                        <td>: </td>
                    </strong>
                    <li>{{ $apply->course1 }}</li>
                    <li>{{ $apply->course2 }}</li>
                    <li>{{ $apply->course3 }}</li>
                </p>
            </div>

            <div class="col-md-3 mt-3">
                <p><strong>
                        <td>Experience</td>
                        <td>: </td>
                    </strong>
                    <li>{{ $apply->experience1 }}</li>
                    <li>{{ $apply->experience2 }}</li>
                    <li>{{ $apply->experience3 }}</li>
                </p>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
@endsection

