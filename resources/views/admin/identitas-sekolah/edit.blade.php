@extends('admin/master')

@section('title','Edit Identitas Sekolah')
@section('desc','Mengedit Data Identitas Sekolah')

@section('content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      @if ($message = Session::get('success'))
           <div class="alert alert-success">
               <p>{{ $message }}</p>
           </div>
       @endif
      <div class="card">
        <div class="header">
          <h4 class="title">Edit Identitas Sekolah
            <a href="#" class="disabled btn btn-warning btn-fill btn-sm">Kembali</a>
          </h4>
        </div>
        <div class="content">
          <form action="#" method="post">
            {{ method_field('PUT') }}
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" placeholder="Nama" name="nama" value="{{$sekolah->nama}}">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status">
                    <option value="Negeri" {{($sekolah->status=='Negeri') ? 'selected' : ''}}>Negeri</option>
                    <option value="Swasta" {{($sekolah->status=='Swasta') ? 'selected' : ''}}>Swasta</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label>Bentuk Pendidikan</label>
                  <select class="form-control" name="bentuk_pendidikan">
                    <option value="SD" {{($sekolah->bentuk_pendidikan =='SD') ? 'selected' : ''}}>SD</option>
                    <option value="SMP" {{($sekolah->bentuk_pendidikan =='SMP') ? 'selected' : ''}}>SMP</option>
                    <option value="SMA" {{($sekolah->bentuk_pendidikan =='SMA') ? 'selected' : ''}}>SMA</option>
                    <option value="SMK" {{($sekolah->bentuk_pendidikan =='SMK') ? 'selected' : ''}}>SMK</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label>Akreditasi</label>
                  <select class="form-control" name="status">
                    <option value="A" {{($sekolah->status=='A') ? 'selected' : ''}}>A</option>
                    <option value="B" {{($sekolah->status=='B') ? 'selected' : ''}}>B</option>
                    <option value="C" {{($sekolah->status=='C') ? 'selected' : ''}}>C</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <div class="form-group">
                    <label>Kurikulum</label>
                    <input type="text" class="form-control" placeholder="kurikulum" name="kurikulum" value="{{$sekolah->kurikulum}}">
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <div class="form-group">
                    <label>Kepala Sekolah</label>
                    <input type="text" class="form-control" value="{{$sekolah->kepala_sekolah}}">
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                      <label>Alamat</label>
                      <input type="text" class="form-control" value="{{$sekolah->alamat}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control" value="{{$sekolah->email}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                      <label>No Telp</label>
                      <input type="text" class="form-control" value="{{$sekolah->no_telp}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                      <label>Website</label>
                      <input type="text" class="form-control" value="{{$sekolah->website}}">
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="form-group">
                    <label>Rekening</label>
                    <input type="text" class="form-control" value="{{$sekolah->rekening}}">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="form-group">
                    <label>Nama Bank</label>
                    <input type="text" class="form-control" value="{{$sekolah->nama_bank}}">
                  </div>
                </div>
              </div>
            </div>
              <button type="button" class="disabled btn btn-info btn-fill pull-right">Update Identitas Sekolah</button>
            <div class="clearfix"></div>
            {{ csrf_field() }}
          </form>
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div>
@endsection
