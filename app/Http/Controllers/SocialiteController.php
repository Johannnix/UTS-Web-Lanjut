<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use RealRashid\SweetAlert\Facades\Alert;

class SocialiteController extends Controller
{
    public function daftar(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'email' => 'required|email|unique:users',
            'password'  => 'required|min:8|'
        ]);

        $user = User::create([
            'name'  => $request->name,
            'email' => $request->email,
            'password'  => bcrypt($request->password)
        ]);

        Auth()->login($user, true);
        Alert::success('Hore!', 'User Berhasil Didaftarkan');
        return redirect()->route('dashboard');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password'  => 'required|min:8|'
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {

                Auth()->login($user, true);
                Alert::success('Hore!', 'User Berhasil Login');
                return redirect()->route('dashboard');
            } else {
                return redirect()->back()->with('error', 'Password salah');
            }
        } else {
            return redirect()->back()->with('error', 'Email tidak terdaftar');
        }
    }

    public function loginGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('email', $user->email)->first();

            if ($finduser) {
                $finduser->name = $user->name;
                $finduser->save();

                Auth::login($finduser);
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => Hash::make('123456dummy')
                ]);

                Auth::login($newUser);
            }
            Alert::success('Hore!', 'User Berhasil Login');
            return redirect()->intended('dashboard');
        } catch (QueryException $e) {
            if ($e->errorInfo[1] == 1062) {
                return redirect()->intended('dashboard')->with('error', 'Email address is already in use.');
            }

            dd($e->getMessage());
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }


    public function logout()
    {
        Auth::logout();
        Alert::success('Dadaa!', 'User Berhasil Logout');
        return redirect('/');
    }
}
