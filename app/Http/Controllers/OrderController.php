<?php

namespace App\Http\Controllers;

use App\Marketplace;
use Illuminate\Http\Request;

use App\Order;
use App\OrderDetail;
use App\Product;
use App\toko;
use PhpParser\Node\Stmt\TryCatch;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $antrian = OrderDetail::join('tblorder', 'tblorder_detail.trx_id', 'tblorder.id')->where('tblorder.status', 0)->get();
        $package = OrderDetail::join('tblorder', 'tblorder_detail.trx_id', 'tblorder.id')->where('tblorder.status', 1)->get();
        return view('Order.tabelantrian', compact('antrian', 'package'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getHarga(Request $request)
    {
        $harga = Product::where('prod_id', $request->prod_id)->first();
        // return $harga;
        echo json_encode($harga);
    }
    public function create()
    {
        $product = Product::all();
        $toko = toko::all();
        //dd($product);
        return view('Order.form', compact('product', 'toko'));
        // return view('Order.inputbarang', compact('product', 'toko'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $order = new Order(array(
            // 'marketplace' => $request->marketplace,
            // 'nama_toko' => $request->namatoko,

            'shop_id' => $request->marketplace,
            'address' => $request->alamat,
            'booking_code' => $request->booking,
            'no_resi' => $request->resi,
            'notes' => $request->catatan,
            'trx_date' => $request->trx_date
        ));
        // dd($request->all());
        $order->save();

        for ($i = 0; $i < count($request->qty); $i++) {
            $detail = new OrderDetail(array(
                'trx_id' => $order->id,
                'prod_id' => $request->prod_id[$i],
                'qty' => $request->qty[$i],
                'harga' => $request->harga[$i]
            ));
            $detail->save();
        }

        // $detail= new OrderDetail(array(
        //     'kode_produk' => $request ->kode_produk,
        //     'qty' => $request ->qty,
        //     'harga' => $request ->harga
        // ));
        // $detail->save();
        return redirect()->back()->with('status', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $package = OrderDetail::join('tblorder', 'tblorder_detail.trx_id', 'tblorder.id')->where('tblorder.status', 1)->get();
        return view('Order.tabelclose', compact('package'));
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
    public function update($id)
    {

        $antrian = Order::where('id', $id)->first();
        if ($antrian->status == 0) {
            $antrian->status = 1;
        } else if ($antrian->status == 1) {
            $antrian->status = 0;
        }
        // success
        try {
            $antrian->update();
            return redirect()->route('order.index')->with('status', 'Data berhasil diupdate');
            // fail
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
        //
    }
}
