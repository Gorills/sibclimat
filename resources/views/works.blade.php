@extends('layouts.custom')


@section('title', 'Работы')
@section('description', '')
@section('keywords', '')
@section('canonical', '')
@section('og:title', '')
@section('og:description', '')
@section('og:url', '')
@section('twitter:description', '')
@section('twitter:title', '')

@section('content')


<div class="our-works">
    <div class="container">
                <div class="works" id="works">


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

                </div>
    </div>
</div>



@endsection
