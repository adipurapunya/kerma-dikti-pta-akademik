<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Universitas;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register()
    {
        $Universitas = Universitas::get();
        return view('auth.register', ['Universitas' => $Universitas]);
    }

    public function registerSimpan(Request $request){
  /*      
        Validator::make($request->all(),[
            'nama' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ])->validate();
*/
        User::create([
            'id_universitas' => $request->id_universitas,
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => 'Admin'
        ]);

        return redirect()->
        route('login');
    }

    public function indexUser(){
        $user = User::get();

        return view('auth.indexuser', ['user'=>$user]);
    }

    public function addUser(Request $request){
        $user = User::get();
        return view('auth.formuser');
    }

    public function simpan(Request $request){
        $data = [
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => $request->level
        ];

        User::create($data);
        return redirect()->route('user');
    }

    public function editUser($id){
        $user = User::find($id);
        return view('auth.formuser', ['user'=>$user]);
    }

    public function updateUser($id, Request $request){
        $data = [
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => $request->level
        ];
        $user = User::find($id)->update($data);
        return redirect()->route('user');
    }

    public function hapusUser($id){
        User::find($id)->delete();
        return redirect()->route('user');
    }


    public function login(){
        return view('auth/login');
    }


    public function loginAksi(Request $request){
        Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();

        if(!Auth::attempt($request->only('email','password'),$request->boolean('remember'))){
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }

        $request->session()->regenerate();

        return redirect()->route('dashboard');
    }

    public function logout(Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();

        return redirect('/login');
    }
}
