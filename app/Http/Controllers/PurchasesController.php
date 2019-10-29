<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\purchases;
use Illuminate\Support\Facades\DB;


class PurchasesController extends Controller
{
    public function index(){
    	$purchases = DB::table('purchases')->get();

		return view('profile.edit' ,	['purchases' => $purchases]);

    }
}
