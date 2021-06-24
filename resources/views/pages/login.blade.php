@extends('layouts/main-layout')

@section('title','ЖКУ №813')

@section('main-class','extended-bottom')
@section('main-div-class','image-banner no-main')

@section('content')
    <section>
            <div class="justify-center"><h1>Авторизация </h1></div>

            <div class="justify-center align-center">
                <form action="" class="login-form" method="post">
                    <div class="flex-column">
                        <label for="username">Логин:</label>
                        <input type="text" id="username" name="username" value="">
                    </div>

                    <div class="flex-column">
                        <label for="password">Пароль:</label>
                        <input type="password" id="password" name="password">
                    </div>

                    <div>
                        <input type="submit" value="Вход">
                    </div>
                </form>
            </div>
        </section>
    </main>
@endsection
