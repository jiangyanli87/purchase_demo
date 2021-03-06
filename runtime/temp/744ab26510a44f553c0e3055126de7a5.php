<?php /*a:1:{s:63:"E:\TP5.0\purchase\application\purchase\view\index\pur_item.html";i:1623202131;}*/ ?>
<link rel="stylesheet" href="/public/static/layui-v2.6.6/layui/css/layui.css">
    <script src="/public/static/purchase//lib/layui/layui.js" charset="utf-8"></script>

<style>
    /* .describe{
        display: flex;
        justify-content: space-between;
    } */
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
        margin-right: 60px;
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
</style>


<div class="content">
    <!-- 上方文字描述 -->
    <div class="describe">
        <div class="demand fl">
            <p class="title">需方信息</p>
            <div class="left fl">
                
               <p >申请人<span>&nbsp; <?php echo htmlentities($edit_material['proposer']); ?></span></p> 
                <p >公司代码<span> <?php echo htmlentities($edit_material['uid']); ?></span></p>
                <p >报价截至时间<span>&nbsp; <?php echo htmlentities($edit_material['expir_time']); ?></span></p>
                <p  style="display: none;"><?php echo htmlentities($edit_material['id']); ?></p>
            </div>
            <div class="right fr">
                <p >要求到厂时间<span>&nbsp; <?php echo htmlentities($edit_material['require_time1']); ?>至</span><br><span style="margin-left:90px;line-height: 25px;"><?php echo htmlentities($edit_material['require_time2']); ?></span></p> 
                <p >截至送货时间<span>&nbsp; <?php echo htmlentities($edit_material['expir_time']); ?></span></p> 
            </div>
            <!-- <div class="clear"></div> -->
        </div>
        <div class="line fl"></div>
        <div class="audit fl">
            <p class="title">审核信息</p>

            <p class="demand_title" >审核状态&nbsp; <?php echo $edit_material['audit_status']==0 ? '<span style="color : #F37108">未审核</span>':($edit_material['audit_status']=='1'? '<span style="color:#17AE10">已通过</span>':'<span style="color:#F30808">未通过</span>'); ?>
            </p>
        </div>
        <div class="clear"></div>
       
    </div>
    <!-- 表格信息 -->
    <div class="table">
        <p class="title" >物料信息</p>
        <div id="table_ele"></div>
    </div>

    
<script type="text/javascript">
    layui.use('table', function () {
        var table = layui.table;
        table.render({
            elem: '#table_ele'
            , url: '<?php echo url("getMaterialData"); ?>'
            // , toolbar: '#toolbar' //开启头部工具栏，并为其绑定左侧模板
            // , defaultToolbar: ['filter', 'exports', 'print'            
            // ]
            , loading: true
            , title: '采购需求列表'
            , cols: [[
                {field: 'm_name', title: '物料名称',width:140,align: 'center'}
                , {field: 'spec', title: '物料规格',width:291,  align: 'center'},
                {field:"id",title:'物料编码',width:140,align: 'center'}
            
                , {field: 'units', title: '数量（单位）',width:140, align: 'center'}
                , {field: 'units', title:'验收标准',width:140,align: 'center',}
               
                , {field: 'remark', title: '备注', width:140,align: 'center'}
         
            ]]
         
            ,id : 'purList'
        });

        //头工具栏事件


    })
</script>



<script type="text/javascript">
layui.use(['table',"jquery",'form', 'laytpl'],function(){
    var  laytpl = layui.laytpl;
            form=layui.form;
            $=layui.jquery;
        $(document).ready(function(pm_id, obj = null){
            $.get('<?php echo url("getAuditComfirmData"); ?>', {pm_id}, function (res) {
                var getTpl = $('#info_item').html(),
                    view = $('#table_ele');
                laytpl(getTpl).render(res, function (html) {
                    view.html(html);
                    form.render();
                });
            })
        })    
})
</script>
</div>