<div class="form-group row">
    <label for="inputTitle" class="col-sm-2 col-form-label">Todo</label>
    <div class="col-sm-10">
        <input type="text" name="title" value="{{ $id->title ?? ''}}" class="form-control" id="inpuTitle">
    </div>
</div>

<div class="form-group row">
    <label for="inputDescription" class="col-sm-2 col-form-label">詳細</label>
    <div class="col-sm-10">
        <input type="text" name="description" class="form-control" id="inputDescription">value="{{ $todos->description ?? ''}}"
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-10">
        <button type="submit" class="btn btn-primary" class="btn btn-primary">保存</button>
        <a href="{{ route('todos.index')}} " class="btn btn-secondary">一覧へ戻る</a>
    </div>
</div>


