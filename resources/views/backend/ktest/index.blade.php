@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.speakups.management'))

@section('page-header')
    <div class="top-area">
		<div class="" style="padding: 8px 0px 0px 30px;">
			<div class="row">
				<h3 class="ms-Label" style="font-size: 24px; color: dimgrey">Knowledge Test</h3>
			</div>
		</div>
	</div>
@endsection
	

@section('content')

<section class="section">
  <div class="section-body" style="background-color: white; padding: 30px; padding-top: 30px; padding-bottom: 10px;">
  	<div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Test Management</h3>

            <div class="box-tools pull-right">
                @include('backend.ktest.partials.ktest-header-buttons')
            </div>
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="table-responsive data-table-wrapper">
                <table id="ktest-table" class="table table-condensed table-hover table-bordered">
                    <thead>
                        <tr>
                           {{--<th>{{ trans('labels.backend.ktest.table.number') }}</th>--}} 
                            {{--<th>{{ trans('labels.backend.ktest.table.title') }}</th>--}}
                            {{--<th>{{ trans('labels.general.actions') }}</th>--}}
                        </tr>
                    </thead>
                    <thead class="transparent-bg">
                        <tr>
                        </tr>
                    </thead>
                </table>
            </div><!--table-responsive-->
        </div><!-- /.box-body -->
    </div><!--box-->
  </div>
</section>
@endsection

<style type="text/css">
	.top-area{
		background-color: #f3f2f1;
		height: 54px;
	}
	.content-header{
		padding:0px !important;
	}
	.top-area .ms-Button{
		color: #696969;
		border: none;
		padding: unset;
		height: 25px;
	}
	.top-area .ms-Button:hover{
		background-color: unset !important;
	}
	.content{
		padding: 0px !important;
	}
	.event{
		display: flex;padding: 5px; margin-top: -6px;
	}
	.event:hover{
		background-color: #e0dfdf;
	}
	.event span{
		padding-left: 3px;
		padding-top: 0.3px;
	}
	.treeview2 .fa-angle-up{
		transform:rotate(-180deg) !important;margin-right:7px !important;
	}
</style>