<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\AjukanPanjarTabel;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class AjukanPanjarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.ajukanpanjar');
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
        $user = $request->user()->email;
        $data = $request->all();

        if ($ktp = $request->file('ktp')) {
            $destinationPath = 'storage/assets/gallery';
            $ktpImage = uniqid() . " - " . $ktp->getClientOriginalName();
            $ktp->move($destinationPath, $ktpImage);
            $data['ktp'] = "$ktpImage";
        }
        
        if ($kta = $request->file('kta')) {
            $destinationPath = 'storage/assets/gallery';
            $ktaImage = uniqid() . " - " . $kta->getClientOriginalName();
            $kta->move($destinationPath, $ktaImage);
            $data['kta'] = "$ktaImage";
        }
        
        AjukanPanjarTabel::create($data);

        User::where('email',$user)->update(array('status' => 'true'));
        
        return view('pages.success-input');
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
