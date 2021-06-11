<?php /*a:4:{s:63:"E:\TP5.0\purchase\application\purchase\view\index\add_need.html";i:1623236007;s:66:"E:\TP5.0\purchase\application\purchase\view\layout\table_base.html";i:1622876892;s:62:"E:\TP5.0\purchase\application\purchase\view\public\header.html";i:1622880787;s:62:"E:\TP5.0\purchase\application\purchase\view\public\footer.html";i:1620956778;}*/ ?>
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
<link rel="stylesheet" href="/public/static/purchase/css/tableBase.css">
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
    .d-dr,
    .d-dr-jsb,
    .d-dr-jc,
    .d-dr-jsa,
    .d-dc,
    .d-dc-jc,
    .d-dc-jsb,
    .d-dc-jsa {
        display: flex;
    }
    .d-dr,
    .d-dr-jc,
    .d-dr-jsb,
    .d-dr-jsa,
    .d-dr-jcac
    {
        flex-direction: row;
    }
    .d-dr-ac,
    .d-dr-jcac,
    .d-dc-ac,
    .d-dc-jcac {
        display: flex;
        align-items: center;
    }

    .d-dr-jcac,
    .d-dr-jc,
    .d-dc-jc,
    .d-dc-jcac {
        justify-content: center;
    }

    .d-dc-jcac,
    .d-dc-jc,
    .d-dc-ac,
    .d-dc,
    .d-dc-jsb,
    .d-dc-jsa{
        flex-direction: column;
    }

    .d-dr-jsa ,
    .d-dc-jsa{
        justify-content: space-around;
    }

    .d-dr-jsb,
    .d-dc-jsb{
        justify-content: space-between;
    }

    .aic{
        align-items: center;
      
    }

    .d-f1 {
        flex: 1;
    }

</style>
<body>
<div class="x-body">
    
