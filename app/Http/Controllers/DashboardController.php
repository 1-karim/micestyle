<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::user()->hasRole('user')){
            return view('dashboard.dashboardUser');
        }elseif(Auth::user()->hasRole('administrator')){
         return view('dashboard.dashboardAdmin');
        }elseif(Auth::user()->hasRole('superadministrator')){
         return view('dashboard.dashboardSuper');
        }
    }

    public function profile(){
        return view('profile');
    }

    public function users(){
        return view('users');
    }
    
    public function venues(){
        return view('venues');
    }
    public function newVenue(){
        $venues = User::all();
        return view('new-venue');
    }
}
