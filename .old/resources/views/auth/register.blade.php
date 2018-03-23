@extends('layouts.base')
 
@section('content')

<div class="panel-content">
    <div class="lgn-wrp grysh">
        <div class="bg-img" style="background-image: url(images/resource/bg-img1.png);"></div>
        <div class="lgn-innr">
            <div class="widget lgn-frm">
                <div class="frm-tl">
                    <h4>Register to Admin</h4>
                    <span>Fill your detail for new registration</span>
                </div>
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                    <div class="row mrg10">
               

                        <div class="col-md-12 col-sm-12 col-lg-12 form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {{-- <label for="name" class="control-label">Name</label> --}}

                         
                                <input id="name" type="text" class="brd-rd5 form-control" name="name" value="{{ old('name') }}" required autofocus
                                placeholder="Name">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                             
                        </div>

                        <div class="col-md-12 col-sm-12 col-lg-12 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            {{-- <label for="email" class="control-label">E-Mail Address</label> --}}

                         
                                <input id="email" type="email" class="brd-rd5 form-control" name="email" value="{{ old('email') }}" required 
                                placeholder="Email">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="col-md-12 col-sm-12 col-lg-12 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                         {{--    <label for="password" class="control-label">Password</label> --}}

                         
                                <input id="password" type="password" class="brd-rd5 form-control" name="password" required placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                           
                        </div>

                        <div class="col-md-12 col-sm-12 col-lg-12 form-group">
                            {{-- <label for="password-confirm" class="control-label">Confirm Password</label> --}}

                  
                                <input id="password-confirm" type="password" class="brd-rd5 form-control" name="password_confirmation" required placeholder="Confirm Password">
                           
                        </div>
            
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <button class="green-bg brd-rd5" type="submit">Signup Now</button>
                        </div>
                      {{--   <div class="col-md-12 col-sm-12 col-lg-12">
                            <a href="{{ route('login') }}" title="" class="frgt">Already have an account?</a>
                        </div> --}}
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <a class="brd-rd5 blue-bg act-btn" href="{{ route('login') }}" title="">Login In Now</a>
                        </div>

                        <div class="form-group">
                            @include('layouts.errors')
                        </div>

                    </div>
                </form>
            </div>
        </div>
        <footer>
          <p>Copyright <a href="#" title="">LCA Dashboard</a> &amp; 2017</p>
          {{-- <span>10GB of 250GB Free.</span> --}}
        </footer>
    </div><!-- Login Wrapper -->
</div><!-- Panel Content -->

@endsection
