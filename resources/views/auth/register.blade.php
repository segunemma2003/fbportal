@extends('layouts.dashboard.admin.master')

@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
      <div class="card">
        <div class="card-body">
          <h2>Add New Trainer</h2>
          <p class="card-description"><em>Carefully register a trainer</em></p>
                    <form method="POST" aria-label="{{ __('Register') }}">
                        @csrf
                        <div class="form-group">
                                <label>{{ __('First Name') }}</label>
                              <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus>
                              @if ($errors->has('first_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                        </div>

                            <div class="form-group">
                            <label>{{ __('Last Name') }}</label>

                        
                                <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                            <label>{{ __('Phone Number') }}</label>

                        
                                <input id="phone" type="number" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        

                        <div class="form-group">
                            <label>{{ __('E-mail Address') }}</label>

                        
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                        
                          <button type="submit" class="btn btn-primary login-register-button index-p">Register<i class="far fa-arrow-alt-circle-right fa-color"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
