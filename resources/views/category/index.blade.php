@extends('layouts.main')
@section('title') Список категорий @parent @stop
@section('content')
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @forelse($categoryList as $category)
            <div class="col">
                <div class="card shadow-sm">
                    <img src="{{ $category['image'] }}">
                    <div class="card-body">
                        <strong>
                            <a href="{{ route('category.show', ['id' => $category['id']]) }}">{{ $category['title'] }}</a>
                        </strong>
                    </div>
                </div>
            </div>
        @empty
            <h2>Категорий нет!</h2>
        @endforelse
    </div>
@endsection
