@extends('layouts.new_public')

@section('content')
    @include('new_ui.partials.navbar')

    <div class="container">
        <div class="row mx-auto" style="margin-top: 100px">
            <div class="col text-end">
                <img src={{ asset('assets/images/kurikulumBanner.png') }} alt="www.binadarma.ac.id" style="width: 450px">
            </div>
            <div class="col align-self-center text-center">
                <p class="judul">BIMBINGAN AKADEMIK</p>
            </div>
        </div>
    </div>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <p class="breadcrumb-item">Kurikulum</p>
                <li class="breadcrumb-item active" aria-current="page">Bimbingan Akademik</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row mt-5">
            <p class="subJudul">Bimbingan Akademik</p>
        </div>
    </div>

    <div class="container">
        <div class="row boxShadow p-3 my-3">
            <div class="col align-self-center">
                <p class="fw-bold py-3">Dosen Pembimbing Akademik (PA) Angkatan 20XX</p>
            </div>
            <div class="col text-end align-self-center">
                <button type="button" class="btn btn-primary btn-sm active rounded-pill">Download</button>
            </div>
        </div>
        <div class="row boxShadow p-3 my-3">
            <div class="col align-self-center">
                <p class="fw-bold py-3">Dosen Pembimbing Akademik (PA) Angkatan 20XX</p>
            </div>
            <div class="col text-end align-self-center">
                <button type="button" class="btn btn-primary btn-sm active rounded-pill">Download</button>
            </div>
        </div>
    </div>

    @include('new_ui.partials.footer')
@endsection
