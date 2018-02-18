@extends('admin/master')

@section('title','Tagihan Siswa')
@section('desc','Informasi Tagihan Siswa ( Pembayaran Belum Lunas / Terbayar )')

@section('content')
  <div class="row">
    <div class="col-md-8">
      @if (session('pesan_flash'))
        <div class="alert alert-info">
          <span>{{session('pesan_flash')}}</span>
        </div>
      @endif
      <div class="card">
        <div class="header">
          <a href="{{url("admin/tagihan/tambah")}}" class="btn btn-success btn-block btn-fill">Tambah Tagihan</a>
        </div>
        <div class="content">
          <div class="table-responsive">
            <table id="tagihan" class="table table-responsive">
               <thead>
                 <tr>
                   <th>Nama Siswa</th>
                   <th>Jenis Pembayaran</th>
                   <th>Nominal</th>
                   <th>Tanggal Tagihan</th>
                   <th>Tahun Ajaran</th>
                   <th>Status</th>
                 </tr>
               </thead>
               <tbody>
                 @foreach ($pembayaran as $key => $v)
                   <tr>
                     <td><a href="#">{{$v->nama}}</a> </td>
                     <td>{{$v->nama_pembayaran}}</td>
                     <td>Rp{{number_format($v->nominal,0,0,'.')}}</td>
                     <td>{{$v->tgl_tagihan}}</td>
                     <td>{{$v->tahun_pelajaran}}</td>
                     <td>
                       Belum Lunas
                       <form class="" action="{{url("admin/tagihan/kirim-notif")}}" method="post">
                         <button type="submit" name="notif" class="btn btn-xs btn-info btn-fill">Kirim Notifikasi</button>
                         <input type="hidden" name="nama" value="{{$v->nama}}">
                         <input type="hidden" name="nis" value="{{$v->nis}}">
                         <input type="hidden" name="nomor" value="{{$v->no_telp}}">
                         <input type="hidden" name="nama_pembayaran" value="{{$v->nama_pembayaran}}">
                         <input type="hidden" name="nominal" value="{{$v->nominal}}">
                         <input type="hidden" name="tgl_tagihan" value="{{$v->tgl_tagihan}}">
                         {{ csrf_field() }}
                       </form>
                     </td>
                   </tr>
                 @endforeach

               </tbody>
             </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="well">
        <div class="header">
          <h4 class="title">Filter</h4>
        </div>
        <div class="content">
          <form class="form-horizontal">
            <div class="form-group">
              <label class="col-sm-4 control-label">Siswa</label>
              <div class="col-sm-8">
                <select class="form-control" name="siswa">
                  <option value="">Semua</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">Tahun Ajaran</label>
              <div class="col-sm-8">
                <select class="form-control" name="tahun_ajaran">
                  <option value="">Semua</option>
                  <option value="">2017/2018</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">Jenis Pembayaran</label>
              <div class="col-sm-8">
                <select class="form-control" name="jenis_pembayaran">
                  <option value="">Semua</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">Status</label>
              <div class="col-sm-8">
                <select class="form-control" name="status">
                  <option value="">Semua</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-4 col-sm-8">
                <button type="button" class="disabled btn btn-info btn-block btn-fill">Filter</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
  @parent
  <script type="text/javascript">
  $(document).ready( function () {
    $('#tagihan').DataTable( {
      "order": [[ 3, "desc" ]]
  });
  } );
  </script>
@endsection
