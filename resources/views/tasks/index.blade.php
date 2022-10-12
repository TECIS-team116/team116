@extends('layouts.app')
 
@section('content')
{{-- Gitにプッシュするためのコメント --}}
 
<!-- 商品一覧表示 -->
@if (count($items) > 0)
<div class="panel panel-default">
    <div class="panel-heading">
        Current Tasks
    </div>
 
    <div class="panel-body">
        <table class="table table-striped item-table">
 
            <!-- テーブルヘッダ -->
            <thead>
                <th>items</th>
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
@endif
@endsection