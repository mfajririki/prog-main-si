<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\BidangMinat;
use App\Models\Staf;
use App\Models\Document;
use App\Models\Kurikulums;
use App\Models\Panduan;
use App\Models\PembimbingAkademik;
use App\Models\Kaprodi;
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
        $profile_kaprodi = ProfileKaprodi::get();
        $latest_news = Announcement::latest()->limit(3)->get();

        return view(
            'new_ui.beranda',
            compact('profile_kaprodi', 'latest_news')
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
        return view('new_ui.pengumuman');
    }

    public function berita()
    {
        return view('new_ui.berita');
    }

    public function prestasi()
    {
        return view('new_ui.prestasi');
    }

    public function lowongankerja()
    {
        return view('new_ui.lowongan_kerja');
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

    public function kurikulum()
    {
        return view('new_ui.kurikulum');
    }

    public function panduan()
    {
        $panduans = Panduan::latest()->get();

        return view('new_ui.panduan', compact('panduans'));
    }

    public function bimbinganakademik()
    {
        return view('new_ui.bimbingan_akademik');
    }

    public function profillulusan()
    {
        return view('new_ui.profil_lulusan',);
    }

    public function tentangprodi()
    {
        return view('new_ui.tentang',);
    }

    public function visimisitujuan()
    {
        return view('new_ui.visi_misi_tujuan');
    }

    public function stafpengajar()
    {
        return view('new_ui.staf_pengajar');
    }

    public function fasilitas()
    {
        return view('new_ui.fasilitas');
    }

    public function kerjasama()
    {
        return view('new_ui.kerja_sama');
    }

    public function mbkm()
    {
        return view('new_ui.mbkm');
    }
}
