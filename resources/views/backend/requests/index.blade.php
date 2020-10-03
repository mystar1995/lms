@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.speakups.management'))

@section('page-header')
@endsection
@section('content')
<div class="top-area">
	<div class="" style="padding: 13px; padding-left: 30px;">
		<div class="row">
			<div class="col-md-1" style="cursor: pointer;">
				<div>
					<i class="fa fa-plus" style="color: #5597e4; font-size: 13px;"></i>
					<span style="cursor: pointer;">New</span>
				</div>
			</div>
			<div class="col-md-1" style="cursor: pointer;">
				<div>
					<i class="fa fa-trash" style="color: #5597e4"></i>
					<span style="cursor: pointer;">Delete</span>
				</div>				
			</div>
			<div class="col-md-1 top-content ms-env">
				<div  class="ms-Button" style="cursor: pointer;">					
					<i class="fa fa-edit" style=" color: #5597e4"></i>
					<span>Content</span>
				</div>
				<div class="ms-Panel">
                  <button class="ms-Panel-closeButton ms-PanelAction-close">
                    <i class="ms-Panel-closeIcon ms-Icon ms-Icon--Cancel" style="padding-top: 2px;"></i>
                  </button>
                  <div class="ms-Panel-contentInner">
                    <p class="ms-Panel-headerText">Request</p>
                    <div class="ms-Panel-content">
                    </div>
                  </div>
                </div>
			</div>
		</div>
	</div>
</div>
<section class="section">
  <div class="section-header">
  </div>
  <div class="section-body">
  	<table id="example" style="width: 100%">
	    <thead>
	      <tr>
	      	<th style="width: 15%">Subject</th>
	      	<th style="width: 15%">Requested By</th>
	      	<th style="width: 25%">Description</th>
	      	<th style="width: 15%">Type</th>
	      	<th style="width: 12%">Date</th>
	      	<th style="width: 18%">Tags</th>
	      </tr>
	    </thead>
	    <tbody>
	      <tr>
	      	<td style="padding: 0px !important">
	      		
	      		<div class="ms-Dropdown" tabindex="0" style="margin-bottom: 0px;padding: 3px 10px !important;">
	      			<div style="position: absolute;bottom: 0;margin-bottom: -8px;right:0px;margin-right: -13px;">
					  <i class="ms-Dropdown-caretDown ms-Icon ms-Icon--More" style="font-weight: 900; padding: 11px;background-color: #e0dfdf"></i>
					</div>
				  	<select class="ms-Dropdown-select">
					    <option>Introduction..</option>
					    <option>Menu Item-1</option>
					    <option>Menu Item-2</option>
					    <option>Menu Item-3</option>
					    <option>Menu Item-4</option>
				  	</select>
				</div>
			</td>
	      	<td></td>
	      	<td></td>
	      	<td></td>
	      	<td></td>
	      	<td></td>
	      </tr>
	    </tbody>
	</table>
  </div>
</section>
@endsection
<style type="text/css">
	h1{
		font-size: 21px !important;
		font-weight: bolder;
	}
	.section-body{
		background: white;
	    padding: 20px;
	    padding-bottom: 440px;
	}
	#example_length, .dataTables_info{
		display: none;
	}
	#example_filter, #example_paginate{
		display: none;
	}
	table.dataTable tr.odd{
		background-color: #f3f2f1 !important;
	}
	table.dataTable tr.odd td.sorting_1{
		background-color: #eae9e8 !important;
	}
	th{
		border-bottom: 1px solid #9a9b99;
		padding-bottom: 5px !important;
	}
	td{
		border-bottom: 1px solid #e0e0e0;
		background: #f3f2f1;
	}	
	th, td{
		-webkit-font-smoothing: antialiased;
    	font-family: Segoe UI WestEuropean,Segoe UI,-apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,sans-serif;
    	box-shadow: none;
    	font-size: 14px;
	}
	table.dataTable td{
		padding: 10px 10px !important;
	}
	.top-area{
		background-color: #f3f2f1;
		height: 44px;
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
</style>
