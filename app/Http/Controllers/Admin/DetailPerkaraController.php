<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\PerkaraTabel;
use App\Models\PerkaraDetailTabel;

class DetailPerkaraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        return view('pages.admin.detail-perkara', ['title' => 'Halaman Detail',
        'perkara' => PerkaraTabel::orderBy('tgl_pendaftaran')->get(),
        'perkara_detail' => PerkaraDetailTabel::orderBy('tgl_transaksi')->get()]);
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
        //
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
