<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use App\User;
use App\Aturan;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->session()->has('isLoggedIn')) {
            $user = Product::all();
            $aturan = Aturan::all();
            // echo "<pre>";
            // print_r($request->all());
            // die;
            return view('dashboard.dashboard', compact('user', 'aturan'));
        } else {
            return view('user.login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tambahaturan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aturan = new Aturan(array(
            'Peraturan' => $request->aturan
        ));
        $aturan->save();
        return redirect()->route('Home')->with('status', 'Data Berhasil Disimpan');
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
    }
    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back();
        } else {
            $user = User::where('username', $request->username)->first();

            if ($user && Hash::check($request->password, $user->password)) {
                $request->session()->put('username', $request->username);

                // if(empty($user->rolemapping()->first())){
                //     $request->session()->put('role',"null");
                // }else{
                //     $request->session()->put('role', $user->rolemapping()->first()->role()->first()->role_nama);
                // }
                $request->session()->put('name', $user->name);
                $request->session()->put('user_id', $user->id);
                // $request->session()->put('nip', $user->nip);
                // $request->session()->put('foto', $user->scanfoto);
                $request->session()->put('isLoggedIn', 'Ya');
                // echo "<pre>";
                // print_r("lala");
                // die;

                return redirect()->route('Home');
            } else {
                return redirect()->back();
            }
        }
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('Home');
    }
}
