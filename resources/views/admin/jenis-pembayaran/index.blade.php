@extends('admin/master')

@section('title','Jenis Pembayaran')
@section('desc','Manajemen Jenis Pembayaran')

@section('content')

  <div class="col-md-12">
    <a class="btn btn-success btn-fill" href="{{url("admin/jenis-pembayaran/create")}}">Tambah Jenis Pembayaran</a>
  </div>

  <div class="col-md-12">
    <div class="card card-plain">
      <div class="content table-responsive table-full-width">
        <table id="jenis_pembayaran-table" class="table display" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>Jenis Pembayaran</th>
              <th>Nominal</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Jenis Pembayaran</th>
              <th>Nominal</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($jenis_pembayaran as $key => $value)
              <tr>
                <td>{{$value['nama_pembayaran']}}</td>
                <td>{{$value['nominal']}}</td>
                <td width="20%">
                  <form class="" action="{{url("admin/jenis-pembayaran/{$value['idjenis_pembayaran']}")}}" method="post">
                  <a class="btn btn-sm btn-fill btn-primary" href="{{url("admin/jenis-pembayaran/{$value['idjenis_pembayaran']}")}}">View</a>
                  <a class="btn btn-sm btn-fill btn-info" href="{{url("admin/jenis-pembayaran/{$value['idjenis_pembayaran']}/edit")}}">Edit</a>
                    <button class="btn btn-sm btn-fill btn-danger" type="submit" name="delete" onClick="return confirm('Anda yakin ingin menghapus ?')">Delete</button>
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>

      </div>
    </div>
  @endsection

  @section('script')
    @parent
    <script type="text/javascript">
    $(document).ready( function () {
      $('#jenis_pembayaran-table').DataTable( {
        "order": [[ 0, "asc" ]]
    });
    } );
    </script>
  @endsection
