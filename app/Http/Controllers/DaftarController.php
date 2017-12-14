<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Nasabah;

class DaftarController extends Controller
{
      public function __construct()
      {
        $this->middleware('auth');
      }

      public function create()
      {
        return view('/daftar');
      }

      public function store(Request $request)
      {
        $nasabah = new Nasabah;
        $nasabah->nama = $request->nama;
        $nasabah->username = $request->username;
        $nasabah->alamat = $request->alamat;
        $nasabah->no_hp = $request->no_hp;
        $nasabah->save();

        return redirect('nasabah');
      }

      public function update(Request $request, $id)
      {
        $nasabah = new Nasabah;
        $nasabah->nama = $request->nama;
        $nasabah->username = $request->username;
        $nasabah->alamat = $request->alamat;
        $nasabah->saldo = $request->saldo;
        $nasabah->no_hp = $request->no_hp;
        $nasabah->save();
      }

      public function delete($id)
      {
        $nasabah = Nasabah::find($id);
        $nasabah->delete();
        return redirect('nasabah');
      }

}
