@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.blog1s.management') . ' | ' . trans('labels.backend.blog1s.create'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.blog1s.management') }}
        <small>{{ trans('labels.backend.blog1s.create') }}</small>
    </h1>
@endsection

@section('content')
    {{ Form::open(['route' => 'admin.blog1s.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-permission', 'files' => true]) }}

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.blog1s.create') }}</h3>

                <div class="box-tools pull-right">
                    @include('backend.blog1s.partials.blog1s-header-buttons')
                </div><!--box-tools pull-right-->
            </div><!-- /.box-header -->

            {{-- Including Form blade file --}}
            <div class="box-body">
                <div class="form-group">
                    @include("backend.blog1s.form")
                        <div class="edit-form-btn">
                        {{ link_to_route('admin.blog1s.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                        {{ Form::submit(trans('buttons.general.crud.create'), ['class' => 'btn btn-primary btn-md']) }}
                        <div class="clearfix">
                    </div>
                </div>
            </div>
        </div><!--box-->
    </div>
    {{ Form::close() }}
@endsection
<style type="text/css">
    .treeview-menu3{
        display: block !important;
    }
</style>