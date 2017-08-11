<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth; 
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
	public function home()
	{
		return View('home.home');
	}
	
	public function load()
	{
		if (Auth::check() && Auth::user()->name == "admin")
		{
	    		$tiposanuncios = DB::select('select * from tiposanuncios where estado= ?', [1]);
	    		return redirect('admin/config')
	    			->with('resultado', $tiposanuncios );
	    	}
		else
		{
			return redirect('home');
		}
	}
}