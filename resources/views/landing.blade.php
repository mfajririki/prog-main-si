@extends('layouts.public')

@section('content')
<!-- Hero Section -->
<div class="kingster-page-title-wrap  kingster-style-custom kingster-left-align" style="background-image: url(assets/content/uploads/2020/06/cta-akademik-1.jpg) ;">
    <div class="kingster-header-transparent-substitute"></div>
    <div class="kingster-page-title-overlay"></div>
    <div class="kingster-page-title-bottom-gradient"></div>
    <div class="kingster-page-title-container kingster-container">
        <div class="kingster-page-title-content kingster-item-pdlr" style="padding-top: 400px ;padding-bottom: 60px ;">
            <div class="kingster-page-caption" style="font-size: 21px ;font-weight: 400 ;letter-spacing: 0px ;">Program
                Studi</div>
            <h1 class="kingster-page-title" style="font-size: 48px ;font-weight: 700 ;text-transform: none ;letter-spacing: 0px ;color: #ffffff ;">
                Sarjana Sistem Informasi</h1>
        </div>
    </div>
</div>

<!-- Breadcrumb -->
<div class="kingster-breadcrumbs">
    <div class="kingster-breadcrumbs-container kingster-container">
        <div class="kingster-breadcrumbs-item kingster-item-pdlr">
            <span property="itemListElement" typeof="ListItem">
                <a property="item" typeof="WebPage" title="Beranda Sarjana Sistem Informasi." href="{{ url('') }}" class="home"><span property="name">Beranda</span></a>
                <meta property="position" content="1">
            </span> &gt; <span property="itemListElement" typeof="ListItem">
                <span property="name" class="post post-page current-item">Sarjana Sistem Informasi</span>
                <meta property="url" content="index.html">
                <meta property="position" content="2">
            </span>
        </div>
    </div>
</div>

<!-- Content -->
<div class="kingster-page-wrapper" id="kingster-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-sidebar-wrapper " style="margin: 0px 0px 30px 0px;">
            <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" style="padding: 35px 0px 20px 0px;">
                    <div class="gdlr-core-pbf-sidebar-content-inner">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                <div class="gdlr-core-title-item-title-wrap clearfix">
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 27px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;color: #163269 ;">
                                        Program Studi Sistem Informasi </h3>
                                </div>
                            </div>
                        </div>

                        <!-- konten halaman utama. sistem informasi -->
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 10px ;">

                                <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;text-transform: none ;">
{{-- Tab Content --}}
                                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-tab-item gdlr-core-js gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-tab-style1-horizontal gdlr-core-item-pdlr">
                                                    
