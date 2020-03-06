@extends('layouts.custom')


@section('title', 'Кондиционеры')
@section('description', '')
@section('keywords', '')
@section('canonical', '')
@section('og:title', '')
@section('og:description', '')
@section('og:url', '')
@section('twitter:description', '')
@section('twitter:title', '')

@section('content')
<section class="posadochnaya">
    <div class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/kondicionery') }}">Кондиционеры</a></li>
                <li class="breadcrumb-item active" aria-current="page">Настенные сплит-системы</li>
            </ol>
        </nav>


        <div class="posadochnaya__inner">
            <h1 class="posadochnaya__title">Настенные сплит системы</h1>
            <p class="posadochnaya__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus fuga fugiat itaque quas sapiente sunt ut? Aut, consectetur eius expedita modi molestiae mollitia officiis quod sunt unde. Dolore odio, qui?</p>


        </div>
    </div>
</section>

<section class="section-opt">
    <div class="container">
        <div class="section-opt__inner">
            <h2 class="section-opt__title">Заголовок для текста</h2>
            <p class="section-opt__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto cumque dolores doloribus est
                facilis iure nisi numquam officia officiis pariatur possimus quis repellat repellendus sed similique vel veritatis,
                voluptas voluptatum?</p>
        </div>
    </div>
</section>





@endsection
