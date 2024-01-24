<div class="form-group row">
    <label for="inputTitle" class="col-sm-2 col-form-label">title</label>
        <div class="col-sm-10">
        <input type="text" name="title" value="{{ $todo->title }}" class="form-control" id="inputTitle">
        </div>
</div>
<div class="form-group row">
    <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
            <textarea class="form-control" id="description" rows="3" name="description">{{ $todo->description }}</textarea>
        </div>
</div>
<div class="form-group row">
    <div class="col-sm-10">
            @csrf
        <button type="submit" class="btn btn-primary" class="btn btn-primary">保存</button>
        <a href="{{ route('todos.index')}} " class="btn btn-secondary">一覧へ戻る</a>
    </div>
    </div>