<!--<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">-->
<!--<legend>发布需求</legend>-->
<!--</fieldset>-->

    

    
<style type="text/css">
    .layui-form {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }

    .layui-input {
        width: 200px;
        height: 30px;
        background-color: #eee;
    }

    .item {
        margin-right: 20px;
        margin-bottom: 20px;
    }

    .layui-form-label {
        display: inline-block;
        width: 80px;
    }

    .s-input {
        width: 70px;
    }

    .m-input {
        width: 100px;
    }

    .l-input {
        width: 150px;
    }

    .ll-input {
        width: 190px;
    }

    .s-input,
    .m-input,
    .l-input {
        background-color: #ffffff !important;

    }

    .h-input {
        display: none;
    }

    /*.end_time{
        padding-left: 2px;
    }*/
    .layui-table {
        width: 100%;
    }

    .layui-table td,
    .layui-table th {
        padding: 10px;
        line-height: 10px;
        text-align: center;
    }

    .layui-table td a {
        cursor: pointer;
        color: #2F91FC;
    }

    .action:nth-of-type(2) {
        margin: 0 5px;
    }

    .s-button {
        height: 30px !important;
        line-height: 30px !important;
        width: 62px;
        border: none;
        border-radius: 2px;
    }

    .btn-box {
        padding-top: 20px;
        /* width: 950px; */
        display: flex;
        justify-content: flex-end;
        width: 810px;
        margin-top: 20px;
    }

    .btn-box1 {
        /* display: flex;
        flex-direction: row;
        justify-content: space-between */
        margin-right: -13px;
    }

    .layui-select-title .layui-input {
        width: 190px;
    }

    .procurement {
        margin-top: 40px;
    }

    .procurement .pur_title p {
        font-size: 16px;
        font-family: Microsoft YaHei;
        font-weight: bold;
        color: #333333;
        line-height: 10px;
    }

    .pur_title {
        display: flex;
        justify-content: space-between;
        width: 790px;
        margin-bottom: 21px;
    }

    .pur_title .add_need span {
        font-size: 14px;
        font-family: Microsoft YaHei;
        font-weight: 400;
        color: #086DF3;
        line-height: 10px;
    }

    .procurement .line {
        width: 800px;
        height: 1px;
        background: #E6E6E6;
        margin-top: 20px;
    }

    .pur_title .add_need:hover {
        cursor: pointer;
    }

    .content {
        width: 788px;
        height: 180px;
        border: 1px solid #086DF3;
        padding: 20px 21px
    }

    .content .list {
        display: flex;
        justify-content: space-between;
        margin-bottom: 21px;
        /* margin: 19px 19px 22px 0; */
    }

    .list .title {
        font-size: 14px;
        font-family: Microsoft YaHei;
        font-weight: 400;
        color: #333333;
        line-height: 10px;
    }

    .operate:hover {
        cursor: pointer;
    }

    .operate span {
        font-size: 14px;
        font-family: Microsoft YaHei;
        font-weight: 400;
        color: #086DF3;
        line-height: 10px;
    }

    .operate img {
        margin-top: -5px;
    }

    #layui-laydate3 {
        top: 100px !important;
        /* left: 400px !important; */
    }

    #layui-laydate4 {
        top: 100px !important;
        /* right: 00px !important; */
    }

    #layui-laydate2 {
        top: 100px !important;
        /* right: 00px !important; */
    }

    .cancel {
        background: #fff !important;
        color: #333;
        border: #E6E6E6 1px solid;
    }

    .cancel:hover {
        color: #333 !important;
    }

    .add_cont_list .line {
        width: 810px;
        height: 0px;
        border: 1px solid #E6E6E6;
        margin-bottom: 15px;
    }

    .add_cont_list .cont_list .cont_list_title {
        display: flex;
        justify-content: space-between;
    }

    .add_cont_list .cont_list .cont_list_title .data_operate {
        margin-top: 15px;
        cursor: pointer;
    }

    .add_cont_list .cont_list .cont_list_title .data_operate span {
        font-size: 14px;
        font-family: Microsoft YaHei;
        font-weight: 400;
        color: #086DF3;
        /* line-height: 42px; */
    }

    .add_cont_list .cont_list .cont_list_title span {
        font-size: 14px;
        font-family: Microsoft YaHei;
        font-weight: 400;
        color: #333333;
        line-height: 10px;
        margin: 15px 0;
    }

    .add_cont_list .cont_list {
        padding: 0 10px;
    }

    .cont_list .cont_del div {
        margin-bottom: 10px;
    }

    .cont_list .cont_del .cont_del_tol {
        font-size: 14px;
        font-family: Microsoft YaHei;
        font-weight: 400;
        color: #666666;
        line-height: 10px;
        margin-right: 15px;
    }

    .cont_list .cont_del .cont_del_del {
        font-size: 14px;
        font-family: Microsoft YaHei;
        font-weight: 400;
        color: #333333;
        line-height: 10px;
    }

    .cont_list_acitve {
        height: 103px;
        border: 1px solid #086DF3;
    }
