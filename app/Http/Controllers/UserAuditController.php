<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
Use Redirect;

class UserAuditController extends Controller
{
    //
	public function __construct()
    {
        $this->middleware('auth');
    }
	
	public function index()
    {
		if(!request()->user()['isAdmin']){
			return Redirect::route('home');
		}
        //$users = User::all();
		$users = User::where('isAudited', '0')->get();
		//echo request()->user()['isAdmin'];
		// foreach ($users as $user) {
			// if(!$user->isAudited){
				// echo '<h3><pre>'.$user->name.'		'.$user->email.'		'.$user->isAudited.'	<button type="button">pass</button></h3><br/>';
			// }
		// }
        return view('hh',compact('users'));
    }
	
	public function pass($id)
	{
		if(!request()->user()['isAdmin']){
			return Redirect::route('home');
		}
		//echo $id;
		DB::table('users')
            ->where('id', $id)
            ->update(['isAudited' => 1]);
		return Redirect::route('userAudit');
		// $users = User::where('isAudited', '0')->get();
		// return view('hh',compact('users'));
	}
}
