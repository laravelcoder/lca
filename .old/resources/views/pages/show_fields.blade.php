<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $page->id !!}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $page->title !!}</p>
</div>

<!-- Meta Description Field -->
<div class="form-group">
    {!! Form::label('meta_description', 'Meta Description:') !!}
    <p>{!! $page->meta_description !!}</p>
</div>

<!-- Content Field -->
<div class="form-group">
    {!! Form::label('content', 'Content:') !!}
    <p>{!! $page->content !!}</p>
</div>

<!-- Banner Field -->
<div class="form-group">
    {!! Form::label('banner', 'Banner:') !!}
    <p>{!! $page->banner !!}</p>
</div>

<!-- Slug Field -->
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{!! $page->slug !!}</p>
</div>

<!-- Lang Field -->
<div class="form-group">
    {!! Form::label('lang', 'Lang:') !!}
    <p>{!! $page->lang !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $page->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $page->updated_at !!}</p>
</div>

