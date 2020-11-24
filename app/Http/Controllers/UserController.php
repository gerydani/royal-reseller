<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('user.login',compact('user'));
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
        return redirect()->route('user.registrasi')->with('status','Data Berhasil disimpan');
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
        //
    }

    public function login(Request $request){

        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back();
        }else{
            $user = User::where('username',$request->username)->first();

            if($user && Hash::check($request->password, $user->password)){
                $request->session()->put('username', $request->usernmae);

                // if(empty($user->rolemapping()->first())){
                //     $request->session()->put('role',"null");
                // }else{
                //     $request->session()->put('role', $user->rolemapping()->first()->role()->first()->role_nama);
                // }
                $request->session()->put('name', $user->name);
                $request->session()->put('user_id', $user->id);
                // $request->session()->put('nip', $user->nip);
                // $request->session()->put('foto', $user->scanfoto);
                // $request->session()->put('isLoggedIn', 'Ya');
                // echo "<pre>";
                // print_r("lala");
                // die;

                return redirect()->route('registrasi');
            }else{
                return redirect()->back();
            }
        }
    }
}
