<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use App\Http\Requests\LoginUserRequest;
use App\Models\Stats;
use App\Models\User;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterUserRequest $request)
    {
        $credentials = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ];
            $user = User::create($credentials);
            $user->assignRole('User');
            $data = [
                "user_id"   => $user->id,
                "posts"     => 0,
                "coments"   => 0,
                "exp"       =>0];
            Stats::create($data);
            return redirect()->route("login.page");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function loginIndex()
    {
        return view('layouts.auth.login');
    }
    public function authUser(LoginUserRequest $request)
    {

        $credentials = [
            'name' => $request->name,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = User::find(auth()->user()->id);

            $user->update(['last_login' => now()]);
            $last = auth()->user()->last_login;
            $last = date('dmY', strtotime($last));
            $now = date('dmY', time());

            if ($last != $now) {
                Stats::updateOrCreate(['user_id' => auth()->user()->id], ['exp' => isset(auth()->user()->stats->exp) ? auth()->user()->stats->exp + 1 : 1]);
            }
            return redirect()->route("index.page");
        } else {
            // zwroc strone logowania

            return redirect()->route("login.page");
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route("index.page");
    }
}