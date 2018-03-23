@extends('layouts.app')

@section('content')
<div class="pg-tp">
    <i class="ion-cube"></i>
    <div class="pr-tp-inr">
        <h4>Welcome to <strong>LCA's</strong> <span>Comprehensive</span> Analytical Dashboard</h4>
        <span> </span>
    </div>
</div><!-- Page Top -->

<div class="panel-content">
    <div class="filter-items">
        <div class="row grid-wrap mrg20">

        	{!! $analyticsdata_mvp !!}

      {{--       <div class="col-md-6 grid-item col-sm-12 col-lg-6">
                <div class="wdgt-opt">
                    <span class="wdgt-opt-btn"><i class="ion-android-more-vertical"></i></span>
                    <div class="wdgt-opt-lst brd-rd5">
                        <a class="delt-wdgt" href="#" title="">Delete</a>
                        <a class="expnd-wdgt" href="#" title="">Expand</a>
                        <a class="refrsh-wdgt" href="#" title="">Refresh</a>
                    </div>
                </div>

                <div id="here" class="widget pad50-65">
                        <div class="widget-title2">
                            <h3>www.liceclinicsofamerica.com</h3>
                            <h4>Top Refferers </h4>
                        </div>

                </div>
                <script>
                var jArr =  {!! $topreferrers !!};
                var tableData = '<table id="topreferrers" class="table table-inverse">' +
                    '<thead>' +
                    '<tr>' +
                    '<td>Referrer</td>' +
                    '<td>Visits</td>' +
                    '</tr>' +
                    '</thead><tbody>';
                $.each(jArr, function(index, data) {
                    tableData += '<tr><td>'+data.url+'</td><td>'+data.pageViews+'</td></tr>';

                });
                tableData += '</tbody>'
                $('div#here').append(tableData);
                // $( "tr" ).filter( ":even" ).css( "background-color", "red" );
                $('tr').each(function(){
                    if($('td:contains("facebook")', this).length){
                        $(this).addClass('bg-primary');
                    }
                });
                $('tr').each(function(){
                    if($('td:contains("google")', this).length){
                        $(this).addClass('bg-success');
                    }
                });
                </script>
            </div> --}}
            <div class="col-md-8 grid-item" id="getRequestData"> </div>

            <div class="col-md-8 grid-item" id="getTopRefferers"> </div>

            <br style="clear:both" />
            <div class="col-md-8 grid-item" >
                <button type="button" class="btn btn-primary" id="getRequest">GET REQUEST</button>
            </div>

            <div class="col-md-8 grid-item" >
                <button type="button" class="btn btn-primary" id="refreshdata">Refresh Data</button>
            </div>
            <br style="clear:both" />


            <div style="clear:both"></div>


            <div class="col-md-12 grid-item col-sm-12 col-lg-12">
                <div class="widget prd-wdgt pad50-40">
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
                    <div class="table-wrap">
                        <table class="table style2 style3">
                            <thead class="table-inverse">
                                <tr>
                                    <th><span>Page Title</span></th>
                                    <th><span>Visitors</span></th>
                                    <th><span>Page Views</span></th>
                                    <th><span>Product Code</span></th>
                                    <th><span>Purchased on</span></th>
                                    <th><span>Status</span></th>
                                    <th><span>Price</span></th>
                                    <th><span>QTY</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="blue-bg indx">01</span></td>
                                    <td><img class="brd-rd5" src="{!! asset('/images/resource/prd-img1.jpg') !!}" alt="" /></td>
                                    <td><h4><a href="#" title="">Black Jacket</a></h4></td>
                                    <td><span>4ABSD58</span></td>
                                    <td><span>10 June 2017</span></td>
                                    <td><span class="badge badge-success brd-rd5">Pending</span></td>
                                    <td><span class="prc">$99.98</span></td>
                                    <td><span>01</span></td>
                                </tr>
                                <tr>
                                    <td><span class="blue-bg indx">02</span></td>
                                    <td><img class="brd-rd5" src="{!! asset('/images/resource/prd-img2.jpg') !!}" alt="" /></td>
                                    <td><h4><a href="#" title="">Cannon LA Camera</a></h4></td>
                                    <td><span>4OCSD51</span></td>
                                    <td><span>15 June 2017</span></td>
                                    <td><span class="badge badge-info brd-rd5">Process</span></td>
                                    <td><span class="prc">$458.98</span></td>
                                    <td><span>03</span></td>
                                </tr>
                                <tr>
                                    <td><span class="blue-bg indx">03</span></td>
                                    <td><img class="brd-rd5" src="{!! asset('/images/resource/prd-img3.jpg') !!}" alt="" /></td>
                                    <td><h4><a href="#" title="">LR Head Phones</a></h4></td>
                                    <td><span>4ABSD60</span></td>
                                    <td><span>19 June 2017</span></td>
                                    <td><span class="badge badge-warning brd-rd5">Failed</span></td>
                                    <td><span class="prc">$99.98</span></td>
                                    <td><span>01</span></td>
                                </tr>
                                <tr>
                                    <td><span class="blue-bg indx">04</span></td>
                                    <td><img class="brd-rd5" src="{!! asset('/images/resource/prd-img4.jpg') !!}" alt="" /></td>
                                    <td><h4><a href="#" title="">Watch RA Duble</a></h4></td>
                                    <td><span>4OCSD68</span></td>
                                    <td><span>20 June 2017</span></td>
                                    <td><span class="badge badge-info brd-rd5">Process</span></td>
                                    <td><span class="prc">$199.98</span></td>
                                    <td><span>03</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>




        </div><!-- Filter Items -->
    </div>
</div><!-- Panel Content -->

@endsection

@section('css')
@endsection

@section('scripts')
<script type="text/javascript">
$(document).ready(function () {
    $('#getRequest').click(function(){
        $.get('getRequest', function(data){
            $('#getRequestData').append(data);
            console.log(data);
        });
    });
    // $( window ).load(function() {


    // });
});
(function() {
  var toprefs = "{{ URL::to('/toprefs/read-data/') }}";
  $.getJSON( toprefs, {
    tags: "mount rainier",
    tagmode: "any",
    format: "json"
  })
    .done(function( data ) {
      $.each( data.items, function( i, item ) {
        $( "<img>" ).attr( "src", item.media.m ).appendTo( "#images" );
        if ( i === 3 ) {
          return false;
        }
      });
    });
})();
// $("#getTopRefferers").load(function(){
</script>
@endsection