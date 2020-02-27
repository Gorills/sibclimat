@extends('admin.layouts.app_admin')


@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Редактирование акции @endslot
            @slot('parent') Главная @endslot
            @slot('active') Акции @endslot
        @endcomponent

        <hr />


        <form action="{{route('admin.stock.update', $stock)}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="put">
            {{ csrf_field() }}

            @include('admin.stocks.partials.form')

        </form>






    </div>

@endsection
