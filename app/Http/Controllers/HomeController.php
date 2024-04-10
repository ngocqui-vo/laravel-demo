<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $users = DB::table('users')->paginate(3);
        return view('home.index', ['users'=> $users]);
    }

    public function detail($user_id): View
    {

        $user = DB::table('users')->where('id', $user_id)->first();
        return view('home.detail', ['user'=> $user]);
    }
}
