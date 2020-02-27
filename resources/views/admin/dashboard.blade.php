@extends('admin.layouts.app_admin')


@section('content')

<div class="container">
    <h2 class="text-center mb-5">Акции</h2>
    <table class="table table-striped mb-5">
        <thead>
        <tr>
            <th scope="col">id</th>

            <th scope="col">title</th>

            <th class="text-right" scope="col"><a href="{{route('admin.stock.create')}}"><i class="fas fa-plus mr-3"></i></a>Действие</th>        </tr>
        </thead>
        <tbody>
        @forelse($stocks as $stock)
            <tr>
                <th scope="row">{{ $stock->id }}</th>

                <td>{{ $stock->title }}</td>

                <td class="text-right">
                    <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false}" action="{{ route('admin.stock.destroy', $stock) }}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}
                        <a href="{{ URL::to('admin/stock/' . $stock->id . "/edit") }}"><i class="fas fa-pencil-alt mr-3"></i></a>
                        <button type="submit" class="btn"><i class="far fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
            </tr>
        @endforelse
        </tbody>
        <tfoot>
        <tr>
            <td colspan="3">
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

            <th scope="col">title</th>

            <th class="text-right" scope="col"><a href="{{route('admin.event.create')}}"><i class="fas fa-plus mr-3"></i></a>Действие</th>        </tr>
        </thead>
        <tbody>
        @forelse($events as $event)
            <tr>
                <th scope="row">{{ $event->id }}</th>

                <td>{{ $event->title }}</td>

                <td class="text-right">
                    <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false}" action="{{ route('admin.event.destroy', $event) }}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}
                        <a href="{{ URL::to('admin/event/' . $event->id . "/edit") }}"><i class="fas fa-pencil-alt mr-3"></i></a>
                        <button type="submit" class="btn"><i class="far fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
            </tr>
        @endforelse
        </tbody>
        <tfoot>
        <tr>
            <td colspan="3">
                <ul class="pagination text-right">
                    {{ $events->links() }}
                </ul>
            </td>
        </tr>
        </tfoot>
    </table>





    <h2 class="text-center mb-5">Работы</h2>
    <table class="table table-striped mb-5">
        <thead>
        <tr>
            <th scope="col">id</th>

            <th scope="col">title</th>

            <th class="text-right" scope="col"><a href="{{route('admin.work.create')}}"><i class="fas fa-plus mr-3"></i></a>Действие</th>        </tr>
        </thead>
        <tbody>
        @forelse($works as $work)
            <tr>
                <th scope="row">{{ $work->id }}</th>

                <td>{{ $work->title }}</td>

                <td class="text-right">
                    <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false}" action="{{ route('admin.work.destroy', $event) }}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}
                        <a href="{{ URL::to('admin/work/' . $work->id . "/edit") }}"><i class="fas fa-pencil-alt mr-3"></i></a>
                        <button type="submit" class="btn"><i class="far fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
            </tr>
        @endforelse
        </tbody>
        <tfoot>
        <tr>
            <td colspan="3">
                <ul class="pagination text-right">
                    {{ $works->links() }}
                </ul>
            </td>
        </tr>
        </tfoot>
    </table>



</div>
@endsection
