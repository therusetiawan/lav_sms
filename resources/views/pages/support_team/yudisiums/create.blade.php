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
                <li class="nav-item"><a href="#new-exam" class="nav-link active" data-toggle="tab"><i class="icon-plus2"></i> Upload Mandiri</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="new-exam">
                    <div class="row">
                        <div class="col-md-10">
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
                                    <label class="col-lg-3 col-form-label font-weight-semibold">Fulltext <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input name="fulltext" required type="file" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">Halaman Judul <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input name="halaman_judul" required type="file" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">Abstrak & Abstract <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input name="abstrak" required type="file" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">Daftar Isi<span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input name="abstrak" required type="file" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">Pendahuluan<span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input name="pendahuluan" required type="file" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">Penutup<span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input name="penutup" required type="file" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">Daftar Pustaka<span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input name="daftar_pustaka" required type="file" class="form-control">
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
