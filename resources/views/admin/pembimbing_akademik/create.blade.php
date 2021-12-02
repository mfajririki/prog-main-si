@extends('layouts.cms')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tambah Data</h1>
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

                    <form action="{{ route('pembimbing_akademik.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Dosen <span class="text-danger">*</span></label>
                                            <input type="text" name="dosen" class="form-control" value="{{ old('dosen') }}" required="">
                                            @error('dosen')
                                                <div class="mt-2 text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Mahasiswa <span class="text-danger">*</span></label>
                                            <input type="text" name="mahasiswa" class="form-control" value="{{ old('mahasiswa') }}" required="">
                                            @error('mahasiswa')
                                                <div class="mt-2 text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Angkatan <span class="text-danger">*</span></label>
                                            <input type="text" name="angkatan" class="form-control" value="{{ old('angkatan') }}" required="">
                                            @error('angkatan')
                                                <div class="mt-2 text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- /.col -->
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