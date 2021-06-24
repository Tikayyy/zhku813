@extends('layouts/main-layout')

@section('title','ЖКУ №813')

@section('main-class','extended-bottom')
@section('main-div-class','image-banner no-main')

@section('content')
    <section>
        <div class="justify-center"><h1>Новости</h1></div>
        @foreach($news as $new)
            <div class="news-list">
                <div class="news-list-element">
                    <a href="{{ route('current-news', $new->id_news) }}">
                        {{$new->date_news}}:
                        {{$new->title_news}}
                    </a>
                </div>
            </div>
        @endforeach
    </section>
    </main>
@endsection
