<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;


class AdminUserController extends Controller
{
    public function __construct()
    {

    }

    public function index() {
        $users =  User::all();
        return view('admin/user/index', compact('users'));
    }


    public function add() {
        return view('admin/user/add');
    }



    public function store(Request $request){

        return redirect()->route('admin.user')
            ->withSuccess('Usuario fue creado exitosamente!');
    }

    public function edit(User $user){
        return view('admin/user/edit', compact('user'));
    }

    public function update(Request $request){
        return redirect()->route('admin.user')
            ->withSuccess('Usuario fue actualizado exitosamente!');
    }

    public function delete(User $user) {

        if($id = Auth::user()->id == $user->id)
        {
            return redirect()->route('admin.user')
                ->witherrors('No puedes eliminarte!');
        }

        $user->delete();

        return redirect()->route('admin.user')
            ->withSuccess('Usuario fue eliminado exitosamente!');
    }
}