@extends('layouts.main')
@section('title') Обратная связь @parent @stop
@section('content')
    <div class="row">
        <h2>Обратная связь</h2>
        @if($errors->any())
            @foreach($errors->all() as $error)
                <x-alert type="danger" :message="$error"></x-alert>
            @endforeach
        @endif

        <form method="post" action="{{ route('feedback.save') }}">
            @csrf

            <div class="form-group">
                <label for="title">Имя</label>
                <input type="text" id="title" name="name" class="form-control" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="description">Комментарий</label>
                <textarea class="form-control" name="description" id="description">{!! old('description') !!}</textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Отправить</button>
        </form>
    </div>
@endsection
