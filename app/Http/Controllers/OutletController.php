<?php

namespace App\Http\Controllers;
use App\Order;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class OutletController extends Controller
{
    public function pesanan()
    {
        return view('/tambahpesanan');
    }

    public function tambah_data_pesanan(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'jumlah' => 'required',
        ]);

        $order = new Order();
        $order ->user_id = Auth::user()->id;
        $order ->nama = $request->input('nama');
        $order ->jumlah = $request->input('jumlah');

        $order-> save();

        return redirect()->route('outlet');
    }

    public function data()
    {
        $order = Order::all();

        return view('datapesanan', compact('order'));
    }
}
