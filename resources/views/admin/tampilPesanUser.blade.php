@extends('admin.app')

@section('content')


<div class="">
    <h2>Pesan dari user</h2>

    <table class="table table-responsive-lg table-responsive-md table-hover table-striped">
        <thead class="bg-secondary text-white">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">No Telepon</th>
            <th scope="col">Pesan</th>
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
          </tr>
        </tbody>
          <?php $i++ ?>
          @endforeach
</div>






@endsection
