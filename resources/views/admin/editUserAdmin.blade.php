@extends('admin.app')



@section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-8 col-lg-8">
                <h2>Halaman Edit</h2>
            </div>

            <div class="col-md-4 col-lg-4">
                <button type="button" class="btn btn-outline-danger mb-3" data-toggle="modal" data-target="#exampleModal">
                    Delete
                </button>
            </div>
        </div>
    </div>

    <div class="card-body">
        <form action="{{ route('pengajar.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="form-group">
                <label for="formGroupExampleInput">Role</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" required name="hargaKelas"  value="{{ $user->role }}">
            </div>


          <div class="form-group">
              <label for="formGroupExampleInput">Nama</label>
              <input type="text" class="form-control" id="formGroupExampleInput"  required name="namaKelas" value="{{ $user->name }}">
          </div>

          <div class="form-group">
              <label for="formGroupExampleInput">Email</label>
              <input type="email" class="form-control" id="formGroupExampleInput" placeholder="" required name="namaPengajar"  value="{{ $user->email }}">
          </div>


          <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
              </div>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile01" name="images" aria-describedby="inputGroupFileAddon01" value="{{ $user->images }}">
                <label class="custom-file-label" for="inputGroupFile01">Pilih Images</label>
              </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('admin') }}" class="btn btn-secondary">Kembali</a>
            </div>

        </form>
    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <p>apakah anda yakin menghapus pelajar dengan nama pelajar : {{ $user->name }} ?</p>
          <form action="{{ route('deleteUserAdmin', $user->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('delete')
              <div class="form-group">
                  <button type="submit" class="btn btn-outline-danger">Delete</button>
              </div>

          </form>
        </div>
      </div>
    </div>
  </div>

@endsection
