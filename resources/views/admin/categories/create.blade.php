@extends('admin.layouts.app_admin')


@section('content')

    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Создание катогории @endslot
            @slot('parent') Главная @endslot
            @slot('active') Катогории @endslot
        @endcomponent

        <hr />

            <form action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                @include('admin.categories.partials.form')

            </form>

    </div>

@endsection
