<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\SetRank;
use App\Models\UserLog;
use App\Models\Stats;
use App\Models\User;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Role;
use App\Events\LoginHistory;

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
                "exp"       => 0];
            Stats::create($data);
            Alert::toast('Konto zostało utworzone! <br> Możesz teraz się na nie zalogować', 'succes');
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
        $roles= Role::all();
        $user = User::findorfail($id);
        return view('dashboard.users.edit', ['user' => $user, 'roles' => $roles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SetRank $request, $id)
    {
        $credentials = [
            'role' => $request->role,
        ];
        $user = User::find($id);
        $user->roles()->detach();
        $user->assignRole($credentials['role']);
        toast('Pomyślnie zmieniono uprawnienia użytkownika: <b>'.$user->name . "</b><br>Nowe uprawnienia to: <b>".$user->roles->pluck('name')."</b>", "success" );
        return redirect()->route('dashboard.page');
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
            event(new LoginHistory(auth()->user()));
            return redirect()->route("index.page");
        } else {
            Alert::error("Podano błędne dane logowania");
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
