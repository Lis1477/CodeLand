<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="@if(isset($obj_2)){{$obj_2->description}}@elseif(isset($obj_1)){{$obj_1->description}}@else{{$obj->description}}@endif">
        <title>@if(isset($obj_2)){{$obj_2->title}}@elseif(isset($obj_1)){{$obj_1->title}}@else{{$obj->title}}@endif</title>
        <link href="{{ asset('favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    </head>
    <body>

        <header>
            <div class="top-line">
                <div class="contant-block">
                    <div class="top-line_content">
                        <div class="top-line_phone-block-left">
                            <div class="top-line_yello-round">
                                <img src="/public/img/smartphone_ico.png">
                            </div>
                            <div>
                                <a href="tel:+375296519149">+375 29 651 91 49 (A1)</a>
                                <a href="tel:+375336495011">+375 33 649 50 11 (MTC)</a>
                            </div>
                        </div>
                        <div class="top-line_logo">
                            <a href="/"><img src="{{ asset('img/codeland_logo.png') }}" title="На Главную страницу"></a>
                        </div>
                        <div class="top-line_phone-block-right">
                            <div class="modal-button" id="open-button">
                                Заказать звонок
                            </div>
                            <div class="top-line_yello-round">
                                <img src="{{ asset('img/phone_ico.png') }}">
                            </div>
                        </div>
                    </div>

                    <div class="menu-line">
                        <nav class="main-menu" id='cssmenu'>
                            <div id="head-mobile"></div> 
                            <div class="button"><span>Меню</span></div> 
                            <ul>
                                <li><a href="{{ asset('') }}"@if (!isset($obj_1)) class="main-menu_active"@endif>Главная</a></li>
                                <li><a href="{{ asset('uslugi') }}"@if (isset($obj_1) And $obj_1->alias == 'uslugi') class="main-menu_active"@endif>Услуги</a></li>
                                <li><a href="{{ asset('portfolio') }}"@if (isset($obj_1) And $obj_1->alias == 'portfolio') class="main-menu_active"@endif>Портфолио</a></li>
                                <li><a href="{{ asset('blog') }}"@if (isset($obj_1) And $obj_1->alias == 'blog') class="main-menu_active"@endif>Блог</a></li>
                                <li><a href="{{ asset('kontakti') }}"@if (isset($obj_1) And $obj_1->alias == 'kontakti') class="main-menu_active"@endif>Контакты</a></li>
                            </ul>
                        </nav>
                    </div>

<!--
                    <img src="{{ asset('img/blue_left.png') }}" class="top-line_left-frame">
                    <img src="{{ asset('img/blue_right.png') }}" class="top-line_right-frame">

-->
                </div>
            </div>
        </header>





        <section>
            <div class="contant-block">
                <div class="url-line">
                    <a href="#" title="Вернуться на шаг назад" onclick="history.back();">Вернуться</a> <img src="/public/img/left_tr.png">
                    @if(isset($obj_1) || isset($obj_2)) <a href="/" title="Главная страница">Главная</a> <img src="/public/img/right_tr.png">@else <strong>Главная</strong>@endif
                    @if(isset($obj_1) && isset($obj_2)) <a href="/{{$obj_1->alias}}" title="Переход на страницу {{$obj_1->name}}">{{$obj_1->name}}</a> <img src="/public/img/right_tr.png">@endif
                    @if(isset($obj_1) && !isset($obj_2)) <strong>{{$obj_1->name}}</strong>@endif
                    @if(isset($obj_2)) <strong>{{$obj_2->name}}</strong>@endif
                </div>
            </div>
        </section>

@yield('content')

        <footer>
            <div class="footer-block contant-block">
                <div class="footer-block_services">
                    <h3><a href="{{ asset('uslugi') }}" target="_blanc">Услуги:</a></h3>
                    <nav>
                        <ul>
                        @foreach ($uslugi as $serv_item)

                            <li><a href="{{ asset('uslugi/'.$serv_item->alias) }}" target="_blanc">{{ $serv_item->name }}</a></li>
                        @endforeach

                        </ul>
                    </nav>
                </div>

                <div class="footer-block_blog">
                    <h3><a href="/blog">Блог:</a></h3>
                    <nav>
                        <ul>
                        @foreach ($post as $post_item)

                            <li><a href="{{ asset('blog/'.$post_item->alias) }}" target="_blanc">{{ $post_item->name }}</a></li>
                        @endforeach

                        </ul>
                    </nav>
                </div>
                
                <div class="footer-block_contacts">
                    <h3><a href="{{ asset('kontakti') }}" target="_blanc">Контакты:</a></h3>
                    <p><a href="tel:+375296519149" class="kontakti_link"><span class="kontakti_prefix">+375 29</span> 651 91 49 <span class="kontakti_prefix">(A1)</span></a></p>
                    <p><a href="tel:+375336495011" class="kontakti_link"><span class="kontakti_prefix">+375 33</span> 649 50 11 <span class="kontakti_prefix">(МТС)</span></a></p>
                    <p><a href="viber:+375296519149" class="kontakti_link"><span class="kontakti_prefix">+375 29</span> 651 91 49 <span class="kontakti_prefix">(Viber)</span></a></p>
                    <p><a href="whatsapp:+375296519149" class="kontakti_link"><span class="kontakti_prefix">+375 29</span> 651 91 49 <span class="kontakti_prefix">(WhatsApp)</span></a></p>
                    <p><a href="skype:Lis1477" class="kontakti_link">Lis1477 <span class="kontakti_prefix">(Skype)</span></a></p>
                </div>

                <div class="footer-block_news-and-cocials">
                    <div class="footer-block_news">
                        <h3>Подпишитесь на новости:</h3>
                        <form method="post">
                            {!!csrf_field()!!}

                            <input type="text" name="name" placeholder="Ваше Имя" value="{{ old('name', '') }}">

                            @error('email')
                            <div class="form_error_string">{!! $message !!}</div>
                            @enderror
                            <input type="email" name="email" placeholder="Ваш email*" value="{{ old('email', '') }}" required>

                            <button type="submit" name="submit">Подтвердить</button>
                        </form>
                    </div>
<!--
                    <div class="footer-block_socials">
                        <h3>Поделитесь в соцсетях</h3>
                        <p>Строка ссылок</p>
                    </div>
-->
                </div>

            </div>
            <div class="footer-block_copyright contant-block">
                <p>© 2020, Александр Лискович</p>
            </div>
        </footer>

@include('includes.callback')

@if(session('note') || $errors->any())
    @include('includes.formNotification')
@endif

<script src="{{ asset('js/main-menu.js') }}"></script>

    </body>
</html>
