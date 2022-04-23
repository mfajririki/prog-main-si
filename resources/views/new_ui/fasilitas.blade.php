@extends('layouts.new_public')

@section('content')
    @include('new_ui.partials.navbar')

    <div class="container">
        <div class="row mx-auto" style="margin-top: 100px">
            <div class="col align-self-center text-center">
                <p class="judul">FASILITAS</p>
            </div>
            <div class="col text-end">
                <img src={{ asset('assets/images/fasilitasBanner.png') }} alt="www.binadarma.ac.id" style="width: 450px">
            </div>
        </div>
    </div>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <p class="breadcrumb-item">Tentang</p>
                <li class="breadcrumb-item active" aria-current="page">Fasilitas</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row mt-5 border-bottom border-2">
            <p class="subJudul">Fasilitas</p>
        </div>
    </div>

    <div class="container my-4">
        <p class="fw-bold">Nama Fasilitas</p>
        <div class="row">
            <div class="col text-center align-self-center">
                <img src={{ asset('assets/images/image_placeholder.png') }} alt="" class="imgFasilitas">
            </div>
            <div class="col align-self-center">
                <p style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc suscipit magna
                    in pellentesque interdum.
                    Phasellus facilisis porttitor libero, at sagittis purus dignissim at. In sed eleifend ante, ac lacinia
                    lacus. Pellentesque dignissim, ligula a consequat faucibus, lacus eros placerat dolor, quis condimentum
                    erat nulla vel lorem. Etiam ultricies nulla sit amet est vehicula, sed imperdiet elit ultricies. Integer
                    metus ex, euismod quis nisl at, pharetra ultricies purus. Sed iaculis molestie risus a consequat. Cras
                    eu arcu et eros pellentesque pellentesque sit amet at turpis. Aenean scelerisque suscipit mi, ac dapibus
                    felis pharetra quis. Sed varius egestas dolor, vitae venenatis dui varius eget. Pellentesque habitant
                    morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eu tortor at odio blandit
                    commodo eu non nunc. Ut luctus consequat auctor. Curabitur dapibus tincidunt diam, ornare lacinia diam
                    iaculis a.</p>
            </div>
        </div>
    </div>

    @include('new_ui.partials.footer')
@endsection
