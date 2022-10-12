@extends('layouts.app')

@section('content')

<div class="container">
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

                    <a href="{{ route('home') }}">{{ __('商品一覧') }}</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-10 px-0 ">
            <div class="card">              
                <div class="card-body2">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection