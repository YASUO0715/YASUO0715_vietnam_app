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
    <form action="/items/{{ $item->id }}" method="post">
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
            <label for="category_id">カテゴリーID <br><input type="text" name="category_id"
                    value="{{ old('category_id',$category_id->category_id) }}"></label>
        </p>

        <p>
            <label for="image_url">商品画像URL </label><br>
            <input type="text" name="image_url" value="{{ old('image_url', $item->image_url) }}">
        </p>
        <button type="submit" class="btn btn-outline-success"> 更新 </button>
    </form>
    </body>

    </html>
@endsection
