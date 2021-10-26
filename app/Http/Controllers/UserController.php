<?php

namespace App\Http\Controllers;
use App\Stock;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('/perekayasa');
    }

    public function pabrik()
    {
        return view('/pabrik');
    }

    public function outlet()
    {
        return view('/outlet');
    }

    public function stok()
    {
        $stock = Stock::all();

        return view('/stokpabrik', compact('stock'));
    }
}
