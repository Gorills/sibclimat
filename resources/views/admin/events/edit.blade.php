@extends('admin.layouts.app_admin')


@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Редактирование новости @endslot
            @slot('parent') Главная @endslot
            @slot('active') Новости @endslot
        @endcomponent

        <hr />


        <form action="{{route('admin.event.update', $event)}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="put">
            {{ csrf_field() }}

            @include('admin.events.partials.form')

        </form>






    </div>

@endsection
