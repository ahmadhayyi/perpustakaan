<!doctype html>
<html lang="en">
     <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Perpustakaan - Login</title>
          <!-- Bootstrap core CSS -->
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
          {{-- <link href="/login/css/login.css" rel="stylesheet"> --}}
          <link rel="shortcut icon" href="/dashboard/img/logo-mv.ico" type="image/x-icon">
     </head>
     <body class="">
          <div class="container vh-100 d-flex align-self-center">
               <div class="card w-50 m-auto">
                    
                    <h5 class="card-header text-center py-3">
                         Register
                    </h5>
                    <div class="card-body">
                         <form class="row g-3" action="/dashboard/register" method="post">
                              @csrf
                              {{-- <img class="mb-4" src="/dashboard/img/logo-m.png" alt="" width="72" height="57"> --}}
                              @if(session()->has('failed'))
                              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                   {{ session('failed') }}
                                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                              @endif
                              <div class="col-md-6">
                                   <label for="nama" class="form-label">Nama</label>
                                   <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{ old('nama') }}" required autofocus>
                                   @error('nama')
                                        <div class="invalid-feedback">
                                             {{ $message }}
                                        </div>
                                   @enderror
                              </div>
                              <div class="col-md-6">
                                   <label for="ribath" class="form-label">Ribath</label>
                                   <input type="text" class="form-control @error('ribath') is-invalid @enderror" name="ribath" id="ribath" value="{{ old('ribath') }}" required autofocus>
                                   @error('ribath')
                                        <div class="invalid-feedback">
                                             {{ $message }}
                                        </div>
                                   @enderror
                              </div>
                              <div class="col-md-6">
                                   <label for="kamar" class="form-label">Kamar</label>
                                   <input type="text" class="form-control @error('kamar') is-invalid @enderror" name="kamar" id="kamar" value="{{ old('kamar') }}" required autofocus>
                                   @error('kamar')
                                        <div class="invalid-feedback">
                                             {{ $message }}
                                        </div>
                                   @enderror
                              </div>
                              <div class="col-md-6">
                                   <label for="sekolah" class="form-label">Sekolah</label>
                                   <input type="text" class="form-control @error('sekolah') is-invalid @enderror" name="sekolah" id="sekolah" value="{{ old('sekolah') }}" required autofocus>
                                   @error('sekolah')
                                        <div class="invalid-feedback">
                                             {{ $message }}
                                        </div>
                                   @enderror
                              </div>
                              <div class="col-md-6">
                                   <label for="kelas" class="form-label">Kelas</label>
                                   <input type="text" class="form-control @error('kelas') is-invalid @enderror" name="kelas" id="kelas" value="{{ old('kelas') }}" required autofocus>
                                   @error('kelas')
                                        <div class="invalid-feedback">
                                             {{ $message }}
                                        </div>
                                   @enderror
                              </div>
                              <div class="col-md-6">
                                   <label for="kelas_MHM" class="form-label">Kelas MHM</label>
                                   <input type="text" class="form-control @error('kelas_MHM') is-invalid @enderror" name="kelas_MHM" id="kelas_MHM" value="{{ old('kelas_MHM') }}" required autofocus>
                                   @error('kelas_MHM')
                                        <div class="invalid-feedback">
                                             {{ $message }}
                                        </div>
                                   @enderror
                              </div>
                              <div class="col-md-6">
                                   <label for="kode_member" class="form-label">Kode Member</label>
                                   <input type="kode_member" class="form-control @error('kode_member') is-invalid @enderror" name="kode_member" id="kode_member" value="{{ old('kode_member') }}" required>
                                   @error('kode_member')
                                        <div class="invalid-feedback">
                                             {{ $message }}
                                        </div>
                                   @enderror
                              </div>
                              <div class="col-md-6">
                                   <label for="username" class="form-label">Username</label>
                                   <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" value="{{ old('username') }}" required>
                                   @error('username')
                                        <div class="invalid-feedback">
                                             {{ $message }}
                                        </div>
                                   @enderror
                              </div>
                              <div class="col-md-6">
                                   <label for="password" class="form-label">Password</label>
                                   <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" required>
                                   @error('password')
                                        <div class="invalid-feedback">
                                             {{ $message }}
                                        </div>
                                   @enderror
                              </div>
                              <div class="col-md-6">
                                   <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                                   <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" id="password" required>
                              </div>
                              <input type="hidden" name="level" value="2">
                              <div class="col-12 text-end">
                                   <button type="submit" class="btn btn-primary">Daftar Sekarang!</button>
                              </div>
                              <p class="text-muted text-center">Perpustakaan</p>
                         </form>
                    </div>
               </div>
          </div>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
     </body>
</html>