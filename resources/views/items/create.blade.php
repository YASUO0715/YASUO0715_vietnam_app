@extends('layouts.main')

@section('title', '店舗情報登録')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/app') }}">

    <body>
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
        <h1>新規商品登録</h1>
        <form action="{{ route('items.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <colgroup span="1" style="width:200px;background-color:#efefef;"></colgroup>
            <p>
                <label for="name">商品名 <br><input type="text" name="name" value="{{ old('name') }}"></label>
            </p>
            <p>
                <label for="name_kana">商品名(日本語) <br><input type="text" name="name_kana"
                        value="{{ old('name_kana') }}"></label>
            </p>
            <p>
                <label for="campany_name">会社名 <br><input type="text" name="campany_name"
                        value="{{ old('campany_name') }}"></label>
            </p>
            <p>
                <label for="pr">説明 <br><textarea type="text" name="pr">{{ old('pr') }}</textarea></label>
            </p>

            <p>
                <label for="price">値段 <br><input type="text" name="price" value="{{ old('price') }}"></label>
            </p>
            <p>
            <p>
                <label for="category_id">カテゴリー <br>
                    <select name="category" id="category">
                        <option value="カテゴリ" selected disabled>カテゴリー</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @if (old('category') == $category->id) selected @endif>{{ $category->name }}</option>
                        @endforeach
                    </select>
            </p>
            <p>

                <label for="image_url">店舗画像</label>
                <input type="file" name="image_url" class="form-control" placeholder="Image" onchange="previewImage(this);"
                    value="{{ old('image_url') }}">
                <img id="preview" style="max-width:200px;">
            </p>
            <button type="submit" class="btn btn-outline-success">登録</button>
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
