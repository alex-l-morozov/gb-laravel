@extends('layouts.main')
@section('title') Список категорий @parent @stop
@section('content')
        @forelse($categoryList as $category)
            <a href="{{ route('category.show', ['id' => $category['id']]) }}">{{ $category['title'] }}</a><br />
            <img src="{{ $category['image'] }}" style="width:200px;"><br />
            <a href="{{ route('category.show', ['id' => $category['id']]) }}">К новостям</a><br />
            <br />
        @empty
            <h2>Новостей нет!</h2>
        @endforelse
@endsection
