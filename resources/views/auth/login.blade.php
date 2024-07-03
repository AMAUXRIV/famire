@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="row auth-container">
        <div class="col-md-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('https://t4.ftcdn.net/jpg/05/88/53/93/360_F_588539338_uPcOEHviKdCnUk2yTcQhXc5uAzmBfNb1.jpg') }}" alt="Rendang" class="auth-image">
        </div>
        <div class="col-md-6">
            <div class="login-header text-center">SELAMAT DATANG 👋</div>
            <div class="text-center mb-4">Silahkan Login Menggunakan Akun Anda</div>
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="email">{{ trans('auth.email') }}</label>
                    <input id="email" type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password">{{ trans('auth.password') }}</label>
                    <input id="password" type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" required>
                    @if ($errors->has('password'))
                        <div class="invalid-feedback">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">Ingat saya</label>
                </div>

                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                    <button type="submit" class="btn btn-success auth-btn">
                        {{ trans('auth.login') }}
                    </button>
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ trans('auth.forgot_password') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
