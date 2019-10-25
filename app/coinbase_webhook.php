<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class coinbase_webhook extends Model
{
    use Notifiable;

    protected $table = "coinbase_webhook_calls";


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'type', 'payload', 'exception'
    ];


}
