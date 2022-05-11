@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Изменение новости</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
    </div>
    <form>
        <div class="mb-3">
            <label class="form-label">Название новости</label>
            <input class="form-control" name="name" type="text" value="">
        </div>
        <div class="mb-3">
            <label class="form-label">Краткое описания новости</label>
            <input class="form-control" name="name" type="text" value="">
        </div>
        <div class="mb-3">
            <label class="form-label">Подробное описания новости</label>
            <textarea class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-secondary">Сохранить</button>
    </form>
@endsection
