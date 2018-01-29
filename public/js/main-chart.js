(function ($, window, document, undefined) {
    var chart1 = {
        init:function() {
            var url = $.get("http://www.infra911.com/data.php?Act=data1_1&paramGID=0&GidList=", function () {
            }).done(function (data) {
                var newdata = $.parseJSON(data.replace(/'/g, '"'));
                [].forEach.call(newdata, function (inst, i) {
                    // Iterate through all the keys
                    [].forEach.call(Object.keys(inst), function (y) {
                        // Check if string is Numerical string
                        if (!isNaN(newdata[i][y]))
                        //Convert to numerical value
                            newdata[i][y] = +newdata[i][y];
                    });

                });
                var chart = AmCharts.makeChart("chart1", {
                    "type": "serial",
                    "theme": "none",
                    "marginRight": 40,
                    "marginLeft": 40,
                    "autoMarginOffset": 20,
                    "mouseWheelZoomEnabled":true,
                    "dataDateFormat": "YYYY-MM-DD",
                    "valueAxes": [{
                        "id": "v1",
                        "axisAlpha": 0,
                        "position": "left",
                        "ignoreAxisWidth":true
                    }],
                    "balloon": {
                        "borderThickness": 1,
                        "shadowAlpha": 0
                    },
                    "graphs": [{
                        "id": "g1",
                        "balloon":{
                            "drop":true,
                            "adjustBorderColor":false,
                            "color":"#ffffff"
                        },
                        "bullet": "square",
                        "bulletBorderAlpha": 1,
                        "bulletColor": "#FFFFFF",
                        "bulletSize": 5,
                        "hideBulletsCount": 50,
                        "lineThickness": 2,
                        "title": "red line",
                        "useLineColorForBulletBorder": true,
                        "valueField": "value",
                        "balloonText": "<span style='font-size:18px;'>[[value]]</span>"
                    }],
                    "chartScrollbar": {
                        "graph": "g1",
                        "oppositeAxis":false,
                        "offset":30,
                        "scrollbarHeight": 80,
                        "backgroundAlpha": 0,
                        "selectedBackgroundAlpha": 0.1,
                        "selectedBackgroundColor": "#888888",
                        "graphFillAlpha": 0,
                        "graphLineAlpha": 0.5,
                        "selectedGraphFillAlpha": 0,
                        "selectedGraphLineAlpha": 1,
                        "autoGridCount":true,
                        "color":"#AAAAAA",
                        "enabled":false
                    },
                    "chartCursor": {
                        "pan": true,
                        "valueLineEnabled": true,
                        "valueLineBalloonEnabled": true,
                        "cursorAlpha":1,
                        "cursorColor":"#258cbb",
                        "limitToGraph":"g1",
                        "valueLineAlpha":0.2,
                        "valueZoomable":true,
                        "enabled":false
                    },
                    "valueScrollbar":{
                        "oppositeAxis":false,
                        "offset":50,
                        "scrollbarHeight":10
                    },
                    "categoryField": "polltime",
                    "categoryAxis": {
                        "parseDates": false,
                        "dashLength": 1,
                        "minorGridEnabled": true,
                        "tickLength": 20
                    },
                    "export": {
                        "enabled": false
                    },
                    "dataProvider": newdata
                });


            });

        }
    };
    var chart9 = {
        init:function() {
            AmCharts.makeChart("chart9",
                {
                    "type": "serial",
                    "categoryField": "polltime",
                    "autoMarginOffset": 40,
                    "marginRight": 70,
                    "marginTop": 70,
                    "startDuration": 1,
                    "fontSize": 13,
                    "theme": "patterns",
                    "categoryAxis": {
                        "gridPosition": "start"
                    },
                    "trendLines": [],
                    "graphs": [
                        {
                            "balloonText": "[[title]] of [[value1]]:[[value]]",
                            "fillAlphas": 0.9,
                            "id": "AmGraph-1",
                            "title": "graph 1",
                            "type": "column",
                            "valueField": "value1"
                        },
                        {
                            "balloonText": "[[title]] of [[value2]]:[[value]]",
                            "fillAlphas": 0.9,
                            "id": "AmGraph-2",
                            "title": "graph 2",
                            "type": "column",
                            "valueField": "value2"
                        }
                    ],
                    "guides": [],
                    "valueAxes": [
                        {
                            "id": "ValueAxis-1",
                            "title": "Axis title"
                        }
                    ],
                    "allLabels": [],
                    "balloon": {},
                    "titles": [],
                    "dataLoader": {
                        "url": "/dataJsonChart/chart9.json",
                        "format": "json"
                    }
                }
            );

        }
    };

    var chart3 = {
        init:function() {
            var url = $.get("http://www.infra911.com/data.php?Act=data1_5&paramGID=0&GidList=", function () {
            }).done(function (data) {
                var newdata = $.parseJSON(data.replace(/'/g, '"'));
                [].forEach.call(newdata, function (inst, i) {
                    // Iterate through all the keys
                    [].forEach.call(Object.keys(inst), function (y) {
                        // Check if string is Numerical string
                        if (!isNaN(newdata[i][y]))
                        //Convert to numerical value
                            newdata[i][y] = +newdata[i][y];
                    });

                });
                var chart = AmCharts.makeChart("chart3", {
                    "type": "serial",
                    "theme": "light",
                    "marginRight": 70,
                    "dataProvider": newdata,
                    "valueAxes": [{
                        "axisAlpha": 0,
                        "position": "left",
                        "title": ""
                    }],
                    "startDuration": 1,
                    "graphs": [{
                        "balloonText": "<b>[[category]]: [[value]]</b>",
                        "fillColorsField": "color",
                        "fillAlphas": 0.9,
                        "lineAlpha": 0.2,
                        "type": "column",
                        "valueField": "value"
                    }],
                    "chartCursor": {
                        "categoryBalloonEnabled": false,
                        "cursorAlpha": 0,
                        "zoomable": false
                    },
                    "categoryField": "polltime",
                    "categoryAxis": {
                        "gridPosition": "start",
                        "labelRotation": 45
                    },
                    "export": {
                        "enabled": false
                    }

                });
            });
        }
    };
    var chart6 = {
        init:function() {
            var chart = AmCharts.makeChart("chart6", {
                "theme": "none",
                "type": "serial",
                    "dataLoader": {
                        "url": "/dataJsonChart/chart6.json",
                        "format": "json"
                    },
                "valueAxes": [{
                    "stackType": "3d",
                    "unit": "%",
                    "position": "left",
                    "title": "",
                }],
                "legend": {
                    "horizontalGap": 10,
                    "maxColumns": 1,
                    "position": "right",
                    "useGraphSettings": true,
                    "markerSize": 10
                },
                "startDuration": 1,
                "graphs": [{
                    "balloonText": "warning [[category]] : <b>[[value]]</b>",
                    "fillAlphas": 0.9,
                    "lineAlpha": 0.2,
                    "title": "warning",
                    "type": "column",
                    "valueField": "warning"
                }, {
                    "balloonText": "alarm [[category]] : <b>[[value]]</b>",
                    "fillAlphas": 0.9,
                    "lineAlpha": 0.2,
                    "title": "alarm",
                    "type": "column",
                    "valueField": "alarm"
                },{
                    "balloonText": "critical [[category]] : <b>[[value]]</b>",
                    "fillAlphas": 0.9,
                    "lineAlpha": 0.2,
                    "title": "critical",
                    "type": "column",
                    "valueField": "critical"
                },{
                    "balloonText": "down [[category]]: <b>[[value]]</b>",
                    "fillAlphas": 0.9,
                    "lineAlpha": 0.2,
                    "title": "down",
                    "type": "column",
                    "valueField": "down"
                }],
                "plotAreaFillAlphas": 0.1,
                "depth3D": 20,
                "angle": 30,
                "categoryField": "polltime",
                "categoryAxis": {
                    "gridPosition": "start"
                },
                "export": {
                    "enabled": false
                }
            });
            jQuery('.chart-input').off().on('input change',function() {
                var property	= jQuery(this).data('property');
                var target		= chart;
                chart.startDuration = 0;

                if ( property == 'topRadius') {
                    target = chart.graphs[0];
                    if ( this.value == 0 ) {
                        this.value = undefined;
                    }
                }

                target[property] = this.value;
                chart.validateNow();
            });
        }
    };
    var chart4 = {
        init:function() {
            var url = $.get("http://www.infra911.com/data.php?Act=data1_7&paramGID=0&GidList=", function () {
            }).done(function (data) {
                var newdata = $.parseJSON(data.replace(/'/g, '"'));
                [].forEach.call(newdata, function (inst, i) {
                    // Iterate through all the keys
                    [].forEach.call(Object.keys(inst), function (y) {
                        // Check if string is Numerical string
                        if (!isNaN(newdata[i][y]))
                        //Convert to numerical value
                            newdata[i][y] = +newdata[i][y];
                    });

                });
                var chart = AmCharts.makeChart("chart4", {
                    "type": "pie",
                    "theme": "none",
                    "titles": [{
                        "text": "",
                        "size": 16
                    }],
                    "legend": {
                        "horizontalGap": 10,
                        "maxColumns": 1,
                        "position": "right",
                        "useGraphSettings": true,
                        "markerSize": 10
                    },
                    "dataProvider": newdata,
                    "valueField": "value",
                    "titleField": "group",
                    "startEffect": "elastic",
                    "startDuration": 2,
                    "labelRadius": 15,
                    "innerRadius": "50%",
                    "depth3D": 10,
                    "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
                    "angle": 15,
                    "export": {
                        "enabled": false
                    }
                });
                jQuery(document).ajaxComplete(function () {
                    jQuery("a[title='JavaScript charts']").remove();
                });
            });
        }
    };
    var chart5 = {
        init:function() {
            var chart = AmCharts.makeChart("chart5", {
                "type": "serial",
                "theme": "none",
                "marginRight": 40,
                "marginLeft": 40,
                "autoMarginOffset": 20,
                "mouseWheelZoomEnabled":true,
                "dataDateFormat": "YYYY-MM-DD",
                "valueAxes": [{
                    "id": "v1",
                    "axisAlpha": 0,
                    "position": "left",
                    "ignoreAxisWidth":true
                }],
                "balloon": {
                    "borderThickness": 1,
                    "shadowAlpha": 0
                },
                "graphs": [{
                    "id": "g1",
                    "balloon":{
                        "drop":true,
                        "adjustBorderColor":false,
                        "color":"#ffffff"
                    },
                    "bullet": "round",
                    "bulletBorderAlpha": 1,
                    "bulletColor": "#FFFFFF",
                    "bulletSize": 5,
                    "hideBulletsCount": 50,
                    "lineThickness": 2,
                    "title": "red line",
                    "useLineColorForBulletBorder": true,
                    "valueField": "value",
                    "balloonText": "<span style='font-size:18px;'>[[value]]</span>"
                }],
                "chartScrollbar": {
                    "graph": "g1",
                    "oppositeAxis":false,
                    "offset":30,
                    "scrollbarHeight": 80,
                    "backgroundAlpha": 0,
                    "selectedBackgroundAlpha": 0.1,
                    "selectedBackgroundColor": "#888888",
                    "graphFillAlpha": 0,
                    "graphLineAlpha": 0.5,
                    "selectedGraphFillAlpha": 0,
                    "selectedGraphLineAlpha": 1,
                    "autoGridCount":true,
                    "color":"#AAAAAA",
                    "enabled":false
                },
                "chartCursor": {
                    "pan": true,
                    "valueLineEnabled": true,
                    "valueLineBalloonEnabled": true,
                    "cursorAlpha":1,
                    "cursorColor":"#258cbb",
                    "limitToGraph":"g1",
                    "valueLineAlpha":0.2,
                    "valueZoomable":true,
                    "enabled":false
                },
                "valueScrollbar":{
                    "oppositeAxis":false,
                    "offset":50,
                    "scrollbarHeight":10
                },
                "categoryField": "polltime",
                "categoryAxis": {
                    "parseDates": false,
                    "dashLength": 1,
                    "minorGridEnabled": true,
                    "tickLength": 20
                },
                "export": {
                    "enabled": false
                },
                "dataLoader": {
                    "url": "/dataJsonChart/chart5.json",
                    "format": "json"
                }
            });

            chart.addListener("rendered", zoomChart);

            zoomChart();

            function zoomChart() {
                chart.zoomToIndexes(chart.dataLoader.length - 40, chart.dataLoader.length - 1);
            }
        }
    };
    var chart7 = {
        init:function() {
            var chart = AmCharts.makeChart("chart7", {
                "type": "serial",
                "theme": "none",
                "marginRight": 40,
                "marginLeft": 40,
                "autoMarginOffset": 20,
                "mouseWheelZoomEnabled":true,
                "dataDateFormat": "YYYY-MM-DD",
                "valueAxes": [{
                    "id": "v1",
                    "axisAlpha": 0,
                    "position": "left",
                    "ignoreAxisWidth":true
                }],
                "balloon": {
                    "borderThickness": 1,
                    "shadowAlpha": 0
                },
                "graphs": [{
                    "id": "g1",
                    "balloon":{
                        "drop":true,
                        "adjustBorderColor":false,
                        "color":"#ffffff"
                    },
                    "bullet": "round",
                    "bulletBorderAlpha": 1,
                    "bulletColor": "#FFFFFF",
                    "bulletSize": 5,
                    "hideBulletsCount": 50,
                    "lineThickness": 2,
                    "title": "red line",
                    "useLineColorForBulletBorder": true,
                    "valueField": "value",
                    "balloonText": "<span style='font-size:18px;'>[[value]]</span>"
                }],
                "chartScrollbar": {
                    "graph": "g1",
                    "oppositeAxis":false,
                    "offset":30,
                    "autoHide": true,
                    "scrollbarHeight": 80,
                    "backgroundAlpha": 0,
                    "selectedBackgroundAlpha": 0.1,
                    "selectedBackgroundColor": "#888888",
                    "graphFillAlpha": 0,
                    "graphLineAlpha": 0.5,
                    "selectedGraphFillAlpha": 0,
                    "selectedGraphLineAlpha": 1,
                    "autoGridCount":true,
                    "color":"#AAAAAA",
                    "enabled" :false
                },
                "chartCursor": {
                    "pan": true,
                    "valueLineEnabled": true,
                    "valueLineBalloonEnabled": true,
                    "cursorAlpha":1,
                    "cursorColor":"#258cbb",
                    "limitToGraph":"g1",
                    "valueLineAlpha":0.2,
                    "valueZoomable":true,
                    "enabled" :false
                },
                "valueScrollbar":{
                    "oppositeAxis":false,
                    "offset":50,
                    "scrollbarHeight":10
                },
                "categoryField": "polltime",
                "categoryAxis": {
                    "parseDates": false,
                    "dashLength": 1,
                    "minorGridEnabled": true,
                    "tickLength": 20,
                    "axisColor": "#555555"
                },
                "export": {
                    "enabled": false
                },
                "dataLoader": {
                    "url": "/dataJsonChart/chart7.json",
                    "format": "json"
                }
            });

            chart.addListener("rendered", zoomChart);

            zoomChart();

            function zoomChart() {
                chart.zoomToIndexes(chart.dataLoader.length - 40, chart.dataLoader.length - 1);
            }
        }
    };
    var chart8 = {
        init:function() {
            var gaugeChart = AmCharts.makeChart("chartdiv8", {
                "type": "gauge",
                "theme": "light",
                "axes": [{
                    "axisAlpha": 0,
                    "tickAlpha": 0,
                    "labelsEnabled": false,
                    "startValue": 0,
                    "endValue": 100,
                    "startAngle": 0,
                    "endAngle": 270,
                    "bands": [{
                        "color": "#eee",
                        "startValue": 0,
                        "endValue": 100,
                        "radius": "100%",
                        "innerRadius": "85%"
                    }, {
                        "color": "#84b761",
                        "startValue": 0,
                        "endValue": 80,
                        "radius": "100%",
                        "innerRadius": "85%",
                        "balloonText": "90%"
                    }, {
                        "color": "#eee",
                        "startValue": 0,
                        "endValue": 100,
                        "radius": "80%",
                        "innerRadius": "65%"
                    }, {
                        "color": "#fdd400",
                        "startValue": 0,
                        "endValue": 35,
                        "radius": "80%",
                        "innerRadius": "65%",
                        "balloonText": "35%"
                    }, {
                        "color": "#eee",
                        "startValue": 0,
                        "endValue": 100,
                        "radius": "60%",
                        "innerRadius": "45%"
                    }, {
                        "color": "#cc4748",
                        "startValue": 0,
                        "endValue": 92,
                        "radius": "60%",
                        "innerRadius": "45%",
                        "balloonText": "92%"
                    }, {
                        "color": "#eee",
                        "startValue": 0,
                        "endValue": 100,
                        "radius": "40%",
                        "innerRadius": "25%"
                    }, {
                        "color": "#67b7dc",
                        "startValue": 0,
                        "endValue": 68,
                        "radius": "40%",
                        "innerRadius": "25%",
                        "balloonText": "68%"
                    }]
                }],
                "allLabels": [{
                    "text": "First option",
                    "x": "49%",
                    "y": "5%",
                    "size": 15,
                    "bold": true,
                    "color": "#84b761",
                    "align": "right"
                }, {
                    "text": "Second option",
                    "x": "49%",
                    "y": "15%",
                    "size": 15,
                    "bold": true,
                    "color": "#fdd400",
                    "align": "right"
                }, {
                    "text": "Third option",
                    "x": "49%",
                    "y": "24%",
                    "size": 15,
                    "bold": true,
                    "color": "#cc4748",
                    "align": "right"
                }, {
                    "text": "Fourth option",
                    "x": "49%",
                    "y": "33%",
                    "size": 15,
                    "bold": true,
                    "color": "#67b7dc",
                    "align": "right"
                }],
                "export": {
                    "enabled": false
                }
            });
        }
    };
    var chart2 = {
        init: function () {
            var url = $.get("http://www.infra911.com/data.php?Act=data1_2&paramGID=0&GidList=", function () {
            }).done(function (data) {
                var newdata = $.parseJSON(data.replace(/'/g, '"'));
                [].forEach.call(newdata, function (inst, i) {
                    // Iterate through all the keys
                    [].forEach.call(Object.keys(inst), function (y) {
                        // Check if string is Numerical string
                        if (!isNaN(newdata[i][y]))
                        //Convert to numerical value
                            newdata[i][y] = +newdata[i][y];
                    });

                });
                var chart = AmCharts.makeChart("chart2", {
                    "type": "serial",
                    "theme": "none",
                    "marginRight": 40,
                    "marginLeft": 40,
                    "autoMarginOffset": 20,
                    "mouseWheelZoomEnabled":true,
                    "dataDateFormat": "YYYY-MM-DD",
                    "valueAxes": [{
                        "id": "v1",
                        "axisAlpha": 0,
                        "position": "left",
                        "ignoreAxisWidth":true
                    }],
                    "balloon": {
                        "borderThickness": 1,
                        "shadowAlpha": 0
                    },
                    "graphs": [{
                        "id": "g1",
                        "balloon":{
                            "drop":true,
                            "adjustBorderColor":false,
                            "color":"#ffffff"
                        },
                        "bullet": "square",
                        "bulletBorderAlpha": 1,
                        "bulletColor": "#FFFFFF",
                        "bulletSize": 5,
                        "hideBulletsCount": 50,
                        "lineThickness": 2,
                        "title": "red line",
                        "useLineColorForBulletBorder": true,
                        "valueField": "value",
                        "balloonText": "<span style='font-size:18px;'>[[value]]</span>"
                    }],
                    "chartScrollbar": {
                        "graph": "g1",
                        "oppositeAxis":false,
                        "offset":30,
                        "scrollbarHeight": 80,
                        "backgroundAlpha": 0,
                        "selectedBackgroundAlpha": 0.1,
                        "selectedBackgroundColor": "#888888",
                        "graphFillAlpha": 0,
                        "graphLineAlpha": 0.5,
                        "selectedGraphFillAlpha": 0,
                        "selectedGraphLineAlpha": 1,
                        "autoGridCount":true,
                        "color":"#AAAAAA",
                        "enabled":false
                    },
                    "chartCursor": {
                        "pan": true,
                        "valueLineEnabled": true,
                        "valueLineBalloonEnabled": true,
                        "cursorAlpha":1,
                        "cursorColor":"#258cbb",
                        "limitToGraph":"g1",
                        "valueLineAlpha":0.2,
                        "valueZoomable":true,
                        "enabled":false
                    },
                    "valueScrollbar":{
                        "oppositeAxis":false,
                        "offset":50,
                        "scrollbarHeight":10
                    },
                    "categoryField": "polltime",
                    "categoryAxis": {
                        "parseDates": false,
                        "dashLength": 1,
                        "minorGridEnabled": true,
                        "tickLength": 20
                    },
                    "export": {
                        "enabled": false
                    },
                    "dataProvider": newdata
                });


            });
        }

    };
    $(document).ready(function () {
        chart1.init();
        chart2.init();
        chart3.init();
        chart4.init();
        chart5.init();
        chart6.init();
        chart7.init();
        chart8.init();
        chart9.init();
        setInterval(function(){
            chart1.init();
            chart2.init();
            chart3.init();
            chart4.init();
            chart5.init();
            chart6.init();
            chart7.init();
            chart8.init();
            chart9.init();
        }, 60000);
    });
})(jQuery, window, document);