@extends('layouts.main')
@section('title') Главная @parent @stop
@section('content')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">GeekBrains News</h1>
                <p Страница приветствия. Небольшая статическая страница с некоторой информацией о
                   будущем агрегаторе новостей</p>
                <p>
                    <a href="/news" class="btn btn-primary my-2">Все новости</a>
                    <a href="/category" class="btn btn-secondary my-2">Категории новостей</a>
                </p>
            </div>
        </div>
    </section>
@endsection
