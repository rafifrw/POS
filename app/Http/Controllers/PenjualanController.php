<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function pos(){
        return view('penjualan.pos')
        ->with('transaksi', 'Halaman Transaksi');
    }
}
