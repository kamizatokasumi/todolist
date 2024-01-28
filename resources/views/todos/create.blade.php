@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">登録</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route ('todos.store')}}">
                            <div class="form-group row">
                            <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" id="inputTitle">
                                    @error('title')
                                    <div class="error">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                <input type="text" name="description" class="form-control" id="inputDescription">
                                    @error('description')
                                    <div class="error">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    @csrf
                                    <button type="submit" class="btn btn-primary" class="btn btn-primary">保存</button>
                                    <a href="{{ route('todos.index')}} " class="btn btn-secondary">一覧へ戻る</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



