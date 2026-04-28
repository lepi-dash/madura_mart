<?php

namespace App\Http\Controllers;

use App\Models\Purchase_Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Distributor;
use App\Models\Product;
use App\Models\Purchase;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('purchase.index', [
            'tittle' => 'Purchase',
            'datas' => DB::table('vwpurcase')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('purchase.create', [
            'tittle' => 'Purchase',
            'distributors'=> Distributor::all(),
            'products'=> Product::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    $purchase = $request->only('no_nota', 'tgl_nota', 'id_distributor');
    $purchase['total_bayar'] = $request->total_bayar; 
    $purchase = Purchase::create($purchase);
    
    $purchaseDetails = $request->only('id_barang', 'harga_beli', 'margin_jual', 'jumlah_beli', 'sub_total');
    $purchaseDetails['id_pembelian'] = $purchase->id; 
    $purchaseDetails = Purchase_Detail::create($purchaseDetails);

    return redirect()->route('purchase.create')
    ->with('success', 'Purchase with invoice no ' . $request->no_nota . ' has been saved successfully!')
    ->with('data', DB::table('purchases')->where('id', DB::table('purchases')->max('id'))->first());
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}