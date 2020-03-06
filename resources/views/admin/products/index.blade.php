@extends('admin.layouts.app_admin')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Список товаров@endslot
            @slot('parent') Главная @endslot
            @slot('active') Все товары@endslot

        @endcomponent
        <hr>
        <div class="text-right">
            <a href="{{route('admin.product.create')}}" class="btn btn-primary mb-3"><i class="fas fa-plus mr-3"></i>Добавить товар</a>
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

            @forelse($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>

                        <img style="height: 40px" src="{{ Storage::url($product->image) }}" alt="">

                    </td>
                    <td>{{ $product->title }}</td>


                    <td class="text-right">

                        <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false}" action="{{ route('admin.product.destroy', $product) }}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            {{ csrf_field() }}
                            <a href="{{ route('admin.product.edit', $product) }}" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>
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
                        {{ $products->links() }}
                    </ul>
                </td>
            </tr>
            </tfoot>

        </table>
    </div>


@endsection
