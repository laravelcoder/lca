@extends('layouts.app')

@section('content')
    <div class="pg-tp">
    <i class="ion-cube"></i>
        <h1 class="pull-left">Analyticsclients</h1>
         <span></span>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('analyticsclients.create') !!}">Add New</a>
        </h1>
    </div><!-- Page Top -->
   <div class="panel-content">
   		<div class="widget pad50-65">
	        <div class="clearfix"></div>

	        @include('flash::message')

	        <div class="clearfix"></div>
	        <div class="box box-primary">
	            <div class="box-body">
	                    @include('analyticsclients.table')
	            </div>
	        </div>
	        <div class="text-center">
	        
	        </div>
        </div>
     </div><!-- Panel Content -->
@endsection

