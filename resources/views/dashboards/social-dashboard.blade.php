@extends('layouts.app')

@section('content')
<div class="pg-tp">
    <i class="ion-cube"></i>
    <div class="pr-tp-inr">
        <h4>Welcome to <strong>LCA's</strong> <span>Comprehensive</span> Social Dashboard</h4>
        <span> </span>
    </div>
</div><!-- Page Top -->

<div class="panel-content">
    <div class="filter-items">
        <div class="row grid-wrap mrg20">
            <div class="col-md-6 grid-item col-sm-12 col-lg-6">
                <div class="row mrg20">
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <div class="stat-box widget bg-clr5 style2">
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
                            <i class="ion-cube"></i>
                            <div class="stat-box-innr">
                                <span>$ <i class="counter">1,206,90</i></span>
                                <h5>Total Revenue</h5>
                            </div>
                            <span><i class="ion-ios-stopwatch"></i> Updated: 05:14pm</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <div class="stat-box widget bg-clr6 style2">
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
                            <i class="ion-bag"></i>
                            <div class="stat-box-innr">
                                <span>$ <i class="counter">20,507</i></span>
                                <h5>Online Revenue</h5>
                            </div>
                            <span><i class="ion-ios-stopwatch"></i> Updated: 05:14pm</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <div class="stat-box widget bg-clr7 style2">
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
                            <i class="ion-speedometer"></i>
                            <div class="stat-box-innr">
                                <span><i class="counter">79</i> GB</span>
                                <h5>Bandwidth Usage</h5>
                            </div>
                            <span><i class="ion-ios-stopwatch"></i> Updated: 05:14pm</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <div class="stat-box widget bg-clr8 style2">
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
                            <i class="ion-ios-cloud-download"></i>
                            <div class="stat-box-innr">
                                <span><i class="counter">5347</i></span>
                                <h5>Download Count</h5>
                            </div>
                            <span><i class="ion-ios-stopwatch"></i> Updated: 05:14pm</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-item col-sm-12 col-lg-6">
                <div class="widget sales-summ pad50-40">
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
                    <h4 class="widget-title">Sales Difference</h4>
                    <div id="chrt1" style="height: 260px;"></div>
                </div>
            </div>
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
                                    <th><span>#</span></th>
                                    <th><span>Image</span></th>
                                    <th><span>Product Name</span></th>
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
                                    <td><img class="brd-rd5" src="images/resource/prd-img1.jpg" alt="" /></td>
                                    <td><h4><a href="#" title="">Black Jacket</a></h4></td>
                                    <td><span>4ABSD58</span></td>
                                    <td><span>10 June 2017</span></td>
                                    <td><span class="badge badge-success brd-rd5">Pending</span></td>
                                    <td><span class="prc">$99.98</span></td>
                                    <td><span>01</span></td>
                                </tr>
                                <tr>
                                    <td><span class="blue-bg indx">02</span></td>
                                    <td><img class="brd-rd5" src="images/resource/prd-img2.jpg" alt="" /></td>
                                    <td><h4><a href="#" title="">Cannon LA Camera</a></h4></td>
                                    <td><span>4OCSD51</span></td>
                                    <td><span>15 June 2017</span></td>
                                    <td><span class="badge badge-info brd-rd5">Process</span></td>
                                    <td><span class="prc">$458.98</span></td>
                                    <td><span>03</span></td>
                                </tr>
                                <tr>
                                    <td><span class="blue-bg indx">03</span></td>
                                    <td><img class="brd-rd5" src="images/resource/prd-img3.jpg" alt="" /></td>
                                    <td><h4><a href="#" title="">LR Head Phones</a></h4></td>
                                    <td><span>4ABSD60</span></td>
                                    <td><span>19 June 2017</span></td>
                                    <td><span class="badge badge-warning brd-rd5">Failed</span></td>
                                    <td><span class="prc">$99.98</span></td>
                                    <td><span>01</span></td>
                                </tr>
                                <tr>
                                    <td><span class="blue-bg indx">04</span></td>
                                    <td><img class="brd-rd5" src="images/resource/prd-img4.jpg" alt="" /></td>
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
            <div class="col-md-6 grid-item col-sm-12 col-lg-6">
                <div class="widget usr-msgs pad50-40">
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
                    <h4 class="widget-title">Message</h4>
                    <div class="msgs-lst">
                        <div class="msg-itm">
                            <span class="brd-rd50" style="background-color: #26c6da;color: #ffffff;">S <i class="sts away"></i></span>
                            <div class="msg-inf">
                                <h5>Sunil Joshi -</h5> <span class="pst-tm">12:00pm</span>
                                <div class="msg">
                                    <p>That's awesome!</p>
                                </div>
                            </div>
                        </div>
                        <div class="msg-itm">
                            <span class="brd-rd50" style="background-color: #26c6da;color: #ffffff;"><img class="brd-rd50" src="images/resource/acti-thmb2.jpg" alt="" /> <i class="sts online"></i></span>
                            <div class="msg-inf">
                                <h5>Bvesh Patel -</h5> <span class="pst-tm">01:00am</span>
                                <div class="msg">
                                    <p>That's awesome!</p>
                                </div>
                            </div>
                        </div>
                        <div class="msg-itm">
                            <span class="brd-rd50" style="background-color: #26c6da;color: #ffffff;">N <i class="sts dont-dstrb"></i></span>
                            <div class="msg-inf">
                                <h5>Nirva Joshi -</h5> <span class="pst-tm">08:40pm</span>
                                <div class="msg">
                                    <p>That's awesome!</p>
                                </div>
                            </div>
                        </div>
                        <div class="msg-itm">
                            <span class="brd-rd50" style="background-color: #26c6da;color: #ffffff;">J <i class="sts online"></i></span>
                            <div class="msg-inf">
                                <h5>Jonathan -</h5> <span class="pst-tm">12:00pm</span>
                                <div class="msg">
                                    <p>That's awesome!</p>
                                </div>
                            </div>
                        </div>
                        <div class="vw-mr"><a href="#" title="">View More</a></div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-4 grid-item col-sm-12 col-lg-4">
                <div class="widget wethr-wdgt">
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
                    <div id="wethr"></div>
                </div>
            </div> -->
            <div class="col-md-6 grid-item col-sm-12 col-lg-6">
                <div class="widget pst-wdgt pad50-40">
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
                    <div class="pst-itm">
                        <div class="pst-inf">
                            <div class="cat-btns">
                                <a href="#" title="" class="blue-bg brd-rd5">Business</a>
                                <a href="#" title="" class="green-bg brd-rd5">Dreams</a>
                            </div>
                            <h4><a href="#" title="">Grace is the beauty of form under the influence</a></h4>
                            <i>August 11, 2017</i>
                        </div>
                        <div class="pst-img" style="background-image: url(images/resource/pst-img1.jpg);"></div>
                        <p>Aenean massa. Cum sociis natoque penatibusm nis dis parturient montes, nascetur ridiculusmus Penatibus et magnis dis parturient montes, nasc etur ridiculus mus.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-item col-sm-12 col-lg-6">
                <div class="widget vctr-map pad50-40">
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
                    <h4 class="widget-title">Visitors Map</h4>
                    <div class="vc-map" id="vc-map" style="background-color: transparent;"></div>
                </div>
            </div>
            <div class="col-md-6 grid-item col-sm-12 col-lg-6">
                <div class="widget polr-chrt pad50-40">
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
                    <h4 class="widget-title">Highcharts Polar Chart</h4>
                    <div id="chart2" style="height: 300px;"></div>
                </div>
            </div>
            <div class="col-md-4 grid-item col-sm-12 col-lg-4">
                <div class="widget insta-usr pad50-40">
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
                    <div class="insta-wrp">
                        <span><img class="brd-rd50" src="images/resource/insta-dp.jpg" alt="" /><span class="sts online"></span></span>
                        <div class="insta-inf">
                            <h2><a href="#" title="">John Smith</a></h2>
                            <span class="desg">Product Manager <a class="blue-clr" href="#" title="">@GraphicXspace</a></span>
                            <span class="adrs"><i class="fa fa-map-marker blue-clr"></i> Charlotte, NC</span>
                            <div class="prf-btns">
                                <a href="#" title="" class="blue-bg brd-rd5"><i class="fa fa-check"></i> Following</a>
                                <a href="#" title="" class="green-bg brd-rd5"><i class="fa fa-envelope-o"></i> Message</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-item col-sm-12 col-lg-4">
                <div class="widget fb-usr pad50-40 fb-bg">
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
                    <div class="scl-msg-wrp">
                        <p>Ut harum ipsam molestias maxime non nisi re iendis eligendi! Doloremque quia pariatur har ea amet quibusdam quisquam, quae, tempori dolores porro doloribus.</p>
                        <i class="fa fa-facebook-square"></i>
                        <div class="scl-msg-inf">
                            <img class="brd-rd50" src="images/resource/fb-dp.jpg" alt="" />
                            <div class="scl-msg-inr">
                                <h2><a href="#" title="">John Smith</a></h2>
                                <a href="#" title="">GraphicXspace</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
            <div class="col-md-4 grid-item col-sm-12 col-lg-4">
                <div class="widget twtr-usr pad50-40 twtr-bg">
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
                    <div class="scl-msg-wrp">
                        <p>Ut harum ipsam molestias maxime non nisi re iendis eligendi! Doloremque quia pariatur har ea amet quibusdam quisquam, quae, tempori dolores porro doloribus. Consequuntur aspern atur at, eaque hic repellendus sit dicta consequ atur quae. </p>
                        <i class="fa fa-twitter"></i>
                        <div class="scl-msg-inf">
                            <img class="brd-rd50" src="images/resource/twtr-dp.jpg" alt="" />
                            <div class="scl-msg-inr">
                                <h2><a href="#" title="">Elon Musk</a></h2>
                                <a href="#" title="">@GraphicDesigner</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Filter Items -->
    </div>
