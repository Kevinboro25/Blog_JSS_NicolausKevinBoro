@extends('layouts.app')

@section('title', 'Home Artikel')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Artikel</h1>
        <a href="{{ route('artikels.create') }}" class="btn btn-primary">Tambah Artikel</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>No.</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Isi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if($artikel->count() > 0)
                @foreach($artikel as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->judul }}</td>
                        <td class="align-middle">{{ $rs->kategori }}</td>
                        <td class="align-middle">{{ $rs->isi }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('artikels.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('artikels.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('artikels.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Apakah Anda yakin ingin menghapus Artikel?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Artikel Tidak Tersedia</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
