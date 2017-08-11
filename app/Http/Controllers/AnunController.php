<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AnunController extends Controller
{
	public function visanun($id)
    	{
    		$url = DB::table('anuncios')->where('id', $id)->pluck('url');
    	
    		return redirect('cashanuncio')
			->with('urlan', $url);
    	}
    	
    	public function gettip()
    	{
    		$tiposanuncios = DB::select('select * from tiposanuncios where estado= ?', [1]);
    		return redirect('anuncio')
    			->with('resultado', $tiposanuncios );
    	}
}