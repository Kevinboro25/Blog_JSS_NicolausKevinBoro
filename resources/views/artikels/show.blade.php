@extends('layouts.app')

@section('title', 'Show Artikel')

@section('contents')
    <h1 class="mb-0">Detail Artikel</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" placeholder="Title" value="{{ $artikel->judul }}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kategori</label>
            <input type="text" name="kategori" class="form-control" placeholder="Kategori" value="{{ $artikel->kategori }}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Isi</label>
            <input type="text" name="isi" class="form-control" placeholder="Isi" value="{{ $artikel->isi }}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Dibuat Pada</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $artikel->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Diperbaharui Pada</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $artikel->updated_at }}" readonly>
        </div>
    </div>
@endsection
