<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function post(){
        $active = 'post';
        if(!(Auth::user())){
            return redirect('/');
        }
        $role = Auth::user()->role;
        return view('templates.tambahkaryawan', compact('active', 'role'));
    }
}
