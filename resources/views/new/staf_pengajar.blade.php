@extends('layouts.new_public')

@section('content')
    @include('new.partials.navbar')

    <div class="container">
        <div class="row mx-auto" style="margin-top: 100px">
            <div class="col align-self-center text-center">
                <p class="judul">STAF PENGAJAR</p>
            </div>
            <div class="col text-end">
                <img src={{ asset('assets/images/stafpengajarBanner.png') }} alt="www.binadarma.ac.id"
                    style="width: 450px">
            </div>
        </div>
    </div>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <p class="breadcrumb-item">Tentang</p>
                <li class="breadcrumb-item active" aria-current="page">Staf Pengajar</li>
            </ol>
        </nav>
    </div>

    <div class="container fw-bold">
        <div class="row mt-5 border-bottom border-2">
            <p class="subJudul">Staf</p>
        </div>
        <div class="row py-3 border-bottom">
            <div class="col text-end">
                <img src={{ asset('assets/images/user-photo.png') }} alt="" style="height: 170px">
            </div>
            <div class="col-2">
                <p>Nama</p>
                <p>NIDN</p>
                <p>Jabatan</p>
                <p>Email</p>
                <a href="#" style="text-decoration: none">Link sinta.id</a>
            </div>
            <div class="col">
                <p>: Fajri</p>
                <p>: 1234567</p>
                <p>: Mahasiswa</p>
                <p>: fajri@email.com</p>
                <p></p>
            </div>
            <div class="col"></div>
        </div>
    </div>

    @include('new.partials.footer')
@endsection
