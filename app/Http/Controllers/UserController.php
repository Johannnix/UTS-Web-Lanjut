<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

class UserController extends Controller
{

    public function log()
    {
        $log = DB::table('authentication_log')->get();
        return view('log', ['log' => $log]);
    }
    public function dashboard()
    {
        $user = Auth::user();
        $user_id = $user->id;

        return view('dashboard', ['user_id' => $user_id]);
    }
    public function logout()
    {
        Auth()->logout();

        return redirect('/');
    }
}
