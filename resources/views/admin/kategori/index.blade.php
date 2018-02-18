@extends('admin/master')

@section('title','Kategori')
@section('desc','Manajemen Kategori')

@section('content')

  <div class="col-md-12">
    <a class="btn btn-success btn-fill" href="{{url("admin/kategori/create")}}">Tambah Kategori Siswa</a>
  </div>

  <div class="col-md-12">
    <div class="card card-plain">
      <div class="content table-responsive table-full-width">
        <table id="kategori-table" class="table display" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($kategori as $key => $value)
              <tr>
                <td>{{$value['idkategori']}}</td>
                <td>{{$value['nama_kategori']}}</td>
                <td width="20%">
                  <form class="" action="{{url("admin/kategori/{$value['idkategori']}")}}" method="post">
                  <a class="btn btn-sm btn-fill btn-primary" href="{{url("admin/kategori/{$value['idkategori']}")}}">View</a>
                  <a class="btn btn-sm btn-fill btn-info" href="{{url("admin/kategori/{$value['idkategori']}/edit")}}">Edit</a>
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
      $('#kategori-table').DataTable( {
        "order": [[ 0, "desc" ]]
    });
    } );
    </script>
  @endsection
