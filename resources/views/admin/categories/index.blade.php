@extends('admin.layouts.app_admin')



@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Список категорий@endslot
            @slot('parent') Главная @endslot
            @slot('active') Все категории@endslot

        @endcomponent

        <hr>
        <div class="text-right">
            <a href="{{route('admin.category.create')}}" class="btn btn-primary mb-3"><i class="fas fa-plus mr-3"></i>Содать категорию</a>
        </div>

        <table class="table table-striped mb-5">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">image</th>
                <th scope="col">title</th>

                <th scope="col">Действие</th>
            </tr>
            </thead>
            <tbody>

            @forelse($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>

                        <img style="height: 40px" src="{{ Storage::url($category->image) }}" alt="">

                    </td>
                    <td>{{ $category->title }}</td>


                    <td class="text-right">

                        <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false}" action="{{ route('admin.category.destroy', $category) }}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            {{ csrf_field() }}
                            <a href="{{ route('admin.category.edit', $category) }}" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>
                            <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        </form>


                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center"><h2>Данные отсутствуют</h2></td>
                </tr>

            @endforelse

            </tbody>
            <tfoot>
            <tr>
                <td colspan="4">
                    <ul class="pagination text-right">
                        {{ $categories->links() }}
                    </ul>
                </td>
            </tr>
            </tfoot>

        </table>
    </div>


@endsection
