
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="card">
        <div class="header text-center">
          <h4 class="title">Identitas Sekolah</h4>
          <p class="category">Informasi Mengenai Sekolah</p>
          <br>
        </div>
        <div class="content">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <dl class="dl-horizontal">
                <dt>ID Sekolah :</dt>
                <dd>{{$sekolah->ididentitas_sekolah}}</dd>
                <dt>Nama Sekolah :</dt>
                <dd>{{$sekolah->nama}}</dd>
                <dt>Status Sekolah :</dt>
                <dd>{{$sekolah->status}}</dd>
                <dt>Bentuk Pendidikan :</dt>
                <dd>{{$sekolah->bentuk_pendidikan}}</dd>
                <dt>Akreditasi :</dt>
                <dd>{{$sekolah->akreditasi}}</dd>
                <dt>Kurikulum :</dt>
                <dd>{{$sekolah->kurikulum}}</dd>
                <dt>Kepala Sekolah : </dt>
                <dd>{{$sekolah->kepala_sekolah}}</dd>
                <dt>Alamat :</dt>
                <dd>{{$sekolah->alamat}}</dd>
                <dt>Email :</dt>
                <dd>{{$sekolah->email}}</dd>
                <dt>No. Telepon : </dt>
                <dd>{{$sekolah->no_telp}}</dd>
                <dt>Rekening : </dt>
                <dd>{{$sekolah->rekening}} ( {{$sekolah->nama_bank}} )</dd>
                <dt>Website : </dt>
                <dd>{{$sekolah->website}}</dd>
              </dl>
              @if (session('level') == 'admin')
                <a href="{{url('admin/identitas-sekolah/edit')}}" class="btn btn-info btn-fill btn-block">Update Identitas Sekolah</a>
              @endif
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
