@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">詳細</div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th class="w-25">タイトル</th>
                                <td>{{ $detail->title }}</td>
                            </tr>
                            <tr>
                            </tr>
                            <tr>
                                <th>詳細</th>
                                <td>{{ $detail->description }}</td>
                            </tr>
                            <tr>
                                <th>作成日</th>
                                <td>{{ $detail->created_at->format('Y年m月d日') }}</td>
                            </tr>
                        </table>
                            <div>
                                <a href="{{ route('todos.index')}} " class="btn btn-secondary">一覧へ戻る</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

