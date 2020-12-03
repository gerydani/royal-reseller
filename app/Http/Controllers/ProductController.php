<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Product::all()->where('tblproduct.status', 1);
        return view('produk.tabelproduk',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produk.tambahproduk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product(array(
            'prod_id' => $request->prod_id,
            'name' =>  $request->name,
            'sku' => $request->sku,
            'capital_price' => $request->capital_price,
            'agreed_price' => $request->agreed_price,
            'weight' => $request->weight,
            'dimension' => $request->dimension
        ));
        $product->save();
        return redirect()->route('product.index')->with('status','Data Berhasil disimpan');
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
        $product = Product::where('id', $id)->first();
        return view('produk.tambahproduk', compact('product'));
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
            $product = Product::where('id', $id)->first();
            $product->prod_id = $request->prod_id;
            $product->name = $request->name;
            $product->sku = $request->sku;
            $product->capital_price = $product->capital_price;
            $product->agreed_price = $product->agreed_price;
            $product->weight = $product->weight;
            $product->dimension = $product->dimension;
            $product->update();
            return redirect()->route('product.index')->with('status', 'Data berhasil diupdate');
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
        $product = Product::where('id', $id)->first();
        $product->status = 0;
    }
}
