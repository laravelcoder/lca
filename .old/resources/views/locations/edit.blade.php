@extends('layouts.app')

@section('content')
    <div class="pg-tp">
        <i class="ion-cube"></i>
        <div class="pr-tp-inr">
            <h4>Create Location</h4>
            <span></span>
        </div>
    </div><!-- Page Top -->
   <div class="panel-content">

                   {!! Form::model($location, ['route' => ['locations.update', $location->id], 'method' => 'patch']) !!}

                        @include('locations.fields')

                   {!! Form::close() !!}

   </div><!-- Panel Content -->
@endsection