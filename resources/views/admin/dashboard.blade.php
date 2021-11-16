@extends('layouts.cms')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <p>Pengumuman</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{ url('/announcement') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <div class="small-box bg-info">
                    <div class="inner">
                        <p>Staf Pengajar</p>
                        <p>{{ $jumlah_staf }}</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{ url('/staf_pengajar') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <div class="small-box bg-info">
                    <div class="inner">
                        <p>Prestasi Mahasiswa</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{ url('#') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <p>Visi & Misi</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{ url('/visi_misi') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <div class="small-box bg-info">
                    <div class="inner">
                        <p>Tujuan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{ url('/tujuans') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <div class="small-box bg-info">
                    <div class="inner">
                        <p>Tentang Prodi SI</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{ url('/tentang') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <p>Kurikulum | Mata Kuliah</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{ url('/kurikulums') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <div class="small-box bg-info">
                    <div class="inner">
                        <p>MK Bidang Minat</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{ url('/bidangminat') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->

        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
            
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection