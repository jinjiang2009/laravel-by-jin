<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Overtrue\Wechat\Payment;
use Overtrue\Wechat\Payment\Order;
use Overtrue\Wechat\Payment\Business;
use Overtrue\Wechat\Payment\UnifiedOrder;
use Overtrue\Wechat\QRCode;
class WechatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pay()
    {//生成二维码
        $qr = new QRCode('wx426b3015555a46be','01c6d59a3f9024db6336662ac95c8e74');
        echo $qr->forever('123123');die;


        /**
         * 第 1 步：定义商户
         */
        $business = new Business(
            'wx426b3015555a46be',
            'e10adc3949ba59abbe56e057f20f883e',
            '1225312702',
            '01c6d59a3f9024db6336662ac95c8e74'
        );

        /**
         * 第 2 步：定义订单
         */
        $order = new Order();
        $order->body = 'test body';
        $order->out_trade_no = md5(uniqid().microtime());
        $order->total_fee = '1'; // 单位为 “分”, 字符串类型
        $order->openid = OPEN_ID;
        $order->notify_url = 'http://xxx.com/wechat/payment/notify';

        /**
         * 第 3 步：统一下单
         */
        $unifiedOrder = new UnifiedOrder($business, $order);

        /**
         * 第 4 步：生成支付配置文件
         */
        $payment = new Payment($unifiedOrder);
        print_r($payment->getConfig());die;
        return view('wpay',$payment);
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
