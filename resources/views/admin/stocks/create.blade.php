@extends('admin.layouts.app_admin')


@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Создание акции @endslot
            @slot('parent') Главная @endslot
            @slot('active') Акции @endslot
        @endcomponent

    <hr />


            <form action="{{route('admin.stock.store')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                @include('admin.stocks.partials.form')

            </form>






    </div>

@endsection
