@extends('halamanUser.app')
@section('title', 'Settings')

@section('content')
<div class="body-user">
  <div class="container">
    <h1 class="mb-3">Settings</h1>
    <h4>Edit Profile</h4>

    <div class="mt-5">
      <form action="{{ route('setting.update',Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <form action="" method="POST" enctype="multipart/form-data">
          @csrf
          @method('put')
          <div class="form-group">
            <label for="username" class="roboto-18-medium">Username</label>
            <input type="text" class="form-control roboto-14-reguler" id="username" name="name" aria-describedby="emailHelp" value="{{ Auth::user()->name }}">
          </div>


          <div class="form-group">
            <label for="email" class="roboto-18-medium">Email</label>
            <input type="email" class="form-control roboto-14-reguler" id="email" name="email" aria-describedby="emailHelp" value="{{ Auth::user()->email }}">
          </div>

          <div class="form-group">
            <label for="password" class="roboto-18-medium">Password Lama</label>
            <input type="password" class="form-control roboto-14-reguler" id="password" aria-describedby="emailHelp" value="{{ Auth::user()->password }}">
          </div>

          <div class="form-group">
            <label for="password" class="roboto-18-medium">Password Baru</label>
            <input type="password" class="form-control roboto-14-reguler" id="password" name="password" placeholder="Masukkan Kata Sandi Baru" aria-describedby="emailHelp">
          </div>

          <div class="form-group">
            <label for="confirmpassword" class="roboto-18-medium">Konfirmasi Password</label>
            <input type="password" class="form-control roboto-14-reguler" id="confirmpassword" name="konfirmasi_password" placeholder="Masukkan Konfirmasi Kata Sandi Baru" aria-describedby="emailHelp">
          </div>

          <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" id="uploadfile" name="images" value="{{ Auth::user()->images }}">
            <label class="custom-file-label roboto-14-reguler" for="uploadfile" aria-describedby="uploadFile">{{Auth::user()->images}}</label>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary py-2 btn-block poppins-18-semibold">Update Profile</button>
          </div>
        </form>

    </div>
  </div>
</div>

@endsection