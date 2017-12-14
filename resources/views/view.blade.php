<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Daftar Nasabah</title>
  </head>
  <body>
    @foreach ($nasabah as $nasabah1)

    <h1>Daftar Transaksi {{ $nasabah1->nama }}</h1>

    <h3>{{ $nasabah1->username }}</h3>
    <h3>{{ $nasabah1->saldo }}</h3>
    @endforeach

    <h2>Pemasukan</h2>
    @foreach ($transaksimasuk as $transaksimasuk1)
    <h3>{{ $transaksimasuk1->jumlah }} |||||||| {{ $transaksimasuk1->created_at }}</h3>
    @endforeach

    <h2>Pengeluaran</h2>
    @foreach ($transaksikeluar as $transaksikeluar1)
    <h3>{{$transaksikeluar1->jumlah }} |||||||| {{$transaksikeluar1->created_at }}</h3>
    @endforeach
  </body>
</html>
