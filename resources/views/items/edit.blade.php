@extends('layouts.main')

@section('title', '商品更新フォーム')

@section('content')
@if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach($errors->all() as $error)
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
            <label for="name">名前 <input type="text" name="name" value="{{ old('name') }}"></label>
        </p>
        <p>
            <label for="name_kana">名前(日本語) <input type="text" name="name_kana" value="{{ old('name_kana') }}"></label>
        </p>
        <p>
            <label for="campany_name">会社名 <input type="text" name="campany_name"
                    value="{{ old('campany_name') }}"></label>
        </p>
        <p>
            <label for="pr">説明 <textarea type="text" name="pr" value="{{ old('pr') }}"></textarea></label>
        </p>

        <p>
            <label for="price">値段 <input type="text" name="price" value="{{ old('price') }}"></label>
        </p>
        <p>
            <label for="image_url">商品画像URL</label>
            <input type="text" name="image_url" value="{{ old('image_url') }}">
        </p>
        <input type="submit" value="更新">
    </form>
</body>
</html>
@endsection