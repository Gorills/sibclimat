@extends('admin.layouts.app_admin')


@section('content')

    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Редактирование товара @endslot
            @slot('parent') Главная @endslot
            @slot('active') Товары @endslot
        @endcomponent

        <hr />

        <form action="{{route('admin.product.update', $product)}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="put">
            {{ csrf_field() }}

            @include('admin.products.partials.form')

        </form>

    </div>

@endsection
