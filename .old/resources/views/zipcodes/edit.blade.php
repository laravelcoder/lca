@extends('layouts.app')

@section('content')
    <div class="pg-tp">
        <i class="ion-cube"></i>
        <div class="pr-tp-inr">
            <h4>Create Zipcode</h4>
            <span></span>
        </div>
    </div><!-- Page Top -->
   <div class="panel-content">

                   {!! Form::model($zipcode, ['route' => ['zipcodes.update', $zipcode->id], 'method' => 'patch']) !!}

                        @include('zipcodes.fields')

                   {!! Form::close() !!}

   </div><!-- Panel Content -->
@endsection