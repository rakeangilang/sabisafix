@extends('layouts.master')

@section('title', 'Tarik Sampah')

@section('content')
    <form class="" action="/tarik" method="post">

      <h3>Username</h3>
      <input class="" type="text" name="nasabah_user" required><hr>
      <h3>Jumlah Yang Ditarik</h3>
      <input class="" type="text" name="jumlah" required> <hr>

      <input type="submit" name="submit" value="Create">
      {{ csrf_field() }}
    </form>
@endsection('content')
