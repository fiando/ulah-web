@extends('admin/master')

@section('title','Histori Pembayaran Siswa')
@section('desc','Informasi Pembayaran Siswa')

@section('content')
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="content">
          <div class="table-responsive">
            <table id="pembayaran" class="table table-responsive">
               <thead>
                 <tr>
                   <th>Nama Siswa</th>
                   <th>Jenis Pembayaran</th>
                   <th>Nominal</th>
                   <th>Tanggal Tagihan</th>
                   <th>Tanggal Pembayaran</th>
                   <th>Tahun Ajaran</th>
                 </tr>
               </thead>
               <tfoot>
                 <tr>
                   <th>Nama Siswa</th>
                   <th>Jenis Pembayaran</th>
                   <th>Nominal</th>
                   <th>Tanggal Tagihan</th>
                   <th>Tanggal Pembayaran</th>
                   <th>Tahun Ajaran</th>
                 </tr>
               </tfoot>
               <tbody>
                 @foreach ($pembayaran as $key => $v)
                   <tr>
                     <td><a href="#">{{$v->nama}}</a> </td>
                     <td>{{$v->nama_pembayaran}}</td>
                     <td>{{$v->nominal}}</td>
                     <td>{{$v->tgl_tagihan}}</td>
                     <td>{{$v->tgl_bayar}}</td>
                     <td>{{$v->tahun_pelajaran}}</td>
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
              <div class="col-sm-offset-4 col-sm-8">
                <button type="button" class="btn btn-info btn-block btn-fill disabled">Filter</button>
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
    $('#pembayaran').DataTable( {
      "order": [[ 3, "desc" ]]
  });
  } );
  </script>
@endsection
