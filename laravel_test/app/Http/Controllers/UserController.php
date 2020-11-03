<?php

namespace App\Http\Controllers;
use App\Models\User;

class UserController extends Controller{
    public function add(){

    	$account =  request()->input('account');
    	$password = request()->input('password');
    	


    	$user = new User();
    	$user->account = $account;
    	$user->password = $password;
    	$user->save();

    	
        return response()->json([
		    'status' => 'success',
		    'message' => 'register ok'
		], 200);
	}
}


