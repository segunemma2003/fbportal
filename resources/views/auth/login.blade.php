@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row align-items-center form-wrap">
                    <!-- <hr class="incline-line"> -->
            <div class="col ">
                <h2 class="form-title text-center">You deserve some accolades.</h2>
                

                    <hr class="hrl">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('warning'))
                        <div class="alert alert-warning">
                            {{ session('warning') }}
                        </div>
                    @endif
                <!-- <div class="card-header">{{ __('Login') }}</div> -->

                <!-- <div class="card-body"> -->
                   
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf


                        <div class="form-group">
                             <label for="email">{{ __('E-Mail Address') }}</label>

                           <!--  <div class="col-md-6"> -->
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                <small class="form-text text-muted">We'll never share your email with anyone else.</small>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            <!-- </div> -->
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>

                            
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                 <a href="{{ route('password.request') }}"><p class="text-right text-muted" style="margin-top: 10px;"><em>forgot password?</em></p></a>
                                    <p style="margin-top: 20px;"><a href="#" class="logina">Not registered yet. Click to register</a></p>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        
                        </div>

                        <!-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
 -->
                        <!-- <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div> -->
                         <button type="submit" class="btn btn-primary login-register-button index-p">Login<i class="far fa-arrow-alt-circle-right fa-color"></i></button>
                    </form>
                </div>
            </div>
        </div>
@endsection
