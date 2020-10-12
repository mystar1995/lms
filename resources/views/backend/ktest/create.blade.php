@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.ktest.management') . ' | ' . trans('labels.backend.ktest.create'))

@section('page-header')
    <h1>
        Create Test Category
    </h1>
@endsection

@section('content')
        <div class="box box-info form-horizontal">
            <div class="box-header with-border">
                <h3 class="box-title">Create Category</h3>

                <div class="box-tools pull-right">
                    @include('backend.ktest.partials.ktest-header-buttons')
                </div><!--box-tools pull-right-->
            </div><!-- /.box-header -->

            {{-- Including Form blade file --}}
            <div class="box-body">
                <div class="form-group">
                    <div class="box-body">
                        <div class="form-group">
                            {{ Form::label('name', 'Category Title', ['class' => 'col-lg-2 control-label required']) }}

                            <div class="col-lg-10">
                                <input type="text" class="form-control test_title" name="test_title">
                            </div><!--col-lg-10-->
                        </div><!--form control-->

                        <div class="form-group">
                            {{ Form::label('content', 'Category Test Content', ['class' => 'col-lg-2 control-label required']) }}

                            <div class="col-lg-10 mce-box">
                                <textarea class="form-control test_content" name="test_content"></textarea>
                            </div><!--col-lg-10-->
                            <div class="tox tox-tinymce"></div>
                        </div><!--form control-->
                    </div>
                    <div class="edit-form-btn">
                        {{ link_to_route('admin.test_index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                        <button class="btn btn-primary btn-md test_create">{{trans('buttons.general.crud.create')}}</button>
                        <div class="clearfix">
                        </div>
                    </div>
                </div>
            </div><!--box-->
        </div>
@endsection
<style type="text/css">
    .treeview-menu3{
        display: block !important;
    }
</style>