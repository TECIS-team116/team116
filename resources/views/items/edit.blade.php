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
                
            

<?php
        //$_POSTの中身を確認してみる。
       // print_r($_POST);
    ?>
 
 <div class="card-body">
        <form action="" method="post">
        <label for="name" class="col-form-label">名前</label>
        <input id="title" type="text" class="form-control" name="name" value="">
        <label for="name" class="col-form-label">状態</label>
        <input id="title" type="text" class="form-control" name="name" value="">    
        <label for="name" class="col-form-label">詳細</label>
        <input id="title" type="text" class="form-control" name="name" value="">   
        
        <!-- TODO: 編集ボタン -->
        <td>
            <form action="" method="post">
                @csrf
                <button type="submit" class="btn-confirm">
                    編集
                </button>
            </form>
        </td>  

            <!-- TODO: 削除ボタン -->
        <td>
            <form action="" method="post">
                @csrf
                <button type="submit" class="btn-confirm">
                    削除
                </button>
            </form>
        </td>  
</form>
</div>
@endsection