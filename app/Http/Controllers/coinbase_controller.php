<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\coinbase_webhook;


class coinbase_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Order::all();
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
    //     echo "Aman";
    //     return coinbase_webhook::create($request->all());
        //dd(request()->all());

        $input =json_decode($request->getContent(),true);
        $event = $input['event'];
        $type = $event['type'];
        $code = $event['data']['code'];
        $timeline = $event['data']['timeline'][2];
        $status = $timeline['status'];
        $paymentMethod = $timeline['payment']['network'];
        $transactionId = $timeline['payment']['transaction_id'];
		$paymentTime = $timeline['data']['created_at'];

        if ($type != 'charge:created'){
        	// return response()->json(['ChargeNotCreated'=>'Charge not created'], 500);            
        	return $type;
        }

        #storing the data from here
        $currentOrder = new Order;
        $currentOrder->orderId = $code;
        $currentOrder->paymentMethod = $paymentMethod;
        $currentOrder->timeStamp = $timeline['time'];
        $currentOrder->transactionId = $transactionId;
        $currentOrder->priceInDollars = $event['data']['payments'][0]['value']['local']['amount'];
        $currentOrder->priceInCrypto= $event['data']['payments'][0]['value']['crypto']['amount'];
        $currentOrder->user_id = 1;
        printf($currentOrder);

        $currentOrder->save();

        return $currentOrder;

         //return  response()->json(['Ok'=>'Payment Sucessfull'], 200);;
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
