<?php

namespace App\Http\Controllers;

use App\Models\MitraModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mitras = MitraModel::all();
        return view('admin/mitra/index', compact('mitras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $url = route('admin.store');

        return view('admin.mitra.action', compact('url'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        MitraModel::insert([
            'username' => Str::lower($request->username),
            'mitra_nama_perusahaan' => $request->mitra_nama_perusahaan,
            'mitra_nama_apk' => $request->mitra_nama_apk
        ]);

        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = MitraModel::where('mitra_id', $id)->first();
        $url = route('admin.update', $data);

        return view('admin.mitra.action', compact('url', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        MitraModel::where('mitra_id', $id,)->update([
            'username' => Str::lower($request->username),
            'mitra_nama_perusahaan' => $request->mitra_nama_perusahaan,
            'mitra_nama_apk' => $request->mitra_nama_apk
        ]);

        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        MitraModel::where('mitra_id', $id)->delete();

        return redirect()->route('admin.index');
    }
}
