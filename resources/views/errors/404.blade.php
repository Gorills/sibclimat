<link rel="stylesheet" href="{{ asset('css/site.css') }}">


<div class="errors">
    <div class="container">
        <div class="errors__inner">
            <h2 class="errors__title">Ошибка <span class="errors__danger">404</span>! Такой страницы нет на нашем сайте :(</h2>
            <p class="errors__text">Но не расстраивайтесь, у нас еще много разных страниц!</p>
            <nav class="errors__nav">
                <a class="errors__link" href="{{ url('/') }}">Главная</a>
                <a class="errors__link" href="{{ url('/#about') }}">О компании</a>
                <a class="errors__link" href="{{ url('/#catalog') }}">Каталог</a>
                <a class="errors__link" href="{{ url('/contacts') }}">Контакты</a>

            </nav>

        </div>
    </div>
</div>
