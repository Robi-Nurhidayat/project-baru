@extends('halamanUser.app')


@section('content')
<div class="body-user">
    <div class="container">
        <h1>Settings</h1>

        <div class="">
            <form action="{{ route('setting.update') }}" method="POST" enctype="multipart/form-data">
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
                    <a href="{{ route('setting') }}" class="btn btn-secondary">Kembali</a>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection
