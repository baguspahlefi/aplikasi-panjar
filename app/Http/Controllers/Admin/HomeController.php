<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\PerkaraTabel;
use App\Models\PerkaraDetailTabel;
use DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('pages.admin.home', ['title' => 'Halaman Utama',
    'perkara' => PerkaraTabel::orderBy('tgl_pendaftaran')->get()]);
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
        $item = $request->all();
        PerkaraTabel::create($item);
        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = PerkaraTabel::findOrFail($id);
       
        return view('pages.admin.detail-perkara',
        [ 'item' =>$item, 'detail' => PerkaraDetailTabel::get()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $item = $request->except(['_token', '_method']);

            PerkaraTabel::where('perkara_id', $id)->update($item);
            return redirect()->back();
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PerkaraTabel $perkara_tabel)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = PerkaraTabel::findOrFail($id);
        DB::delete('delete from perkara_detail_tabel where perkara_id = ?', [$id]);
        $item->delete();
        sleep(1);
        return redirect()->route('homeAdmin');

        $item = TravelPackage::findOrFail($id);
        $item->delete();
        
        sleep(1);
        return redirect('admin/travelpackage');
    }
}
