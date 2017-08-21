<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Announce;

class AnunController extends Controller
{
    public function index() {

        $tipos_anuncios = DB::table('tiposanuncios')->get();

        return view('announce/index', compact('tipos_anuncios'));

    }


	public function visanun($id)
    	{
    	    $announce = Announce::find($id);

			$id = Auth::user()->id;

			$user = User::find($id);

			$user->amount = $user->amount + $announce->price;

			$user->save();

			DB::table('announces_users')->insert(
				[
					'announce_id' => $announce->id,
					'user_id' => $user->id,
					'created_at' => new \DateTime()
				]);

			
    		return redirect('cashanuncio')
			->with('urlan', $announce->url);
    	}
    	
    	public function gettip()
    	{
    		$tiposanuncios = DB::select('select * from tiposanuncios where estado= ?', [1]);
    		return redirect('anuncio')
    			->with('resultado', $tiposanuncios );
    	}
}