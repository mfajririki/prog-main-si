<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\BidangMinat;
use App\Models\Staf;
use App\Models\Document;
use App\Models\Kurikulums;
use App\Models\Panduan;
use App\Models\PembimbingAkademik;
use App\Models\ProfileKaprodi;
use App\Models\ProfileLulusan;
use App\Models\Slider;
use App\Models\VisiMisi;
use App\Models\Tentang;
use App\Models\Tujuans;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Expr\FuncCall;

class PublicController extends Controller
{
    public function halamanUtama()
    {
        $title = "Beranda";

        return view(
            'new.beranda',
        );
    }

    public function index()
    {
        $announcements  = Announcement::latest()->paginate(8);
        $latests  = Announcement::latest()->limit(6)->get();
        $sliders = Slider::get();
        $title = "Pengumuman";

        return view('announcement', compact('announcements', 'latests', 'title', 'sliders'));
    }

    public function pengumuman()
    {
        $announcements  = Announcement::latest()->paginate(8);
        $latests  = Announcement::latest()->limit(6)->get();
        $sliders = Slider::get();
        $title = "Pengumuman";

        return view('pengumuman_only', compact('announcements', 'latests', 'title', 'sliders'));
    }

    public function berita()
    {
        $announcements  = Announcement::latest()->paginate(8);
        $latests  = Announcement::latest()->limit(6)->get();
        $sliders = Slider::get();
        $title = "Pengumuman - Berita";

        return view('pengumuman_berita', compact('announcements', 'latests', 'title', 'sliders'));
    }

    public function prestasi()
    {
        $announcements  = Announcement::latest()->paginate(8);
        $latests  = Announcement::latest()->limit(6)->get();
        $sliders = Slider::get();
        $title = "Pengumuman - Prestasi";

        return view('pengumuman_prestasi', compact('announcements', 'latests', 'title', 'sliders'));
    }

    public function show(Announcement $announcement)
    {
        $title = "Pengumuman";
        $sliders = Slider::get();
        return view('announcement_detail', compact('announcement', 'title', 'sliders'));
    }

    public function staf()
    {
        $staf_pengajar = Staf::paginate(10);
        $sliders = Slider::get();
        $title = "Staf Pengajar";

        return view('staf', compact('staf_pengajar', 'title', 'sliders'));
    }

    public function kurikulum_konten()
    {
        $kurikulum = Kurikulums::get();
        $mk_bidangminat = BidangMinat::get();
        $sliders = Slider::get();
        $title = "Kurikulum";

        return view('kurikulum', compact('kurikulum', 'mk_bidangminat', 'title', 'sliders'));
    }

    public function halpanduan()
    {
        $panduan = Panduan::get();
        $sliders = Slider::get();
        $title = "Panduan";

        return view('panduan', compact('panduan', 'title', 'sliders'));
    }

    public function bimbingan_akademik()
    {
        $pembimbing_akademik = PembimbingAkademik::get();
        $sliders = Slider::get();
        $title = "Bimbingan Akademik";

        return view('bimbingan_akademik', compact('pembimbing_akademik', 'title', 'sliders'));
    }

    public function profillulusan()
    {
        return view('new.profil_lulusan',);
    }

    public function tentangprodi()
    {
        return view('new.tentang',);
    }

    public function visimisitujuan()
    {
        return view('new.visi_misi_tujuan');
    }

    public function stafpengajar()
    {
        return view('new.staf_pengajar');
    }

    public function fasilitas()
    {
        return view('new.fasilitas');
    }

    public function kerjasama()
    {
        return view('new.kerja_sama');
    }
}
