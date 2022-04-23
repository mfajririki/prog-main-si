@extends('layouts.new_public')

@section('content')
    @include('new_ui.partials.navbar')

    @include('new_ui.partials.header_info')

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <p class="breadcrumb-item">Informasi</p>
                <li class="breadcrumb-item active" aria-current="page">Berita</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row mt-5">
            <p class="subJudul">Berita</p>
        </div>
    </div>

    <div class="container">
        <div class="row rounded my-4 p-3 boxShadow">
            <div class="col text-center">
                <img src={{ asset('assets/images/image_placeholder.png') }} alt="" class="imgMBKM rounded">
            </div>
            <div class="col">
                <p class="fw-bold">Tanggal</p>
                <p style="font-size: 22px">Judul</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum posuere urna in ligula hendrerit,
                    at vestibulum erat dignissim.</p>
                <a class="btn btn-primary btn-sm rounded-pill active" href="#" role="button">Selengkapnya</a>
            </div>
        </div>
        <div class="row rounded my-4 p-3 boxShadow">
            <div class="col text-center">
                <img src={{ asset('assets/images/image_placeholder.png') }} alt="" class="imgMBKM rounded">
            </div>
            <div class="col">
                <p class="fw-bold">Tanggal</p>
                <p style="font-size: 22px">Judul</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum posuere urna in ligula hendrerit,
                    at vestibulum erat dignissim.</p>
                <a class="btn btn-primary btn-sm rounded-pill active" href="#" role="button">Selengkapnya</a>
            </div>
        </div>
    </div>

    @include('new_ui.partials.footer')
@endsection
