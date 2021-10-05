<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>planet create</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
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
    <h1>新規商品登録</h1>
    <form action="{{ route('items.store') }}" method="post" enctype="multipart/form-data">>
        @csrf
        <p>
            <label for="name">名前 <input type="text" name="name" value="{{ old('name') }}"></label> 
        </p>
        <p>
            <label for="name_kana">名前(日本語) <input type="text" name="name_kana" value="{{ old('name_kana') }}"></label>
        </p>
        <p>
            <label for="campany_name">会社名 <input type="text" name="campany_name" value="{{ old('campany_name') }}"></label>
        </p>
        <p>
            <label for="pr">説明 <input type="text" name="pr" value="{{ old('pr') }}"></label>
        </p>
        
        <p>
            <label for="price">値段 <input type="text" name="price" value="{{ old('price') }}"></label>
        </p>
        <p>
            <label for="image_url">写真 <input type="file" name="image_url" value ="{{ old('image_url') }}"></label>
        </p>
        
        <input type="submit" value="登録">
    </form>
</body>

</html>