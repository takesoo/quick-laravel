<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Illuminate\Support\Facades\DB;

class RecordController extends Controller
{
    public function find()
    {
        return Book::find(1)->title;
    }

    public function where()
    {
        $result = Book::select('title', 'price', 'publisher')
            ->orderBy('price', 'desc')
            ->get();
        return view('hello.list', ['records' => $result]);
    }

    public function hasmany()
    {
        // DB::enableQueryLog();
        $result = Book::find(1);
        // dd(DB::getQueryLog());
        return view('record.hasmany', ['book' => $result]);
    }

}

