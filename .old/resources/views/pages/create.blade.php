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

                    {!! Form::open(['route' => 'pages.store', 'class' => 'form-wrp']) !!}
<div class="row mrg20">
                        @include('pages.fields')
</div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div><!-- Panel Content -->
@endsection
