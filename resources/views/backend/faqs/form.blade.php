<div class="box-body">
    <div class="general-area">
        <div class="col-lg-12" style="padding-left: 40px;">
            <h4 style="color: #5c2d91; font-weight: 600;">General</h4>
        </div>
        <div class="form-group">
            {{ Form::label('testcate', 'Object', ['class' => 'col-lg-2 control-label required']) }}

            <div class="col-lg-10">
                {{ Form::text('testcate', null, ['class' => 'form-control box-size', 'placeholder' => 'Object', 'required' => 'required']) }}
            </div><!--col-lg-10-->
        </div><!--form control-->

        <div class="form-group">
            {{ Form::label('question_name', 'Question Name', ['class' => 'col-lg-2 control-label required']) }}

            <div class="col-lg-10">
                {{ Form::text('question_name', null, ['class' => 'form-control box-size', 'placeholder' => 'Question Name', 'required' => 'required']) }}
            </div><!--col-lg-10-->
        </div><!--form control-->

        <div class="form-group">
            {{ Form::label('question_text', 'Question Text', ['class' => 'col-lg-2 control-label required']) }}

            <div class="col-lg-10 mce-box">
                {{ Form::textarea('question_text', null, ['class' => 'form-control box-size']) }}
            </div><!--col-lg-10-->
        </div><!--form control-->

        <div class="form-group">
            {{ Form::label('status', trans('validation.attributes.backend.faqs.status'), ['class' => 'col-lg-2 control-label']) }}

            <div class="col-lg-10">
                <div class="control-group">
                    <label class="control control--checkbox">
                        @if(isset($faq->status))
                            {{ Form::checkbox('status', 1, $faq->status == 1 ? true :false) }}
                        @else
                            {{ Form::checkbox('status', 1, true) }}
                        @endif
                        <div class="control__indicator"></div>
                    </label>
                </div>
            </div><!--col-lg-3-->
        </div><!--form control-->
    </div>
    <div class="answer-area" style="margin-top: 40px;">
        <div class="col-lg-12" style="padding-left: 40px;">
            <h4 style="color: #5c2d91; font-weight: 600;">Answer</h4>
        </div>
        <div class="answer1-area">
            <div class="form-group">
                {{ Form::label('c1', 'Choice 1', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10 mce-box">
                    {{ Form::textarea('c1', null, ['class' => 'form-control box-size']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->
            <div class="form-group">
                {{ Form::label('g1', 'Grade', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10 mce-box">
                    <select class="form-control g1" style="width: 87%">
                        <option> 100% </option>
                        <option> 90% </option>
                        <option> 83.33% </option>
                        <option> 80% </option>
                        <option> 75% </option>
                        <option> 70% </option>
                        <option> 66.66% </option>
                        <option> 60% </option>
                        <option> 50% </option>
                        <option> 40% </option>
                        <option> 33.33% </option>
                        <option> 30% </option>
                        <option> 25% </option>
                        <option> 20% </option>
                        <option> 10% </option>
                    </select>
                </div><!--col-lg-10-->
            </div><!--form control-->
            <div class="form-group">
                {{ Form::label('f1', 'Feedback', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10 mce-box">
                    {{ Form::textarea('f1', null, ['class' => 'form-control box-size']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->
        </div>
        <div class="answer2-area">
            <div class="form-group">
                {{ Form::label('c2', 'Choice 2', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10 mce-box">
                    {{ Form::textarea('c2', null, ['class' => 'form-control box-size']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->
            <div class="form-group">
                {{ Form::label('g2', 'Grade', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10 mce-box">
                    <select class="form-control g2" style="width: 87%">
                        <option> 100% </option>
                        <option> 90% </option>
                        <option> 83.33% </option>
                        <option> 80% </option>
                        <option> 75% </option>
                        <option> 70% </option>
                        <option> 66.66% </option>
                        <option> 60% </option>
                        <option> 50% </option>
                        <option> 40% </option>
                        <option> 33.33% </option>
                        <option> 30% </option>
                        <option> 25% </option>
                        <option> 20% </option>
                        <option> 10% </option>
                    </select>
                </div><!--col-lg-10-->
            </div><!--form control-->
            <div class="form-group">
                {{ Form::label('f2', 'Feedback', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10 mce-box">
                    {{ Form::textarea('f2', null, ['class' => 'form-control box-size']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->
        </div>
        <div class="answer3-area">
            <div class="form-group">
                {{ Form::label('c3', 'Choice 3', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10 mce-box">
                    {{ Form::textarea('c3', null, ['class' => 'form-control box-size']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->
            <div class="form-group">
                {{ Form::label('g3', 'Grade', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10 mce-box">
                    <select class="form-control g3" style="width: 87%">
                        <option> 100% </option>
                        <option> 90% </option>
                        <option> 83.33% </option>
                        <option> 80% </option>
                        <option> 75% </option>
                        <option> 70% </option>
                        <option> 66.66% </option>
                        <option> 60% </option>
                        <option> 50% </option>
                        <option> 40% </option>
                        <option> 33.33% </option>
                        <option> 30% </option>
                        <option> 25% </option>
                        <option> 20% </option>
                        <option> 10% </option>
                    </select>
                </div><!--col-lg-10-->
            </div><!--form control-->
            <div class="form-group">
                {{ Form::label('f3', 'Feedback', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10 mce-box">
                    {{ Form::textarea('f3', null, ['class' => 'form-control box-size']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->
        </div>
        <div class="answer4-area">
            <div class="form-group">
                {{ Form::label('c4', 'Choice 4', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10 mce-box">
                    {{ Form::textarea('c4', null, ['class' => 'form-control box-size']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->
            <div class="form-group">
                {{ Form::label('g4', 'Grade', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10 mce-box">
                    <select class="form-control g4" style="width: 87%">
                        <option> 100% </option>
                        <option> 90% </option>
                        <option> 83.33% </option>
                        <option> 80% </option>
                        <option> 75% </option>
                        <option> 70% </option>
                        <option> 66.66% </option>
                        <option> 60% </option>
                        <option> 50% </option>
                        <option> 40% </option>
                        <option> 33.33% </option>
                        <option> 30% </option>
                        <option> 25% </option>
                        <option> 20% </option>
                        <option> 10% </option>
                    </select>
                </div><!--col-lg-10-->
            </div><!--form control-->
            <div class="form-group">
                {{ Form::label('f4', 'Feedback', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10 mce-box">
                    {{ Form::textarea('f4', null, ['class' => 'form-control box-size']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->
        </div>
        <div class="answer5-area">
            <div class="form-group">
                {{ Form::label('c5', 'Choice 5', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10 mce-box">
                    {{ Form::textarea('c5', null, ['class' => 'form-control box-size']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->
            <div class="form-group">
                {{ Form::label('g5', 'Grade', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10 mce-box">
                    <select class="form-control g5" style="width: 87%">
                        <option> 100% </option>
                        <option> 90% </option>
                        <option> 83.33% </option>
                        <option> 80% </option>
                        <option> 75% </option>
                        <option> 70% </option>
                        <option> 66.66% </option>
                        <option> 60% </option>
                        <option> 50% </option>
                        <option> 40% </option>
                        <option> 33.33% </option>
                        <option> 30% </option>
                        <option> 25% </option>
                        <option> 20% </option>
                        <option> 10% </option>
                    </select>
                </div><!--col-lg-10-->
            </div><!--form control-->
            <div class="form-group">
                {{ Form::label('f5', 'Feedback', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10 mce-box">
                    {{ Form::textarea('f5', null, ['class' => 'form-control box-size']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->
        </div>
    </div>
</div>
@section('after-scripts')
    <script type="text/javascript">
        Backend.Faq.init('{{ config('locale.languages.' . app()->getLocale())[1] }}');
    </script>
@endsection
<style type="text/css">
    .general-area .form-group .mce-box .tox-tinymce{
        width: 90% !important;
    }
</style>