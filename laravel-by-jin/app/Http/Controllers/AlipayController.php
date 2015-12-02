<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Omnipay;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AlipayController extends Controller
{
    public function pay(){

        $gateway = Omnipay::gateway();

        $options = [
            'out_trade_no' => date('YmdHis') . mt_rand(1000,9999),
            'subject' => 'Alipay Test',
            'total_fee' => '0.01',
        ];

        $response = $gateway->purchase($options)->send();
        $response->redirect();
    }
    public function result(){

        $gateway = Omnipay::gateway();

        $options = [
            'request_params'=> $_REQUEST,
        ];

        $response = $gateway->completePurchase($options)->send();

        if ($response->isSuccessful() && $response->isTradeStatusOk()) {
            //支付成功后操作
            exit('支付成功');
        } else {
            //支付失败通知.
            exit('支付失败');
        }

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
