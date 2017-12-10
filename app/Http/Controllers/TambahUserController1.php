<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\RegistersUsers;

class TambahUserController1 extends Controller
{
    use RegistersUsers;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    public function karyawan()
    {
        $password = request('password');

        return User::create([
            'name' => request('name'),
            'email' => request('email'),
            'nim' => request('nim'),
            'password' => bcrypt($password),
            'role' => request('role'),
            'supervisor' => Auth::user()->id,
        ]);
        // return redirect('/test');
    }
}
