<?php /*a:4:{s:60:"E:\TP5.0\purchase\application\admin\view\user\user_list.html";i:1620956777;s:63:"E:\TP5.0\purchase\application\admin\view\layout\table_base.html";i:1620956776;s:59:"E:\TP5.0\purchase\application\admin\view\public\header.html";i:1620956776;s:59:"E:\TP5.0\purchase\application\admin\view\public\footer.html";i:1620956776;}*/ ?>
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
<link rel="stylesheet" href="/public/static/css/tableBase.css">
<style type="text/css">
    tr a{
        height: 25px !important;
        line-height: 25px !important;
        padding: 0 8px!important;
    }
    .item{
        margin-right: 15px !important;
    }
    .item label{
        display: inline-block;
        width: 80px !important;
        text-align: right;
    }
    .search-label{
        /*margin-right: 5px;*/
        font-size: 14px;
    }
</style>
<body>
<div class="x-body">
    
<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
    <legend>系统用户</legend>
</fieldset>

    
    <form class="layui-form" action="#">
        <div class="item">
            <label class="search-label" for="search_key">搜索类型：</label>
            <div class="layui-input-inline">
                <select name="search_key" lay-verify="required" id="search_key">
                    <option value="">选择搜索类型</option>
                    <?php if(is_array($search_info) || $search_info instanceof \think\Collection || $search_info instanceof \think\Paginator): $i = 0; $__LIST__ = $search_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo htmlentities($key); ?>"><?php echo htmlentities($vo); ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
        </div>
        <div class="item">
            <div class="layui-input-inline">
                <input type="text" name="search_val" id="search_val" placeholder="搜索内容" autocomplete="off"
                       class="layui-input">
            </div>
        </div>
        <button type="button" style="width: 50px;" id="search" class="layui-btn layui-btn-sm layui-btn-normal" data-type="reload">
            <i class="layui-icon">&#xe615;</i>
        </button>
        <button type="button" style="width: 50px;" id="add" class="layui-btn layui-btn-sm">
            <i class="layui-icon">&#xe654;</i>
        </button>
        <div style="position: absolute;right: 50px;">
            <!--<button type="submit" style="width: 50px;" class="layui-btn layui-btn-sm layui-btn-normal">-->
            <!--<i class="layui-icon">&#xe601;</i>-->
            <!--</button>-->
            <button type="button" onclick="javascript:location.reload();" style="width: 50px;" class="layui-btn layui-btn-sm">
                <i class="layui-icon">&#xe669;</i>
            </button>
        </div>
    </form>
    
    
    <table id="table_ele" lay-filter="table_ele"></table>
    
    <script type="text/html" id="toolbar">
    
<div class="layui-btn-container">
    <button class="layui-btn layui-btn-sm layui-btn-danger" lay-event="getCheckData">批量删除</button>
</div>

    </script>
    <script type="text/html" id="table_bar">
        
    <a lay-event="edit">编辑</a>
    <a lay-event="del">删除</a>

    </script>
</div>

