@extends('layouts.cms')

@section('content')
@include('alert')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Data</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card card-primary">
                    <div class="card-header">
                        Bimbingan Akademik
                    </div>
                    <!-- /.card-header -->

                    <form action="{{ route('pembimbing_akademik.update', $pembimbing_akademik->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Dosen <span class="text-danger">*</span></label>
                                        <input type="text" name="dosen" class="form-control"
                                            value="{{ $pembimbing_akademik->dosen }}" required="">
                                        <input type="hidden" name="old_dosen" value="{{ $pembimbing_akademik->dosen }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Mahasiswa <span class="text-danger">*</span></label>
                                        <input type="text" name="mahasiswa" class="form-control"
                                            value="{{ $pembimbing_akademik->mahasiswa }}" required="">
                                        <input type="hidden" name="old_mahasiswa" value="{{ $pembimbing_akademik->mahasiswa }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Angkatan <span class="text-danger">*</span></label>
                                        <input type="text" name="angkatan" class="form-control"
                                            value="{{ $pembimbing_akademik->angkatan }}" required="">
                                        <input type="hidden" name="old_angkatan" value="{{ $pembimbing_akademik->angkatan }}">
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <span class="small text-danger">form bertanda * wajib diisi</span>
                            <button type="submit" class="float-right btn btn-primary">Submit</button>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                    <!-- /form -->

                </div>
                <!-- /.card -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
