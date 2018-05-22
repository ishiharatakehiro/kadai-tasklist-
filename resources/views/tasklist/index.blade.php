@extends('layouts.app')

@section('content')

    <h1>id = {{ $tasklist->id }} のメッセージ詳細ページ</h1>

    <p>{{ $tasklist->content }}</p>

    {!! link_to_route('tasklist.edit', 'このメッセージを編集', ['id' => $tasklist->id]) !!}

@endsection