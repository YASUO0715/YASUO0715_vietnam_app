@extends('layouts.main')

@section('title', '商品更新フォーム')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/app') }}">
    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>商品更新フォーム</h1>
    <!-- 更新先はitemsのidにしないと増える php artisan rote:listで確認① -->
    <form action="/items/{{ $item->id }}" method="post" enctype="multipart/form-data">
        @csrf
        <!-- formタグはPUTやDELETEをサポートしていないため, @ methodで指定する必要がある -->
        @method('PATCH')
        <p>
            <label for="name">商品名 <br> <input type="text" name="name" value="{{ old('name', $item->name) }}"></label>
        </p>
        <p>
            <label for="name_kana">商品目(日本語) <br><input type="text" name="name_kana"
                    value="{{ old('name_kana', $item->name_kana) }}"></label>
        </p>
        <p>
            <label for="campany_name">会社名<br> <input type="text" name="campany_name"
                    value="{{ old('campany_name', $item->campany_name) }}"></label>
        </p>
        <p>
            <label for="pr">説明 <br><textarea type="text" name="pr"
                    value="{{ old('pr', $item->pr) }}">{{ old('pr', $item->pr) }}</textarea></label>
        </p>

        <p>
            <label for="price">値段 <br><input type="text" name="price" value="{{ old('price', $item->price) }}"></label>
        </p>

        <p>
            <label for="category_id">カテゴリ <br>
                <select name="category" id="category">
                    <option value="カテゴリ" selected disabled>カテゴリー</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if (old('category') == $category->id) selected @endif>{{ $category->name }}</option>
                    @endforeach
                </select>
        </p>

        <p>
            <label for="image_url">画像 </label><br>
            <input type="file" name="image_url" class="form-control" placeholder="Image" onchange="previewImage(this);"
                value="{{ old('image', Storage::disk('public')->url($item->image_url)) }}">
            <img id="preview" style="max-width:200px;" src="   @if (!empty($item->image_url))
            {{ Storage::disk('public')->url($item->image_url) }}
            @endif">
        </p>
        <button type="submit" class="btn btn-outline-success"> 更新 </button>
    </form>

    <script>
        function previewImage(obj) {
            var fileReader = new FileReader();
            fileReader.onload = (function() {
                document.getElementById('preview').src = fileReader.result;
            });
            fileReader.readAsDataURL(obj.files[0]);
        }
    </script>


@endsection