</style>
<form class="layui-form">
    <!--<div class="item">-->
    <!--<label class="layui-form-label">采购编号:</label>-->
    <!--<div class="layui-input-inline">-->
    <!--<input type="text" lay-verify="" name="run_id" value="自动编号" class="layui-input ll-input "-->
    <!--readonly="readonly">-->
    <!--</div>-->
    <!--</div>-->
    <!--<div class="item">-->
    <!--<label class="layui-form-label">采购编号:</label>-->
    <!--<div class="layui-input-inline">-->
    <!--<input type="text" lay-verify="" name="run_id" value="自动编号" class="layui-input ll-input "-->
    <!--readonly="readonly">-->
    <!--</div>-->
    <!--</div>-->
    <div class="item" style="margin-left:-52px">
        <label class="layui-form-label">申请人</label>
        <div class="layui-input-inline">
            <input type="text" lay-verify="" name="main[proposer]" class="layui-input ll-input " readonly="readonly"
                style="margin-left: 10px;width: 193px;">
        </div>
    </div>
    <div class="item">
        <label class="layui-form-label">报价截止时间</label>
        <div class="layui-input-inline">
            <div class="layui-input-inline">
                <input type="text" lay-verify="required" id="expir_time" name="main[expir_time]" value=""
                    class="layui-input ll-input " style="width: 181px;">
            </div>
        </div>
    </div>
    <div class="item" style="margin-left:-41px">
        <label class="layui-form-label">材料大类</label>
        <div class="layui-input-inline">
            <select name="main[cid]" id="cid" lay-verify="required" lay-filter="cid">
                <option value="0">原材料</option>
                <?php if(is_array($cates) || $cates instanceof \think\Collection || $cates instanceof \think\Paginator): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <option value="<?php echo htmlentities($vo['id']); ?>"><?php echo htmlentities($vo['c_name']); ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="item">
        <label class="layui-form-label">要求到厂时间</label>
        <div class="layui-input-inline">
            <div class="layui-input-inline">
                <input type="text" lay-verify="required" id="require_time" name="main[require_time1]" value=""
                    class="layui-input ll-input" style="float: right;width: 181px;"><span
                    style="float:right; margin:6px 10px">至</span> <input type="text" lay-verify="required"
                    id="require_time2" name="main[require_time2]" value="" class="layui-input ll-input"
                    style="width: 181px;">
            </div>
        </div>
    </div>


    <div class="procurement">
        <div class="pur_title">
            <p class="title">采购需求物料</p>
            <div class="add_need" style="float:right;margin-right: -18px;">
                <img src="/public/static/images/icon/add.png" alt="" style="margin-top:-4px">
                <!-- <span onclick="addList()">新增需求物料</span> -->
                <span>新增需求物料</span>

            </div>
        </div>
        <!-- 添加完成数据 -->
        <div class="add_cont_list" style="width: 810px;">
            <div class="line"></div>
            <div class="aa">
                <div class="cont_list">
                    <div class="cont_list_title">
                        <span>需求1</span>
                        <div class="data_operate" style="display:none;">
                            <img class="add_needs" src="/public/static/images/icon/edit.png" alt="">
                            <span class="add_needs">编辑</span>
                            <img onclick="delList(this)" src="/public/static/images/icon/del.png" alt="">
                            <span onclick="delList(this)"  style="margin-right: 5px;">删除</span>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <div class="cont_del">
                            <div><span class="cont_del_tol">物料名称</span><span class="cont_del_del">石子</span></div>
                            <div><span class="cont_del_tol">物料规格</span><span class="cont_del_del">10-20mm碎石碎石</span>
                            </div>
                        </div>
                        <div class="cont_del">
                            <div><span class="cont_del_tol">数量（单位）</span><span class="cont_del_del">6000（吨）</span></div>
                            <div><span class="cont_del_tol">验收标准</span><span class="cont_del_del">实验室标准</span></div>
                        </div>
                        <div class="cont_del">
                            <div><span class="cont_del_tol">截止送货时间</span><span class="cont_del_del">2021-05-13
                                    16:24:19</span></div>
                            <div><span class="cont_del_tol">备注</span><span class="cont_del_del">金宏6月15日需求</span></div>
                        </div>
                    </div>

                </div>
                <div class="cont_list">
                    <div class="cont_list_title">
                        <span>需求2</span>
                        <div class="data_operate" style="display:none;">
                            <img src="/public/static/images/icon/edit.png" alt="">
                            <span>编辑</span>
                            <img onclick="delList(this)" src="/public/static/images/icon/del.png" alt="">
                            <span onclick="delList(this)" style="margin-right: 5px;">删除</span>

                        </div>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <div class="cont_del">
                            <div><span class="cont_del_tol">物料名称</span><span class="cont_del_del">石子</span></div>
                            <div><span class="cont_del_tol">物料规格</span><span class="cont_del_del">10-20mm碎石碎石</span>
                            </div>
                        </div>
                        <div class="cont_del">
                            <div><span class="cont_del_tol">数量（单位）</span><span class="cont_del_del">6000（吨）</span></div>
                            <div><span class="cont_del_tol">验收标准</span><span class="cont_del_del">实验室标准</span></div>
                        </div>
                        <div class="cont_del">
                            <div><span class="cont_del_tol">截止送货时间</span><span class="cont_del_del">2021-05-13
                                    16:24:19</span></div>
                            <div><span class="cont_del_tol">备注</span><span class="cont_del_del">金宏6月15日需求</span></div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <!-- <div lass="line"></div> -->
    </div>
 
    <!-- 采购需求物料 -->
    <div id="pur_item_list" style="display: none;">
        <div class="content die_pur_item">
            <div class="list">
                <span class="title">需求<span class="num"> 1</span></span>
                <div class="operate" style="display: flex; flex-direction: row;">
                    <div class="del_index">
                        <img src="/public/static/images/icon/del.png" alt="">
                        <span style="margin-right: 5px;">删除</span>
                    </div>
                    <div>
                        <img src="/public/static/images/icon/del.png" alt="">
                        <span>保存</span>
                    </div>
                </div>
            </div>
            <div class="data">
                <!-- 第一行数据 -->
                <div style="display: flex; justify-content: space-between;margin-bottom: 6px;">
                    <div class="item" style="margin-left:-46px">
                        <label class="layui-form-label" style="margin-right: 18px;">材料大类</label>
                        <div class="layui-input-inline">
                            <select name="main[cid]" id="cid" lay-verify="required" lay-filter="cid">
                                <option value="0">原材料</option>
                                <?php if(is_array($cates) || $cates instanceof \think\Collection || $cates instanceof \think\Paginator): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($vo['id']); ?>"><?php echo htmlentities($vo['c_name']); ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>

                        </div>
                    </div>
                    <div class="item" style="margin-left:-52px">
                        <label class="layui-form-label" style="margin-right: 18px;">验收标准</label>
                        <div class="layui-input-inline">
                            <input type="text" lay-verify="" name="main[proposer]" class="layui-input ll-input "
                                readonly="readonly" style="margin-left: 10px;width: 336px;margin-right: -15px;">
                        </div>
                    </div>
                </div>
                <!-- 第二行数据 -->
                <div style="display: flex; justify-content: space-between;margin-bottom: 6px;">
                    <div class="item" style="margin-left:-46px">
                        <label class="layui-form-label" style="margin-right: 18px;">物料规格</label>
                        <div class="layui-input-inline">
                            <select name="main[cid]" id="cid" lay-verify="required" lay-filter="cid">
                                <option value="0">物料规格</option>
                                <?php if(is_array($cates) || $cates instanceof \think\Collection || $cates instanceof \think\Paginator): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($vo['id']); ?>"><?php echo htmlentities($vo['c_name']); ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>

                        </div>
                    </div>
                    <div class="item" style="margin-left:-52px">
                        <label class="layui-form-label" style="margin-right: 18px;">截至送货时间</label>
                        <!-- <div class="layui-input-inline">
                        <div class="layui-input-inline">
                            <input type="text" lay-verify="required" id="expir_time" name="main[expir_time]" value="" class="layui-input ll-input " style="width: 336px;margin-right: -15px;">
                        </div>
                    </div> -->

                        <div class="layui-input-inline">
                            <input type="text" lay-verify="required" id="expir1_time" name="main[expir_time]" value=""
                                class="layui-input ll-input " style="width: 336px;margin-right: -15px;">
                        </div>
                    </div>
                </div>
                <!-- 第三行数据 -->
                <div style="display: flex; justify-content: space-between;">
                    <div class="item" style="margin-left:-46px">
                        <label class="layui-form-label" style="margin-right: 18px;">申请人</label>
                        <div class="layui-input-inline">
                            <input type="text" lay-verify="" name="main[proposer]" class="layui-input ll-input "
                                readonly="readonly">
                        </div>
                    </div>

                    <div class="item" style="margin-left:-52px">
                        <label class="layui-form-label" style="margin-right: 18px;">备注</label>
                        <div class="layui-input-inline">
                            <input type="text" lay-verify="" name="main[proposer]" class="layui-input ll-input "
                                readonly="readonly" style="margin-left: 10px;width: 336px;margin-right: -15px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pur-item-box" style="display: none;">
        <table class="layui-table" lay-even>
            <thead>
                <tr>
                    <th>材料大类</th>
                    <th>材料名称</th>
                    <th>单位</th>
                    <th>数量</th>
                    <th>验收标准</th>
                    <th>截止送货时间</th>
                    <th>备注</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody id="pur_item_list">
                <tr class="pur-item">
                    <td><input class="layui-input s-input" type="text" name="item[0][m_name]" lay-verify="required">
                    </td>
                    <td><input class="layui-input s-input" type="text" name="item[0][spec]" lay-verify="required"
                            readonly>
                    </td>
                    <td><input class="layui-input s-input" type="text" name="item[0][units]" lay-verify="required"
                            readonly>
                        <input class="layui-input s-input h-input" type="text" name="item[0][m_num]"
                            lay-verify="required">
                    </td>
                    <td>
                        <input class="layui-input s-input" type="number" name="item[0][num]" lay-verify="required">
                    </td>
                    <td><input class="layui-input m-input" type="text" name="item[0][ys_standard]"
                            lay-verify="required"></td>
                    <td>
                        <input class="layui-input l-input end_time" id="end_time_0" type="text" name="item[0][end_time]"
                            lay-verify="required" readonly>
                    </td>
                    <td><input class="layui-input m-input" type="text" name="item[0][remark]"></td>
                    <td>
                        <a class="action choose" onclick="chooseInfo(this)">选择</a>
                        <a class="action add" onclick="addList()">插入</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!--<div class="item">-->
    <!--<label class="layui-form-label">备注:</label>-->
    <!--<div class="layui-input-inline">-->
    <!--<textarea name="remark"  cols="27"  placeholder="" style="resize: none;" class="layui-textarea" ></textarea>-->
    <!--</div>-->
    <!--</div>-->
    <div class="item btn-box">
        <div class="layui-input-inline btn-box1" style="">
            <button type="button" class="layui-btn s-button cancel">取消</button>
            <button type="button" class="layui-btn s-button" lay-submit="" lay-filter="add">确定</button>
        </div>
    </div>
