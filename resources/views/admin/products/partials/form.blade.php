<div class="form-group">
    <label>Название</label>
    <input name="title" type="text" class="form-control" value="{{ $product->title ?? "" }}" placeholder="Заголовок" required>
</div>

<div class="form-group">
    <label>Родительская категория</label>
    <select name="categories[]" class="form-control">
        @include('admin.products.partials.categories', ['categories'=>$categories])
    </select>
</div>

<div class="form-group">
    <label>Описание</label>
    <textarea class="form-control" placeholder="Описание (превью)" name="description">{{ $product->description ?? "" }}</textarea>
</div>

<div class="form-group">
    <label>Цена</label>
    <input name="price" type="text" class="form-control" value="{{ $product->price ?? "" }}" placeholder="Цена" required>
</div>


<div class="form-group">
    <label>Фото</label>
    <input class="form-control btn" type="file" name="image" required>
</div>

<div class="text-right">
    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>
