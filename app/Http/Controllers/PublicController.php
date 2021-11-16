<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Staf;
use App\Models\Document;
use App\Models\VisiMisi;
use App\Models\Tujuan;
use App\Models\Tentang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{
    public function halamanUtama()
    {
        $tentang = DB::table('tentang')->get();
        $visi_misi = DB::table('visi_misi')->get();
        $tujuan = DB::table('tujuan')->get();

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
        $kurikulum = DB::table('kurikulum')->get();
        $mk_bidangminat = DB::table('mk_bidangminat')->get();

        return view('kurikulum', compact('kurikulum', 'mk_bidangminat'));
    }

    public function profile_lulusan()
    {
        return view('profile_lulusan');
    }
}
