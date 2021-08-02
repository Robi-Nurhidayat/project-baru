@extends('halamanUser.app')


@section('content')
<div class="body-user">
    <div class="container">
        <h1>Settings</h1>

        <div class="">
            <form action="{{ route('setting.update',Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')

                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" value="{{ Auth::user()->name }}">
                      </div>


                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="{{ Auth::user()->email }}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" name="password" aria-describedby="emailHelp" value="{{ Auth::user()->password }}">
                      </div>



                      <div class="form-group">
                        <label for="exampleInputEmail1">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" name="konfirmasi_password" aria-describedby="emailHelp">
                      </div>

                      <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="validatedCustomFile" name="images" required value="{{ Auth::user()->images }}">
                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                        <div class="invalid-feedback">Pilih Gambar</div>
                      </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                        <a href="{{ route('setting') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </form>




        </div>
    </div>
</div>

@endsection