</form>
<script type="text/html" id="pur_item">
    <div  class="content pur_item" >
        <div class="list">
            <span class="title">需求<span class="numm"></span> </span>
            <div class="operate">
                <img src="/public/static/images/icon/del.png" alt="">
                <span style="margin-right: 5px;" onclick="delList(this)">删除</span>
                <img src="/public/static/images/icon/del.png" alt="">
                <span >保存</span>
            </div>
        </div>
        <div class="data">
            <!-- 第一行数据 -->
            <div style="display: flex; justify-content: space-between;margin-bottom: 6px;">
                <div class="item"  style="margin-left:-46px">
                    <label class="layui-form-label" style="margin-right: 18px;">材料大类</label>
                    <div class="layui-input-inline">
                        <select name="main[cid]" id="cid" lay-verify="required" lay-filter="cid">
                            <option value="0">原材料</option>
                            <?php if(is_array($cates) || $cates instanceof \think\Collection || $cates instanceof \think\Paginator): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo htmlentities($vo['id']); ?>"><?php echo htmlentities($vo['c_name']); ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    
                    </div>
                </div>
                <div class="item" style="margin-left:-52px">
                    <label class="layui-form-label" style="margin-right: 18px;">验收标准</label>
                    <div class="layui-input-inline">
                        <input type="text" lay-verify="" name="main[proposer]"  class="layui-input ll-input "
                               readonly="readonly" style="margin-left: 10px;width: 336px;margin-right: -15px;">
                    </div>
                </div>
            </div>
            <!-- 第二行数据 -->
            <div style="display: flex; justify-content: space-between;margin-bottom: 6px;">
                <div class="item"  style="margin-left:-46px">
                    <label class="layui-form-label" style="margin-right: 18px;">物料规格</label>
                    <div class="layui-input-inline">
                        <select name="main[cid]" id="cid" lay-verify="required" lay-filter="cid">
                            <option value="0">物料规格</option>
                            <?php if(is_array($cates) || $cates instanceof \think\Collection || $cates instanceof \think\Paginator): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo htmlentities($vo['id']); ?>"><?php echo htmlentities($vo['c_name']); ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    
                    </div>
                </div>
                <div class="item" style="margin-left:-52px">
                    <label class="layui-form-label" style="margin-right: 18px;">截至送货时间</label>
                    <!-- <div class="layui-input-inline">
                        <div class="layui-input-inline">
                            <input type="text" lay-verify="required" id="expir_time" name="main[expir_time]" value="" class="layui-input ll-input " style="width: 336px;margin-right: -15px;">
                        </div>
                    </div> -->
               
                        <div class="layui-input-inline">
                            <input type="text" lay-verify="required" id="expir1_time" name="main[expir_time]" value="" class="layui-input ll-input " style="width: 336px;margin-right: -15px;">
                        </div>
                </div>
            </div>
            <!-- 第三行数据 -->
            <div style="display: flex; justify-content: space-between;">
                <div class="item" style="margin-left:-46px">
                    <label class="layui-form-label" style="margin-right: 18px;">申请人</label>
                    <div class="layui-input-inline">
                        <input type="text" lay-verify="" name="main[proposer]"  class="layui-input ll-input "
                               readonly="readonly" >
                    </div>
                </div>
      
                <div class="item" style="margin-left:-52px">
                    <label class="layui-form-label" style="margin-right: 18px;">备注</label>
                    <div class="layui-input-inline">
                        <input type="text" lay-verify="" name="main[proposer]"  class="layui-input ll-input "
                               readonly="readonly" style="margin-left: 10px;width: 336px;margin-right: -15px;">
                    </div>
                </div>
            </div>
        </div>
  </div>

    <!-- <tr class="pur-item"  >
        <td><input class="layui-input s-input" type="text" name="item[{{d}}][m_name]" lay-verify="required" readonly>
        </td>
        <td><input class="layui-input s-input" type="text" name="item[{{d}}][spec]" lay-verify="required" readonly>
        </td>
        <td><input class="layui-input s-input" type="text" name="item[{{d}}][units]" lay-verify="required" readonly>
            <input class="layui-input s-input h-input" type="text" name="item[{{d}}][m_num]" lay-verify="required">
        </td>
        <td><input class="layui-input s-input" type="number" name="item[{{d}}][num]" lay-verify="required"></td>
      
        <td><input class="layui-input m-input" type="text" name="item[{{d}}][ys_standard]" lay-verify="required"></td>
        <td>
            <input class="layui-input l-input end_time" id="end_time_{{d}}" type="text" name="item[{{d}}][end_time]" lay-verify="required" readonly>
        </td>
        <td><input class="layui-input m-input" type="text" name="item[{{d}}][remark]"></td>
        <td>
            <a class="action choose" onclick="chooseInfo(this)">选择</a>
            <a class="action add" onclick="addList()">插入</a>
            <a class="action del" onclick="delList(this)">删除</a>
        </td>
    </tr> -->
</script>
<script>
    $(".aa .cont_list").click(function (e) {
        var index = $(this).index();
        // console.log(index)
        $(".aa .cont_list").eq(index).find(".cont_list_title .data_operate").show();
        $(".aa .cont_list").eq(index).siblings().find(".cont_list_title .data_operate").hide();
        $(".aa .cont_list").eq(index).addClass("cont_list_acitve");
        $(".aa .cont_list").eq(index).siblings().removeClass("cont_list_acitve");
        $(document).click(function () {
            $(".data_operate").css("display", 'none');
            $(".aa .cont_list").eq(index).siblings().removeClass("cont_list_acitve");
        })
        e.stopPropagation();
    })
</script>

    <script type="text/html" id="toolbar">
    
        <div class="layui-btn-container">
            <button class="layui-btn layui-btn-sm" lay-event="getCheckData">获取选中行数据</button>
            <button class="layui-btn layui-btn-sm" lay-event="getCheckLength">获取选中数目</button>
            <button class="layui-btn layui-btn-sm" lay-event="isAll">验证是否全选</button>
        </div>
    
    </script>
    <script type="text/html" id="table_bar">
        
            <a class="layui-btn layui-btn-xs" lay-event="edit"><i class="iconfont">&#xe8ad;</i>&nbsp;编辑</a>
            <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="iconfont">&#xe8b6;</i>&nbsp;删除</a>
        
    </script>
