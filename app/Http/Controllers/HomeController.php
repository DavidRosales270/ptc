<?php

namespace App\Http\Controllers;

use App\User;
use App\Repositories\Activity\ActivityRepository;
use App\Repositories\User\UserRepository;
use App\Support\Enum\UserStatus;
use Auth;
use Carbon\Carbon;

class HomeController extends Controller
{
    private $users;

    private $activities;

    public function __construct(UserRepository $users, ActivityRepository $activities)
    {
        $this->middleware('auth');
        $this->users = $users;
        $this->activities = $activities;
    }

	public function home()
	{
		return View('home.home');
	}
	
	public function load()
	{
		if (Auth::check() && Auth::user()->name == "admin")
		{
		    return redirect('admin/index');
	    	}
		else
		{
			return redirect('home');
		}
	}

	public function admin() {

        $usersPerMonth = $this->users->countOfNewUsersPerMonth(
            Carbon::now()->startOfYear(),
            Carbon::now()
        );

        $stats = [
            'total' => $this->users->count(),
            'new' => $this->users->newUsersCount(),
            'banned' => $this->users->countByStatus(UserStatus::BANNED),
            'unconfirmed' => $this->users->countByStatus(UserStatus::UNCONFIRMED)
        ];

        $latestRegistrations = $this->users->latest(7);

        return view('admin.index', compact('stats', 'latestRegistrations', 'usersPerMonth'));

    }
}