@extends('layouts.new_public')

@section('content')
    @include('new.partials.navbar')

    @include('new.partials.header')

    <div class="container">
        <div class="row mt-5 border-bottom border-2">
            <p class="subJudul">Sambutan Kaprodi</p>
        </div>
        <div class="row mt-3">
            <div class="col text-center">
                <img src={{ asset('assets/images/PAK_ZAID.png') }} alt="Ketua Program Studi" style="width: 300px;">
            </div>
            <div class="col">
                <p class="subJudulNamaKaprodi">Zaid Amin, M.Kom., Ph.D.</p>
                <p style="margin-top: -15px">Ketua Program Studi Sistem Informasi</p>
                <p style="text-align: justify">Program Studi Sistem Informasi adalah salah satu program studi yang ada di
                    Fakultas
                    Ilmu Komputer Universitas
                    Bina Darma. Akreditasi Program Studi yaitu “A” Tahun 2014. Keunggulan PSSI adalah pada kurikulumnya yang
                    berbasis kompetensi yang menggabungkan kurikulum standar APTIKOM, kurikulum internasional (NIIT) dan
                    Muatan
                    kurikulum lokal, selain pengayaan kurikulum dengan sertifikasi Internasional PASAS.</p>
            </div>
        </div>
    </div>

    <div class="bgGrey">
        <div class="container">
            <div class="row mt-5 border-bottom border-2">
                <p class="subJudul">Berita Terbaru</p>
            </div>
            <div class="row mt-3">
                <div class="card mx-auto" style="width: 18rem;">
                    <h6>tanggal</h6>
                    <img src={{ asset('assets/images/image_placeholder.png') }} class="card-img-top cardImage" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Judul Berita
                            blablablalblalfdldflkdfjsdfakjsdfsdafksdfsdlkfsdldkfsdljfksdfljk
                        </h5>
                    </div>
                </div>
                <div class="card mx-auto" style="width: 18rem;">
                    <h6>tanggal</h6>
                    <img src={{ asset('assets/images/image_placeholder.png') }} class="card-img-top cardImage" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Judul Berita
                            blablablalblalfdldflkdfjsdfakjsdfsdafksdfsdlkfsdldkfsdljfksdfljk
                        </h5>
                    </div>
                </div>
                <div class="card mx-auto" style="width: 18rem;">
                    <h6>tanggal</h6>
                    <img src={{ asset('assets/images/Frame_8.png') }} class="card-img-top cardImage" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Judul Berita
                            blablablalblalfdldflkdfjsdfakjsdfsdafksdfsdlkfsdldkfsdljfksdfljk
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-3 border-bottom border-2">
            <p class="subJudul">Kerja Sama</p>
        </div>
        <div class="row mt-3">
            <div class="col text-center"><img src={{ asset('assets/images/CISCO_1.png') }} alt="" class="imageKerjaSama">
            </div>
            <div class="col text-center"><img src={{ asset('assets/images/unsri_1.png') }} alt="" class="imageKerjaSama">
            </div>
            <div class="col text-center"><img src={{ asset('assets/images/foresec_1.png') }} alt=""
                    class="imageKerjaSama">
            </div>
        </div>
    </div>

    <div class="bgGrey">
        <div class="container">
            <div class="row mt-5 border-bottom border-2">
                <p class="subJudul">ALUMNI</p>
            </div>
            <div class="row mt-3">
                <div class="col text-center">
                    <img src={{ asset('assets/images/user-photo.png') }} class="rounded-circle imgAlumni" alt="...">
                    <p>Nama Alumni</p>
                    <p>Profesi</p>
                </div>
                <div class="col text-center">
                    <img src={{ asset('assets/images/user-photo.png') }} class="rounded-circle imgAlumni" alt="...">
                    <p>Nama Alumni</p>
                    <p>Profesi</p>
                </div>
                <div class="col text-center">
                    <img src={{ asset('assets/images/user-photo.png') }} class="rounded-circle imgAlumni" alt="...">
                    <p>Nama Alumni</p>
                    <p>Profesi</p>
                </div>
            </div>
        </div>
    </div>

    {{-- footer --}}
    @include('new.partials.footer')
@endsection
