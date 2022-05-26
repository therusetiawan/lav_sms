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
                <li class="nav-item"><a href="#new-exam" class="nav-link" data-toggle="tab"><i class="icon-plus2"></i> Upload Mandiri</a></li>
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
                                            Belum Terpenuhi
                                        </label>
                                        @else
                                        <label class="badge badge-success">
                                            Terpenuhi
                                        </label>
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                <div class="tab-pane fade" id="new-exam">
                    <div class="row">
                        <div class="col-md-10" style="margin-top: -300px">
                            <form method="post" action="{{ route('yudisiums.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">Judul <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input name="title" required type="text" class="form-control" placeholder="Judul">
                                        <input name="student_id" type="hidden" value="{{ Auth::user()->id }}">
                                        <input name="is_approved" type="hidden" value="false">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">Intisari <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <textarea class="form-control" name="intisari"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">Abstract <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <textarea class="form-control" name="abstract"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">Keyword <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input name="keyword" required type="text" class="form-control" placeholder="Keyword">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">Pembimbing <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input name="pembimbing" required type="text" class="form-control" placeholder="Pembimbing">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="term" class="col-lg-3 col-form-label font-weight-semibold">Jenis Karya</label>
                                    <div class="col-lg-9">
                                        <select data-placeholder="" class="form-control select-search" name="jenis_karya" id="term" readonly>
                                            <option value="Skripsi" selected>Skripsi</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">Tahun <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input name="tahun" value="2022" required type="text" class="form-control" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">File <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input name="file" required type="file" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">Catatan <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <textarea class="form-control" name="catatan"></textarea>
                                    </div>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--Class List Ends--}}

@endsection