</div>

<script type="text/javascript">
// 原本删除
$(".del_index").click(function(){
    $(".die_pur_item").hide();
    $(".add_cont_list").show();
})
    // 取消按钮
    $(".cancel").click(function () {
        xadmin.close()
    })
    layui.use(['form', 'laydate', 'laytpl'], function () {
        var form = layui.form,
            laytpl = layui.laytpl;
        laydate = layui.laydate;
        laydate.render({
            elem: '#expir_time',
            type: 'datetime'
        });
        laydate.render({
            elem: '#expir1_time',
            type: 'datetime',
            // position: 'static',
            trigger: 'click',
        });
        laydate.render({
            elem: '#require_time',
            type: 'datetime',
            // position: 'fiexd',
        });
        laydate.render({
            elem: '#require_time2',
            type: 'datetime'
        });
        laydate.render({
            elem: '#end_time_0',
            type: 'datetime',
            position: 'fiexd',
        });


        form.on('select(cid)', function (res) {
            res.elem.value = res.value;
            $('.pur-item-box input').val('');
        });
        //添加采购信息
        $(document).ready(function () {
            var cout = 0;
            $(".add_need").click(function () {
                cout = cout + 1
                if (cout == 1) {
                    $("#pur_item_list").show();
                    $(".add_cont_list").hide();
                } else {
                    $(".numm").empty();
                    var ele = $('#pur_item').html();
                    var len = $('.content').length;
                    console.log(len)
                    $(".numm").append(len)
                    if (len >= 6) {
                        layer.msg('一次最多发布6个信息');
                        return false;
                    }
                    laytpl(ele).render(len, function (html) {
                        $('#pur_item_list').append(html);
                        laydate.render({
                            elem: '#end_time_' + len,
                            type: 'datetime',
                            position: 'fiexd',
                            trigger: 'click',
                        });
                    });
                }
            })
        })
        window.addList = function addList() {
            $("#pur_item_list").show();
            $(".add_cont_list").hide();
            $(".numm").empty();
            var ele = $('#pur_item').html();
            var len = $('.content').length;

            if (len >= 6) {
                layer.msg('一次最多发布6个信息');
                return false;
            }
            laytpl(ele).render(len, function (html) {
                $('#pur_item_list').append(html);

                var f = false;
                if (f == !f) {
                    $('#pur_item_list').append(html);
                } else {


                }

                laydate.render({
                    elem: '#end_time_' + len,
                    type: 'datetime',
                    position: 'fiexd',
                    trigger: 'click',
                });
            });

        };

        //删除采购信息信息
        window.delList = function (obj) {
            $(obj).parents('.pur_item').remove();
            $(obj).parents('.cont_list').remove()
        };
        //行数暂存
        itemObj = '';
        //选择信息
        window.chooseInfo = function (obj) {
            itemObj = $(obj);
            var cid = $('#cid').val();
            xadmin.open('选择物料', '<?php echo url("show_mater"); ?>?cid=' + cid, 800, 500);
        };
        //数据填·   
        window.backfill = function (m_data) {
            var input_ele = itemObj.parents('tr').find("input");
            input_ele[0].value = m_data.m_name;
            input_ele[1].value = m_data.spec;
            input_ele[2].value = m_data.units;
            input_ele[3].value = m_data.m_num;
        };

        //监听提交
        form.on('submit(add)', function (data) {
            console.log(data.field);
            //return false;
            $.ajax({
                type: 'post',
                url: '<?php echo url("add_purch"); ?>',
                data: data.field,
                dataType: 'json',
                success(res) {
                    if (res.code == 0) {
                        layer.msg(res.msg, { icon: 1 }, function () {
                            parent.layer.closeAll();
                            parent.layui.table.reload('purList');
                        });
                        return false;
                    }
                    layer.msg(res.msg, { icon: 2 });
                }
            });
            return false;
        });
    })
</script>

</body>
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