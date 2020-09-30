<div style="">
@extends('frontend.layouts.app')

@section('content')

    <div class="row">

        <div class="col-md-6 col-md-offset-3" style="width: 45%;margin-left:27%;">

            <div class="panel panel-default" style="margin-top: 25%;">
                <h3 class="panel-heading ms-Label" style="text-align: center;padding-top: 90px;font-size: 2.75rem; font-weight: bold;border: unset;">License2Code</h3>
                <span class="ms-Label" style="font-size: 16px;color: #34395e;text-align: center;font-weight: bold; margin-bottom: -5px;">Select your sign-in perfer-</span>
                <div class="panel-body">

                    {{ Form::open(['route' => 'frontend.auth.login', 'class' => 'form-horizontal']) }}

                    <div class="form-group">
                        <div class="col-md-12" style="display: flex;">
                            {{ Form::input('email', 'email', null, ['class' => 'ms-TextField-field', 'placeholder' => trans('My username')]) }}
                        </div><!--col-md-6-->
                    </div><!--form-group-->

                    <div class="form-group">
                        <div class="col-md-12" style="display: flex;">
                            {{ Form::input('password', 'password', null, ['class' => 'ms-TextField-field', 'placeholder' => trans('Password')]) }}
                        </div><!--col-md-6-->
                    </div><!--form-group-->

                    <div class="form-group">
                        <div class="col-md-12" style="display: flex;margin-bottom: 30px;">
                            {{ Form::submit(trans('Sign in'), ['class' => 'ms-Button ms-Button--primary', 'style' => 'color:white; font-weight:bold; margin-top:5px;']) }}

                          <!--   {{ link_to_route('frontend.auth.password.reset', trans('labels.frontend.passwords.forgot_password')) }} -->
                        </div><!--col-md-6-->
                        <div class="mt-5 text-muted text-center" style="color: #6c757d !important;margin-top: 38px !important"><span>Don't have an account?</span>
                            <span style="font-weight: bold;">{{ link_to_route('frontend.auth.register', trans('Sign Up')) }}</span>
                        </div>
                        <div style="display: flex; margin-top: 20px;margin-left: 28%;width: 220px;">
                            <div class="line1"></div>
                                <span class="lineor" style="margin-left: 5px; padding-right: 5px;"> or </span>
                            <div class="line2"></div>
                        </div>
                        <a href="https://login.microsoftonline.com/" class="btn btn-outline-primary btn-lg btn-block office" tabindex="4" style=" color: black !important;font-size: 14px !important;height: 42px;height: 42px !important;width: 215px !important;border: 1px solid #c8c8c8;margin: auto;border-radius: 0px; margin-top: 20px ; margin-bottom: 70px;font-weight: bold;">
                          <img src="{{ asset('img/small-logo.png') }}" style="width: 15px;margin-right: 2px;margin-bottom: 3px"> Sign in with Microsoft
                        </a>
                    </div><!--form-group-->

                    {{ Form::close() }}

                    <div class="row text-center">

                    </div>
                </div><!-- panel body -->

            </div><!-- panel -->

        </div><!-- col-md-8 -->

    </div><!-- row -->

@endsection
</div>
<style type="text/css">
    .navbar-default{
        display: none;
    }
    #app-layout{
        background-image: url('{{ asset('img/Background.png') }}');
        background-size: cover;
    }
    .panel{
        border-radius:0px !important;
    }
    .col-md-6 input{
        margin: auto;
        height: 42px;
        width: 215px;
    }
    .line1, .line2 {
        width: 44%;
        height: 2px;
        background-color: #c5c5c5;
        margin-top: 10px;
    }
</style>