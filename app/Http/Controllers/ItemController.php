<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Requests\ItemRequest;
use Illuminate\Http\Request;




class ItemController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->name;
        $category = $request->category;

        $params = $request->query();
        $items = Item::search($params)->simplepaginate(5);

        $items->appends(compact('name', 'category'));

        return view('items.index', compact('items'));
    }

    public function show(Item $item)
    {
        return view('items.show', compact('item'));
    }

    public function create(Item $item)
    {
        return view('items.create');
    }

    public function store(ItemRequest $request)
    {

        // インスタンスの作成
        $item = new Item;
        // 値の用意
        $item->name = $request->name;
        $item->name_kana = $request->name_kana;
        $item->campany_name = $request->campany_name;
        $item->category_id = $request->category_id;
        $item->image_url = $request->image_url;
        $item->pr = $request->pr;
        $item->price = $request->price;
        // $item->category_id = $request->image_url;
        $item->save();
        // 登録したらindexに戻る
        return redirect('/items');
    }

    public function edit($id)
    {
        $item = Item::find($id);
        return view('items.edit', ['item' => $item]);
    }

    public function update(ItemRequest $request, $id)
    {

        $item = Item::find($id);

        $item->name = $request->name;
        $item->name_kana = $request->name_kana;
        $item->campany_name = $request->campany_name;
        $item->image_url = $request->image_url;
        $item->category_id = $request->category_id;
        $item->pr = $request->pr;
        $item->price = $request->price;
        // 保存
        $item->save();
        // 登録したらindexに戻る
        return redirect('/items');
    }
    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();
        return redirect('/items');
    }
}
