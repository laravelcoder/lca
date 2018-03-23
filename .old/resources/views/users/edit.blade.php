@extends('layouts.app')

@section('content')
	<div class="pg-tp">
	    <i class="ion-cube"></i>
	    <div class="pr-tp-inr">
	        <h4>Edit {!! $user->name !!}</h4>
	        <span>Profile Page.</span>
	    </div>
	</div><!-- Page Top -->
   <div class="panel-content">
       {!! Form::model($user, ['route' => ['users.update', $user], 'method' => 'patch', 'class' => 'form-wrp ']) !!}
				@include('users.user_profile')
				@include('users.submit')
       {!! Form::close() !!}

   </div><!-- Panel Content -->


@endsection



