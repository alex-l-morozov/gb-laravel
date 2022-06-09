@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Редактировать пользователя</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
    </div>

    <div class="table-responsive">
        @include('inc.messages')
        <h3>Форма редактирования пользователя</h3>

        <form method="post" action="{{ route('admin.users.update', ['user' => $user]) }}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}">
            </div>
            <div class="form-group">
                <label for="email">Имя</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}">
            </div>
            <div class="form-group">
                <label for="is_admin">Администратор</label>
                <select name="is_admin" class="form-select" id="is_admin">
                    <option value="0"@if(!$user->is_admin) selected @endif>Нет</option>
                    <option value="1"@if($user->is_admin) selected @endif>Да</option>
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
    </div>
@endsection
