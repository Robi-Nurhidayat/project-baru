@extends('admin.app')

@section('content')


<div class="">
    <h2>Data</h2>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-primary mb-3" data-toggle="modal" data-target="#exampleModal">
        Add <i class="fas fa-plus"></i>
    </button>


    <table class="table table-responsive-lg table-responsive-md table-hover table-striped">
        <thead class="bg-secondary text-white">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Judul</th>
            <th scope="col">Link</th>
            <th scope="col">Opsi</th>
          </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach ($pi as $p)


          <tr>
            <th scope="row">{{ $i }}</th>
            <td>{{ $p->judul }}</td>
            <td>{{ $p->link }}</td>
            <td><img src="{{ asset('storage/movies/'. $p->images) }}" alt="" style="width: 70px; height:70px;"></td>
            <td>
                <a href="{{ route('piton.edit',$p->id) }}" class="btn btn-outline-success">Edit</a>
            </td>
          </tr>
          <?php $i++ ?>
          @endforeach
</div>



  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Data Python</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('piton.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">Judul</label>
                <input type="text" class="form-control" id="formGroupExampleInput" required name="judul">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">Link</label>
                <input type="email" class="form-control" id="formGroupExampleInput" required name="link">
              </div>

              <div class="form-group">
                  <button type="submit" class="btn btn-outline-primary">Save</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>


@endsection
