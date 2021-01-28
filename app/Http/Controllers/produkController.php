<?php

namespace App\Http\Controllers;

use App\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class produkController extends Controller
{
    public function index()
    {
        //mengambil data dari produk
        $produk = DB::table('tabel_produk')->get();

        //mengirim data produk ke view index
        return view('index',['produk' => $produk]);

    }

    public function tambah ()
    {
        //memanggil view tambah
        return view('tambah');
    }

    // method untuk insert data ke table produk
    public function store(Request $request)
    {
        // insert data ke table produk
        DB::table('tabel_produk')->insert([
            'produk_nama' => $request->nama,
            'produk_tipe' => $request->tipe,
            'produk_platform' => $request->platform
        ]);
        // alihkan halaman ke halaman produk
        return redirect('/produk');
    
    }

    public function edit($id)
    {
        //$produk = DB::table('tabel_produk')->where('produk_id',$id)->first();
        $produk = produk::find($id);
    
        return view('editData',compact('produk'));
    }

    public function update(Request $request, $id)
    {
        produk::where('produk_id',$id)->update([
            'produk_nama' => $request->nama,
            'produk_tipe' => $request->tipe,
            'produk_platform' => $request->platform
        ]);
        return redirect(route('viewData'));
    }

    public function destroy($id)
    {
        produk::where('produk_id',$id)->delete();
        return redirect(route('viewData'));
    }
}
