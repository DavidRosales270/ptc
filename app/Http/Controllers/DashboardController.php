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
        
        $graph = $this->fillChart();


       return view('dashboard/index', compact('user', 'total_click', 'news', 'graph'));
    }

    public function user() {
        $user = Auth::user();
        return view('dashboard/user', compact('user'));
    }

    public function update(Request $request){ 
        $id = Auth::user()->id;
        
        $user = User::find($id);

        print_r($user);

        if(isset($request->email) && !empty($request->email))
        {
            $user->email = $request->email;
        }

        if(isset($request->password) && !empty($request->password)){

            if($request->password == $request->confirm_password){
                $user->password = bcrypt($request->password);
            }else {
                return redirect('dashboard/user')
                ->withErrors('Password no coinciden');
            }
        }

        $user->save();
         
         return redirect('dashboard/user')
            ->withSuccess('Sus Datos fueron actualizados');
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
        $user = Auth::user();
        $logs = DB::table('logs')->where('user_id', $user->id)->get();
        return view('dashboard/access', compact('logs'));

        
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

 