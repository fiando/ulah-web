@extends('admin/master')

@section('title','Edit User')
@section('desc','Mengedit Data User')

@section('content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      @if ($message = Session::get('success'))
        <div class="alert alert-success">
          <p>{{ $message }}</p>
        </div>
      @endif

      <form action="{{url("admin/user/{$user->idusers}")}}" method="post">
        {{ method_field('PUT') }}
        <div class="card">
          <div class="header">
            <h4 class="title">Edit User
              <a href="{{url("admin/user")}}" class="btn btn-warning btn-fill btn-sm">Kembali</a>
            </h4>
          </div>
          <div class="content">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Level</label>
                  <input type="text" class="form-control" placeholder="Level" name="level" value="admin" disabled>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" placeholder="Nama" name="nama" value="{{$user->nama}}" autofocus="">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" placeholder="Username" name="username" value="{{{$user->username}}}">
                </div>
              </div>
              <div class="col-md-5">
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" placeholder="Email" name="email" value="{{$user->email}}">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" placeholder="Password" name="password" value="">
                  <small class="text-muted">Kosongkan untuk menggunakan password lama</small>
                </div>
              </div>
              <div class="col-md-4">
                <p>Status User</p>
                <div class="radio">
                  <input type="radio" name="status" id="aktif" value="aktif" {{($user->status == 'aktif') ? 'checked' : '' }}>
                  <label for="aktif">
                    Aktif
                  </label>
                </div>
                <div class="radio">
                  <input type="radio" name="status" id="tidak_aktif" value="nonaktif" {{($user->status == 'nonaktif') ? 'checked' : '' }}>
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
                  <input type="text" class="form-control" placeholder="No. Telp" name="no_telp" value="{{$user->no_telp}}">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="{{$user->alamat}}">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>ID Bank</label>
                  <input type="text" class="form-control" placeholder="ID Bank" name="idbank" value="{{$user->idbank}}">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>No Rekening</label>
                  <input type="text" class="form-control" placeholder="No Rekening" name="no_rekening" value="{{$user->no_rekening}}">
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-info btn-fill pull-right">Update User</button>
            <div class="clearfix"></div>
            {{ csrf_field() }}
          </div>
        </div>
      </div>
    </form>
  </div>

@endsection
