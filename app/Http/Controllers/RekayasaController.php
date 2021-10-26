<?php

namespace App\Http\Controllers;
use App\Stock;
use App\Pengajuan;

use Illuminate\Http\Request;

class RekayasaController extends Controller
{
    public function index()
    {
        return view('/tambahrekayasa');
    }

    public function tambah_data_rekayasa(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'stok' => 'required',
            'status' => 'required'
        ]);

        $stock = new Stock();
        $stock ->user_id = Auth::user()->id;
        $stock ->nama = $request->input('nama');
        $stock ->stok = $request->input('stok');
        $stock ->status = $request->input('status');

        $stock-> save();

        return redirect()->route('perekayasa');
    }

    public function data()
    {
        $pengajuan = Pengajuan::all();

        return view('datapengajuan', compact('pengajuan'));
    }

    public function proseskirim($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);
        $pengajuan->status = 'proses kirim';
        $pengajuan->save();

        return back()->with('status', 'status berubah ke proses kirim');
    }
}
