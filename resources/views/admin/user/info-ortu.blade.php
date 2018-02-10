<div class="col-md-6">
  <div class="card">
    <div class="header">
      <h4 class="title">Info Orang Tua</h4>
    </div>
  <div class="content">
    <h5><p class="category">ID</p>{{$user->idusers}}</h5>
    <h5><p class="category">Nama</p>{{$user->nama}}</h5>
    <form class="" action="{{url("admin/user/{$user->idusers}")}}" method="post">
      <a class="btn btn-fill btn-info" href="{{url("admin/user/{$user->idusers}")}}/edit">Edit</a>
      <button class="btn btn-fill btn-danger" type="submit" name="delete" onClick="return confirm('Anda yakin ingin menghapus ?')">Delete</button>
      {{ method_field('DELETE') }}
      {{ csrf_field() }}
    </form>
  </div>
  </div>
</div>
