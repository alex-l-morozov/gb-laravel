@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Изменить категорию</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
    </div>

    <form>
        <div class="mb-3">
            <label class="form-label">Название</label>
            <input class="form-control" name="name" type="text" value="">
        </div>
        <button type="submit" class="btn btn-secondary">Сохранить</button>
    </form>
@endsection
