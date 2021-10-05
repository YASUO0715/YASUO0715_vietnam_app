<div class="row">
    <div>
        <img src="{{ url($item->image_url) }}" class="square-img">
    </div>
    <div class="ml-3">
        <div class="mt-3 mb-3">
            <h3>
                <a href="{{ route('items.show', $item->id) }}">{{ $item->name }}</a>
            </h3>
        </div>
        <div>
            <div>{{ $item->name_kana }}</div>
            <div>会社名:{{ $item->campany_name }}</div>
        </div>
    </div>
</div>
