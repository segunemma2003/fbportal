@extends('layouts.master')
@section('content')
<div class="container-fluid">
                <div class="text-below">
                    <img src="{{ asset('img/logo.png') }}" class="logo">
                </div>
                <div class="row align-items-center wrapper">
                    <div class="col ">
                        <div class="text-below">
                            <h1>BOOST YOUR BUSINESS</h1>
                            <span>with</span>
                            <h3 class="facebook-color">facebook</h3>
                            <p class="index-p"><em><a href="{{URL('/login')}}">Login</a> or <a href='#'>Register</a> to get started in becoming a trainer and booking a session</em></p>
                            <button type="button" class="btn btn-primary index-button index-p">Book session<i class="far fa-arrow-alt-circle-right fa-color"></i></button>
                        </div>
                    </div>
                </div>
            </div>
@endsection