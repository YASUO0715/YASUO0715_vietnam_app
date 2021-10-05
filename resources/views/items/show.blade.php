@extends('layouts.main')

@section('title', '詳細画面')

@section('content')
@include('partial.item')
    <table class="table-bordered mb-5 mt-3">
        <colgroup span="1" style="width:200px;background-color:#efefef;"></colgroup>
        <tbody>
            <tr>
                <th>店名</th>
                <td>
                    <p>{{ $item->name }}</p>
                </td>
            </tr>
            <tr>
                <th>店名(日本語)</th>
                <td>
                    <p>{{ $item->name_kana }}</p>
                </td>
            </tr>
            <tr>
                <th>説明</th>
                <td>{{ $item->pr }}</td>
            </tr>
            <tr>
                <th>値段</th>
                <td>{{ $item->price }}VND</td>
            </tr>
        </tbody>
    </table>
    <a href="{{ route('items.index') }}">戻る</a>
@endsection
