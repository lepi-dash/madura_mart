<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return view('products.index', [
        'tittle' => 'Products',
        'datas'=> Product::all() 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create', [
            'tittle' => 'Products'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kd = DB::table('products')->where('kdbarang', $request->kdbarang)->value('kdbarang');
        $nama = DB::table('products')->where('nama_barang', $request->nama_barang)->value('nama_barang');
     
        if ($request->kdbarang == $kd && $request->nama_barang == $nama){
            return redirect()->route('products.create')->with('duplikat', 'Product, ' .
                $request->nama_barang . ' data with code ' . $request->kdbarang . ' is already in the database!')->withinput();
        } else if ($request->nama_barang == $nama){
            return redirect()->route('products.create')->with('duplikat', 'Product, ' .
                $request->nama_barang . ' data with name ' . $request->nama_barang . ' is already in the database!')->withinput();
        } else {
            $data = $request->all();
            $data['foto_barang'] =  $request->file('foto_barang')->store('product_images');
            Product::create($data);
            return redirect()->route('products.index')->with('btnsimpan', 'Product, ' .
           $request->nama_barang . ' , has been successfully  saved');
    }
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
         return view('products.edit', [
            'tittle' => 'Products',
            'data' => Product::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          $nama_lama = DB::table('products')->where('id', $id)->value('nama_barang');
          $foto_barang_lama = DB::table('products')->where('id', $id)->value('foto_barang');
          $products = Product::findOrFail($id);
          if ($request->hasFile('foto_barang')){
            $data = $request->all();
            $data['foto_barang'] =  $request->file('foto_barang')->store('product_images');
            Storage::delete($foto_barang_lama);
            return redirect()->route('products.index')->with('update', 'The Product Data , ' . $nama_lama . ' , has been successfully updated');
          } else {
            $products->update($request->all());
            return redirect()->route('products.index')->with('update', 'The Product Data , ' . $nama_lama . ' , has been successfully updated');
          }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ada_purchases = DB::table('purchase_details')->where('id_barang', $id)->exists();
        if ($ada_purchases) {
            return redirect()->route('products.index')->with('forbiden', 'The Product data cannot be deleted because it is still linked to purchase data!');
        } else {
            $nama = DB::table('products')->where('id', $id)->value('nama_barang');
            Product::findOrFail($id)->delete();
            return redirect()->route('products.index')->with('hapus', 'The Product data, ' .
                $nama . ' , has been successfully deleted!');
        }
    }
}
