<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\PerkaraTabel;
use Illuminate\Support\Str;
use App\Models\PerkaraDetailTabel;

class DetailPerkaraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new PerkaraDetailTabel();
        $item->perkara_id = $request->perkara_id;
        $item->uraian = $request->uraian;
        $item->tgl_transaksi = $request->tgl_transaksi;
        $item->pihak = $request->pihak;
        $item['pemasukan']= Str::of($request->pemasukan)->replace('.', '');
        $item['pengeluaran']= Str::of($request->pengeluaran)->replace('.', '');
        $item->keterangan = $request->keterangan;
        $item->save();
        return redirect(route('perkara.show',$item->perkara_id));
    }

    public function upload_bukti_transfer(Request $request, PerkaraTabel $perkara_tabel)
    {
        $id = $request->perkara_id;
        $bukti_transfer_id =  $request->file('bukti_transfer')->store(
            'assets/gallery','public'
        );
        $perkara_tabel->bukti_transfer = $bukti_transfer_id;
        $perkara_tabel->save();
        return redirect(route('perkara.show',$id));
        
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
    public function destroy(PerkaraDetailTabel $id)
    {
        $id->delete();
        sleep(1);
        return redirect(route('perkara.show',$id->perkara_id));
    }
}
