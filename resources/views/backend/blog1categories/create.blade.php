@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.blog1categories.management') . ' | ' . trans('labels.backend.blog1categories.create'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.blog1categories.management') }}
        <small>{{ trans('labels.backend.blog1categories.create') }}</small>
    </h1>
@endsection

@section('content')
    {{ Form::open(['route' => 'admin.blog1Categories.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-permission']) }}

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.blog1categories.create') }}</h3>

                <div class="box-tools pull-right">
                    @include('backend.blog1categories.partials.blog1categories-header-buttons')
                </div><!--box-tools pull-right-->
            </div><!-- /.box-header -->

            {{-- Including Form blade file --}}
            <div class="box-body">
                <div class="form-group">
                    @include("backend.blog1categories.form")
                    <div class="edit-form-btn">
                    {{ link_to_route('admin.blog1Categories.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                    {{ Form::submit(trans('buttons.general.crud.create'), ['class' => 'btn btn-primary btn-md']) }}
                    <div class="clearfix"></div>
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