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

                    {!! Form::open(['route' => 'websites.store', 'class' => 'form-wrp']) !!}
<div class="row mrg20">
                        @include('websites.fields')
</div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div><!-- Panel Content -->
@endsection
