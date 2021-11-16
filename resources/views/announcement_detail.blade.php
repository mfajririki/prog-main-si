@extends('layouts.public')

@section('content')
<div class="kingster-page-wrapper" id="kingster-page-wrapper">

    <!-- Hero Section -->
    <div class="kingster-blog-title-wrap kingster-style-small">
        <div class="kingster-header-transparent-substitute"></div>
        <div class="kingster-blog-title-top-overlay"></div>
        <div class="kingster-blog-title-overlay"></div>
        <div class="kingster-blog-title-bottom-overlay"></div>
        <div class="kingster-blog-title-container kingster-container">
            <div class="kingster-blog-title-content kingster-item-pdlr">
                <header class="kingster-single-article-head clearfix">
                    <div class="kingster-single-article-date-wrapper  post-date updated">
                        <div class="kingster-single-article-date-day">
                            {{ $announcement->created_at->format('d') }}
                        </div>
                        <div class="kingster-single-article-date-month">
                            {{ $announcement->created_at->format('M') }}
                        </div>
                    </div>
                    <div class="kingster-single-article-head-right">
                        <h1 class="kingster-single-article-title">
                            {{ $announcement->title }}
                        </h1>
                        <div class="kingster-blog-info-wrapper">
                            <div
                                class="kingster-blog-info kingster-blog-info-font kingster-blog-info-author vcard author post-author ">
                                <span class="kingster-head">By </span><span class="fn">SI UBD</span></div>
                        </div>
                    </div>
                </header>
            </div>
        </div>
    </div>

    <!-- Breadcrumb -->
    <div class="kingster-breadcrumbs">
        <div class="kingster-breadcrumbs-container kingster-container">
            <div class="kingster-breadcrumbs-item kingster-item-pdlr">
                <span property="itemListElement" typeof="ListItem">
                    <a property="item" typeof="WebPage" title="Go to MTI." href="{{ url('') }}" class="home"><span
                            property="name">Beranda</span></a>
                    <meta property="position" content="1">
                </span> &gt; <span property="itemListElement" typeof="ListItem">
                    <a property="item" typeof="WebPage" title="Go to MTI." href="{{ url('/pengumuman') }}"
                        class="home"><span property="name">Pengumuman</span></a>
                    <meta property="position" content="2"></span>
                </span> &gt; <span property="itemListElement" typeof="ListItem">
                    <span property="name" class="post post-page current-item">{{ $announcement->title }}</span>
                    <meta property="url" content="index.html">
                    <meta property="position" content="3"></span>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="kingster-content-container kingster-container">
        <div class=" kingster-sidebar-wrap clearfix kingster-line-height-0 kingster-sidebar-style-none">
            <div class=" kingster-sidebar-center kingster-column-60 kingster-line-height">
                <div class="kingster-content-wrap kingster-item-pdlr clearfix">
                    <div class="kingster-content-area">
                        <article id="post-13735"
                            class="post-13735 post type-post status-publish format-standard has-post-thumbnail hentry category-news-en tag-alumni-outcome">
                            <div class="kingster-single-article clearfix">

                                @if(!is_null($announcement->photo))
                                <div class="kingster-single-article-thumbnail kingster-media-image"><img
                                        src="{{ asset($announcement->photo) }}" width="1280" height="720"
                                        alt="{{ $announcement->title }}" /></div>
                                @endif

                                <div class="kingster-single-article-content">
                                    {!! $announcement->content !!}
                                </div>

                                <div class="kingster-single-social-share kingster-item-rvpdlr">
                                    <div class="kingster-single-nav-area clearfix">
                                        <h6 class="mb-3">Dokumen Lampiran</h6>

                                        @foreach($announcement->documents as $document)
                                        <a target="_blank"
                                            class="gdlr-core-button gdlr-core-button-solid gdlr-core-left-align gdlr-core-button-with-border"
                                            href="{{ asset($document->document) }}"
                                            style="font-size: 14px ;font-weight: 700 ;letter-spacing: 0px ;color: #d61b23 ;padding: 13px 26px 16px 30px;text-transform: none ;border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;background: #ffffff ;border-color: #d61b23 ;"><span
                                                class="gdlr-core-content">{{ $document->name }}</span><i
                                                class="gdlr-core-pos-right fa fa-file-pdf-o"
                                                style="font-size: 14px ;"></i></a>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <!-- kingster-single-article -->
                        </article>
                        <!-- post-id -->
                    </div>


                </div>
            </div>
        </div>

    </div>
    @endsection
