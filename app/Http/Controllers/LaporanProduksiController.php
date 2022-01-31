<?php

namespace App\Http\Controllers;

use App\Models\Laporanproduksi;
use Illuminate\Http\Request;

class LaporanProduksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporanproduksis = Laporanproduksi::all();

        return view('LaporanProduksi.LaporanProduksi', compact('laporanproduksis', 'laporanproduksis'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('LaporanProduksi.Create-LaporanProduksi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'tanggal' => 'required',
            'populasi' => 'required',
            'berat_telur' => 'required',
            'telur' => 'required'
        ]);

        Laporanproduksi::create($request->all());

        return redirect()->route('laporanproduksi.index')->with('success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        //return view('laporanproduksi.show', compact('laporanproduksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporanproduksi $laporanproduksi)
    {
        return view('LaporanProduksi.Edit-LaporanProduksi', compact('laporanproduksi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'tanggal' => 'required',
            'populasi' => 'required',
            'berat_telur' => 'required',
            'telur' => 'required',
        ]);
        Laporanproduksi::whereId($id)->update($validatedData);

        return redirect('laporanproduksi')->with('success', 'successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laporanproduksis = Laporanproduksi::find($id);
        $laporanproduksis->delete();

        return redirect('laporanproduksi')->with('success', 'successfully deleted');
    }
}
