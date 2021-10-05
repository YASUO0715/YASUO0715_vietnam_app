<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Requests\ItemRequest;
// use Illuminate\Http\Request;



class ItemController extends Controller
{
    public function index()
    {
        $items = Item::simplePaginate(6);
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
        $this->validate($request, Item::$rules);

        if ($file = $request->image_url) {
            $fileName = time() . $file->getClientOriginalName();
            $target_path = public_path('uploads/');
            $file->move($target_path, $fileName);
        } else {
            $fileName = "";
        }

        インスタンスの作成
        $item = new Item;
        // 値の用意
        $item->name = $request->name;
        $item->name_kana = $request->name_kana;
        $item->campany_name = $request->campany_name;
        $item->image_url = $fileName;
        $item->pr = $request->pr;
        $item->price = $request->price;
        // $item->category_id = $request->image_url;
        $item->save();
        // 登録したらindexに戻る
        return redirect('/items');
    }
}



