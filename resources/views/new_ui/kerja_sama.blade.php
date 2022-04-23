@extends('layouts.new_public')

@section('content')
    @include('new_ui.partials.navbar')

    <div class="container">
        <div class="row mx-auto" style="margin-top: 100px">
            <div class="col align-self-center text-center">
                <p class="judul">KERJA SAMA</p>
            </div>
            <div class="col text-end">
                <img src={{ asset('assets/images/kerjasamaBanner.png') }} alt="www.binadarma.ac.id" style="width: 450px">
            </div>
        </div>
    </div>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <p class="breadcrumb-item">Tentang</p>
                <li class="breadcrumb-item active" aria-current="page">Kerja Sama</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row mt-5 border-bottom border-2">
            <p class="subJudul">Kerja Sama</p>
        </div>
    </div>

    <div class="container my-4">
        <p class="subJudulKerjaSama">Kerja Sama Dalam Negeri</p>
        <div class="row boxShadow rounded my-4 p-3">
            <div class="col text-center">
                <img src={{ asset('assets/images/image_placeholder.png') }} alt="" class="imgKerjaSama rounded">
            </div>
            <div class="col">
                <p class="fw-bold">Tanggal mulai - Tanggal berakhir</p>
                <h5>Nama Instansi</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc suscipit magna in pellentesque interdum.
                </p>
                <a class="btn btn-primary rounded-pill active" href="#" role="button">Selengkapnya</a>
            </div>
        </div>
    </div>

    <div class="container my-5 pt-5">
        <p class="subJudulKerjaSama">Kerja Sama Luar Negeri</p>
        <div class="row boxShadow rounded my-4 p-3">
            <div class="col text-center">
                <img src={{ asset('assets/images/image_placeholder.png') }} alt="" class="imgKerjaSama rounded">
            </div>
            <div class="col">
                <p class="fw-bold">Tanggal mulai - Tanggal berakhir</p>
                <h5>Nama Instansi</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc suscipit magna in pellentesque interdum.
                </p>
                <a class="btn btn-primary btn-sm rounded-pill active" href="#" role="button">Selengkapnya</a>
            </div>
        </div>
    </div>

    @include('new_ui.partials.footer')
@endsection
