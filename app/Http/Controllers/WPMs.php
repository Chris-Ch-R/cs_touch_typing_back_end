<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WPM;

class WPMs extends Controller
{
    //
    public function addRec(Request $request)
    {
        $item = new WPM;
        $item->name = $request->name;
        // $item->WPM = $request->WPM;
        $item->allTypedEntries = $request->allTypedEntries;
        $item->uncorrectedErrors = $request->uncorrectedErrors;
        $item->countTime = $request->countTime;
        // compute
        $rawWPM = ($item->allTypedEntries/5)/($item->countTime/60);
        $adjustWPM = $rawWPM - ($item->uncorrectedErrors/($item->countTime/60));
        if($adjustWPM < 0){
            $adjustWPM = 0;
        }
        $error = $item->uncorrectedErrors * 100 / $item->allTypedEntries;

        $item->rawWPM = $rawWPM; //computed
        $item->adjustWPM = $adjustWPM; //todo computed
        $item->errors = $error; //todo computed


        $item->save();
        // if($result){
        //     return ["Result"=>"Success"]
        // }else{
        //     return ["Result"=>"Fail"]
        // }
    }
}
