@extends('admin/master')

@section('title','Tambah Siswa')
@section('desc','Menambahkan Data Siswa')

@section('content')
  <form class="" action="{{url("admin/siswa")}}" method="post">
    <div class="row">
      <div class="col-md-12">
        @if ($message = Session::get('success'))
          <div class="alert alert-success">
            <p>{{ $message }}</p>
          </div>
        @endif
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="header">
            <h4 class="title">Data User</h4>
          </div>
          <div class="content">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" placeholder="Nama" name="nama" value="{{ old('nama') }}" autofocus="">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" placeholder="Username" name="username_siswa" value="{{ old('username_siswa') }}">
                </div>
              </div>
              <div class="col-md-5">
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" placeholder="Email" name="email_siswa" value="{{ old('email_siswa') }}">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" placeholder="Password" name="password_siswa" value="{{ old('password_siswa') }}">
                </div>
              </div>
              <div class="col-md-4">
                <p>Status Siswa</p>
                <div class="radio">
                  <input type="radio" name="status_siswa" id="aktif" value="aktif" checked>
                  <label for="aktif">
                    Aktif
                  </label>
                </div>
                <div class="radio">
                  <input type="radio" name="status_siswa" id="tidak_aktif" value="nonaktif" >
                  <label for="tidak_aktif">
                    Nonaktif
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="content">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>No. Telp</label>
                  <input type="text" class="form-control" placeholder="No. Telp" name="no_telp_siswa" value="{{ old('no_telp_siswa') }}">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" placeholder="Alamat" name="alamat_siswa" value="{{ old('no_telp_siswa') }}">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>ID Bank</label>
                  <input type="text" class="form-control" placeholder="ID Bank" name="idbank_siswa" value="{{ old('idbank_siswa') }}">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>No Rekening</label>
                  <input type="text" class="form-control" placeholder="No Rekening" name="no_rekening_siswa" value="{{ old('no_rekening_siswa') }}">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card">
          <div class="header">
            <h4 class="title">Data Siswa</h4>
          </div>
          <div class="content">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="tingkat">Tingkat</label>
                  <select class="form-control" id="tingkat" name="idtingkat">
                    @foreach ($tingkat as $key => $v)
                      <option value="{{$v->idtingkat}}">{{$v->nama_tingkat}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="kategori">Kategori</label>
                  <select class="form-control" id="kategori" name="idkategori">
                    @foreach ($kategori as $key => $v)
                      <option value="{{$v->idkategori}}">{{$v->nama_kategori}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="orang_tua">Orang Tua</label>
                  <select class="form-control" id="orang_tua" name="idorang_tua">
                    @foreach ($orang_tua as $key => $v)
                      <option value="{{$v->idorang_tua}}">{{$v->idusers}}</option>
                    @endforeach
                  </select>
                  <br>
                  <a class="btn btn-info btn-fill" data-toggle="collapse" data-target="#data_ortu">Isi Data Orang Tua</a>
                  <br><i>jika tidak memilih, silahkan isi data orang tua </i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="data_ortu" class="collapse">
          <div class="card">
            <div class="header">
              <h4 class="title">Data Orang Tua</h4>
            </div>
            <div class="content">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" placeholder="Nama" name="nama_orang_tua" value="{{ old('nama_orang_tua') }}" autofocus="">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="Username" name="username_orang_tua" value="{{ old('username_orang_tua') }}">
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" placeholder="Email" name="email_orang_tua" value="{{ old('email_orang_tua') }}">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="password_orang_tua" value="{{ old('password_orang_tua') }}">
                  </div>
                </div>
                <div class="col-md-4">
                  <p>Status Orang Tua</p>
                  <div class="radio">
                    <input type="radio" name="status_orang_tua" id="aktif" value="aktif" checked>
                    <label for="aktif">
                      Aktif
                    </label>
                  </div>
                  <div class="radio">
                    <input type="radio" name="status_orang_tua" id="tidak_aktif" value="nonaktif" >
                    <label for="tidak_aktif">
                      Nonaktif
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="content">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>No. Telp</label>
                    <input type="text" class="form-control" placeholder="No. Telp" name="no_telp_orang_tua" value="{{ old('no_telp_orang_tua') }}">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" placeholder="Alamat" name="alamat_orang_tua" value="{{ old('alamat_orang_tua') }}">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>ID Bank</label>
                    <input type="text" class="form-control" placeholder="ID Bank" name="idbank_orang_tua" value="{{ old('idbank_orang_tua') }}">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>No Rekening</label>
                    <input type="text" class="form-control" placeholder="No Rekening" name="no_rekening_orang_tua" value="{{ old('no_rekening_orang_tua') }}">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <button type="submit" class="btn btn-block btn-success btn-fill">Tambah Siswa</button>
        <div class="clearfix"></div>
        {{ csrf_field() }}
      </div>


    </form>
  @endsection
