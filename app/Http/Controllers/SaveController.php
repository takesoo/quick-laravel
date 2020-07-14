<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class SaveController extends Controller
{
    public function create()
    {
        return view('save.create');
    }

    public function store(Request $req)
    {
        $this->validate($req, Book::$rules);
        $book = new Book();
        $book->fill($req->except('_token'))->save();
        return redirect('save/create');
    }

    public function edit($id)
    {
        return view('save/edit', [
            'book'=>Book::findOrFail($id)
        ]);
    }

    public function update(Request $req, $id)
    {
        $book = Book::find($id);
        $book->fill($req->except('_token', '_method'))->save();
        return redirect('hello/list');
    }

    public function show($id)
    {
        $book = Book::find($id);
        return view('save.show', ['book' => $book]);
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect('hello/list');
    }
}
