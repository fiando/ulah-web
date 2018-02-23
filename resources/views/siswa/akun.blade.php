@extends('siswa/master')

@section('title','Pengaturan Akun')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="header">
            <h4 class="title">Edit Profile</h4>
          </div>
          <div class="content">
            <form>
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" disabled placeholder="NIS" value="{{$akun->username}}">
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" placeholder="Email" value="{{$akun->email}}">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" placeholder="Nama" value="{{$akun->nama}}">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>No Telp</label>
                    <input type="text" class="form-control" placeholder="No Telp" value="{{$akun->no_telp}}">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" placeholder="Alamat" value="{{$akun->alamat}}">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Nama Bank</label>
                    <input type="text" class="form-control" placeholder="Nama Bank" value="{{$akun->nama_bank}}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>No Rekening</label>
                    <input type="text" class="form-control" placeholder="No Rekening" value="{{$akun->no_rekening}}">
                  </div>
                </div>
              </div>
              <button type="button" disabled class="disabled btn btn-info btn-fill pull-right">Update Profile</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div cass="content">
            <div class="author text-center"><br>
                <h4 class="title">{{$akun->nama}}
                <br />
                  <small>{{$akun->username}}</small>
                </h4>
            </div>
            <p class="text-center">
              {{$akun->email}} <br>
              {{$akun->no_telp}}
            </p>
          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>
@endsection
