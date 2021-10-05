@extends('layouts.main')

@section('title', '店舗情報登録')

@section('content')

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
            <table class="table-bordered mb-5 mt-3">
                <colgroup span="1" style="width:200px;background-color:#efefef;"></colgroup>
                <p>
                    <label for="name">名前 <input type="text" name="name" value="{{ old('name') }}"></label>
                </p>
                <p>
                    <label for="name_kana">名前(日本語) <input type="text" name="name_kana"
                            value="{{ old('name_kana') }}"></label>
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
                <input type="submit" value="登録">
            </table>
        </form>
    </body>

    </html>
@endsection
