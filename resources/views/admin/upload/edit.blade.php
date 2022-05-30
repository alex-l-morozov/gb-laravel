@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Редактировать запрос</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
    </div>

    <div class="table-responsive">
        @include('inc.messages')
        <h3>Форма редактирования запроса</h3>

        <form method="post" action="{{ route('admin.upload.update', ['upload' => $upload]) }}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $upload->name }}">
            </div>
            <div class="form-group">
                <label for="title">Телефон</label>
                <input type="text" id="phone" name="phone" class="form-control" value="{{ $upload->phone }}">
            </div>
            <div class="form-group">
                <label for="title">E-mail</label>
                <input type="text" id="email" name="email" class="form-control" value="{{ $upload->email }}">
            </div>
            <div class="form-group">
                <label for="description">Комментарий</label>
                <textarea class="form-control" name="description" id="description">{!! $upload->description !!}</textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
    </div>
@endsection
