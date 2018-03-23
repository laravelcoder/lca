@extends('layouts.app')

@section('content')
 <div class="pg-tp">
    <i class="ion-cube"></i>
    <div class="pr-tp-inr">
        <h4>{!! $page->title !!}</h4>
        {{-- <span>Management of products</span> --}}
    </div>
</div><!-- Page Top -->

<div class="panel-content">

    <div class="widget pad50-65">
        <div class="widget-title2">
            <h4>{!! $page->title !!}</h4>

        </div>
        <div class="rmv-ext">
            <div class="row">
               {!! $page->content !!}
            </div>
        </div>
    </div>
</div><!-- Panel Content -->
@endsection

