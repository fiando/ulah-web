@extends('admin/master')

@section('title','Tingkat')
@section('desc','Manajemen Tingkat')

@section('content')

  <div class="col-md-12">
    <a class="btn btn-success btn-fill" href="{{url("admin/tingkat/create")}}">Tambah Tingkat Siswa</a>
  </div>

  <div class="col-md-12">
    <div class="card card-plain">
      <div class="content table-responsive table-full-width">
        <table id="tingkat-table" class="table display" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Nama</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($tingkat as $key => $value)
              <tr>
                <td>{{$value['nama_tingkat']}}</td>
                <td width="20%">
                  <form class="" action="{{url("admin/tingkat/{$value['idtingkat']}")}}" method="post">
                  <a class="btn btn-sm btn-fill btn-primary" href="{{url("admin/tingkat/{$value['idtingkat']}")}}">View</a>
                  <a class="btn btn-sm btn-fill btn-info" href="{{url("admin/tingkat/{$value['idtingkat']}/edit")}}">Edit</a>
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
      $('#tingkat-table').DataTable( {
        "order": [[ 0, "desc" ]]
    });
    } );
    </script>
  @endsection
