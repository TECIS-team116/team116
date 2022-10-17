<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    /**
        *登録画面   
        *@param Request $request
        *@return Response
        *
        */

    public function add(Request $request)
    {
        $user_id = Auth::id();
        return view('items.add',compact('user_id'));
        
    }
    /**
        *編集画面
        * @param Request $request
        * @param Item $item
        * @return Response
        */
    public function edit(Request $request)
    {
        $request->session()->put('item_id', $request->id);
        $items=Item::find($request->id);
        return view('items.edit', compact('items'));
        
    }

    public function update(Request $request)
    {
        $id=$request->session()->get('item_id');
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);
        $item=Item::find($id);
        $item->user_id=Auth::user()->id;
        $item->name=$request->name;
        $item->status=$request->status;
        $item->type=0;
        $item->detail= $request->detail;
        $item->save();
        
        return redirect('/items');
    }

        public function store(Request $request)
        {
            $this->validate($request, [
                'name' => 'required|max:255',
            ]);
            Item::create([
                'user_id' => $request->user_id,
                'name' => $request->name,
                'status' => $request->status,
                'type' => 0,
                'detail' => $request->detail
            ]); 
            return redirect('/items');
        }

        public function delete(Request $request)
    {
        Item::destroy($request->id);
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