{{-- Judul Tab --}}
                                                    <div class="gdlr-core-tab-item-wrap">
                                                        <div class="gdlr-core-tab-item-title-wrap clearfix gdlr-core-title-font">
                                                            <div class="gdlr-core-tab-item-title  gdlr-core-active" data-tab-id="1">Tentang Prodi SI</div>
                                                            <div class="gdlr-core-tab-item-title " data-tab-id="2">Visi</div>
                                                            <div class="gdlr-core-tab-item-title " data-tab-id="3">Misi</div>
                                                            <div class="gdlr-core-tab-item-title " data-tab-id="4">Tujuan</div>
                                                        </div>

                                                        <div class="gdlr-core-tab-item-content-wrap clearfix">
                                    {{-- Tentang Prodi SI --}}
                                                            <div class="gdlr-core-tab-item-content  gdlr-core-active" data-tab-id="1" style="background-color: #ffffff ;background-position: top right ;">
                                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                                                    <div class="gdlr-core-title-item-title-wrap ">
                                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 22px ;font-weight: 700 ;text-transform: none ;color: #314e85 ;">
                                                                            Sejarah Singkat Program Studi Sistem Informasi<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                                <div class="text-justify">
                                                                    @foreach ($tentang as $tentang)
                                                                        <p>{!! $tentang->konten_tentang!!}</p>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                            <!-- Visi -->
                                                            <div class="gdlr-core-tab-item-content " data-tab-id="2" style="background-color: #ffffff ;background-position: top right ;">
                                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                                                    <div class="gdlr-core-title-item-title-wrap ">
                                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 22px ;font-weight: 700 ;text-transform: none ;color: #314e85 ;">
                                                                            Visi<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                                <div class="text-justify">
                                                                    @foreach ($visi_misi as $visi)
                                                                        <p>
                                                                            {!! $visi->visi !!}
                                                                        </p>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                    {{-- Misi --}}
                                                            <div class="gdlr-core-tab-item-content " data-tab-id="3" style="background-color: #ffffff ;background-position: top right ;">
                                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                                                    <div class="gdlr-core-title-item-title-wrap ">
                                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 22px ;font-weight: 700 ;text-transform: none ;color: #314e85 ;">
                                                                            Misi<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                                <div class="text-justify">
                                                                    @foreach ($visi_misi as $misi)
                                                                        <div class="kingster-single-article-content">
                                                                            {!! $misi->misi !!}
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                    {{-- Tujuan --}}   
                                                            <div class="gdlr-core-tab-item-content " data-tab-id="4" style="background-color: #ffffff ;background-position: top right ;">
                                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                                                    <div class="gdlr-core-title-item-title-wrap ">
                                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 22px ;font-weight: 700 ;text-transform: none ;color: #314e85 ;">
                                                                            Tujuan<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                                <div class="text-justify">
                                                                    @foreach ($tujuan as $tujuan)
                                                                    <div class="kingster-single-article-content">
                                                                        {!! $tujuan->konten_tujuan !!}
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Kurikulum -->
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px ;">
                                <div class="gdlr-core-title-item-title-wrap clearfix">
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title  gdlr-core-with-side-border" style="font-size: 22px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;color: #223d71 ;margin-right: 30px ;">
                                        Kurikulum</h3>
                                    <div class="gdlr-core-title-item-divider gdlr-core-right gdlr-core-skin-divider" style="font-size: 22px ;border-bottom-width: 3px ;"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Body Text Kurikulum -->
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                <div class="gdlr-core-text-box-item-content" style="font-size: 17px ;text-transform: none ;">
                                    <p>Kurikulum Program Sarjana Sistem Informasi.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Tab Kurikulum -->
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-accordion-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-accordion-style-background-title-icon gdlr-core-left-align gdlr-core-icon-pos-right">

                                <!-- Enterprise Network Security -->
                                <div class="gdlr-core-accordion-item-tab clearfix ">
                                    <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
                                    <div class="gdlr-core-accordion-item-content-wrapper">
                                        <h4 class="gdlr-core-accordion-item-title gdlr-core-js  gdlr-core-skin-e-background gdlr-core-skin-e-content">
                                            Distribusi Mata Kuliah</h4>

                                        <div class="gdlr-core-accordion-item-content">
                                            <!-- Kurikulum Semester 1 -->
                                            <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                        <!-- Title -->
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px ;">
                                                                <div class="gdlr-core-title-item-title-wrap clearfix">
                                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 20px ;font-weight: 600 ;text-transform: none ;color: #d61b23 ;">
                                                                        Semester 1</h3>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Isi -->
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-style-1" style="padding-bottom: 25px ;">
                                                                <ul>
                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;">
                                                                        <span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">Pengantar Bisnis dan Manajemen</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;">
                                                                        <span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">Pengantar Pemrograman</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">Bahasa Indonesia</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">Pendidikan Agama</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">Bahasa Inggris 1</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">Pendidikan Kewarganegaraan</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">Interpersonal Skill</span>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Kurikulum Semester 2 -->
                                            <div class="gdlr-core-pbf-column gdlr-core-column-30">
                                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px ;">
                                                                <div class="gdlr-core-title-item-title-wrap clearfix">
                                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 20px ;font-weight: 600 ;text-transform: none ;color: #d61b23 ;">
                                                                        Semester 2</h3>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-style-1" style="padding-bottom: 25px ;">
                                                                <ul>
                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;">
                                                                        <span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">Analisa Proses Bisnis</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;">
                                                                        <span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;"><a target="_blank" href="{{ asset('assets/rps/RPS-MTIK-112-Advanced-Database.docx') }}">Matematika Diskrit</a></span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;">
                                                                        <span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">Basis Data</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;">
                                                                        <span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">Bahasa Inggris 2</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">Sistem Informasi Manajemen</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">Interaksi Manusia dan Komputer</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">Algoritma dan Struktur Data</span>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Kurikulum Semester 3 -->
                                            <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                        <!-- Title -->
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px ;">
                                                                <div class="gdlr-core-title-item-title-wrap clearfix">
                                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 20px ;font-weight: 600 ;text-transform: none ;color: #d61b23 ;">
                                                                        Semester 3</h3>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Isi -->
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-style-1" style="padding-bottom: 25px ;">
                                                                <ul>
                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;">
                                                                        <span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">Jaringan Komputer dan Komunikasi Data</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;">
                                                                        <span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">Statistika dan Probabilitas</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">UI/UX Design</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">Pemrograman 1</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">IT Enterpreneurship</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">Teknologi Multimedia</span>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Kurikulum Semester 4 -->
                                            <div class="gdlr-core-pbf-column gdlr-core-column-30">
                                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px ;">
                                                                <div class="gdlr-core-title-item-title-wrap clearfix">
                                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 20px ;font-weight: 600 ;text-transform: none ;color: #d61b23 ;">
                                                                        Semester 4</h3>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-style-1" style="padding-bottom: 25px ;">
                                                                <ul>
                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;">
                                                                        <span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">Pemrograman 2</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;">
                                                                        <span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">Analisa dan Perancangan Sistem</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;">
                                                                        <span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">IT Service Management</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;">
                                                                        <span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">Analisis dan Visualisasi Data</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">Metodologi Penelitian</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">Intelligent System</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">Pengenalan Industri</span>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Kurikulum Semester 5 -->
                                            <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                        <!-- Title -->
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px ;">
                                                                <div class="gdlr-core-title-item-title-wrap clearfix">
                                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 20px ;font-weight: 600 ;text-transform: none ;color: #d61b23 ;">
                                                                        Semester 5</h3>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Isi -->
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-style-1" style="padding-bottom: 25px ;">
                                                                <ul>
                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;">
                                                                        <span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">Rekayasa Perangkat Lunak</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;">
                                                                        <span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">Manajemen Proyek</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">Etika dan Hukum TI</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">IT Security</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">MK Pilihan Minat 1 (stream 1)</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">MK Pilihan Minat 2 (stream 1)</span>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- Kurikulum Semester 6 --}}
                                            <div class="gdlr-core-pbf-column gdlr-core-column-30">
                                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px ;">
                                                                <div class="gdlr-core-title-item-title-wrap clearfix">
                                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 20px ;font-weight: 600 ;text-transform: none ;color: #d61b23 ;">
                                                                        Semester 6</h3>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-style-1" style="padding-bottom: 25px ;">
                                                                <ul>
                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;">
                                                                        <span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">Kerja Praktek</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;">
                                                                        <span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">Perencanaan Strategi SI</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;">
                                                                        <span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">IS Application Project</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;">
                                                                        <span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">IT Risk Management</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">Enterprise Information System</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">Enterprise Architecture</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">MK Pilihan Minat 3 (stream 2)</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">MK Pilihan Minat 4 (stream 2)</span>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Kurikulum Semester 7 -->
                                            <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                        <!-- Title -->
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px ;">
                                                                <div class="gdlr-core-title-item-title-wrap clearfix">
                                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 20px ;font-weight: 600 ;text-transform: none ;color: #d61b23 ;">
                                                                        Semester 7</h3>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Isi -->
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-style-1" style="padding-bottom: 25px ;">
                                                                <ul>
                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;">
                                                                        <span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">Proposal</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;">
                                                                        <span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">Pemodelan Bisnis</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">MK Pilihan Minat 5 (stream 3)</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">MK Pilihan Minat 6 (stream 3)</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">MK Pilihan Minat 7 (stream 4)</span>
                                                                        </div>
                                                                    </li>

                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">MK Pilihan Minat 8 (stream 4)</span>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- Kurikulum Semester 8 --}}
                                            <div class="gdlr-core-pbf-column gdlr-core-column-30">
                                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px ;">
                                                                <div class="gdlr-core-title-item-title-wrap clearfix">
                                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 20px ;font-weight: 600 ;text-transform: none ;color: #d61b23 ;">
                                                                        Semester 8</h3>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-style-1" style="padding-bottom: 25px ;">
                                                                <ul>
                                                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;">
                                                                        <span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">Skripsi</span>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
{{-- END Distribusi Mata Kuliah --}}

