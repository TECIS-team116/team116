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


<?php
        //$_POSTの中身を確認してみる。
        print_r($_POST);
    ?>
 
    <!DOCTYPE html>
    <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>商品登録画面</title>
    </head>
    <body>
        <form action="" method="post">
            <p>名前
                <input type="text" name="name"></p>
            <p>種別
                <input type="text" name="name"></p>
            <p>詳細
                <input type="text" name="name"></p>
            
                <p><input type="submit" name="btn_confirm" value="登録"></p>

                
            
            
        </form>
    </body>
    </html>