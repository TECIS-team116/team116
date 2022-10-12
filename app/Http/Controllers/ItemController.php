<?php
 
namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
 
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
        return view('items.add');
        
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
                'name' => $request->name
            ]);
     
            return redirect('/tasks');
        }
        /**
        * タスク削除
        *
        * @param Request $request
        * @param Task $task
        * @return Response
        */
    public function destroy(Request $request, Item $task)
    {
        $task->delete();
        return redirect('/tasks');
    }
    
}