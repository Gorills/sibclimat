<div class="form-group">
    <label>Название</label>
    <input name="title" type="text" class="form-control" value="{{ $category->title ?? "" }}" placeholder="Заголовок" required>
</div>

<div class="form-group">
    <label>Slug</label>
    <input name="slug" type="text" class="form-control" value="{{ $category->slug ?? "" }}" placeholder="slug" readonly="">
</div>

<div class="form-group">
    <label>Родительская категория</label>
    <select name="parent_id" class="form-control">
        <option value="0">-- без родительской категории --</option>
        @include('admin.categories.partials.categories', ['categories'=>$categories])
    </select>
</div>

<div class="form-group">
    <label>Описание</label>
    <textarea class="form-control" placeholder="Описание (превью)" name="description">{{ $category->description ?? "" }}</textarea>
</div>

<div class="form-group">
    <label>Полный текст описания</label>
    <textarea class="form-control" placeholder="Описание" name="full_description">{{ $category->full_description ?? "" }}</textarea>
</div>

<div class="form-group">
    <label>Текст для страницы 1</label>
    <textarea class="form-control" placeholder="Сео текст" name="text_one">{{ $category->text_one ?? "" }}</textarea>
</div>

<div class="form-group">
    <label>Текст для страницы 2</label>
    <textarea class="form-control" placeholder="Сео текст" name="text_two">{{ $category->text_two ?? "" }}</textarea>
</div>

<div class="form-group">
    <label>Текст для страницы 3</label>
    <textarea class="form-control" placeholder="Сео текст" name="text_three">{{ $category->text_three ?? "" }}</textarea>
</div>


<div class="form-group">
    <label>Мета заголовок</label>
    <input name="meta_title" type="text" class="form-control" value="{{ $category->meta_title ?? "" }}" placeholder="Мета заголовок" required>
</div>
<div class="form-group">
    <label>Мета описание</label>
    <input name="meta_description" type="text" class="form-control" value="{{ $category->meta_description ?? "" }}" placeholder="Мета описание" required>
</div>



<div class="form-group">
    <label>Фото</label>
    <input class="form-control btn" type="file" name="image" required>
</div>

<div class="text-right">
    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>
