<?php /*a:1:{s:56:"E:\TP5.0\purchase\application\admin\view\index\home.html";i:1623766997;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="renderer" content="webkit"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="Expires" content="0"/>
    <link rel="stylesheet" href="/public/static/lib/layui/css/layui.css">
    <!--<link rel="stylesheet" href="/public/static/menuicon/iconfont.css">-->
    <link rel="stylesheet" href="/public/static/css/style.css">
    <link rel="stylesheet" href="/public/static/css/common.css">
    <title>首页</title>
</head>
<style type="text/css">
</style>
<body>
<div class="box">
    <div class="top-box d-dr-jsb">
        <div class="top-box1"></div>
       
        <!-- <div class="top-box-item">
            <div class="title">销售排名统计</div>
            <div class="top10-box">
                <div class="top10 d-dr-jsb">
                    <div class="top10-item d-dc-jcac">
                        <img src="/public/static/images/top1.png" alt="">
                        <span>45.35kg</span>
                        <span>货品规格1</span>
                    </div>
                    <div class="top10-item d-dc-jcac">
                        <img src="/public/static/images/top2.png" alt="">
                        <span>45.35kg</span>
                        <span>货品规格2</span>
                    </div>
                    <div class="top10-item d-dc-jcac">
                        <img src="/public/static/images/top3.png" alt="">
                        <span>45.35kg</span>
                        <span>货品规格3</span>
                    </div>
                </div>
                <div class="other" id="other_top" style="width: 100%; height: 239px;"></div>
            </div>
        </div> -->
        <div class="top-box2-item">
            <div class="tb-i-ri" >
                <div class="d-dc">
                    <div class="p-num">待办事项</div>
                </div>  
                <div class="serial_list">                    
                </div> 
            </div> 
        </div>
    </div>
    <div class="middle_box" style="width: 991px;height: 300px; margin-top: -391px;">
        <div class="top-box-item">
            <div class="title">供应商报价统计</div>
            <div class="layui-inline right">
                <ul class="receiveitem clearfix">
                    <!-- <li value="today">今日</li>
                    <li value="yesterday">昨日</li> -->
                    <li value="week" style="margin-top: 20px;">单位（元）</li>
                </ul>
            </div>
            <div class="" id="visit" style="width: 100%;height: 391px;"></div>
        </div>
    </div>
    <div class="bottom-box d-dr-jsb" style="margin-top: 110px;">
        <div class="receivebox" style="flex: 1;margin-right: 10px;">
            <div class="titles">
                <span>采购需求数量统计</span>
                <div class="layui-inline right">
                    <ul class="receiveitem clearfix">
                        <!-- <li class="focus" value="today">今日</li>
                        <li value="yesterday">昨日</li> -->
                        <li value="week">单位（吨）</li>
                    </ul>
                </div>
            </div>
            <div id="receivetwo1" style="width:100%;"></div>
        </div>
        <div class="receivebox" style="flex: 1;margin-left: 10px;width: 100px;">
            <div class="titles">
                <span>采购需求数量统计</span>
                <div class="layui-inline right">
                    <ul class="receiveitem clearfix">
                        <!-- <li value="today">今日</li>
                        <li value="yesterday">昨日</li> -->
                        <li value="week">单位（吨）</li>
                    </ul>
                </div>
            </div>
            <div id="receivetwo2" style="width:100%;"></div>
        </div>
    </div>
</div>
<script src="/public/static/lib/layui/layui.all.js"></script>
<script src="/public/static/js/jquery.min.js"></script>
<script src="/public/static/js/bluebirds.js"></script>
<script src="/public/static/js/echarts.js"></script>
<script>
    window.onload = function () {
        var h = document.body.clientHeight;
        h = h - 45 - 36 - 40 - 394 - 25;
        $('#receivetwo1').css({height: h + 'px'});
        $('#receivetwo2').css({height: h + 'px'});
        receivetwo({}, true);
        receivetwo1({}, true);
        receivetwo2({}, true);
        // receiveone({}, true);
    };
    window.onresize = function () {
        receivetwo({}, true);
        receivetwo1({}, true);
        receivetwo2({}, true);
        // receiveone({}, true);
    };

    function receivetwo(data, resize) {
        var myChart = echarts.init(document.getElementById('visit'));
        var option = {
            title: {
                show: false
                // text:'第一个实例'
            },
            legend: {
                show: false,
                data: [],
                right: 300,
                icon: 'circle'
            },
            grid: {
                top: 10,
                left: 10,
                right: 30,
                bottom: 80,
                containLabel: true
            },
            tooltip: {
                formatter: function(param) {  
                    console.log(param)
                        var value = param.value;  
                        var name=param.name
                        return '<div style=" font-size: 16px;padding-bottom: 7px;margin-bottom: 7px;">供应商：小明<br> 供应物料：' +name+'<br>报价价格：' + value + '<br> ' +  
                            '</div>';  
                    }  
            },
            xAxis: {
                type: 'category',
                // name: '供货物料',
                boundaryGap: false,
                axisLine: {
                    show: false
                },
                axisTick: {
                    show: false
                },
              
                data:[]
            },
            yAxis: {
                type: 'value',
                // name: '报价价格',
                axisLine: {
                    show: false
                },
                axisTick: {
                    show: false
                },
                splitLine: {
                    lineStyle: {
                        color: '#eee'
                    }
                }
            },
            series: [{
                type: 'scatter',
                name: '供应商报价统计',
                smooth: true,
                itemStyle: {
                    color: '#8B79F2'
                },
                areaStyle: {
                    color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                        offset: 0,
                        color: '#8B79F2'
                    }, {
                        offset: 1,
                        color: 'rgba(255,255,255,0)'
                    }])
                },
                // data: [121, 134, 193, 234, 120, 40, 121, 304, 193, 234, 110, 281, 121, 134, 233, 234, 110, 280, 121, 134, 193, 234, 120, 40, 121, 54, 193, 234, 110, 281, 121, 134, 250, 234, 110, 280, 120, 40, 121, 345, 193, 234]
                data:[]
            }]
        }
        $.ajax({
            url:'/public/static/js/offer.json',
            type: 'GET',
            dataType: 'json',
            success:function(res){
                console.log(res)
                if (resize)
            myChart.resize();
        myChart.setOption(
            {
                xAxis:{data:res.categories},
                series:[{name:"xia",data:res.data}]
            }
        );
            }
        })
        if (resize)
            myChart.resize();
        myChart.setOption(option);
    }

    // function receiveone(data, resize) {
    //     var myChart = echarts.init(document.getElementById('other_top'));
    //     var option = {
    //         title: {
    //             show: false,
    //         },
    //         legend: {
    //             show: false,
    //             data: [],
    //             right: 300,
    //             icon: 'circle'
    //         },
    //         textStyle: {
    //             color: '#696969',
    //         },
    //         grid: {
    //             top: 20,
    //             left: 0,
    //             right: 0,
    //             bottom: 20,
    //             containLabel: true
    //         },
    //         tooltip: {
    //             trigger: 'axis',
    //         },
    //         xAxis: {
    //             type: 'value',
    //             axisLine: {
    //                 show: false
    //             },
    //             axisTick: {
    //                 show: false
    //             },
    //             axisLabel: {
    //                 show: false
    //             },
    //             splitLine: {
    //                 show: false
    //             },
    //             data: [12140.2, 13414.1, 19325.1, 23438.5, 31000.7, 68180.5, 12159.5]
    //         },
    //         yAxis: [{
    //             type: 'category',
    //             axisLabel: {
    //                 show: true
    //             },
    //             axisLine: {
    //                 show: false
    //             },
    //             axisTick: {
    //                 show: false
    //             },
    //             data: ['水泥42.5', '矿粉', '煤灰', '1-2石子', '减水剂', '机制砂', '河砂']
    //         }, {
    //             type: 'category',
    //             name: '',
    //             axisLine: {
    //                 show: false
    //             },
    //             axisTick: {
    //                 show: false
    //             },
    //             axisLabel: {
    //                 align: 'left'
    //             },
    //             position: 'left',
    //             offset: 55,
    //             textStyle: {
    //                 fontSize: 14
    //             },
    //             data: [{
    //                 value: 10,
    //                 textStyle: {
    //                     fontSize: 14,
    //                     fontWeight: 600,
    //                 }
    //             }, {
    //                 value: 9,
    //                 textStyle: {
    //                     fontSize: 14,
    //                     fontWeight: 600,
    //                 }
    //             }, {
    //                 value: 8,
    //                 textStyle: {
    //                     fontSize: 14,
    //                     fontWeight: 600,
    //                 }
    //             }, {
    //                 value: 7,
    //                 textStyle: {
    //                     fontSize: 14,
    //                     fontWeight: 600,
    //                 }
    //             }, {
    //                 value: 6,
    //                 textStyle: {
    //                     fontSize: 14,
    //                     fontWeight: 600,
    //                 }
    //             }, {
    //                 value: 5,
    //                 textStyle: {
    //                     fontSize: 14,
    //                     fontWeight: 600,
    //                 }
    //             }, {
    //                 value: 4,
    //                 textStyle: {
    //                     fontSize: 14,
    //                     fontWeight: 600,
    //                 }
    //             },]
    //         }, {
    //             type: 'category',
    //             name: '',
    //             axisLine: {
    //                 show: false
    //             },
    //             axisTick: {
    //                 show: false
    //             },
    //             axisLabel: {
    //                 align: 'left'
    //             },
    //             position: 'right',
    //             offset: 0,
    //             data: [12140.2, 13414.1, 19325.1, 23438.5, 31000.7, 68180.5, 12159.5]
    //         }],
    //         series: [{
    //             type: 'bar',
    //             name: '销售排名统计',
    //             barWidth: 10,
    //             label: {
    //                 show: false,
    //                 //position: 'right'
    //             },
    //             itemStyle: {
    //                 normal: {
    //                     color: new echarts.graphic.LinearGradient(1, 0, 0, 0,
    //                         [{
    //                             offset: 0,
    //                             color: '#FF938F'
    //                         },
    //                             {
    //                                 offset: 1,
    //                                 color: '#FFC466'
    //                             }
    //                         ]
    //                     ),
    //                     barBorderRadius: 5
    //                 },
    //                 // emphasis: {
    //                 //     barBorderRadius: 10
    //                 // },
    //                 barBorderRadius: 5
    //             },
    //             data: [12140.2, 13414.1, 19325.1, 23438.5, 31000.7, 68180.5, 12159.5]
    //         }]
    //     }
    //     if (resize)
    //         myChart.resize();
    //     myChart.setOption(option);
    // }

    function receivetwo1(data, resize) {
        var myChart = echarts.init(document.getElementById('receivetwo1'));
        var option = {
            title: {
                show: false,
            },
            legend: {
                show: false,
                data: [],
                right: 300,
                icon: 'circle'
            },
            grid: {
                top: 20,
                left: 0,
                right: 20,
                bottom: 0,
                containLabel: true
            },
            tooltip: {
                trigger: 'axis',
            },
            xAxis: {
               
            
                type: 'category',
                // boundaryGap: false,
                axisLine: {
                    show: false
                },
                axisTick: {
                    show: false
                },
                // 设置强制显示和倾斜角度
                axisLabel :{
                interval:0,
                rotate:30 
            },
      
                // data: ['1日', '2日', '3日', '4日', '5日', '6日', '7日'
                // ]
                 data: [ "0.5-1石子","1-2石子","PO42.5水泥","减水剂","标准机制砂","标准机制砂","标准机制砂","标准机制砂","标准机制砂","标准机制砂"]
            },
            yAxis: {
                type: 'value',
                axisLine: {
                    show: false
                },
                axisTick: {
                    show: false
                },
                splitLine: {
                    lineStyle: {
                        color: '#eee'
                    }
                }
            },
            series: [{
                type: 'line',
                name: '销售额统计',
                smooth: true,
                itemStyle: {
                    color: '#65C97E'
                },
                areaStyle: {
                    color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                        offset: 0,
                        color: '#65C97E'
                    }, {
                        offset: 1,
                        color: 'rgba(255,255,255,0)'
                    }])
                },
                // data: [193, 110, 281, 121, 134, 120, 140]
                data: [ 100,25,98,75,156,158,78,65,45,38]
            }]
        }
        // $.ajax({
        //     url:'/public/static/js/procurement1.json',
        //     type: 'GET',
        //     dataType: 'json',
        //     success:function(res){
        //         console.log(res)
        //         if (resize)
        //     myChart.resize();
        // myChart.setOption(
        //     {
        //         xAxis:{data:res.categories,
        //             type: 'category',
        //         boundaryGap: false,
        //         axisLine: {
        //             show: false
        //         },
        //         axisTick: {
        //             show: false
        //         },},
        //         series:[{name:"销售统计额",data:res.data}]
        //     }
        // );
        //     }
        // })
        if (resize)
            myChart.resize();
        myChart.setOption(option);
    }

    function receivetwo2(data, resize) {
        var myChart = echarts.init(document.getElementById('receivetwo2'));
        var option = {
            title: {
                show: false,
            },
            legend: {
                show: false,
                data: [],
                right: 300,
                icon: 'circle'
            },
            grid: {
                top: 20,
                left: 0,
                right: 20,
                bottom: 0,
                containLabel: true
            },
            tooltip: {
                trigger: 'axis',
            },
            xAxis: {
                type: 'category',
                // boundaryGap: false,
                axisLine: {
                    show: false
                },
                axisTick: {
                    show: false
                },
                axisLabel :{
                interval:0,
                rotate:30 
            },
                // data: ['1日', '2日', '3日', '4日', '5日', '6日', '7日'
                // ]
                 data: [ "0.5-1石子","1-2石子","PO42.5水泥","减水剂","标准机制砂","标准机制砂","标准机制砂","标准机制砂","标准机制砂","标准机制砂"]
            },
            yAxis: {
                type: 'value',
                axisLine: {
                    show: false
                },
                axisTick: {
                    show: false
                },
                splitLine: {
                    lineStyle: {
                        color: '#eee'
                    }
                }
            },
            series: [{
                type: 'line',
                name: '销售额统计',
                smooth: true,
                itemStyle: {
                    color: '#5C93E5'
                },
                areaStyle: {
                    color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                        offset: 0,
                        color: 'rgba(92,147,229,1)'
                    }, {
                        offset: 1,
                        color: 'rgba(255,255,255,0)'
                    }])
                },
                // data: [193, 110, 281, 121, 134, 120, 140]
                data: [ 100,25,98,75,156,158,78,65,45,38]
            }]
        }
        
        if (resize)
            myChart.resize();
        myChart.setOption(option);
    }
</script>
<script>
    (function () {
        var html = '';
        $.ajax({
            url: '/public/static/js/home.json',
            type: 'GET',
            dataType: 'json',
            success: function (res) {
                // console.log(res)
                for (var i = 0; i < res.data.length; i++) {
                    html +=  `<div class="top-box1-item">
                    <div class="tb-i-ri d-dr-jsb-afe">
                        <div class="d-dc">
                    <img src="` + res.data[i].img + `" alt="">
                    </div>
                     <div class="detail">
                    <span>`+ res.data[i].num + `</span>
                    <p>` + res.data[i].intor + `</p>
                   
                    </div> 
                     </div>
                </div>
                `
                }
                $('.top-box1').append(html);
            }

        })
    }())
</script>
<!-- 代办事项 -->
<script>
     (function () {
        var html = '';
        $.ajax({
            url: '/public/static/js/serial.json',
            type: 'GET',
            dataType: 'json',
            success: function (res) {
                console.log(res)
                for (var i = 0; i < res.data.length; i++) {
                    html +=   `<div class="d-dr-ac" >
                        <span class="need">[`+res.data[i].title+`]</span>
                        <span class="serial">`+res.data[i].serial+`</span>
                        <span class="date">`+res.data[i].date+`</span>
                    </div>`
                }
                $('.serial_list').append(html);
            }

        })
    }())
</script>
<!-- 代办事项颜色区分 -->
<script>
    $(document).ready(function(){
        $(".d-dr-ac .need").eq(0).css('color','#086DF3');
        $(".d-dr-ac .need").eq(1).css('color','#8B79F2');
    })
</script>
</body>
</html>

