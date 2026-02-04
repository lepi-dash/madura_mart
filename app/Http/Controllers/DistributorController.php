<?php

namespace App\Http\Controllers;

use App\Models\Distributor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DistributorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('distributor.index', [
            'tittle' => 'Distributor',
            'datas' => Distributor::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('distributor.create', [
            'tittle' => 'Distributor'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $distributor = DB::table('distributors')->where('nama_distributor', $request->nama_distributor)->value('nama_distributor');
        $alamat = DB::table('distributors')->where('alamat_distributor', $request->alamat_distributor)->value('alamat_distributor');
        $notelpon = DB::table('distributors')->where('notelpon_distributor', $request->notelpon_distributor)->value('notelpon_distributor');

        if ($request->nama_distributor == $distributor && $request->alamat_distributor == $alamat && $request->notelpon_distributor == $notelpon){
            return redirect()->route('distributor.create')->with('duplikat', 'Distributor, ' .
                $request->nama_distributor . ' data with address ' . $request->alamat_distributor . ' and telephone number ' . $request->notelpon_distributor . 'is already in the database!')->withinput();
        } else {

        $data = $request->only(['nama_distributor', 'alamat_distributor', 'notelpon_distributor']);
        Distributor::create($data);
        return redirect()->route('distributor.index')->with('btnsimpan', 'Distributor, ' .
            $request->nama_distributor . ' , berhasil ditambahkan');
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
        return view('distributor.edit', [
            'tittle' => 'Distributor',
            'data' => Distributor::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $distributor_lama = DB::table('distributors')->where('id', $id)->value('nama_distributor');
        $distributor = DB::table('distributors')->where('nama_distributor', $request->nama_distributor)->value('nama_distributor');
        $alamat = DB::table('distributors')->where('alamat_distributor', $request->alamat_distributor)->value('alamat_distributor');
        $notelpon = DB::table('distributors')->where('notelpon_distributor', $request->notelpon_distributor)->value('notelpon_distributor');

        if ($request->nama_distributor == $distributor && $request->alamat_distributor == $alamat && $request->notelpon_distributor == $notelpon) {
            return redirect()->route('distributor.edit', $id)->with('duplikat', 'Distributor, ' .
                $request->nama_distributor . ' data with address ' . $request->alamat_distributor . ' and telephone number ' . $request->notelpon_distributor . 'is already in the database!')->withinput();
        } else {
            $data = $request->only(['nama_distributor', 'alamat_distributor', 'notelpon_distributor']);
            $distributor = Distributor::findOrFail($id);
            $distributor->update($data);
            return redirect()->route('distributor.index')->with('ubah', ' The Distributor data, ' .
                $distributor_lama . ' Change To ' . $request->nama_distributor . ', has been successfuly updated! ');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $distributor = Distributor::findOrFail($id);
        $distributor->delete();
        return redirect()->route('distributor.index')->with('hapus', ' The Distributor data, ' .
            $distributor->nama_distributor . ' has been successfuly deleted! ');
    }
}
