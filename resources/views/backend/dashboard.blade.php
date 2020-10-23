@extends('backend.layouts.app')

@section('page-header')
    <h1>
        <small>{{ trans('strings.backend.dashboard.title') }}</small>
    </h1>
@endsection

@section('content')
    <div class="docs-DialogExample-lgHeader">
      <div class="ms-Dialog ms-Dialog--lgHeader">
        <div class="ms-Dialog-title"></div>
        <div class="ms-Dialog-content">
             <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ trans('history.backend.recent_history') }}</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div><!-- /.box tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                    {!! history()->render() !!}
                </div><!-- /.box-body -->
            </div><!--box box-info-->
        </div>
        <div class="ms-Dialog-actions">
          <button class="ms-Button ms-Dialog-action ms-Button--primary">
            <span class="ms-Button-label">Cancel</span> 
          </button>
          
      </div>
      <button class="ms-Button docs-DialogExample-button" style="display: none;">Open Dialog</button>
    </div>


   
@endsection



