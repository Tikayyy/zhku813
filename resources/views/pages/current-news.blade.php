@extends('layouts/main-layout')

@section('title','ЖКУ №813')

@section('main-class','extended-bottom')
@section('main-div-class','image-banner no-main')

@section('content')
    <section>
        <div class="page-path">
            <a href="/page/news" class="page-path-item">← Новости</a>
        </div>

        <div class="justify-center"><h1>{{$news->title_news}}</h1></div>

        {!! $news->text_news !!}

        <div class="news-one-date">{{$news->date_news}}</div>
    </section>
    </main>
@endsection
