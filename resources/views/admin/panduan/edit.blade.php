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
                        Panduan
                    </div>
                    <!-- /.card-header -->

                    <form action="{{ route('panduan.update', $panduan->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Judul <span class="text-danger">*</span></label>
                                        <input type="text" name="title" class="form-control"
                                            value="{{ $panduan->title }}" required="">
                                        <input type="hidden" name="old_title" value="{{ $panduan->title }}">
                                    </div>
                                </div>
                                <!-- /.col -->                                

                                <!-- Documents -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputFile" class="mt-3">Dokumen Lampiran</label>
                                        <table class="table table-striped table-dark">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>Nama Dokumen</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if($panduan->document==null ) 
                                                <tr>
                                                    <td colspan="2" class="text-center">Belum ada dokumen lampiran</td>
                                                </tr>
                                                @else                                                    
                                                <tr>
                                                    <td>
                                                        {{ $panduan->document }}
                                                        <input type="hidden" name="old" value="{{ $panduan->document }}">
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-sm btn-info"
                                                            href="{{ asset($panduan->document) }}"
                                                            target="_blank">Buka <i
                                                            class="fas fa-eye fa-sm ml-2"></i></a>   
                                                        <a class="btn btn-sm btn-danger"
                                                            href="{{ route('panduan.hapus_doc', $panduan) }}"
                                                            onclick="return confirm('Yakin ingin menghapus?');">Hapus
                                                            <i class="fas fa-trash fa-sm ml-2"></i></a>                                                     
                                                    </td>
                                                </tr>                                                    
                                                @endif
                                            </tbody>
                                        </table>                                        
                                        
                                        <label for="exampleInputFile" class="mt-3">Tambah Dokumen<span class="text-danger"> .docx, .doc, .pdf, .xlsx</span></label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="document" class="custom-file-input" multiple="">
                                                <label class="custom-file-label" for="exampleInputFile">Pilih
                                                    Dokumen</label>
                                            </div>
                                        </div>
                                                                                
                                    </div>
                                </div>
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
