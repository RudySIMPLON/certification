<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
 
	public function ProfilEdit($id){
	
	$users= User::find($id);
	return view('profil',['users'=>$users]);
	}

	public function returnForm(){

	return view('formEditProfil');

	}

	// public function ValidEdit($id,Request $request) {
		
	// 	$users = User::find($id);
 //      	$users->name = $request->name;
	// 	$users->email= $request->email;
	// 	$users->password= $request->password;
	// 	$users->save();
	// 	return redirect('/');
	// 		}

}