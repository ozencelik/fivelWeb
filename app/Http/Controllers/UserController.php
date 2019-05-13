<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    public function getSignUp()
	{
		return view('auth.register');
	}

	
    public function postSignUp(Request $request)
	{	

		$this->validate($request, [
			'name' => 'required|max:50',
			'email' => 'email|unique:users',
			'password' => 'required|min:4',
			'company' => 'required|max:120'
		]);

		$name = $request['name'];
		$email = $request['email'];
		$password = bcrypt($request['password']);
		$company = $request['company'];

		$physiotherapist = new User();
		$physiotherapist->name = $name;
		$physiotherapist->email = $email;
		$physiotherapist->password = $password;
		$physiotherapist->company = $company;

		$physiotherapist->save();

		Auth::login($physiotherapist);

		return redirect()->route("portal");
	}






	public function getSignIn()
	{
		return view('auth.login');
	}

	public function postSignIn(Request $request)
	{
		$this->validate($request, [
			'email' => 'required',
			'password' => 'required'
		]);

		if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){
			return redirect()->route('portal');
		}
		return redirect()->back();

	}





	public function getLogout()
	{
		Auth::logout();

		return redirect()->route("home");
	}
}
