<div class="box-body">
    <div class="form-group">
        {{ Form::label('name', trans('validation.attributes.backend.ktest.title'), ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
            {{ Form::text('name', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.ktest.title'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form control-->

    <div class="form-group">
        {{ Form::label('content', trans('validation.attributes.backend.ktest.content'), ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10 mce-box">
            {{ Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.ktest.content')]) }}
        </div><!--col-lg-10-->
    </div><!--form control-->
</div>

@section("after-scripts")
    <script type="text/javascript">
    </script>
@endsection