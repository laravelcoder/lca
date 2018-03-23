@extends('layouts.app')

@section('content')
    <div class="pg-tp">
        <i class="ion-cube"></i>
        <div class="pr-tp-inr">
            <h4>Create Analyticsclient</h4>
            <span></span>
        </div>
    </div><!-- Page Top -->
   <div class="panel-content">

                   {!! Form::model($analyticsclient, ['route' => ['analyticsclients.update', $analyticsclient->id], 'method' => 'patch', 'class' => 'form-wrp']) !!}

                        @include('analyticsclients.fields')

                   {!! Form::close() !!}

   </div><!-- Panel Content -->
@endsection