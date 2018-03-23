<!-- Title Field -->
<div class="col-md-10 col-sm-10 col-lg-10">
 {{--    {!! Form::label('title', 'Title:') !!} --}}
    {!! Form::text('title', null, ['id' => 'inputtitle', 'class' => 'brd-rd5', 'placeholder' => 'Title']) !!}
</div>
<br style="clear:both" />
<!-- Content Field -->
<div class="form-group col-md-12 col-sm-12 col-lg-12">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', null, ['id' => 'inputcontent', 'class' => 'brd-rd5', 'placeholder' => 'Content']) !!}
</div>
<br style="clear:both" />
<!-- Meta Description Field -->
<div class="form-group col-md-8 col-sm-8 col-lg-8">
    {!! Form::label('meta_description', 'Meta Description:') !!}
    {!! Form::textarea('meta_description', null, ['id' => 'inputmeta_description', 'class' => 'brd-rd5', 'placeholder' => 'Meta Description']) !!}
</div>
<br style="clear:both" />

<!-- Banner Field -->
<div class="form-group col-sm-6">
    {!! Form::label('banner', 'Banner:') !!}
    {!! Form::file('banner') !!}
</div>
<div class="clearfix"></div>



<!-- Slug Field -->
<div class="col-md-3 col-sm-3 col-lg-3">
 {{--    {!! Form::label('slug', 'Slug:') !!} --}}
    {!! Form::text('slug', null, ['id' => 'inputslug', 'class' => 'brd-rd5', 'placeholder' => 'Slug']) !!}
</div>


<!-- Lang Field -->
<div class="col-md-3 col-sm-3 col-lg-3">
 {{--    {!! Form::label('lang', 'Lang:') !!} --}}
    {!! Form::text('lang', null, ['id' => 'inputlang', 'class' => 'brd-rd5', 'placeholder' => 'Lang']) !!}
</div>
<br style="clear:both" />
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pages.index') !!}" class="btn btn-default">Cancel</a>
</div>
