<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Mail;
use Auth; 
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    use AuthenticatesAndRegistersUsers;

    public function __construct()
    {
       
    }

    public function index() {
       return view('dashboard/index');
    }

    public function user() {
        return view('dashboard/user');
    }

    public function banners(){
        return view('dashboard/banners');
    }

    public function history(){
        return view('dashboard/history');
    }
    
    public function access(){
        return view('dashboard/access');
    }

}

