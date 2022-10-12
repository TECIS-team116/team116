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
                <th>商品名</th>
                <th>種別</th>
                <th>価格</th>
                <th>&nbsp;</th>
            </thead>
 
            <!-- テーブル本体 -->
            <tbody>
                @foreach ($items as $item)
                <tr>
                    <!-- 商品名 -->
                    <td class="table-text">
                        <div>{{ $item->name }}</div>
                    </td>
 
                    <td>
                        <!-- TODO: 削除ボタン -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection