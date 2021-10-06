@extends('layouts.main')

@section('title', '詳細画面')

@section('content')
@include('partial.item')
    <table class="table-bordered mb-5 mt-3">
        <colgroup span="1" style="width:200px;background-color:#efefef;"></colgroup>
        <tbody>
            <tr>
                <th>商品名</th>
                <td>
                    <p>{{ $item->name }}</p>
                </td>
            </tr>
            <tr>
                <th>商品名(日本語)</th>
                <td>
                    <p>{{ $item->name_kana }}</p>
                </td>
            </tr>
            <tr>
                <th>カテゴリー</th>
                <td>
                    <p>{{ $item->category->name }}</p>
                </td>
            </tr>


            <tr>
                <th>説明</th>
                <td>{!! nl2br($item->pr) !!}</td>
            </tr>
            <tr>
                <th>値段</th>
                <td><?php echo number_format($item->price)?>VND</td>
            </tr>
        </tbody>
    </table>
    
    <div class="button-group">
        <!-- 商品のidを元に編集ページへ遷移する -->
        <button class="btn btn-outline-primary" onclick="location.href='/items'">戻る</a>
        <button class="btn btn-outline-primary" onclick="location.href='/items/{{ $item->id }}/edit'">編集する</button>
        <form action="/items/{{ $item->id }}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-outline-danger" onclick="if(!confirm('削除しますか？')){return false}">削除</button>
            
        </form>
    </div>
@endsection
