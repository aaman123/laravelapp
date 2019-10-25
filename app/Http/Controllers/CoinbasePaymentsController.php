<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoinbasePaymentsController extends Controller
{
    //lets do depedency injection to make sure model is loaded


    public function handle(Request $request){
        try{
        $input =json_decode($request->getContent(),true);
        $event = $input['event'];
        $type = $event['type'];
        $code = $event['data']['code'];
        $timeline = $event['data']['timeline'][2];
        $status = $timeline['status'];
        $paymentMethod = $timeline['payment']['network'];
        $transactionId = $timeline['payment']['transaction_id'];
		$paymentTime = $event['data']['created_at'];
        // $userId = auth()->user()->id;
        if ($type != 'charge:confirmed'){
        	return response()->json(['ChargeNotConfirmed'=>'Charge not created'], 500);
        	// return $type;
        }
        //Storing Data From Here
        $currentOrder = new \App\Order;
        $currentOrder->orderId = $code;
        $currentOrder->paymentMethod = $paymentMethod;
        $currentOrder->timeStamp = $timeline['time'];
        $currentOrder->transactionId = $transactionId;
        $currentOrder->priceInDollars = $event['data']['payments'][0]['value']['local']['amount'];
        $currentOrder->priceInCrypto = $event['data']['payments'][0]['value']['crypto']['amount'];
        $currentOrder->user_id = 1;
        // printf($currentOrder);

        $currentOrder->save();

        return response()->json($currentOrder,200);
    }catch(\Exception $e){
        return response('Critical Exception Generated  :'.$e->getMessage(),404);
    }
    }
    public function redeemCoins(Request $request){
        //Time To Redeem Coins For Our User
        // 1) Get User details 2) find him in orders table 3) update his balance of coins :)
        $user_id = Auth::user()->id;
        $orderId = $request->input('order_id');
        //get pending order
        $pendingOrder = DB::select('SELECT ("id","priceInDollars") FROM orders WHERE "orderId" = ? AND user_id = 1; ',[$orderId]);
        //get amount in dolllars
        $amountPaidByUser = $pendingOrder[1];
        //update pending order by changing user_id to current user
        DB::update('UPDATE orders SET user_id=? WHERE id= ?', [$user_id,$pendingOrder[0]]);
        //lets now update user balance
        updateUserAccountBalance($user_id,$amountPaidByUser);


    }

    private function updateUserAccountBalance($id,$amountPaidByUser){

        $user = User::where('id',$id)->get();
        $user->coin_balance = $amountPaidByUser;
        $user->save();

    }
}
