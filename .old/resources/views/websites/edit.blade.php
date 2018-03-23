@extends('layouts.app')

@section('content')
    <div class="pg-tp">
        <i class="ion-cube"></i>
        <div class="pr-tp-inr">
            <h4>Create Website</h4>
            <span></span>
        </div>
    </div><!-- Page Top -->
   <div class="panel-content">

                   {!! Form::model($website, ['route' => ['websites.update', $website->id], 'method' => 'patch']) !!}

                        @include('websites.fields')

                   {!! Form::close() !!}

   </div><!-- Panel Content -->
@endsection