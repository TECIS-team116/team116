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
        * @return Response
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
        return view('items.edit');
        
    }
        public function store(Request $request)
        {
            $this->validate($request, [
                'name' => 'required|max:255',
            ]);
            Item::create([
                'user_id' => 0,
                'name' => $request->name,
                'status' => $request->status,
                'type' => 0,
                'detail' => $request->detail
            ]); 
            return redirect('/items');
        }

        public function getEdit($id)
        {
            $user = $this->user->selectUserFindById($id);
            return view('users.edit', compact('user'));
        }
        public function postEdit($id, Request $request)
    {
        // フォームから渡されたデータの取得
        $user = $request->post();
        
        // DBへ更新依頼
        $this->user->updateUserFindById($user);

        // 再度編集画面へリダイレクト
        return redirect()->route('users.edit', ['id' => $id]);
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
        $item = Item::find($);
        $item->delete();
        return redirect('/items');
    }
}    