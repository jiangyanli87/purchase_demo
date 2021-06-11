<?php /*a:2:{s:66:"/www/wwwroot/pur.2020x.xyz/application/admin/view/index/index.html";i:1620957010;s:68:"/www/wwwroot/pur.2020x.xyz/application/admin/view/public/header.html";i:1620956776;}*/ ?>
<!doctype html>
<html class="x-admin-sm">
<head>
    <meta charset="UTF-8">
    <title id="title1">采购平台管理系统</title>
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="/public/static/css/font.css">
    <link rel="stylesheet" href="/public/static/css/xadmin.css">
    <link rel="stylesheet" href="/public/static/css/theme1.css">
    <link rel="stylesheet" href="/public/static/css/formSelects-v4.css">
    <link rel="stylesheet" href="/public/static/iconfont/iconfont.css">
    <script src="/public/static/js/jquery.min.js" charset="utf-8"></script>
    <script src="/public/static/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/public/static/js/xadmin.js"></script>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
		.layui-btn{
			background-color: #2F91FC;
			color: #ffffff;
		}
		.layui-form-onswitch{
			background-color: #2F91FC;
			border-color: #2F91FC;
		}
		.layui-laypage .layui-laypage-curr .layui-laypage-em{
			background-color: #2F91FC;
		}
		.layui-form-radio>i:hover, .layui-form-radioed>i {
			color: #2F91FC;
		}
		.layui-form-checked[lay-skin=primary] i{
			background-color: rgba(47,145,252,1);
			border-color: rgba(47,145,252,1);
		}
		.layui-form-checkbox[lay-skin=primary] i:hover{
			border-color: rgba(47,145,252,1);
		}
		
		input.layui-input:focus{
			border-color:  #2F91FC !important;
		}
		.layui-form-select dl dd.layui-this{
			background-color:  #2F91FC;
		}
		.layui-form-item .layui-input-inline {
			margin-right: 15px;
		}
		.item{
			margin-bottom: 5px;
		}
		a{
			color: #2F91FC;
			cursor: pointer;
		}
        .layui-table-cell{
            font-size: 13px !important;
        }
        .layui-laydate .layui-this{
            background-color: #2F91FC !important;
        }
	</style>
    <script>
        // 是否开启刷新记忆tab功能

    </script>
    <style type="text/css">
        body{
            background: #ffffff;
        }
    </style>
</head>
<script>
    // 是否开启刷新记忆tab功能
    is_remember = false;
</script>
<style type="text/css">
	/* 头部栏 */
	.container{
	    /*height: 50px;*/
	    /* background: #2F9688; */
		/* 主题蓝色 */
		background-color: #2F91FC;
	}
	
	.layui-nav-bar{
		background-color: #2F91FC;
	}
	
	/* 左侧菜单栏 */
    .left-nav{
        /*padding-top: 0;*/
        background: #28333E;
        /*overflow-y: scroll;*/
        /*overflow: hidden auto;*/
    }
	.left-nav #nav li a i{
	    line-height: 20px;
	}
	.left-nav a:hover{
		background-color: #2F91FC !important;
	}
	
	.left-nav a.active{
		background: #2F91FC !important;
	}
	
    .x-admin-sm .iconfont{
        font-size: 15px;
    }
    .left-nav #nav li .sub-menu li a i{
        font-size: 16px;
    }
    .left-nav #nav li a i{
        line-height: 16px;
    }
    .x-admin-sm .left-nav #nav li a cite{
        font-size: 14px;
    }
 
    .sub-menu{
        background: #1C242B;
    }
   
   .layui-nav .layui-nav-child dd.layui-this a, .layui-nav-child dd.layui-this{
	   background-color: #2F91FC !important;
   }
    /*.nav_left{*/
        /*color: #FD971F;*/
    /*}*/
    .msg-box {
        position: fixed;
        bottom: 10px;
        right: 40px;
        z-index: 999
    }

    .msg-item {
        position: relative;
        background: rgba(47, 145, 252, 0.8);
        color: #ffffff;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 10px;
        width: 150px;
    }

    .del-icon {
        cursor: pointer;
        position: absolute;
        bottom: 0;
        right: 0;
    }

    .clear-msg {
        cursor: pointer;
        position: absolute;
        right: 0;
        top: -35px;
        background: rgba(47, 145, 252, 0.8);
        color: #ffffff;
        text-align: center;
        padding: 5px;
        border-radius: 10px;
        margin-bottom: 10px;
    }
