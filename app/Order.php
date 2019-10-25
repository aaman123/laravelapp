<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{

	const UPDATED_AT = null;

	const CREATED_AT = null;

    protected $fillable = array('orderId', 'paymentMethod', 'timeStamp','transactionId','priceInDollars','priceInCrypto');
    private $orderId;

    public function orders(){
        return $this->belongsTo(User::class);
    }	

}
