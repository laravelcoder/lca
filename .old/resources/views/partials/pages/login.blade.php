@extends('layouts.app')

@section('content')
<div class="panel-content">
    <div class="lgn-wrp grysh">
        <div class="bg-img" style="background-image: url(images/resource/bg-img1.png);"></div>
        <div class="lgn-innr">
            <div class="widget lgn-frm">
                <div class="frm-tl">
                    <h4>Login to Admin</h4>
                    <span>Fill your detail to get in</span>
                </div>
                <form>
                    <div class="row mrg10">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <input class="brd-rd5" type="text" placeholder="User Name" />
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <input class="brd-rd5" type="password" placeholder="Password" />
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <span class="chbx"><input type="checkbox" id="chk1" /><label for="chk1">Remember Me</label></span>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <button class="green-bg brd-rd5" type="submit">Login Now</button>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <a href="#" title="" class="frgt">Forget password?</a>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <a class="brd-rd5 blue-bg act-btn" href="#" title="">Create An Account</a>
                        </div>
                    </div>
                </form>
            </div> 
        </div>
        <footer>
          <p>Copyright <a href="#" title="">Example Company</a> &amp; 2017</p>
          <span>10GB of 250GB Free.</span>
        </footer>
    </div><!-- Login Wrapper -->
</div><!-- Panel Content -->
@endsection