@extends('layouts.master')

@section('title', 'Daftar Nasabah')

@section('content')
    <form class="/nasabahs" method="post">
      <input type="text" name="nama" placeholder="nama" required><hr>
      <input type="text" name="username" placeholder="username" required> <hr>
      <input type="text" name="alamat" placeholder="alamat" required> <hr>
      <input type="text" name="no_hp" placeholder="no_hp" required> <hr>
      <input type="submit" name="submit" value="Create">
      {{ csrf_field() }}
    </form>
@endsection('content')
