<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\toko;

class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $toko = toko::where('id_user',session('user_id'))->get();
        return view('toko.tokostatus',compact('toko'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $toko = toko::all();
        return view('toko.menutoko',compact('toko'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'namatoko' =>  'required|string'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        // echo "<pre>";
        // print_r($request->all());
        // die;
        $toko = new toko(array(
            'marketplace' => $request->marketplace,
            'nama_toko' =>  $request->namatoko,
            'username_mp' => $request->usernamemp,
            'password_mp' => $request->passwordmp,
            'status' => $request->statustoko
        ));
        $toko->save();
        return redirect()->route('toko.index')->with('status','Data Berhasil disimpan');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $toko = toko::where('id',$id)->first();
        if ($toko->status == 1){
            $toko->status = 0;
        }elseif ($toko->status == 0){
            $toko->status = 1;
        };
        try{
            $toko->update();
            return redirect()->route('toko.index')->with('status', 'Data berhasil diupdate');
        // fail
        }catch(\Exception $e){
            return redirect()->back()->withErrors($e->getMessage());
        }

    }
}
