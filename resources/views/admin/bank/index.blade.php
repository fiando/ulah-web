@extends('admin/master')

@section('title','Bank')
@section('desc','Manajemen Bank')

@section('content')

  <div class="col-md-12">
    <a class="btn btn-success btn-fill" href="{{url("admin/bank/create")}}">Tambah Bank</a>
  </div>

  <div class="col-md-12">
    <div class="card card-plain">
      <div class="content table-responsive table-full-width">
        <table id="pembayaran" class="table display" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>Kode</th>
              <th>Nama</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Kode</th>
              <th>Nama</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($bank as $key => $value)
              <tr>
                <td>{{$value['kode']}}</td>
                <td>{{$value['nama']}}</td>
                <td width="20%">
                  <form class="" action="{{url("admin/bank/{$value['kode']}")}}" method="post">
                  <a class="btn btn-sm btn-fill btn-primary" href="{{url("admin/bank/{$value['kode']}")}}">View</a>
                  <a class="btn btn-sm btn-fill btn-info" href="{{url("admin/bank/{$value['kode']}/edit")}}">Edit</a>
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
      $('#pembayaran').DataTable( {
        "order": [[ 0, "asc" ]]
    });
    } );
    </script>
  @endsection
