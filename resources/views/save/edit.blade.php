@extends('layouts.base')
@section('title', '書籍情報入力フォーム（編集）')
@section('main')
<form action="/save/{{ $book->id }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="pl-2 mb-2">
        <label for="isbn" id="isbn">ISBNコード：</label>
    <input type="text" name="isbn" id="isbn" size="15" value="{{ old('isbn', $book->isbn) }}">
    </div>
    <div class="pl-2 mb-2">
        <label for="title" id="title">書名：</label>
    <input type="text" name="title" id="title" size="30" value="{{ old('title', $book->title) }}">
    </div>
    <div class="pl-2 mb-2">
        <label for="price" id="price">価格：</label>
    <input type="number" name="price" id="price" size="5" value="{{ old('price', $book->price) }}">
    </div>
    <div class="pl-2 mb-2">
        <label for="publisher" id="publisher">出版社：</label>
    <input type="text" name="publisher" id="publisher" size="10" value="{{ old('publisher', $book->publisher) }}">
    </div>
    <div class="pl-2 mb-2">
        <label for="published" id="published">刊行日：</label>
    <input type="date" name="published" id="published" size="5" value="{{ old('published', $book->published) }}">
    </div>
    <div class="pl-2 mb-2">
        <input type="submit" value="更新">
    </div>
</form>
@endsection