{{-- Mata Kuliah Bidang Minat --}}
<div class="gdlr-core-accordion-item-tab clearfix ">
    <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
    <div class="gdlr-core-accordion-item-content-wrapper">
        <h4 class="gdlr-core-accordion-item-title gdlr-core-js  gdlr-core-skin-e-background gdlr-core-skin-e-content">
            Mata Kuliah Bidang Minat</h4>

        {{-- IT GOVERNANCE --}}
        <div class="gdlr-core-accordion-item-content">
            <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                        <!-- Title -->
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px ;">
                                <div class="gdlr-core-title-item-title-wrap clearfix"></div>
                            </div>
                        </div>

                        <!-- Isi -->
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-style-1" style="padding-bottom: 25px ;">
                                <ul>
                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;">
                                        <span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                        <div class="gdlr-core-icon-list-content-wrap">
                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">
                                                <p>Bidang Minat IT GOVERNANCE</p>
                                                <ol>
                                                    <li>IT Governance</li>
                                                    <li>IT Audit</li>
                                                    <li>Smart Governance</li>
                                                    <li>Penjaminan Mutu Sistem Informasi</li>
                                                </ol>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- DATA SCIENCE -->
            <div class="gdlr-core-pbf-column gdlr-core-column-30">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px ;">
                                <div class="gdlr-core-title-item-title-wrap clearfix"></div>
                            </div>
                        </div>

                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-style-1" style="padding-bottom: 25px ;">
                                <ul>
                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;">
                                        <span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                        <div class="gdlr-core-icon-list-content-wrap">
                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">
                                                <p>Bidang Minat DATA SCIENCE</p>
                                                <ol>
                                                    <li>Business Intelligence 1</li>
                                                    <li>Business Intelligence 2</li>
                                                    <li>Data Mining & Data Warehouse</li>
                                                    <li>Data Science</li>
                                                </ol>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ENTERPRISE SYSTEM -->
            <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                        <!-- Title -->
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px ;">
                                <div class="gdlr-core-title-item-title-wrap clearfix"></div>
                            </div>
                        </div>

                        <!-- Isi -->
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-style-1" style="padding-bottom: 25px ;">
                                <ul>
                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;">
                                        <span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                        <div class="gdlr-core-icon-list-content-wrap">
                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">
                                                <p>Bidang Minat ENTERPRISE SYSTEM</p>
                                                <ol>
                                                    <li>Knowledge Management System</li>
                                                    <li>E-Commerce</li>
                                                    <li>Customer Relationship Management</li>
                                                    <li>E-Business</li>
                                                </ol>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- APP DEVELOPMENT -->
            <div class="gdlr-core-pbf-column gdlr-core-column-30">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px ;">
                                <div class="gdlr-core-title-item-title-wrap clearfix"></div>
                            </div>
                        </div>

                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-style-1" style="padding-bottom: 25px ;">
                                <ul>
                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;">
                                        <span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                        <div class="gdlr-core-icon-list-content-wrap">
                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">
                                                <p>Bidang Minat</p>
                                                <ol>
                                                    <li>Perancangan & Pengembangan SI Berbasis Web</li>
                                                    <li>
                                                        <ul>
                                                            <li>-Pemrograman Berorientasi Objek</li>
                                                            <li>-Sistem Informasi Geografis 1</li>
                                                        </ul>
                                                    </li>
                                                    <li>Mobile Technology</li>
                                                    <li>
                                                        <ul>
                                                            <li>-Distributed Programming</li>
                                                            <li>-Sistem Informasi Geografis 2</li>
                                                        </ul>
                                                    </li>
                                                </ol>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MULTIMEDIA -->
            <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                        <!-- Title -->
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px ;">
                                <div class="gdlr-core-title-item-title-wrap clearfix"></div>
                            </div>
                        </div>

                        <!-- Isi -->
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-style-1" style="padding-bottom: 25px ;">
                                <ul>
                                    <li class=" gdlr-core-skin-divider clearfix" style="margin-bottom: 22px ;">
                                        <span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-book" style="color: #d61b23 ;font-size: 18px ;width: 18px ;"></i></span>
                                        <div class="gdlr-core-icon-list-content-wrap">
                                            <span class="gdlr-core-icon-list-content" style="font-size: 17px ;">
                                                <p>Bidang Minat WEB & MULTIMEDIA DEVELOPER</p>
                                                <ol>
                                                    <li>Visualisasi dan Animasi</li>
                                                    <li>Pemrograman Multimedia</li>
                                                    <li>Pemrograman Animasi</li>
                                                    <li>Proyek Multimedia</li>
                                                </ol>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

                            </div>
                        </div>

                    </div>
                </div>

                <!-- Sidebar Info -->
                <div class="gdlr-core-pbf-sidebar-right gdlr-core-column-extend-right  kingster-sidebar-area gdlr-core-column-20 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height" style="padding: 35px 0px 30px 0px;">
                    <div class="gdlr-core-sidebar-item gdlr-core-item-pdlr">
                        <div id="text-18" class="widget widget_text kingster-widget">
                            <div class="textwidget">
                                <div class="gdlr-core-widget-box-shortcode " style="color: #ffffff ;padding: 30px 45px;background-color: #192f59 ;">
                                    <div class="gdlr-core-widget-box-shortcode-content">
                                        </p>
                                        <h3 style="font-size: 20px; color: #fff; margin-bottom: 25px;">Universitas Bina
                                            Darma</h3>
                                        <p>
                                            <span style="font-size: 15px;"><br />
                                                Jl. Jenderal A. Yani No. 3 Palembang<br />
                                            </span><span style="font-size: 15px;">Sumatera Selatan, Indonesia</span>
                                        </p>

                                        <p>
                                            <span style="font-size: 15px;">0711-515582<br />
                                                universitas@binadarma.ac.id<br />
                                            </span>
                                        </p>

                                        <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" style="padding-bottom: 0px ;">
                                            <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="facebook" style="color: #d61b23 ;" rel="noopener"><i class="fa fa-facebook"></i></a>
                                            <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="linkedin" style="color: #d61b23 ;" rel="noopener"><i class="fa fa-linkedin"></i></a>
                                            <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="twitter" style="color: #d61b23 ;" rel="noopener"><i class="fa fa-twitter"></i></a>
                                            <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="instagram" style="color: #d61b23 ;" rel="noopener"><i class="fa fa-instagram"></i></a>
                                        </div>

                                        <span class="gdlr-core-space-shortcode" style="margin-top: 40px ;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Alumni -->
        <div class="gdlr-core-pbf-wrapper " style="padding: 45px 0px 45px 0px;">
            <div class="gdlr-core-pbf-background-wrap"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 35px ;">
                            <div class="gdlr-core-title-item-title-wrap clearfix">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 22px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;color: #163269 ;">
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="gdlr-core-pbf-column gdlr-core-column-40 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 5px ;">
                                        <div class="gdlr-core-text-box-item-content" style="text-transform: none ;">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- PMB -->
        <div class="gdlr-core-pbf-wrapper " style="padding: 65px 0px 60px 0px;">
            <div class="gdlr-core-pbf-background-wrap" style="background-color: #192f59 ;"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first" id="gdlr-core-column-39084">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 30px 0px 0px 0px;">
                            <div class="gdlr-core-pbf-background-wrap"></div>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 20px ;">
                                        <div class="gdlr-core-text-box-item-content" style="text-transform: none ;color: #ffffff ;">

                                            <div class="gdlr-core-blockquote-item-quote gdlr-core-quote-font" style="font-size: 170px ; margin-top: -120px">“</div>
                                            <p style="margin-top: -120px">
                                                Kompetensi lulusan Program Studi Sistem Informasi meliputi 3 bidang keahlian (konsenstrasi) 
                                                yaitu Konsentrasi dalam bidang Sistem Informasi Bisnis, Konsentrasi dalam bidang Sistem Penunjang Manajemen 
                                                Konsentrasi dalam bidang Sistem Informasi.
                                            </p>

                                            <p>
                                                <span style="font-weight: bold;">Suyanto ,M.M, M.Kom.</span>
                                                <br>Ketua Program Studi Sistem Informasi
                                            </p>
                                        </div>
                                    </div>
                                </div>

