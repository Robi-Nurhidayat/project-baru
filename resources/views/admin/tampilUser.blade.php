@extends('admin.app')

@section('content')


<div class="">
    <h2>Data Pelajar</h2>

            <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
            Tambah
        </button>

    <table class="table table-responsive-lg table-responsive-md table-hover table-striped">
        <thead class="bg-secondary text-white">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Images</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach ($user as $p)


          <tr>
            <th scope="row">{{ $i }}</th>
            <td>{{ $p->name }}</td>
            <td>{{ $p->email }}</td>
            <td>
                <img src="{{ URL('img/users/', $p->images) }}" style="width: 50px; height:50px;" alt="">
            </td>
            <td>
                <a href="{{ route('editUserAdmin',$p->id) }}" class="btn btn-outline-success">Edit</a>
            </td>
          </tr>
        </tbody>
          <?php $i++ ?>
          @endforeach
</div>





  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>



@endsection
