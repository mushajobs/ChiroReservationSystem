@extends('layout')

@section('content')

<div class="card mt-3">
    <div class="card-body text-center">
        <h2 class="h3 card-title text-center my-4">管理者ログイン</h2>
        <div class="card-text">
        <form method="POST" action="{{ route('admin.login') }}">
            @csrf

            <div class="form-group row">
                <label for="email" class="col-md-4">メールアドレス</label>
                <div class="col-md-6">
                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror login_form" name="email" value="{{ old('email') }}" required autocomplete="email" aria-describedby="emailHelp"/>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row my-4">
                <label for="password" class="col-md-4">パスワード</label>
                <div class="col-md-6">
                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror login_form" name="password"/>

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-lg active px-4 mt-2" style="background: #0E8088">ログイン</button>
        </form>
        </div>
    </div>
</div>
@endsection