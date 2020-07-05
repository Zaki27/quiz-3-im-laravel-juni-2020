@extends('layouts.master')
@section('content')

<div class="mt-3 mb-3 ">
<a href="/artikel/create" class="btn btn-primary">Tambah Artikel</a>
</div>
<table class="table table-hover table-bordered table-striped">
  <thead class="thead-dark">
    <tr style="text-align:center">
      <th>Id</th>
      <th>Judul</th>
      <th>Isi</th>
      <th style="width:175px;">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($artikels as $key => $artikel)
    <tr>
      <th>{{$key+1}}</th>
      <td>{{$artikel->judul}}</td>
      <td>{{$artikel->isi}}</td>
      <td>
        <a href="/artikel/{{$artikel->id}}" class="btn btn-sm btn-info">Detail</a>
        <a href="/artikel/{{$artikel->id}}/edit" class="btn btn-sm btn-primary">Edit</a>
        <form action="/artikel/{{$artikel->id}}" method="post" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
        </form>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush