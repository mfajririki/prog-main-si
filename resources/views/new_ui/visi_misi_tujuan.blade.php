@extends('layouts.new_public')

@section('content')
    @include('new_ui.partials.navbar')

    <div class="container">
        <div class="row mx-auto" style="margin-top: 100px">
            <div class="col align-self-center text-center">
                <p class="judul">VISI, MISI & TUJUAN</p>
            </div>
            <div class="col text-end">
                <img src={{ asset('assets/images/visimisitujuanBanner.png') }} alt="www.binadarma.ac.id"
                    style="width: 450px">
            </div>
        </div>
    </div>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <p class="breadcrumb-item">Tentang</p>
                <li class="breadcrumb-item active" aria-current="page">Visi, Misi & Tujuan</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row border-bottom pb-2 mb-2">
            <div class="col-2 align-self-center">
                <img src={{ asset('assets/images/visi.png') }} alt="Visi" style="width: 170px">
            </div>
            <div class="col align-self-center">
                <p style="text-align: justify">Kompetensi lulusan Program Studi Sistem Informasi meliputi 3 bidang keahlian
                    (konsentrasi) yaitu
                    Konsentrasi
                    dalam Bidang Sistem Informasi Bisnis, Konsentrasi dalam bidang Sistem Penunjang Manajemen, Konsentrasi
                    dalam
                    bidang Teknologi Informasi.</p>
            </div>
        </div>
        <div class="row border-bottom pb-2 mb-2">
            <div class="col align-self-center">
                <p style="text-align: justify">Menyelenggarakan pendidikan di bidang Sistem Informasi dengan memperhatikan
                    kurikulum yang berbasis
                    kompetensi untuk menciptakan proses belajar mengajar dengan pelayanan pendidikan yang berkualitas
                    internasional melalui pemanfaatan teknologi informasi.
                    Penyelenggaraan penelitian di bidang rekayasa sistem informasi yang berkualitas.
                    Penyelenggaraan pengabdian kepada masyarakat dengan penerapan hasil penelitian dan kajian bidang
                    rekayasa
                    sistem informasi.</p>
            </div>
            <div class="col-2 align-self-center">
                <img src={{ asset('assets/images/misi.png') }} alt="Misi" style="width: 170px">
            </div>
        </div>
        <div class="row pb-2 mb-5">
            <div class="col-2 align-self-center">
                <img src={{ asset('assets/images/tujuan.png') }} alt="Tujuan" style="width: 170px">
            </div>
            <div class="col align-self-center">
                <p style="text-align: justify">Menghasilkan sumber daya manusia yang mampu mengembangkan sistem informasi di
                    berbagai bidang yang relevan.
                    Menghasilkan sumber daya manusia yang mampu menciptakan lapangan pekerjaan sendiri/berwiraswasta.
                    Menghasilkan lulusan yang berpotensi dan berkualitas yang cerdas dan berkarakter.
                    Menghasilkan sumber daya manusia yang mampu bersaing dengan lulusan lain baik secara regional, nasional,
                    maupun internasional.
                    Menghasilkan penelitian yang berkualitas di bidang sistem informasi.
                    Melakukan berbagai wujud pengabdian yang berguna bagi masyarakat.</p>
            </div>
        </div>
    </div>

    @include('new_ui.partials.footer')
@endsection
