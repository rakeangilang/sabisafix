@extends('layouts.master')

@section('title', 'Setor Sampah')

@section('content')
    <form class="" action="/setor" method="post">

      <h3>Username</h3>
      <input class="" type="text" name="nasabah_user" required><hr>
      <h3>Berat_Sampah</h3>
      <input class="" type="text" name="berat" required> <hr>
      <select    name="jenis_sampah">
        @foreach($sampah as $sampah1)
        <option value="{{$sampah1->jenis_sampah}}">{{$sampah1->jenis_sampah}} </option>
        @endforeach
      </select><hr>
      <input type="submit" name="submit" value="Create">
      {{ csrf_field() }}
    </form>
@endsection('content')
