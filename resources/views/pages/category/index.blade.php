@extends('templates.main')
@section('main')

    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Категория</th>
                <th scope="col">Кол-во</th>
                <th scope="col">Последнее обновление</th>
                <th scope="col">Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$category->name}}</td>
                    <td>-</td>
                    <td>{{$category->updated_at}}</td>
                    <td><a href="#">
                            <button class="btn btn-success btn-sm"><i class="fa fa-eye"></i> Смотреть</button>
                        </a>
                        <a href="#">
                            <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Изменить</button>
                        </a>
                        <a href="#">
                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash-alt"></i> Удалить</button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
