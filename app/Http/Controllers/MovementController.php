<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movement;
use App\Exercise;
use App\SessionMovement;
use Session;

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

    public function getAddToMovement(Request $request, $id)
    {
        $movement = Movement::find($id);

        $oldCart = Session::has('movement') ? Session::get('movement') : null;
        $cart = new SessionMovement($oldCart);
        $cart->add($movement, $movement->id);

        $request->session()->put('movement', $cart);
        return redirect()->route('portal');
        
    }

    public function postSendMovement(Request $request)
    {
        if(!Session::has('movement')){
            return redirect()->back();
        }
        $oldCart = Session::get('movement');
        $cart = new SessionMovement($oldCart);

        $exercise = new Exercise();
        $exercise->user_name = Auth::user()->name;
        $exercise->user_id = Auth::user()->id;
        $exercise->cart = serialize($cart);

        Auth::user()->orders()->save($exercise);

        Session::forget('cart');
        return redirect()->route('home')->with('success', 'Succesfully Ordered!!!');
    }
}
