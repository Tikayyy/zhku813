<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>ЖКУ №813</title>
        <meta property="og:site_name" content="ЖКУ №813"/>

        <link rel="image_src" href="../../../public/favicon.ico/index.html" />
        <meta name="yandex-verification" content="ea0f4e8dd646ad82" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta charset="windows-1251" />
        <meta name="keywords" content="ЖКУ №813,жку 813,скб 44 жку 813" />
        <meta name="description" content="ООО «ЖКУ №813» осуществляет обслуживание и управление жилыми многоквартирными домами. Выполняет хозяйственно-эксплуатационные функции, связанные..." />
        <link rel="icon" href="public/favicon.ico/index.html" type="image/x-icon">
        <link rel="shortcut icon" href="public/favicon.ico/index.html" type="image/x-icon">

        <link rel="stylesheet" type="text/css" href="{{URL::asset('fonts/fontawesome-free-5.6.1-web/css/all.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/commona28e.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/header.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/footer.css')}}" />
        <meta charset="utf-8">

        <title>@yield("title")</title>
    </head>
    <!--Header-->
    <header>
        <div class="header-wrapper">
            <div class="phone-container">
                Тел. диспетчера: (3412) 32-34-13
            </div>

            <div class="align-center">
                <div class="logo-container">
                    <a href="/" class="not-hover">
                        <img src="{{asset('images/logo.png')}}" alt="">
                    </a>
                </div>
                <div class="links-container">
                    <a href="/">Главная</a>
                    <a href="{{ route('contacts') }}">Контакты</a>
                    <a href="/page/dop-contacts/">Список телефонов <br> городских служб </a>
                </div>
            </div>

            <div class="align-center">
                <div class="links-container">
                    <a href="/login"> <i class="fa fa-sign-in-alt"></i>Личный кабинет</a>
                </div>
            </div>

            <script>
                function lockWindow(e) {
                    document.body.style.overflow = document.body.style.overflow === 'hidden' ? '' : 'hidden';
                    // e.preventDefault();
                }
            </script>

            <div class="bars">
                <label for="barsCheckbox" class="true" onmouseup="lockWindow(event)"><i class="fa fa-bars"></i></label>
                <label for="barsCheckbox" class="false"><i class="fa fa-times"></i></label>
                <input type="checkbox" id="barsCheckbox">
                <div class="hidden-bars">
                    <div>
                        <a href="/">Главная</a>
                    </div>
                    <div>
                        <a href="/page/contacts">Контакты</a>
                    </div>
                    <div class="bars-small-text">
                        <a href="/page/dop-contacts">Список телефонов городских служб </a>
                    </div>
                    <div>
                        <a href="/login"> <i class="fa fa-sign-in-alt"></i>Вход в личный кабинет</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="@yield('main-class')">
        <div class="@yield('main-div-class')"></div>
        <!--Navigation-->
        <section class="menu-section">
            <nav class="main-nav">
                <div>
                    <a href="/meter-form">Отправка показаний</a>

                </div><div>
                    <span>Бланки и документы</span>
                    <div class="hidden-nav">
                        <a href="/page/kak-pereyti">Как перейти под управление ООО &quot;ЖКУ №813&quot;</a>
                    </div>
                </div><div>
                    <span>Раскрытие информации</span>
                    <div class="hidden-nav">
                        <a href="/page/tarif">Тарифы</a>
                        <a href="/page/plani-otchet">Реестр МКД</a>
                        <a href="#">Баланс 2018 ООО ЖКУ 813</a>
                        <a href="#">Баланс 2019 ООО ЖКУ 813</a>
                        <a href="#">Баланс 2020 ООО ЖКУ 813</a>
                        <a href="page/reports">Отчёты</a>
                    </div>
                </div><div>
                    <a href="/page/news">Новости</a>

                </div>
            </nav>
        </section>
    <!--Content-->

    @yield("content")

    <!--Footer-->
    <footer>
        <div class="footer-wrapper">

            <div class="row justify-start">
                <table>
                    <tbody>
                    <tr>
                        <td><a href="#" target="_blank">Положение об обработке ПД</a></td>
                        <td><a href="/page/recriviz">Реквизиты</a></td>
                        <td><a href="#" target="_blank">Декларация соответствия условий труда ООО ЖКУ 813</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </footer>

</html>
