@extends('layouts.master')
@section('page_title', 'Yudisium')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Yudisium</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="nav-item"><a href="#all-exams" class="nav-link active" data-toggle="tab">Checlist Yudisium</a></li>
            </ul>

            <div class="tab-content">
                    <div class="tab-pane1 fade show active" id="all-exams">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Syarat</th>
                                <th>Unit Kerja</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Kartu GAMA <i>Co-Brand</i></td>
                                    <td>Direktorat Kemitraan, Alumni, dan Urusan Internasional</td>
                                    <td>http://waw</td>
                                    <td>
                                        <label class="badge badge-success">
                                            Terpenuhi
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Exit Survey</td>
                                    <td>Direktorat Kemitraan, Alumni, dan Urusan Internasional</td>
                                    <td>Lakukan pengisian survei hingga selesai. Pengisian survei dapat dilakukan apabila telah mengisi biodata mahasiswa</td>
                                    <td>
                                        <label class="badge badge-success">
                                            Terpenuhi
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ETD (Unggah Mandiri)</td>
                                    <td>Perpustakaan</td>
                                    <td>Lakukan unggah mandiri</td>
                                    <td>
                                        @if(empty($yud))
                                        <label class="badge badge-danger">
                                            <a href="{{ route('yudisiums.create') }}">Belum Terpenuhi</a>
                                        </label>
                                        @else
                                            @if($yud->is_approved == 'true')
                                                <label class="badge badge-success">
                                                    Terpenuhi
                                                </label>
                                            @else
                                                <label class="badge badge-warning">
                                                    Proses Verifikasi
                                                </label>
                                            @endif
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

            </div>
        </div>
    </div>

    {{--Class List Ends--}}

@endsection
