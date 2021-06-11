<?php /*a:1:{s:65:"/www/wwwroot/pur.2020x.xyz/application/admin/view/user/login.html";i:1620956777;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
<body class="d-dc-jcac">
<div class="">
    <form action="#" class="layui-form login-form">
        <div class="login-box">
            <div class="left">
                <img src="/public/static/images/login/logo.png" alt="">
                <div class="left-title">
                    采购平台管理系统
                </div>
            </div>
            <div class="right"
            >
                <div class="right-item"
                     style="">
                    用户登录
                    <div style=""></div>
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
        </div>
    </form>
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