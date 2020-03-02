<div class="form-group">
    <label>Название</label>
    <input name="title" type="text" class="form-control" value="{{ $event->title ?? "" }}" placeholder="Заголовок" required>
</div>

<div class="form-group">
    <label>Slug</label>
    <input name="slug" type="text" class="form-control" value="{{ $event->slug ?? "" }}" placeholder="slug" readonly="">
</div>

<div class="form-group">
    <label>Описание</label>
    <textarea class="form-control" placeholder="Описание" name="description">{{ $event->description ?? "" }}</textarea>
</div>

<div class="form-group">
    <label>Полный текст новости</label>
    <textarea class="form-control" placeholder="Описание" name="full_description">{{ $event->full_description ?? "" }}</textarea>
</div>

<div class="form-group">
    <label>Фото</label>
    <input class="form-control btn" type="file" name="image" required>
</div>

<div class="text-right">
    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>
