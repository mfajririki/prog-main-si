@extends('layouts.new_public')

@section('content')
    @include('new.partials.navbar')

    <div class="container">
        <div class="row mx-auto" style="margin-top: 100px">
            <div class="col text-end">
                <img src={{ asset('assets/images/panduanBanner.png') }} alt="www.binadarma.ac.id" style="width: 450px">
            </div>
            <div class="col align-self-center text-center">
                <p class="judul">PANDUAN</p>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <p class="breadcrumb-item">Panduan</p>
                <li class="breadcrumb-item active" aria-current="page">Panduan</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row mt-5">
            <p class="subJudul">Panduan</p>
        </div>
    </div>

    <div class="container">
        <div class="row boxShadow p-3 my-3">
            <div class="col align-self-center">
                <p class="fw-bold py-3">Nama Panduan</p>
            </div>
            <div class="col text-end align-self-center">
                <button type="button" class="btn btn-primary btn-sm active rounded-pill">Download</button>
            </div>
        </div>
        <div class="row boxShadow p-3 my-3">
            <div class="col align-self-center">
                <p class="fw-bold py-3">Nama Panduan</p>
            </div>
            <div class="col text-end align-self-center">
                <button type="button" class="btn btn-primary btn-sm active rounded-pill">Download</button>
            </div>
        </div>
    </div>

    @include('new.partials.footer')
@endsection
