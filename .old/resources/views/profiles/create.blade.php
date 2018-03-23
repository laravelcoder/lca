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

                    {!! Form::open(['route' => 'profiles.store']) !!}

                        @include('profiles.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div><!-- Panel Content -->
@endsection
