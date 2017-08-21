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
}