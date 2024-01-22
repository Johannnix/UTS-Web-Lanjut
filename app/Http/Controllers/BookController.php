<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BookController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $books = Book::where('user_id', $user->id)->get();

        return view('dashboard', ['books' => $books]);
    }

    public function index(?int $id = null)
    {
        if ($id) {
            $books = Book::find($id);
            return view('inputData', ['books' => $books]);
        }
        return view('inputData', ['books' => null]);
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $user_id = $user->id;

        $request->validate([
            'judul' => 'required',
            'gambar' => 'required',
            'penulis' => 'required',
            'stok' => 'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('gambar')) {
            $destinationPath = 'images/uploads/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }

        Book::create([
            'judul' => $request->judul,
            'gambar' => $profileImage,
            'penulis' => $request->penulis,
            'stok' => $request->stok,
            'user_id' => $user_id
        ]);
        Alert::success('Hore!', 'Data Berhasil Dimasukkan');
        return redirect()->route('dashboard')->with('message', 'Book successfully created!');
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $user_id = $user->id;

        $request->validate([
            'judul' => 'required',
            'gambar' => 'required',
            'penulis' => 'required',
            'stok' => 'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('gambar')) {
            $destinationPath = 'images/uploads/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }

        Book::where('id', $request->id)->update([
            'judul' => $request->judul,
            'gambar' => $profileImage,
            'penulis' => $request->penulis,
            'stok' => $request->stok,
            'user_id' => $user_id
        ]);
        Alert::success('Hore!', 'Data Berhasil Diupdate');
        return redirect()->route('dashboard')->with('message', 'Book successfully created!');
    }

    public function delete(int $id)
    {
        $book = Book::find($id);
        $book->delete();
        Alert::success('Hore!', 'Data Berhasil Dihapus');
        return redirect()->route('dashboard')->with('message', 'Book successfully deleted!');
    }
}
