@extends('layouts.master')

@section('title', 'Daftar Sampah Baru')

@section('content')
    <form class="/sampahs" method="post">
      <input type="text" name="jenis_sampah" placeholder="jenis sampah" required><hr>
      <input type="text" name="harga_sampah" placeholder="harga sampah" required> <hr>
      <input type="submit" name="submit" value="Create">
      {{ csrf_field() }}
    </form>
@endsection('content')
