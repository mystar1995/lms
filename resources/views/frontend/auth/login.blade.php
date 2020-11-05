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
                        <div class="checkbox" style="padding-left: 141px;">
                            <label>
                                {{ Form::checkbox('remember') }} {{ trans('labels.frontend.auth.remember_me') }}
                            </label>
                        </div>
                        <div class="col-md-12" style="display: flex;margin-bottom: 10px;">
                            {{ Form::submit(trans('Sign in'), ['class' => 'ms-Button ms-Button--primary', 'style' => 'color:white; font-weight:bold; margin-top:5px;']) }}
                        </div>
                        <div class="col-md-12" style="display: flex;margin-bottom: 10px;">
                          <div style="margin:auto;">{{ link_to_route('frontend.auth.password.reset', trans('labels.frontend.passwords.forgot_password')) }} </div>
                        </div><!--col-md-6-->
                        
                        <div class="mt-5 text-muted text-center" style="color: #6c757d !important;margin-top: 10px !important"><span>Don't have an account?</span>
                            <span style="font-weight: bold;">{{ link_to_route('frontend.auth.register', trans('Sign Up')) }}</span>
                        </div>
                        <div style="display: flex; margin-top: 20px;margin-left: 28%;width: 220px;">
                            <div class="line1"></div>
                                <span class="lineor" style="margin-left: 5px; padding-right: 5px;"> or </span>
                            <div class="line2"></div>
                        </div>
                        <a href="https://login.microsoftonline.com/" class="btn btn-outline-primary btn-lg btn-block office micro" tabindex="4" style="margin-top: 14px;">
                          <img src="{{ asset('img/small-logo.png') }}" style="width: 15px;margin-right: 2px;margin-bottom: 3px;"> Sign in with Microsoft
                        </a>
                        <a href="https://github.com/login" class="btn btn-outline-primary btn-lg btn-block social_btn git" tabindex="4" style="">
                            <img src="{{ asset('img/git.webp') }}" style="width: 25px;margin-right: 2px;margin-bottom: 0px;"> Sign in with GitHub
                        </a>
                        <a href="https://id.atlassian.com/login/" class="btn btn-outline-primary btn-lg btn-block social_btn atl" tabindex="4" style="">
                         <img src="{{ asset('img/at.png') }}" style="width: 15px;margin-right: 2px;margin-bottom: 3px;"> Sign in with Atlassian
                        </a>
                        <a href="https://accounts.google.com/" class="btn btn-outline-primary btn-lg btn-block social_btn google" tabindex="4" style="color: black !important; border: solid 1px grey">
                            <img src="{{ asset('img/th.jpg') }}" style="width: 15px;margin-right: 2px;margin-bottom: 3px;"> Sign in with Google
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
        background-image: url('{{ asset('img/Background.jpg') }}');
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
    .micro{
    margin-top: 20px; font-size: 14px !important;margin-bottom: 10px;background-color: #309af4; border-color: #309af4;
  }
  .micro:hover{background-color: #1a74c1 !important;}
  .git{
    margin-top: 0px; font-size: 14px !important;margin-bottom: 10px;background-color: #333333;border-color: #333333;
  }
  .git:hover{background-color: #191919 !important;}
  .google{
    margin-top: 0px; font-size: 14px !important;margin-bottom: 10px; 
  }
  .google:hover{ background-color: #fff !important; border: solid 1px #000 !important; }
  .atl{
    margin-top: 0px; font-size: 14px !important;margin-bottom: 10px;background-color: #57af3d;border-color: #57af3d;
  }
  .atl:hover{background-color: #489a2f !important; }
  .btn-outline-primary{
    
    width: 215px !important;margin: auto;border-radius: 0px !important;
    color: white !important;
    font-family:Segoe UI WestEuropean,Segoe UI,-apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,sans-serif !important;
    transition:color .05s ease-in-out,background-color .05s ease-in-out,border-color .05s ease-in-out,box-shadow .05s ease-in-out;
  }
</style>