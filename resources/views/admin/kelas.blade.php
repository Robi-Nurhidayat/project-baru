@extends('admin.app')


@section('content')


<div class="">
    <h2>Data kelas</h2>
</div>

<div class="">
    <button type="button" class="btn btn-outline-primary mb-3" data-toggle="modal" data-target="#exampleModal">
        Add <i class="fas fa-plus"></i>
    </button>
</div>

<table class="table table-responsive-lg table-responsive-md text-center table-striped table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Kelas</th>
        <th scope="col">Pengajar</th>
        <th scope="col">Harga Kelas</th>
        <th scope="col">Kategori</th>
        <th scope="col">Images</th>
        <th scope="col">Opsi</th>
      </tr>
    </thead>
    <tbody>

        <?php $i = 1; ?>
        @foreach ($kelas as $k)

      <tr>
        <th scope="row">{{ $i; }}</th>
        <td>{{ $k->namaKelas }}</td>
        <td>{{ $k->namaPengajar }}</td>
        <td>{{ $k->hargaKelas }}</td>
        <td>{{ $k->kategori }}</td>
        <td><img src="{{ asset('storage/movies/'. $k->images) }}" alt="" style="width: 70px; height:70px;"></td>
        <td>
            <a href="{{ route('kelas.edit', $k->id) }}" class="btn btn-outline-success">edit</a>
        </td>
      </tr>

      <?php $i++; ?>
      @endforeach

    </tbody>


    <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data kelas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('kelas.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">Nama Kelas</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" required name="namaKelas">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">Nama Pengajar</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" required name="namaPengajar">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">Harga kelas</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" required name="hargaKelas">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">Kategori</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" required name="kategori">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile01" name="images" aria-describedby="inputGroupFileAddon01">
                  <label class="custom-file-label" for="inputGroupFile01">Pilih Images</label>
                </div>
              </div>

              <div class="form-group">
                  <button type="submit" class="btn btn-primary">Save</button>
              </div>

          </form>
        </div>
      </div>
    </div>
  </div>

@endsection
