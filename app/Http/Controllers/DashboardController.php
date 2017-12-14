<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\TabelKunjungan;
use App\Models\TabelKomoditas;
use View;

class DashboardController extends Controller
{
    public function post(){
        $active = 'post';
        if(!(Auth::user())){
            return redirect('/');
        }
        $role = Auth::user()->role;
        return view('templates.tambahkaryawan1', compact('active', 'role'));
    }

    public function index(){
        $active = 'dashboard';
        $role = Auth::user()->role;
        $kunjungans = TabelKunjungan::all();

        return View::make('templates.isi-dashboard')->with('kunjungans', $kunjungans)->with('active', $active)->with('role', $role);
    }
    //
    // public function beranda(){
    //     $active = 'beranda';
    //     if(!(Auth::user())){
    //         return redirect('/');
    //     }
    //     $role = Auth::user()->role;
    //     return view('pages.beranda', compact('active', 'role'));
    // }
    //
    // public function nilai(){
    //     $active = 'nilai';
    //     if(!(Auth::user())){
    //         return redirect('/');
    //     }
    //     $role = Auth::user()->role;
    //     return view('pages.nilai', compact('active', 'role'));
    // }
    //
    // public function absen(){
    //     $active = 'absen';
    //     if(!(Auth::user())){
    //         return redirect('/');
    //     }
    //     $role = Auth::user()->role;
    //     $id = Auth::user()->id;
    //     $users = User::all()->where('supervisor', $id);
    //     $nomor = 0;
    //     // dd($users);
    //     return view('pages.absen', compact('active', 'role', 'users', 'nomor'));
    // }
    //
    // public function absen_lihat(){
    //     $active = 'absen';
    //     if(!(Auth::user())){
    //         return redirect('/');
    //     }
    //     $role = Auth::user()->role;
    //     $id = Auth::user()->id;
    //     $users = User::all()->where('supervisor', $id);
    //     $nomor = 0;
    //     // dd($users);
    //     return view('pages.absen-lihat', compact('active', 'role', 'users', 'nomor'));
    // }
    //
    // public function timeline(){
    //     $active = 'timeline';
    //     if(!(Auth::user())){
    //         return redirect('/');
    //     }
    //     $role = Auth::user()->role;
    //     return view('pages.timeline', compact('active', 'role'));
    // }
    //
    // public function tambahadmin(){
    //     $active = 1;
    //     $supervisor = Auth::user()->id;
    //     $role = Auth::user()->role;
    //     if(($role !== 'Administrator')){
    //         return redirect('/');
    //     }
    //     return view('pages.tambah-administrator', compact('active', 'supervisor', 'role'));
    // }
    //
    // public function tambahsr(){
    //     $active = 2;
    //     $supervisor = Auth::user()->id;
    //     $role = Auth::user()->role;
    //     if(($role !== 'Administrator')){
    //         return redirect('/');
    //     }
    //     return view('pages.tambah-sr', compact('active', 'supervisor', 'role'));
    // }
    //
    // public function tambahmahasiswa(){
    //     $active = 3;
    //     $supervisor = Auth::user()->id;
    //     $role = Auth::user()->role;
    //     if(($role !== 'Administrator') and ($role !== 'Senior Resident')){
    //         return redirect('/');
    //     }
    //     return view('pages.tambah-mahasiswa', compact('active', 'supervisor', 'role'));
    // }
}
