@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="row auth-container">
        <div class="col-md-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('https://t4.ftcdn.net/jpg/05/88/53/93/360_F_588539338_uPcOEHviKdCnUk2yTcQhXc5uAzmBfNb1.jpg') }}" alt="Rendang" class="auth-image">
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="register-header text-center">REGISTER</div>
                    <div class="text-center mb-4">Payakumbuh Kota Rendang</div>
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="nickname">{{ trans('user.nickname') }}</label>
                            <input id="nickname" type="text" class="form-control {{ $errors->has('nickname') ? 'is-invalid' : '' }}" name="nickname" value="{{ old('nickname') }}" required autofocus>
                            @if ($errors->has('nickname'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('nickname') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="name">{{ trans('user.name') }}</label>
                            <input id="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>
                            @if ($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="email">{{ trans('user.email') }}</label>
                            <input id="email" type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="gender_id">{{ trans('user.gender') }}</label>
                            <div>
                                {!! FormField::radios('gender_id', [1 => trans('app.male'), 2 => trans('app.female')], ['label' => false, 'class' => 'form-check-input']) !!}
                            </div>
                            @if ($errors->has('gender_id'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('gender_id') }}
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

                        <div class="form-group">
                            <label for="password-confirm">{{ trans('auth.password_confirmation') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>

                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                            <button type="submit" class="btn btn-primary auth-btn">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><br><br><br><br><br>
@endsection
