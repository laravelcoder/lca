@extends('layouts.app')

@section('content')
    <div class="pg-tp">
        <i class="ion-cube"></i>
        <div class="pr-tp-inr">
            <h4>Create Clinic</h4>
            <span></span>
        </div>
    </div><!-- Page Top -->
   <div class="panel-content">

                   {!! Form::model($clinic, ['route' => ['clinics.update', $clinic->id], 'method' => 'patch']) !!}

                        @include('clinics.fields')

                   {!! Form::close() !!}

   </div><!-- Panel Content -->
@endsection