@extends('layouts.base')
@section('title', '書籍情報フォーム')
@section('main')
    {{-- @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-danger">{{ $error }}</li>
            @endforeach
        </ul>
    @endif --}}
    <form action="/save/store" method="post">
        @csrf
        <div class="pl-2 mb-2">
            <label for="isbn" id="isbn">ISBNコード：</label>
            <input type="text" name="isbn" id="isbn" size="15" value="{{ old('isbn') }}">
            @if ($errors->get('isbn'))
                @foreach ($errors->get('isbn') as $error)
                    <span class="text-danger">{{ $error }}</span>
                @endforeach
            @endif
        </div>
        <div class="pl-2 mb-2">
            <label for="title" id="title">書名：</label>
            <input type="text" name="title" id="title" size="30" value="{{ old('title') }}">
            @if ($errors->get('title'))
                @foreach ($errors->get('title') as $error)
                    <span class="text-danger">{{ $error }}</span>
                @endforeach
            @endif
        </div>
        <div class="pl-2 mb-2">
            <label for="price" id="price">価格：</label>
            <input type="number" name="price" id="price" size="5" value="{{ old('price', 0) }}">
            @if ($errors->get('price'))
                @foreach ($errors->get('price') as $error)
                    <span class="text-danger">{{ $error }}</span>
                @endforeach
            @endif
        </div>
        <div class="pl-2 mb-2">
            <label for="publisher" id="publisher">出版社：</label>
            <input type="text" name="publisher" id="publisher" size="10" value="{{ old('publisher') }}">
            @if ($errors->get('publisher'))
                @foreach ($errors->get('publisher') as $error)
                    <span class="text-danger">{{ $error }}</span>
                @endforeach
            @endif
        </div>
        <div class="pl-2 mb-2">
            <label for="published" id="published">刊行日：</label>
            <input type="date" name="published" id="published" size="5" value="{{ old('published') }}">
            @if ($errors->get('published'))
                @foreach ($errors->get('published') as $error)
                    <span class="text-danger">{{ $error }}</span>
                @endforeach
            @endif
        </div>
        <div class="pl-2 mb-2">
            <input type="submit" value="送信">
        </div>
    </form>
@endsection