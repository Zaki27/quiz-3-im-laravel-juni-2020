@extends('layouts.master')
@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Artikel</h3>
    </div>
    <form action="/artikel" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Artikel">
            </div>
            <div class="form-group">
                <label for="isi">Isi</label>
                <textarea type="text" class="form-control" id="isi" name="isi" placeholder="Masukkan Isi Artikel"></textarea>
            </div>
            <div class="form-group">
                <label for="tag">Tag</label>
                <input type="text" class="form-control" id="tag" name="tag">
            </div>
            <div class="form-group">
                <label for="users_id">User</label>
                <input type="number" class="form-control" id="user_id" name="user_id">
            </div>
            </div>                      
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection