<div class="form-group">
    <label>Название</label>
    <input name="title" type="text" class="form-control" value="{{ $work->title ?? "" }}" placeholder="Заголовок" required>
</div>

<div class="form-group">
    <label>Slug</label>
    <input name="slug" type="text" class="form-control" value="{{ $work->slug ?? "" }}" placeholder="slug" readonly="">
</div>

<div class="form-group">
    <label>Описание</label>
    <textarea class="form-control" placeholder="Описание" name="description">{{ $work->description ?? "" }}</textarea>
</div>

<div class="form-group">
    <label>Полный текст акции</label>
    <textarea class="form-control" placeholder="Описание" name="full_description">{{ $work->full_description ?? "" }}</textarea>
</div>

<div class="form-group">
    <label>Фото</label>
    <input class="form-control btn" type="file" name="image" required>
</div>

<div class="text-right">
    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>
