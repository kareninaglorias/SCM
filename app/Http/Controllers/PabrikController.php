<?php

namespace App\Http\Controllers;
use App\Pengajuan;
use App\Stock;
use App\Order;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class PabrikController extends Controller
{
    public function index()
    {
        return view('/tambahpengajuan');
    }

    public function stok()
    {
        return view('/tambahstok');
    }

    public function tambah_data_stok(Request $request)
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

        return redirect()->route('stokpabrik');
    }

    public function tambah_data_pengajuan(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'jumlah' => 'required',

        ]);

        $pengajuan = new Pengajuan();
        $pengajuan ->user_id = Auth::user()->id;
        $pengajuan ->nama = $request->input('nama');
        $pengajuan ->jumlah = $request->input('jumlah');

        $pengajuan-> save();

        return redirect()->route('pabrik');
    }

    public function status()
    {
        $pengajuan = Pengajuan::all();

        return view('statuspengajuan', compact('pengajuan'));
    }

    public function diterima($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);
        $pengajuan->status = 'diterima';
        $pengajuan->save();

        return back()->with('status', 'barang sudah diterima');
    }

    public function pesanan()
    {
        $order = Order::all();

        return view('pesananoutlet', compact('order'));
    }

    public function proseskirim($id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'proses kirim';
        $order->save();

        return back()->with('status', 'status berubah ke proses kirim');
    }
}
