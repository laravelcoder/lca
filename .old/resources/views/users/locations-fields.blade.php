<div class="row">
    <div class="col-md-12">
        <div class="col-md-6">
            <div class="col-sm-12">
                <h2>Mailing Address</h2>
                {!! Form::model($mailing, ['route' => ['admin.userlocations.store',$user->id]]) !!}
                <!-- start: FILE UPLOAD PANEL -->
                <div class="panel panel-default">
<!--                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="btn btn-xs btn-link panel-collapse collapses" href="#"></a>

                            <a class="btn btn-xs btn-link panel-expand" href="#"><i class="fa fa-resize-full"></i></a>
                            <a class="btn btn-xs btn-link panel-close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>-->

                    <div class="panel-body">
                        <!-- Location Type Field -->
                        {!! Form::hidden('location_type', 'profile', ['class' => 'form-control']) !!}
                        {!! Form::hidden('id', NULL, ['class' => 'form-control']) !!}
                        <!-- Nickname Field -->
                        <div class="form-group col-sm-6 {{ $errors->has('nickname')? 'has-error' : '' }}"">
                            {!! Form::label('nickname', 'Nickname:') !!}
                            {!! Form::text('nickname', null, ['class' => 'form-control']) !!}
                            {!! $errors->has('nickname')? '<p class="help-block"> '.$errors->first('nickname').' </p>':'' !!}
                        </div>
                        <!-- Address Field -->
                        {{--      <div class="form-group col-sm-12">
                        {!! Form::label('address', 'Address:') !!}
                        {!! Form::text('address', null, ['class' => 'form-control']) !!}
                    </div> --}}
                        <!-- Street Field -->
                        <div class="form-group col-sm-6 {{ $errors->has('street')? 'has-error' : '' }}">
                            {!! Form::label('street', 'Street:') !!}
                            {!! Form::text('street', null, ['class' => 'form-control']) !!}
                        </div>
                        <!-- Street Additional Field -->
                        <div class="form-group col-sm-6 {{ $errors->has('street_additional')? 'has-error' : '' }}">
                            {!! Form::label('street_additional', 'Street Additional:') !!}
                            {!! Form::text('street_additional', null, ['class' => 'form-control']) !!}
                        </div>
                        <!-- City Field -->
                        <div class="form-group col-sm-6 {{ $errors->has('city')? 'has-error' : '' }}">
                            {!! Form::label('city', 'City:') !!}
                            {!! Form::text('city', null, ['class' => 'form-control']) !!}
                        </div>
                        <!-- Country Field -->
                        <div class="form-group col-sm-6 {{ $errors->has('country')? 'has-error' : '' }}">
                            {!! Form::label('country', 'Country:') !!}
                            {!! Form::text('country', null, ['class' => 'form-control']) !!}
                        </div>
                        <!-- Zipcode Field -->
                        <div class="form-group col-sm-6 {{ $errors->has('zipcode')? 'has-error' : '' }}">
                            {!! Form::label('zipcode', 'Zipcode:') !!}
                            {!! Form::text('zipcode', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                </div>
                <div class="form-group col-sm-12">
                    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                    <a href="{!! url(getLang() . '/admin/user') !!}" class="btn btn-default">Cancel</a>
                </div>
                {!! Form::close() !!}
                <!-- end: FILE UPLOAD PANEL -->
            </div>
        </div>
        <div class="col-md-6">
            <div class="col-sm-12">
                <h2>Billing Address</h2>
                {!! Form::model($billing, ['route' => ['admin.userlocations.store',$user->id]]) !!}
                <!-- start: FILE UPLOAD PANEL -->
                <div class="panel panel-default">
<!--                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="btn btn-xs btn-link panel-collapse collapses" href="#"></a>
                            <a class="btn btn-xs btn-link panel-expand" href="#"><i class="fa fa-resize-full"></i></a>
                            <a class="btn btn-xs btn-link panel-close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>-->

                    <div class="panel-body">
                        <!-- Location Type Field -->
                        {!! Form::hidden('location_type', 'billing', ['class' => 'form-control']) !!}
                        {!! Form::hidden('id', NULL, ['class' => 'form-control']) !!}
                        {{--
                    <div class="form-group col-sm-6 {{ $errors->has('location_type')? 'has-error' : '' }}">
                        {!! Form::label('location_type', 'Location Type:') !!}
                        {!! Form::select('location_type', ['Billing' => 'Billing', 'Mailing' => 'Mailing', 'Profile' => 'Profile', 'Business' => 'Business', 'Other' => 'Other', 'Dealer' => 'Dealer'], null, ['class' => 'form-control']) !!}
                        {!! $errors->has('location_type')? '
                        <p class="help-block"> '.$errors->first('location_type').' </p>
                        ':'' !!}
                    </div>
                    --}}
                    <!-- Nickname Field -->
                    <div class="form-group col-sm-6 {{ $errors->has('nickname')? 'has-error' : '' }}">
                        {!! Form::label('nickname', 'Nickname:') !!}
                        {!! Form::text('nickname', null, ['class' => 'form-control']) !!}
                    </div>
                    <!-- Address Field -->
                    {{--      <div class="form-group col-sm-12">
                        {!! Form::label('address', 'Address:') !!}
                        {!! Form::text('address', null, ['class' => 'form-control']) !!}
                    </div> --}}
                    <!-- Street Field -->
                    <div class="form-group col-sm-6 {{ $errors->has('street')? 'has-error' : '' }}">
                        {!! Form::label('street', 'Street:') !!}
                        {!! Form::text('street', null, ['class' => 'form-control']) !!}
                    </div>
                    <!-- Street Additional Field -->
                    <div class="form-group col-sm-6 {{ $errors->has('street_additional')? 'has-error' : '' }}">
                        {!! Form::label('street_additional', 'Street Additional:') !!}
                        {!! Form::text('street_additional', null, ['class' => 'form-control']) !!}
                    </div>
                    <!-- City Field -->
                    <div class="form-group col-sm-6 {{ $errors->has('city')? 'has-error' : '' }}">
                        {!! Form::label('city', 'City:') !!}
                        {!! Form::text('city', null, ['class' => 'form-control']) !!}
                    </div>
                    <!-- Country Field -->
                    <div class="form-group col-sm-6 {{ $errors->has('country')? 'has-error' : '' }}">
                        {!! Form::label('country', 'Country:') !!}
                        {!! Form::text('country', null, ['class' => 'form-control']) !!}
                    </div>
                    <!-- Zipcode Field -->
                    <div class="form-group col-sm-6 {{ $errors->has('zipcode')? 'has-error' : '' }}">
                        {!! Form::label('zipcode', 'Zipcode:') !!}
                        {!! Form::text('zipcode', null, ['class' => 'form-control']) !!}
                    </div>
                </div>


            </div>
            <div class="form-group col-sm-12">
                {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                <a href="{!! url(getLang() . '/admin/user') !!}" class="btn btn-default">Cancel</a>
            </div>
            {!! Form::close() !!}
            <!-- end: FILE UPLOAD PANEL -->
        </div>

    </div>

</div>
</div>