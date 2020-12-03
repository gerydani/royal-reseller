<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetail;
use Illuminate\Http\Request;

class LalalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $db_ext = \DB::connection('mysql_external');
        // $sales = $db_ext->table('tblproducttrx')->where('id','<=', '100')->get();
        // $sales = Sales::where('id','<=', '100')->get();
        $order = Order::all();
        return view('lalala.yeyeye', compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $db_ext = \DB::connection('mysql_external');
        for($i=0; $i<count($request->trx_date); $i++){
            if($request->method <> 0){
                if($request->method[$i] == "Shopee"){
                    $method = 3;
                }elseif($request->method[$i] == "Tokopedia"){
                    $method = 2;
                }else{
                    $method = 1;
                }

                if($db_ext->table('tblproducttrx')->where('method',$method)->orderBy('online_id','desc')->first()){
                    $count_trx = $db_ext->table('tblproducttrx')->where('method',$method)->orderBy('online_id','desc')->first()->online_id;
                }else{
                    $count_trx = 0;
                }
                $online_id = $count_trx+1;
            }else{
                $online_id = 0;
            }
            try{
                $db_ext->table('tblproducttrx')->insertGetId([
                    'customer_id' => 1,
                    'trx_date' => $request->trx_date[$i],
                    'creator' => 1,
                    'ttl_harga' => 1000,
                    'ongkir' => 100,
                    'approve' => 0,
                    'method' => $method,
                    'online_id' => $online_id,
                ]);

                $details = OrderDetail::where('trx_id', $request->order_id[$i])->get();
                $sales_id = $db_ext->table('tblproducttrx')->orderBy('id','desc')->first()->id;
                foreach($details as $detail){
                    $db_ext->table('tblproducttrxdet')->insertGetId([
                        'trx_id' => $sales_id,
                        'prod_id' => $request->prod_id[$i],
                        'qty' => $request->qty[$i],
                        'unit' => $request->unit[$i],
                        'creator' => session('user_id'),
                        'price' => $request->price[$i],
                        'pv' => $request->bv_unit[$i],
                        'sub_ttl' => $request->sub_ttl_price[$i],
                        'sub_ttl_pv' => $request->sub_ttl_bv[$i],
                    ]);
                }
            }catch(\Exception $e){
                return redirect()->back()->withErrors($e->getMessage());
            }
        }

        return redirect()->route('lalala');
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
}
