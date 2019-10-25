<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Combinations extends Model
{
    //Combinations -> 1) combination_id 2) combination 3) reel_number [Vary From 1 to 5] 4) used_before

        protected $table = 'combinations';
    /**
     * @var bool
     */

    public $timestamps = false;



    public function markUsed(){
         $this->used_before = true;
         $this->save();
        }

}
