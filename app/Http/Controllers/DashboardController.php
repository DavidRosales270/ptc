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
        $graph = $this->fillChart();


       return view('dashboard/index', compact('user', 'total_click', 'news', 'graph'));
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

    private function fillChart(){
        
        $data = array();

        for($i=0; $i<= 9;$i++){
            $date = new \DateTime();

            $date_search = $i - 4;
            
            if($date_search>=0) {
                $date_search = '+' . $date_search;
            }
            $date->modify($date_search . "day");
            
            $total = DB::table('announces_users')->where('created_at','like', $date->format('Y-m-d').'%')->count();

            $point = array( 'total' => $total, 'label' => $date->format('Y/m/d') . ':' . $total . ' clics' );

            array_push($data, $point);
        }
        
        return $data;
    }

}

 