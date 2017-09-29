<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    
    public function index(){

    	$users =  User::all();
    	return view("users.index")->with('users',$users);

    }

    //Route Model Binding
    public function show(User $user){
    	return $user;
    }
}
