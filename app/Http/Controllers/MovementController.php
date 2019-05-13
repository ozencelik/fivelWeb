<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movement;

class MovementController extends Controller
{
    public function getMovement()
    {
    	$movements = Movement::all();
    	return view('portal', ['movements' => $movements]);
    }

    public function postMovement(Request $request)
    {	
    	//$movements = $request['Movement[]'];
    	
    	echo "ahme";
		echo $movements;

    	return redirect()->back();
    }
}
