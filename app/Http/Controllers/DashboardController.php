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
        $user = Auth::user();
        $total_click =  DB::table('announces_users')->where('user_id', $user->id)->count();
        $news = DB::table('news')->orderBy('created_at', 'desc')->get();
        $logs = DB::table('logs')->orderBy('created', 'desc')->limit(5);

       return view('dashboard/index', compact('user', 'total_click', 'news'));
    }

    public function user() {
        $user = Auth::user();
        return view('dashboard/user', compact('user'));
    }

    public function banners(){
        $user = Auth::user();
        $url = Url('/');
        return view('dashboard/banners', compact('user', 'url'));
    }

    public function history(){
        return view('dashboard/history');
    }
    
    public function access(){
        return view('dashboard/access');
    }

    public function announce() {
        return view('dashboard/announce');
    }

    public function ascend() {
        return view('dashboard/ascend');
    }

}

