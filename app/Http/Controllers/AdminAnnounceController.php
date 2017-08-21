<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth; 
use App\Announce;

class AdminAnnounceController extends Controller
{
    public function __construct()
    {

    }

    public function index() {
        $announces =  Announce::all();

        $announces = DB::table('announces')
            ->join('tiposanuncios', 'announces.type_announce', '=', 'tiposanuncios.id')
            ->get();

        return view('admin/announce/index', compact('announces'));
    }


    public function add() {
        $type_anuncio = DB::table('tiposanuncios')->get();
         return view('admin/announce/add', compact('type_anuncio'));
    }

    public function store(Request $request)
    {
            $announce = new Announce;

            $announce->title = $request->title;
            $announce->description = $request->description;
            $announce->url = $request->url;
            $announce->date_show = $request->date_show;
            $announce->price = $request->price;
            $announce->type_announce = $request->type_announce;

            $announce->save();

        return redirect()->route('admin.announce')
            ->withSuccess('Anuncio fue creada exitosamente!');
    }

}