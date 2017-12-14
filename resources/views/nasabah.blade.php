@extends('layouts.master')

@section('title', 'Daftar Nasabah')

@section('content')
    @foreach ($nasabah as $nasabah1)
    <table class="table">
      <td>
        <tr>
          <a href="/nasabah/{{$nasabah1->username}}">{{ $nasabah1->nama}}</a>
        </tr>
        <tr>
          <form action="/nasabah/{{$nasabah1->username}} " method="post">



            <input type="submit" name="submit" value="delete">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="DELETE">
          </form>
        </tr>

      </td>
    </table>
    @endforeach


@endsection('content')
