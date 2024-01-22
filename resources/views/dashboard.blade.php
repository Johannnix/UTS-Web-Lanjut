@extends('layout.app')
@section('content')
    <div class="dashboard">
        <div class="kotakTambah">
            <a href="{{ route('books.index') }}" class="btn button">
                <i class="bi bi-plus"></i> Tambah Data
            </a>
        </div>
        <div class="dashboardContent">
            <table class="tableData">
                <thead>
                    <tr>
                        <th class="db">No</th>
                        <th class="db">Judul Buku</th>
                        <th class="db gambarBuku">Gambar Buku</th>
                        <th class="db">Penulis</th>
                        <th class="db">Stok</th>
                        <th class="db opsi">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td class="db">{{ $loop->iteration }}</td>
                            <td class="db">{{ $book->judul }}</td>
                            <td class="db"><img src="{{ URL::asset('images/uploads/' . $book->gambar) }}" alt="" class="gambarBuku"></td>
                            <td class="db">{{ $book->penulis }}</td>
                            <td class="db">{{ $book->stok }}</td>
                            <td class="db flex">
                                <a class="btn button" href="{{ route('books.index', $book->id) }}">
                                    <i class="bi bi-pencil-fill jarakKanan"></i>Edit</a> |
                                <form action="{{ route('books.delete', $book->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn button hapus" type="submit">
                                        <i class="bi bi-trash-fill jarakKanan"></i>Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
