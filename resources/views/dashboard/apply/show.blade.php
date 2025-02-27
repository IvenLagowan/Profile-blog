{{-- @extends('dashboard.layouts.main')

@section('container')
<div id="layoutSidenav" class="m-3">
    <div id="layoutSidenav_content">
        <div class="card m-3">
            <div class="row row-cols-2 p-3">
                <div class="col-md-8">
                    <h1><strong>{{ $apply->name }}</strong></h1>
                    <div class="row mt-3">
                        <div class="col-lg-6">
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
                        <div class="col-lg-6">
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
                                <td><strong> - {{ $apply->graduation }}</strong></td>
                            </p>
                            <p>
                                <td> </td>
                                <td> </td>
                                <td>Dengan Meraih IPK {{ $apply->gpa }}
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <p><strong>
                                        <td>Course</td>
                                        <td>: </td>
                                    </strong>
                                    <li>{{ $apply->course1 }}</li>
                                    <li>{{ $apply->course2 }}</li>
                                    <li>{{ $apply->course3 }}</li>
                                </p>
                            </div>
                            <div class="col-lg-6">
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

                </div>
                <div class="col-md-4">
                    <div class="card-img mb-5" style="border-radius: 10px">
                        @if ($apply->image)
                        <div style="max-height: 350px; overflow: hidden;" class="mt-3">
                            <img src="{{ asset('storage/' . $apply->image) }}" class="img-fluid"
                                alt="{{ $apply->name }}">
                        </div>
                        @else
                        <img src="/assets/img/avatars/6.png" alt="user-avatar" class="d-block rounded img-fluid">
                        @endif
                    </div>
                    <a href="/dashboard/apply" class="btn btn-danger"><i class="bi bi-arrow-left"></i> Back</a>
                    <a href="/dashboard/apply/{{ $apply->id }}/edit" class="btn btn-success" target="_blank">
                        <i class="bi bi-printer-fill"></i> Cetak
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<div class="modal fade" id="myModal{{ $apply->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">sender from {{ $apply->name }} To work {{ $apply->title
                    }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">

                    <div class="col-md-6 mt-4">
                        <div class="card card-info">
                            <div class="card-body p-0">
                                <table class="table border">
                                    <tbody class="text-capitalize">
                                        <tr>
                                            <th style="width: 150px; vertical-align: top;">Job Title</th>
                                            <td>: {{ $apply->title }}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 150px; vertical-align: top;">Nama Lengkap</th>
                                            <td>: {{ $apply->name }}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 150px; vertical-align: top;">Email Address</th>
                                            <td>: {{ $apply->email }}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 150px; vertical-align: top;">Telephone</th>
                                            <td>: {{ $apply->phone }}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 150px; vertical-align: top;">Education</th>
                                            <td>: {{ $apply->education }}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 150px; vertical-align: top;">School</th>
                                            <td>: {{ $apply->school }}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 150px; vertical-align: top;">Major</th>
                                            <td>: {{ $apply->major }}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 150px; vertical-align: top;">Upload Time</th>
                                            <td>: {{ $apply->created_at->timezone('Asia/Jakarta')->formatLocalized('%d
                                                %B %Y') }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        @if ($apply->cv)
                        <embed type="application/pdf" src="{{ asset('storage/' . $apply->cv) }}" width="100%"
                            height="400px" class="p-1" style="border-radius: 10px"></embed>
                        @endif
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
