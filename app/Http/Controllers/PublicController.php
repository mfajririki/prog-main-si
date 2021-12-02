<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\BidangMinat;
use App\Models\Staf;
use App\Models\Document;
use App\Models\Kurikulums;
use App\Models\Panduan;
use App\Models\PembimbingAkademik;
use App\Models\ProfileLulusan;
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
        $tentang = Tentang::get();
        $visi_misi = VisiMisi::get();
        $tujuan = Tujuans::get();

        return view(
            'landing',
            compact('tentang', 'visi_misi', 'tujuan'),
        );
    }

    public function index()
    {
        $announcements  = Announcement::latest()->paginate(8);
        $latests  = Announcement::latest()->limit(6)->get();

        return view('announcement', compact('announcements', 'latests'));
    }

    public function show(Announcement $announcement)
    {
        return view('announcement_detail', compact('announcement'));
    }

    public function staf()
    {
        $staf_pengajar = Staf::paginate(10);

        return view('staf', ['staf_pengajar' => $staf_pengajar]);
    }

    public function kurikulum_konten()
    {
        $kurikulum = Kurikulums::get();
        $mk_bidangminat = BidangMinat::get();

        return view('kurikulum', compact('kurikulum', 'mk_bidangminat'));
    }

    public function halpanduan()
    {
        $panduan = Panduan::get();

        return view('panduan', compact('panduan'));
    }

    public function bimbingan_akademik()
    {
        $bimbingan_akademik = PembimbingAkademik::get();

        return view('bimbingan_akademik', compact('bimbingan_akademik'));
    }

    public function profilelulusan()
    {
        $profilelulusan = ProfileLulusan::get();

        return view('profilelulusan', compact('profilelulusan'));
    }
}
