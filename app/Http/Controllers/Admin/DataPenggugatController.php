<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\AjukanPanjarTabel;
use App\Models\PerkaraTabel;
use App\Models\PerkaraDetailTabel;

class DataPenggugatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = AjukanPanjarTabel::all();
        
        return view('pages.admin.datapenggugat',
        [ 'items' =>$items]);
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
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,$id)
    {
        $item = AjukanPanjarTabel::findOrFail($id);
        
        $data = $request->all();

        if($request->hasFile('ktp')){
            
            $ktp = $request->ktp;
            $record = AjukanPanjarTabel::findOrFail($id);

            $file_path = 'storage_user/assets/gallery/'.$record->ktp;
            //You can also check existance of the file in storage.
            if(AjukanPanjarTabel::exists($file_path)) {
               unlink($file_path); //delete from storage
               // Storage::delete($file_path); //Or you can do it as well
            }
            
            $destinationPath = 'storage_user/assets/gallery';
            $ktpImage = uniqid() . " - " . $ktp->getClientOriginalName();
            $ktp->move($destinationPath, $ktpImage);
            $data['ktp'] = "$ktpImage";
        }

        if($request->hasFile('kta')){
            
            $kta = $request->kta;
            $record = AjukanPanjarTabel::find($id);

            $file_path = 'storage_user/assets/gallery/'.$record->kta;
            //You can also check existance of the file in storage.
            if(AjukanPanjarTabel::exists($file_path)) {
               unlink($file_path); //delete from storage
               // Storage::delete($file_path); //Or you can do it as well
            }
            $destinationPath = 'storage_user/assets/gallery';
            $ktaImage = uniqid() . " - " . $kta->getClientOriginalName();
            $kta->move($destinationPath, $ktaImage);
            $data['kta'] = "$ktaImage";
        }
 
        $item->update($data);
        return redirect()->route('dataPenggugat')->with('flash_message_success','Update Berhasil');
        
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
    public function destroy($id)
    {
        $item = AjukanPanjarTabel::findOrFail($id);
        $item->delete();
        sleep(1);
        return redirect()->route('dataPenggugat');
    }
}
