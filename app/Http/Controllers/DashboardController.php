<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $profile = Profile::query();
        $profile = $profile->where(['user_id'=>Auth::id()])->count();
        if ($profile == 0)
        {
            return  redirect('/dashboard/profile/create');
        }
        return view('dashboard.index');
    }
}
