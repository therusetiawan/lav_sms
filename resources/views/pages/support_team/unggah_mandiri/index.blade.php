@extends('layouts.master')
@section('page_title', 'Unggah Mandiri')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Unggah Mandiri</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="nav-item"><a href="#all-exams" class="nav-link active" data-toggle="tab">ETD</a></li>
            </ul>

            <div class="tab-content">
                    <div class="tab-pane fade show active" id="all-exams">
                        <table class="table datatable-button-html5-columns">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Student Id</th>
                                <th>Title</th>
                                <th>Jenis Karya</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($yudisiums as $yud)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $yud->student_id }}</td>
                                    <td>{{ $yud->title }}</td>
                                    <td>{{ $yud->jenis_karya }}</td>
                                    <td>
                                        @if($yud->is_approved=='true')
                                            <label class="badge badge-success">Disetujui </label>
                                        @else
                                            <label class="badge badge-danger">Belum Disetujui</label>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-left">
                                                    <a href="{{ route('unggah_mandiri.edit', $yud->id) }}" class="dropdown-item"><i class="icon-check"></i> Approve</a>
                                                    <a id="{{ $yud->id }}" onclick="confirmDelete(this.id)" href="#" class="dropdown-item"><i class="icon-trash"></i> Delete</a>
                                                    <form method="post" id="item-delete-{{ $yud->id }}" action="{{ route('unggah_mandiri.destroy', $yud->id) }}" class="hidden">@csrf @method('delete')</form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{--Class List Ends--}}

@endsection
