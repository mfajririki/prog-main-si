<?php

namespace App\Http\Controllers;

use App\Models\Kurikulums;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\File;

class KurikulumsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kurikulum  = Kurikulums::paginate(10);

        return view('admin.kurikulums.index', compact('kurikulum'));
    }

    public function create()
    {
        return view('admin.kurikulums.create');
    }

    public function store(Request $request)
    {
        // Validate posted form data
        // $request->validate([
        //     'title'     => 'required|string|unique:staf_pengajar',
        // ]);

        DB::transaction(function () use ($request) {
            $file = $request->file('photo');
            if ($file) {
                $image_name = time() . '.' . $file->getClientOriginalExtension();
                $destinationPath = public_path('images/staf/');
                $file->move($destinationPath, $image_name);
            }

            $kurikulum = Kurikulums::create([
                'kode_mk'           => $request->kode_mk,
                'nama_mk'           => $request->nama_mk,
                'kelompok_mk'       => $request->kelompok_mk,
                'sks'               => $request->sks,
                'semester'          => $request->semester,
            ]);
        });

        // Redirect the user to the created post with a success notification
        return redirect(route('kurikulums.index'))->with('alert', 'Data berhasil dibuat!');
    }

    public function show($id)
    {
        //
    }

    public function edit(Kurikulums $kurikulum)
    {
        return view('admin.kurikulums.edit', compact('kurikulum',));
    }

    public function update($id, Request $request)
    {
        $file = $request->file('photo');
        if ($file) {
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('images/');
            $file->move($destinationPath, $image_name);
        }

        $kurikulum = Kurikulums::where('id', $id)
            ->update([
                'kode_mk'           => $request->kode_mk,
                'nama_mk'           => $request->nama_mk,
                'kelompok_mk'       => $request->kelompok_mk,
                'sks'               => $request->sks,
                'semester'          => $request->semester,
            ]);



        return redirect(route('kurikulums.index'))->with('alert', 'Data berhasil diupdate!');
    }

    public function destroy(Kurikulums $kurikulum)
    {
        $kurikulum->delete();

        return redirect(route('kurikulums.index'))->with('alert', 'Data berhasil dihapus!');
    }
}