</style>
<body class="index">
<!-- 顶部开始 -->
<div class="container">
    <div class="logo">
        <a href="/" class="logo-info">
            <img src="/public/static/images/login/logo.png" alt="" style="width:20px;">
            <span class="logo-text" id="tag-span">采购平台管理系统</span>
        </a>
	</div>

    <div class="left_open">
        <a><i title="展开左侧栏" class="iconfont" class="left_open_icon">&#xe641;</i></a>
    </div>
    <audio id="music"  src="/public/static/audio/sysmsg.mp3">
    </audio>
    <!--<ul class="layui-nav left fast-add" lay-filter="">-->
        <!--<li class="layui-nav-item">-->
            <!--<a href="javascript:;">+新增</a>-->
            <!--<dl class="layui-nav-child">-->
                <!--&lt;!&ndash; 二级菜单 &ndash;&gt;-->
                <!--<dd>-->
                    <!--<a onclick="xadmin.open('最大化','http://www.baidu.com','','',true)">-->
                        <!--<i class="iconfont">&#xe6a2;</i>弹出最大化</a></dd>-->
                <!--<dd>-->
                    <!--<a onclick="xadmin.open('弹出自动宽高','http://www.baidu.com')">-->
                        <!--<i class="iconfont">&#xe6a8;</i>弹出自动宽高</a></dd>-->
                <!--<dd>-->
                    <!--<a onclick="xadmin.open('弹出指定宽高','http://www.baidu.com',500,300)">-->
                        <!--<i class="iconfont">&#xe6a8;</i>弹出指定宽高</a></dd>-->
                <!--<dd>-->
                    <!--<a onclick="xadmin.add_tab('在tab打开','member-list.html')">-->
                        <!--<i class="iconfont">&#xe6b8;</i>在tab打开</a></dd>-->
                <!--<dd>-->
                    <!--<a onclick="xadmin.add_tab('在tab打开刷新','member-del.html',true)">-->
                        <!--<i class="iconfont">&#xe6b8;</i>在tab打开刷新</a></dd>-->
            <!--</dl>-->
        <!--</li>-->
    <!--</ul>-->
    <ul class="layui-nav right" lay-filter="">
        <li class="layui-nav-item">
            <a href="javascript:;"><?php echo session('username'); ?></a>
            <dl class="layui-nav-child">
                <!-- 二级菜单 -->
                <!--<dd>-->
                    <!--<a onclick="xadmin.open('个人信息','http://www.baidu.com')">个人信息</a></dd>-->
                <dd>
                    <a onclick="xadmin.open('修改密码','<?php echo url('admin/user/changePwd'); ?>',460,280)">修改密码</a></dd>
                <dd>
                    <a href="<?php echo url('admin/user/loginOut'); ?>">退出</a></dd>
            </dl>
        </li>
    </ul>
</div>

<!-- 顶部结束 -->
<!-- 中部开始 -->
<!-- 左侧菜单开始 -->
<div class="left-nav">
    <div id="side-nav">
        <ul id="nav">

            <?php if(is_array($menu) || $menu instanceof \think\Collection || $menu instanceof \think\Paginator): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(isset($vo['children'])): ?>
            <li>
                <a href="javascript:;">
                    <i class="iconfont left-nav-li" lay-tips="<?php echo htmlentities($vo['title']); ?>">&#<?php echo htmlentities($vo['icon']); ?>;</i>
                    <cite><?php echo htmlentities($vo['title']); ?></cite>
                    <i class="iconfont nav_right">&#xe7de;</i></a>
                <ul class="sub-menu">
                    <?php if(is_array($vo['children']) || $vo['children'] instanceof \think\Collection || $vo['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vvo): $mod = ($i % 2 );++$i;if(isset($vvo['children'])): ?>
                    <li>
                        <a href="javascript:;">
                            <i class="iconfont nav_left">&#<?php echo htmlentities($vvo['icon']); ?>;</i>
                            <cite><?php echo htmlentities($vvo['title']); ?></cite>
                            <i class="iconfont nav_right">&#xe7de;</i></a>
                        <ul class="sub-menu">
                            <?php if(is_array($vvo['children']) || $vvo['children'] instanceof \think\Collection || $vvo['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vvo['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vvoo): $mod = ($i % 2 );++$i;?>
                            <li>
                                <a onclick="xadmin.add_tab('<?php echo htmlentities($vvoo['title']); ?>','<?php echo url($vvoo['name']); ?>')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite><?php echo htmlentities($vvoo['title']); ?></cite></a>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </li>
                    <?php else: ?>
                    <li>
                        <a onclick="xadmin.add_tab('<?php echo htmlentities($vvo['title']); ?>','<?php echo url($vvo['name']); ?>')">
                            <i class="iconfont">&#<?php echo htmlentities($vvo['icon']); ?>;</i>
                            <cite><?php echo htmlentities($vvo['title']); ?></cite>
                            <!--<i class="iconfont nav_right">&#xe697;</i>-->
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </li>
            <?php else: ?>
            <li>
            <a onclick="xadmin.add_tab('<?php echo htmlentities($vo['title']); ?>','<?php echo url($vo['name']); ?>')">
                <i class="iconfont left-nav-li" lay-tips="<?php echo htmlentities($vo['title']); ?>">&#<?php echo htmlentities($vo['icon']); ?>;</i>
                <cite><?php echo htmlentities($vo['title']); ?></cite>
                <i class="iconfont nav_right">&#xe7de;</i></a>
            </li>
            <?php endif; ?>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>
<!-- <div class="x-slide_left"></div> -->
<!-- 左侧菜单结束 -->
<!--<iframe allow="autoplay" style="display:none" src="/public/static/audio/sysmsg.mp3" id="ifm">-->
<!--</iframe>-->

<!-- 右侧主体开始 -->
<div class="page-content">
    <div class="layui-tab tab" lay-filter="xbs_tab" lay-allowclose="false">
        <ul class="layui-tab-title">
            <li class="home">
                <i class="layui-icon">&#xe68e;</i>首页</li></ul>
        <div class="layui-unselect layui-form-select layui-form-selected" id="tab_right">
            <dl>
                <dd data-type="this">关闭当前</dd>
                <dd data-type="other">关闭其它</dd>
                <dd data-type="all">关闭全部</dd></dl>
        </div>
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <iframe src='<?php echo url("home"); ?>' frameborder="0" scrolling="yes" class="x-iframe"></iframe>
            </div>
        </div>

        <div class="msg-box" id="msg_box" style="">

        </div>
        <!--<div id="tab_show"></div>-->
    </div>
</div>
<div class="page-content-bg"></div>
<script type="text/javascript" src="/public/static/js/common.js"></script>
<script>

    // var text = $('#tag-span').html()

</script>

<style id="theme_style"></style>
<!-- 右侧主体结束 -->
<!-- 中部结束 -->
</body>
<script id="demo" type="text/html">
    {{#  layui.each(d.data, function(index, item){ }}
    {{#  if(index == 0 && d.data.length >= 2){ }}
    <div style="" class="clear-msg" onclick="clearMsg()">清空</div>
    {{#  } }}
    <div class="msg-item" style="">
        <i class="layui-icon layui-anim layui-anim-scale layui-anim-loop">&#xe667;</i>
        <span>{{ item.content }}</span>
        <i class="layui-icon del-icon" onclick="delMsg('{{ item.id }}', this)">&#x1007;</i>
    </div>
    {{#  }); }}
</script>
<script type="text/javascript">

</script>
{inculde file="public/footer"}