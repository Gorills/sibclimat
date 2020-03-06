@extends('admin.layouts.app_admin')


@section('content')

    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Редактирование катогории @endslot
            @slot('parent') Главная @endslot
            @slot('active') Катогории @endslot
        @endcomponent

        <hr />

        <form action="{{route('admin.category.update', $category)}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="put">
            {{ csrf_field() }}

            @include('admin.categories.partials.form')

        </form>

    </div>

@endsection
