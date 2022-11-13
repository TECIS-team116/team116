@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">      

                <div class="card-body">
                    <h1 class="text-align-center">商品管理システム</h1>

                    <form class="space" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="dropdown-toggle"><br><label for="email" class="col-md-4 col-form-label text-md-left">{{ __('メールアドレス') }}</label>
                        </div>
                        <div>

            
                            <div class="col-md-6 text-align-center">
                                <input id="email" type="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                         <div><label for="password" class="col-md-4 col-form-label text-md-left">{{ __('パスワード') }}</label>
                        </div>
                        <div>


                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div><br></div>
                        
                        <div class="form-group row mb-0 text-align-center">
                            <div class="col-md-8 offset-md-100">
                                <button type="submit" class="btn btn-primary space-1">
                                   {{ __('ログイン') }}
                                </button>
                         </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
