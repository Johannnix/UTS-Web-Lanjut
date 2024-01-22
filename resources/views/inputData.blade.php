@extends('layout.app')
@section('content')
@if (empty($books))
    <div class="container">
        <div class="kotakInput">
            <h1>Tambah Data</h1>
            <table>
                <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <tr>
                        <td>Judul Buku</td>
                        <td><input type="text" name="judul" id="judul" placeholder="Judul Buku" class="input"></td>
                    </tr>
                    <tr>
                        <td>Gambar Buku</td>
                        <td class="td-btn">
                            <div class="bungkus">
                                <input type="file" name="gambar" id="gambar" placeholder="Gambar Buku" class="input file">
                                <span id="fileName"></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Penulis</td>
                        <td><input type="text" name="penulis" id="penulis" placeholder="Penulis" class="input"></td>
                    </tr>
                    <tr>
                        <td>Stok</td>
                        <td><input type="number" name="stok" id="stok" placeholder="Stok" class="input"></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="td-btn"><button type="submit" class="btn button">Tambah Data</button></td>
                    </tr>
                </form>
            </table>
        </div>
    </div>
@else
    <div class="container">
        <div class="kotakInput">
            <h1>Update Data</h1>
            <table>
                <form action="{{ route('books.update', $books->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <tr>
                        <td>Judul Buku</td>
                        <td><input type="text" name="judul" id="judul" placeholder="Judul Buku" class="input" value="{{ $books->judul }}"></td>
                    </tr>
                    <tr>
                        <td>Gambar Buku</td>
                        <td class="td-btn">
                            <div class="bungkus">
                                <input type="file" name="gambar" id="gambar" placeholder="Gambar Buku" class="input file">
                                <span id="fileName">{{ $books->gambar }}</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Penulis</td>
                        <td><input type="text" name="penulis" id="penulis" placeholder="Penulis" class="input" value="{{ $books->penulis }}"></td>
                    </tr>
                    <tr>
                        <td>Stok</td>
                        <td><input type="number" name="stok" id="stok" placeholder="Stok" class="input" value="{{ $books->stok }}"></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="td-btn"><button type="submit" class="btn button">Update Data</button></td>
                    </tr>
                </form>
            </table>
        </div>
    </div>
@endif
@endsection
