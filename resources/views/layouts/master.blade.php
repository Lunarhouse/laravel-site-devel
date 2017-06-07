<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>OrangeLyrics</title>
    <meta name="keywords" content="Orange Blog Theme, free css templates, CSS, HTML" />
    <meta name="description" content="Orange Blog Theme - free CSS template provided by templatemo.com" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" /> <!-- Подключаем стили-->
    <script type="text/javascript" src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
  <!--  <script type="text/javascript" src="{{asset('js/tinymce/tinymce.min.js')}}"></script> --><!-- Подключаем TinyMCE -->
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>



</head>
<body>

<div id="templatemo_wrapper">
    <div id="templatemo_header">

        <div id="header_left">
            <div id="site_title">
                <a href={{route('index')}} target="_parent"><img src={{asset('images/main_logo.png')}} alt="logo" /></a>
            </div> <!-- end of site_title -->
        </div>

        <div id="header_right">

            <div id="templatemo_menu">
                <ul>
                    <li><a href="{{route('index')}}" class="current">Главная</a></li>
                    <li><a href="{{route('about')}}">Контакты</a></li>
                    @if (Auth::check()) <!-- Проверка авторизации -->
                        <li><a href="{{route('post.create')}}">Добавить текст</a></li>
                    @endif
                </ul>
               
            </div>  <!-- end of templatemo_menu -->

        </div>

        <div class="cleaner"></div>

    </div>

    <div id="templatemo_middle"><span class="bg"></span>
        <div id="templatemo_content_wrapper">
            <div id="templatemo_content">

                @if(!empty($title))
                    <div class="description">
                         <h3>{{$title}}</h3>
                    </div>
                @endif

                @if (Session::has('flash_message')) <!-- Выводим блок всплывающих сообщений-->
                    <div class="alert alert_message">{{Session::get('flash_message')}}</div>
                @endif


                @yield('main_content') <!-- Подключаем область контента-->

            </div>
        </div>

        <div id="templatemo_sidebar">

            <div class="one_col">

                <ul class="ads_125">

                </ul>

                <div class="cleaner"></div>
            </div>

            <div class="two_col float_l">

                @include('partials.artists_box') <!-- Подключаем блок списка исполнителей-->


            </div>

            <div class="two_col float_r">

                @include('partials.comments_box') <!-- Подключаем блок последних комментариев-->

            </div>

            <div class="cleaner"></div>

        </div>

        <div class="cleaner"></div>

    </div>
</div>

<div id="up_button">
    <a href="#templatemo_header">Наверх</a> <!-- Кнопка "Наверх"-->
</div>

<div id="templatemo_footer_wrapper">

    <div id="templatemo_footer">
        Copyright © 2016 <a href="http://vk.com/carol_brown">CarolBrown</a> | Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
    </div>
</div>

</body>


</html>