@extends('layouts.master')

@section('title', 'Record Transaksi')

@section('content')
    @foreach ($transaksimasuk as $transaksimasuk1)
    <table class="table">
      <td>

        <tr>
            <th>{{ $transaksimasuk1->nasabah_user}} </th>
            <th>{{ $transaksimasuk1->jenis }}</th>
            <th>{{ $transaksimasuk1->berat }}</th>
            <td>{{ $transaksimasuk1->jumlah }}</td>
            <td>{{ $transaksimasuk1->created_at }}</td>
        </tr>

      </td>
    </table>
    @endforeach

    @foreach ($transaksikeluar as $transaksikeluar1)
    <table class="table">
      <td>

        <tr>

            <th>{{ $transaksikeluar1->nasabah_user}} </th>
            <td>{{ $transaksikeluar1->jumlah }}</td>
            <td>{{ $transaksikeluar1->created_at }}</td>
        </tr>

      </td>
    </table>
    @endforeach


@endsection('content')
