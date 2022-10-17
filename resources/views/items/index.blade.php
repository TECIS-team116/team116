@extends('layouts.app')


@section('content')

<div class="container-fluid">
<div class="row justify-content-center">
        <div class="col-md-2 px-0">
            <div class="card">
                <div class="card-header">{{ __('商品管理システム') }}</div>               
                <div class="card-body2">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('items') }}">{{ __('商品一覧') }}</a>
                </div>
            </div>
        </div>

        <div class="col-md-10 px-0 ">
            <div class="card">              
                <div class="card-body2">
<!-- タスク一覧表示 -->

<div class="panel panel-default">
    <div class="panel-heading">

    </div>
<a href="/items/add"><button type="button" class="btn btn-primary">商品登録</button></a>
    <div class="panel-body">
        <table class="table table-striped item-table">
            <!-- テーブルヘッダ -->
            <thead>
                <th>ID</th>
                <th>名前</th>
                <th>状態</th>
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
                    <td class="table-text">{{ $item->status }}</td>
                    <td class="table-text">{{ $item->detail }}</td>  
                    <td><a href="/items/edit/{{$item->id}}"><button type="button" class="btn btn-primary">編集</button></a>
                <br><form action="{{ url('/items/delete') }}/{{$item->id}}" method="get">
                @csrf
                <button type="submit" class='btn btn-danger'>削除</button>
            
                </form>
            </td>  
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection