@extends('layouts.app');
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2>Добро пожаловать {{ Auth::user()->name }}</h2>
                <br />
                @if(Auth::user()->avatar)
                    <img src="{{ Auth::user()->avatar }}" style="width:200px;">
                @endif
                <br>
                @if(Auth::user()->is_admin === true)
                    <a href="{{ route('admin.index') }}">Администрирование</a>
                @endif
            </div>
        </div>
    </div>
@endsection