{{-- Informasi Pendaftaran | Informasi Jalur Pendaftaran --}}
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 10px ;">
                                        <a class="gdlr-core-button  gdlr-core-button-solid gdlr-core-left-align gdlr-core-button-no-border" href="https://pmb.binadarma.ac.id" target="_blank" style="font-size: 14px ;font-weight: 700 ;letter-spacing: 0px ;padding: 13px 26px 16px 30px;text-transform: none ;margin: 0px 10px 10px 0px;border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;background: #d61b23 ;"><span class="gdlr-core-content">Informasi Pendaftaran</span><i class="gdlr-core-pos-right fa fa-external-link" style="font-size: 14px ;"></i></a>

                                        <a class="gdlr-core-button  gdlr-core-button-solid gdlr-core-left-align gdlr-core-button-no-border" href="#" style="font-size: 14px ;font-weight: 700 ;letter-spacing: 0px ;padding: 13px 26px 16px 30px;text-transform: none ;border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;background: #3db166 ;"><span class="gdlr-core-content">Informasi Jalur Penerimaan</span><i class="gdlr-core-pos-right fa fa-external-link" style="font-size: 14px ;"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{-- Profile Photo --}}
                    <div class="gdlr-core-pbf-column gdlr-core-column-30" id="gdlr-core-column-284">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: -123px 0px 0px 0px;padding: 0px 0px 0px 40px;">
                            <div class="gdlr-core-pbf-background-wrap"></div>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-image-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-item-pdlr">
                                        <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"><img src="images/staf/SI_suyanto.jpeg" width="700" height="450" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection