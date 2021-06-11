<?php /*a:3:{s:71:"E:\TP5.0\purchase\application\purchase\view\material\edit_category.html";i:1623060787;s:62:"E:\TP5.0\purchase\application\purchase\view\public\header.html";i:1622880787;s:62:"E:\TP5.0\purchase\application\purchase\view\public\footer.html";i:1620956778;}*/ ?>
<!doctype html>
<html class="x-admin-sm">
<head>
    <meta charset="UTF-8">
    <title id="title1">洋河新材料管理系统</title>
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="/public/static/purchase/css/font.css">
    <link rel="stylesheet" href="/public/static/purchase/css/xadmin.css">
    <link rel="stylesheet" href="/public/static/purchase/css/theme1.css">
	<!-- <link rel="stylesheet" href="/public/static/purchase/css/supplier.css"> -->
    <link rel="stylesheet" href="/public/static/purchase/css/formSelects-v4.css">
	<link rel="stylesheet" href="/public/static/layui-v2.6.6/layui/css/layui.css">
    <link rel="stylesheet" href="/public/static/iconfont/iconfont.css">
    <script src="/public/static/purchase/js/jquery.min.js" charset="utf-8"></script>
    <script src="/public/static/purchase//lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/public/static/purchase/js/xadmin.js"></script>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
		.layui-btn{
			background-color: #086DF3;
			color: #ffffff;
		}
		.layui-form-onswitch{
			background-color: #086DF3;
			border-color: #086DF3;
		}
		.layui-laypage .layui-laypage-curr .layui-laypage-em{
			background-color: #086DF3;
		}
		.layui-form-radio>i:hover, .layui-form-radioed>i {
			color: #086DF3;
		}
		.layui-form-checked[lay-skin=primary] i{
			background-color: rgba(47,145,252,1);
			border-color: rgba(47,145,252,1);
		}
		.layui-form-checkbox[lay-skin=primary] i:hover{
			border-color: rgba(47,145,252,1);
		}
		
		input.layui-input:focus{
			border-color:  #086DF3 !important;
		}
		.layui-form-select dl dd.layui-this{
			background-color:  #086DF3;
		}
		.layui-form-item .layui-input-inline {
			margin-right: 15px;
		}
		.item{
			margin-bottom: 5px;
		}
		a{
			color: #086DF3;
			cursor: pointer;
		}
        .layui-table-cell{
            font-size: 13px !important;
        }
	</style>
    <script>
        // 是否开启刷新记忆tab功能
        var is_remember = false;

        var station = '<?php echo cookie("station"); ?>'
        if(station == '华益站'){
            $('#title1').html('华益混凝土管理系统')
        }

    </script>
    <style type="text/css">
        body{
            background: #ffffff;
        }
    </style>
</head>
<style type="text/css">
    .layui-form-mid{
        padding: 4px !important;
    }
    .content{
        padding:40px 40px !important
;    }
    .demand>p,.audit>p,.table>p{
        font-size: 16px;
font-family: Microsoft YaHei;
font-weight: bold;
color: #333333;
line-height: 10px;
    }
    .fl{
        float: left;
    }
    .fr{
        float: right;
    }
    .clear{clear: both;}
    .demand .left{
        /* margin-right: 60px; */
        margin-top: 20px;
    }
    .demand .right{
        margin-top: 20px;
        
    }
    .left p,.right p{
        font-weight: 400;
color: #666666;
line-height: 25px; 
font-size: 14px;
    }
 .demand_title{
    color: #666666 !important;
    line-height: 14px !important; 
    font-weight: 400 !important;
    font-size: 14px !important;
    margin-top: 25px;
 }
  p span{
    font-size: 14px;
font-family: Microsoft YaHei;
font-weight: 400;
color: #333333;
line-height: 24px;
  }
  .line{
    width: 1px;
height: 105px;
background: #E6E6E6;  
margin-left: 111px;
margin-top: 27px;
  }
  .audit{
      margin-left: 60px;
  }
  #table_ele{
      margin-top: 10px;
  }
  .table .title{
      margin-bottom: 25px;
  }
  .x-body{
      padding:0 !important
  }
  .demand .number{
      margin-bottom: 40px;
  }
  .demand .need{
      padding-bottom: 15px;
  }
 .layui-btn{
    width: 100px;
height: 30px;
background: #086DF3;
border-radius: 4px;
font-size: 16px !important;
 }
</style>
<body>
<div class="x-body">
    <div class="content">
            <!-- 上方文字描述 -->
    <div class="describe">
        <div class="demand ">
            <p class="title number">合同编号: <?php echo htmlentities($edit_material['id']); ?></p>
        </div>
        <div class="demand ">
            <p class="title ">需方信息</p>
            <div class="left fl" style="margin-bottom: 20px;">
               
               <p >流水号<span style="margin-left: 55px;">&nbsp; <?php echo htmlentities($edit_material['proposer']); ?></span></p> 
                <p >公司名称<span style="margin-left: 45px;"> <?php echo htmlentities($edit_material['proposer']); ?></span></p>
                <p >需求发布时间<span style="margin-left: 13px;">&nbsp; <?php echo htmlentities($edit_material['expir_time']); ?></span></p>
                <p >报价截止时间<span  style="margin-left: 13px;">&nbsp; <?php echo htmlentities($edit_material['expir_time']); ?></span></p>
               
            </div>
            <div class="right need fr" style="margin-bottom: 20px;">
                <p >要求到厂时间<span  style="margin-left: 13px;">&nbsp; <?php echo htmlentities($edit_material['require_time1']); ?>至</span><span style="line-height: 25px;"><?php echo htmlentities($edit_material['require_time2']); ?></span></p> 
                <p >截至送货时间<span  style="margin-left: 13px;">&nbsp; <?php echo htmlentities($edit_material['expir_time']); ?></span></p> 
                <p >验收标准<span  style="margin-left: 39px;">&nbsp; <?php echo htmlentities($edit_material['expir_time']); ?></span></p>
                <p >采购备注<span  style="margin-left: 39px;">&nbsp; <?php echo htmlentities($edit_material['expir_time']); ?></span></p>
            </div>
            <div class="clear"></div>
            
        </div>
        <div class="demand ">
            <p class="title" >供方信息</p>
            <div class="left fl">
                <p >供应商名称<span>&nbsp; <?php echo htmlentities($edit_material['uid']); ?></span></p> 
            </div>
            <div class="right  fl" style="margin-left: 217px;margin-bottom: 35px;">
                  <p >报价备注<span  style="margin-left: 39px;">&nbsp; --</span></p> 
            </div>
            <div class="clear"></div>
         
        </div>
        <div class="demand ">
            <p class="title">采购信息</p>
            <div class="left fl" style="margin-bottom: 20px;">
               
                <p >物料类别<span  style="margin-left: 33px;">&nbsp; 石子</span></p> 
                 <p >物料规格<span  style="margin-left:33px;"> 0.5-1石子</span></p>
                 <p >单价<span  style="margin-left: 57px;">&nbsp; 112.00</span></p>
                 <p >数量（单位）<span  style="margin-left: 1px;">&nbsp; 6000（吨）</span></p>
                 <p >付款方式<span  style="margin-left: 33px;">&nbsp; 一次承兑</span></p>
                
             </div>
             <div class="right need fl" style="margin-left: 121px; margin-bottom: 20px;">
                <p >运费<span  style="margin-left: 64px;">&nbsp; 0.00</span></p> 
                 <p >账期<span  style="margin-left: 64px;">&nbsp;15</span></p> 
                 <p >产地<span  style="margin-left: 64px;">&nbsp; 江苏</span></p>
                 <p >承诺供货时间<span  style="margin-left: 3px;">&nbsp; <?php echo htmlentities($edit_material['expir_time']); ?></span></p>
             </div>
             <div class="clear"></div>
        </div>
    
        <!-- <div class="clear"></div> -->
       
    </div>
    </div>


            <div class="layui-input-inline" style="text-align: center; float: right; margin-right: 40px;">
                <button class="layui-btn" lay-submit="" lay-filter="edit">打印合同</button>
                <!-- <button class="layui-btn layui-btn-normal" type="reset">重置</button> -->
            </div>
  
</div>
</body>
<script type="text/javascript">
    layui.use(['form'], function(){
        var form = layui.form;
        //监听提交
        form.on('submit(edit)', function(data){
            // layer.alert(JSON.stringify(data.field), {
            //     title: '最终的提交信息'
            // })
            $.ajax({
                type:'post',
                url:'<?php echo url("edit_category"); ?>',
                data: data.field,
                dataType:'json',
                success(res){
                    if(res.code == 0){
                        layer.msg(res.msg, {icon:1}, function () {
                            parent.layer.closeAll();
                            parent.layui.table.reload('cateList');
                        });
                        return false;
                    }
                    layer.msg(res.msg, {icon:2});
                }
            });
            return false;
        });
    })
</script>
<script>
    // var _hmt = _hmt || [];
    // (function() {
    //     var hm = document.createElement("script");
    //     hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
    //     var s = document.getElementsByTagName("script")[0];
    //     s.parentNode.insertBefore(hm, s);
    // })();
</script>
</html>