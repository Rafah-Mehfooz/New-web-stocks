<?php

namespace App\Http\Controllers;
use \Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use User;

class ProfileController extends Controller
{
   public function getProfileView(){

   	return view('profile');

   }
public function updateProfile(Request $request){


}
}