<script type="text/javascript">
    layui.use(['table', 'form'], function () {
        var table = layui.table
            , form = layui.form;
        form.on('switch(status)', function (data) {
            console.log(data);
            var id = data.elem.dataset.id
                , status = 1;
            if (data.elem.checked) status = 2;
            var send_data = {id: id, status: status};
            $.ajax({
                type: 'post',
                url: '<?php echo url("change_status"); ?>',
                data: send_data,
                dataType: 'json',
                success(res) {
                    layer.msg(res.msg)
                }
            });
        });

		table.render({
			elem: '#table_ele',
			url: '<?php echo url("getlistData"); ?>'
				// , toolbar: '#toolbar' //开启头部工具栏，并为其绑定左侧模板
				,
			defaultToolbar: ['filter', 'exports', 'print'
				//     , { //自定义头部工具栏右侧图标。如无需自定义，去除该参数即可
				//     title: '提示'
				//     ,layEvent: 'LAYTABLE_TIPS'
				//     ,icon: 'layui-icon-tips'
				// }
			],
			limit: 15,
			limits: [15, 30, 60, 90]
				// , height: 700
				,
			loading: true,
			title: '用户数据表',
			cols: [
				[
					// {type: 'checkbox', fixed: 'left'}
					, {
						field: 'id',
						title: 'ID',
						width: 80,
						fixed: 'left',
						unresize: true,
						align: 'center',
						sort: true
					}, {
						field: 'username',
						title: '用户名',
						align: 'center',
						width: 150
					}, {
						field: 'auth',
						title: '角色',
						width: 280,
						align: 'center',
						templet(d) {
							return d.auth.auth;
						}
					},
                    {
						field: 'auth1',
						title: '辅助角色',
						width: 220,
						align: 'center',
						templet(d) {
							return d.auth.assist;
						}
					},
                    {
						title: '状态',
						width: 120,
						align: 'center',
						templet(d) {
							if (d.status !== 1) return '<input type="checkbox" name="status" data-id="' + d.id +
								'" lay-skin="switch" lay-text="启用|禁用" lay-filter="status">';
							return '<input type="checkbox" name="status" data-id="' + d.id +
								'" lay-skin="switch" lay-text="启用|禁用" checked lay-filter="status">';
						}
					},
                    // {
					// 	title: '下单',
					// 	width: 120,
					// 	align: 'center',
					// 	templet(d) {
					// 		if (d.sell_status !== 1) return '<input type="checkbox" name="sell_status" data-id="' + d.id +
					// 			'" lay-skin="switch" lay-text="允许|禁止" lay-filter="sell_status">';
					// 		return '<input type="checkbox" name="sell_status" data-id="' + d.id +
					// 			'" lay-skin="switch" lay-text="允许|禁止" checked lay-filter="sell_status">';
					// 	}
					// },
                    {
						field: 'create_time',
						title: '创建时间',
						align: 'center',
						width: 260
					}, {
						field: 'last_login_time',
						title: '最后登录时间',
						align: 'center',
						width: 260
					}, {
						field: 'last_login_ip',
						title: '最后登录IP',
						align: 'center',
						width: 260
					}
					// {field: 'right', title:'操作',align:'center', width:180}
					, {
						fixed: 'right',
						title: '操作',
						align: 'center',
						toolbar: '#table_bar',
						width: 120
					}
				]
			],
			page: true,
			id: 'user'
		});

        //头工具栏事件
        table.on('toolbar(table_ele)', function (obj) {
            var checkStatus = table.checkStatus(obj.config.id);
            switch (obj.event) {
                case 'getCheckData':
                    var data = checkStatus.data;
                    layer.alert(JSON.stringify(data));
                    break;
                case 'getCheckLength':
                    var data = checkStatus.data;
                    layer.msg('选中了：' + data.length + ' 个');
                    break;
                case 'isAll':
                    layer.msg(checkStatus.isAll ? '全选' : '未全选');
                    break;

					//自定义头工具栏右侧图标 - 提示
				case 'LAYTABLE_TIPS':
					layer.alert('这是工具栏右侧自定义的一个图标按钮');
					break;
			};
		});

		//监听行工具事件
		table.on('tool(table_ele)', function(obj) {
			var data = obj.data;
			//console.log(data)
			if (obj.event === 'del') {
				layer.confirm('真的删除用户：' + data.username, {
					title: '警告',
					icon: 3
				}, function(index) {
					$.ajax({
						type: 'get',
						url: '<?php echo url("del"); ?>',
						data: {
							id: data.id
						},
						dataType: 'json',
						success(res) {
							if (res.code == 0) {
								obj.del();
								layer.close(index);
							}
							layer.msg(res.msg)
						}
					});

				});
			} else if (obj.event === 'edit') {
				// layer.prompt({
				//     formType: 2
				//     , value: data.email
				// }, function (value, index) {
				//     obj.update({
				//         email: value
				//     });
				//     layer.close(index);
				// });
				xadmin.open('编辑用户', '<?php echo url("edit"); ?>?id=' + data.id, 460, 460)
			}
		});
		var $ = layui.$,
			active = {
				reload: function() {
					var search_key = $('#search_key').val();
					var search_val = $('#search_val').val();
					if (search_key == '') {
						layer.msg('请选择搜索类型', {
							icon: 5
						});
						return false;
					}
					if (search_val == '') {
						layer.msg('请输入搜索内容', {
							icon: 5
						});
						return false;
					}
					//执行重载
					table.reload('user', {
						page: {
							curr: 1 //重新从第 1 页开始
						},
						where: {
							search_key,
							search_val
						}
					});
				}
			};
		$('#search').on('click', function() {
			var type = $(this).data('type');
			active[type] ? active[type].call(this) : '';
		});

		form.on('switch(status)', function(data) {
			var id = data.elem.dataset.id,
				status = 2;
			if (data.elem.checked) status = 1;
			var send_data = {
				id: id,
				status: status
			};
			//do something
			$.ajax({
				type: 'post',
				url: '<?php echo url("changeStatus"); ?>',
				data: send_data,
				dataType: 'json',
				success(res) {
					layer.msg(res.msg)
				}
			})
		});
		form.on('switch(sell_status)', function(data) {
			var id = data.elem.dataset.id,
				sell_status = 0;
			if (data.elem.checked) sell_status = 1;
			var send_data = {
				id: id,
				sell_status: sell_status
			};
			//do something
			$.ajax({
				type: 'post',
				url: '<?php echo url("changeStatus1"); ?>',
				data: send_data,
				dataType: 'json',
				success(res) {
					layer.msg(res.msg)
				}
			})
		});

        $('#add').click(function(){
            xadmin.open('添加用户','<?php echo url("add"); ?>',460,460)
        })
    })
</script>

</body>
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
</html>