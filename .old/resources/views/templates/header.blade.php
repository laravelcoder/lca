<div class="topbar">
  <div class="logo">
    <h1><a href="#" title=""><img src="{!! asset('/images/logo.png') !!}" alt="" /></a></h1>
  </div>
  <div class="topbar-data">
    <ul class="tobar-links">


    </ul>
 @if (Auth::check()):
    <div class="usr-act">
      @if(Gravatar::exists(Auth::user()->email))
          <span><img src="{{ Gravatar::src(Auth::user()->email, 40) }}" class="img-circle" alt="User Image" /><i class="sts away"></i></span>
      @else
          <span><img src="{!! asset('/images/resource/topbar-usr1.jpg') !!}" alt="" /><i class="sts away"></i></span>
      @endif

      <div class="usr-inf">
        <div class="usr-thmb brd-rd50">
      @if(Gravatar::exists(Auth::user()->email))
          <img src="{{ Gravatar::src(Auth::user()->email, 100) }}" class="img-circle" alt="User Image" />
      @else
          <img class="brd-rd50" src="{!! asset('/images/resource/usr.jpg') !!}" alt="" />
      @endif

          {{-- <i class="sts away"></i> --}}
          {{-- <a class="green-bg brd-rd5" href="#" title=""><i class="fa fa-envelope"></i></a> --}}
        </div>
        <h5><a href="#" title="">{!! Auth::user()->name !!}</a></h5>
        <span>Co Worker</span>
        <i>phone</i>
			{{--         <div class="act-pst-lk-stm">
          <a class="brd-rd5 green-bg-hover" href="#" title=""><i class="ion-heart"></i> Love</a>
          <a class="brd-rd5 blue-bg-hover" href="#" title=""><i class="ion-forward"></i> Reply</a>
        </div> --}}
        <div class="usr-ft">
          <a class="btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
             <i class="fa fa-sign-out"></i> Logout
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>

        </div>
      </div>
    </div>
    @endif
  </div>
 {{--  <div class="topbar-bottom-colors">
    <i style="background-color: #2c3e50;"></i>
    <i style="background-color: #9857b2;"></i>
    <i style="background-color: #2c81ba;"></i>
    <i style="background-color: #5dc12e;"></i>
    <i style="background-color: #feb506;"></i>
    <i style="background-color: #e17c21;"></i>
    <i style="background-color: #bc382a;"></i>
  </div> --}}
</div><!-- Topbar -->

<header class="side-header light-skin expand-header hdr-bg2-3 hdr-bgclr">
  <div class="nav-head">Main Navigation <span class="menu-trigger"><i class="ion-android-menu"></i></span></div>
  <nav class="custom-scrollbar">
    <ul class="drp-sec">
	{{--  <li class="has-drp"><a href="#" title=""><i class="ion-home"></i> <span>Dashboards</span></a>
        <ul class="sb-drp">
          <li><a href="{!! url('/dashboard') !!}" title="">Dashboard</a></li>
          <li><a href="{!! url('/dashboard2') !!}" title="">Marketing Dashboard</a></li>
          <li><a href="{!! url('/dashboard3') !!}" title="">Social Dashboard</a></li>
        </ul>
      </li> --}}
    @if(Auth::check()):
      <li><a href="{!! url('/dashboard') !!}" title=""><i class="ion-home"></i> <span><strong>LCA Dashboard</strong></span></a></li>
      <li><a href="{!! url('/analytical-dashboard') !!}" title=""><i class="ion-arrow-graph-up-right"></i> <span><strong>Analytical Dashboard</strong></span></a></li>
      <li><a href="{!! url('/sales-dashboard') !!}" title=""><i class="ion-cash"></i> <span><strong>Sales Dashboard</strong></span></a></li>
      <li><a href="{!! url('/marketing-dashboard') !!}" title=""><i class="ion-coffee"></i> <span><strong>Marketing Dashboard</strong></span></a></li>
      <li><a href="{!! url('/social-dashboard') !!}" title=""><i class="ion-android-chat"></i> <span><strong>Social Dashboard</strong></span></a></li>

      @include('layouts.menu')
      @endif
    </ul>

  </nav>
</header><!-- Side Header -->

{{-- <div class="option-panel">
  <span class="panel-btn"><i class="fa ion-android-settings fa-spin"></i></span>
  <div class="color-panel">
    <h4>Text Color</h4>
    <span class="color1" onclick="setActiveStyleSheet('color1'); return false;"><i></i></span>
    <span class="color2" onclick="setActiveStyleSheet('color2'); return false;"><i></i></span>
    <span class="color3" onclick="setActiveStyleSheet('color'); return false;"><i></i></span>
    <span class="color4" onclick="setActiveStyleSheet('color4'); return false;"><i></i></span>
    <span class="color5" onclick="setActiveStyleSheet('color5'); return false;"><i></i></span>
  </div>
  <div class="backgroundimg-panel">
    <h4>Background Image</h4>
    <span class="backgroundimg1-click" style="background-image: url(images/resource/backgroundimg1.png);"></span>
    <span class="backgroundimg2-click" style="background-image: url(images/resource/backgroundimg2.png);"></span>
    <span class="backgroundimg3-click" style="background-image: url(images/resource/backgroundimg3.png);"></span>
    <span class="backgroundimg4-click" style="background-image: url(images/resource/backgroundimg4.png);"></span>
    <span class="backgroundimg5-click" style="background-image: url(images/resource/backgroundimg5.png);"></span>
  </div>
</div><!-- Options Panel --> --}}
<script type="text/javascript">
  $(function() {
    'use strict';

    //=== Side Menu ===//
    $('ul.drp-sec li.has-drp > a').on('click', function () {
      $(this).parent().siblings().children('ul').slideUp();
      $(this).parent().siblings().removeClass('active');
      $(this).parent().children('ul').slideToggle();
      $(this).parent().toggleClass('active');
      return false;
    });

    //=== Side Menu Option ===//
    $('.menu-trigger').on('click', function () {
      $('.side-header').toggleClass('expand-header');
      $('.panel-data').toggleClass('expand-data');
      $('.footer-style1').toggleClass('expand-footer');
      $('.menu-trigger').toggleClass('active');
      $('.side-header nav h4').slideToggle();
    });

    //===== Topbar Links =====//
    $('.tobar-links > li > a').on('click', function () {
      $(this).parent().toggleClass('active');
      return false;
    });

    //===== Options Panel =====//
    $('.panel-btn').on('click', function () {
      $('.option-panel').toggleClass('slidein');
      return false;
    });

    //===== Color Picker =====*/
    $('.color-panel span').on('click', function () {
      $('.backgroundcolor-panel span').removeClass('applied');
      $(this).addClass('applied');
      return false;
    });

    //===== Color Picker =====*/
    $('.backgroundimg-panel span').on('click', function () {
      $('.backgroundimg-panel span').removeClass('applied');
      $(this).addClass('applied');
      return false;
    });

    //=== Toggle Full Screen ===//
    function goFullScreen() {
      var
        el = document.documentElement,
        rfs =
        el.requestFullScreen ||
        el.webkitRequestFullScreen ||
        el.mozRequestFullScreen ||
        el.msRequestFullscreen

      ;
      rfs.call(el);
    }
    $('#toolFullScreen').on('click', function () {
      goFullScreen();
    });

    //===== User Drop =====//
    $('.usr-act').on('click', function () {
      $(this).toggleClass('active');
      return false;
    });

    // $('html').on('click', function () {
    //   $('.usr-act').removeClass('active');
    //   return false;
    // });
  });
</script>