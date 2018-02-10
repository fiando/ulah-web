@extends('admin/master')

@section('title','Siswa')
@section('desc','Manajemen Siswa')

@section('content')

  <div class="col-md-12">
    <a class="btn btn-success btn-fill disabled" href="#">Tambah Siswa</a>
  </div>

  <div class="col-md-12">
    <div class="card card-plain">
      <div class="content table-responsive table-full-width">
        <table id="user-table" class="table display" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
          </tfoot>
          <tbody>
            @foreach ($user as $key => $value)
              <tr>
                <td>{{$value['idusers']}}</td>
                <td>{{$value['nama']}}</td>
                <td>{{$value['email']}}</td>
                <td>{{user_status($value['status'])}}</td>
                <td width="20%">
                  <form class="" action="{{url("admin/user/{$value['idusers']}")}}" method="post">
                  <a class="disabled btn btn-sm btn-fill btn-primary" href="#">View</a>
                  <a class="disabled btn btn-sm btn-fill btn-info" href="#">Edit</a>
                    <button class="disabled btn btn-sm btn-fill btn-danger" type="button" name="delete">Delete</button>
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
      $('#user-table').DataTable( {
        "order": [[ 0, "desc" ]]
    });
    } );
    </script>
  @endsection