</div><!-- Panel Content -->
<script type="text/javascript">
$(document).ready(function () {
    'use strict';

    Highcharts.chart('chrt1', {
        colors: ['#f7f7f7','#ece5e4'],
        chart: {
            type: 'area',
            backgroundColor: "#3B4047",
            borderColor: "#535353"
        },
        legend: {
            enabled: false
        },
        title: {
            style: {
                    display: 'none'
                }
        },
        xAxis: {
            lineColor: '#535353',
            categories: ['2010', '2011', '2012', '2013', '2014', '2015', '2016'],
            labels: {
                style: {
                    color: '#fff'
                }
            }
        },
        yAxis: {
            min: 0,
            labels: {
                style: {
                    color: '#fff'
                }
            }
        },
        credits: {
            enabled: false
        },
        tooltip: {
            pointFormat: '{series.name} produced <b>{point.y:,.0f}</b><br/>warheads in {point.x}'
        },
        legend: {
          align: 'right',
          verticalAlign: 'top',
          itemStyle: {
            color: '#fff',
            fontSize: '13px',
            fontWeight: '300'
          },
       },      
        plotOptions: {
            area: {
                categories: ['1', '2', '3', '4', '5', '6', '7'],
                marker: {
                    enabled: false,
                    symbol: 'circle',
                    radius: 2,
                    states: {
                        hover: {
                            enabled: true
                        }
                    }
                }
            }
        },
        series: [{
            name: 'Site A View',
            data: [18,45,35,10,85,25,90]
        }, {
            name: 'Site B View',
            data: [45,50,25,85,55,65,70]
        }]
    });

    Highcharts.chart('chart2', {

        chart: {
            polar: true,
            backgroundColor: "#3B4047",
            borderColor: "#535353"
        },

        title: {
            text: null
        },

        pane: {
            startAngle: 0,
            endAngle: 360
        },

        xAxis: {
            lineColor: '#535353',
            tickInterval: 45,
            min: 0,
            max: 360,
            labels: {
                formatter: function () {
                    return this.value + '°';
                },
                style: {
                    color: '#fff'
                }
            }
        },
        yAxis: {
            min: 0,
            labels: {
                style: {
                    color: '#fff'
                }
            }
        },

        plotOptions: {
            series: {
                pointStart: 0,
                pointInterval: 45
            },
            column: {
                pointPadding: 0,
                groupPadding: 0
            }
        },
        legend: {
          align: 'right',
          verticalAlign: 'top',
          itemStyle: {
            color: '#ede',
            fontSize: '13px',
            fontWeight: '300'
          },
          itemHoverStyle: {
            color: '#fff'
          },
       }, 
        series: [{
            type: 'column',
            name: 'Column',
            data: [8, 7, 6, 5, 4, 3, 2, 1],
            pointPlacement: 'between'
        }, {
            type: 'line',
            name: 'Line',
            data: [1, 2, 3, 4, 5, 6, 7, 8]
        }, {
            type: 'area',
            name: 'Area',
            data: [1, 8, 2, 7, 3, 6, 4, 5]
        }]
    });

    //===== To DO List Add Task Field =====//
    $('.to-do-tp > a').on('click', function(){
        $(this).next('div.add-tsk').slideToggle();
        return false;
    });

    //===== To Do List =====//
    $('.td-lst > li').on('click', function () {
        $(this).toggleClass('completed');
        return false;
    });

    //===== To Do List Deleted =====//
    $('.td-lst > li > a').on('click', function () {
        $(this).parent('li').slideUp();
        return false;
    });

    $('.add-tsk form > button').on('click', function () {
        var task_list = $('ul.td-lst');
        var task_item = $('.add-tsk form > input').val();
        var date = new Date();
        var months = ["Jan","Feb","Mar","Apr","May","Jun","Jul",
        "Aug","Sep","Oct","Nov","Dec"];
        var current_date = date.getDate()+' '+months[date.getMonth()]+' '+date.getFullYear();
        if (task_item !== '' && task_item !== 'undefined') {
            $(task_list).prepend('<li><h5>' + task_item + '</h5> <span><i class="ion-ios-stopwatch"></i>' + current_date + '</span> <a href="#" title=""><i class="ion-android-delete"></i></a></li>');
            $('.td-lst > li').on("click", function () {
                $(this).toggleClass('active');
            });
            $('.add-tsk form > input').addClass('null');
            $('.add-tsk form > input').val('');
            $('.add-tsk form > input').focus();
            var attribute = $("ul.td-lst").children('li').eq(0).children('i');
            return false;
        }
    });

    //===== Circliful =====//
    if ($.isFunction($.fn.circliful)) {
        $('#circl-prg').circliful({
            animation: 1,
            animationStep: 3,
            foregroundBorderWidth: 5,
            backgroundBorderWidth: 5,
            percent: 66,
            textSize: 35,
            foregroundColor: '#50b8aa',
            backgroundColor: "#96d5f7",
            textStyle: 'font-size: 20px;',
            textColor: '#555555',
        });
    }

    //===== Full Calendar =====//
    if ($.isFunction($.fn.fullCalendar)) {
        $('#calendar').fullCalendar({
            header: {
                left: 'prev',
                center: 'title',
                right: 'next'
            },
            height: 530,
            defaultDate: '2017-09-12',
            editable: true,
            eventLimit: true,
            events: [
                {
                    title: 'Long Event...',
                    start: '2017-09-04'
                },
                {
                    title: 'Repeating Event',
                    start: '2017-09-09',
                    end: '2017-09-10'
                },
                {
                    title: 'Word Show...',
                    start: '2017-09-21'
                }
            ]
        });
    }

    $('.grid-item').draggable();

});
</script>
@endsection