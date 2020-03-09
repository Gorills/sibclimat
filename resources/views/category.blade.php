@extends('layouts.custom')


@section('title', $category->meta_title . " - Сибклимат Томск")
@section('description', $category->meta_description)
@section('keywords', '')
@section('canonical', '')
@section('og:title', '')
@section('og:description', '')
@section('og:url', '')
@section('twitter:description', $category->meta_description)
@section('twitter:title', $category->meta_title)

@section('content')
    <section class="posadochnaya">
        <div class="container">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Главная</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $category->title }}</li>
                </ol>
            </nav>


            <div class="posadochnaya__inner">
                <h1 class="posadochnaya__title">{{ $category->title }}</h1>
                <p class="posadochnaya__text">{{ $category->description }}</p>
                <div class="posadochnaya__grid">





                    <a href="{{ url('/kondicionery/nastennye-split-sistemy') }}" class="posadochnaya__item">
                        <img class="posadochnaya__img" src="{{asset('images/uslugi/slide-1.jpg')}}" alt="">
                        <div class="posadochnaya__block">
                            <h3 class="posadochnaya__subtitle">Настенные сплит системы</h3>
                            {{--                        <p class="posadochnaya__btn btn btn__accent">Подробнее</p>--}}
                        </div>
                    </a>

{{--                    <a href="#" class="posadochnaya__item">--}}
{{--                        <img class="posadochnaya__img" src="{{asset('images/uslugi/slide-1.jpg')}}" alt="">--}}
{{--                        <div class="posadochnaya__block">--}}
{{--                            <h3 class="posadochnaya__subtitle">Напольные кондиционеры</h3>--}}
{{--                            --}}{{--                        <p class="posadochnaya__btn btn btn__accent">Подробнее</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a href="#" class="posadochnaya__item">--}}
{{--                        <img class="posadochnaya__img" src="{{asset('images/uslugi/slide-1.jpg')}}" alt="">--}}
{{--                        <div class="posadochnaya__block">--}}
{{--                            <h3 class="posadochnaya__subtitle">Напольные кондиционеры</h3>--}}
{{--                            --}}{{--                        <p class="posadochnaya__btn btn btn__accent">Подробнее</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a href="#" class="posadochnaya__item">--}}
{{--                        <img class="posadochnaya__img" src="{{asset('images/uslugi/slide-1.jpg')}}" alt="">--}}
{{--                        <div class="posadochnaya__block">--}}
{{--                            <h3 class="posadochnaya__subtitle">Напольные кондиционеры</h3>--}}
{{--                            --}}{{--                        <p class="posadochnaya__btn btn btn__accent">Подробнее</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a href="#" class="posadochnaya__item">--}}
{{--                        <img class="posadochnaya__img" src="{{asset('images/uslugi/slide-1.jpg')}}" alt="">--}}
{{--                        <div class="posadochnaya__block">--}}
{{--                            <h3 class="posadochnaya__subtitle">Напольные кондиционеры</h3>--}}
{{--                            --}}{{--                        <p class="posadochnaya__btn btn btn__accent">Подробнее</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a href="#" class="posadochnaya__item">--}}
{{--                        <img class="posadochnaya__img" src="{{asset('images/uslugi/slide-1.jpg')}}" alt="">--}}
{{--                        <div class="posadochnaya__block">--}}
{{--                            <h3 class="posadochnaya__subtitle">Напольные кондиционеры</h3>--}}
{{--                            --}}{{--                        <p class="posadochnaya__btn btn btn__accent">Подробнее</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}

                </div>


            </div>
        </div>
    </section>

    <section class="section-opt">
        <div class="container">
            <div class="section-opt__inner">
                <h2 class="section-opt__title">Заголовок для текста</h2>

                <p class="section-opt__text">{{ $category->text_one }}</p>

                <p class="section-opt__text">{{ $category->text_two }}</p>

                <p class="section-opt__text">{{ $category->text_three }}</p>


            </div>
        </div>
    </section>





@endsection