@extends('admin/master')

@section('title','Tahun Ajaran')
@section('desc','Manajemen Tahun Ajaran')

@section('content')

  <div class="col-md-12">
    <a class="btn btn-success btn-fill" href="{{url("admin/tahun-ajaran/create")}}">Tambah Tahun Ajaran</a>
  </div>

  <div class="col-md-12">
    <div class="card card-plain">
      <div class="content table-responsive table-full-width">
        <table id="tahun_pelajaran-table" class="table display" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>Tahun Ajaran</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Tahun Ajaran</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($tahun_ajaran as $key => $value)
              <tr>
                <td>{{$value['tahun_pelajaran']}}</td>
                <td width="20%">
                  <form class="" action="{{url("admin/tahun-ajaran/{$value['idtahun_pelajaran']}")}}" method="post">
                  <a class="btn btn-sm btn-fill btn-primary" href="{{url("admin/tahun-ajaran/{$value['idtahun_pelajaran']}")}}">View</a>
                  <a class="btn btn-sm btn-fill btn-info" href="{{url("admin/tahun-ajaran/{$value['idtahun_pelajaran']}/edit")}}">Edit</a>
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
      $('#tahun_pelajaran-table').DataTable( {
        "order": [[ 0, "desc" ]]
    });
    } );
    </script>
  @endsection
