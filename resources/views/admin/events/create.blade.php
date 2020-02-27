@extends('admin.layouts.app_admin')


@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Создание новости @endslot
            @slot('parent') Главная @endslot
            @slot('active') Новости @endslot
        @endcomponent

        <hr />


        <form action="{{route('admin.event.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            @include('admin.events.partials.form')

        </form>






    </div>

@endsection
