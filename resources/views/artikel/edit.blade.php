@extends('layouts.master')
@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Artikel</h3>
    </div>
    <form action="/artikel/{{$artikels->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" value="{{$artikels->judul}}" id="judul" name="judul" placeholder="Masukkan Judul Artikel">
            </div>
            <div class="form-group">
                <label for="isi">Isi</label>
                <textarea type="text" class="form-control" value="{{$artikels->isi}}" id="isi" name="isi" placeholder="Masukkan Isi Artikel">{{$artikels->isi}}</textarea>
            </div>
            <div class="form-group">
                <label for="tag">Tag</label>
                <input type="text" class="form-control" value="{{$artikels->tag}}" id="tag" name="tag">
            </div>
            <div class="form-group">
                <label for="users_id">User</label>
                <input type="number" class="form-control" value="{{$artikels->user_id}}" id="user_id" name="user_id">
            </div>
            </div>                      
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection