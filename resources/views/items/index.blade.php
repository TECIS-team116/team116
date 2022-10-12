@extends('layouts.app')
 
@section('content')
 
<!-- タスク一覧表示 -->

<div class="panel panel-default">
    <div class="panel-heading">
        商品一覧画面
    </div>
 <a href="/items/add">商品登録</a>
    <div class="panel-body">
        <table class="table table-striped item-table">
 
            <!-- テーブルヘッダ -->
            <thead>
                <th>ID</th>
                <th>名前</th>
                <th>種別</th>
                <th>詳細</th>
                <th>&nbsp;</th>
            </thead>
 
            <!-- テーブル本体 -->
            <tbody>
                @foreach ($items as $item)
                <tr>
                    <!-- 商品名 -->
                    <td class="table-text">{{ $item->id }}</td>
 
                    <td class="table-text">{{ $item->name }}</td>
                    <td class="table-text">{{ $item->id }}</td>
                    <td class="table-text">{{ $item->id }}</td>
                    <td class="table-text">{{ $item->id }}</td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection