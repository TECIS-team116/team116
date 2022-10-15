<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Task;

class ItemController extends Controller
{
    /**
        * 商品一覧
        *
        * @param Request $request
        * @return Response
        */
    public function index(Request $request)
    {
        $items = Item::orderBy('created_at', 'asc')->get();
        return view('items.index', [
            'items' => $items,
        ]);
    }
    public function add(Request $request)
    {
        $user_id = Auth::id();
        return view('items.add',compact('user_id'));
        
    }
    public function edit(Request $request)
    {
        return view('items.edit');
        
    }
    /**
        * タスク登録
        *
        * @param Request $request
        * @return Response
        */
        public function store(Request $request)
        {
            $this->validate($request, [
                'name' => 'required|max:255',
            ]);
    
            // タスク作成
            Item::create([
                'user_id' => 0,
                'name' => $request->name,
                'status' => $request->status,
                'type' => 0,
                'detail' => $request->detail
            ]); 
            return redirect('/items');
        }
        /**
        * タスク削除
        *
        * @param Request $request
        * @param Item $item
        * @return Response
        */
    public function destroy(Request $request, Item $item)
    {
        $item->delete();
        return redirect('/items');
    }
    
}