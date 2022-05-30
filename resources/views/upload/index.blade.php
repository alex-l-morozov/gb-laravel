@extends('layouts.main')
@section('title') Заказ на получение выгрузки данных @parent @stop
@section('content')
    <div class="row">
        <h2>Заказ на получение выгрузки данных из какого-либо источника</h2>
        @if($errors->any())
            @foreach($errors->all() as $error)
                <x-alert type="danger" :message="$error"></x-alert>
            @endforeach
        @endif

        <form method="post" action="{{ route('upload.save') }}">
            @csrf

            <div class="form-group">
                <label for="title">Имя</label>
                <input type="text" id="title" name="name" class="form-control" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="title">Телефон</label>
                <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone') }}">
            </div>
            <div class="form-group">
                <label for="title">E-mail</label>
                <input type="text" id="email" name="email" class="form-control" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label for="description">Что хотите получить</label>
                <textarea class="form-control" name="description" id="description">{!! old('description') !!}</textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Отправить</button>
        </form>
    </div>
@endsection
