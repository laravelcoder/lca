@extends('layouts.app')

@section('content')
    <div class="pg-tp">
        <i class="ion-cube"></i>
        <div class="pr-tp-inr">
            <h4>Create Profile</h4>
            <span></span>
        </div>
    </div><!-- Page Top -->
   <div class="panel-content">

                   {!! Form::model($profile, ['route' => ['profiles.update', $profile->id], 'method' => 'patch']) !!}

                        @include('profiles.fields')

                   {!! Form::close() !!}

   </div><!-- Panel Content -->
@endsection