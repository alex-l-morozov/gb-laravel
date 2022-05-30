@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Редактировать обратную связь</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
    </div>

    <div class="table-responsive">
        @include('inc.messages')
        <h3>Форма редактирования обратной связи</h3>

        <form method="post" action="{{ route('admin.feedback.update', ['feedback' => $feedback]) }}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $feedback->name }}">
            </div>

            <div class="form-group">
                <label for="description">Комментарий</label>
                <textarea class="form-control" name="description" id="description">{!! $feedback->description !!}</textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
    </div>
@endsection
