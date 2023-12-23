@extends('layouts.app')

@section('judul', 'Create Artikel')

@section('contents')
    <h1 class="mb-0">Add Artikel</h1>
    <hr />
    <form action="{{ route('artikels.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="judul" class="form-control" placeholder="Judul" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <input type="text" name="kategori" class="form-control" placeholder="Kategori" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <input type="text" name="isi" class="form-control" placeholder="Isi" required>
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
