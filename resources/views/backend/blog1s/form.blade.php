<div class="box-body">
    <div class="form-group">
        {{ Form::label('name', trans('validation.attributes.backend.blog1s.title'), ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
            {{ Form::text('name', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.blog1s.title'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form control-->

    <div class="form-group">
        {{ Form::label('categories', trans('validation.attributes.backend.blog1s.category'), ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
        @if(!empty($selectedCategories))
            {{ Form::select('categories[]', $blog1Categories, $selectedCategories, ['class' => 'form-control tags box-size', 'required' => 'required', 'multiple' => 'multiple']) }}
        @else
            {{ Form::select('categories[]', $blog1Categories, null, ['class' => 'form-control tags box-size', 'required' => 'required', 'multiple' => 'multiple']) }}
        @endif
        </div><!--col-lg-10-->
    </div><!--form control-->

    <div class="form-group">
        {{ Form::label('publish_datetime', trans('validation.attributes.backend.blog1s.publish'), ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
            @if(!empty($blog1->publish_datetime))
                {{ Form::text('publish_datetime', \Carbon\Carbon::parse($blog1->publish_datetime)->format('m/d/Y h:i a'), ['class' => 'form-control datetimepicker1 box-size', 'placeholder' => trans('validation.attributes.backend.blog1s.publish'), 'required' => 'required', 'id' => 'datetimepicker1']) }}
            @else
                {{ Form::text('publish_datetime', null, ['class' => 'form-control datetimepicker1 box-size', 'placeholder' => trans('validation.attributes.backend.blog1s.publish'), 'required' => 'required', 'id' => 'datetimepicker1']) }}
            @endif
        </div><!--col-lg-10-->
    </div><!--form control-->

    <div class="form-group">
        {{ Form::label('featured_image', trans('validation.attributes.backend.blog1s.image'), ['class' => 'col-lg-2 control-label required']) }}
        @if(!empty($blog1->featured_image))
            <div class="col-lg-1">
                <img src="{{ Storage::disk('public')->url('img/blog1/' . $blog1->featured_image) }}" height="80" width="80">
            </div>
            <div class="col-lg-5">
                <div class="custom-file-input">
                    <input type="file" name="featured_image" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" />
                    <label for="file-1"><i class="fa fa-upload"></i><span>Choose a file</span></label>
                </div>
            </div>
        @else
            <div class="col-lg-5">
                <div class="custom-file-input">
                        <input type="file" name="featured_image" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" />
                        <label for="file-1"><i class="fa fa-upload"></i><span>Choose a file</span></label>
                </div>
            </div>
        @endif
    </div><!--form control-->

    <div class="form-group">
        {{ Form::label('content', trans('validation.attributes.backend.blog1s.content'), ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10 mce-box">
            {{ Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.blog1s.content')]) }}
        </div><!--col-lg-10-->
    </div><!--form control-->

    <div class="form-group">
        {{ Form::label('tags', trans('validation.attributes.backend.blog1s.tags'), ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
        @if(!empty($selectedtags))
           {{ Form::select('tags[]', $blog1Tags, $selectedtags, ['class' => 'form-control tags box-size', 'required' => 'required', 'multiple' => 'multiple']) }}
        @else
            {{ Form::select('tags[]', $blog1Tags, null, ['class' => 'form-control tags box-size', 'required' => 'required', 'multiple' => 'multiple']) }}
        @endif
        </div><!--col-lg-3-->
    </div><!--form control-->

    <div class="form-group">
        {{ Form::label('meta_title', trans('validation.attributes.backend.blog1s.meta-title'), ['class' => 'col-lg-2 control-label']) }}

        <div class="col-lg-10">
            {{ Form::text('meta_title', null, ['class' => 'form-control box-size ', 'placeholder' => trans('validation.attributes.backend.blog1s.meta-title')]) }}
        </div><!--col-lg-10-->
    </div><!--form control-->

    <div class="form-group">
        {{ Form::label('slug', trans('validation.attributes.backend.blog1s.slug'), ['class' => 'col-lg-2 control-label']) }}

        <div class="col-lg-10">
            {{ Form::text('slug', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.blog1s.slug'), 'disabled' => 'disabled']) }}
        </div><!--col-lg-10-->
    </div><!--form control-->

    <div class="form-group">
        {{ Form::label('cannonical_link', trans('validation.attributes.backend.blog1s.cannonical_link'), ['class' => 'col-lg-2 control-label']) }}

        <div class="col-lg-10">
            {{ Form::text('cannonical_link', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.blog1s.cannonical_link')]) }}
        </div><!--col-lg-10-->
    </div><!--form control-->


    <div class="form-group">
        {{ Form::label('meta_keywords', trans('validation.attributes.backend.blog1s.meta_keyword'), ['class' => 'col-lg-2 control-label']) }}

        <div class="col-lg-10">
            {{ Form::text('meta_keywords', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.blog1s.meta_keyword')]) }}
        </div><!--col-lg-10-->
    </div><!--form control-->

    <div class="form-group">
        {{ Form::label('meta_description', trans('validation.attributes.backend.blog1s.meta_description'), ['class' => 'col-lg-2 control-label']) }}

        <div class="col-lg-10 mce-box">
            {{ Form::textarea('meta_description', null,['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.blog1s.meta_description')]) }}
        </div><!--col-lg-3-->
    </div><!--form control-->

    <div class="form-group">
        {{ Form::label('status', trans('validation.attributes.backend.blog1s.status'), ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
           {{ Form::select('status', $status, null, ['class' => 'form-control select2 status box-size', 'placeholder' => trans('validation.attributes.backend.blog1s.status'), 'required' => 'required']) }}
        </div><!--col-lg-3-->
    </div><!--form control-->
</div>

@section("after-scripts")
    <script type="text/javascript">

        Backend.Blog1.selectors.GenerateSlugUrl = "{{route('admin.generate.slug')}}";
        Backend.Blog1.selectors.SlugUrl = "{{url('/')}}";
        Backend.Blog1.init('{{ config('locale.languages.' . app()->getLocale())[1] }}');
        
    </script>
@endsection
<style type="text/css">
    .treeview-menu3{
        display: block !important;
    }
</style>