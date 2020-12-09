<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\User;
use App\Aturan;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('dashboard.tambahaturan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.registrasi');
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
            'namatoko' => 'required|string',
            'namaowner' =>  'required|string',
            'email' => 'required|email|unique:tbluser',
            'nohp' => 'required',
            'username' => 'required|unique:tbluser|max:199',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        // echo "<pre>";
        // print_r($request->all());
        // die;
        $user = new User(array(
            'namatoko' => $request->namatoko,
            'namaowner' =>  $request->namaowner,
            'email' => $request->email,
            'nohp' => $request->nohp,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'bck_pass' => $request->password

        ));
        $user->save();
        return redirect()->route('Home')->with('status','Data Berhasil disimpan');
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
        $user = User::where('id', $id)->first();
        return view('user.registrasi', compact('user'));
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
        try{
            $user = User::where('id', $id)->first();
            $user->namatoko = $request->namatoko;
            $user->namaowner =  $request->namaowner;
            $user->email = $request->email;
            $user->nohp = $request->nohp;
            $user->username = $request->username;
            $user->password = Hash::make($request->password);
            $user->bck_pass = $request->password;
            $user->update();
            return redirect()->route('home')->with('status', 'Data berhasil diupdate');
        }catch(\Exception $e){
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

    }

    public function createaturan(Request $request){
        $aturan = new Aturan(array(
            'Peraturan' => $request ->aturan
        ));
        $aturan->save();
        return redirect()->route('Home')->with('status','Data Berhasil disimpan');
    }

    // public function aturan(Request $request){
        // $aturan = Aturan::where('id',session('user_id'))->first();
        // return view('dashboard.dashboard',compact('aturan'));
    // }

    // public function ubah(Request $request)
    // {
    //     return view('order.tabelclose');
    // }

}
