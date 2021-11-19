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
                Sarjana Teknik Informatika</h1>
        </div>
    </div>
</div>

<!-- Breadcrumb -->
<div class="kingster-breadcrumbs">
    <div class="kingster-breadcrumbs-container kingster-container">
        <div class="kingster-breadcrumbs-item kingster-item-pdlr">
            <span property="itemListElement" typeof="ListItem">
                <a property="item" typeof="WebPage" title="Beranda Sarjana Teknik Informatika." href="{{ url('') }}" class="home"><span property="name">Beranda</span></a>
                <meta property="position" content="1">
            </span> &gt; <span property="itemListElement" typeof="ListItem">
                <span property="name" class="post post-page current-item">Sarjana Teknik Informatika</span>
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
                                        Program Studi Teknik Informatika </h3>
                                </div>
                            </div>
                        </div>

                        <!-- konten halaman utama. teknik informatika -->
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
                                                                            Sejarah Singkat Program Studi Teknik Informatika<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
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
                                            <p style="margin-top: -120px" align="justify">
                                                Lulusan Program Studi Teknik Informatika mempunyai kualifikasi sarjana Komputer
                                                bidang Teknik Informatika yang berkualitas, berkarakter dan mampu mengembangkan jiwa
                                                enterpreunership dan dapat bekerja sebagai Network Engineer, Tenaga IT Spesialis di
                                                perusahaan/pemerintahan, Analisis Sistem/Programmer/Software Development, Tenaga Ahli
                                                Database/Database Administrator (DBA) dll.
                                            </p>

                                            <p>
                                                <span style="font-weight: bold;">Alek Wijaya, S.Kom., M.I.T.</span>
                                                <br>Ketua Program Studi Teknik Informatika
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
                                        <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"><img src="images/staf/alex-wijaya.jpeg" width="700" height="450" />
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