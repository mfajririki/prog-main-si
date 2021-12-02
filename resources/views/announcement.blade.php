@extends('layouts.public')

@section('content')
<!-- Hero Section -->
<div class="kingster-page-title-wrap  kingster-style-custom kingster-left-align" style="background-image: url(assets/content/uploads/2020/06/cta-akademik-1.jpg) ;">
    <div class="kingster-header-transparent-substitute"></div>
    <div class="kingster-page-title-overlay"></div>
    <div class="kingster-page-title-bottom-gradient"></div>
    <div class="kingster-page-title-container kingster-container">
        <div class="kingster-page-title-content kingster-item-pdlr" style="padding-top: 400px ;padding-bottom: 60px ;">
            <div class="kingster-page-caption" style="font-size: 21px ;font-weight: 400 ;letter-spacing: 0px ;">Sistem Informasi</div>
            <h1 class="kingster-page-title" style="font-size: 48px ;font-weight: 700 ;text-transform: none ;letter-spacing: 0px ;color: #ffffff ;">
                Pengumuman</h1>
        </div>
    </div>
</div>

<!-- Breadcrumb -->
<div class="kingster-breadcrumbs">
    <div class="kingster-breadcrumbs-container kingster-container">
        <div class="kingster-breadcrumbs-item kingster-item-pdlr">
            <span property="itemListElement" typeof="ListItem">
                <a property="item" typeof="WebPage" title="Beranda." href="{{ url('') }}" class="home"><span property="name">Beranda</span></a>
                <meta property="position" content="1">
            </span> &gt; <span property="itemListElement" typeof="ListItem">
                <span property="name" class="post post-page current-item">Pengumuman</span>
                <meta property="url" content="index.html">
                <meta property="position" content="2">
            </span>
        </div>
    </div>
</div>

<!-- Content -->
<div class="kingster-page-wrapper" id="kingster-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-sidebar-wrapper ">
            <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" style="padding: 60px 10px 30px 0px;">
                    <div class="gdlr-core-pbf-background-wrap" style="background-color: #f7f7f7 ;"></div>
                    <div class="gdlr-core-pbf-sidebar-content-inner">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-full-with-frame" style="padding-bottom: 40px ;">
                                <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                    @foreach($announcements as $announcement)

                                    <!-- Item -->
                                    <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">

                                        @if(!is_null($announcement->photo))
                                        <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                            <a href="{{ route('pengumuman_detail', $announcement) }}">
                                                <img src="{{ asset($announcement->photo) }}" width="900" height="250" alt="" />
                                            </a>
                                        </div>
                                        @endif

                                        <!-- Content -->
                                        <div class="gdlr-core-blog-full-frame gdlr-core-skin-e-background">
                                            <div class="gdlr-core-blog-full-head clearfix">
                                                <div class="gdlr-core-blog-full-head-right">
                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 33px ;font-weight: 700 ;letter-spacing: 0px ;">
                                                        <a href="{{ route('pengumuman_detail', $announcement) }}">{{ $announcement->title }}</a>
                                                    </h3>

                                                    <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                        <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">{{ $announcement->created_at->diffForHumans() }}</span>

                                                        <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head">By</span><a title="Posts by SI UBD" rel="author">SI UBD</a></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="gdlr-core-blog-content clearfix">
                                                {{ strip_tags( substr($announcement->content, 0, 150) ) }} ...
                                                <div class="clear"></div>
                                                <a class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle" href="{{ route('pengumuman_detail', $announcement) }}">Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach
                                </div>

                                <!-- Pagination -->
                                {{ $announcements->links('vendor.pagination.custom') }}

                            </div>
                        </div>
                    </div>
                </div>                
                
                <!-- Side News -->
                <div class="gdlr-core-pbf-sidebar-right gdlr-core-column-extend-right  kingster-sidebar-area gdlr-core-column-20 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height">
                    <div class="gdlr-core-pbf-background-wrap" style="background-color: #f7f7f7 ;"></div>
                    <div class="container" style="padding-bottom: 10px">
                        <h6>Kategori</h6>
                        <button type="button" class="btn btn-success"><a href="#">Pengumuman</a></button>
                        <button type="button" class="btn btn-success"><a href="#">Berita</a></button>
                        <button type="button" class="btn btn-success"><a href="#">Prestasi</a></button>
                    </div>
                    <div class="gdlr-core-sidebar-item gdlr-core-item-pdlr">
                        <div id="gdlr-core-recent-post-widget-1" class="widget widget_gdlr-core-recent-post-widget kingster-widget">
                            <h3 class="kingster-widget-title">Pengumuman Terbaru</h3>
                            <span class="clear"></span>
                            <div class="gdlr-core-recent-post-widget-wrap gdlr-core-style-1">

                                @forelse ($latests as $latest)
                                <!-- Item -->
                                <div class="gdlr-core-recent-post-widget clearfix">

                                    @if(!is_null($latest->photo))
                                    <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img src="{{ asset($latest->photo) }}" alt="" width="150" height="150" title="{{ $latest->title }}" /></div>
                                    @endif

                                    <div class="gdlr-core-recent-post-widget-content">
                                        <div class="gdlr-core-recent-post-widget-title"><a href="{{ route('pengumuman_detail', $latest) }}">{{ $latest->title }}</a>
                                        </div>
                                        <div class="gdlr-core-recent-post-widget-info"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">{{ $latest->created_at->diffForHumans() }}</span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head">By </span>SI UBD</span></div>
                                    </div>
                                </div>
                                @empty
                                <!-- Item -->
                                <div class="gdlr-core-recent-post-widget clearfix">

                                    <div class="gdlr-core-recent-post-widget-content">
                                        <div class="gdlr-core-recent-post-widget-title">
                                            <center>
                                                Belum ada data
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                @endforelse

                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-widget-box-shortcode " style="color: #ffffff ;padding: 30px 45px;background-color: #192f59 ;">
                        <div class="gdlr-core-widget-box-shortcode-content">
                            </p>
                            <h3 style="font-size: 20px; color: #fff; margin-bottom: 25px;">Universitas Bina Darma</h3>
                            <p><span style="color: #3db166; font-size: 16px; font-weight: 600;">Program Studi Sistem Informasi</span>
                                <br /> <span style="font-size: 15px;"><br />Jl. Jenderal A. Yani No. 3 Palembang<br/>Sumatera Selatan, Indonesia</span></p>
                            <p><span style="font-size: 15px;">0711-515582<br /> universitas@binadarma.ac.id<br /> </span></p>
                            <p><span style="font-size: 16px; color: #3db166;">Senin-Jumat  08:00 &#8211; 16:00 <br/> Sabtu  08:00 &#8211; 12:00</span></p> <span class="gdlr-core-space-shortcode" style="margin-top: 40px ;"></span>
                            <h3 style="font-size: 20px; color: #fff; margin-bottom: 15px;">Social Info</h3>
                            <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" style="padding-bottom: 0px ;">
                               <a href="#url" target="_blank" class="gdlr-core-social-network-icon" title="facebook" style="color: #3db166 ;"><i class="fa fa-facebook" ></i></a>
                               <a href="#url" target="_blank" class="gdlr-core-social-network-icon" title="twitter" style="color: #3db166 ;"><i class="fa fa-twitter" ></i></a>
                               <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="instagram" style="color: #3db166 ;"><i class="fa fa-instagram" ></i></a></div>
                            <p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection