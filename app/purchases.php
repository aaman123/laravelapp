<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchases extends Model
{
    public $timestamps = false;
    protected $fillable = array('packagename' , 'noofcoins' , 'BTCSpent' , 'Date');

}
