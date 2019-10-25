<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Combinations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CombinationsController extends Controller
{
    public function handle(Request $request){


        $reels = [];
        try{
        for($i=1;$i<6;$i++) {
            //To Use Eloquent Query's Rather Then Classic Query's To Make It Faster .
            $required_view = 'combinations_reel_'.$i;
            $randomCombination = DB::select('SELECT combination,id from '. $required_view .' WHERE used_before=FALSE ORDER BY RANDOM() LIMIT 1;');
            if(count($randomCombination)<1){
                $this->resetDatabase($i);
            };
            $combinationId = $randomCombination[0]->id;
            array_push($reels,$randomCombination);
            DB::update('UPDATE combinations SET used_before=TRUE WHERE id= ?', [$combinationId]);

        }

        }catch (\Exception $e){

           $data['exception_generated']= $e->getMessage();
           $data['info']= "Database Is Empty , Let Me Do The Reset" ;
           $data['waiting_time_in_seconds']=100;
            return response()->json($data,200)->header('Content-Type','application/json');
        }

      return response()->json($reels);
    }

    private function resetDatabase($i){
       $required_view = 'combinations_reel_'.$i;
       DB::update("UPDATE '.$required_view.' SET used_before=FALSE ;");
    }
}
