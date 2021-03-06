@extends('admin_baru.app')

@section('content')


<div class="my-5" style="height: 100vh;">
    <h2>Pesan dari user</h2>

    <table class="table table-responsive-lg table-responsive-md table-hover table-striped">
        <thead class="bg-secondary text-white">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">No Telepon</th>
            <th scope="col">Pesan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach ($pesan as $p)


          <tr>
            <th scope="row">{{ $i }}</th>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->email }}</td>
            <td>{{ $p->no_tlp }}</td>
            <td>{{ $p->pesan }}</td>
            <td>
                <a href="{{ route('hapusPesanUser',$p->id) }}" class="btn btn-outline-danger" onclick="return confirm('Yakin ?')">Delete</a>
            </td>
          </tr>
        </tbody>
          <?php $i++ ?>
          @endforeach
</div>






@endsection
