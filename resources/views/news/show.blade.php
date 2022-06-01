@extends('layouts.main')
@section('content')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">{{ $news->title }}</h1>
            </div>
        </div>
    </section>
    <div class="news">
        <img src="{{$news->image}}">
        <br>
        <p>Автор: <em>{{ $news->author }}</em></p>
        <p>{!! $news->description !!}</p>
    </div>
@endsection
