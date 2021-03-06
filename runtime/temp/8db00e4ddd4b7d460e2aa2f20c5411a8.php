<?php /*a:1:{s:56:"E:\TP5.0\purchase\application\admin\view\user\login.html";i:1623381168;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
    <title id="title1">采购平台管理系统</title>
    <link rel="stylesheet" type="text/css" href="/public/static/lib/layui/css/layui.css"/>
    <link rel="stylesheet" type="text/css" href="/public/static/css/login.css"/>
    <link rel="stylesheet" type="text/css" href="/public/static/css/common.css"/>
    <script type="text/javascript">
        //检测是否为最上层页面
        if (window != top) {
            top.location.href = location.href;
        }
    </script>
    <style>
    </style>
</head>
<body style="overflow: hidden;">
    <div class="contenter">
        <div class="d-dc-jcac">
            <div class="logo_line"></div>
            <div class="home">
            <div class="logo">
                <img src="/public/static/images/pur_login/logo.png" alt="">
            </div>
         
        <div class="">
            <!-- logo -->
            
            <form action="#" class="layui-form login-form">
                <div class="login-box">
                    <div class="left">
                    
                        <div class="left-title">
                            集中采购平台
                        </div>
                        <div class="left_line"></div>
                        <p>连接需求端与供应端，整合客户和供应商资源 实现自主化、集中化采购，提供全链路解决方案 帮助企业快速构建采购数字化。</p>
                    </div>
                    <div class="right"
                    >
                        <div class="right-item"
                             style="">
                                密码登录
                            <!-- <div style=""></div> -->
                        </div>
                        <div class="right-item-input"
                        >
                            <img src="/public/static/images/login/user-img.png" alt=""
                            >
                            <input type="text" name="username" placeholder="用户名" id="username"
                            >
                        </div>
                        <div class="right-item-input"
                        >
                            <img src="/public/static/images/login/pass-img.png" alt=""
                            >
                            <input type="password" name="password" id="password" placeholder="密码"
                            >
                        </div>
                        <div class="right-item-checkbox ">
                            <input class="checkbox  login-input" id="remember" lay-skin="primary" type="checkbox" title="记住密码"
                                   checked/>
                        </div>
                        <div class="right-item-btn">
                            <button type="button" class="sub-btn"
        
                                    lay-filter="LAY-user-login-submit" lay-submit="">登录
                            </button>
                        </div>
                    </div>
                    <div style="clear: both;"></div>
                </div>
            </form>
        </div>
        <div class="list">
            <div class="list_one">
                <img src="/public/static/images/pur_login/gongkai.png" alt="">
                <span>资源公开化</span>
            </div>
            <div class="list_one">
                <img src="/public/static/images/pur_login/guifan.png" alt="">
                <span>流程规范化</span>
            </div>
            <div class="list_one">
                <img src="/public/static/images/pur_login/xinxi.png" alt="">
                <span>数据信息化</span>
            </div>
            <div class="list_one">
                <img src="/public/static/images/pur_login/jicheng.png" alt="">
                <span>信息集成化</span>
            </div>
        </div>
        </div>
    
    </div>
    </div>
<div class="foot">
    <div class="address">
        <span>公司地址</span>
        <p>郑州市郑东新区升龙广场1号楼B座1913</p>
    </div>
    <div class="contact">
        <span>联系方式</span>
        <p>18937151668（郑州）</p>
    </div>
    <div class="inter">
        <span>公司网址</span>
        <p>www.hnzl.top</p>
    </div>
    <div class="weixin">
        <span>【微信公众号】</span>
        <p>关注我们 了解更多</p>
    </div>
    <div style="clear:both;"></div>
</div> 

<script type="text/javascript" src="/public/static/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="/public/static/js/common.js"></script>
<script src="/public/static/lib/layui/layui.all.js"></script>
<script type="text/javascript">
    $('#password').on('keydown', function (event) {
        if (event.keyCode === 13) {
            $('#login').trigger('click');
            return false;
        }
    });
    var form = layui.form
        , $ = layui.jquery;
    form.verify({
        username: function (value, item) {
            if (value == '') {
                return '请输入用户名'
            }
            //value：表单的值、item：表单的DOM对象
            if (!new RegExp("^[a-zA-Z0-9_\u4e00-\u9fa5\\s·]+$").test(value)) {
                return '用户名不能有特殊字符';
            }
            if (/(^\_)|(\__)|(\_+$)/.test(value)) {
                return '用户名首尾不能出现下划线\'_\'';
            }
            if (/^\d+\d+\d$/.test(value)) {
                return '用户名不能全为数字';
            }
        }

        //我们既支持上述函数式的方式，也支持下述数组的形式
        //数组的两个值分别代表：[正则匹配、匹配不符时的提示文字]
        , password: function (value, item) {
            if (value == '') {
                return '请输入密码'
            }
            if (!/^[\S]{6,12}$/.test(value)) {
                return '密码必须6到12位，且不能出现空格';
            }
        }
    });

    /*账号登录 选择是否记住密码*/
    window.onload = function () {
        if (getCookie('username') && getCookie('password') && getCookie('station')) {
            $('#username').val(getCookie('username'));
            $('#password').val(getCookie('password'));
        }
    };
    form.on('submit(LAY-user-login-submit)', function (data) {
        $.ajax({
            type: 'post',
            url: '<?php echo url("login"); ?>',
            data: data.field,
            dataType: 'json',
            success(res) {
                if (res.code == 0) {
                    if ($("#remember").is(":checked")) {
                        setCookie('username', data.field.username);
                        setCookie('password', data.field.password);
                    } else {
                        delCookie('username');
                        delCookie('password');
                    }
                    location.href = '/';
                    // })
                } else {
                    $('#LAY-user-login-vercode').val('');
                    layer.msg(res.msg);
                }
            }
        })
        return false;
    });

</script>
</body>

</html>