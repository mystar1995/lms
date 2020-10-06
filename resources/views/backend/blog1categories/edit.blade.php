@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.blog1categories.management') . ' | ' . trans('labels.backend.blog1categories.edit'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.blog1categories.management') }}
        <small>{{ trans('labels.backend.blog1categories.edit') }}</small>
    </h1>
@endsection

@section('content')
    {{ Form::model($blog1category, ['route' => ['admin.blog1Categories.update', $blog1category], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role']) }}

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.blog1categories.edit') }}</h3>

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
                    {{ Form::submit(trans('buttons.general.crud.update'), ['class' => 'btn btn-primary btn-md']) }}
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