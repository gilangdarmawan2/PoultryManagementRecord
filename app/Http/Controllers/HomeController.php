<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporanproduksi;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $laporanproduksis = Laporanproduksi::select('id','tanggal','populasi', 'berat_telur', 'telur')->get();

        // return view('LaporanProduksi.LaporanProduksi')->with('laporanproduksis',$laporanproduksis);

        // $laporanproduksis = Laporanproduksi::latest()->paginate(5);

        // return view('products.index', compact('product'))->with('i', (request()->input('page', 1) - 1) * 5);

        return redirect()->route('laporanproduksi.index');

        //return view('LaporanProduksi.LaporanProduksi');
    }
}
