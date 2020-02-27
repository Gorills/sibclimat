@extends('admin.layouts.app_admin')


@section('content')

<div class="container">

    <h2 class="text-center mb-5">Акции</h2>
    <table class="table table-striped mb-5">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">image</th>
            <th scope="col">title</th>
            <th class="text-right" scope="col"><a href="{{route('admin.stock.create')}}"><i class="fas fa-plus mr-3"></i></a>Действие</th>        </tr>
        </thead>
        <tbody>
        @forelse($stocks as $stock)
            <tr>
                <th scope="row">{{ $stock->id }}</th>
                <td>Картинка(потом)</td>
                <td>{{ $stock->title }}</td>
                <td class="text-right">
                    <a href="{{ URL::to('admin/stock/' . $stock->id . "/edit") }}"><i class="fas fa-pencil-alt mr-3"></i></a>
                    <a href=""><i class="far fa-trash-alt"></i></a>
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
                    {{ $stocks->links() }}
                </ul>
            </td>
        </tr>
        </tfoot>
    </table>


    <h2 class="text-center mb-5">Новости</h2>
    <table class="table table-striped mb-5">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">image</th>
            <th scope="col">title</th>
            <th class="text-right" scope="col">Действие</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td class="text-right">
                <a href=""><i class="fas fa-pencil-alt mr-3"></i></a>
                <a href=""><i class="far fa-trash-alt"></i></a>

            </td>
        </tr>
        </tbody>
    </table>

    <h2 class="text-center mb-5">Работы</h2>
    <table class="table table-striped mb-5">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">image</th>
            <th scope="col">title</th>
            <th class="text-right" scope="col">Действие</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td class="text-right">
                <a href=""><i class="fas fa-pencil-alt mr-3"></i></a>
                <a href=""><i class="far fa-trash-alt"></i></a>

            </td>
        </tr>

        </tbody>
    </table>



</div>
@endsection
