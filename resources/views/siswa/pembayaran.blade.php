@extends('siswa/master')

@section('title','Histori Pembayaran')
@section('desc','Informasi Pembayaran Siswa')

@section('content')
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="content">
          <table class="table" id="pembayaran">
             <thead>
               <tr>
                 <th>Jenis Pembayaran</th>
                 <th>Nominal</th>
                 <th>Tgl Tagihan</th>
                 <th>Tgl Bayar</th>
                 <th>Tahun Ajaran</th>
               </tr>
             </thead>
             <tbody>
               @foreach ($pembayaran as $key => $v)
                 <tr>
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
    <div class="col-md-4">
      <div class="well">
        <div class="header">
          <h4 class="title">Filter</h4>
        </div>
        <div class="content">
          <form class="form-horizontal">
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
                <button type="button" class="disabled btn btn-info btn-block btn-fill">Filter</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="well">
        <h5><b>Total Transaksi</b></h5>
        <p>Rp{{number_format($total_transaksi,0,'','.')}}</p>
        <h5><b>Banyaknya Transaksi</b></h5>
        <p>{{$pembayaran_count}} Kali</p>
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
