@extends('layouts.master')

@section('content')
<div class="container-fluid">
     <div class="row align-items-center form-wrap">
    <!-- <div class="row justify-content-center"> -->
        <div class="col ">
          <!--   <div class="card"> -->
                <!-- <div class="card-header">{{ __('Register') }}</div> -->

                <!-- <div class="card-body"> -->
                <h2 class="form-title text-center">Thousands of SMB's are waiting for you!</h2>
                        <hr class="hrl">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-row">
                            <div class="form-group col-md-6 reg-input">
                            <label>{{ __('First Name') }}</label>

                        
                                <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-6 reg-input">
                            <label>{{ __('Last Name') }}</label>

                        
                                <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-6 reg-input">
                            <label>{{ __('Phone Number') }}</label>

                        
                                <input id="phone" type="number" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        

                        <div class="form-group col-md-6 reg-input">
                            <label>{{ __('E-mail Address') }}</label>

                        
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                        <div class="form-group col-md-6 reg-input">
                            <label>{{ __('Password') }}</label>

                        
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" required autofocus>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                        <div class="form-group col-md-6 reg-input">
                            <label>{{ __('Confirm Password') }}</label>

                        
                                <input id="password" type="password" class="form-control" name="password_confirmation" required autofocus>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                        <!-- <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div> -->

                        <!-- <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div> -->
                          <button type="submit" class="btn btn-primary login-register-button index-p">Register<i class="far fa-arrow-alt-circle-right fa-color"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
