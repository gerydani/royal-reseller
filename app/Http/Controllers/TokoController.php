<?php

namespace App\Http\Controllers;

use App\Marketplace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\toko;
use App\User;

class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $toko = toko::where('id_user', session('user_id'))->get();
        return view('toko.tokostatus', compact('toko'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marketplace = Marketplace::all();
        return view('toko.menutoko', compact('marketplace'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $validator = Validator::make($request->all(), [
            'namatoko' =>  'required|string'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        // echo "<pre>";
        // print_r($request->all());
        // die;
        $toko = new toko(array(
            'id_user' => session('user_id'),
            'marketplace' => $request->marketplace,
            'nama_toko' =>  $request->namatoko,
            'username_mp' => $request->usernamemp,
            'password_mp' => $request->passwordmp,
            'status' => $request->statustoko
        ));
        $toko->save();
        return redirect()->route('toko.index')->with('status', 'Data Berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function changeStatus($id)
    {
        $toko = toko::where('id', $id)->first();
        if ($toko->status == 1) {
            $toko->status = 0;
        } elseif ($toko->status == 0) {
            $toko->status = 1;
        };
        try {
            $toko->update();
            return redirect()->route('toko.index')->with('status', 'Data berhasil diupdate');
            // fail
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $toko = toko::where('id', $id)->first();
        $marketplace = Marketplace::all();
        return view('toko.menutoko', compact('toko', 'marketplace'));
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
        try {
            $toko = toko::where('id', $id)->first();
            $toko->id_user = session('user_id');
            $toko->marketplace = $request->marketplace;
            $toko->nama_toko = $request->namatoko;
            $toko->username_mp = $request->usernamemp;
            $toko->password_mp = $request->passwordmp;
            $toko->update();
            return redirect()->route('toko.index')->with('status', 'Data berhasil diupdate');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        toko::where('id', $id)->delete();
        return redirect()->back();
    }
}
