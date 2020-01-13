<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Illuminate\Support\Facades\Hash;


class UserController extends Controller{

    public function changePassword(){

    	return view('admin.change-password');
    }

    public function postChangePassword(Request $request){

    		$rules =[
    			'password'=>'required|min:8',
    			'npassword' => 'required|min:8|required_with:confirm_password|same:confirm_password',
    			'confirm_password' => 'required|min:8'
    		];

    		$request->validate($rules);

    		$user = auth()->user();

    		$old_password = $user->password;

        	$id = $user->id;

        	$user = User::find($id);

        	/*param1 - user password that has been entered on the form
			param2 - old password hash stored in database*/

        	if (Hash::check($request->password, $old_password)) {

 				$password=Hash::make($request->password);

				$user->password= $password;

				$user->save();

				return redirect('admin');

			}else{

				return redirect('admin/change-password');
			}


    }
}
