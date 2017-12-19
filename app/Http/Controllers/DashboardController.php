<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use App\Models\TabelKunjungan;
use App\Models\TabelKomoditas;
use View, Session, Redirect;
use Illuminate\Support\Facades\DB;

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
        $terbanyak = DB::table('Komoditas')->max('Stok');
        $namanya = DB::table('Komoditas')->where('Stok', $terbanyak)->value('Nama');
        $karyawan = DB::table('users')->count();

        return View::make('templates.isi-dashboard')->with('terbanyak', $terbanyak)->with('karyawan', $karyawan)->with('namanya', $namanya)->with('active', $active)->with('role', $role);
    }

    public function show(){
        $active = 'tampilin';
        $role = Auth::user()->role;
        $karyawans = User::all();

        return View::make('templates.daftarkaryawan')->with('karyawans', $karyawans)->with('active', $active)->with('role', $role);
    }

    public function edit($id)
    {
      $active = 'edit';
      $role = Auth::user()->role;
      $karyawan = User::find($id);

      return View::make('templates.aturkaryawan')->with('karyawan', $karyawan)->with('role', $role)->with('active', $active);
    }

    public function update($id)
    {
      $rules = array(
          'status'      => 'required'
      );

      $validator = Validator::make(Input::all(), $rules);

      // process the login
      if ($validator->fails()) {
          return Redirect::to('sisabisa/' . $id . '/edit')
              ->withErrors($validator)
              ->withInput(Input::except('password'));
      } else {
          // store
          $karyawan = User::find($id);

          $karyawan->status = Input::get('status');

          $karyawan->save();

          // redirect
          Session::flash('message', 'Status Berhasil di Update');
          return Redirect::to('daftar-karyawan/dashboard');
    }
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
