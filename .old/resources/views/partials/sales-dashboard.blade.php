@extends('layouts.app')

@section('content')
<div class="pg-tp">
    <i class="ion-cube"></i>
    <div class="pr-tp-inr">
        <h4>Welcome to <strong>LCA's</strong> <span>Comprehensive</span> Sales Dashboard</h4>
        <span> </span>
    </div>
</div><!-- Page Top -->

<div class="panel-content">
 
</div><!-- Panel Content -->
<script type="text/javascript">
$(document).ready(function () {
    'use strict';

    Highcharts.chart('chrt1', {
        colors: ['#dadada','#67ba5f'],
        chart: {
            type: 'area',
            backgroundColor: "#3B4047",
            borderColor: "#535353"
        },
        legend: {
            enabled: false
        },
        title: {
            text: 'Active users in current month (December)',
            style: { "color": "#fff", "fontSize": "12px" }
        },
        xAxis: {
            minorGridLineColor: '#535353',
            categories: ['1', '2', '3', '4', '5', '6', '7'],
            labels: {
                style: {
                    color: '#fff'
                }
            }
        },
        yAxis: {
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
            data: [18,45,35,10,85,25,90]
        }, {
            data: [45,50,25,85,55,65,70]
        }]
    });

    Highcharts.chart('chrt2', {
        colors: ['#dadada','#f89898'],
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
            categories: ['1', '2', '3', '4', '5', '6', '7'],
            labels: {
                style: {
                    color: '#fff'
                }
            }
        },
        yAxis: {
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
            data: [18,45,35,10,85,25,90]
        }, {
            data: [45,50,25,85,55,65,70]
        }]
    });

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        $('#chrt3').highcharts({
            colors: ['#dadada','#f89898'],
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
                categories: ['1', '2', '3', '4', '5', '6', '7'],
                labels: {
                    style: {
                        color: '#fff'
                    }
                }
            },
            yAxis: {
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
                data: [18,45,35,10,85,25,90]
            }, {
                data: [45,50,25,85,55,65,70]
            }]
        });
    });

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        $('#chrt4').highcharts({
            colors: ['#dadada','#f89898'],
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
                categories: ['1', '2', '3', '4', '5', '6', '7'],
                labels: {
                    style: {
                        color: '#fff'
                    }
                }
            },
            yAxis: {
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
                data: [18,45,35,10,85,25,90]
            }, {
                data: [45,50,25,85,55,65,70]
            }]
        });
    });

    Highcharts.chart('chart5', {
        colors: ['#fc4b6c', '#26c6da', '#1e88e5'],
        chart: {
            type: 'column',
            backgroundColor: "#3B4047",
            borderColor: "#535353"
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
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
        title: {text: null},
        tooltip: {
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            shared: true
        },
        plotOptions: {
            column: {stacking: 'percent'}

        },
        legend: {
          align: 'right',
          verticalAlign: 'top',
          symbolRadius: 0,
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
            name: '2017',
            data: [500, 750, 1000, 1250, 1500, 1750, 2000, 2250, 1700, 2100, 900, 800,]
        }, {
            name: '2016',
            data: [1500, 1750, 2000, 2250, 500, 750, 1000, 1250, 1700, 2100, 900, 800,]
        }, {
            name: '2015',
            data: [1700, 2100, 900, 800, 500, 750, 1000, 1250, 1500, 1750, 2000, 2250,]
        }]
    });

    //===== ToolTip =====//
    if ($.isFunction($.fn.tooltip)) {
        $('[data-toggle="tooltip"]').tooltip();
    }

    $('.grid-item').draggable();
});
</script>
@endsection