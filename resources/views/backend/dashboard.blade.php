@extends('backend.layouts.app')

@section('page-header')
    <h1>
        <small>{{ trans('strings.backend.dashboard.title') }}</small>
    </h1>
@endsection

@section('content')
    <div class="docs-DialogExample-lgHeader">
      <div class="ms-Dialog ms-Dialog--lgHeader" style="width: 50%;padding: 0">
        <div class="ms-Dialog-actions" style="margin-top: 13px;margin-right:8px">
          <button class="ms-Dialog-action" style="border:none; background-color: unset;">
            <span class="ms-Button-label">Skip<i class="fa fa-angle-right pull-right" style="margin-right: 15px; font-size: 20px;"></i></span> 
          </button>
        </div>        
        <div>
          <h1 style="text-align: center;">Welcome</h1>
          <p style="text-align: center;font-size:21px;margin: 0;">Discover what License2Code</p>
          <p style="text-align: center;font-size:21px;">can do for you!</p>
        </div>
        <img src="{{ asset('img/welcome.png') }}" style="width: 100%;">
      <button class="ms-Button docs-DialogExample-button" style="display: none;">Open Dialog</button>
    </div>


   
@endsection



