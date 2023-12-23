@extends('layouts.app')

@section('title', 'Edit Artikel')

@section('contents')
    <h1 class="mb-0">Edit Artikel</h1>
    <hr />
    <form action="{{ route('artikels.update', $artikel->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Judul</label>
                <input type="text" name="judul" class="form-control" placeholder="Judul" value="{{ $artikel->judul }}" required>
            </div>
        </div>

        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Kategori</label>
                <input type="text" name="kategori" class="form-control" placeholder="Kategori" value="{{ $artikel->kategori }}" required>
            </div>
        </div>

        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Isi</label>
                <input type="text" name="isi" class="form-control" placeholder="Isi" value="{{ $artikel->isi }}" required>
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
