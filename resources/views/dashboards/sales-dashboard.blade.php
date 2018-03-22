@extends('layouts.app')

@section('content')
<div class="pg-tp">
    <i class="ion-cube"></i>
    <div class="pr-tp-inr">
        <h4>Welcome to <strong>LCA's</strong> <span>Comprehensive</span> Sales Dashboard</h4>
        <span> </span>
    </div>
</div><!-- Page Top -->

<div id="dashboard_div" class="panel-content">
    <div class="filter-items">
        <div class="row grid-wrap mrg20">




            <div class="col-md-4 grid-item col-sm-6 col-lg-3">
            </div>
            <div class="col-md-4 grid-item col-sm-6 col-lg-3">
            </div>

            <div class="col-md-12 grid-item col-sm-12 col-lg-12">
                <div class="traffic-src widget">
                    <div class="wdgt-opt">
                        <span class="wdgt-opt-btn"><i class="ion-android-more-vertical"></i></span>
                        <div class="wdgt-opt-lst brd-rd5">
                            <a class="delt-wdgt" href="#" title="">Delete</a>
                            <a class="expnd-wdgt" href="#" title="">Expand</a>
                            <a class="refrsh-wdgt" href="#" title="">Refresh</a>
                        </div>
                    </div>
                    <div class="wdgt-ldr">
                        <div class="ball-scale-multiple">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-lg-5">
                            <div class="trfc-cnt">
                                <h4 class="widget-title">Traffic Source</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="rat-itms">
                                <div class="rat-itm">
                                    <div class="rat-itm-inf">
                                        <span><i class="counter">170,20</i></span>
                                        <i>Today</i>
                                    </div>
                                    <i class="ion-connection-bars blue-clr"></i>
                                </div>
                                <div class="rat-itm">
                                    <div class="rat-itm-inf">
                                        <span><i class="counter">19.91</i>%</span>
                                        <i>Last Month</i>
                                    </div>
                                    <i class="ion-arrow-graph-down-right green-clr"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-lg-7">
                            <div class="traffic-chart-wrp">
                                <div id="chrt1" style="height: 195px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- Filter Items -->
    </div>
</div><!-- Panel Content -->

@endsection


@section('scripts')
<script type="text/javascript">
$(document).ready(function () {
});
</script>


	<!--Load the AJAX API-->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
	  // Load the Visualization API and the controls package.
	  // Packages for all the other charts you need will be loaded
	  // automatically by the system.
	  google.charts.load('current', {'packages':['corechart', 'controls']});

	  // Set a callback to run when the Google Visualization API is loaded.
	  google.charts.setOnLoadCallback(drawDashboard);

	  function drawDashboard() {
		// Everything is loaded. Assemble your dashboard...
	  }
	</script>


@endsection