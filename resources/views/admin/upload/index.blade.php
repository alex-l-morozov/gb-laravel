@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Список из формы заказ на получение выгрузки данных</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('admin.upload.create') }}" class="btn btn-sm btn-outline-secondary">Добавить заказ</a>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        @include('inc.messages')
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Имя</th>
                <th scope="col">Телефон</th>
                <th scope="col">E-mail</th>
                <th scope="col">Комментарий</th>
                <th scope="col">Дата добавления</th>
                <th scope="col">Управление</th>
            </tr>
            </thead>
            <tbody>
            @forelse($uploads as $upload)
                <tr>
                    <td>{{ $upload->id }}</td>
                    <td>{{ $upload->name }} </td>
                    <td>{{ $upload->phone }}</td>
                    <td>{{ $upload->email }}</td>
                    <td>{{ $upload->description }}</td>
                    <td>{{ $upload->created_at }}</td>
                    <td><a href="{{ route('admin.upload.edit', ['upload' => $upload->id]) }}" style="font-size: 12px;">Ред.</a> &nbsp;
                        <a href="javascript:;" style="color:red; font-size: 12px;">Уд.</a></td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Записей нет</td>
                </tr>
            @endforelse
            </tbody>
        </table>

        {{ $uploads->links() }}
    </div>
@endsection
