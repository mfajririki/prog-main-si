<?php

namespace App\Http\Controllers;

use App\Models\PembimbingAkademik;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\File;

class PembimbingAkademikController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pembimbing_akademik  = PembimbingAkademik::latest()->get();

        return view('admin.pembimbing_akademik.index', compact('pembimbing_akademik'));
    }

    public function create()
    {
        return view('admin.pembimbing_akademik.create');
    }

    public function store(Request $request)
    {
        // Validate posted form data
        // $request->validate([
        //     'title'     => 'required|string|unique:staf_pengajar',
        // ]);

        DB::transaction(function () use ($request) {
            $pembimbing_akademik = PembimbingAkademik::create([
                'dosen'          => $request->dosen,
                'mahasiswa'        => $request->mahasiswa,
                'angkatan'          => $request->angkatan,
            ]);
        });

        // Redirect the user to the created post with a success notification
        return redirect(route('pembimbing_akademik.index'))->with('alert', 'Data berhasil dibuat!');
    }

    public function show($id)
    {
        //
    }

    public function edit(PembimbingAkademik $pembimbing_akademik)
    {
        return view('admin.pembimbing_akademik.edit', compact('pembimbing_akademik',));
    }

    public function update($id, Request $request)
    {
        $pembimbing_akademik = PembimbingAkademik::where('id', $id)
            ->update([
                'dosen'          => $request->dosen,
                'mahasiswa'          => $request->mahasiswa,
                'angkatan'          => $request->angkatan,
            ]);



        return redirect(route('pembimbing_akademik.index'))->with('alert', 'Data berhasil diupdate!');
    }

    public function destroy(PembimbingAkademik $pembimbing_akademik)
    {
        $pembimbing_akademik->delete();

        return redirect(route('pembimbing_akademik.index'))->with('alert', 'Data berhasil dihapus!');
    }
}