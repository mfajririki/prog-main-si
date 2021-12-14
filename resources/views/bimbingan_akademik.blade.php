@extends('layouts.public')

@section('content')
<!-- Hero Section -->
<div class="kingster-page-title-wrap  kingster-style-custom kingster-left-align" style="background-image: url(assets/content/uploads/2020/06/cta-akademik-1.jpg) ;" >
    <div class="kingster-header-transparent-substitute" ></div>
    <div class="kingster-page-title-overlay"  ></div>
    <div class="kingster-page-title-bottom-gradient" ></div>
    <div class="kingster-page-title-container kingster-container" >
        <div class="kingster-page-title-content kingster-item-pdlr" style="padding-top: 160px ;padding-bottom: 20px ;"  >
            <div class="kingster-page-caption" style="font-size: 21px ;font-weight: 400 ;letter-spacing: 0px ;"  >Sistem Informasi</div>
            <h1 class="kingster-page-title" style="font-size: 48px ;font-weight: 700 ;text-transform: none ;letter-spacing: 0px ;color: #ffffff ;"  >Bimbingan Akademik</h1>
        </div>
    </div>
</div>

<!-- Breadcrumb -->
<div class="kingster-breadcrumbs">
    <div class="kingster-breadcrumbs-container kingster-container" >
        <div class="kingster-breadcrumbs-item kingster-item-pdlr" >
        <span property="itemListElement" typeof="ListItem">
            <a property="item" typeof="WebPage" title="Beranda." href="{{ url('') }}" class="home" ><span property="name">Beranda</span></a>
            <meta property="position" content="1">
        </span> &gt; <span property="itemListElement" typeof="ListItem">
            <span property="name" class="post post-page current-item">Bimbingan Akademik</span>
            <meta property="url" content="index.html"><meta property="position" content="2"></span>
        </div>
    </div>
</div>  

<!-- Content -->
<div class="kingster-page-wrapper" id="kingster-page-wrapper" >
<div class="gdlr-core-page-builder-body">
  <div class="gdlr-core-pbf-sidebar-wrapper "  >
     <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
        <!-- Right Widget -->
        <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-60 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-right" style="padding: 40px 0px 0px 0px;"  >
           <div class="gdlr-core-pbf-sidebar-content-inner" data-skin="Personnel"  >
              <div class="gdlr-core-pbf-element" >
                 <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px ;"  >
                    <div class="gdlr-core-title-item-title-wrap clearfix" >
                       <h3 class="gdlr-core-title-item-title gdlr-core-skin-title  gdlr-core-with-side-border" style="font-size: 22px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;color: #223d71 ;margin-right: 30px ;"  >Bimbingan Akademik</h3>
                       <div class="gdlr-core-title-item-divider gdlr-core-right gdlr-core-skin-divider" style="font-size: 22px ;border-bottom-width: 3px ;"  ></div>
                    </div>
                 </div>
              </div>

              <div class="gdlr-core-pbf-element" >
                 <div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-personnel-item-style-medium gdlr-core-personnel-style-medium"  >
                     {{-- accordion --}}
                     <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                              Angkatan 2017
                           </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                           <div class="accordion-body">...</div>
                        </div>
                        </div>
                        <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                              Angkatan 2018
                           </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                           <div class="accordion-body">
                              <!-- Table -->
                              <table class="table">
                                 <thead class="table-dark">
                                 <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Mahasiswa</th>
                                    <th scope="col">Dosen</th>
                                    <th scope="col">Angkatan</th>
                                 </tr>
                                 </thead>
                                 <tbody>
                                    @foreach ($bimbingan_akademik as $no => $ba)
                                    <tr class="text-dark">
                                       <td>{{ $no+1 }}</td>
                                       <td>{{ $ba->mahasiswa }}</td>
                                       <td>{{ $ba->dosen}}</td>
                                       <td>{{ $ba->angkatan}}</td>
                                    </tr>
                                    @endforeach
                                 </tbody>
                              </table>
                           </div>
                        </div>
                        </div>
                        <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                              Angkatan 2019
                           </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                           <div class="accordion-body">...</div>
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