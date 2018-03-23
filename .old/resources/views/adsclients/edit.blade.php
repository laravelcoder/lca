@extends('layouts.app')

@section('content')
    <div class="pg-tp">
        <i class="ion-cube"></i>
        <div class="pr-tp-inr">
            <h4>Create Adsclient</h4>
            <span></span>
        </div>
    </div><!-- Page Top -->
   <div class="panel-content">

                   {!! Form::model($adsclient, ['route' => ['adsclients.update', $adsclient->id], 'method' => 'patch', 'class' => 'form-wrp']) !!}

                        @include('adsclients.fields')

                   {!! Form::close() !!}

   </div><!-- Panel Content -->
@endsection