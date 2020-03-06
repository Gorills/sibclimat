@extends('admin.layouts.app_admin')


@section('content')

    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Создание товара @endslot
            @slot('parent') Главная @endslot
            @slot('active') Товары @endslot
        @endcomponent

        <hr />

        <form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            @include('admin.products.partials.form')

        </form>

    </div>

@endsection
