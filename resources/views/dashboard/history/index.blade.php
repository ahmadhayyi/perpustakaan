@extends('dashboard.layouts.main')

@section('head')
    <title>Daftar Transaksi</title>
@endsection

@section('content')
     <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Transaksi</h1>
     </div>
     <p>Riwayat peminjaman buku anda</p>
     <table class="table table-bordered">
          <thead>
               <tr class="table-light">
                    <th scope="col">No</th>
                    <th scope="col">Buku</th>
                    <th scope="col">Tanggal Pinjam</th>
                    <th scope="col">Tanggal Kembali</th>
               </tr>
          </thead>
          <tbody>
               @foreach ($history as $hs)
               <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $hs->book->kode_buku }} - {{ $hs->book->nama }}</td>
                    <td>{{ date('d-M-Y',strtotime($hs->tgl_pinjam)) }}</td>
                    <td>{{ date('d-M-Y',strtotime($hs->tgl_kembali)) }}</td>
               </tr>
               @endforeach
          </tbody>
     </table>
@endsection