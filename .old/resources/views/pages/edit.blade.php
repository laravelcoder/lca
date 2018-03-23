@extends('layouts.app')

@section('content')
    <div class="pg-tp">
        <i class="ion-cube"></i>
        <div class="pr-tp-inr">
            <h4>Create Page</h4>
            <span></span>
        </div>
    </div><!-- Page Top -->
   <div class="panel-content">

                   {!! Form::model($page, ['route' => ['pages.update', $page->id], 'method' => 'patch', 'class' => 'form-wrp']) !!}

                        @include('pages.fields')

                   {!! Form::close() !!}

   </div><!-- Panel Content -->
@endsection