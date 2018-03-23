@extends('layouts.base')

@section('content')

<div class="panel-content">
    <div class="lgn-wrp grysh">
        <div class="bg-img" style="background-image: url({!! asset('/images/DashboardImage.jpg') !!});"></div>
        <div class="lgn-innr">
            <div class="widget lgn-frm">
                <div class="frm-tl">
                	<img id="login-logo" src="{!! asset('/images/login_logo.jpg') !!}" alt="lca logo">
                    <h4>Login to Admin</h4>
                    <span>Fill your detail to get in</span>
                </div>
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                    <div class="row mrg10">



                        <div class="col-md-12 col-sm-12 col-lg-12 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-12 control-label">E-Mail Address</label>


                                <input id="email" type="email" class="brd-rd5 form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="col-md-12 col-sm-12 col-lg-12 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-12 control-label">Password</label>


                                <input id="password" type="password" class="brd-rd5 form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                        </div>






                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <span class="chbx">
                                <input type="checkbox" name="remember" id="chk1" {{ old('remember') ? 'checked' : '' }} />
                                <label for="chk1">Remember Me</label>
                            </span>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <button class="green-bg brd-rd5" type="submit">Login Now</button>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <a href="{{ route('password.request') }}" title="" class="frgt">Forgot password?</a>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <a class="brd-rd5 blue-bg act-btn" href="{{ route('register') }}" title="">Create An Account</a>
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
          <span>by Affordable Programmer</span>
        </footer>
    </div><!-- Login Wrapper -->
</div><!-- Panel Content -->
















<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
