@extends('admin_baru.app')

@section('content')

<div class="my-5" style="height: 100vh;">
    <h2>Daftar Transaksi</h2>

    <table class="table table-responsive-lg table-responsive-md table-hover table-striped">
        <thead class="bg-secondary text-white">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">No Telepon</th>
            <th scope="col">Alamat</th>
          </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach ($transaksi as $p)


          <tr>
            <th scope="row">{{ $i }}</th>
            <td>{{ $p->name }}</td>
            <td>{{ $p->email }}</td>
            <td>{{ $p->no_tlp }}</td>
            <td>{{ $p->alamat }}</td>
          </tr>
        </tbody>
          <?php $i++ ?>
          @endforeach
</div>


@endsection
