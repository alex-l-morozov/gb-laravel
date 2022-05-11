@extends('layouts.main')
@section('title') Список новостей @parent @stop
@section('content')
        @forelse($newsList as $news)
            <a href="{{ route('news.show', ['id' => $news['id']]) }}">{{ $news['title'] }}</a><br />
            <img src="{{ $news['image'] }}" style="width:200px;"><br />
            <a href="{{ route('news.show', ['id' => $news['id']]) }}">Подробнее</a><br />
            <small class="text-muted"><strong>Автор:</strong> {{ $news['author'] }}</small><br />
            <br />
        @empty
            <h2>Новостей нет!</h2>
        @endforelse
@endsection
