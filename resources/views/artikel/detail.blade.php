@extends('layouts.master')
@section('content')

<div class="card">
  <div class="card-body">
    <h3 class="card-title">Detail Artikel</h3>
    <legend><h4 class="card-subtitle mb-2 text-muted">{{$artikels->judul}}</h4></legend>
    <p class="card-text">slug: {{strtolower($artikels->judul)}}.</p>
    <p class="card-text">{{$artikels->isi}}.</p>
    <a href="#" class="btn btn-info">{{$artikels->tag}}</a>
  </div>
</div>
<a href="{{'/artikel'}}" class="btn btn-sm btn-primary mt-3">Kembali</a>

@endsection