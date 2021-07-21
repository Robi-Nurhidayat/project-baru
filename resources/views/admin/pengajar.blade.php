@extends('admin.app')

@section('content')


<div class="">
    <h2>Data Pengajar</h2>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-primary mb-3" data-toggle="modal" data-target="#exampleModal">
        Add <i class="fas fa-plus"></i>
    </button>


    <table class="table table-responsive-lg table-responsive-md table-hover table-striped">
        <thead class="bg-secondary text-white">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Usia</th>
            <th scope="col">Alamat</th>
            <th scope="col">Kelas</th>
            {{-- <th scope="col">Images</th> --}}
            <th scope="col">Opsi</th>
          </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach ($pengajar as $p)


          <tr>
            <th scope="row">{{ $i }}</th>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->email }}</td>
            <td>{{ $p->usia }}</td>
            <td>{{ $p->alamat }}</td>
            <td>{{ $p->kelas }}</td>
            {{-- <td><img src="{{ asset('storage/img/users/'. $p->images) }}" alt="" style="width: 70px; height:70px;"></td> --}}
            <td>
                <a href="{{ route('pengajar.edit',$p->id) }}" class="btn btn-outline-success">Edit</a>
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
          <h5 class="modal-title" id="exampleModalLabel">Data Pengajar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('pengajar.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">Nama</label>
                <input type="text" class="form-control" id="formGroupExampleInput" required name="nama">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">Email</label>
                <input type="email" class="form-control" id="formGroupExampleInput" required name="email">
              </div>

              <div class="form-group">
                <label for="formGroupExampleInput">Usia</label>
                <input type="text" class="form-control" id="formGroupExampleInput" required name="usia">
              </div>

              <div class="form-group">
                <label for="formGroupExampleInput">Alamat</label>
                <input type="text" class="form-control" id="formGroupExampleInput" required name="alamat">
              </div>

              <div class="form-group">
                <label for="formGroupExampleInput">Kelas</label>
                <input type="text" class="form-control" id="formGroupExampleInput" required name="kelas">
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupFileAddon01">Images</span>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="images">
                  <label class="custom-file-label" for="inputGroupFile01">Pilih file</label>
                </div>
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
