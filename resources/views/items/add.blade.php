@extends('layouts.app')
 
@section('content')
 
商品登録画面

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

                <a href="page.php?id=1">商品一覧画面</a>
            
            
        </form>
    </body>
    </html>