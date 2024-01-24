@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">TodoList</div>
                    <div class="card-body">
                        <div class="mb-3">
                        <a href="{{ route('todos.create')}}" class="btn btn-success">新規登録</a>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>title</th>
                                    <th>作成日</th>
                                    <th>詳細</th>
                                    <th>編集</th>
                                    <th>削除</th>
                                </tr>
                            </thead>
                            @foreach($todo as $todos)
                            <tr>
                                <td> {{ $todos->id }} </td>
                                <td>{{ $todos->title }}</td>
                                <td>{{ $todos->created_at }}</td>
                                <td><a href="{{ route('todos.show',['id'=>$todos->id]) }}" class="btn btn-primary">詳細</a></td>
                                <td><a href="{{ route('todos.edit', ['id'=>$todos->id]) }}" class="btn btn-primary">編集</a></td>
                                <td>
                                    <form action="{{ route('todos.destroy', ['id'=>$todos->id]) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">削除</button>
                                    </form>
                                </td>
                            @endforeach
                        </table>
                        {{ $todo->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


