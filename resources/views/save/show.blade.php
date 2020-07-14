@extends('layouts.base')
@section('title', '書籍情報入力フォーム（詳細）')
@section('main')
<form action="/save/{{ $book->id }}" method="POST">
    @csrf
    @method('DELETE')
    <div class="pl-2 mb-2">
        <span id="isbn">ISBNコード：</span>
        {{ $book->isbn }}
    </div>
    <div class="pl-2 mb-2">
        <span id="title">書名：</span>
        {{ $book->title }}
    </div>
    <div class="pl-2 mb-2">
        <span id="price">価格：</span>
        {{ $book->price }}
    </div>
    <div class="pl-2 mb-2">
        <span id="publisher">出版社：</span>
        {{ $book->publisher }}
    </div>
    <div class="pl-2 mb-2">
        <span id="published">刊行日：</span>
        {{ $book->published }}
    </div>
    <div class="pl-2 mb-2">
        <input type="submit" value="削除">
    </div>
</form>
@endsection