<!doctype html>
<html lang="ru">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="{{ URL::asset('css/site.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap&subset=cyrillic" rel="stylesheet">    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')"/>
    <meta name="keywords" content="@yield('keywords')" />
    <link rel="canonical" href="@yield('canonical')"/>
    <meta property="og:locale" content="ru_RU" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('og:title')" />
    <meta property="og:description" content="@yield('og:description')" />
    <meta property="og:url" content="@yield('og:url')" />

    <meta name="theme-color" content="#356797">
    <meta property="og:site_name" content="" />
    <meta property="og:image" content="" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="@yield('twitter:description')" />
    <meta name="twitter:title" content="@yield('twitter:title')" />


</head>
<body>
<header class="header">
    <div class="container">
        <div class="header__inner">
            <a class="header__logo-link" href="#">
                <img src="{{ asset('images/001.png') }}" alt="" class="header__logo">
            </a>
            <nav class="header__nav">
                <a href="{{url('/#about')}}" class="header__link">О компании</a>
                <a href="{{url('/#catalog')}}" class="header__link">Каталог</a>
                <a href="{{url('/works')}}" class="header__link">Наши работы</a>
                <a href="{{url('/contacts')}}" class="header__link">Контакты</a>
            </nav>
            <div class="header__social">


                <div class="header__social-item">
                    <a href="#" class="header__social-icon social-icon-alter">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </a>
                    <p class="header__social-label">Заказать звонок</p>
                </div>

                <div class="toggle-menu" id="menu">
                    <div class="toggle-section">
                        <a href="#" class="menu-btn">
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="header-bottom">


        </div>
    </div>
</header>










@yield('content')









<script>
    $(".menu-btn").click(function(e) {
        e.preventDefault();
        $(this).toggleClass('menu-btn_active');
        $(".header-bottom").toggleClass('header-bottom_active');

    })
    // $(".header__link").click(function(e) {
    //     // e.preventDefault();
    //     $(".menu-btn").removeClass("menu-btn_active");
    //     $(".header").removeClass("header_active");
    // })
    //
    //
    // $("body").on('click', '[href*="#"]', function(e){
    //     var fixed_offset = 60;
    //     $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 1000);
    //     e.preventDefault();
    // });


    $(window).scroll(function() {
        var height = $(window).scrollTop();
        /*Если сделали скролл на 100px задаём новый класс для header*/
        if(height > 500){
            $('header').addClass('header-fixed');
        } else{
            /*Если меньше 100px удаляем класс для header*/
            $('header').removeClass('header-fixed');
        }
    });


    // jQuery(document).ready(function($) {
    //     var url=document.location.href;
    //     $.each($(".header__nav a"),function(){
    //         if(this.href==url){
    //             $(this).addClass('header__link_active');
    //         }
    //     });
    // })(jQuery);
</script>


<style src="{{ URL::asset('js/app.js') }}"></style>
</body>
</html>
