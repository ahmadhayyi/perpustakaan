@extends('dashboard.layouts.main')

@section('head')
    <title>Tambah Transaksi</title>
@endsection

@section('content')
     <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Tambah Transaksi</h1>
     </div>

     <form action="/dashboard/transaction" method="post" class="row g-3 col-lg-8">
          @csrf
          <div class="col-md-6">
               <label for="kode_member" class="form-label">Member</label>
               <select class="form-select @error('kode_member') is-invalid @enderror" name="kode_member" id="kode_member" required autofocus>
                    @foreach ($user as $us)
                         <option value="{{ $us->kode_member }}" {{ (collect(old('kode_member'))->contains($us->kode_member)) ? 'selected':'' }}>{{ $us->kode_member }} - {{ $us->nama }}</option>
                    @endforeach
               </select>
               @error('kode_member')
                    <div class="invalid-feedback">
                         <i class="bx bx-radio-circle"></i>
                         {{ $message }}
                    </div>     
               @enderror
          </div>
          <div class="col-md-6">
               <label for="book_id" class="form-label">Buku</label>
               <select class="form-select @error('book_id') is-invalid @enderror" name="book_id" id="book_id" required>
                    @foreach ($book as $bk)
                         <option value="{{ $bk->id }}" {{ (collect(old('book_id'))->contains($bk->id)) ? 'selected':'' }}>{{ $bk->kode_buku }} - {{ $bk->nama }}</option>
                    @endforeach
               </select>
               @error('book_id')
                    <div class="invalid-feedback">
                         <i class="bx bx-radio-circle"></i>
                         {{ $message }}
                    </div>     
               @enderror
          </div>
          <div class="col-md-6">
               <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
               <input type="date" class="form-control @error('tgl_pinjam') is-invalid @enderror" name="tgl_pinjam" id="tgl_pinjam" value="{{ old('tgl_pinjam') }}" required>
               @error('tgl_pinjam')
                    <div class="invalid-feedback">
                         <i class="bx bx-radio-circle"></i>
                         {{ $message }}
                    </div>     
               @enderror
          </div>
          <div class="col-md-6">
               <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
               <input type="date" class="form-control @error('tgl_kembali') is-invalid @enderror" name="tgl_kembali" id="tgl_kembali" value="{{ old('tgl_kembali') }}" required>
               @error('tgl_kembali')
                    <div class="invalid-feedback">
                         <i class="bx bx-radio-circle"></i>
                         {{ $message }}
                    </div>     
               @enderror
          </div>
          <div class="col-12 mt-4">
               <button type="submit" class="btn btn-primary">Tambah Transaksi</button>
          </div>
     </form>
@endsection