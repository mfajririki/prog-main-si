@extends('layouts.new_public')

@section('content')
    @include('new_ui.partials.navbar')

    <div class="container">
        <div class="row mx-auto" style="margin-top: 100px">
            <div class="col align-self-center text-center">
                <p class="judul">PROFIL LULUSAN</p>
            </div>
            <div class="col text-end">
                <img src={{ asset('assets/images/profilelulusanBanner.png') }} alt="www.binadarma.ac.id"
                    style="width: 450px">
            </div>
        </div>
    </div>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <p class="breadcrumb-item">Tentang</p>
                <li class="breadcrumb-item active" aria-current="page">Profil Lulusan</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row mt-5 border-bottom border-2">
            <p class="subJudul">Profil Lulusan</p>
        </div>
        <div class="row my-3 py-3 boxShadow rounded">
            <div class="col">
                <p class="subJudulProfilLulusan">Konsultan Sistem Informasi</p>
                <p>Mampu mengidentifikasi, menganalisis, dan mengevaluasi kebutuhan industri dalam pengembangan sistem
                    informasi
                </p>
            </div>
        </div>
    </div>

    @include('new_ui.partials.footer')
@endsection
