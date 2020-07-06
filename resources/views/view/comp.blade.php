@extends('layouts.base')
@section('title', '共通レイアウトの基本')
@section('main')
    @component('components.alert', [ 'type' => 'success', 'alert_title' => 'はじコン' ])
        {{-- @slot('alert_title')
            はじめてのコンポーネント
        @endslot --}}
        コンポーネントはこんな感じです  {{--=>$slot--}}
    @endcomponent
@endsection

@include('components.alert', [
  'type' => 'success',
  'alert_title' => 'include',
  'slot' =>  'slot'
])