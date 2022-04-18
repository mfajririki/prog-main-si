@extends('layouts.new_public')

@section('content')
    @include('new.partials.navbar')

    @include('new.partials.header')


    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <p class="breadcrumb-item">Tentang</p>
                <li class="breadcrumb-item active" aria-current="page">Tentang Prodi Sistem Informasi</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <p style="text-align: justify">Sejarah Singkat Program Studi Sistem Informasi

            Program Studi Sistem Informasi Strata Satu berawal dari STMIK Bina Darma didirikan pada tahun 1994 dengan nama
            Program Studi Manajemen Informatika. Berdasarkan SK Mendikbud nomor: 027/D/O/1994 tanggal 18 Mei 1994 dengan
            status "TERDAFTAR" yang beralamat di Jalan A. Yani No. 3 Palembang. Dengan perkembangan ilmu, khususnya ilmu
            komputer, program studi Manajemen Informatika mengalami perubahan nama menjadi program studi Sistem Informasi
            berdasarkan SK Dirjen Dikti No. 70/DIKTI/Kep/2000 tertanggal 30 Mei 2000.

            Program Studi Sistem Informasi adalah salah satu program studi yang ada di Fakultas Ilmu Komputer Universitas
            Bina Darma. Akreditasi Program Studi yaitu “A” Tahun 2014. Keunggulan PSSI adalah pada kurikulumnya yang
            berbasis kompetensi yang menggabungkan kurikulum standar APTIKOM, kurikulum internasional (NIIT) dan Muatan
            kurikulum lokal, selain pengayaan kurikulum dengan sertifikasi Internasional PASAS.

            Prospek lulusan PSSI ini bisa bekerja menjadi IT Manager, Analyst, Database Analys, Data Administrator, Software
            Applications Programmer, Security Manager, System Auditor, Training Manager Dan Configuration Manager.</p>
    </div>

    <div class="container">
        <div class="row my-5">
            <div class="col text-center">
                <img src={{ asset('assets/images/PAK_ZAID.png') }} alt="Ketua Program Studi" style="width: 300px">
            </div>
            <div class="col">
                <p class="subJudulNamaKaprodi">Zaid Amin, M.Kom., Ph.D.</p>
                <p style="margin-top: -15px">Ketua Program Studi Sistem Informasi</p>
                <p style="text-align: justify">Kompetensi lulusan Program Studi Sistem Informasi meliputi 5 bidang keahlian
                    (konsentrasi) yaitu:

                    IT Governance
                    Data Science
                    Enterprise Information System
                    Application Development
                    Multimedia.</p>
            </div>
        </div>
    </div>

    @include('new.partials.footer')
@endsection
