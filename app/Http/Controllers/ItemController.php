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
    
}