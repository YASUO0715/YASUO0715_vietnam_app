@extends('layouts.main')
@section('title', '一覧画面')
@section('content')
    @if (!empty($items))
        <ul>
            @foreach ($items as $item)
                <li class="list-unstyled border mb-5 pl-3 shadow">
                    @include('partial.item')
                </li>
                </li>
            @endforeach
        </ul>
        <div class="d-flex justify-content-center">
            {{ $items->links() }}
        </div>
    @endif
@endsection
