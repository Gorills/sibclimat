@extends('layouts.custom')


@section('title', 'Главная')
@section('description', '')
@section('keywords', '')
@section('canonical', '')
@section('og:title', '')
@section('og:description', '')
@section('og:url', '')
@section('twitter:description', '')
@section('twitter:title', '')

@section('content')


<div class="slick">
    @foreach($stocks as $stock)
        <div class="slider">
            <div class="slider__bcg">
                <img class="slider__image" src="{{ Storage::url($stock->image) }}" alt="">
                <div class="slider__inner">
                    <h2 class="slider__title">{{ $stock->title }}</h2>
                    <div class="slider__text">{{ $stock->description }}</div>
                    <a href="#" class="slider__btn btn btn__accent">Подробнее</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

    <section class="catalog" id="catalog">
        <div class="container">
            <div class="catalog__inner">
                {{--            <h2 class="catalog__title">Каталог</h2>--}}
                <div class="catalog__grid">
                    <a href="#" class="catalog__item">
                        <div class="catalog__img-block">
                            <img src="{{ asset('images/uslugi/slide-1.jpg') }}" alt="" class="catalog__img">
                        </div>

                        <div class="catalog__text-block">
                            <h3 class="catalog__item-title">Кондиционеры</h3>
                            <p class="catalog__item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad bquam pariatur perspiciatis porro quia quibusdam quod, reiciendis sunt unde vero!</p>
                            <p class="catalog__btn btn btn__accent">Подробнее</p>
                        </div>
                    </a>
                    <a href="#" class="catalog__item">
                        <div class="catalog__img-block">
                            <img src="{{ asset('images/uslugi/slide-1.jpg') }}" alt="" class="catalog__img">
                        </div>

                        <div class="catalog__text-block">
                            <h3 class="catalog__item-title">Вентиляция</h3>
                            <p class="catalog__item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad bquam pariatur perspiciatis porro quia quibusdam quod, reiciendis sunt unde vero!</p>
                            <p class="catalog__btn btn btn__accent">Подробнее</p>
                        </div>
                    </a>
                    <a href="#" class="catalog__item">
                        <div class="catalog__img-block">
                            <img src="{{ asset('images/uslugi/slide-1.jpg') }}" alt="" class="catalog__img">
                        </div>

                        <div class="catalog__text-block">
                            <h3 class="catalog__item-title">Тепловое оборудование</h3>
                            <p class="catalog__item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad bquam pariatur perspiciatis porro quia quibusdam quod, reiciendis sunt unde vero!</p>
                            <p class="catalog__btn btn btn__accent">Подробнее</p>
                        </div>
                    </a>
                    <a href="#" class="catalog__item">
                        <div class="catalog__img-block">
                            <img src="{{ asset('images/uslugi/slide-1.jpg') }}" alt="" class="catalog__img">
                        </div>

                        <div class="catalog__text-block">
                            <h3 class="catalog__item-title">Климатические системы</h3>
                            <p class="catalog__item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad bquam pariatur perspiciatis porro quia quibusdam quod, reiciendis sunt unde vero!</p>
                            <p class="catalog__btn btn btn__accent">Подробнее</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="section">
        <div class="container">
            <div class="section__inner">
                <h2 class="section__titile">О компании</h2>
                <p class="section__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis culpa doloremque error eveniet expedita explicabo facere id, ipsa magnam minus molestias natus numquam officia provident recusandae suscipit, tempora totam voluptas!</p>
                <p class="section__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis culpa doloremque error eveniet expedita explicabo facere id, ipsa magnam minus molestias natus numquam officia provident recusandae suscipit, tempora totam voluptas!</p>
                <p class="section__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis culpa doloremque error eveniet expedita explicabo facere id, ipsa magnam minus molestias natus numquam officia provident recusandae suscipit, tempora totam voluptas!</p>

                <div class="works" id="works">
                    <h3 class="works__title">Наши работы</h3>

                    <div class="works__grid">


                    @foreach($works as $work)
                        <div class="works__item">
                            <div class="works__img-wrapper">
                                <img class="works__img" src="{{ Storage::url($work->image) }}" alt="">
                            </div>
                            <h4 class="works__item-title">{{ $work->title }}</h4>
                            <p class="works__item-text">{{ $work->description }}</p>
                        </div>
                    @endforeach



                    </div>
{{--                    {{ $works->links() }}--}}
                    <div class="works__btn">
                        <a class="btn btn__accent" href="{{ url('/works') }}">Все работы</a>
                    </div>
                </div>

            </div>
        </div>
    </section>



@endsection
