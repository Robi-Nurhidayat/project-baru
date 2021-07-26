@extends('admin_baru.app')

@section('content')

<div class="my-5" style="height: 100vh;">
    <h2>Daftar Pelajar</h2>

    <table class="table table-responsive-lg table-responsive-md table-hover table-striped">
        <thead class="bg-secondary text-white">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Foto</th>
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
                <img src="{{ URL('img/users', $p->images) }}" alt="" style="height: 40px; height:40px;">
            </td>
            <td>
                <a href="{{ route('pelajar_baru.delete',$p->id) }}" class="btn btn-outline-danger" onclick="return confirm('Yakin ?')">Delete</a>
            </td>
          </tr>
        </tbody>
          <?php $i++ ?>
          @endforeach
</div>


@endsection
