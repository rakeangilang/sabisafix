<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Sampah;

class SampahController extends Controller
{
  public function index()
  {
    $sampah = Sampah::all();
    return view('sampah', ['sampah'=>$sampah]);
  }

  public function show($id)
  {
    $sampah = Sampah::find($id);
    return view('trash',['sampah' => $sampah] );
  }

  public function delete($id)
  {
    $sampah = Sampah::find($id);
    $sampah->delete();
    return redirect('sampah');
  }

  public function create()
  {
    return view('/sampahbaru');
  }

  public function store(Request $request)
  {
    $sampah = new Sampah;
    $sampah->jenis_sampah = $request->jenis_sampah;
    $sampah->harga_sampah = $request->harga_sampah;
    $sampah->save();

    return redirect('sampah');
  }
}
