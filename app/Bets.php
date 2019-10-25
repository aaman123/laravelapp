<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bets extends Model
{
    //Good for storing any relevant business logic , place to be :)
       protected $table = 'bets';
       public $timestamps = false;
    //Bets Would Have -> 1) bet_id , 2) bet_combination 3) bet_result

}
