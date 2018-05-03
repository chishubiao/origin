<?php if (!defined('THINK_PATH')) exit();?><html><head>
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta http-equiv="content-type" content="text/html;charset=utf-8">
 <meta name="theme-color" content="#920783">
 <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
 <title>会员</title>
 <link rel="stylesheet" type="text/css" href="/Public/css/mystyle.css">
 <link rel="stylesheet" type="text/css" href="/Public/css/jquery.alerts.css">
 <script type="text/javascript" src="/Public/js/jquery.min.js"></script>
 <script type="text/javascript" src="/Public/js/appcg.min.js"></script><style type="text/css" media="screen">#sound {visibility:hidden}</style>
 <link type="text/css" rel="stylesheet" href="/Public/css/mystyle5.css"></head>
<body>
<div class="topbj top_bj_9">
 <div class="top top_9">
  <div class="topleft"></div>
  <div class="topright">
   <div class="topmenu topright2">
    <ul class="nav nav_top">
     <li><a href="JavaScript:;" rel="tab_luxian">换线路</a></li>
     <li><a href="JavaScript:;" rel="tab_detail">下注明细</a></li>
     <li><a href="JavaScript:;" rel="tab_bill">历史账单</a></li>
     <li><a href="JavaScript:;" rel="tab_member">会员资料</a></li>
     <li><a href="JavaScript:;" rel="tab_award">开奖号码</a></li>
     <li><a href="JavaScript:;" rel="tab_rule">规则说明</a></li>
     <li><a href="JavaScript:;" rel="tab_logs">日志</a></li>
     <li><a href="JavaScript:;" rel="tab_pass">修改密码</a></li>
     <li><a href="Home/Login/login">退出</a></li>
     <li id="cgchat_num" class="cgchat_emain_no"></li>
    </ul>
    <ul class="top_gun">
     <li class="gun_name">排列5</li>
     <li class="gun"><marquee scrolldelay="400" style="height:15px;line-height:15px"> <span id="news">●●●【奖虫APP下载网址：jiangcho.com】
●●●【会员】【（1,2,3,5,6,7,8,9）t.55516222.net】●●●【会员备用】【（1111,2222,3333,5555）t.55516222.net】
●●●【管理】【（1,2,3,5,6,7,8,9）u.55516222.net】●●●【管理备用】【（1111,2222,3333,5555）u.55516222.net】
●●●【通知网永久网址xp.2020209.com和xxxx999.com※※ ※通知码：d7d51a】
●●●【 原来是用（手工抄数），现在可以用（程序抄数）了，请上网址（xx007.cc)下载（抄数助手），使用它可以减少工作量，提高效率。】
●●●【温馨提示】各位会员在下注确定后请到“下注明细”里确认注单，一切注单结算以下注明细里资料为准！】
●●●【本公司排列五开盘时间为每天早上  9:00开盘，当晚20:18分封盘！】
</span></marquee></li>
     <li id="timeTag">离停盘时间：1小时27分31秒</li>
    </ul>
    <ul class="top_kaida">
     <li><a href="JavaScript:;" rel="tab_erziding">二字定</a></li>
     <li class="active"><a href="JavaScript:;" rel="tab_kuaida" id="kuaida">快打</a></li>
     <li><a href="JavaScript:;" rel="tab_kuaixuan">快选</a></li>
     <li><a href="JavaScript:;" rel="tab_frank">赔率变动表</a></li>
     <li><a href="JavaScript:;" rel="tab_import">txt导入</a></li>
     <li><a href="http://www.jiangcho.com" target="_BLANK">（奖虫）APP</a></li>
    </ul>
   </div>
  </div>

 </div>
</div>
<div class="clear"></div>
<div class="main_main">
 <div class="fixPos"></div>
 <div class="main_left">
  <span id="credits_remaining" style="display:none">0</span>
  <div style="height:100%;overflow-y:scroll;overflow-x:hidden;">
  
    <link rel="stylesheet" type="text/css" id="css" href="/Public/css/orderprint.css">
    <style type="text/css">
        @media print {.Noprint {display:none; visibility:hidden;} }
        html{overflow-y:scroll;}
        body {top:0px; left:0px;bottom:0px; right:0px; height:100%;}
        .main_left_print{width: 180px;margin:0 auto;  }
        .left_userinfo{display:block;background:#FFF;list-style:none;padding:0;}
        .left_userinfo li{text-decoration:none;padding:3px 4px;margin:0;line-height:20px;}
        .main_left_print ul {background:#FFF;margin-left:2px;margin-right:1px;display:block;}
        .title{font-weight:bold;color:#fff;padding:3px 0;}
        .title_center{text-align:center;}
        .left_print{display:block;list-style:none;margin-top:10px;padding-left:0px;*padding-left:0;}

    </style>
    <script type="text/javascript" src="/Public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/Public/js/orderprint.js"></script>
    <link type="text/css" rel="stylesheet" href="/Public/css/mystyle5.css"></head>

<table width="180" border="0" cellpadding="0" cellspacing="0" align="center"><tbody><tr> <td>
    <div class="main_left_print">
        <ul class="left_userinfo Noprint">
            <li class="title title_center Noprint">会员信息</li>
            <li class="Noprint">账号:<span id="username"><?php echo $user['user'];?></span></li>
            <li class="Noprint">信用:<span id="credits"><?php echo $user['credit'];?></span></li>
            <li class="Noprint">已用:<span id="credits_use"><?php echo $user['use_credit'];?></span></li>
            <li class="Noprint">可用:<span id="credits_remaining"><?php echo $user['credit']- $user['use_credit'];?></span></li>
            <li class="Noprint">期号:<span id="issueno_now"><?php echo $term_number; ?></span></li>
        </ul>
        <ul id="sendmode0" style="display:none" class="left_userinfo Noprint"><li class="title title_center">正在使用</li><li class="title_center"></li></ul>
        <ul id="sendmode1" style="" class="left_print">
            <div id="orderprint">
                <table id="JOPTab" width="178" border="0" style="text-align: left;  background: #FFFFFF;" cellpadding="0" cellspacing="0">
                <tbody><tr><td>
                    <input type="button" value="设置图示" name="printpre" id="printpre" class="printbut Noprint">
                    <input type="hidden" name="printstat" id="printstat" class="Noprint">
                    <input type="hidden" name="sorderid" id="sorderid" class="Noprint">
                    <input type="hidden" name="_oidstr" id="_oidstr" class="Noprint">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody><tr>
                    <td style="text-align:right;font-size:15px;">单位：元</td></tr></tbody></table><table align="center" width="178" cellpadding="0" cellspacing="0" class="tablebprint4" style="margin-bottom: 2px !important;">
                     <tbody><tr><td colspan="3" class="print2" style="text-align:center;"><span style="color:red;font-size:18px;">排列5</span><span style="font-size:14px;">(第<span id="_printnumber">1</span>次打印)</span></td></tr>  <tr>
                     <td colspan="3" class="print3">时间:<span id="_datetime"><?php echo date('Y-m-d',$user['caretime']);?></span><br>会员:<span id="_user"><?php echo $user['user'];?></span>
                     <br>编号:<span id="_orderid"><?php echo $user['number'];?></span></td></tr>  <tr class="print2"><td style="text-align:center;">号码</td>
                     <td style="text-align:center;">赔率</td><td style="text-align:center;">金额</td></tr>   </tbody><tbody id="orderlist">
                <?php if(empty($best)){ ?>
                <?php foreach($best as $k => $v){ ?>
                <tr id="o_679201" bgcolor="#ffffff" class="print2" style="height:28px;line-height:19px;">
                    <td style="text-align:center;"><?php echo $v['num'] ?></td><td style="text-align:center;">1:<?php echo $v['odds'] ?></td>
                    <td style="text-align:center;"><?php echo $v['num_m'] ?><dd><?php echo $v['term_nnum'] ?></dd><dd><?php echo date('Y-m-d H:i:s',$v['createtime']) ?></dd></td></tr>
                <?php } ?> <?php } ?>
                </tbody><tbody><tr class="print5">
                    <td colspan="3">笔数<span id="_bscount"></span> 总金额<span id="_allmoney"></span></td>  </tr>
                <tr><td align="center" style="text-align:center;" class="Noprint" colspan="3">
                    <input class="printbut Noprint" type="button" name="numClear" id="numClear" value="清 空">
                    &nbsp;&nbsp;&nbsp;&nbsp; <input class="printbut Noprint" type="button" name="numprint" id="numprint" value="打 印"></td>
                </tr></tbody></table>
                    <span style="font-size:15px;">第 <span id="_issueno_now"><?php echo $term_number; ?></span> 期,3天內有效!!</span>
                </td></tr><tr>   </tr></tbody>
                    <tbody id="orderpage" style="display:none;">
                    <tr class="Noprint"><td style="font-size:15px;" colspan="3"><b>总笔数<font color="red"><span id="_z_bscount"></span></font> 总金额<font color="red"><span id="_z_allmoney"></span></font><b></b></b></td></tr><tr></tr>
                    <tr class="Noprint"><td style="font-size:15px;" colspan="3"><span id="_z_page"></span></td></tr><tr></tr></tbody></table> <br><span id="testdate" class="Noprint" style="display:none;"></span></div></ul>
    </div>
</td></tr><tr></tr></tbody></table>
<script type="text/javascript">
    function jAlert(str){

    }
    function jsonAjax(url,types , param, datat, callback) {
        $.ajax({
            type: types,
            url: url,
            data: param,
            dataType: datat,
            success: callback,
            error: function () {
                return ;
            }
        });
    }
    var cgPrint={
        sid:"",
        caizhongselect:1
        ,GetPrint:function (data) {
            var json = eval(data);
            var s = json.s;
            if(s>9000) {
                return ;
            }else if(s>8000) {
                return ;
            }else if(s==200){
                $('#orderprint').empty();
                cgPrint.sid=json.gsid;
                $('#username').html(json.username);
                $('#issueno_now').html(json.issueno_now);
                $('#credits').html(json.credits);
                var get_credits_use = json.credits_use-0;
                var get_credits_use = Number(get_credits_use.toFixed(2));
                $('#credits_use').html(get_credits_use);
                $('#credits_remaining').html(json.credits_remaining);

                cgPrint.caizhongselect = json.caizhongselect;

                cgPrint.addCssFile(cgPrint.caizhongselect);

                if(json.sendmode==1){
                    $.JOP.printnum=0;
                    var getIsPC=$.JOP.IsPC();
                    $("#orderprint").JOP({data : {"p":json.printitem},caizhong:cgPrint.caizhongselect,IN_WAPCG:9,getIsPC:getIsPC});
                }

                //0是掩藏打印小票
                if(json.sendmode==1){
                    $('#sendmode0').hide();
                    $('#sendmode1').show();
                }else{
                    $('#sendmode0').show();
                    $('#sendmode1').hide();
                    cgPrint.showsendmode0();
                }
            }else{

            }
        }
        ,addCssFile:function(s){
            var czs = (s == 2 ? "mystyle5.css":"mystyle7.css");
            var css_href = './admincg/css/'+czs;
            var styleTag = document.createElement("link");
            styleTag.setAttribute('type', 'text/css');
            styleTag.setAttribute('rel', 'stylesheet');
            styleTag.setAttribute('href', css_href);
            $("head")[0].appendChild(styleTag);
        }
        ,showsendmode0:function(){
            if(cgPrint.caizhongselect==2){
                $('#sendmode0 li:eq(1)').html('<img src="./admincg/images/sevencolor5.gif">');
            }else{
                $('#sendmode0 li:eq(1)').html('<img src="./admincg/images/sevencolor.gif">');
            }
        }

    }
    $(window).load(function(){
        jsonAjax("appindexajax.php","get", "action=printrefresh"+ "&time=" + new Date().getMilliseconds(), "json", cgPrint.GetPrint);
    });
</script>

  </div>
 </div>
 <div id="shezhi" style="display: none;text-align: center ;">

  <div style="width: 100%;z-index: 9999; height: 100%; background-color: grey; opacity: 0.5; position: absolute; top: 0px; left: 0px;" id="tan"></div>
  


<div id="popup_container" class="alertPrint" style="position: fixed; z-index: 99999; padding: 0px; margin: 0px; min-width: 660px; max-width: 660px; top: 128.5px;left: 30%"><div id="popup_container_print"><h1 id="popup_close">X</h1><h1 id="popup_title">设置图示</h1><div id="popup_content"><div id="popup_message"><table class="alertsPrint1 appnews" width="100%" align="center">
    <tbody>

    <tr><td><br>IE7 打印设置图示说明</td></tr>
    <tr><td>
        <br>步骤1、（如果您的浏览器已经设置菜单栏，直接从步骤2开始设置）<br><br><img src="/Public/img/ie7_1.gif">
        <br><br>步骤2、<br><br><img src="/Public/img/ie7_2.gif">
        <br><br>步骤3、<br><br><img src="/Public/img/ie7_3.gif">
        <br><br>步骤4、<br><br><img src="/Public/img/ie7_4.gif">
    </td></tr>
    <tr><td><br><br>IE11 打印设置图示说明</td></tr>
    <tr><td>
        <br>步骤1、<br><br><img src="/Public/img/ie11_1.gif">
        <br><br>步骤2、<br><br><img src="/Public/img/ie11_2.gif">
        <br><br>步骤3、<br><br><img src="/Public/img/ie11_3.gif">
        <br><br>步骤4、<br><br><img src="/Public/img/ie11_4.gif">
        <br><br>步骤5、<br><br><img src="/Public/img/ie11_5.gif">
        <br><br>步骤6、<br><br><img src="/Public/img/ie11_6.gif">
    </td></tr>
    <tr><td><br>360下切换兼容模式</td></tr>
    <tr><td>
        <br>步骤、打开360浏览器，点击切换模式按钮，选中兼容模式，如图。<br><br><img src="/Public/img/360moshi.jpg"><br>
    </td></tr>
    </tbody>
</table>
</div><div id="popup_panel"><input class="btn" style="*width:80px" type="button" value="&nbsp;&nbsp;打印&nbsp;&nbsp;" id="popup_ok">
    <input class="btn" type="button" value="&nbsp;&nbsp;取消&nbsp;&nbsp;" id="popup_cancel"></div></div></div><div style="display:none" id="PrintPager" class="pagination"></div></div>
 </div>
 <script>
  $("#printpre").click(function(){
   $("#shezhi").show();
  });
  $("#popup_close").click(function(){
   $("#shezhi").hide();
  })
 </script>
 <div class="clear"></div>
 <!-- main_left end -->
 <!-- 快打 -->
 <div id="tab_main">
  <ol>
   <li id="tab_detail" style="display:none">
    <div class="main_center main_center_erziding"><!-- 下注明细 -->
     <div class="detailsearch">
      <ul>
       <li class="detailsearchimg"> &nbsp;</li>
       <li>查号码:<input type="text" id="detailsearchnumber" name="detailsearchnumber" pattern="\d" maxlength="4/" style="height: 30px;    "></li>
       <li></li>
       <li><label class="checkbox">现 <input id="detailsearchsendsizi" type="checkbox"></label></li>
       <li>列出:<select id="soclass" name="soclass" class="chosen-select" data-placeholder="列出"><option value="0">赔率</option><option value="1">金额</option><option value="2">退码</option></select><input type="text" id="ds_s_money" name="ds_s_money" maxlength="8/" style="height: 30px;"></li>
       <li>至:<input type="text" id="ds_s_money_end" name="ds_s_money_end" maxlength="8/" style="height: 30px;"></li>
       <li>分类:<select id="so_s_classid" name="so_s_classid" class="chosen-select" data-placeholder="分类"><option value="0">全部</option><option value="1">二定位</option><option value="102">口口XX</option><option value="101">口X口X</option><option value="100">口XX口</option><option value="98">X口X口</option><option value="99">X口口X</option><option value="97">XX口口</option><option value="4">三定位</option><option value="106">口口口X</option><option value="105">口口X口</option><option value="104">口X口口</option><option value="103">X口口口</option><option value="5">四定位</option><option value="6">二字现</option><option value="7">三字现</option><option value="107">四字现</option><option value="10001">二定</option><option value="10002">快打</option><option value="10003">快选</option><option value="10004">导入</option><option value="10008">网</option><option value="10009">虫</option><option value="10010">手</option><option value="10011">打印</option></select></li>
       <li><button class="btn" id="detailsearch" type="button">搜索</button></li>
       <li><button class="btn" id="detailprint" type="button">打印</button></li>
       <li><button class="btn" id="detailhitaward" type="button">中奖明细</button></li>
      </ul>
     </div>
     <span id="ds_s_issueno" style="display:none"></span>
     <table class="table table-bordered table-condensed table-hover tablecenter">
      <thead>
      <tr class="xiazhukuang">
       <th colspan="11" id="ds_title">本期下注明细</th>
      </tr>
<script>
    $("#detailhitaward").click(function(){
        $("#zhudannum").text('小票编号');
        $("#xidantime").text('小票时间')
    });
</script>
      <tr class="xiazhukuang2">
       <th width="7%">彩种</th>
       <th width="11%" id="zhudannum">注单编号</th>
       <th width="16%" id="xidantime">下单时间</th>
       <th width="8%">号码</th>
       <th width="8%">金额</th>
       <th width="6%">赔率</th>
       <th width="11%">中奖</th>
       <th width="8%">回水</th>
       <th width="*">盈亏</th>
       <th width="7%">状态</th>
       <th width="7%"><label class="checkbox">全选<input id="DetailcheckboxALLID" type="checkbox"></label><button class="btn btnTuima" id="detailtuima" type="button">退码</button></th>
      </tr>
      </thead>
      <tbody id="DetailList">
      <?php if(!empty($bets)){ ?>
      <?php foreach($bets as $k => $v){ ?>
      <tr><td><?php echo $v['color_species'] ?></td><td><?php echo $v['term_num'] ?></td><td><?php echo date('m-d H:i:s',$v['createtime']) ?></td><td class="number"><?php echo $v['num'] ?><span></span></td><td class="money"><?php echo $v['num_m'] ?></td><td class="frank"><?php echo $v['odds'] ?></td><td><?php if(!empty($v['prize'])){ echo $v['prize']; }else{ echo'--';}?></td><td><?php if(!empty($v['backwater'])){ echo $v['backwater'] ;}else{ echo '0';}?></td><td><?php echo $v['loss'] ?></td><td><?php if($v['status'] == 1){ echo '成功'; }else{ echo'退码';}?></td><td>--</td></tr>
      <?php } ?>
      <?php } ?>

      <tr id="detailheji"><td colspan="2">合计</td><td><?php echo $status;?></td><td> </td><td><?php echo $num_m; ?></td><td> </td><td><?php echo $backwater; ?></td><td><?php echo $prize; ?></td><td><?php echo $loss; ?></td><td> </td><td> </td></tr>
      </tbody>
     </table>
     <div id="DetailListPager" class="pagination"></div><div class="clear"></div>
    </div>
   </li><li id="tab_bill" style="display:none">
   <div class="main_center main_center_erziding">
    <table class="table table-bordered table-condensed table-hover tablecenter">
     <thead>
     <tr class="xiazhukuang">
      <th colspan="11">历史账单 <span id="bill_issueno_start"><select name="s_issueno_start" id="s_issueno_start" onchange="cgBill.Search();"></select></span>&gt;&gt;<span id="bill_issueno_end"><select name="s_issueno_end" id="s_issueno_end" onchange="cgBill.Search();"></select></span></th>
     </tr>
     <tr class="xiazhukuang2">
      <th width="14%">日期</th>
      <th width="14%">期号</th>
      <th width="14%">笔数</th>
      <th width="*">金额</th>
      <th width="14%">回水</th>
      <th width="14%">中奖</th>
      <th width="14%">盈亏</th>
     </tr>
     </thead>
     <tbody id="billList"><tr><td>2018-04-21</td><td class="red"><a href="JavaScript:;" onclick="cgBill.listclick(18104)">18104</a></td><td>0</td><td>0</td><td>0</td><td>--</td><td>--</td></tr><tr class="xiazhukuang2"><th colspan="2">合计</th><th></th><th></th><th></th><th></th><th></th></tr></tbody>
    </table>
    <div id="billListPager" class="pagination"></div><div class="clear"></div>
   </div>
  </li>
   <li id="tab_member" style="display:none">
    <div class="main_center main_center_erziding">
     <div class="memberleft">
      <table class="table table-bordered table-condensed table-hover">
       <thead>
       <tr class="xiazhukuang">
        <th colspan="2">会员资料</th>
       </tr>
       </thead>
       <tbody>
       <tr>
        <td>账　　号:</td><td id="m_username"><?php echo $user['user']; ?></td> </td>
       </tr>
       <tr>
        <td>姓　　名:</td><td id="m_nickname"><?php echo $user['name']; ?></td>
       </tr>
       <tr>
        <td>信用额度:</td><td id="m_credits"><?php echo $user['credit']; ?></td>
       </tr>
       </tbody>
      </table>
     </div>
     <div class="memberright">
      <table class="table table-bordered table-condensed table-hover">
       <thead>
       <tr class="xiazhukuang">
        <th colspan="3">会员资料</th>
       </tr>
       </thead>
       <tbody>
       <tr>
        <td>自动:<input type="radio" name="entermode" value="0" checked></td>
        <td>小票打印:<input type="radio" name="sendmode" value="1" checked ></td>
        <td>实际赔率:<input type="radio" name="isfpfrankhotzhuan" value="1" checked ></td>
       </tr>
       <tr>
        <td>回车:<input type="radio" name="entermode" value="1"></td>
        <td>显示彩种:<input type="radio" name="sendmode" value="0"></td>
        <td>转换赔率:<input type="radio" name="isfpfrankhotzhuan" value="0"></td>
       </tr>
       <tr>
        <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
       </tr>
       </tbody>
      </table>
     </div>
     <table class="table-member">
      <tbody>
      <tr>
       <td width="47%">&nbsp;1、小票打印请使用系统自带浏览器&nbsp;&nbsp;<img src="/Public/img/ie7.png" width="35"></td>
       <td width="53%" rowspan="2">&nbsp;<button class="btn" id="memberbut" type="button" onclick="memberbut()">提交</button></td>
      </tr>
      <tr>
       <td>&nbsp;2、提示:+号代表x号</td>
      </tr>
      <tr>
       <td colspan="2">&nbsp;3、小票打印处，增加了分页，每页显示500笔。</td>
      </tr>
      <tr>
       <td colspan="2">&nbsp;4、下注明细里，颜色（<font color="#ff0000" size="4">●</font>）或（<font color="#339900" size="4">●</font>）连在一起的，代表是在同一张小票上。</td>
      </tr>
      <tr>
       <td colspan="2">&nbsp;5、小票打印处内容超过500笔，再次下单后，系统会自动清空之前小票打印内容，请注意使用。</td>
      </tr>
      </tbody>
     </table>
     <table class="table table-bordered table-condensed table-hover tablecenter">
      <thead>
      <tr class="xiazhukuang">
       <th colspan="9">会员资料</th>
      </tr>
      <tr class="xiazhukuang2">
       <th>类别</th>
       <th>最小下注</th>
       <th>赔率上限(多个用/分开)</th>
       <th>单注上限</th>
       <th>单项上限</th>
       <th>交易回水</th>
       <th>赔率</th>

      </tr>
      </thead>
      <tbody id="memberList">
      <tr class="xiazhukuang2">
       <th class="mred">二定位</th>
       <th> </th><th> </th><th> </th><th> </th><th>
       <select name="hs_1" id="hs_1" style="display:none"><option value="0">0</option></select>
      </th><th> </th></tr><tr><td>口口XX</td><td>1</td><td>99.5</td><td>2000</td><td>100000</td><td>
       <select name="hs_102" id="hs_102" data-pid="1" class="chosen-select" data-placeholder="交易回水" style="width:100px;">
        <option value="0.195">0.195</option><option value="0.194">0.194</option><option value="0.193">0.193</option>
        <option value="0.192">0.192</option><option value="0.191">0.191</option><option value="0.19">0.19</option>
        <option value="0.189">0.189</option><option value="0.188">0.188</option><option value="0.187">0.187</option>
        <option value="0.186">0.186</option><option value="0.185">0.185</option><option value="0.184">0.184</option>
        <option value="0.183">0.183</option><option value="0.182">0.182</option><option value="0.181">0.181</option>
        <option value="0.18">0.18</option><option value="0.179">0.179</option><option value="0.178">0.178</option>
        <option value="0.177">0.177</option><option value="0.176">0.176</option><option value="0.175">0.175</option>
        <option value="0.174">0.174</option><option value="0.173">0.173</option><option value="0.172">0.172</option>
        <option value="0.171">0.171</option><option value="0.17">0.17</option><option value="0.169">0.169</option>
        <option value="0.168">0.168</option><option value="0.167">0.167</option><option value="0.166">0.166</option>
        <option value="0.165">0.165</option><option value="0.164">0.164</option><option value="0.163">0.163</option>
        <option value="0.162">0.162</option><option value="0.161">0.161</option><option value="0.16">0.16</option>
        <option value="0.159">0.159</option><option value="0.158">0.158</option><option value="0.157">0.157</option>
        <option value="0.156">0.156</option><option value="0.155">0.155</option><option value="0.154">0.154</option>
        <option value="0.153">0.153</option><option value="0.152">0.152</option><option value="0.151">0.151</option>
        <option value="0.15">0.15</option><option value="0.149">0.149</option><option value="0.148">0.148</option>
        <option value="0.147">0.147</option><option value="0.146">0.146</option><option value="0.145">0.145</option>
        <option value="0.144">0.144</option><option value="0.143">0.143</option><option value="0.142">0.142</option>
        <option value="0.141">0.141</option><option value="0.14">0.14</option><option value="0.139">0.139</option>
        <option value="0.138">0.138</option><option value="0.137">0.137</option><option value="0.136">0.136</option>
        <option value="0.135">0.135</option><option value="0.134">0.134</option><option value="0.133">0.133</option>
        <option value="0.132">0.132</option><option value="0.131">0.131</option><option value="0.13">0.13</option>
        <option value="0.129">0.129</option><option value="0.128">0.128</option><option value="0.127">0.127</option>
        <option value="0.126">0.126</option><option value="0.125">0.125</option><option value="0.124">0.124</option>
        <option value="0.123">0.123</option><option value="0.122">0.122</option><option value="0.121">0.121</option>
        <option value="0.12">0.12</option><option value="0.119">0.119</option><option value="0.118">0.118</option>
        <option value="0.117">0.117</option><option value="0.116">0.116</option><option value="0.115">0.115</option>
        <option value="0.114">0.114</option><option value="0.113">0.113</option><option value="0.112">0.112</option>
        <option value="0.111">0.111</option><option value="0.11">0.11</option><option value="0.109">0.109</option>
        <option value="0.108">0.108</option><option value="0.107">0.107</option><option value="0.106">0.106</option>
        <option value="0.105">0.105</option><option value="0.104">0.104</option><option value="0.103">0.103</option>
        <option value="0.102">0.102</option><option value="0.101">0.101</option><option value="0.1">0.1</option>
        <option value="0.099">0.099</option><option value="0.098">0.098</option><option value="0.097">0.097</option>
        <option value="0.096">0.096</option><option value="0.095">0.095</option><option value="0.094">0.094</option>
        <option value="0.093">0.093</option><option value="0.092">0.092</option><option value="0.091">0.091</option>
        <option value="0.09">0.09</option><option value="0.089">0.089</option><option value="0.088">0.088</option>
        <option value="0.087">0.087</option><option value="0.086">0.086</option><option value="0.085">0.085</option>
        <option value="0.084">0.084</option><option value="0.083">0.083</option><option value="0.082">0.082</option>
        <option value="0.081">0.081</option><option value="0.08">0.08</option><option value="0.079">0.079</option>
        <option value="0.078">0.078</option><option value="0.077">0.077</option><option value="0.076">0.076</option>
        <option value="0.075">0.075</option><option value="0.074">0.074</option><option value="0.073">0.073</option>
        <option value="0.072">0.072</option><option value="0.071">0.071</option><option value="0.07">0.07</option>
        <option value="0.069">0.069</option><option value="0.068">0.068</option><option value="0.067">0.067</option>
        <option value="0.066">0.066</option><option value="0.065">0.065</option><option value="0.064">0.064</option>
        <option value="0.063">0.063</option><option value="0.062">0.062</option><option value="0.061">0.061</option>
        <option value="0.06">0.06</option><option value="0.059">0.059</option><option value="0.058">0.058</option>
        <option value="0.057">0.057</option><option value="0.056">0.056</option><option value="0.055">0.055</option>
        <option value="0.054">0.054</option><option value="0.053">0.053</option><option value="0.052">0.052</option>
        <option value="0.051">0.051</option><option value="0.05">0.05</option><option value="0.049">0.049</option>
        <option value="0.048">0.048</option><option value="0.047">0.047</option><option value="0.046">0.046</option>
        <option value="0.045">0.045</option><option value="0.044">0.044</option><option value="0.043">0.043</option>
        <option value="0.042">0.042</option><option value="0.041">0.041</option><option value="0.04">0.04</option>
        <option value="0.039">0.039</option><option value="0.038">0.038</option><option value="0.037">0.037</option>
        <option value="0.036">0.036</option><option value="0.035">0.035</option><option value="0.034">0.034</option>
        <option value="0.033">0.033</option><option value="0.032">0.032</option><option value="0.031">0.031</option>
        <option value="0.03">0.03</option><option value="0.029">0.029</option><option value="0.028">0.028</option>
        <option value="0.027">0.027</option><option value="0.026">0.026</option><option value="0.025">0.025</option>
        <option value="0.024">0.024</option><option value="0.023">0.023</option><option value="0.022">0.022</option>
        <option value="0.021">0.021</option><option value="0.02">0.02</option><option value="0.019">0.019</option>
        <option value="0.018">0.018</option><option value="0.017">0.017</option><option value="0.016">0.016</option>
        <option value="0.015">0.015</option><option value="0.014">0.014</option><option value="0.013">0.013</option><option value="0.012">0.012</option><option value="0.011">0.011</option>
        <option value="0.01">0.01</option><option value="0.009">0.009</option><option value="0.008">0.008</option><option value="0.007">0.007</option><option value="0.006">0.006</option>
        <option value="0.005">0.005</option><option value="0.004">0.004</option><option value="0.003">0.003</option><option value="0.002">0.002</option><option value="0.001">0.001</option>
        <option value="0" selected="">0</option></select></td><td><select name="fs_102" id="fs_102" data-pid="1" class="chosen-select" data-placeholder="赔率" style="width:100px;"><option value="80">80</option>
       <option value="80.1">80.1</option><option value="80.2">80.2</option><option value="80.3">80.3</option><option value="80.4">80.4</option><option value="80.5">80.5</option><option value="80.6">80.6</option>
       <option value="80.7">80.7</option><option value="80.8">80.8</option><option value="80.9">80.9</option><option value="81">81</option><option value="81.1">81.1</option><option value="81.2">81.2</option>
       <option value="81.3">81.3</option><option value="81.4">81.4</option><option value="81.5">81.5</option><option value="81.6">81.6</option><option value="81.7">81.7</option><option value="81.8">81.8</option>
       <option value="81.9">81.9</option><option value="82">82</option><option value="82.1">82.1</option><option value="82.2">82.2</option><option value="82.3">82.3</option><option value="82.4">82.4</option>
       <option value="82.5">82.5</option><option value="82.6">82.6</option><option value="82.7">82.7</option><option value="82.8">82.8</option><option value="82.9">82.9</option><option value="83">83</option>
       <option value="83.1">83.1</option><option value="83.2">83.2</option><option value="83.3">83.3</option><option value="83.4">83.4</option><option value="83.5">83.5</option><option value="83.6">83.6</option>
       <option value="83.7">83.7</option><option value="83.8">83.8</option><option value="83.9">83.9</option><option value="84">84</option><option value="84.1">84.1</option><option value="84.2">84.2</option>
       <option value="84.3">84.3</option><option value="84.4">84.4</option><option value="84.5">84.5</option><option value="84.6">84.6</option><option value="84.7">84.7</option><option value="84.8">84.8</option>
       <option value="84.9">84.9</option><option value="85">85</option><option value="85.1">85.1</option><option value="85.2">85.2</option><option value="85.3">85.3</option><option value="85.4">85.4</option>
       <option value="85.5">85.5</option><option value="85.6">85.6</option><option value="85.7">85.7</option><option value="85.8">85.8</option><option value="85.9">85.9</option><option value="86">86</option>
       <option value="86.1">86.1</option><option value="86.2">86.2</option><option value="86.3">86.3</option><option value="86.4">86.4</option><option value="86.5">86.5</option><option value="86.6">86.6</option>
       <option value="86.7">86.7</option><option value="86.8">86.8</option><option value="86.9">86.9</option><option value="87">87</option><option value="87.1">87.1</option><option value="87.2">87.2</option>
       <option value="87.3">87.3</option><option value="87.4">87.4</option><option value="87.5">87.5</option><option value="87.6">87.6</option><option value="87.7">87.7</option><option value="87.8">87.8</option>
       <option value="87.9">87.9</option><option value="88">88</option><option value="88.1">88.1</option><option value="88.2">88.2</option><option value="88.3">88.3</option><option value="88.4">88.4</option>
       <option value="88.5">88.5</option><option value="88.6">88.6</option><option value="88.7">88.7</option><option value="88.8">88.8</option><option value="88.9">88.9</option><option value="89">89</option>
       <option value="89.1">89.1</option><option value="89.2">89.2</option><option value="89.3">89.3</option><option value="89.4">89.4</option><option value="89.5">89.5</option><option value="89.6">89.6</option>
       <option value="89.7">89.7</option><option value="89.8">89.8</option><option value="89.9">89.9</option><option value="90">90</option><option value="90.1">90.1</option><option value="90.2">90.2</option>
       <option value="90.3">90.3</option><option value="90.4">90.4</option><option value="90.5">90.5</option><option value="90.6">90.6</option><option value="90.7">90.7</option><option value="90.8">90.8</option>
       <option value="90.9">90.9</option><option value="91">91</option><option value="91.1">91.1</option><option value="91.2">91.2</option><option value="91.3">91.3</option><option value="91.4">91.4</option>
       <option value="91.5">91.5</option><option value="91.6">91.6</option><option value="91.7">91.7</option><option value="91.8">91.8</option><option value="91.9">91.9</option><option value="92">92</option>
       <option value="92.1">92.1</option><option value="92.2">92.2</option><option value="92.3">92.3</option><option value="92.4">92.4</option><option value="92.5">92.5</option><option value="92.6">92.6</option>
       <option value="92.7">92.7</option><option value="92.8">92.8</option><option value="92.9">92.9</option><option value="93">93</option><option value="93.1">93.1</option><option value="93.2">93.2</option>
       <option value="93.3">93.3</option><option value="93.4">93.4</option><option value="93.5">93.5</option><option value="93.6">93.6</option><option value="93.7">93.7</option><option value="93.8">93.8</option>
       <option value="93.9">93.9</option><option value="94">94</option><option value="94.1">94.1</option><option value="94.2">94.2</option><option value="94.3">94.3</option><option value="94.4">94.4</option>
       <option value="94.5">94.5</option><option value="94.6">94.6</option><option value="94.7">94.7</option><option value="94.8">94.8</option><option value="94.9">94.9</option><option value="95">95</option>
       <option value="95.1">95.1</option><option value="95.2">95.2</option><option value="95.3">95.3</option><option value="95.4">95.4</option><option value="95.5">95.5</option><option value="95.6">95.6</option>
       <option value="95.7">95.7</option><option value="95.8">95.8</option><option value="95.9">95.9</option><option value="96">96</option><option value="96.1">96.1</option><option value="96.2">96.2</option>
       <option value="96.3">96.3</option><option value="96.4">96.4</option><option value="96.5">96.5</option><option value="96.6">96.6</option><option value="96.7">96.7</option><option value="96.8">96.8</option>
       <option value="96.9">96.9</option><option value="97">97</option><option value="97.1">97.1</option><option value="97.2">97.2</option><option value="97.3">97.3</option><option value="97.4">97.4</option>
       <option value="97.5">97.5</option><option value="97.6">97.6</option><option value="97.7">97.7</option><option value="97.8">97.8</option><option value="97.9">97.9</option><option value="98">98</option>
       <option value="98.1">98.1</option><option value="98.2">98.2</option><option value="98.3">98.3</option><option value="98.4">98.4</option><option value="98.5">98.5</option><option value="98.6">98.6</option>
       <option value="98.7">98.7</option><option value="98.8">98.8</option><option value="98.9">98.9</option><option value="99">99</option><option value="99.1">99.1</option><option value="99.2">99.2</option>
       <option value="99.3">99.3</option><option value="99.4">99.4</option><option value="99.5" selected="">99.5</option></select></td></tr><tr><td>口X口X</td><td>1</td><td>99.5</td><td>2000</td><td>100000</td><td>
       <select name="hs_101" id="hs_101" data-pid="1" class="chosen-select" data-placeholder="交易回水" style="width:100px;"><option value="0.195">0.195</option><option value="0.194">0.194</option>
        <option value="0.193">0.193</option><option value="0.192">0.192</option><option value="0.191">0.191</option><option value="0.19">0.19</option><option value="0.189">0.189</option><option value="0.188">0.188</option>
        <option value="0.187">0.187</option><option value="0.186">0.186</option><option value="0.185">0.185</option><option value="0.184">0.184</option><option value="0.183">0.183</option><option value="0.182">0.182</option>
        <option value="0.181">0.181</option><option value="0.18">0.18</option><option value="0.179">0.179</option><option value="0.178">0.178</option><option value="0.177">0.177</option><option value="0.176">0.176</option>
        <option value="0.175">0.175</option><option value="0.174">0.174</option><option value="0.173">0.173</option><option value="0.172">0.172</option><option value="0.171">0.171</option><option value="0.17">0.17</option>
        <option value="0.169">0.169</option><option value="0.168">0.168</option><option value="0.167">0.167</option><option value="0.166">0.166</option><option value="0.165">0.165</option><option value="0.164">0.164</option>
        <option value="0.163">0.163</option><option value="0.162">0.162</option><option value="0.161">0.161</option><option value="0.16">0.16</option><option value="0.159">0.159</option><option value="0.158">0.158</option>
        <option value="0.157">0.157</option><option value="0.156">0.156</option><option value="0.155">0.155</option><option value="0.154">0.154</option><option value="0.153">0.153</option><option value="0.152">0.152</option>
        <option value="0.151">0.151</option><option value="0.15">0.15</option><option value="0.149">0.149</option><option value="0.148">0.148</option><option value="0.147">0.147</option><option value="0.146">0.146</option>
        <option value="0.145">0.145</option><option value="0.144">0.144</option><option value="0.143">0.143</option><option value="0.142">0.142</option><option value="0.141">0.141</option><option value="0.14">0.14</option>
        <option value="0.139">0.139</option><option value="0.138">0.138</option><option value="0.137">0.137</option><option value="0.136">0.136</option><option value="0.135">0.135</option><option value="0.134">0.134</option>
        <option value="0.133">0.133</option><option value="0.132">0.132</option><option value="0.131">0.131</option><option value="0.13">0.13</option><option value="0.129">0.129</option><option value="0.128">0.128</option>
        <option value="0.127">0.127</option><option value="0.126">0.126</option><option value="0.125">0.125</option><option value="0.124">0.124</option><option value="0.123">0.123</option><option value="0.122">0.122</option>
        <option value="0.121">0.121</option><option value="0.12">0.12</option><option value="0.119">0.119</option><option value="0.118">0.118</option><option value="0.117">0.117</option><option value="0.116">0.116</option>
        <option value="0.115">0.115</option><option value="0.114">0.114</option><option value="0.113">0.113</option><option value="0.112">0.112</option><option value="0.111">0.111</option><option value="0.11">0.11</option>
        <option value="0.109">0.109</option><option value="0.108">0.108</option><option value="0.107">0.107</option><option value="0.106">0.106</option><option value="0.105">0.105</option><option value="0.104">0.104</option>
        <option value="0.103">0.103</option><option value="0.102">0.102</option><option value="0.101">0.101</option><option value="0.1">0.1</option><option value="0.099">0.099</option><option value="0.098">0.098</option><option value="0.097">0.097</option><option value="0.096">0.096</option><option value="0.095">0.095</option><option value="0.094">0.094</option><option value="0.093">0.093</option><option value="0.092">0.092</option><option value="0.091">0.091</option><option value="0.09">0.09</option><option value="0.089">0.089</option><option value="0.088">0.088</option><option value="0.087">0.087</option><option value="0.086">0.086</option><option value="0.085">0.085</option><option value="0.084">0.084</option><option value="0.083">0.083</option><option value="0.082">0.082</option><option value="0.081">0.081</option><option value="0.08">0.08</option><option value="0.079">0.079</option><option value="0.078">0.078</option><option value="0.077">0.077</option><option value="0.076">0.076</option><option value="0.075">0.075</option><option value="0.074">0.074</option><option value="0.073">0.073</option><option value="0.072">0.072</option><option value="0.071">0.071</option><option value="0.07">0.07</option><option value="0.069">0.069</option><option value="0.068">0.068</option><option value="0.067">0.067</option><option value="0.066">0.066</option><option value="0.065">0.065</option><option value="0.064">0.064</option><option value="0.063">0.063</option><option value="0.062">0.062</option><option value="0.061">0.061</option><option value="0.06">0.06</option><option value="0.059">0.059</option><option value="0.058">0.058</option><option value="0.057">0.057</option><option value="0.056">0.056</option><option value="0.055">0.055</option><option value="0.054">0.054</option><option value="0.053">0.053</option><option value="0.052">0.052</option><option value="0.051">0.051</option><option value="0.05">0.05</option><option value="0.049">0.049</option><option value="0.048">0.048</option><option value="0.047">0.047</option><option value="0.046">0.046</option><option value="0.045">0.045</option><option value="0.044">0.044</option><option value="0.043">0.043</option><option value="0.042">0.042</option><option value="0.041">0.041</option><option value="0.04">0.04</option><option value="0.039">0.039</option><option value="0.038">0.038</option><option value="0.037">0.037</option><option value="0.036">0.036</option><option value="0.035">0.035</option><option value="0.034">0.034</option><option value="0.033">0.033</option><option value="0.032">0.032</option><option value="0.031">0.031</option><option value="0.03">0.03</option><option value="0.029">0.029</option><option value="0.028">0.028</option><option value="0.027">0.027</option><option value="0.026">0.026</option><option value="0.025">0.025</option><option value="0.024">0.024</option><option value="0.023">0.023</option><option value="0.022">0.022</option><option value="0.021">0.021</option><option value="0.02">0.02</option><option value="0.019">0.019</option><option value="0.018">0.018</option><option value="0.017">0.017</option><option value="0.016">0.016</option><option value="0.015">0.015</option><option value="0.014">0.014</option><option value="0.013">0.013</option><option value="0.012">0.012</option><option value="0.011">0.011</option><option value="0.01">0.01</option><option value="0.009">0.009</option><option value="0.008">0.008</option><option value="0.007">0.007</option><option value="0.006">0.006</option><option value="0.005">0.005</option><option value="0.004">0.004</option><option value="0.003">0.003</option><option value="0.002">0.002</option><option value="0.001">0.001</option><option value="0" selected="">0</option></select></td><td><select name="fs_101" id="fs_101" data-pid="1" class="chosen-select" data-placeholder="赔率" style="width:100px;"><option value="80">80</option><option value="80.1">80.1</option><option value="80.2">80.2</option><option value="80.3">80.3</option><option value="80.4">80.4</option><option value="80.5">80.5</option><option value="80.6">80.6</option><option value="80.7">80.7</option><option value="80.8">80.8</option><option value="80.9">80.9</option><option value="81">81</option><option value="81.1">81.1</option><option value="81.2">81.2</option><option value="81.3">81.3</option><option value="81.4">81.4</option><option value="81.5">81.5</option><option value="81.6">81.6</option><option value="81.7">81.7</option><option value="81.8">81.8</option><option value="81.9">81.9</option><option value="82">82</option><option value="82.1">82.1</option><option value="82.2">82.2</option><option value="82.3">82.3</option><option value="82.4">82.4</option><option value="82.5">82.5</option><option value="82.6">82.6</option><option value="82.7">82.7</option><option value="82.8">82.8</option><option value="82.9">82.9</option><option value="83">83</option><option value="83.1">83.1</option><option value="83.2">83.2</option><option value="83.3">83.3</option><option value="83.4">83.4</option><option value="83.5">83.5</option><option value="83.6">83.6</option><option value="83.7">83.7</option><option value="83.8">83.8</option><option value="83.9">83.9</option><option value="84">84</option><option value="84.1">84.1</option><option value="84.2">84.2</option><option value="84.3">84.3</option><option value="84.4">84.4</option><option value="84.5">84.5</option><option value="84.6">84.6</option><option value="84.7">84.7</option><option value="84.8">84.8</option><option value="84.9">84.9</option><option value="85">85</option><option value="85.1">85.1</option><option value="85.2">85.2</option><option value="85.3">85.3</option><option value="85.4">85.4</option><option value="85.5">85.5</option><option value="85.6">85.6</option><option value="85.7">85.7</option><option value="85.8">85.8</option><option value="85.9">85.9</option><option value="86">86</option><option value="86.1">86.1</option><option value="86.2">86.2</option><option value="86.3">86.3</option><option value="86.4">86.4</option><option value="86.5">86.5</option><option value="86.6">86.6</option><option value="86.7">86.7</option><option value="86.8">86.8</option><option value="86.9">86.9</option><option value="87">87</option><option value="87.1">87.1</option><option value="87.2">87.2</option><option value="87.3">87.3</option><option value="87.4">87.4</option><option value="87.5">87.5</option><option value="87.6">87.6</option><option value="87.7">87.7</option><option value="87.8">87.8</option><option value="87.9">87.9</option><option value="88">88</option><option value="88.1">88.1</option><option value="88.2">88.2</option><option value="88.3">88.3</option><option value="88.4">88.4</option><option value="88.5">88.5</option><option value="88.6">88.6</option><option value="88.7">88.7</option><option value="88.8">88.8</option><option value="88.9">88.9</option><option value="89">89</option><option value="89.1">89.1</option><option value="89.2">89.2</option><option value="89.3">89.3</option><option value="89.4">89.4</option><option value="89.5">89.5</option><option value="89.6">89.6</option><option value="89.7">89.7</option><option value="89.8">89.8</option><option value="89.9">89.9</option><option value="90">90</option><option value="90.1">90.1</option><option value="90.2">90.2</option><option value="90.3">90.3</option><option value="90.4">90.4</option><option value="90.5">90.5</option><option value="90.6">90.6</option><option value="90.7">90.7</option><option value="90.8">90.8</option><option value="90.9">90.9</option><option value="91">91</option><option value="91.1">91.1</option><option value="91.2">91.2</option><option value="91.3">91.3</option><option value="91.4">91.4</option><option value="91.5">91.5</option><option value="91.6">91.6</option><option value="91.7">91.7</option><option value="91.8">91.8</option><option value="91.9">91.9</option><option value="92">92</option><option value="92.1">92.1</option><option value="92.2">92.2</option><option value="92.3">92.3</option><option value="92.4">92.4</option><option value="92.5">92.5</option><option value="92.6">92.6</option><option value="92.7">92.7</option><option value="92.8">92.8</option><option value="92.9">92.9</option><option value="93">93</option><option value="93.1">93.1</option><option value="93.2">93.2</option><option value="93.3">93.3</option><option value="93.4">93.4</option><option value="93.5">93.5</option><option value="93.6">93.6</option><option value="93.7">93.7</option><option value="93.8">93.8</option><option value="93.9">93.9</option><option value="94">94</option><option value="94.1">94.1</option><option value="94.2">94.2</option><option value="94.3">94.3</option><option value="94.4">94.4</option><option value="94.5">94.5</option><option value="94.6">94.6</option><option value="94.7">94.7</option><option value="94.8">94.8</option><option value="94.9">94.9</option><option value="95">95</option><option value="95.1">95.1</option><option value="95.2">95.2</option><option value="95.3">95.3</option><option value="95.4">95.4</option><option value="95.5">95.5</option><option value="95.6">95.6</option><option value="95.7">95.7</option><option value="95.8">95.8</option><option value="95.9">95.9</option><option value="96">96</option><option value="96.1">96.1</option><option value="96.2">96.2</option><option value="96.3">96.3</option><option value="96.4">96.4</option><option value="96.5">96.5</option><option value="96.6">96.6</option><option value="96.7">96.7</option><option value="96.8">96.8</option><option value="96.9">96.9</option><option value="97">97</option><option value="97.1">97.1</option><option value="97.2">97.2</option><option value="97.3">97.3</option><option value="97.4">97.4</option><option value="97.5">97.5</option><option value="97.6">97.6</option><option value="97.7">97.7</option><option value="97.8">97.8</option><option value="97.9">97.9</option><option value="98">98</option><option value="98.1">98.1</option><option value="98.2">98.2</option><option value="98.3">98.3</option><option value="98.4">98.4</option><option value="98.5">98.5</option><option value="98.6">98.6</option><option value="98.7">98.7</option><option value="98.8">98.8</option><option value="98.9">98.9</option><option value="99">99</option><option value="99.1">99.1</option><option value="99.2">99.2</option><option value="99.3">99.3</option><option value="99.4">99.4</option><option value="99.5" selected="">99.5</option></select></td></tr><tr><td>口XX口</td><td>1</td><td>99.5</td><td>2000</td><td>200000</td><td><select name="hs_100" id="hs_100" data-pid="1" class="chosen-select" data-placeholder="交易回水" style="width:100px;"><option value="0.195">0.195</option><option value="0.194">0.194</option><option value="0.193">0.193</option><option value="0.192">0.192</option><option value="0.191">0.191</option><option value="0.19">0.19</option><option value="0.189">0.189</option><option value="0.188">0.188</option><option value="0.187">0.187</option><option value="0.186">0.186</option><option value="0.185">0.185</option><option value="0.184">0.184</option><option value="0.183">0.183</option><option value="0.182">0.182</option><option value="0.181">0.181</option><option value="0.18">0.18</option><option value="0.179">0.179</option><option value="0.178">0.178</option><option value="0.177">0.177</option><option value="0.176">0.176</option><option value="0.175">0.175</option><option value="0.174">0.174</option><option value="0.173">0.173</option><option value="0.172">0.172</option><option value="0.171">0.171</option><option value="0.17">0.17</option><option value="0.169">0.169</option><option value="0.168">0.168</option><option value="0.167">0.167</option><option value="0.166">0.166</option><option value="0.165">0.165</option><option value="0.164">0.164</option><option value="0.163">0.163</option><option value="0.162">0.162</option><option value="0.161">0.161</option><option value="0.16">0.16</option><option value="0.159">0.159</option><option value="0.158">0.158</option><option value="0.157">0.157</option><option value="0.156">0.156</option><option value="0.155">0.155</option><option value="0.154">0.154</option><option value="0.153">0.153</option><option value="0.152">0.152</option><option value="0.151">0.151</option><option value="0.15">0.15</option><option value="0.149">0.149</option><option value="0.148">0.148</option><option value="0.147">0.147</option><option value="0.146">0.146</option><option value="0.145">0.145</option><option value="0.144">0.144</option><option value="0.143">0.143</option><option value="0.142">0.142</option><option value="0.141">0.141</option><option value="0.14">0.14</option><option value="0.139">0.139</option><option value="0.138">0.138</option><option value="0.137">0.137</option><option value="0.136">0.136</option><option value="0.135">0.135</option><option value="0.134">0.134</option><option value="0.133">0.133</option><option value="0.132">0.132</option><option value="0.131">0.131</option><option value="0.13">0.13</option><option value="0.129">0.129</option><option value="0.128">0.128</option><option value="0.127">0.127</option><option value="0.126">0.126</option><option value="0.125">0.125</option><option value="0.124">0.124</option><option value="0.123">0.123</option><option value="0.122">0.122</option><option value="0.121">0.121</option><option value="0.12">0.12</option><option value="0.119">0.119</option><option value="0.118">0.118</option><option value="0.117">0.117</option><option value="0.116">0.116</option><option value="0.115">0.115</option><option value="0.114">0.114</option><option value="0.113">0.113</option><option value="0.112">0.112</option><option value="0.111">0.111</option><option value="0.11">0.11</option><option value="0.109">0.109</option><option value="0.108">0.108</option><option value="0.107">0.107</option><option value="0.106">0.106</option><option value="0.105">0.105</option><option value="0.104">0.104</option><option value="0.103">0.103</option><option value="0.102">0.102</option><option value="0.101">0.101</option><option value="0.1">0.1</option><option value="0.099">0.099</option><option value="0.098">0.098</option><option value="0.097">0.097</option><option value="0.096">0.096</option><option value="0.095">0.095</option><option value="0.094">0.094</option><option value="0.093">0.093</option><option value="0.092">0.092</option><option value="0.091">0.091</option><option value="0.09">0.09</option><option value="0.089">0.089</option><option value="0.088">0.088</option><option value="0.087">0.087</option><option value="0.086">0.086</option><option value="0.085">0.085</option><option value="0.084">0.084</option><option value="0.083">0.083</option><option value="0.082">0.082</option><option value="0.081">0.081</option><option value="0.08">0.08</option><option value="0.079">0.079</option><option value="0.078">0.078</option><option value="0.077">0.077</option><option value="0.076">0.076</option><option value="0.075">0.075</option><option value="0.074">0.074</option><option value="0.073">0.073</option><option value="0.072">0.072</option><option value="0.071">0.071</option><option value="0.07">0.07</option><option value="0.069">0.069</option><option value="0.068">0.068</option><option value="0.067">0.067</option><option value="0.066">0.066</option><option value="0.065">0.065</option><option value="0.064">0.064</option><option value="0.063">0.063</option><option value="0.062">0.062</option><option value="0.061">0.061</option><option value="0.06">0.06</option><option value="0.059">0.059</option><option value="0.058">0.058</option><option value="0.057">0.057</option><option value="0.056">0.056</option><option value="0.055">0.055</option><option value="0.054">0.054</option><option value="0.053">0.053</option><option value="0.052">0.052</option><option value="0.051">0.051</option><option value="0.05">0.05</option><option value="0.049">0.049</option><option value="0.048">0.048</option><option value="0.047">0.047</option><option value="0.046">0.046</option><option value="0.045">0.045</option><option value="0.044">0.044</option><option value="0.043">0.043</option><option value="0.042">0.042</option><option value="0.041">0.041</option><option value="0.04">0.04</option><option value="0.039">0.039</option><option value="0.038">0.038</option><option value="0.037">0.037</option><option value="0.036">0.036</option><option value="0.035">0.035</option><option value="0.034">0.034</option><option value="0.033">0.033</option><option value="0.032">0.032</option><option value="0.031">0.031</option><option value="0.03">0.03</option><option value="0.029">0.029</option><option value="0.028">0.028</option><option value="0.027">0.027</option><option value="0.026">0.026</option><option value="0.025">0.025</option><option value="0.024">0.024</option><option value="0.023">0.023</option><option value="0.022">0.022</option><option value="0.021">0.021</option><option value="0.02">0.02</option><option value="0.019">0.019</option><option value="0.018">0.018</option><option value="0.017">0.017</option><option value="0.016">0.016</option><option value="0.015">0.015</option><option value="0.014">0.014</option><option value="0.013">0.013</option><option value="0.012">0.012</option><option value="0.011">0.011</option><option value="0.01">0.01</option><option value="0.009">0.009</option><option value="0.008">0.008</option><option value="0.007">0.007</option><option value="0.006">0.006</option><option value="0.005">0.005</option><option value="0.004">0.004</option><option value="0.003">0.003</option><option value="0.002">0.002</option><option value="0.001">0.001</option><option value="0" selected="">0</option></select></td><td><select name="fs_100" id="fs_100" data-pid="1" class="chosen-select" data-placeholder="赔率" style="width:100px;"><option value="80">80</option><option value="80.1">80.1</option><option value="80.2">80.2</option><option value="80.3">80.3</option><option value="80.4">80.4</option><option value="80.5">80.5</option><option value="80.6">80.6</option><option value="80.7">80.7</option><option value="80.8">80.8</option><option value="80.9">80.9</option><option value="81">81</option><option value="81.1">81.1</option><option value="81.2">81.2</option><option value="81.3">81.3</option><option value="81.4">81.4</option><option value="81.5">81.5</option><option value="81.6">81.6</option><option value="81.7">81.7</option><option value="81.8">81.8</option><option value="81.9">81.9</option><option value="82">82</option><option value="82.1">82.1</option><option value="82.2">82.2</option><option value="82.3">82.3</option><option value="82.4">82.4</option><option value="82.5">82.5</option><option value="82.6">82.6</option><option value="82.7">82.7</option><option value="82.8">82.8</option><option value="82.9">82.9</option><option value="83">83</option><option value="83.1">83.1</option><option value="83.2">83.2</option><option value="83.3">83.3</option><option value="83.4">83.4</option><option value="83.5">83.5</option><option value="83.6">83.6</option><option value="83.7">83.7</option><option value="83.8">83.8</option><option value="83.9">83.9</option><option value="84">84</option><option value="84.1">84.1</option><option value="84.2">84.2</option><option value="84.3">84.3</option><option value="84.4">84.4</option><option value="84.5">84.5</option><option value="84.6">84.6</option><option value="84.7">84.7</option><option value="84.8">84.8</option><option value="84.9">84.9</option><option value="85">85</option><option value="85.1">85.1</option><option value="85.2">85.2</option><option value="85.3">85.3</option><option value="85.4">85.4</option><option value="85.5">85.5</option><option value="85.6">85.6</option><option value="85.7">85.7</option><option value="85.8">85.8</option><option value="85.9">85.9</option><option value="86">86</option><option value="86.1">86.1</option><option value="86.2">86.2</option><option value="86.3">86.3</option><option value="86.4">86.4</option><option value="86.5">86.5</option><option value="86.6">86.6</option><option value="86.7">86.7</option><option value="86.8">86.8</option><option value="86.9">86.9</option><option value="87">87</option><option value="87.1">87.1</option><option value="87.2">87.2</option><option value="87.3">87.3</option><option value="87.4">87.4</option><option value="87.5">87.5</option><option value="87.6">87.6</option><option value="87.7">87.7</option><option value="87.8">87.8</option><option value="87.9">87.9</option><option value="88">88</option><option value="88.1">88.1</option><option value="88.2">88.2</option><option value="88.3">88.3</option><option value="88.4">88.4</option><option value="88.5">88.5</option><option value="88.6">88.6</option><option value="88.7">88.7</option><option value="88.8">88.8</option><option value="88.9">88.9</option><option value="89">89</option><option value="89.1">89.1</option><option value="89.2">89.2</option><option value="89.3">89.3</option><option value="89.4">89.4</option><option value="89.5">89.5</option><option value="89.6">89.6</option><option value="89.7">89.7</option><option value="89.8">89.8</option><option value="89.9">89.9</option><option value="90">90</option><option value="90.1">90.1</option><option value="90.2">90.2</option><option value="90.3">90.3</option><option value="90.4">90.4</option><option value="90.5">90.5</option><option value="90.6">90.6</option><option value="90.7">90.7</option><option value="90.8">90.8</option><option value="90.9">90.9</option><option value="91">91</option><option value="91.1">91.1</option><option value="91.2">91.2</option><option value="91.3">91.3</option><option value="91.4">91.4</option><option value="91.5">91.5</option><option value="91.6">91.6</option><option value="91.7">91.7</option><option value="91.8">91.8</option><option value="91.9">91.9</option><option value="92">92</option><option value="92.1">92.1</option><option value="92.2">92.2</option><option value="92.3">92.3</option><option value="92.4">92.4</option><option value="92.5">92.5</option><option value="92.6">92.6</option><option value="92.7">92.7</option><option value="92.8">92.8</option><option value="92.9">92.9</option><option value="93">93</option><option value="93.1">93.1</option><option value="93.2">93.2</option><option value="93.3">93.3</option><option value="93.4">93.4</option><option value="93.5">93.5</option><option value="93.6">93.6</option><option value="93.7">93.7</option><option value="93.8">93.8</option><option value="93.9">93.9</option><option value="94">94</option><option value="94.1">94.1</option><option value="94.2">94.2</option><option value="94.3">94.3</option><option value="94.4">94.4</option><option value="94.5">94.5</option><option value="94.6">94.6</option><option value="94.7">94.7</option><option value="94.8">94.8</option><option value="94.9">94.9</option><option value="95">95</option><option value="95.1">95.1</option><option value="95.2">95.2</option><option value="95.3">95.3</option><option value="95.4">95.4</option><option value="95.5">95.5</option><option value="95.6">95.6</option><option value="95.7">95.7</option><option value="95.8">95.8</option><option value="95.9">95.9</option><option value="96">96</option><option value="96.1">96.1</option><option value="96.2">96.2</option><option value="96.3">96.3</option><option value="96.4">96.4</option><option value="96.5">96.5</option><option value="96.6">96.6</option><option value="96.7">96.7</option><option value="96.8">96.8</option><option value="96.9">96.9</option><option value="97">97</option><option value="97.1">97.1</option><option value="97.2">97.2</option><option value="97.3">97.3</option><option value="97.4">97.4</option><option value="97.5">97.5</option><option value="97.6">97.6</option><option value="97.7">97.7</option><option value="97.8">97.8</option><option value="97.9">97.9</option><option value="98">98</option><option value="98.1">98.1</option><option value="98.2">98.2</option><option value="98.3">98.3</option><option value="98.4">98.4</option><option value="98.5">98.5</option><option value="98.6">98.6</option><option value="98.7">98.7</option><option value="98.8">98.8</option><option value="98.9">98.9</option><option value="99">99</option><option value="99.1">99.1</option><option value="99.2">99.2</option><option value="99.3">99.3</option><option value="99.4">99.4</option><option value="99.5" selected="">99.5</option></select></td></tr><tr><td>X口X口</td><td>1</td><td>99.5</td><td>2000</td><td>100000</td><td><select name="hs_98" id="hs_98" data-pid="1" class="chosen-select" data-placeholder="交易回水" style="width:100px;"><option value="0.195">0.195</option><option value="0.194">0.194</option><option value="0.193">0.193</option><option value="0.192">0.192</option><option value="0.191">0.191</option><option value="0.19">0.19</option><option value="0.189">0.189</option><option value="0.188">0.188</option><option value="0.187">0.187</option><option value="0.186">0.186</option><option value="0.185">0.185</option><option value="0.184">0.184</option><option value="0.183">0.183</option><option value="0.182">0.182</option><option value="0.181">0.181</option><option value="0.18">0.18</option><option value="0.179">0.179</option><option value="0.178">0.178</option><option value="0.177">0.177</option><option value="0.176">0.176</option><option value="0.175">0.175</option><option value="0.174">0.174</option><option value="0.173">0.173</option><option value="0.172">0.172</option><option value="0.171">0.171</option><option value="0.17">0.17</option><option value="0.169">0.169</option><option value="0.168">0.168</option><option value="0.167">0.167</option><option value="0.166">0.166</option><option value="0.165">0.165</option><option value="0.164">0.164</option><option value="0.163">0.163</option><option value="0.162">0.162</option><option value="0.161">0.161</option><option value="0.16">0.16</option><option value="0.159">0.159</option><option value="0.158">0.158</option><option value="0.157">0.157</option><option value="0.156">0.156</option><option value="0.155">0.155</option><option value="0.154">0.154</option><option value="0.153">0.153</option><option value="0.152">0.152</option><option value="0.151">0.151</option><option value="0.15">0.15</option><option value="0.149">0.149</option><option value="0.148">0.148</option><option value="0.147">0.147</option><option value="0.146">0.146</option><option value="0.145">0.145</option><option value="0.144">0.144</option><option value="0.143">0.143</option><option value="0.142">0.142</option><option value="0.141">0.141</option><option value="0.14">0.14</option><option value="0.139">0.139</option><option value="0.138">0.138</option><option value="0.137">0.137</option><option value="0.136">0.136</option><option value="0.135">0.135</option><option value="0.134">0.134</option><option value="0.133">0.133</option><option value="0.132">0.132</option><option value="0.131">0.131</option><option value="0.13">0.13</option><option value="0.129">0.129</option><option value="0.128">0.128</option><option value="0.127">0.127</option><option value="0.126">0.126</option><option value="0.125">0.125</option><option value="0.124">0.124</option><option value="0.123">0.123</option><option value="0.122">0.122</option><option value="0.121">0.121</option><option value="0.12">0.12</option><option value="0.119">0.119</option><option value="0.118">0.118</option><option value="0.117">0.117</option><option value="0.116">0.116</option><option value="0.115">0.115</option><option value="0.114">0.114</option><option value="0.113">0.113</option><option value="0.112">0.112</option><option value="0.111">0.111</option><option value="0.11">0.11</option><option value="0.109">0.109</option><option value="0.108">0.108</option><option value="0.107">0.107</option><option value="0.106">0.106</option><option value="0.105">0.105</option><option value="0.104">0.104</option><option value="0.103">0.103</option><option value="0.102">0.102</option><option value="0.101">0.101</option><option value="0.1">0.1</option><option value="0.099">0.099</option><option value="0.098">0.098</option><option value="0.097">0.097</option><option value="0.096">0.096</option><option value="0.095">0.095</option><option value="0.094">0.094</option><option value="0.093">0.093</option><option value="0.092">0.092</option><option value="0.091">0.091</option><option value="0.09">0.09</option><option value="0.089">0.089</option><option value="0.088">0.088</option><option value="0.087">0.087</option><option value="0.086">0.086</option><option value="0.085">0.085</option><option value="0.084">0.084</option><option value="0.083">0.083</option><option value="0.082">0.082</option><option value="0.081">0.081</option><option value="0.08">0.08</option><option value="0.079">0.079</option><option value="0.078">0.078</option><option value="0.077">0.077</option><option value="0.076">0.076</option><option value="0.075">0.075</option><option value="0.074">0.074</option><option value="0.073">0.073</option><option value="0.072">0.072</option><option value="0.071">0.071</option><option value="0.07">0.07</option><option value="0.069">0.069</option><option value="0.068">0.068</option><option value="0.067">0.067</option><option value="0.066">0.066</option><option value="0.065">0.065</option><option value="0.064">0.064</option><option value="0.063">0.063</option><option value="0.062">0.062</option><option value="0.061">0.061</option><option value="0.06">0.06</option><option value="0.059">0.059</option><option value="0.058">0.058</option><option value="0.057">0.057</option><option value="0.056">0.056</option><option value="0.055">0.055</option><option value="0.054">0.054</option><option value="0.053">0.053</option><option value="0.052">0.052</option><option value="0.051">0.051</option><option value="0.05">0.05</option><option value="0.049">0.049</option><option value="0.048">0.048</option><option value="0.047">0.047</option><option value="0.046">0.046</option><option value="0.045">0.045</option><option value="0.044">0.044</option><option value="0.043">0.043</option><option value="0.042">0.042</option><option value="0.041">0.041</option><option value="0.04">0.04</option><option value="0.039">0.039</option><option value="0.038">0.038</option><option value="0.037">0.037</option><option value="0.036">0.036</option><option value="0.035">0.035</option><option value="0.034">0.034</option><option value="0.033">0.033</option><option value="0.032">0.032</option><option value="0.031">0.031</option><option value="0.03">0.03</option><option value="0.029">0.029</option><option value="0.028">0.028</option><option value="0.027">0.027</option><option value="0.026">0.026</option><option value="0.025">0.025</option><option value="0.024">0.024</option><option value="0.023">0.023</option><option value="0.022">0.022</option><option value="0.021">0.021</option><option value="0.02">0.02</option><option value="0.019">0.019</option><option value="0.018">0.018</option><option value="0.017">0.017</option><option value="0.016">0.016</option><option value="0.015">0.015</option><option value="0.014">0.014</option><option value="0.013">0.013</option><option value="0.012">0.012</option><option value="0.011">0.011</option><option value="0.01">0.01</option><option value="0.009">0.009</option><option value="0.008">0.008</option><option value="0.007">0.007</option><option value="0.006">0.006</option><option value="0.005">0.005</option><option value="0.004">0.004</option><option value="0.003">0.003</option><option value="0.002">0.002</option><option value="0.001">0.001</option><option value="0" selected="">0</option></select></td><td><select name="fs_98" id="fs_98" data-pid="1" class="chosen-select" data-placeholder="赔率" style="width:100px;"><option value="80">80</option><option value="80.1">80.1</option><option value="80.2">80.2</option><option value="80.3">80.3</option><option value="80.4">80.4</option><option value="80.5">80.5</option><option value="80.6">80.6</option><option value="80.7">80.7</option><option value="80.8">80.8</option><option value="80.9">80.9</option><option value="81">81</option><option value="81.1">81.1</option><option value="81.2">81.2</option><option value="81.3">81.3</option><option value="81.4">81.4</option><option value="81.5">81.5</option><option value="81.6">81.6</option><option value="81.7">81.7</option><option value="81.8">81.8</option><option value="81.9">81.9</option><option value="82">82</option><option value="82.1">82.1</option><option value="82.2">82.2</option><option value="82.3">82.3</option><option value="82.4">82.4</option><option value="82.5">82.5</option><option value="82.6">82.6</option><option value="82.7">82.7</option><option value="82.8">82.8</option><option value="82.9">82.9</option><option value="83">83</option><option value="83.1">83.1</option><option value="83.2">83.2</option><option value="83.3">83.3</option><option value="83.4">83.4</option><option value="83.5">83.5</option><option value="83.6">83.6</option><option value="83.7">83.7</option><option value="83.8">83.8</option><option value="83.9">83.9</option><option value="84">84</option><option value="84.1">84.1</option><option value="84.2">84.2</option><option value="84.3">84.3</option><option value="84.4">84.4</option><option value="84.5">84.5</option><option value="84.6">84.6</option><option value="84.7">84.7</option><option value="84.8">84.8</option><option value="84.9">84.9</option><option value="85">85</option><option value="85.1">85.1</option><option value="85.2">85.2</option><option value="85.3">85.3</option><option value="85.4">85.4</option><option value="85.5">85.5</option><option value="85.6">85.6</option><option value="85.7">85.7</option><option value="85.8">85.8</option><option value="85.9">85.9</option><option value="86">86</option><option value="86.1">86.1</option><option value="86.2">86.2</option><option value="86.3">86.3</option><option value="86.4">86.4</option><option value="86.5">86.5</option><option value="86.6">86.6</option><option value="86.7">86.7</option><option value="86.8">86.8</option><option value="86.9">86.9</option><option value="87">87</option><option value="87.1">87.1</option><option value="87.2">87.2</option><option value="87.3">87.3</option><option value="87.4">87.4</option><option value="87.5">87.5</option><option value="87.6">87.6</option><option value="87.7">87.7</option><option value="87.8">87.8</option><option value="87.9">87.9</option><option value="88">88</option><option value="88.1">88.1</option><option value="88.2">88.2</option><option value="88.3">88.3</option><option value="88.4">88.4</option><option value="88.5">88.5</option><option value="88.6">88.6</option><option value="88.7">88.7</option><option value="88.8">88.8</option><option value="88.9">88.9</option><option value="89">89</option><option value="89.1">89.1</option><option value="89.2">89.2</option><option value="89.3">89.3</option><option value="89.4">89.4</option><option value="89.5">89.5</option><option value="89.6">89.6</option><option value="89.7">89.7</option><option value="89.8">89.8</option><option value="89.9">89.9</option><option value="90">90</option><option value="90.1">90.1</option><option value="90.2">90.2</option><option value="90.3">90.3</option><option value="90.4">90.4</option><option value="90.5">90.5</option><option value="90.6">90.6</option><option value="90.7">90.7</option><option value="90.8">90.8</option><option value="90.9">90.9</option><option value="91">91</option><option value="91.1">91.1</option><option value="91.2">91.2</option><option value="91.3">91.3</option><option value="91.4">91.4</option><option value="91.5">91.5</option><option value="91.6">91.6</option><option value="91.7">91.7</option><option value="91.8">91.8</option><option value="91.9">91.9</option><option value="92">92</option><option value="92.1">92.1</option><option value="92.2">92.2</option><option value="92.3">92.3</option><option value="92.4">92.4</option><option value="92.5">92.5</option><option value="92.6">92.6</option><option value="92.7">92.7</option><option value="92.8">92.8</option><option value="92.9">92.9</option><option value="93">93</option><option value="93.1">93.1</option><option value="93.2">93.2</option><option value="93.3">93.3</option><option value="93.4">93.4</option><option value="93.5">93.5</option><option value="93.6">93.6</option><option value="93.7">93.7</option><option value="93.8">93.8</option><option value="93.9">93.9</option><option value="94">94</option><option value="94.1">94.1</option><option value="94.2">94.2</option><option value="94.3">94.3</option><option value="94.4">94.4</option><option value="94.5">94.5</option><option value="94.6">94.6</option><option value="94.7">94.7</option><option value="94.8">94.8</option><option value="94.9">94.9</option><option value="95">95</option><option value="95.1">95.1</option><option value="95.2">95.2</option><option value="95.3">95.3</option><option value="95.4">95.4</option><option value="95.5">95.5</option><option value="95.6">95.6</option><option value="95.7">95.7</option><option value="95.8">95.8</option><option value="95.9">95.9</option><option value="96">96</option><option value="96.1">96.1</option><option value="96.2">96.2</option><option value="96.3">96.3</option><option value="96.4">96.4</option><option value="96.5">96.5</option><option value="96.6">96.6</option><option value="96.7">96.7</option><option value="96.8">96.8</option><option value="96.9">96.9</option><option value="97">97</option><option value="97.1">97.1</option><option value="97.2">97.2</option><option value="97.3">97.3</option><option value="97.4">97.4</option><option value="97.5">97.5</option><option value="97.6">97.6</option><option value="97.7">97.7</option><option value="97.8">97.8</option><option value="97.9">97.9</option><option value="98">98</option><option value="98.1">98.1</option><option value="98.2">98.2</option><option value="98.3">98.3</option><option value="98.4">98.4</option><option value="98.5">98.5</option><option value="98.6">98.6</option><option value="98.7">98.7</option><option value="98.8">98.8</option><option value="98.9">98.9</option><option value="99">99</option><option value="99.1">99.1</option><option value="99.2">99.2</option><option value="99.3">99.3</option><option value="99.4">99.4</option><option value="99.5" selected="">99.5</option></select></td></tr><tr><td>X口口X</td><td>1</td><td>99.5</td><td>2000</td><td>100000</td><td><select name="hs_99" id="hs_99" data-pid="1" class="chosen-select" data-placeholder="交易回水" style="width:100px;"><option value="0.195">0.195</option><option value="0.194">0.194</option><option value="0.193">0.193</option><option value="0.192">0.192</option><option value="0.191">0.191</option><option value="0.19">0.19</option><option value="0.189">0.189</option><option value="0.188">0.188</option><option value="0.187">0.187</option><option value="0.186">0.186</option><option value="0.185">0.185</option><option value="0.184">0.184</option><option value="0.183">0.183</option><option value="0.182">0.182</option><option value="0.181">0.181</option><option value="0.18">0.18</option><option value="0.179">0.179</option><option value="0.178">0.178</option><option value="0.177">0.177</option><option value="0.176">0.176</option><option value="0.175">0.175</option><option value="0.174">0.174</option><option value="0.173">0.173</option><option value="0.172">0.172</option><option value="0.171">0.171</option><option value="0.17">0.17</option><option value="0.169">0.169</option><option value="0.168">0.168</option><option value="0.167">0.167</option><option value="0.166">0.166</option><option value="0.165">0.165</option><option value="0.164">0.164</option><option value="0.163">0.163</option><option value="0.162">0.162</option><option value="0.161">0.161</option><option value="0.16">0.16</option><option value="0.159">0.159</option><option value="0.158">0.158</option><option value="0.157">0.157</option><option value="0.156">0.156</option><option value="0.155">0.155</option><option value="0.154">0.154</option><option value="0.153">0.153</option><option value="0.152">0.152</option><option value="0.151">0.151</option><option value="0.15">0.15</option><option value="0.149">0.149</option><option value="0.148">0.148</option><option value="0.147">0.147</option><option value="0.146">0.146</option><option value="0.145">0.145</option><option value="0.144">0.144</option><option value="0.143">0.143</option><option value="0.142">0.142</option><option value="0.141">0.141</option><option value="0.14">0.14</option><option value="0.139">0.139</option><option value="0.138">0.138</option><option value="0.137">0.137</option><option value="0.136">0.136</option><option value="0.135">0.135</option><option value="0.134">0.134</option><option value="0.133">0.133</option><option value="0.132">0.132</option><option value="0.131">0.131</option><option value="0.13">0.13</option><option value="0.129">0.129</option><option value="0.128">0.128</option><option value="0.127">0.127</option><option value="0.126">0.126</option><option value="0.125">0.125</option><option value="0.124">0.124</option><option value="0.123">0.123</option><option value="0.122">0.122</option><option value="0.121">0.121</option><option value="0.12">0.12</option><option value="0.119">0.119</option><option value="0.118">0.118</option><option value="0.117">0.117</option><option value="0.116">0.116</option><option value="0.115">0.115</option><option value="0.114">0.114</option><option value="0.113">0.113</option><option value="0.112">0.112</option><option value="0.111">0.111</option><option value="0.11">0.11</option><option value="0.109">0.109</option><option value="0.108">0.108</option><option value="0.107">0.107</option><option value="0.106">0.106</option><option value="0.105">0.105</option><option value="0.104">0.104</option><option value="0.103">0.103</option><option value="0.102">0.102</option><option value="0.101">0.101</option><option value="0.1">0.1</option><option value="0.099">0.099</option><option value="0.098">0.098</option><option value="0.097">0.097</option><option value="0.096">0.096</option><option value="0.095">0.095</option><option value="0.094">0.094</option><option value="0.093">0.093</option><option value="0.092">0.092</option><option value="0.091">0.091</option><option value="0.09">0.09</option><option value="0.089">0.089</option><option value="0.088">0.088</option><option value="0.087">0.087</option><option value="0.086">0.086</option><option value="0.085">0.085</option><option value="0.084">0.084</option><option value="0.083">0.083</option><option value="0.082">0.082</option><option value="0.081">0.081</option><option value="0.08">0.08</option><option value="0.079">0.079</option><option value="0.078">0.078</option><option value="0.077">0.077</option><option value="0.076">0.076</option><option value="0.075">0.075</option><option value="0.074">0.074</option><option value="0.073">0.073</option><option value="0.072">0.072</option><option value="0.071">0.071</option><option value="0.07">0.07</option><option value="0.069">0.069</option><option value="0.068">0.068</option><option value="0.067">0.067</option><option value="0.066">0.066</option><option value="0.065">0.065</option><option value="0.064">0.064</option><option value="0.063">0.063</option><option value="0.062">0.062</option><option value="0.061">0.061</option><option value="0.06">0.06</option><option value="0.059">0.059</option><option value="0.058">0.058</option><option value="0.057">0.057</option><option value="0.056">0.056</option><option value="0.055">0.055</option><option value="0.054">0.054</option><option value="0.053">0.053</option><option value="0.052">0.052</option><option value="0.051">0.051</option><option value="0.05">0.05</option><option value="0.049">0.049</option><option value="0.048">0.048</option><option value="0.047">0.047</option><option value="0.046">0.046</option><option value="0.045">0.045</option><option value="0.044">0.044</option><option value="0.043">0.043</option><option value="0.042">0.042</option><option value="0.041">0.041</option><option value="0.04">0.04</option><option value="0.039">0.039</option><option value="0.038">0.038</option><option value="0.037">0.037</option><option value="0.036">0.036</option><option value="0.035">0.035</option><option value="0.034">0.034</option><option value="0.033">0.033</option><option value="0.032">0.032</option><option value="0.031">0.031</option><option value="0.03">0.03</option><option value="0.029">0.029</option><option value="0.028">0.028</option><option value="0.027">0.027</option><option value="0.026">0.026</option><option value="0.025">0.025</option><option value="0.024">0.024</option><option value="0.023">0.023</option><option value="0.022">0.022</option><option value="0.021">0.021</option><option value="0.02">0.02</option><option value="0.019">0.019</option><option value="0.018">0.018</option><option value="0.017">0.017</option><option value="0.016">0.016</option><option value="0.015">0.015</option><option value="0.014">0.014</option><option value="0.013">0.013</option><option value="0.012">0.012</option><option value="0.011">0.011</option><option value="0.01">0.01</option><option value="0.009">0.009</option><option value="0.008">0.008</option><option value="0.007">0.007</option><option value="0.006">0.006</option><option value="0.005">0.005</option><option value="0.004">0.004</option><option value="0.003">0.003</option><option value="0.002">0.002</option><option value="0.001">0.001</option><option value="0" selected="">0</option></select></td><td><select name="fs_99" id="fs_99" data-pid="1" class="chosen-select" data-placeholder="赔率" style="width:100px;"><option value="80">80</option><option value="80.1">80.1</option><option value="80.2">80.2</option><option value="80.3">80.3</option><option value="80.4">80.4</option><option value="80.5">80.5</option><option value="80.6">80.6</option><option value="80.7">80.7</option><option value="80.8">80.8</option><option value="80.9">80.9</option><option value="81">81</option><option value="81.1">81.1</option><option value="81.2">81.2</option><option value="81.3">81.3</option><option value="81.4">81.4</option><option value="81.5">81.5</option><option value="81.6">81.6</option><option value="81.7">81.7</option><option value="81.8">81.8</option><option value="81.9">81.9</option><option value="82">82</option><option value="82.1">82.1</option><option value="82.2">82.2</option><option value="82.3">82.3</option><option value="82.4">82.4</option><option value="82.5">82.5</option><option value="82.6">82.6</option><option value="82.7">82.7</option><option value="82.8">82.8</option><option value="82.9">82.9</option><option value="83">83</option><option value="83.1">83.1</option><option value="83.2">83.2</option><option value="83.3">83.3</option><option value="83.4">83.4</option><option value="83.5">83.5</option><option value="83.6">83.6</option><option value="83.7">83.7</option><option value="83.8">83.8</option><option value="83.9">83.9</option><option value="84">84</option><option value="84.1">84.1</option><option value="84.2">84.2</option><option value="84.3">84.3</option><option value="84.4">84.4</option><option value="84.5">84.5</option><option value="84.6">84.6</option><option value="84.7">84.7</option><option value="84.8">84.8</option><option value="84.9">84.9</option><option value="85">85</option><option value="85.1">85.1</option><option value="85.2">85.2</option><option value="85.3">85.3</option><option value="85.4">85.4</option><option value="85.5">85.5</option><option value="85.6">85.6</option><option value="85.7">85.7</option><option value="85.8">85.8</option><option value="85.9">85.9</option><option value="86">86</option><option value="86.1">86.1</option><option value="86.2">86.2</option><option value="86.3">86.3</option><option value="86.4">86.4</option><option value="86.5">86.5</option><option value="86.6">86.6</option><option value="86.7">86.7</option><option value="86.8">86.8</option><option value="86.9">86.9</option><option value="87">87</option><option value="87.1">87.1</option><option value="87.2">87.2</option><option value="87.3">87.3</option><option value="87.4">87.4</option><option value="87.5">87.5</option><option value="87.6">87.6</option><option value="87.7">87.7</option><option value="87.8">87.8</option><option value="87.9">87.9</option><option value="88">88</option><option value="88.1">88.1</option><option value="88.2">88.2</option><option value="88.3">88.3</option><option value="88.4">88.4</option><option value="88.5">88.5</option><option value="88.6">88.6</option><option value="88.7">88.7</option><option value="88.8">88.8</option><option value="88.9">88.9</option><option value="89">89</option><option value="89.1">89.1</option><option value="89.2">89.2</option><option value="89.3">89.3</option><option value="89.4">89.4</option><option value="89.5">89.5</option><option value="89.6">89.6</option><option value="89.7">89.7</option><option value="89.8">89.8</option><option value="89.9">89.9</option><option value="90">90</option><option value="90.1">90.1</option><option value="90.2">90.2</option><option value="90.3">90.3</option><option value="90.4">90.4</option><option value="90.5">90.5</option><option value="90.6">90.6</option><option value="90.7">90.7</option><option value="90.8">90.8</option><option value="90.9">90.9</option><option value="91">91</option><option value="91.1">91.1</option><option value="91.2">91.2</option><option value="91.3">91.3</option><option value="91.4">91.4</option><option value="91.5">91.5</option><option value="91.6">91.6</option><option value="91.7">91.7</option><option value="91.8">91.8</option><option value="91.9">91.9</option><option value="92">92</option><option value="92.1">92.1</option><option value="92.2">92.2</option><option value="92.3">92.3</option><option value="92.4">92.4</option><option value="92.5">92.5</option><option value="92.6">92.6</option><option value="92.7">92.7</option><option value="92.8">92.8</option><option value="92.9">92.9</option><option value="93">93</option><option value="93.1">93.1</option><option value="93.2">93.2</option><option value="93.3">93.3</option><option value="93.4">93.4</option><option value="93.5">93.5</option><option value="93.6">93.6</option><option value="93.7">93.7</option><option value="93.8">93.8</option><option value="93.9">93.9</option><option value="94">94</option><option value="94.1">94.1</option><option value="94.2">94.2</option><option value="94.3">94.3</option><option value="94.4">94.4</option><option value="94.5">94.5</option><option value="94.6">94.6</option><option value="94.7">94.7</option><option value="94.8">94.8</option><option value="94.9">94.9</option><option value="95">95</option><option value="95.1">95.1</option><option value="95.2">95.2</option><option value="95.3">95.3</option><option value="95.4">95.4</option><option value="95.5">95.5</option><option value="95.6">95.6</option><option value="95.7">95.7</option><option value="95.8">95.8</option><option value="95.9">95.9</option><option value="96">96</option><option value="96.1">96.1</option><option value="96.2">96.2</option><option value="96.3">96.3</option><option value="96.4">96.4</option><option value="96.5">96.5</option><option value="96.6">96.6</option><option value="96.7">96.7</option><option value="96.8">96.8</option><option value="96.9">96.9</option><option value="97">97</option><option value="97.1">97.1</option><option value="97.2">97.2</option><option value="97.3">97.3</option><option value="97.4">97.4</option><option value="97.5">97.5</option><option value="97.6">97.6</option><option value="97.7">97.7</option><option value="97.8">97.8</option><option value="97.9">97.9</option><option value="98">98</option><option value="98.1">98.1</option><option value="98.2">98.2</option><option value="98.3">98.3</option><option value="98.4">98.4</option><option value="98.5">98.5</option><option value="98.6">98.6</option><option value="98.7">98.7</option><option value="98.8">98.8</option><option value="98.9">98.9</option><option value="99">99</option><option value="99.1">99.1</option><option value="99.2">99.2</option><option value="99.3">99.3</option><option value="99.4">99.4</option><option value="99.5" selected="">99.5</option></select></td></tr><tr><td>XX口口</td><td>1</td><td>99.5</td><td>2000</td><td>100000</td><td><select name="hs_97" id="hs_97" data-pid="1" class="chosen-select" data-placeholder="交易回水" style="width:100px;"><option value="0.195">0.195</option><option value="0.194">0.194</option><option value="0.193">0.193</option><option value="0.192">0.192</option><option value="0.191">0.191</option><option value="0.19">0.19</option><option value="0.189">0.189</option><option value="0.188">0.188</option><option value="0.187">0.187</option><option value="0.186">0.186</option><option value="0.185">0.185</option><option value="0.184">0.184</option><option value="0.183">0.183</option><option value="0.182">0.182</option><option value="0.181">0.181</option><option value="0.18">0.18</option><option value="0.179">0.179</option><option value="0.178">0.178</option><option value="0.177">0.177</option><option value="0.176">0.176</option><option value="0.175">0.175</option><option value="0.174">0.174</option><option value="0.173">0.173</option><option value="0.172">0.172</option><option value="0.171">0.171</option><option value="0.17">0.17</option><option value="0.169">0.169</option><option value="0.168">0.168</option><option value="0.167">0.167</option><option value="0.166">0.166</option><option value="0.165">0.165</option><option value="0.164">0.164</option><option value="0.163">0.163</option><option value="0.162">0.162</option><option value="0.161">0.161</option><option value="0.16">0.16</option><option value="0.159">0.159</option><option value="0.158">0.158</option><option value="0.157">0.157</option><option value="0.156">0.156</option><option value="0.155">0.155</option><option value="0.154">0.154</option><option value="0.153">0.153</option><option value="0.152">0.152</option><option value="0.151">0.151</option><option value="0.15">0.15</option><option value="0.149">0.149</option><option value="0.148">0.148</option><option value="0.147">0.147</option><option value="0.146">0.146</option><option value="0.145">0.145</option><option value="0.144">0.144</option><option value="0.143">0.143</option><option value="0.142">0.142</option><option value="0.141">0.141</option><option value="0.14">0.14</option><option value="0.139">0.139</option><option value="0.138">0.138</option><option value="0.137">0.137</option><option value="0.136">0.136</option><option value="0.135">0.135</option><option value="0.134">0.134</option><option value="0.133">0.133</option><option value="0.132">0.132</option><option value="0.131">0.131</option><option value="0.13">0.13</option><option value="0.129">0.129</option><option value="0.128">0.128</option><option value="0.127">0.127</option><option value="0.126">0.126</option><option value="0.125">0.125</option><option value="0.124">0.124</option><option value="0.123">0.123</option><option value="0.122">0.122</option><option value="0.121">0.121</option><option value="0.12">0.12</option><option value="0.119">0.119</option><option value="0.118">0.118</option><option value="0.117">0.117</option><option value="0.116">0.116</option><option value="0.115">0.115</option><option value="0.114">0.114</option><option value="0.113">0.113</option><option value="0.112">0.112</option><option value="0.111">0.111</option><option value="0.11">0.11</option><option value="0.109">0.109</option><option value="0.108">0.108</option><option value="0.107">0.107</option><option value="0.106">0.106</option><option value="0.105">0.105</option><option value="0.104">0.104</option><option value="0.103">0.103</option><option value="0.102">0.102</option><option value="0.101">0.101</option><option value="0.1">0.1</option><option value="0.099">0.099</option><option value="0.098">0.098</option><option value="0.097">0.097</option><option value="0.096">0.096</option><option value="0.095">0.095</option><option value="0.094">0.094</option><option value="0.093">0.093</option><option value="0.092">0.092</option><option value="0.091">0.091</option><option value="0.09">0.09</option><option value="0.089">0.089</option><option value="0.088">0.088</option><option value="0.087">0.087</option><option value="0.086">0.086</option><option value="0.085">0.085</option><option value="0.084">0.084</option><option value="0.083">0.083</option><option value="0.082">0.082</option><option value="0.081">0.081</option><option value="0.08">0.08</option><option value="0.079">0.079</option><option value="0.078">0.078</option><option value="0.077">0.077</option><option value="0.076">0.076</option><option value="0.075">0.075</option><option value="0.074">0.074</option><option value="0.073">0.073</option><option value="0.072">0.072</option><option value="0.071">0.071</option><option value="0.07">0.07</option><option value="0.069">0.069</option><option value="0.068">0.068</option><option value="0.067">0.067</option><option value="0.066">0.066</option><option value="0.065">0.065</option><option value="0.064">0.064</option><option value="0.063">0.063</option><option value="0.062">0.062</option><option value="0.061">0.061</option><option value="0.06">0.06</option><option value="0.059">0.059</option><option value="0.058">0.058</option><option value="0.057">0.057</option><option value="0.056">0.056</option><option value="0.055">0.055</option><option value="0.054">0.054</option><option value="0.053">0.053</option><option value="0.052">0.052</option><option value="0.051">0.051</option><option value="0.05">0.05</option><option value="0.049">0.049</option><option value="0.048">0.048</option><option value="0.047">0.047</option><option value="0.046">0.046</option><option value="0.045">0.045</option><option value="0.044">0.044</option><option value="0.043">0.043</option><option value="0.042">0.042</option><option value="0.041">0.041</option><option value="0.04">0.04</option><option value="0.039">0.039</option><option value="0.038">0.038</option><option value="0.037">0.037</option><option value="0.036">0.036</option><option value="0.035">0.035</option><option value="0.034">0.034</option><option value="0.033">0.033</option><option value="0.032">0.032</option><option value="0.031">0.031</option><option value="0.03">0.03</option><option value="0.029">0.029</option><option value="0.028">0.028</option><option value="0.027">0.027</option><option value="0.026">0.026</option><option value="0.025">0.025</option><option value="0.024">0.024</option><option value="0.023">0.023</option><option value="0.022">0.022</option><option value="0.021">0.021</option><option value="0.02">0.02</option><option value="0.019">0.019</option><option value="0.018">0.018</option><option value="0.017">0.017</option><option value="0.016">0.016</option><option value="0.015">0.015</option><option value="0.014">0.014</option><option value="0.013">0.013</option><option value="0.012">0.012</option><option value="0.011">0.011</option><option value="0.01">0.01</option><option value="0.009">0.009</option><option value="0.008">0.008</option><option value="0.007">0.007</option><option value="0.006">0.006</option><option value="0.005">0.005</option><option value="0.004">0.004</option><option value="0.003">0.003</option><option value="0.002">0.002</option><option value="0.001">0.001</option><option value="0" selected="">0</option></select></td><td><select name="fs_97" id="fs_97" data-pid="1" class="chosen-select" data-placeholder="赔率" style="width:100px;"><option value="80">80</option><option value="80.1">80.1</option><option value="80.2">80.2</option><option value="80.3">80.3</option><option value="80.4">80.4</option><option value="80.5">80.5</option><option value="80.6">80.6</option><option value="80.7">80.7</option><option value="80.8">80.8</option><option value="80.9">80.9</option><option value="81">81</option><option value="81.1">81.1</option><option value="81.2">81.2</option><option value="81.3">81.3</option><option value="81.4">81.4</option><option value="81.5">81.5</option><option value="81.6">81.6</option><option value="81.7">81.7</option><option value="81.8">81.8</option><option value="81.9">81.9</option><option value="82">82</option><option value="82.1">82.1</option><option value="82.2">82.2</option><option value="82.3">82.3</option><option value="82.4">82.4</option><option value="82.5">82.5</option><option value="82.6">82.6</option><option value="82.7">82.7</option><option value="82.8">82.8</option><option value="82.9">82.9</option><option value="83">83</option><option value="83.1">83.1</option><option value="83.2">83.2</option><option value="83.3">83.3</option><option value="83.4">83.4</option><option value="83.5">83.5</option><option value="83.6">83.6</option><option value="83.7">83.7</option><option value="83.8">83.8</option><option value="83.9">83.9</option><option value="84">84</option><option value="84.1">84.1</option><option value="84.2">84.2</option><option value="84.3">84.3</option><option value="84.4">84.4</option><option value="84.5">84.5</option><option value="84.6">84.6</option><option value="84.7">84.7</option><option value="84.8">84.8</option><option value="84.9">84.9</option><option value="85">85</option><option value="85.1">85.1</option><option value="85.2">85.2</option><option value="85.3">85.3</option><option value="85.4">85.4</option><option value="85.5">85.5</option><option value="85.6">85.6</option><option value="85.7">85.7</option><option value="85.8">85.8</option><option value="85.9">85.9</option><option value="86">86</option><option value="86.1">86.1</option><option value="86.2">86.2</option><option value="86.3">86.3</option><option value="86.4">86.4</option><option value="86.5">86.5</option><option value="86.6">86.6</option><option value="86.7">86.7</option><option value="86.8">86.8</option><option value="86.9">86.9</option><option value="87">87</option><option value="87.1">87.1</option><option value="87.2">87.2</option><option value="87.3">87.3</option><option value="87.4">87.4</option><option value="87.5">87.5</option><option value="87.6">87.6</option><option value="87.7">87.7</option><option value="87.8">87.8</option><option value="87.9">87.9</option><option value="88">88</option><option value="88.1">88.1</option><option value="88.2">88.2</option><option value="88.3">88.3</option><option value="88.4">88.4</option><option value="88.5">88.5</option><option value="88.6">88.6</option><option value="88.7">88.7</option><option value="88.8">88.8</option><option value="88.9">88.9</option><option value="89">89</option><option value="89.1">89.1</option><option value="89.2">89.2</option><option value="89.3">89.3</option><option value="89.4">89.4</option><option value="89.5">89.5</option><option value="89.6">89.6</option><option value="89.7">89.7</option><option value="89.8">89.8</option><option value="89.9">89.9</option><option value="90">90</option><option value="90.1">90.1</option><option value="90.2">90.2</option><option value="90.3">90.3</option><option value="90.4">90.4</option><option value="90.5">90.5</option><option value="90.6">90.6</option><option value="90.7">90.7</option><option value="90.8">90.8</option><option value="90.9">90.9</option><option value="91">91</option><option value="91.1">91.1</option><option value="91.2">91.2</option><option value="91.3">91.3</option><option value="91.4">91.4</option><option value="91.5">91.5</option><option value="91.6">91.6</option><option value="91.7">91.7</option><option value="91.8">91.8</option><option value="91.9">91.9</option><option value="92">92</option><option value="92.1">92.1</option><option value="92.2">92.2</option><option value="92.3">92.3</option><option value="92.4">92.4</option><option value="92.5">92.5</option><option value="92.6">92.6</option><option value="92.7">92.7</option><option value="92.8">92.8</option><option value="92.9">92.9</option><option value="93">93</option><option value="93.1">93.1</option><option value="93.2">93.2</option><option value="93.3">93.3</option><option value="93.4">93.4</option><option value="93.5">93.5</option><option value="93.6">93.6</option><option value="93.7">93.7</option><option value="93.8">93.8</option><option value="93.9">93.9</option><option value="94">94</option><option value="94.1">94.1</option><option value="94.2">94.2</option><option value="94.3">94.3</option><option value="94.4">94.4</option><option value="94.5">94.5</option><option value="94.6">94.6</option><option value="94.7">94.7</option><option value="94.8">94.8</option><option value="94.9">94.9</option><option value="95">95</option><option value="95.1">95.1</option><option value="95.2">95.2</option><option value="95.3">95.3</option><option value="95.4">95.4</option><option value="95.5">95.5</option><option value="95.6">95.6</option><option value="95.7">95.7</option><option value="95.8">95.8</option><option value="95.9">95.9</option><option value="96">96</option><option value="96.1">96.1</option><option value="96.2">96.2</option><option value="96.3">96.3</option><option value="96.4">96.4</option><option value="96.5">96.5</option><option value="96.6">96.6</option><option value="96.7">96.7</option><option value="96.8">96.8</option><option value="96.9">96.9</option><option value="97">97</option><option value="97.1">97.1</option><option value="97.2">97.2</option><option value="97.3">97.3</option><option value="97.4">97.4</option><option value="97.5">97.5</option><option value="97.6">97.6</option><option value="97.7">97.7</option><option value="97.8">97.8</option><option value="97.9">97.9</option><option value="98">98</option><option value="98.1">98.1</option><option value="98.2">98.2</option><option value="98.3">98.3</option><option value="98.4">98.4</option><option value="98.5">98.5</option><option value="98.6">98.6</option><option value="98.7">98.7</option><option value="98.8">98.8</option><option value="98.9">98.9</option><option value="99">99</option><option value="99.1">99.1</option><option value="99.2">99.2</option><option value="99.3">99.3</option><option value="99.4">99.4</option><option value="99.5" selected="">99.5</option></select></td></tr><tr class="xiazhukuang2"><th class="mred">三定位</th><th> </th><th> </th><th> </th><th> </th><th><select name="hs_4" id="hs_4" style="display:none"><option value="0">0</option></select></th><th> </th></tr><tr><td>口口口X</td><td>0.1</td><td>990</td><td>100</td><td>5000</td><td><select name="hs_106" id="hs_106" data-pid="4" class="chosen-select" data-placeholder="交易回水" style="width:100px;"><option value="0.24">0.24</option><option value="0.239">0.239</option><option value="0.238">0.238</option><option value="0.237">0.237</option><option value="0.236">0.236</option><option value="0.235">0.235</option><option value="0.234">0.234</option><option value="0.233">0.233</option><option value="0.232">0.232</option><option value="0.231">0.231</option><option value="0.23">0.23</option><option value="0.229">0.229</option><option value="0.228">0.228</option><option value="0.227">0.227</option><option value="0.226">0.226</option><option value="0.225">0.225</option><option value="0.224">0.224</option><option value="0.223">0.223</option><option value="0.222">0.222</option><option value="0.221">0.221</option><option value="0.22">0.22</option><option value="0.219">0.219</option><option value="0.218">0.218</option><option value="0.217">0.217</option><option value="0.216">0.216</option><option value="0.215">0.215</option><option value="0.214">0.214</option><option value="0.213">0.213</option><option value="0.212">0.212</option><option value="0.211">0.211</option><option value="0.21">0.21</option><option value="0.209">0.209</option><option value="0.208">0.208</option><option value="0.207">0.207</option><option value="0.206">0.206</option><option value="0.205">0.205</option><option value="0.204">0.204</option><option value="0.203">0.203</option><option value="0.202">0.202</option><option value="0.201">0.201</option><option value="0.2">0.2</option><option value="0.199">0.199</option><option value="0.198">0.198</option><option value="0.197">0.197</option><option value="0.196">0.196</option><option value="0.195">0.195</option><option value="0.194">0.194</option><option value="0.193">0.193</option><option value="0.192">0.192</option><option value="0.191">0.191</option><option value="0.19">0.19</option><option value="0.189">0.189</option><option value="0.188">0.188</option><option value="0.187">0.187</option><option value="0.186">0.186</option><option value="0.185">0.185</option><option value="0.184">0.184</option><option value="0.183">0.183</option><option value="0.182">0.182</option><option value="0.181">0.181</option><option value="0.18">0.18</option><option value="0.179">0.179</option><option value="0.178">0.178</option><option value="0.177">0.177</option><option value="0.176">0.176</option><option value="0.175">0.175</option><option value="0.174">0.174</option><option value="0.173">0.173</option><option value="0.172">0.172</option><option value="0.171">0.171</option><option value="0.17">0.17</option><option value="0.169">0.169</option><option value="0.168">0.168</option><option value="0.167">0.167</option><option value="0.166">0.166</option><option value="0.165">0.165</option><option value="0.164">0.164</option><option value="0.163">0.163</option><option value="0.162">0.162</option><option value="0.161">0.161</option><option value="0.16">0.16</option><option value="0.159">0.159</option><option value="0.158">0.158</option><option value="0.157">0.157</option><option value="0.156">0.156</option><option value="0.155">0.155</option><option value="0.154">0.154</option><option value="0.153">0.153</option><option value="0.152">0.152</option><option value="0.151">0.151</option><option value="0.15">0.15</option><option value="0.149">0.149</option><option value="0.148">0.148</option><option value="0.147">0.147</option><option value="0.146">0.146</option><option value="0.145">0.145</option><option value="0.144">0.144</option><option value="0.143">0.143</option><option value="0.142">0.142</option><option value="0.141">0.141</option><option value="0.14">0.14</option><option value="0.139">0.139</option><option value="0.138">0.138</option><option value="0.137">0.137</option><option value="0.136">0.136</option><option value="0.135">0.135</option><option value="0.134">0.134</option><option value="0.133">0.133</option><option value="0.132">0.132</option><option value="0.131">0.131</option><option value="0.13">0.13</option><option value="0.129">0.129</option><option value="0.128">0.128</option><option value="0.127">0.127</option><option value="0.126">0.126</option><option value="0.125">0.125</option><option value="0.124">0.124</option><option value="0.123">0.123</option><option value="0.122">0.122</option><option value="0.121">0.121</option><option value="0.12">0.12</option><option value="0.119">0.119</option><option value="0.118">0.118</option><option value="0.117">0.117</option><option value="0.116">0.116</option><option value="0.115">0.115</option><option value="0.114">0.114</option><option value="0.113">0.113</option><option value="0.112">0.112</option><option value="0.111">0.111</option><option value="0.11">0.11</option><option value="0.109">0.109</option><option value="0.108">0.108</option><option value="0.107">0.107</option><option value="0.106">0.106</option><option value="0.105">0.105</option><option value="0.104">0.104</option><option value="0.103">0.103</option><option value="0.102">0.102</option><option value="0.101">0.101</option><option value="0.1">0.1</option><option value="0.099">0.099</option><option value="0.098">0.098</option><option value="0.097">0.097</option><option value="0.096">0.096</option><option value="0.095">0.095</option><option value="0.094">0.094</option><option value="0.093">0.093</option><option value="0.092">0.092</option><option value="0.091">0.091</option><option value="0.09">0.09</option><option value="0.089">0.089</option><option value="0.088">0.088</option><option value="0.087">0.087</option><option value="0.086">0.086</option><option value="0.085">0.085</option><option value="0.084">0.084</option><option value="0.083">0.083</option><option value="0.082">0.082</option><option value="0.081">0.081</option><option value="0.08">0.08</option><option value="0.079">0.079</option><option value="0.078">0.078</option><option value="0.077">0.077</option><option value="0.076">0.076</option><option value="0.075">0.075</option><option value="0.074">0.074</option><option value="0.073">0.073</option><option value="0.072">0.072</option><option value="0.071">0.071</option><option value="0.07">0.07</option><option value="0.069">0.069</option><option value="0.068">0.068</option><option value="0.067">0.067</option><option value="0.066">0.066</option><option value="0.065">0.065</option><option value="0.064">0.064</option><option value="0.063">0.063</option><option value="0.062">0.062</option><option value="0.061">0.061</option><option value="0.06">0.06</option><option value="0.059">0.059</option><option value="0.058">0.058</option><option value="0.057">0.057</option><option value="0.056">0.056</option><option value="0.055">0.055</option><option value="0.054">0.054</option><option value="0.053">0.053</option><option value="0.052">0.052</option><option value="0.051">0.051</option><option value="0.05">0.05</option><option value="0.049">0.049</option><option value="0.048">0.048</option><option value="0.047">0.047</option><option value="0.046">0.046</option><option value="0.045">0.045</option><option value="0.044">0.044</option><option value="0.043">0.043</option><option value="0.042">0.042</option><option value="0.041">0.041</option><option value="0.04">0.04</option><option value="0.039">0.039</option><option value="0.038">0.038</option><option value="0.037">0.037</option><option value="0.036">0.036</option><option value="0.035">0.035</option><option value="0.034">0.034</option><option value="0.033">0.033</option><option value="0.032">0.032</option><option value="0.031">0.031</option><option value="0.03">0.03</option><option value="0.029">0.029</option><option value="0.028">0.028</option><option value="0.027">0.027</option><option value="0.026">0.026</option><option value="0.025">0.025</option><option value="0.024">0.024</option><option value="0.023">0.023</option><option value="0.022">0.022</option><option value="0.021">0.021</option><option value="0.02">0.02</option><option value="0.019">0.019</option><option value="0.018">0.018</option><option value="0.017">0.017</option><option value="0.016">0.016</option><option value="0.015">0.015</option><option value="0.014">0.014</option><option value="0.013">0.013</option><option value="0.012">0.012</option><option value="0.011">0.011</option><option value="0.01">0.01</option><option value="0.009">0.009</option><option value="0.008">0.008</option><option value="0.007">0.007</option><option value="0.006">0.006</option><option value="0.005">0.005</option><option value="0.004">0.004</option><option value="0.003">0.003</option><option value="0.002">0.002</option><option value="0.001">0.001</option><option value="0" selected="">0</option></select></td><td><select name="fs_106" id="fs_106" data-pid="4" class="chosen-select" data-placeholder="赔率" style="width:100px;"><option value="750">750</option><option value="751">751</option><option value="752">752</option><option value="753">753</option><option value="754">754</option><option value="755">755</option><option value="756">756</option><option value="757">757</option><option value="758">758</option><option value="759">759</option><option value="760">760</option><option value="761">761</option><option value="762">762</option><option value="763">763</option><option value="764">764</option><option value="765">765</option><option value="766">766</option><option value="767">767</option><option value="768">768</option><option value="769">769</option><option value="770">770</option><option value="771">771</option><option value="772">772</option><option value="773">773</option><option value="774">774</option><option value="775">775</option><option value="776">776</option><option value="777">777</option><option value="778">778</option><option value="779">779</option><option value="780">780</option><option value="781">781</option><option value="782">782</option><option value="783">783</option><option value="784">784</option><option value="785">785</option><option value="786">786</option><option value="787">787</option><option value="788">788</option><option value="789">789</option><option value="790">790</option><option value="791">791</option><option value="792">792</option><option value="793">793</option><option value="794">794</option><option value="795">795</option><option value="796">796</option><option value="797">797</option><option value="798">798</option><option value="799">799</option><option value="800">800</option><option value="801">801</option><option value="802">802</option><option value="803">803</option><option value="804">804</option><option value="805">805</option><option value="806">806</option><option value="807">807</option><option value="808">808</option><option value="809">809</option><option value="810">810</option><option value="811">811</option><option value="812">812</option><option value="813">813</option><option value="814">814</option><option value="815">815</option><option value="816">816</option><option value="817">817</option><option value="818">818</option><option value="819">819</option><option value="820">820</option><option value="821">821</option><option value="822">822</option><option value="823">823</option><option value="824">824</option><option value="825">825</option><option value="826">826</option><option value="827">827</option><option value="828">828</option><option value="829">829</option><option value="830">830</option><option value="831">831</option><option value="832">832</option><option value="833">833</option><option value="834">834</option><option value="835">835</option><option value="836">836</option><option value="837">837</option><option value="838">838</option><option value="839">839</option><option value="840">840</option><option value="841">841</option><option value="842">842</option><option value="843">843</option><option value="844">844</option><option value="845">845</option><option value="846">846</option><option value="847">847</option><option value="848">848</option><option value="849">849</option><option value="850">850</option><option value="851">851</option><option value="852">852</option><option value="853">853</option><option value="854">854</option><option value="855">855</option><option value="856">856</option><option value="857">857</option><option value="858">858</option><option value="859">859</option><option value="860">860</option><option value="861">861</option><option value="862">862</option><option value="863">863</option><option value="864">864</option><option value="865">865</option><option value="866">866</option><option value="867">867</option><option value="868">868</option><option value="869">869</option><option value="870">870</option><option value="871">871</option><option value="872">872</option><option value="873">873</option><option value="874">874</option><option value="875">875</option><option value="876">876</option><option value="877">877</option><option value="878">878</option><option value="879">879</option><option value="880">880</option><option value="881">881</option><option value="882">882</option><option value="883">883</option><option value="884">884</option><option value="885">885</option><option value="886">886</option><option value="887">887</option><option value="888">888</option><option value="889">889</option><option value="890">890</option><option value="891">891</option><option value="892">892</option><option value="893">893</option><option value="894">894</option><option value="895">895</option><option value="896">896</option><option value="897">897</option><option value="898">898</option><option value="899">899</option><option value="900">900</option><option value="901">901</option><option value="902">902</option><option value="903">903</option><option value="904">904</option><option value="905">905</option><option value="906">906</option><option value="907">907</option><option value="908">908</option><option value="909">909</option><option value="910">910</option><option value="911">911</option><option value="912">912</option><option value="913">913</option><option value="914">914</option><option value="915">915</option><option value="916">916</option><option value="917">917</option><option value="918">918</option><option value="919">919</option><option value="920">920</option><option value="921">921</option><option value="922">922</option><option value="923">923</option><option value="924">924</option><option value="925">925</option><option value="926">926</option><option value="927">927</option><option value="928">928</option><option value="929">929</option><option value="930">930</option><option value="931">931</option><option value="932">932</option><option value="933">933</option><option value="934">934</option><option value="935">935</option><option value="936">936</option><option value="937">937</option><option value="938">938</option><option value="939">939</option><option value="940">940</option><option value="941">941</option><option value="942">942</option><option value="943">943</option><option value="944">944</option><option value="945">945</option><option value="946">946</option><option value="947">947</option><option value="948">948</option><option value="949">949</option><option value="950">950</option><option value="951">951</option><option value="952">952</option><option value="953">953</option><option value="954">954</option><option value="955">955</option><option value="956">956</option><option value="957">957</option><option value="958">958</option><option value="959">959</option><option value="960">960</option><option value="961">961</option><option value="962">962</option><option value="963">963</option><option value="964">964</option><option value="965">965</option><option value="966">966</option><option value="967">967</option><option value="968">968</option><option value="969">969</option><option value="970">970</option><option value="971">971</option><option value="972">972</option><option value="973">973</option><option value="974">974</option><option value="975">975</option><option value="976">976</option><option value="977">977</option><option value="978">978</option><option value="979">979</option><option value="980">980</option><option value="981">981</option><option value="982">982</option><option value="983">983</option><option value="984">984</option><option value="985">985</option><option value="986">986</option><option value="987">987</option><option value="988">988</option><option value="989">989</option><option value="990" selected="">990</option></select></td></tr><tr><td>口口X口</td><td>0.1</td><td>990</td><td>100</td><td>5000</td><td><select name="hs_105" id="hs_105" data-pid="4" class="chosen-select" data-placeholder="交易回水" style="width:100px;"><option value="0.24">0.24</option><option value="0.239">0.239</option><option value="0.238">0.238</option><option value="0.237">0.237</option><option value="0.236">0.236</option><option value="0.235">0.235</option><option value="0.234">0.234</option><option value="0.233">0.233</option><option value="0.232">0.232</option><option value="0.231">0.231</option><option value="0.23">0.23</option><option value="0.229">0.229</option><option value="0.228">0.228</option><option value="0.227">0.227</option><option value="0.226">0.226</option><option value="0.225">0.225</option><option value="0.224">0.224</option><option value="0.223">0.223</option><option value="0.222">0.222</option><option value="0.221">0.221</option><option value="0.22">0.22</option><option value="0.219">0.219</option><option value="0.218">0.218</option><option value="0.217">0.217</option><option value="0.216">0.216</option><option value="0.215">0.215</option><option value="0.214">0.214</option><option value="0.213">0.213</option><option value="0.212">0.212</option><option value="0.211">0.211</option><option value="0.21">0.21</option><option value="0.209">0.209</option><option value="0.208">0.208</option><option value="0.207">0.207</option><option value="0.206">0.206</option><option value="0.205">0.205</option><option value="0.204">0.204</option><option value="0.203">0.203</option><option value="0.202">0.202</option><option value="0.201">0.201</option><option value="0.2">0.2</option><option value="0.199">0.199</option><option value="0.198">0.198</option><option value="0.197">0.197</option><option value="0.196">0.196</option><option value="0.195">0.195</option><option value="0.194">0.194</option><option value="0.193">0.193</option><option value="0.192">0.192</option><option value="0.191">0.191</option><option value="0.19">0.19</option><option value="0.189">0.189</option><option value="0.188">0.188</option><option value="0.187">0.187</option><option value="0.186">0.186</option><option value="0.185">0.185</option><option value="0.184">0.184</option><option value="0.183">0.183</option><option value="0.182">0.182</option><option value="0.181">0.181</option><option value="0.18">0.18</option><option value="0.179">0.179</option><option value="0.178">0.178</option><option value="0.177">0.177</option><option value="0.176">0.176</option><option value="0.175">0.175</option><option value="0.174">0.174</option><option value="0.173">0.173</option><option value="0.172">0.172</option><option value="0.171">0.171</option><option value="0.17">0.17</option><option value="0.169">0.169</option><option value="0.168">0.168</option><option value="0.167">0.167</option><option value="0.166">0.166</option><option value="0.165">0.165</option><option value="0.164">0.164</option><option value="0.163">0.163</option><option value="0.162">0.162</option><option value="0.161">0.161</option><option value="0.16">0.16</option><option value="0.159">0.159</option><option value="0.158">0.158</option><option value="0.157">0.157</option><option value="0.156">0.156</option><option value="0.155">0.155</option><option value="0.154">0.154</option><option value="0.153">0.153</option><option value="0.152">0.152</option><option value="0.151">0.151</option><option value="0.15">0.15</option><option value="0.149">0.149</option><option value="0.148">0.148</option><option value="0.147">0.147</option><option value="0.146">0.146</option><option value="0.145">0.145</option><option value="0.144">0.144</option><option value="0.143">0.143</option><option value="0.142">0.142</option><option value="0.141">0.141</option><option value="0.14">0.14</option><option value="0.139">0.139</option><option value="0.138">0.138</option><option value="0.137">0.137</option><option value="0.136">0.136</option><option value="0.135">0.135</option><option value="0.134">0.134</option><option value="0.133">0.133</option><option value="0.132">0.132</option><option value="0.131">0.131</option><option value="0.13">0.13</option><option value="0.129">0.129</option><option value="0.128">0.128</option><option value="0.127">0.127</option><option value="0.126">0.126</option><option value="0.125">0.125</option><option value="0.124">0.124</option><option value="0.123">0.123</option><option value="0.122">0.122</option><option value="0.121">0.121</option><option value="0.12">0.12</option><option value="0.119">0.119</option><option value="0.118">0.118</option><option value="0.117">0.117</option><option value="0.116">0.116</option><option value="0.115">0.115</option><option value="0.114">0.114</option><option value="0.113">0.113</option><option value="0.112">0.112</option><option value="0.111">0.111</option><option value="0.11">0.11</option><option value="0.109">0.109</option><option value="0.108">0.108</option><option value="0.107">0.107</option><option value="0.106">0.106</option><option value="0.105">0.105</option><option value="0.104">0.104</option><option value="0.103">0.103</option><option value="0.102">0.102</option><option value="0.101">0.101</option><option value="0.1">0.1</option><option value="0.099">0.099</option><option value="0.098">0.098</option><option value="0.097">0.097</option><option value="0.096">0.096</option><option value="0.095">0.095</option><option value="0.094">0.094</option><option value="0.093">0.093</option><option value="0.092">0.092</option><option value="0.091">0.091</option><option value="0.09">0.09</option><option value="0.089">0.089</option><option value="0.088">0.088</option><option value="0.087">0.087</option><option value="0.086">0.086</option><option value="0.085">0.085</option><option value="0.084">0.084</option><option value="0.083">0.083</option><option value="0.082">0.082</option><option value="0.081">0.081</option><option value="0.08">0.08</option><option value="0.079">0.079</option><option value="0.078">0.078</option><option value="0.077">0.077</option><option value="0.076">0.076</option><option value="0.075">0.075</option><option value="0.074">0.074</option><option value="0.073">0.073</option><option value="0.072">0.072</option><option value="0.071">0.071</option><option value="0.07">0.07</option><option value="0.069">0.069</option><option value="0.068">0.068</option><option value="0.067">0.067</option><option value="0.066">0.066</option><option value="0.065">0.065</option><option value="0.064">0.064</option><option value="0.063">0.063</option><option value="0.062">0.062</option><option value="0.061">0.061</option><option value="0.06">0.06</option><option value="0.059">0.059</option><option value="0.058">0.058</option><option value="0.057">0.057</option><option value="0.056">0.056</option><option value="0.055">0.055</option><option value="0.054">0.054</option><option value="0.053">0.053</option><option value="0.052">0.052</option><option value="0.051">0.051</option><option value="0.05">0.05</option><option value="0.049">0.049</option><option value="0.048">0.048</option><option value="0.047">0.047</option><option value="0.046">0.046</option><option value="0.045">0.045</option><option value="0.044">0.044</option><option value="0.043">0.043</option><option value="0.042">0.042</option><option value="0.041">0.041</option><option value="0.04">0.04</option><option value="0.039">0.039</option><option value="0.038">0.038</option><option value="0.037">0.037</option><option value="0.036">0.036</option><option value="0.035">0.035</option><option value="0.034">0.034</option><option value="0.033">0.033</option><option value="0.032">0.032</option><option value="0.031">0.031</option><option value="0.03">0.03</option><option value="0.029">0.029</option><option value="0.028">0.028</option><option value="0.027">0.027</option><option value="0.026">0.026</option><option value="0.025">0.025</option><option value="0.024">0.024</option><option value="0.023">0.023</option><option value="0.022">0.022</option><option value="0.021">0.021</option><option value="0.02">0.02</option><option value="0.019">0.019</option><option value="0.018">0.018</option><option value="0.017">0.017</option><option value="0.016">0.016</option><option value="0.015">0.015</option><option value="0.014">0.014</option><option value="0.013">0.013</option><option value="0.012">0.012</option><option value="0.011">0.011</option><option value="0.01">0.01</option><option value="0.009">0.009</option><option value="0.008">0.008</option><option value="0.007">0.007</option><option value="0.006">0.006</option><option value="0.005">0.005</option><option value="0.004">0.004</option><option value="0.003">0.003</option><option value="0.002">0.002</option><option value="0.001">0.001</option><option value="0" selected="">0</option></select></td><td><select name="fs_105" id="fs_105" data-pid="4" class="chosen-select" data-placeholder="赔率" style="width:100px;"><option value="750">750</option><option value="751">751</option><option value="752">752</option><option value="753">753</option><option value="754">754</option><option value="755">755</option><option value="756">756</option><option value="757">757</option><option value="758">758</option><option value="759">759</option><option value="760">760</option><option value="761">761</option><option value="762">762</option><option value="763">763</option><option value="764">764</option><option value="765">765</option><option value="766">766</option><option value="767">767</option><option value="768">768</option><option value="769">769</option><option value="770">770</option><option value="771">771</option><option value="772">772</option><option value="773">773</option><option value="774">774</option><option value="775">775</option><option value="776">776</option><option value="777">777</option><option value="778">778</option><option value="779">779</option><option value="780">780</option><option value="781">781</option><option value="782">782</option><option value="783">783</option><option value="784">784</option><option value="785">785</option><option value="786">786</option><option value="787">787</option><option value="788">788</option><option value="789">789</option><option value="790">790</option><option value="791">791</option><option value="792">792</option><option value="793">793</option><option value="794">794</option><option value="795">795</option><option value="796">796</option><option value="797">797</option><option value="798">798</option><option value="799">799</option><option value="800">800</option><option value="801">801</option><option value="802">802</option><option value="803">803</option><option value="804">804</option><option value="805">805</option><option value="806">806</option><option value="807">807</option><option value="808">808</option><option value="809">809</option><option value="810">810</option><option value="811">811</option><option value="812">812</option><option value="813">813</option><option value="814">814</option><option value="815">815</option><option value="816">816</option><option value="817">817</option><option value="818">818</option><option value="819">819</option><option value="820">820</option><option value="821">821</option><option value="822">822</option><option value="823">823</option><option value="824">824</option><option value="825">825</option><option value="826">826</option><option value="827">827</option><option value="828">828</option><option value="829">829</option><option value="830">830</option><option value="831">831</option><option value="832">832</option><option value="833">833</option><option value="834">834</option><option value="835">835</option><option value="836">836</option><option value="837">837</option><option value="838">838</option><option value="839">839</option><option value="840">840</option><option value="841">841</option><option value="842">842</option><option value="843">843</option><option value="844">844</option><option value="845">845</option><option value="846">846</option><option value="847">847</option><option value="848">848</option><option value="849">849</option><option value="850">850</option><option value="851">851</option><option value="852">852</option><option value="853">853</option><option value="854">854</option><option value="855">855</option><option value="856">856</option><option value="857">857</option><option value="858">858</option><option value="859">859</option><option value="860">860</option><option value="861">861</option><option value="862">862</option><option value="863">863</option><option value="864">864</option><option value="865">865</option><option value="866">866</option><option value="867">867</option><option value="868">868</option><option value="869">869</option><option value="870">870</option><option value="871">871</option><option value="872">872</option><option value="873">873</option><option value="874">874</option><option value="875">875</option><option value="876">876</option><option value="877">877</option><option value="878">878</option><option value="879">879</option><option value="880">880</option><option value="881">881</option><option value="882">882</option><option value="883">883</option><option value="884">884</option><option value="885">885</option><option value="886">886</option><option value="887">887</option><option value="888">888</option><option value="889">889</option><option value="890">890</option><option value="891">891</option><option value="892">892</option><option value="893">893</option><option value="894">894</option><option value="895">895</option><option value="896">896</option><option value="897">897</option><option value="898">898</option><option value="899">899</option><option value="900">900</option><option value="901">901</option><option value="902">902</option><option value="903">903</option><option value="904">904</option><option value="905">905</option><option value="906">906</option><option value="907">907</option><option value="908">908</option><option value="909">909</option><option value="910">910</option><option value="911">911</option><option value="912">912</option><option value="913">913</option><option value="914">914</option><option value="915">915</option><option value="916">916</option><option value="917">917</option><option value="918">918</option><option value="919">919</option><option value="920">920</option><option value="921">921</option><option value="922">922</option><option value="923">923</option><option value="924">924</option><option value="925">925</option><option value="926">926</option><option value="927">927</option><option value="928">928</option><option value="929">929</option><option value="930">930</option><option value="931">931</option><option value="932">932</option><option value="933">933</option><option value="934">934</option><option value="935">935</option><option value="936">936</option><option value="937">937</option><option value="938">938</option><option value="939">939</option><option value="940">940</option><option value="941">941</option><option value="942">942</option><option value="943">943</option><option value="944">944</option><option value="945">945</option><option value="946">946</option><option value="947">947</option><option value="948">948</option><option value="949">949</option><option value="950">950</option><option value="951">951</option><option value="952">952</option><option value="953">953</option><option value="954">954</option><option value="955">955</option><option value="956">956</option><option value="957">957</option><option value="958">958</option><option value="959">959</option><option value="960">960</option><option value="961">961</option><option value="962">962</option><option value="963">963</option><option value="964">964</option><option value="965">965</option><option value="966">966</option><option value="967">967</option><option value="968">968</option><option value="969">969</option><option value="970">970</option><option value="971">971</option><option value="972">972</option><option value="973">973</option><option value="974">974</option><option value="975">975</option><option value="976">976</option><option value="977">977</option><option value="978">978</option><option value="979">979</option><option value="980">980</option><option value="981">981</option><option value="982">982</option><option value="983">983</option><option value="984">984</option><option value="985">985</option><option value="986">986</option><option value="987">987</option><option value="988">988</option><option value="989">989</option><option value="990" selected="">990</option></select></td></tr><tr><td>口X口口</td><td>0.1</td><td>990</td><td>100</td><td>5000</td><td><select name="hs_104" id="hs_104" data-pid="4" class="chosen-select" data-placeholder="交易回水" style="width:100px;"><option value="0.24">0.24</option><option value="0.239">0.239</option><option value="0.238">0.238</option><option value="0.237">0.237</option><option value="0.236">0.236</option><option value="0.235">0.235</option><option value="0.234">0.234</option><option value="0.233">0.233</option><option value="0.232">0.232</option><option value="0.231">0.231</option><option value="0.23">0.23</option><option value="0.229">0.229</option><option value="0.228">0.228</option><option value="0.227">0.227</option><option value="0.226">0.226</option><option value="0.225">0.225</option><option value="0.224">0.224</option><option value="0.223">0.223</option><option value="0.222">0.222</option><option value="0.221">0.221</option><option value="0.22">0.22</option><option value="0.219">0.219</option><option value="0.218">0.218</option><option value="0.217">0.217</option><option value="0.216">0.216</option><option value="0.215">0.215</option><option value="0.214">0.214</option><option value="0.213">0.213</option><option value="0.212">0.212</option><option value="0.211">0.211</option><option value="0.21">0.21</option><option value="0.209">0.209</option><option value="0.208">0.208</option><option value="0.207">0.207</option><option value="0.206">0.206</option><option value="0.205">0.205</option><option value="0.204">0.204</option><option value="0.203">0.203</option><option value="0.202">0.202</option><option value="0.201">0.201</option><option value="0.2">0.2</option><option value="0.199">0.199</option><option value="0.198">0.198</option><option value="0.197">0.197</option><option value="0.196">0.196</option><option value="0.195">0.195</option><option value="0.194">0.194</option><option value="0.193">0.193</option><option value="0.192">0.192</option><option value="0.191">0.191</option><option value="0.19">0.19</option><option value="0.189">0.189</option><option value="0.188">0.188</option><option value="0.187">0.187</option><option value="0.186">0.186</option><option value="0.185">0.185</option><option value="0.184">0.184</option><option value="0.183">0.183</option><option value="0.182">0.182</option><option value="0.181">0.181</option><option value="0.18">0.18</option><option value="0.179">0.179</option><option value="0.178">0.178</option><option value="0.177">0.177</option><option value="0.176">0.176</option><option value="0.175">0.175</option><option value="0.174">0.174</option><option value="0.173">0.173</option><option value="0.172">0.172</option><option value="0.171">0.171</option><option value="0.17">0.17</option><option value="0.169">0.169</option><option value="0.168">0.168</option><option value="0.167">0.167</option><option value="0.166">0.166</option><option value="0.165">0.165</option><option value="0.164">0.164</option><option value="0.163">0.163</option><option value="0.162">0.162</option><option value="0.161">0.161</option><option value="0.16">0.16</option><option value="0.159">0.159</option><option value="0.158">0.158</option><option value="0.157">0.157</option><option value="0.156">0.156</option><option value="0.155">0.155</option><option value="0.154">0.154</option><option value="0.153">0.153</option><option value="0.152">0.152</option><option value="0.151">0.151</option><option value="0.15">0.15</option><option value="0.149">0.149</option><option value="0.148">0.148</option><option value="0.147">0.147</option><option value="0.146">0.146</option><option value="0.145">0.145</option><option value="0.144">0.144</option><option value="0.143">0.143</option><option value="0.142">0.142</option><option value="0.141">0.141</option><option value="0.14">0.14</option><option value="0.139">0.139</option><option value="0.138">0.138</option><option value="0.137">0.137</option><option value="0.136">0.136</option><option value="0.135">0.135</option><option value="0.134">0.134</option><option value="0.133">0.133</option><option value="0.132">0.132</option><option value="0.131">0.131</option><option value="0.13">0.13</option><option value="0.129">0.129</option><option value="0.128">0.128</option><option value="0.127">0.127</option><option value="0.126">0.126</option><option value="0.125">0.125</option><option value="0.124">0.124</option><option value="0.123">0.123</option><option value="0.122">0.122</option><option value="0.121">0.121</option><option value="0.12">0.12</option><option value="0.119">0.119</option><option value="0.118">0.118</option><option value="0.117">0.117</option><option value="0.116">0.116</option><option value="0.115">0.115</option><option value="0.114">0.114</option><option value="0.113">0.113</option><option value="0.112">0.112</option><option value="0.111">0.111</option><option value="0.11">0.11</option><option value="0.109">0.109</option><option value="0.108">0.108</option><option value="0.107">0.107</option><option value="0.106">0.106</option><option value="0.105">0.105</option><option value="0.104">0.104</option><option value="0.103">0.103</option><option value="0.102">0.102</option><option value="0.101">0.101</option><option value="0.1">0.1</option><option value="0.099">0.099</option><option value="0.098">0.098</option><option value="0.097">0.097</option><option value="0.096">0.096</option><option value="0.095">0.095</option><option value="0.094">0.094</option><option value="0.093">0.093</option><option value="0.092">0.092</option><option value="0.091">0.091</option><option value="0.09">0.09</option><option value="0.089">0.089</option><option value="0.088">0.088</option><option value="0.087">0.087</option><option value="0.086">0.086</option><option value="0.085">0.085</option><option value="0.084">0.084</option><option value="0.083">0.083</option><option value="0.082">0.082</option><option value="0.081">0.081</option><option value="0.08">0.08</option><option value="0.079">0.079</option><option value="0.078">0.078</option><option value="0.077">0.077</option><option value="0.076">0.076</option><option value="0.075">0.075</option><option value="0.074">0.074</option><option value="0.073">0.073</option><option value="0.072">0.072</option><option value="0.071">0.071</option><option value="0.07">0.07</option><option value="0.069">0.069</option><option value="0.068">0.068</option><option value="0.067">0.067</option><option value="0.066">0.066</option><option value="0.065">0.065</option><option value="0.064">0.064</option><option value="0.063">0.063</option><option value="0.062">0.062</option><option value="0.061">0.061</option><option value="0.06">0.06</option><option value="0.059">0.059</option><option value="0.058">0.058</option><option value="0.057">0.057</option><option value="0.056">0.056</option><option value="0.055">0.055</option><option value="0.054">0.054</option><option value="0.053">0.053</option><option value="0.052">0.052</option><option value="0.051">0.051</option><option value="0.05">0.05</option><option value="0.049">0.049</option><option value="0.048">0.048</option><option value="0.047">0.047</option><option value="0.046">0.046</option><option value="0.045">0.045</option><option value="0.044">0.044</option><option value="0.043">0.043</option><option value="0.042">0.042</option><option value="0.041">0.041</option><option value="0.04">0.04</option><option value="0.039">0.039</option><option value="0.038">0.038</option><option value="0.037">0.037</option><option value="0.036">0.036</option><option value="0.035">0.035</option><option value="0.034">0.034</option><option value="0.033">0.033</option><option value="0.032">0.032</option><option value="0.031">0.031</option><option value="0.03">0.03</option><option value="0.029">0.029</option><option value="0.028">0.028</option><option value="0.027">0.027</option><option value="0.026">0.026</option><option value="0.025">0.025</option><option value="0.024">0.024</option><option value="0.023">0.023</option><option value="0.022">0.022</option><option value="0.021">0.021</option><option value="0.02">0.02</option><option value="0.019">0.019</option><option value="0.018">0.018</option><option value="0.017">0.017</option><option value="0.016">0.016</option><option value="0.015">0.015</option><option value="0.014">0.014</option><option value="0.013">0.013</option><option value="0.012">0.012</option><option value="0.011">0.011</option><option value="0.01">0.01</option><option value="0.009">0.009</option><option value="0.008">0.008</option><option value="0.007">0.007</option><option value="0.006">0.006</option><option value="0.005">0.005</option><option value="0.004">0.004</option><option value="0.003">0.003</option><option value="0.002">0.002</option><option value="0.001">0.001</option><option value="0" selected="">0</option></select></td><td><select name="fs_104" id="fs_104" data-pid="4" class="chosen-select" data-placeholder="赔率" style="width:100px;"><option value="750">750</option><option value="751">751</option><option value="752">752</option><option value="753">753</option><option value="754">754</option><option value="755">755</option><option value="756">756</option><option value="757">757</option><option value="758">758</option><option value="759">759</option><option value="760">760</option><option value="761">761</option><option value="762">762</option><option value="763">763</option><option value="764">764</option><option value="765">765</option><option value="766">766</option><option value="767">767</option><option value="768">768</option><option value="769">769</option><option value="770">770</option><option value="771">771</option><option value="772">772</option><option value="773">773</option><option value="774">774</option><option value="775">775</option><option value="776">776</option><option value="777">777</option><option value="778">778</option><option value="779">779</option><option value="780">780</option><option value="781">781</option><option value="782">782</option><option value="783">783</option><option value="784">784</option><option value="785">785</option><option value="786">786</option><option value="787">787</option><option value="788">788</option><option value="789">789</option><option value="790">790</option><option value="791">791</option><option value="792">792</option><option value="793">793</option><option value="794">794</option><option value="795">795</option><option value="796">796</option><option value="797">797</option><option value="798">798</option><option value="799">799</option><option value="800">800</option><option value="801">801</option><option value="802">802</option><option value="803">803</option><option value="804">804</option><option value="805">805</option><option value="806">806</option><option value="807">807</option><option value="808">808</option><option value="809">809</option><option value="810">810</option><option value="811">811</option><option value="812">812</option><option value="813">813</option><option value="814">814</option><option value="815">815</option><option value="816">816</option><option value="817">817</option><option value="818">818</option><option value="819">819</option><option value="820">820</option><option value="821">821</option><option value="822">822</option><option value="823">823</option><option value="824">824</option><option value="825">825</option><option value="826">826</option><option value="827">827</option><option value="828">828</option><option value="829">829</option><option value="830">830</option><option value="831">831</option><option value="832">832</option><option value="833">833</option><option value="834">834</option><option value="835">835</option><option value="836">836</option><option value="837">837</option><option value="838">838</option><option value="839">839</option><option value="840">840</option><option value="841">841</option><option value="842">842</option><option value="843">843</option><option value="844">844</option><option value="845">845</option><option value="846">846</option><option value="847">847</option><option value="848">848</option><option value="849">849</option><option value="850">850</option><option value="851">851</option><option value="852">852</option><option value="853">853</option><option value="854">854</option><option value="855">855</option><option value="856">856</option><option value="857">857</option><option value="858">858</option><option value="859">859</option><option value="860">860</option><option value="861">861</option><option value="862">862</option><option value="863">863</option><option value="864">864</option><option value="865">865</option><option value="866">866</option><option value="867">867</option><option value="868">868</option><option value="869">869</option><option value="870">870</option><option value="871">871</option><option value="872">872</option><option value="873">873</option><option value="874">874</option><option value="875">875</option><option value="876">876</option><option value="877">877</option><option value="878">878</option><option value="879">879</option><option value="880">880</option><option value="881">881</option><option value="882">882</option><option value="883">883</option><option value="884">884</option><option value="885">885</option><option value="886">886</option><option value="887">887</option><option value="888">888</option><option value="889">889</option><option value="890">890</option><option value="891">891</option><option value="892">892</option><option value="893">893</option><option value="894">894</option><option value="895">895</option><option value="896">896</option><option value="897">897</option><option value="898">898</option><option value="899">899</option><option value="900">900</option><option value="901">901</option><option value="902">902</option><option value="903">903</option><option value="904">904</option><option value="905">905</option><option value="906">906</option><option value="907">907</option><option value="908">908</option><option value="909">909</option><option value="910">910</option><option value="911">911</option><option value="912">912</option><option value="913">913</option><option value="914">914</option><option value="915">915</option><option value="916">916</option><option value="917">917</option><option value="918">918</option><option value="919">919</option><option value="920">920</option><option value="921">921</option><option value="922">922</option><option value="923">923</option><option value="924">924</option><option value="925">925</option><option value="926">926</option><option value="927">927</option><option value="928">928</option><option value="929">929</option><option value="930">930</option><option value="931">931</option><option value="932">932</option><option value="933">933</option><option value="934">934</option><option value="935">935</option><option value="936">936</option><option value="937">937</option><option value="938">938</option><option value="939">939</option><option value="940">940</option><option value="941">941</option><option value="942">942</option><option value="943">943</option><option value="944">944</option><option value="945">945</option><option value="946">946</option><option value="947">947</option><option value="948">948</option><option value="949">949</option><option value="950">950</option><option value="951">951</option><option value="952">952</option><option value="953">953</option><option value="954">954</option><option value="955">955</option><option value="956">956</option><option value="957">957</option><option value="958">958</option><option value="959">959</option><option value="960">960</option><option value="961">961</option><option value="962">962</option><option value="963">963</option><option value="964">964</option><option value="965">965</option><option value="966">966</option><option value="967">967</option><option value="968">968</option><option value="969">969</option><option value="970">970</option><option value="971">971</option><option value="972">972</option><option value="973">973</option><option value="974">974</option><option value="975">975</option><option value="976">976</option><option value="977">977</option><option value="978">978</option><option value="979">979</option><option value="980">980</option><option value="981">981</option><option value="982">982</option><option value="983">983</option><option value="984">984</option><option value="985">985</option><option value="986">986</option><option value="987">987</option><option value="988">988</option><option value="989">989</option><option value="990" selected="">990</option></select></td></tr><tr><td>X口口口</td><td>0.1</td><td>990</td><td>100</td><td>5000</td><td><select name="hs_103" id="hs_103" data-pid="4" class="chosen-select" data-placeholder="交易回水" style="width:100px;"><option value="0.24">0.24</option><option value="0.239">0.239</option><option value="0.238">0.238</option><option value="0.237">0.237</option><option value="0.236">0.236</option><option value="0.235">0.235</option><option value="0.234">0.234</option><option value="0.233">0.233</option><option value="0.232">0.232</option><option value="0.231">0.231</option><option value="0.23">0.23</option><option value="0.229">0.229</option><option value="0.228">0.228</option><option value="0.227">0.227</option><option value="0.226">0.226</option><option value="0.225">0.225</option><option value="0.224">0.224</option><option value="0.223">0.223</option><option value="0.222">0.222</option><option value="0.221">0.221</option><option value="0.22">0.22</option><option value="0.219">0.219</option><option value="0.218">0.218</option><option value="0.217">0.217</option><option value="0.216">0.216</option><option value="0.215">0.215</option><option value="0.214">0.214</option><option value="0.213">0.213</option><option value="0.212">0.212</option><option value="0.211">0.211</option><option value="0.21">0.21</option><option value="0.209">0.209</option><option value="0.208">0.208</option><option value="0.207">0.207</option><option value="0.206">0.206</option><option value="0.205">0.205</option><option value="0.204">0.204</option><option value="0.203">0.203</option><option value="0.202">0.202</option><option value="0.201">0.201</option><option value="0.2">0.2</option><option value="0.199">0.199</option><option value="0.198">0.198</option><option value="0.197">0.197</option><option value="0.196">0.196</option><option value="0.195">0.195</option><option value="0.194">0.194</option><option value="0.193">0.193</option><option value="0.192">0.192</option><option value="0.191">0.191</option><option value="0.19">0.19</option><option value="0.189">0.189</option><option value="0.188">0.188</option><option value="0.187">0.187</option><option value="0.186">0.186</option><option value="0.185">0.185</option><option value="0.184">0.184</option><option value="0.183">0.183</option><option value="0.182">0.182</option><option value="0.181">0.181</option><option value="0.18">0.18</option><option value="0.179">0.179</option><option value="0.178">0.178</option><option value="0.177">0.177</option><option value="0.176">0.176</option><option value="0.175">0.175</option><option value="0.174">0.174</option><option value="0.173">0.173</option><option value="0.172">0.172</option><option value="0.171">0.171</option><option value="0.17">0.17</option><option value="0.169">0.169</option><option value="0.168">0.168</option><option value="0.167">0.167</option><option value="0.166">0.166</option><option value="0.165">0.165</option><option value="0.164">0.164</option><option value="0.163">0.163</option><option value="0.162">0.162</option><option value="0.161">0.161</option><option value="0.16">0.16</option><option value="0.159">0.159</option><option value="0.158">0.158</option><option value="0.157">0.157</option><option value="0.156">0.156</option><option value="0.155">0.155</option><option value="0.154">0.154</option><option value="0.153">0.153</option><option value="0.152">0.152</option><option value="0.151">0.151</option><option value="0.15">0.15</option><option value="0.149">0.149</option><option value="0.148">0.148</option><option value="0.147">0.147</option><option value="0.146">0.146</option><option value="0.145">0.145</option><option value="0.144">0.144</option><option value="0.143">0.143</option><option value="0.142">0.142</option><option value="0.141">0.141</option><option value="0.14">0.14</option><option value="0.139">0.139</option><option value="0.138">0.138</option><option value="0.137">0.137</option><option value="0.136">0.136</option><option value="0.135">0.135</option><option value="0.134">0.134</option><option value="0.133">0.133</option><option value="0.132">0.132</option><option value="0.131">0.131</option><option value="0.13">0.13</option><option value="0.129">0.129</option><option value="0.128">0.128</option><option value="0.127">0.127</option><option value="0.126">0.126</option><option value="0.125">0.125</option><option value="0.124">0.124</option><option value="0.123">0.123</option><option value="0.122">0.122</option><option value="0.121">0.121</option><option value="0.12">0.12</option><option value="0.119">0.119</option><option value="0.118">0.118</option><option value="0.117">0.117</option><option value="0.116">0.116</option><option value="0.115">0.115</option><option value="0.114">0.114</option><option value="0.113">0.113</option><option value="0.112">0.112</option><option value="0.111">0.111</option><option value="0.11">0.11</option><option value="0.109">0.109</option><option value="0.108">0.108</option><option value="0.107">0.107</option><option value="0.106">0.106</option><option value="0.105">0.105</option><option value="0.104">0.104</option><option value="0.103">0.103</option><option value="0.102">0.102</option><option value="0.101">0.101</option><option value="0.1">0.1</option><option value="0.099">0.099</option><option value="0.098">0.098</option><option value="0.097">0.097</option><option value="0.096">0.096</option><option value="0.095">0.095</option><option value="0.094">0.094</option><option value="0.093">0.093</option><option value="0.092">0.092</option><option value="0.091">0.091</option><option value="0.09">0.09</option><option value="0.089">0.089</option><option value="0.088">0.088</option><option value="0.087">0.087</option><option value="0.086">0.086</option><option value="0.085">0.085</option><option value="0.084">0.084</option><option value="0.083">0.083</option><option value="0.082">0.082</option><option value="0.081">0.081</option><option value="0.08">0.08</option><option value="0.079">0.079</option><option value="0.078">0.078</option><option value="0.077">0.077</option><option value="0.076">0.076</option><option value="0.075">0.075</option><option value="0.074">0.074</option><option value="0.073">0.073</option><option value="0.072">0.072</option><option value="0.071">0.071</option><option value="0.07">0.07</option><option value="0.069">0.069</option><option value="0.068">0.068</option><option value="0.067">0.067</option><option value="0.066">0.066</option><option value="0.065">0.065</option><option value="0.064">0.064</option><option value="0.063">0.063</option><option value="0.062">0.062</option><option value="0.061">0.061</option><option value="0.06">0.06</option><option value="0.059">0.059</option><option value="0.058">0.058</option><option value="0.057">0.057</option><option value="0.056">0.056</option><option value="0.055">0.055</option><option value="0.054">0.054</option><option value="0.053">0.053</option><option value="0.052">0.052</option><option value="0.051">0.051</option><option value="0.05">0.05</option><option value="0.049">0.049</option><option value="0.048">0.048</option><option value="0.047">0.047</option><option value="0.046">0.046</option><option value="0.045">0.045</option><option value="0.044">0.044</option><option value="0.043">0.043</option><option value="0.042">0.042</option><option value="0.041">0.041</option><option value="0.04">0.04</option><option value="0.039">0.039</option><option value="0.038">0.038</option><option value="0.037">0.037</option><option value="0.036">0.036</option><option value="0.035">0.035</option><option value="0.034">0.034</option><option value="0.033">0.033</option><option value="0.032">0.032</option><option value="0.031">0.031</option><option value="0.03">0.03</option><option value="0.029">0.029</option><option value="0.028">0.028</option><option value="0.027">0.027</option><option value="0.026">0.026</option><option value="0.025">0.025</option><option value="0.024">0.024</option><option value="0.023">0.023</option><option value="0.022">0.022</option><option value="0.021">0.021</option><option value="0.02">0.02</option><option value="0.019">0.019</option><option value="0.018">0.018</option><option value="0.017">0.017</option><option value="0.016">0.016</option><option value="0.015">0.015</option><option value="0.014">0.014</option><option value="0.013">0.013</option><option value="0.012">0.012</option><option value="0.011">0.011</option><option value="0.01">0.01</option><option value="0.009">0.009</option><option value="0.008">0.008</option><option value="0.007">0.007</option><option value="0.006">0.006</option><option value="0.005">0.005</option><option value="0.004">0.004</option><option value="0.003">0.003</option><option value="0.002">0.002</option><option value="0.001">0.001</option><option value="0" selected="">0</option></select></td><td><select name="fs_103" id="fs_103" data-pid="4" class="chosen-select" data-placeholder="赔率" style="width:100px;"><option value="750">750</option><option value="751">751</option><option value="752">752</option><option value="753">753</option><option value="754">754</option><option value="755">755</option><option value="756">756</option><option value="757">757</option><option value="758">758</option><option value="759">759</option><option value="760">760</option><option value="761">761</option><option value="762">762</option><option value="763">763</option><option value="764">764</option><option value="765">765</option><option value="766">766</option><option value="767">767</option><option value="768">768</option><option value="769">769</option><option value="770">770</option><option value="771">771</option><option value="772">772</option><option value="773">773</option><option value="774">774</option><option value="775">775</option><option value="776">776</option><option value="777">777</option><option value="778">778</option><option value="779">779</option><option value="780">780</option><option value="781">781</option><option value="782">782</option><option value="783">783</option><option value="784">784</option><option value="785">785</option><option value="786">786</option><option value="787">787</option><option value="788">788</option><option value="789">789</option><option value="790">790</option><option value="791">791</option><option value="792">792</option><option value="793">793</option><option value="794">794</option><option value="795">795</option><option value="796">796</option><option value="797">797</option><option value="798">798</option><option value="799">799</option><option value="800">800</option><option value="801">801</option><option value="802">802</option><option value="803">803</option><option value="804">804</option><option value="805">805</option><option value="806">806</option><option value="807">807</option><option value="808">808</option><option value="809">809</option><option value="810">810</option><option value="811">811</option><option value="812">812</option><option value="813">813</option><option value="814">814</option><option value="815">815</option><option value="816">816</option><option value="817">817</option><option value="818">818</option><option value="819">819</option><option value="820">820</option><option value="821">821</option><option value="822">822</option><option value="823">823</option><option value="824">824</option><option value="825">825</option><option value="826">826</option><option value="827">827</option><option value="828">828</option><option value="829">829</option><option value="830">830</option><option value="831">831</option><option value="832">832</option><option value="833">833</option><option value="834">834</option><option value="835">835</option><option value="836">836</option><option value="837">837</option><option value="838">838</option><option value="839">839</option><option value="840">840</option><option value="841">841</option><option value="842">842</option><option value="843">843</option><option value="844">844</option><option value="845">845</option><option value="846">846</option><option value="847">847</option><option value="848">848</option><option value="849">849</option><option value="850">850</option><option value="851">851</option><option value="852">852</option><option value="853">853</option><option value="854">854</option><option value="855">855</option><option value="856">856</option><option value="857">857</option><option value="858">858</option><option value="859">859</option><option value="860">860</option><option value="861">861</option><option value="862">862</option><option value="863">863</option><option value="864">864</option><option value="865">865</option><option value="866">866</option><option value="867">867</option><option value="868">868</option><option value="869">869</option><option value="870">870</option><option value="871">871</option><option value="872">872</option><option value="873">873</option><option value="874">874</option><option value="875">875</option><option value="876">876</option><option value="877">877</option><option value="878">878</option><option value="879">879</option><option value="880">880</option><option value="881">881</option><option value="882">882</option><option value="883">883</option><option value="884">884</option><option value="885">885</option><option value="886">886</option><option value="887">887</option><option value="888">888</option><option value="889">889</option><option value="890">890</option><option value="891">891</option><option value="892">892</option><option value="893">893</option><option value="894">894</option><option value="895">895</option><option value="896">896</option><option value="897">897</option><option value="898">898</option><option value="899">899</option><option value="900">900</option><option value="901">901</option><option value="902">902</option><option value="903">903</option><option value="904">904</option><option value="905">905</option><option value="906">906</option><option value="907">907</option><option value="908">908</option><option value="909">909</option><option value="910">910</option><option value="911">911</option><option value="912">912</option><option value="913">913</option><option value="914">914</option><option value="915">915</option><option value="916">916</option><option value="917">917</option><option value="918">918</option><option value="919">919</option><option value="920">920</option><option value="921">921</option><option value="922">922</option><option value="923">923</option><option value="924">924</option><option value="925">925</option><option value="926">926</option><option value="927">927</option><option value="928">928</option><option value="929">929</option><option value="930">930</option><option value="931">931</option><option value="932">932</option><option value="933">933</option><option value="934">934</option><option value="935">935</option><option value="936">936</option><option value="937">937</option><option value="938">938</option><option value="939">939</option><option value="940">940</option><option value="941">941</option><option value="942">942</option><option value="943">943</option><option value="944">944</option><option value="945">945</option><option value="946">946</option><option value="947">947</option><option value="948">948</option><option value="949">949</option><option value="950">950</option><option value="951">951</option><option value="952">952</option><option value="953">953</option><option value="954">954</option><option value="955">955</option><option value="956">956</option><option value="957">957</option><option value="958">958</option><option value="959">959</option><option value="960">960</option><option value="961">961</option><option value="962">962</option><option value="963">963</option><option value="964">964</option><option value="965">965</option><option value="966">966</option><option value="967">967</option><option value="968">968</option><option value="969">969</option><option value="970">970</option><option value="971">971</option><option value="972">972</option><option value="973">973</option><option value="974">974</option><option value="975">975</option><option value="976">976</option><option value="977">977</option><option value="978">978</option><option value="979">979</option><option value="980">980</option><option value="981">981</option><option value="982">982</option><option value="983">983</option><option value="984">984</option><option value="985">985</option><option value="986">986</option><option value="987">987</option><option value="988">988</option><option value="989">989</option><option value="990" selected="">990</option></select></td></tr><tr><td class="mred">四定位</td><td>0.1</td><td>9780</td><td>50</td><td>2000</td><td><select name="hs_5" id="hs_5" data-pid="0" class="chosen-select" data-placeholder="交易回水" style="width:100px;"><option value="0.278">0.278</option><option value="0.277">0.277</option><option value="0.276">0.276</option><option value="0.275">0.275</option><option value="0.274">0.274</option><option value="0.273">0.273</option><option value="0.272">0.272</option><option value="0.271">0.271</option><option value="0.27">0.27</option><option value="0.269">0.269</option><option value="0.268">0.268</option><option value="0.267">0.267</option><option value="0.266">0.266</option><option value="0.265">0.265</option><option value="0.264">0.264</option><option value="0.263">0.263</option><option value="0.262">0.262</option><option value="0.261">0.261</option><option value="0.26">0.26</option><option value="0.259">0.259</option><option value="0.258">0.258</option><option value="0.257">0.257</option><option value="0.256">0.256</option><option value="0.255">0.255</option><option value="0.254">0.254</option><option value="0.253">0.253</option><option value="0.252">0.252</option><option value="0.251">0.251</option><option value="0.25">0.25</option><option value="0.249">0.249</option><option value="0.248">0.248</option><option value="0.247">0.247</option><option value="0.246">0.246</option><option value="0.245">0.245</option><option value="0.244">0.244</option><option value="0.243">0.243</option><option value="0.242">0.242</option><option value="0.241">0.241</option><option value="0.24">0.24</option><option value="0.239">0.239</option><option value="0.238">0.238</option><option value="0.237">0.237</option><option value="0.236">0.236</option><option value="0.235">0.235</option><option value="0.234">0.234</option><option value="0.233">0.233</option><option value="0.232">0.232</option><option value="0.231">0.231</option><option value="0.23">0.23</option><option value="0.229">0.229</option><option value="0.228">0.228</option><option value="0.227">0.227</option><option value="0.226">0.226</option><option value="0.225">0.225</option><option value="0.224">0.224</option><option value="0.223">0.223</option><option value="0.222">0.222</option><option value="0.221">0.221</option><option value="0.22">0.22</option><option value="0.219">0.219</option><option value="0.218">0.218</option><option value="0.217">0.217</option><option value="0.216">0.216</option><option value="0.215">0.215</option><option value="0.214">0.214</option><option value="0.213">0.213</option><option value="0.212">0.212</option><option value="0.211">0.211</option><option value="0.21">0.21</option><option value="0.209">0.209</option><option value="0.208">0.208</option><option value="0.207">0.207</option><option value="0.206">0.206</option><option value="0.205">0.205</option><option value="0.204">0.204</option><option value="0.203">0.203</option><option value="0.202">0.202</option><option value="0.201">0.201</option><option value="0.2">0.2</option><option value="0.199">0.199</option><option value="0.198">0.198</option><option value="0.197">0.197</option><option value="0.196">0.196</option><option value="0.195">0.195</option><option value="0.194">0.194</option><option value="0.193">0.193</option><option value="0.192">0.192</option><option value="0.191">0.191</option><option value="0.19">0.19</option><option value="0.189">0.189</option><option value="0.188">0.188</option><option value="0.187">0.187</option><option value="0.186">0.186</option><option value="0.185">0.185</option><option value="0.184">0.184</option><option value="0.183">0.183</option><option value="0.182">0.182</option><option value="0.181">0.181</option><option value="0.18">0.18</option><option value="0.179">0.179</option><option value="0.178">0.178</option><option value="0.177">0.177</option><option value="0.176">0.176</option><option value="0.175">0.175</option><option value="0.174">0.174</option><option value="0.173">0.173</option><option value="0.172">0.172</option><option value="0.171">0.171</option><option value="0.17">0.17</option><option value="0.169">0.169</option><option value="0.168">0.168</option><option value="0.167">0.167</option><option value="0.166">0.166</option><option value="0.165">0.165</option><option value="0.164">0.164</option><option value="0.163">0.163</option><option value="0.162">0.162</option><option value="0.161">0.161</option><option value="0.16">0.16</option><option value="0.159">0.159</option><option value="0.158">0.158</option><option value="0.157">0.157</option><option value="0.156">0.156</option><option value="0.155">0.155</option><option value="0.154">0.154</option><option value="0.153">0.153</option><option value="0.152">0.152</option><option value="0.151">0.151</option><option value="0.15">0.15</option><option value="0.149">0.149</option><option value="0.148">0.148</option><option value="0.147">0.147</option><option value="0.146">0.146</option><option value="0.145">0.145</option><option value="0.144">0.144</option><option value="0.143">0.143</option><option value="0.142">0.142</option><option value="0.141">0.141</option><option value="0.14">0.14</option><option value="0.139">0.139</option><option value="0.138">0.138</option><option value="0.137">0.137</option><option value="0.136">0.136</option><option value="0.135">0.135</option><option value="0.134">0.134</option><option value="0.133">0.133</option><option value="0.132">0.132</option><option value="0.131">0.131</option><option value="0.13">0.13</option><option value="0.129">0.129</option><option value="0.128">0.128</option><option value="0.127">0.127</option><option value="0.126">0.126</option><option value="0.125">0.125</option><option value="0.124">0.124</option><option value="0.123">0.123</option><option value="0.122">0.122</option><option value="0.121">0.121</option><option value="0.12">0.12</option><option value="0.119">0.119</option><option value="0.118">0.118</option><option value="0.117">0.117</option><option value="0.116">0.116</option><option value="0.115">0.115</option><option value="0.114">0.114</option><option value="0.113">0.113</option><option value="0.112">0.112</option><option value="0.111">0.111</option><option value="0.11">0.11</option><option value="0.109">0.109</option><option value="0.108">0.108</option><option value="0.107">0.107</option><option value="0.106">0.106</option><option value="0.105">0.105</option><option value="0.104">0.104</option><option value="0.103">0.103</option><option value="0.102">0.102</option><option value="0.101">0.101</option><option value="0.1">0.1</option><option value="0.099">0.099</option><option value="0.098">0.098</option><option value="0.097">0.097</option><option value="0.096">0.096</option><option value="0.095">0.095</option><option value="0.094">0.094</option><option value="0.093">0.093</option><option value="0.092">0.092</option><option value="0.091">0.091</option><option value="0.09">0.09</option><option value="0.089">0.089</option><option value="0.088">0.088</option><option value="0.087">0.087</option><option value="0.086">0.086</option><option value="0.085">0.085</option><option value="0.084">0.084</option><option value="0.083">0.083</option><option value="0.082">0.082</option><option value="0.081">0.081</option><option value="0.08">0.08</option><option value="0.079">0.079</option><option value="0.078">0.078</option><option value="0.077">0.077</option><option value="0.076">0.076</option><option value="0.075">0.075</option><option value="0.074">0.074</option><option value="0.073">0.073</option><option value="0.072">0.072</option><option value="0.071">0.071</option><option value="0.07">0.07</option><option value="0.069">0.069</option><option value="0.068">0.068</option><option value="0.067">0.067</option><option value="0.066">0.066</option><option value="0.065">0.065</option><option value="0.064">0.064</option><option value="0.063">0.063</option><option value="0.062">0.062</option><option value="0.061">0.061</option><option value="0.06">0.06</option><option value="0.059">0.059</option><option value="0.058">0.058</option><option value="0.057">0.057</option><option value="0.056">0.056</option><option value="0.055">0.055</option><option value="0.054">0.054</option><option value="0.053">0.053</option><option value="0.052">0.052</option><option value="0.051">0.051</option><option value="0.05">0.05</option><option value="0.049">0.049</option><option value="0.048">0.048</option><option value="0.047">0.047</option><option value="0.046">0.046</option><option value="0.045">0.045</option><option value="0.044">0.044</option><option value="0.043">0.043</option><option value="0.042">0.042</option><option value="0.041">0.041</option><option value="0.04">0.04</option><option value="0.039">0.039</option><option value="0.038">0.038</option><option value="0.037">0.037</option><option value="0.036">0.036</option><option value="0.035">0.035</option><option value="0.034">0.034</option><option value="0.033">0.033</option><option value="0.032">0.032</option><option value="0.031">0.031</option><option value="0.03">0.03</option><option value="0.029">0.029</option><option value="0.028">0.028</option><option value="0.027">0.027</option><option value="0.026">0.026</option><option value="0.025">0.025</option><option value="0.024">0.024</option><option value="0.023">0.023</option><option value="0.022">0.022</option><option value="0.021">0.021</option><option value="0.02">0.02</option><option value="0.019">0.019</option><option value="0.018">0.018</option><option value="0.017">0.017</option><option value="0.016">0.016</option><option value="0.015">0.015</option><option value="0.014">0.014</option><option value="0.013">0.013</option><option value="0.012">0.012</option><option value="0.011">0.011</option><option value="0.01">0.01</option><option value="0.009">0.009</option><option value="0.008">0.008</option><option value="0.007">0.007</option><option value="0.006">0.006</option><option value="0.005">0.005</option><option value="0.004">0.004</option><option value="0.003">0.003</option><option value="0.002">0.002</option><option value="0.001">0.001</option><option value="0" selected="">0</option></select></td><td><select name="fs_5" id="fs_5" data-pid="0" class="chosen-select" data-placeholder="赔率" style="width:100px;"><option value="7000">7000</option><option value="7010">7010</option><option value="7020">7020</option><option value="7030">7030</option><option value="7040">7040</option><option value="7050">7050</option><option value="7060">7060</option><option value="7070">7070</option><option value="7080">7080</option><option value="7090">7090</option><option value="7100">7100</option><option value="7110">7110</option><option value="7120">7120</option><option value="7130">7130</option><option value="7140">7140</option><option value="7150">7150</option><option value="7160">7160</option><option value="7170">7170</option><option value="7180">7180</option><option value="7190">7190</option><option value="7200">7200</option><option value="7210">7210</option><option value="7220">7220</option><option value="7230">7230</option><option value="7240">7240</option><option value="7250">7250</option><option value="7260">7260</option><option value="7270">7270</option><option value="7280">7280</option><option value="7290">7290</option><option value="7300">7300</option><option value="7310">7310</option><option value="7320">7320</option><option value="7330">7330</option><option value="7340">7340</option><option value="7350">7350</option><option value="7360">7360</option><option value="7370">7370</option><option value="7380">7380</option><option value="7390">7390</option><option value="7400">7400</option><option value="7410">7410</option><option value="7420">7420</option><option value="7430">7430</option><option value="7440">7440</option><option value="7450">7450</option><option value="7460">7460</option><option value="7470">7470</option><option value="7480">7480</option><option value="7490">7490</option><option value="7500">7500</option><option value="7510">7510</option><option value="7520">7520</option><option value="7530">7530</option><option value="7540">7540</option><option value="7550">7550</option><option value="7560">7560</option><option value="7570">7570</option><option value="7580">7580</option><option value="7590">7590</option><option value="7600">7600</option><option value="7610">7610</option><option value="7620">7620</option><option value="7630">7630</option><option value="7640">7640</option><option value="7650">7650</option><option value="7660">7660</option><option value="7670">7670</option><option value="7680">7680</option><option value="7690">7690</option><option value="7700">7700</option><option value="7710">7710</option><option value="7720">7720</option><option value="7730">7730</option><option value="7740">7740</option><option value="7750">7750</option><option value="7760">7760</option><option value="7770">7770</option><option value="7780">7780</option><option value="7790">7790</option><option value="7800">7800</option><option value="7810">7810</option><option value="7820">7820</option><option value="7830">7830</option><option value="7840">7840</option><option value="7850">7850</option><option value="7860">7860</option><option value="7870">7870</option><option value="7880">7880</option><option value="7890">7890</option><option value="7900">7900</option><option value="7910">7910</option><option value="7920">7920</option><option value="7930">7930</option><option value="7940">7940</option><option value="7950">7950</option><option value="7960">7960</option><option value="7970">7970</option><option value="7980">7980</option><option value="7990">7990</option><option value="8000">8000</option><option value="8010">8010</option><option value="8020">8020</option><option value="8030">8030</option><option value="8040">8040</option><option value="8050">8050</option><option value="8060">8060</option><option value="8070">8070</option><option value="8080">8080</option><option value="8090">8090</option><option value="8100">8100</option><option value="8110">8110</option><option value="8120">8120</option><option value="8130">8130</option><option value="8140">8140</option><option value="8150">8150</option><option value="8160">8160</option><option value="8170">8170</option><option value="8180">8180</option><option value="8190">8190</option><option value="8200">8200</option><option value="8210">8210</option><option value="8220">8220</option><option value="8230">8230</option><option value="8240">8240</option><option value="8250">8250</option><option value="8260">8260</option><option value="8270">8270</option><option value="8280">8280</option><option value="8290">8290</option><option value="8300">8300</option><option value="8310">8310</option><option value="8320">8320</option><option value="8330">8330</option><option value="8340">8340</option><option value="8350">8350</option><option value="8360">8360</option><option value="8370">8370</option><option value="8380">8380</option><option value="8390">8390</option><option value="8400">8400</option><option value="8410">8410</option><option value="8420">8420</option><option value="8430">8430</option><option value="8440">8440</option><option value="8450">8450</option><option value="8460">8460</option><option value="8470">8470</option><option value="8480">8480</option><option value="8490">8490</option><option value="8500">8500</option><option value="8510">8510</option><option value="8520">8520</option><option value="8530">8530</option><option value="8540">8540</option><option value="8550">8550</option><option value="8560">8560</option><option value="8570">8570</option><option value="8580">8580</option><option value="8590">8590</option><option value="8600">8600</option><option value="8610">8610</option><option value="8620">8620</option><option value="8630">8630</option><option value="8640">8640</option><option value="8650">8650</option><option value="8660">8660</option><option value="8670">8670</option><option value="8680">8680</option><option value="8690">8690</option><option value="8700">8700</option><option value="8710">8710</option><option value="8720">8720</option><option value="8730">8730</option><option value="8740">8740</option><option value="8750">8750</option><option value="8760">8760</option><option value="8770">8770</option><option value="8780">8780</option><option value="8790">8790</option><option value="8800">8800</option><option value="8810">8810</option><option value="8820">8820</option><option value="8830">8830</option><option value="8840">8840</option><option value="8850">8850</option><option value="8860">8860</option><option value="8870">8870</option><option value="8880">8880</option><option value="8890">8890</option><option value="8900">8900</option><option value="8910">8910</option><option value="8920">8920</option><option value="8930">8930</option><option value="8940">8940</option><option value="8950">8950</option><option value="8960">8960</option><option value="8970">8970</option><option value="8980">8980</option><option value="8990">8990</option><option value="9000">9000</option><option value="9010">9010</option><option value="9020">9020</option><option value="9030">9030</option><option value="9040">9040</option><option value="9050">9050</option><option value="9060">9060</option><option value="9070">9070</option><option value="9080">9080</option><option value="9090">9090</option><option value="9100">9100</option><option value="9110">9110</option><option value="9120">9120</option><option value="9130">9130</option><option value="9140">9140</option><option value="9150">9150</option><option value="9160">9160</option><option value="9170">9170</option><option value="9180">9180</option><option value="9190">9190</option><option value="9200">9200</option><option value="9210">9210</option><option value="9220">9220</option><option value="9230">9230</option><option value="9240">9240</option><option value="9250">9250</option><option value="9260">9260</option><option value="9270">9270</option><option value="9280">9280</option><option value="9290">9290</option><option value="9300">9300</option><option value="9310">9310</option><option value="9320">9320</option><option value="9330">9330</option><option value="9340">9340</option><option value="9350">9350</option><option value="9360">9360</option><option value="9370">9370</option><option value="9380">9380</option><option value="9390">9390</option><option value="9400">9400</option><option value="9410">9410</option><option value="9420">9420</option><option value="9430">9430</option><option value="9440">9440</option><option value="9450">9450</option><option value="9460">9460</option><option value="9470">9470</option><option value="9480">9480</option><option value="9490">9490</option><option value="9500">9500</option><option value="9510">9510</option><option value="9520">9520</option><option value="9530">9530</option><option value="9540">9540</option><option value="9550">9550</option><option value="9560">9560</option><option value="9570">9570</option><option value="9580">9580</option><option value="9590">9590</option><option value="9600">9600</option><option value="9610">9610</option><option value="9620">9620</option><option value="9630">9630</option><option value="9640">9640</option><option value="9650">9650</option><option value="9660">9660</option><option value="9670">9670</option><option value="9680">9680</option><option value="9690">9690</option><option value="9700">9700</option><option value="9710">9710</option><option value="9720">9720</option><option value="9730">9730</option><option value="9740">9740</option><option value="9750">9750</option><option value="9760">9760</option><option value="9770">9770</option><option value="9780" selected="">9780</option></select></td></tr><tr><td class="mred">二字现</td><td>1</td><td>9.85/13.7</td><td>500</td><td>200000</td><td><select name="hs_6" id="hs_6" data-pid="0" class="chosen-select" data-placeholder="交易回水" style="width:100px;"><option value="0.185">0.185</option><option value="0.184">0.184</option><option value="0.183">0.183</option><option value="0.182">0.182</option><option value="0.181">0.181</option><option value="0.18">0.18</option><option value="0.179">0.179</option><option value="0.178">0.178</option><option value="0.177">0.177</option><option value="0.176">0.176</option><option value="0.175">0.175</option><option value="0.174">0.174</option><option value="0.173">0.173</option><option value="0.172">0.172</option><option value="0.171">0.171</option><option value="0.17">0.17</option><option value="0.169">0.169</option><option value="0.168">0.168</option><option value="0.167">0.167</option><option value="0.166">0.166</option><option value="0.165">0.165</option><option value="0.164">0.164</option><option value="0.163">0.163</option><option value="0.162">0.162</option><option value="0.161">0.161</option><option value="0.16">0.16</option><option value="0.159">0.159</option><option value="0.158">0.158</option><option value="0.157">0.157</option><option value="0.156">0.156</option><option value="0.155">0.155</option><option value="0.154">0.154</option><option value="0.153">0.153</option><option value="0.152">0.152</option><option value="0.151">0.151</option><option value="0.15">0.15</option><option value="0.149">0.149</option><option value="0.148">0.148</option><option value="0.147">0.147</option><option value="0.146">0.146</option><option value="0.145">0.145</option><option value="0.144">0.144</option><option value="0.143">0.143</option><option value="0.142">0.142</option><option value="0.141">0.141</option><option value="0.14">0.14</option><option value="0.139">0.139</option><option value="0.138">0.138</option><option value="0.137">0.137</option><option value="0.136">0.136</option><option value="0.135">0.135</option><option value="0.134">0.134</option><option value="0.133">0.133</option><option value="0.132">0.132</option><option value="0.131">0.131</option><option value="0.13">0.13</option><option value="0.129">0.129</option><option value="0.128">0.128</option><option value="0.127">0.127</option><option value="0.126">0.126</option><option value="0.125">0.125</option><option value="0.124">0.124</option><option value="0.123">0.123</option><option value="0.122">0.122</option><option value="0.121">0.121</option><option value="0.12">0.12</option><option value="0.119">0.119</option><option value="0.118">0.118</option><option value="0.117">0.117</option><option value="0.116">0.116</option><option value="0.115">0.115</option><option value="0.114">0.114</option><option value="0.113">0.113</option><option value="0.112">0.112</option><option value="0.111">0.111</option><option value="0.11">0.11</option><option value="0.109">0.109</option><option value="0.108">0.108</option><option value="0.107">0.107</option><option value="0.106">0.106</option><option value="0.105">0.105</option><option value="0.104">0.104</option><option value="0.103">0.103</option><option value="0.102">0.102</option><option value="0.101">0.101</option><option value="0.1">0.1</option><option value="0.099">0.099</option><option value="0.098">0.098</option><option value="0.097">0.097</option><option value="0.096">0.096</option><option value="0.095">0.095</option><option value="0.094">0.094</option><option value="0.093">0.093</option><option value="0.092">0.092</option><option value="0.091">0.091</option><option value="0.09">0.09</option><option value="0.089">0.089</option><option value="0.088">0.088</option><option value="0.087">0.087</option><option value="0.086">0.086</option><option value="0.085">0.085</option><option value="0.084">0.084</option><option value="0.083">0.083</option><option value="0.082">0.082</option><option value="0.081">0.081</option><option value="0.08">0.08</option><option value="0.079">0.079</option><option value="0.078">0.078</option><option value="0.077">0.077</option><option value="0.076">0.076</option><option value="0.075">0.075</option><option value="0.074">0.074</option><option value="0.073">0.073</option><option value="0.072">0.072</option><option value="0.071">0.071</option><option value="0.07">0.07</option><option value="0.069">0.069</option><option value="0.068">0.068</option><option value="0.067">0.067</option><option value="0.066">0.066</option><option value="0.065">0.065</option><option value="0.064">0.064</option><option value="0.063">0.063</option><option value="0.062">0.062</option><option value="0.061">0.061</option><option value="0.06">0.06</option><option value="0.059">0.059</option><option value="0.058">0.058</option><option value="0.057">0.057</option><option value="0.056">0.056</option><option value="0.055">0.055</option><option value="0.054">0.054</option><option value="0.053">0.053</option><option value="0.052">0.052</option><option value="0.051">0.051</option><option value="0.05">0.05</option><option value="0.049">0.049</option><option value="0.048">0.048</option><option value="0.047">0.047</option><option value="0.046">0.046</option><option value="0.045">0.045</option><option value="0.044">0.044</option><option value="0.043">0.043</option><option value="0.042">0.042</option><option value="0.041">0.041</option><option value="0.04">0.04</option><option value="0.039">0.039</option><option value="0.038">0.038</option><option value="0.037">0.037</option><option value="0.036">0.036</option><option value="0.035">0.035</option><option value="0.034">0.034</option><option value="0.033">0.033</option><option value="0.032">0.032</option><option value="0.031">0.031</option><option value="0.03">0.03</option><option value="0.029">0.029</option><option value="0.028">0.028</option><option value="0.027">0.027</option><option value="0.026">0.026</option><option value="0.025">0.025</option><option value="0.024">0.024</option><option value="0.023">0.023</option><option value="0.022">0.022</option><option value="0.021">0.021</option><option value="0.02">0.02</option><option value="0.019">0.019</option><option value="0.018">0.018</option><option value="0.017">0.017</option><option value="0.016">0.016</option><option value="0.015">0.015</option><option value="0.014">0.014</option><option value="0.013">0.013</option><option value="0.012">0.012</option><option value="0.011">0.011</option><option value="0.01">0.01</option><option value="0.009">0.009</option><option value="0.008">0.008</option><option value="0.007">0.007</option><option value="0.006">0.006</option><option value="0.005">0.005</option><option value="0.004">0.004</option><option value="0.003">0.003</option><option value="0.002">0.002</option><option value="0.001">0.001</option><option value="0" selected="">0</option></select></td><td><select name="fs_6" id="fs_6" data-pid="0" class="chosen-select" data-placeholder="赔率" style="width:100px;"><option value="8">8</option><option value="8.01">8.01</option><option value="8.02">8.02</option><option value="8.03">8.03</option><option value="8.04">8.04</option><option value="8.05">8.05</option><option value="8.06">8.06</option><option value="8.07">8.07</option><option value="8.08">8.08</option><option value="8.09">8.09</option><option value="8.1">8.1</option><option value="8.11">8.11</option><option value="8.12">8.12</option><option value="8.13">8.13</option><option value="8.14">8.14</option><option value="8.15">8.15</option><option value="8.16">8.16</option><option value="8.17">8.17</option><option value="8.18">8.18</option><option value="8.19">8.19</option><option value="8.2">8.2</option><option value="8.21">8.21</option><option value="8.22">8.22</option><option value="8.23">8.23</option><option value="8.24">8.24</option><option value="8.25">8.25</option><option value="8.26">8.26</option><option value="8.27">8.27</option><option value="8.28">8.28</option><option value="8.29">8.29</option><option value="8.3">8.3</option><option value="8.31">8.31</option><option value="8.32">8.32</option><option value="8.33">8.33</option><option value="8.34">8.34</option><option value="8.35">8.35</option><option value="8.36">8.36</option><option value="8.37">8.37</option><option value="8.38">8.38</option><option value="8.39">8.39</option><option value="8.4">8.4</option><option value="8.41">8.41</option><option value="8.42">8.42</option><option value="8.43">8.43</option><option value="8.44">8.44</option><option value="8.45">8.45</option><option value="8.46">8.46</option><option value="8.47">8.47</option><option value="8.48">8.48</option><option value="8.49">8.49</option><option value="8.5">8.5</option><option value="8.51">8.51</option><option value="8.52">8.52</option><option value="8.53">8.53</option><option value="8.54">8.54</option><option value="8.55">8.55</option><option value="8.56">8.56</option><option value="8.57">8.57</option><option value="8.58">8.58</option><option value="8.59">8.59</option><option value="8.6">8.6</option><option value="8.61">8.61</option><option value="8.62">8.62</option><option value="8.63">8.63</option><option value="8.64">8.64</option><option value="8.65">8.65</option><option value="8.66">8.66</option><option value="8.67">8.67</option><option value="8.68">8.68</option><option value="8.69">8.69</option><option value="8.7">8.7</option><option value="8.71">8.71</option><option value="8.72">8.72</option><option value="8.73">8.73</option><option value="8.74">8.74</option><option value="8.75">8.75</option><option value="8.76">8.76</option><option value="8.77">8.77</option><option value="8.78">8.78</option><option value="8.79">8.79</option><option value="8.8">8.8</option><option value="8.81">8.81</option><option value="8.82">8.82</option><option value="8.83">8.83</option><option value="8.84">8.84</option><option value="8.85">8.85</option><option value="8.86">8.86</option><option value="8.87">8.87</option><option value="8.88">8.88</option><option value="8.89">8.89</option><option value="8.9">8.9</option><option value="8.91">8.91</option><option value="8.92">8.92</option><option value="8.93">8.93</option><option value="8.94">8.94</option><option value="8.95">8.95</option><option value="8.96">8.96</option><option value="8.97">8.97</option><option value="8.98">8.98</option><option value="8.99">8.99</option><option value="9">9</option><option value="9.01">9.01</option><option value="9.02">9.02</option><option value="9.03">9.03</option><option value="9.04">9.04</option><option value="9.05">9.05</option><option value="9.06">9.06</option><option value="9.07">9.07</option><option value="9.08">9.08</option><option value="9.09">9.09</option><option value="9.1">9.1</option><option value="9.11">9.11</option><option value="9.12">9.12</option><option value="9.13">9.13</option><option value="9.14">9.14</option><option value="9.15">9.15</option><option value="9.16">9.16</option><option value="9.17">9.17</option><option value="9.18">9.18</option><option value="9.19">9.19</option><option value="9.2">9.2</option><option value="9.21">9.21</option><option value="9.22">9.22</option><option value="9.23">9.23</option><option value="9.24">9.24</option><option value="9.25">9.25</option><option value="9.26">9.26</option><option value="9.27">9.27</option><option value="9.28">9.28</option><option value="9.29">9.29</option><option value="9.3">9.3</option><option value="9.31">9.31</option><option value="9.32">9.32</option><option value="9.33">9.33</option><option value="9.34">9.34</option><option value="9.35">9.35</option><option value="9.36">9.36</option><option value="9.37">9.37</option><option value="9.38">9.38</option><option value="9.39">9.39</option><option value="9.4">9.4</option><option value="9.41">9.41</option><option value="9.42">9.42</option><option value="9.43">9.43</option><option value="9.44">9.44</option><option value="9.45">9.45</option><option value="9.46">9.46</option><option value="9.47">9.47</option><option value="9.48">9.48</option><option value="9.49">9.49</option><option value="9.5">9.5</option><option value="9.51">9.51</option><option value="9.52">9.52</option><option value="9.53">9.53</option><option value="9.54">9.54</option><option value="9.55">9.55</option><option value="9.56">9.56</option><option value="9.57">9.57</option><option value="9.58">9.58</option><option value="9.59">9.59</option><option value="9.6">9.6</option><option value="9.61">9.61</option><option value="9.62">9.62</option><option value="9.63">9.63</option><option value="9.64">9.64</option><option value="9.65">9.65</option><option value="9.66">9.66</option><option value="9.67">9.67</option><option value="9.68">9.68</option><option value="9.69">9.69</option><option value="9.7">9.7</option><option value="9.71">9.71</option><option value="9.72">9.72</option><option value="9.73">9.73</option><option value="9.74">9.74</option><option value="9.75">9.75</option><option value="9.76">9.76</option><option value="9.77">9.77</option><option value="9.78">9.78</option><option value="9.79">9.79</option><option value="9.8">9.8</option><option value="9.81">9.81</option><option value="9.82">9.82</option><option value="9.83">9.83</option><option value="9.84">9.84</option><option value="9.85" selected="">9.85</option></select></td></tr><tr><td class="mred">三字现</td><td>1</td><td>47.05/68.1/124.2</td><td>500</td><td>200000</td><td><select name="hs_7" id="hs_7" data-pid="0" class="chosen-select" data-placeholder="交易回水" style="width:100px;"><option value="0.141">0.141</option><option value="0.14">0.14</option><option value="0.139">0.139</option><option value="0.138">0.138</option><option value="0.137">0.137</option><option value="0.136">0.136</option><option value="0.135">0.135</option><option value="0.134">0.134</option><option value="0.133">0.133</option><option value="0.132">0.132</option><option value="0.131">0.131</option><option value="0.13">0.13</option><option value="0.129">0.129</option><option value="0.128">0.128</option><option value="0.127">0.127</option><option value="0.126">0.126</option><option value="0.125">0.125</option><option value="0.124">0.124</option><option value="0.123">0.123</option><option value="0.122">0.122</option><option value="0.121">0.121</option><option value="0.12">0.12</option><option value="0.119">0.119</option><option value="0.118">0.118</option><option value="0.117">0.117</option><option value="0.116">0.116</option><option value="0.115">0.115</option><option value="0.114">0.114</option><option value="0.113">0.113</option><option value="0.112">0.112</option><option value="0.111">0.111</option><option value="0.11">0.11</option><option value="0.109">0.109</option><option value="0.108">0.108</option><option value="0.107">0.107</option><option value="0.106">0.106</option><option value="0.105">0.105</option><option value="0.104">0.104</option><option value="0.103">0.103</option><option value="0.102">0.102</option><option value="0.101">0.101</option><option value="0.1">0.1</option><option value="0.099">0.099</option><option value="0.098">0.098</option><option value="0.097">0.097</option><option value="0.096">0.096</option><option value="0.095">0.095</option><option value="0.094">0.094</option><option value="0.093">0.093</option><option value="0.092">0.092</option><option value="0.091">0.091</option><option value="0.09">0.09</option><option value="0.089">0.089</option><option value="0.088">0.088</option><option value="0.087">0.087</option><option value="0.086">0.086</option><option value="0.085">0.085</option><option value="0.084">0.084</option><option value="0.083">0.083</option><option value="0.082">0.082</option><option value="0.081">0.081</option><option value="0.08">0.08</option><option value="0.079">0.079</option><option value="0.078">0.078</option><option value="0.077">0.077</option><option value="0.076">0.076</option><option value="0.075">0.075</option><option value="0.074">0.074</option><option value="0.073">0.073</option><option value="0.072">0.072</option><option value="0.071">0.071</option><option value="0.07">0.07</option><option value="0.069">0.069</option><option value="0.068">0.068</option><option value="0.067">0.067</option><option value="0.066">0.066</option><option value="0.065">0.065</option><option value="0.064">0.064</option><option value="0.063">0.063</option><option value="0.062">0.062</option><option value="0.061">0.061</option><option value="0.06">0.06</option><option value="0.059">0.059</option><option value="0.058">0.058</option><option value="0.057">0.057</option><option value="0.056">0.056</option><option value="0.055">0.055</option><option value="0.054">0.054</option><option value="0.053">0.053</option><option value="0.052">0.052</option><option value="0.051">0.051</option><option value="0.05">0.05</option><option value="0.049">0.049</option><option value="0.048">0.048</option><option value="0.047">0.047</option><option value="0.046">0.046</option><option value="0.045">0.045</option><option value="0.044">0.044</option><option value="0.043">0.043</option><option value="0.042">0.042</option><option value="0.041">0.041</option><option value="0.04">0.04</option><option value="0.039">0.039</option><option value="0.038">0.038</option><option value="0.037">0.037</option><option value="0.036">0.036</option><option value="0.035">0.035</option><option value="0.034">0.034</option><option value="0.033">0.033</option><option value="0.032">0.032</option><option value="0.031">0.031</option><option value="0.03">0.03</option><option value="0.029">0.029</option><option value="0.028">0.028</option><option value="0.027">0.027</option><option value="0.026">0.026</option><option value="0.025">0.025</option><option value="0.024">0.024</option><option value="0.023">0.023</option><option value="0.022">0.022</option><option value="0.021">0.021</option><option value="0.02">0.02</option><option value="0.019">0.019</option><option value="0.018">0.018</option><option value="0.017">0.017</option><option value="0.016">0.016</option><option value="0.015">0.015</option><option value="0.014">0.014</option><option value="0.013">0.013</option><option value="0.012">0.012</option><option value="0.011">0.011</option><option value="0.01">0.01</option><option value="0.009">0.009</option><option value="0.008">0.008</option><option value="0.007">0.007</option><option value="0.006">0.006</option><option value="0.005">0.005</option><option value="0.004">0.004</option><option value="0.003">0.003</option><option value="0.002">0.002</option><option value="0.001">0.001</option><option value="0" selected="">0</option></select></td><td><select name="fs_7" id="fs_7" data-pid="0" class="chosen-select" data-placeholder="赔率" style="width:100px;"><option value="40">40</option><option value="40.05">40.05</option><option value="40.1">40.1</option><option value="40.15">40.15</option><option value="40.2">40.2</option><option value="40.25">40.25</option><option value="40.3">40.3</option><option value="40.35">40.35</option><option value="40.4">40.4</option><option value="40.45">40.45</option><option value="40.5">40.5</option><option value="40.55">40.55</option><option value="40.6">40.6</option><option value="40.65">40.65</option><option value="40.7">40.7</option><option value="40.75">40.75</option><option value="40.8">40.8</option><option value="40.85">40.85</option><option value="40.9">40.9</option><option value="40.95">40.95</option><option value="41">41</option><option value="41.05">41.05</option><option value="41.1">41.1</option><option value="41.15">41.15</option><option value="41.2">41.2</option><option value="41.25">41.25</option><option value="41.3">41.3</option><option value="41.35">41.35</option><option value="41.4">41.4</option><option value="41.45">41.45</option><option value="41.5">41.5</option><option value="41.55">41.55</option><option value="41.6">41.6</option><option value="41.65">41.65</option><option value="41.7">41.7</option><option value="41.75">41.75</option><option value="41.8">41.8</option><option value="41.85">41.85</option><option value="41.9">41.9</option><option value="41.95">41.95</option><option value="42">42</option><option value="42.05">42.05</option><option value="42.1">42.1</option><option value="42.15">42.15</option><option value="42.2">42.2</option><option value="42.25">42.25</option><option value="42.3">42.3</option><option value="42.35">42.35</option><option value="42.4">42.4</option><option value="42.45">42.45</option><option value="42.5">42.5</option><option value="42.55">42.55</option><option value="42.6">42.6</option><option value="42.65">42.65</option><option value="42.7">42.7</option><option value="42.75">42.75</option><option value="42.8">42.8</option><option value="42.85">42.85</option><option value="42.9">42.9</option><option value="42.95">42.95</option><option value="43">43</option><option value="43.05">43.05</option><option value="43.1">43.1</option><option value="43.15">43.15</option><option value="43.2">43.2</option><option value="43.25">43.25</option><option value="43.3">43.3</option><option value="43.35">43.35</option><option value="43.4">43.4</option><option value="43.45">43.45</option><option value="43.5">43.5</option><option value="43.55">43.55</option><option value="43.6">43.6</option><option value="43.65">43.65</option><option value="43.7">43.7</option><option value="43.75">43.75</option><option value="43.8">43.8</option><option value="43.85">43.85</option><option value="43.9">43.9</option><option value="43.95">43.95</option><option value="44">44</option><option value="44.05">44.05</option><option value="44.1">44.1</option><option value="44.15">44.15</option><option value="44.2">44.2</option><option value="44.25">44.25</option><option value="44.3">44.3</option><option value="44.35">44.35</option><option value="44.4">44.4</option><option value="44.45">44.45</option><option value="44.5">44.5</option><option value="44.55">44.55</option><option value="44.6">44.6</option><option value="44.65">44.65</option><option value="44.7">44.7</option><option value="44.75">44.75</option><option value="44.8">44.8</option><option value="44.85">44.85</option><option value="44.9">44.9</option><option value="44.95">44.95</option><option value="45">45</option><option value="45.05">45.05</option><option value="45.1">45.1</option><option value="45.15">45.15</option><option value="45.2">45.2</option><option value="45.25">45.25</option><option value="45.3">45.3</option><option value="45.35">45.35</option><option value="45.4">45.4</option><option value="45.45">45.45</option><option value="45.5">45.5</option><option value="45.55">45.55</option><option value="45.6">45.6</option><option value="45.65">45.65</option><option value="45.7">45.7</option><option value="45.75">45.75</option><option value="45.8">45.8</option><option value="45.85">45.85</option><option value="45.9">45.9</option><option value="45.95">45.95</option><option value="46">46</option><option value="46.05">46.05</option><option value="46.1">46.1</option><option value="46.15">46.15</option><option value="46.2">46.2</option><option value="46.25">46.25</option><option value="46.3">46.3</option><option value="46.35">46.35</option><option value="46.4">46.4</option><option value="46.45">46.45</option><option value="46.5">46.5</option><option value="46.55">46.55</option><option value="46.6">46.6</option><option value="46.65">46.65</option><option value="46.7">46.7</option><option value="46.75">46.75</option><option value="46.8">46.8</option><option value="46.85">46.85</option><option value="46.9">46.9</option><option value="46.95">46.95</option><option value="47">47</option><option value="47.05" selected="">47.05</option></select></td></tr><tr><td class="mred">四字现</td><td>1</td><td>374/748/1496/374</td><td>50</td><td>1000</td><td><select name="hs_107" id="hs_107" data-pid="0" class="chosen-select" data-placeholder="交易回水" style="width:100px;"><option value="0.185">0.185</option><option value="0.184">0.184</option><option value="0.183">0.183</option><option value="0.182">0.182</option><option value="0.181">0.181</option><option value="0.18">0.18</option><option value="0.179">0.179</option><option value="0.178">0.178</option><option value="0.177">0.177</option><option value="0.176">0.176</option><option value="0.175">0.175</option><option value="0.174">0.174</option><option value="0.173">0.173</option><option value="0.172">0.172</option><option value="0.171">0.171</option><option value="0.17">0.17</option><option value="0.169">0.169</option><option value="0.168">0.168</option><option value="0.167">0.167</option><option value="0.166">0.166</option><option value="0.165">0.165</option><option value="0.164">0.164</option><option value="0.163">0.163</option><option value="0.162">0.162</option><option value="0.161">0.161</option><option value="0.16">0.16</option><option value="0.159">0.159</option><option value="0.158">0.158</option><option value="0.157">0.157</option><option value="0.156">0.156</option><option value="0.155">0.155</option><option value="0.154">0.154</option><option value="0.153">0.153</option><option value="0.152">0.152</option><option value="0.151">0.151</option><option value="0.15">0.15</option><option value="0.149">0.149</option><option value="0.148">0.148</option><option value="0.147">0.147</option><option value="0.146">0.146</option><option value="0.145">0.145</option><option value="0.144">0.144</option><option value="0.143">0.143</option><option value="0.142">0.142</option><option value="0.141">0.141</option><option value="0.14">0.14</option><option value="0.139">0.139</option><option value="0.138">0.138</option><option value="0.137">0.137</option><option value="0.136">0.136</option><option value="0.135">0.135</option><option value="0.134">0.134</option><option value="0.133">0.133</option><option value="0.132">0.132</option><option value="0.131">0.131</option><option value="0.13">0.13</option><option value="0.129">0.129</option><option value="0.128">0.128</option><option value="0.127">0.127</option><option value="0.126">0.126</option><option value="0.125">0.125</option><option value="0.124">0.124</option><option value="0.123">0.123</option><option value="0.122">0.122</option><option value="0.121">0.121</option><option value="0.12">0.12</option><option value="0.119">0.119</option><option value="0.118">0.118</option><option value="0.117">0.117</option><option value="0.116">0.116</option><option value="0.115">0.115</option><option value="0.114">0.114</option><option value="0.113">0.113</option><option value="0.112">0.112</option><option value="0.111">0.111</option><option value="0.11">0.11</option><option value="0.109">0.109</option><option value="0.108">0.108</option><option value="0.107">0.107</option><option value="0.106">0.106</option><option value="0.105">0.105</option><option value="0.104">0.104</option><option value="0.103">0.103</option><option value="0.102">0.102</option><option value="0.101">0.101</option><option value="0.1">0.1</option><option value="0.099">0.099</option><option value="0.098">0.098</option><option value="0.097">0.097</option><option value="0.096">0.096</option><option value="0.095">0.095</option><option value="0.094">0.094</option><option value="0.093">0.093</option><option value="0.092">0.092</option><option value="0.091">0.091</option><option value="0.09">0.09</option><option value="0.089">0.089</option><option value="0.088">0.088</option><option value="0.087">0.087</option><option value="0.086">0.086</option><option value="0.085">0.085</option><option value="0.084">0.084</option><option value="0.083">0.083</option><option value="0.082">0.082</option><option value="0.081">0.081</option><option value="0.08">0.08</option><option value="0.079">0.079</option><option value="0.078">0.078</option><option value="0.077">0.077</option><option value="0.076">0.076</option><option value="0.075">0.075</option><option value="0.074">0.074</option><option value="0.073">0.073</option><option value="0.072">0.072</option><option value="0.071">0.071</option><option value="0.07">0.07</option><option value="0.069">0.069</option><option value="0.068">0.068</option><option value="0.067">0.067</option><option value="0.066">0.066</option><option value="0.065">0.065</option><option value="0.064">0.064</option><option value="0.063">0.063</option><option value="0.062">0.062</option><option value="0.061">0.061</option><option value="0.06">0.06</option><option value="0.059">0.059</option><option value="0.058">0.058</option><option value="0.057">0.057</option><option value="0.056">0.056</option><option value="0.055">0.055</option><option value="0.054">0.054</option><option value="0.053">0.053</option><option value="0.052">0.052</option><option value="0.051">0.051</option><option value="0.05">0.05</option><option value="0.049">0.049</option><option value="0.048">0.048</option><option value="0.047">0.047</option><option value="0.046">0.046</option><option value="0.045">0.045</option><option value="0.044">0.044</option><option value="0.043">0.043</option><option value="0.042">0.042</option><option value="0.041">0.041</option><option value="0.04">0.04</option><option value="0.039">0.039</option><option value="0.038">0.038</option><option value="0.037">0.037</option><option value="0.036">0.036</option><option value="0.035">0.035</option><option value="0.034">0.034</option><option value="0.033">0.033</option><option value="0.032">0.032</option><option value="0.031">0.031</option><option value="0.03">0.03</option><option value="0.029">0.029</option><option value="0.028">0.028</option><option value="0.027">0.027</option><option value="0.026">0.026</option><option value="0.025">0.025</option><option value="0.024">0.024</option><option value="0.023">0.023</option><option value="0.022">0.022</option><option value="0.021">0.021</option><option value="0.02">0.02</option><option value="0.019">0.019</option><option value="0.018">0.018</option><option value="0.017">0.017</option><option value="0.016">0.016</option><option value="0.015">0.015</option><option value="0.014">0.014</option><option value="0.013">0.013</option><option value="0.012">0.012</option><option value="0.011">0.011</option><option value="0.01">0.01</option><option value="0.009">0.009</option><option value="0.008">0.008</option><option value="0.007">0.007</option><option value="0.006">0.006</option><option value="0.005">0.005</option><option value="0.004">0.004</option><option value="0.003">0.003</option><option value="0.002">0.002</option><option value="0.001">0.001</option><option value="0" selected="">0</option></select></td><td><select name="fs_107" id="fs_107" data-pid="0" class="chosen-select" data-placeholder="赔率" style="width:100px;"><option value="300">300</option><option value="300.4">300.4</option><option value="300.8">300.8</option><option value="301.2">301.2</option><option value="301.6">301.6</option><option value="302">302</option><option value="302.4">302.4</option><option value="302.8">302.8</option><option value="303.2">303.2</option><option value="303.6">303.6</option><option value="304">304</option><option value="304.4">304.4</option><option value="304.8">304.8</option><option value="305.2">305.2</option><option value="305.6">305.6</option><option value="306">306</option><option value="306.4">306.4</option><option value="306.8">306.8</option><option value="307.2">307.2</option><option value="307.6">307.6</option><option value="308">308</option><option value="308.4">308.4</option><option value="308.8">308.8</option><option value="309.2">309.2</option><option value="309.6">309.6</option><option value="310">310</option><option value="310.4">310.4</option><option value="310.8">310.8</option><option value="311.2">311.2</option><option value="311.6">311.6</option><option value="312">312</option><option value="312.4">312.4</option><option value="312.8">312.8</option><option value="313.2">313.2</option><option value="313.6">313.6</option><option value="314">314</option><option value="314.4">314.4</option><option value="314.8">314.8</option><option value="315.2">315.2</option><option value="315.6">315.6</option><option value="316">316</option><option value="316.4">316.4</option><option value="316.8">316.8</option><option value="317.2">317.2</option><option value="317.6">317.6</option><option value="318">318</option><option value="318.4">318.4</option><option value="318.8">318.8</option><option value="319.2">319.2</option><option value="319.6">319.6</option><option value="320">320</option><option value="320.4">320.4</option><option value="320.8">320.8</option><option value="321.2">321.2</option><option value="321.6">321.6</option><option value="322">322</option><option value="322.4">322.4</option><option value="322.8">322.8</option><option value="323.2">323.2</option><option value="323.6">323.6</option><option value="324">324</option><option value="324.4">324.4</option><option value="324.8">324.8</option><option value="325.2">325.2</option><option value="325.6">325.6</option><option value="326">326</option><option value="326.4">326.4</option><option value="326.8">326.8</option><option value="327.2">327.2</option><option value="327.6">327.6</option><option value="328">328</option><option value="328.4">328.4</option><option value="328.8">328.8</option><option value="329.2">329.2</option><option value="329.6">329.6</option><option value="330">330</option><option value="330.4">330.4</option><option value="330.8">330.8</option><option value="331.2">331.2</option><option value="331.6">331.6</option><option value="332">332</option><option value="332.4">332.4</option><option value="332.8">332.8</option><option value="333.2">333.2</option><option value="333.6">333.6</option><option value="334">334</option><option value="334.4">334.4</option><option value="334.8">334.8</option><option value="335.2">335.2</option><option value="335.6">335.6</option><option value="336">336</option><option value="336.4">336.4</option><option value="336.8">336.8</option><option value="337.2">337.2</option><option value="337.6">337.6</option><option value="338">338</option><option value="338.4">338.4</option><option value="338.8">338.8</option><option value="339.2">339.2</option><option value="339.6">339.6</option><option value="340">340</option><option value="340.4">340.4</option><option value="340.8">340.8</option><option value="341.2">341.2</option><option value="341.6">341.6</option><option value="342">342</option><option value="342.4">342.4</option><option value="342.8">342.8</option><option value="343.2">343.2</option><option value="343.6">343.6</option><option value="344">344</option><option value="344.4">344.4</option><option value="344.8">344.8</option><option value="345.2">345.2</option><option value="345.6">345.6</option><option value="346">346</option><option value="346.4">346.4</option><option value="346.8">346.8</option><option value="347.2">347.2</option><option value="347.6">347.6</option><option value="348">348</option><option value="348.4">348.4</option><option value="348.8">348.8</option><option value="349.2">349.2</option><option value="349.6">349.6</option><option value="350">350</option><option value="350.4">350.4</option><option value="350.8">350.8</option><option value="351.2">351.2</option><option value="351.6">351.6</option><option value="352">352</option><option value="352.4">352.4</option><option value="352.8">352.8</option><option value="353.2">353.2</option><option value="353.6">353.6</option><option value="354">354</option><option value="354.4">354.4</option><option value="354.8">354.8</option><option value="355.2">355.2</option><option value="355.6">355.6</option><option value="356">356</option><option value="356.4">356.4</option><option value="356.8">356.8</option><option value="357.2">357.2</option><option value="357.6">357.6</option><option value="358">358</option><option value="358.4">358.4</option><option value="358.8">358.8</option><option value="359.2">359.2</option><option value="359.6">359.6</option><option value="360">360</option><option value="360.4">360.4</option><option value="360.8">360.8</option><option value="361.2">361.2</option><option value="361.6">361.6</option><option value="362">362</option><option value="362.4">362.4</option><option value="362.8">362.8</option><option value="363.2">363.2</option><option value="363.6">363.6</option><option value="364">364</option><option value="364.4">364.4</option><option value="364.8">364.8</option><option value="365.2">365.2</option><option value="365.6">365.6</option><option value="366">366</option><option value="366.4">366.4</option><option value="366.8">366.8</option><option value="367.2">367.2</option><option value="367.6">367.6</option><option value="368">368</option><option value="368.4">368.4</option><option value="368.8">368.8</option><option value="369.2">369.2</option><option value="369.6">369.6</option><option value="370">370</option><option value="370.4">370.4</option><option value="370.8">370.8</option><option value="371.2">371.2</option><option value="371.6">371.6</option><option value="372">372</option><option value="372.4">372.4</option><option value="372.8">372.8</option><option value="373.2">373.2</option><option value="373.6">373.6</option><option value="374" selected="">374</option></select></td></tr></tbody>
     </table>
     <div class="clear"></div>
    </div>
   </li>
   <li id="tab_award" style="display:none">
    <div class="main_center main_center_erziding">
     <table class="table table-bordered table-condensed table-hover tablecenter">
      <thead>
      <tr class="xiazhukuang">
       <th colspan="9">开奖号码</th>
      </tr>
      <tr id="awardnumberstr" class="xiazhukuang2">
       <th>开奖时间</th>
       <th>期号</th>
       <th>仟</th>
       <th>佰</th>
       <th>拾</th>
       <th>个</th>
       <th>球5</th>
       <th style="display: none;">球6</th>
       <th style="display: none;">球7</th>
      </tr>
      </thead>
      <tbody id="awardList">
      <?php foreach($term_all as $k => $v){ ?>
      <?php if($v['statu'] == 3 ||$v['statu'] == 1){ ?>
      <tr><td>--</td><td><?php echo $v['term_number'] ?></td><td><div class="periodImg periodImg_5"></div></td><td><div class="periodImg periodImg_5"></div></td><td><div class="periodImg periodImg_5"></div></td><td><div class="periodImg periodImg_5"></div></td><td><div class="periodImg periodImg_5"></div></td></tr>
      <?php } ?>
      <?php if($v['statu'] == 2){ ?>
      <tr><td><?php echo date('Y-m-d H:t:s',$v['opening_time']); ?></td><td><?php echo $v['term_number'] ?></td><td><div class="periodImg periodImg_1"><?php echo $v['thousand'] ?></div></td><td><div class="periodImg periodImg_1"><?php echo $v['hundred'] ?></div></td><td><div class="periodImg periodImg_1"><?php echo $v['ten'] ?></div></td><td><div class="periodImg periodImg_1"><?php echo $v['individual'] ?></div></td><td>
       <div class="periodImg periodImg_1"><?php  echo trim($v['b_num']); ?></div></td></tr>
      <?php } ?>
<?php } ?>


      <!--<tr><td>2018-04-19 20:32</td><td>18102</td><td><div class="periodImg periodImg_1">9</div></td><td><div class="periodImg periodImg_1">3</div></td><td><div class="periodImg periodImg_1">8</div></td><td><div class="periodImg periodImg_1">3</div></td><td><div class="periodImg periodImg_1">3</div></td></tr><tr><td>2018-04-18 20:34</td><td>18101</td><td><div class="periodImg periodImg_1">7</div></td><td><div class="periodImg periodImg_1">9</div></td><td><div class="periodImg periodImg_1">8</div></td><td><div class="periodImg periodImg_1">3</div></td><td><div class="periodImg periodImg_1">9</div></td></tr><tr><td>2018-04-17 20:34</td><td>18100</td><td><div class="periodImg periodImg_1">8</div></td><td><div class="periodImg periodImg_1">3</div></td><td><div class="periodImg periodImg_1">0</div></td><td><div class="periodImg periodImg_1">5</div></td><td><div class="periodImg periodImg_1">9</div></td></tr><tr><td>2018-04-16 20:34</td><td>18099</td><td><div class="periodImg periodImg_1">3</div></td><td><div class="periodImg periodImg_1">3</div></td><td><div class="periodImg periodImg_1">2</div></td><td><div class="periodImg periodImg_1">8</div></td><td><div class="periodImg periodImg_1">5</div></td></tr><tr><td>2018-04-15 20:34</td><td>18098</td><td><div class="periodImg periodImg_1">3</div></td><td><div class="periodImg periodImg_1">9</div></td><td><div class="periodImg periodImg_1">4</div></td><td><div class="periodImg periodImg_1">4</div></td><td><div class="periodImg periodImg_1">0</div></td></tr><tr><td>2018-04-14 20:34</td><td>18097</td><td><div class="periodImg periodImg_1">3</div></td><td><div class="periodImg periodImg_1">0</div></td><td><div class="periodImg periodImg_1">4</div></td><td><div class="periodImg periodImg_1">2</div></td><td><div class="periodImg periodImg_1">1</div></td></tr><tr><td>2018-04-13 20:34</td><td>18096</td><td><div class="periodImg periodImg_1">4</div></td><td><div class="periodImg periodImg_1">7</div></td><td><div class="periodImg periodImg_1">5</div></td><td><div class="periodImg periodImg_1">9</div></td><td><div class="periodImg periodImg_1">3</div></td></tr><tr><td>2018-04-12 20:32</td><td>18095</td><td><div class="periodImg periodImg_1">8</div></td><td><div class="periodImg periodImg_1">9</div></td><td><div class="periodImg periodImg_1">4</div></td><td><div class="periodImg periodImg_1">2</div></td><td><div class="periodImg periodImg_1">9</div></td></tr><tr><td>2018-04-11 20:35</td><td>18094</td><td><div class="periodImg periodImg_1">7</div></td><td><div class="periodImg periodImg_1">3</div></td><td><div class="periodImg periodImg_1">4</div></td><td><div class="periodImg periodImg_1">2</div></td><td><div class="periodImg periodImg_1">1</div></td></tr><tr><td>2018-04-10 20:34</td><td>18093</td><td><div class="periodImg periodImg_1">5</div></td><td><div class="periodImg periodImg_1">5</div></td><td><div class="periodImg periodImg_1">3</div></td><td><div class="periodImg periodImg_1">0</div></td><td><div class="periodImg periodImg_1">7</div></td></tr><tr><td>2018-04-09 20:34</td><td>18092</td><td><div class="periodImg periodImg_1">1</div></td><td><div class="periodImg periodImg_1">5</div></td><td><div class="periodImg periodImg_1">3</div></td><td><div class="periodImg periodImg_1">5</div></td><td><div class="periodImg periodImg_1">0</div></td></tr><tr><td>2018-04-08 20:34</td><td>18091</td><td><div class="periodImg periodImg_1">0</div></td><td><div class="periodImg periodImg_1">7</div></td><td><div class="periodImg periodImg_1">1</div></td><td><div class="periodImg periodImg_1">6</div></td><td><div class="periodImg periodImg_1">6</div></td></tr><tr><td>2018-04-07 20:34</td><td>18090</td><td><div class="periodImg periodImg_1">9</div></td><td><div class="periodImg periodImg_1">4</div></td><td><div class="periodImg periodImg_1">2</div></td><td><div class="periodImg periodImg_1">5</div></td><td><div class="periodImg periodImg_1">1</div></td></tr><tr><td>2018-04-06 20:34</td><td>18089</td><td><div class="periodImg periodImg_1">7</div></td><td><div class="periodImg periodImg_1">7</div></td><td><div class="periodImg periodImg_1">3</div></td><td><div class="periodImg periodImg_1">6</div></td><td><div class="periodImg periodImg_1">0</div></td></tr><tr><td>2018-04-05 20:32</td><td>18088</td><td><div class="periodImg periodImg_1">2</div></td><td><div class="periodImg periodImg_1">1</div></td><td><div class="periodImg periodImg_1">2</div></td><td><div class="periodImg periodImg_1">7</div></td><td><div class="periodImg periodImg_1">9</div></td></tr><tr><td>2018-04-04 20:34</td><td>18087</td><td><div class="periodImg periodImg_1">8</div></td><td><div class="periodImg periodImg_1">2</div></td><td><div class="periodImg periodImg_1">7</div></td><td><div class="periodImg periodImg_1">8</div></td><td><div class="periodImg periodImg_1">6</div></td></tr><tr><td>2018-04-03 20:34</td><td>18086</td><td><div class="periodImg periodImg_1">3</div></td><td><div class="periodImg periodImg_1">9</div></td><td><div class="periodImg periodImg_1">1</div></td><td><div class="periodImg periodImg_1">6</div></td><td><div class="periodImg periodImg_1">9</div></td></tr><tr><td>2018-04-02 20:34</td><td>18085</td><td><div class="periodImg periodImg_1">3</div></td><td><div class="periodImg periodImg_1">3</div></td><td><div class="periodImg periodImg_1">4</div></td><td><div class="periodImg periodImg_1">2</div></td><td><div class="periodImg periodImg_1">5</div></td></tr><tr><td>2018-04-01 20:34</td><td>18084</td><td><div class="periodImg periodImg_1">5</div></td><td><div class="periodImg periodImg_1">5</div></td><td><div class="periodImg periodImg_1">4</div></td><td><div class="periodImg periodImg_1">0</div></td><td><div class="periodImg periodImg_1">6</div></td></tr><tr><td>2018-03-31 20:34</td><td>18083</td><td><div class="periodImg periodImg_1">7</div></td><td><div class="periodImg periodImg_1">5</div></td><td><div class="periodImg periodImg_1">2</div></td><td><div class="periodImg periodImg_1">5</div></td><td><div class="periodImg periodImg_1">7</div></td></tr><tr><td>2018-03-30 20:34</td><td>18082</td><td><div class="periodImg periodImg_1">5</div></td><td><div class="periodImg periodImg_1">7</div></td><td><div class="periodImg periodImg_1">4</div></td><td><div class="periodImg periodImg_1">3</div></td><td><div class="periodImg periodImg_1">7</div></td></tr><tr><td>2018-03-29 20:32</td><td>18081</td><td><div class="periodImg periodImg_1">9</div></td><td><div class="periodImg periodImg_1">4</div></td><td><div class="periodImg periodImg_1">8</div></td><td><div class="periodImg periodImg_1">4</div></td><td><div class="periodImg periodImg_1">8</div></td></tr><tr><td>2018-03-28 20:34</td><td>18080</td><td><div class="periodImg periodImg_1">7</div></td><td><div class="periodImg periodImg_1">4</div></td><td><div class="periodImg periodImg_1">9</div></td><td><div class="periodImg periodImg_1">6</div></td><td><div class="periodImg periodImg_1">5</div></td></tr><tr><td>2018-03-27 20:34</td><td>18079</td><td><div class="periodImg periodImg_1">7</div></td><td><div class="periodImg periodImg_1">3</div></td><td><div class="periodImg periodImg_1">8</div></td><td><div class="periodImg periodImg_1">8</div></td><td><div class="periodImg periodImg_1">0</div></td></tr><tr><td>2018-03-26 20:34</td><td>18078</td><td><div class="periodImg periodImg_1">2</div></td><td><div class="periodImg periodImg_1">9</div></td><td><div class="periodImg periodImg_1">4</div></td><td><div class="periodImg periodImg_1">2</div></td><td><div class="periodImg periodImg_1">0</div></td></tr><tr><td>2018-03-25 20:34</td><td>18077</td><td><div class="periodImg periodImg_1">1</div></td><td><div class="periodImg periodImg_1">3</div></td><td><div class="periodImg periodImg_1">7</div></td><td><div class="periodImg periodImg_1">9</div></td><td><div class="periodImg periodImg_1">9</div></td></tr><tr><td>2018-03-24 20:34</td><td>18076</td><td><div class="periodImg periodImg_1">3</div></td><td><div class="periodImg periodImg_1">2</div></td><td><div class="periodImg periodImg_1">8</div></td><td><div class="periodImg periodImg_1">8</div></td><td><div class="periodImg periodImg_1">1</div></td></tr><tr><td>2018-03-23 20:34</td><td>18075</td><td><div class="periodImg periodImg_1">3</div></td><td><div class="periodImg periodImg_1">4</div></td><td><div class="periodImg periodImg_1">2</div></td><td><div class="periodImg periodImg_1">8</div></td><td><div class="periodImg periodImg_1">8</div></td></tr><tr><td>2018-03-22 20:32</td><td>18074</td><td><div class="periodImg periodImg_1">9</div></td><td><div class="periodImg periodImg_1">4</div></td><td><div class="periodImg periodImg_1">1</div></td><td><div class="periodImg periodImg_1">6</div></td><td><div class="periodImg periodImg_1">4</div></td></tr><tr><td>2018-03-21 20:34</td><td>18073</td><td><div class="periodImg periodImg_1">7</div></td><td><div class="periodImg periodImg_1">4</div></td><td><div class="periodImg periodImg_1">8</div></td><td><div class="periodImg periodImg_1">1</div></td><td><div class="periodImg periodImg_1">9</div></td></tr><tr><td>2018-03-20 20:34</td><td>18072</td><td><div class="periodImg periodImg_1">4</div></td><td><div class="periodImg periodImg_1">1</div></td><td><div class="periodImg periodImg_1">2</div></td><td><div class="periodImg periodImg_1">2</div></td><td><div class="periodImg periodImg_1">9</div></td></tr><tr><td>2018-03-19 20:34</td><td>18071</td><td><div class="periodImg periodImg_1">5</div></td><td><div class="periodImg periodImg_1">0</div></td><td><div class="periodImg periodImg_1">3</div></td><td><div class="periodImg periodImg_1">4</div></td><td><div class="periodImg periodImg_1">0</div></td></tr><tr><td>2018-03-18 20:34</td><td>18070</td><td><div class="periodImg periodImg_1">8</div></td><td><div class="periodImg periodImg_1">9</div></td><td><div class="periodImg periodImg_1">0</div></td><td><div class="periodImg periodImg_1">9</div></td><td><div class="periodImg periodImg_1">1</div></td></tr><tr><td>2018-03-17 20:34</td><td>18069</td><td><div class="periodImg periodImg_1">1</div></td><td><div class="periodImg periodImg_1">4</div></td><td><div class="periodImg periodImg_1">1</div></td><td><div class="periodImg periodImg_1">1</div></td><td><div class="periodImg periodImg_1">4</div></td></tr><tr><td>2018-03-16 20:34</td><td>18068</td><td><div class="periodImg periodImg_1">9</div></td><td><div class="periodImg periodImg_1">1</div></td><td><div class="periodImg periodImg_1">1</div></td><td><div class="periodImg periodImg_1">2</div></td><td><div class="periodImg periodImg_1">8</div></td></tr><tr><td>2018-03-15 20:32</td><td>18067</td><td><div class="periodImg periodImg_1">1</div></td><td><div class="periodImg periodImg_1">7</div></td><td><div class="periodImg periodImg_1">1</div></td><td><div class="periodImg periodImg_1">4</div></td><td><div class="periodImg periodImg_1">0</div></td></tr><tr><td>2018-03-14 20:34</td><td>18066</td><td><div class="periodImg periodImg_1">2</div></td><td><div class="periodImg periodImg_1">2</div></td><td><div class="periodImg periodImg_1">6</div></td><td><div class="periodImg periodImg_1">1</div></td><td><div class="periodImg periodImg_1">6</div></td></tr><tr><td>2018-03-13 20:34</td><td>18065</td><td><div class="periodImg periodImg_1">2</div></td><td><div class="periodImg periodImg_1">3</div></td><td><div class="periodImg periodImg_1">8</div></td><td><div class="periodImg periodImg_1">9</div></td><td><div class="periodImg periodImg_1">6</div></td></tr><tr><td>2018-03-12 20:34</td><td>18064</td><td><div class="periodImg periodImg_1">2</div></td><td><div class="periodImg periodImg_1">3</div></td><td><div class="periodImg periodImg_1">4</div></td><td><div class="periodImg periodImg_1">2</div></td><td><div class="periodImg periodImg_1">9</div></td></tr><tr><td>2018-03-11 20:34</td><td>18063</td><td><div class="periodImg periodImg_1">8</div></td><td><div class="periodImg periodImg_1">2</div></td><td><div class="periodImg periodImg_1">0</div></td><td><div class="periodImg periodImg_1">3</div></td><td><div class="periodImg periodImg_1">9</div></td></tr><tr><td>2018-03-10 20:35</td><td>18062</td><td><div class="periodImg periodImg_1">8</div></td><td><div class="periodImg periodImg_1">3</div></td><td><div class="periodImg periodImg_1">6</div></td><td><div class="periodImg periodImg_1">5</div></td><td><div class="periodImg periodImg_1">7</div></td></tr><tr><td>2018-03-09 20:34</td><td>18061</td><td><div class="periodImg periodImg_1">1</div></td><td><div class="periodImg periodImg_1">3</div></td><td><div class="periodImg periodImg_1">4</div></td><td><div class="periodImg periodImg_1">8</div></td><td><div class="periodImg periodImg_1">5</div></td></tr><tr><td>2018-03-08 20:32</td><td>18060</td><td><div class="periodImg periodImg_1">7</div></td><td><div class="periodImg periodImg_1">7</div></td><td><div class="periodImg periodImg_1">4</div></td><td><div class="periodImg periodImg_1">8</div></td><td><div class="periodImg periodImg_1">3</div></td></tr><tr><td>2018-03-07 20:34</td><td>18059</td><td><div class="periodImg periodImg_1">7</div></td><td><div class="periodImg periodImg_1">5</div></td><td><div class="periodImg periodImg_1">5</div></td><td><div class="periodImg periodImg_1">6</div></td><td><div class="periodImg periodImg_1">8</div></td></tr><tr><td>2018-03-06 20:34</td><td>18058</td><td><div class="periodImg periodImg_1">4</div></td><td><div class="periodImg periodImg_1">9</div></td><td><div class="periodImg periodImg_1">7</div></td><td><div class="periodImg periodImg_1">7</div></td><td><div class="periodImg periodImg_1">5</div></td></tr><tr><td>2018-03-05 20:34</td><td>18057</td><td><div class="periodImg periodImg_1">2</div></td><td><div class="periodImg periodImg_1">5</div></td><td><div class="periodImg periodImg_1">2</div></td><td><div class="periodImg periodImg_1">3</div></td><td><div class="periodImg periodImg_1">4</div></td></tr><tr><td>2018-03-04 20:34</td><td>18056</td><td><div class="periodImg periodImg_1">4</div></td><td><div class="periodImg periodImg_1">4</div></td><td><div class="periodImg periodImg_1">6</div></td><td><div class="periodImg periodImg_1">2</div></td><td><div class="periodImg periodImg_1">4</div></td></tr><tr><td>2018-03-03 20:34</td><td>18055</td><td><div class="periodImg periodImg_1">0</div></td><td><div class="periodImg periodImg_1">4</div></td><td><div class="periodImg periodImg_1">3</div></td><td><div class="periodImg periodImg_1">7</div></td><td><div class="periodImg periodImg_1">8</div></td></tr><tr><td>2018-03-02 20:34</td><td>18054</td><td><div class="periodImg periodImg_1">6</div></td><td><div class="periodImg periodImg_1">6</div></td><td><div class="periodImg periodImg_1">3</div></td><td><div class="periodImg periodImg_1">9</div></td><td><div class="periodImg periodImg_1">9</div></td></tr><tr><td>2018-03-01 20:32</td><td>18053</td><td><div class="periodImg periodImg_1">8</div></td><td><div class="periodImg periodImg_1">2</div></td><td><div class="periodImg periodImg_1">7</div></td><td><div class="periodImg periodImg_1">4</div></td><td><div class="periodImg periodImg_1">9</div></td></tr>-->
      </tbody>
     </table>
     <div class="clear"></div>
    </div>
   </li>
   <li id="tab_kuaida">
    <div class="main_center main_center_kuaida">
     <table class="table table-bordered table-condensed table-hover tablecenter">
      <thead>
      <tr class="xiazhukuang">
       <th colspan="7">下注框</th>
      </tr>
      <tr class="xiazhukuang2">
       <th width="12%">彩种</th>
       <th width="22%">注单编号</th>
       <th width="16%">号码</th>
       <th width="15%">赔率</th>
       <th width="15%">金额</th>
       <th width="10%">状态</th>
       <th width="10%"><label class="checkbox">全选<input id="checkboxALLID" type="checkbox"></label><button class="btn btnTuima" id="xiazhutuima" type="button">退码</button></th>
      </tr>
      </thead>
      <tbody id="SoonOrder">
      <?php if(!empty($bets)){ ?>
      <?php foreach($bets as $k => $v){ ?>
      <tr><td><?php echo $v['color_species']; ?></td><td class="number"><?php echo $v['term_num']; ?></td><td class="frank"><?php echo $v['num']; ?></td><td class="money"><?php echo $v['odds']; ?></td><td><?php echo $v['num_m']; ?></td><td><?php if($v['status'] ==1){ echo '成功'; }else{ echo"退码"; }?></td><td><?php
 if($v['createtime']-time() > 600){ echo'--';}else{ echo '<input id="checkboxID<?php echo $v["id"]; ?>" type="checkbox" value="<?php echo $v["id"]; ?>">';}
       ?></td></tr>
      <?php } ?>
      <?php } ?>
      <?php if(empty($bets)) { ?>
      <tr class="buqiOrder"><td>&nbsp;</td><td>--</td><td class="number">--</td><td class="frank">--</td><td class="money">--</td><td>--</td><td>--</td></tr>
      <tr class="buqiOrder"><td>&nbsp;</td><td>--</td><td class="number">--</td><td class="frank">--</td><td class="money">--</td><td>--</td><td>--</td></tr>
      <tr class="buqiOrder"><td>&nbsp;</td><td>--</td><td class="number">--</td><td class="frank">--</td><td class="money">--</td><td>--</td><td>--</td></tr>
      <tr class="buqiOrder"><td>&nbsp;</td><td>--</td><td class="number">--</td><td class="frank">--</td><td class="money">--</td><td>--</td><td>--</td></tr>
      <tr class="buqiOrder"><td>&nbsp;</td><td>--</td><td class="number">--</td><td class="frank">--</td><td class="money">--</td><td>--</td><td>--</td></tr>
      <tr class="buqiOrder"><td>&nbsp;</td><td>--</td><td class="number">--</td><td class="frank">--</td><td class="money">--</td><td>--</td><td>--</td></tr>
      <tr class="buqiOrder"><td>&nbsp;</td><td>--</td><td class="number">--</td><td class="frank">--</td><td class="money">--</td><td>--</td><td>--</td></tr>
      <tr class="buqiOrder"><td>&nbsp;</td><td>--</td><td class="number">--</td><td class="frank">--</td><td class="money">--</td><td>--</td><td>--</td></tr>
      <tr class="buqiOrder"><td>&nbsp;</td><td>--</td><td class="number">--</td><td class="frank">--</td><td class="money">--</td><td>--</td><td>--</td></tr>
      <tr class="buqiOrder"><td>&nbsp;</td><td>--</td><td class="number">--</td><td class="frank">--</td><td class="money">--</td><td>--</td><td>--</td></tr>
      <?php } ?>
      </tbody>
     </table>
     <div class="xiazhu_main">
      <ul class="xiazhu_title">
       <li><label class="checkbox">四字现 <input id="sendsizi" type="checkbox" sock="1"></label></li>
       <li><label class="checkbox">全转 <input id="sendqz" type="checkbox"></label></li>
      </ul>
      <ul class="xiazhu_xia">
       <li>号码</li>
       <li><input type="text" onpaste="return false" id="sendnumber" name="number" autocomplete="off" pattern="\d" maxlength="4/" style="width:90px;height:40px" onkeyup="value=value.replace(/[^\d]/g,'')"> </li>
       <li class="xian" id="sendxian" style="display: none;">现</li>
       <li>金额</li>
       <li><input type="text" id="sendmoney" name="money" autocomplete="off" pattern="\d" maxlength="5/" style="width:90px;height:40px"onkeyup="value=value.replace(/[^\d]/g,'')" > </li>
       <li><button id="sendxiazhu" class="btn" type="button">确定下注</button></li>
       <li class="frankmoney" style="display: none;">赔率:<span class="frank" id="sfrank"></span> 可下:<span class="money" id="smoney"></span></li>
      </ul>
     </div>
     <div class="IE6height"></div>
    </div>

    <!-- main_center end -->
    <div class="main_right  main_right_kuaida">
     <div class="main_right2">
      <table class="table table-bordered table-condensed table-hover tablecenter">
       <thead>
       <tr class="xiazhukuang">
        <th colspan="3">目前停押号码
         <select name="s_issueon" id="s_issueon" class="chosen-select" data-placeholder="期号" style="width:100px;">
          <?php foreach($term as $k => $v){ ?>
          <option value="18101"><?php echo $v['term_number'];?></option>
          <?php } ?>
        </th>
       </tr>
       <tr class="xiazhukuang2">
        <th>号码</th>
        <th>金额</th>
        <th><label class="checkbox">全选<input id="stopnumberBox" type="checkbox"></label></th>
       </tr>
       </thead>
       <tbody id="sotpnumber" class="sotpnumber">
       <tr><td>--</td><td>--</td><td>--</td></tr><tr><td>--</td><td>--</td><td>--</td></tr>
       <tr><td>--</td><td>--</td><td>--</td></tr><tr><td>--</td><td>--</td><td>--</td></tr>
       <tr><td>--</td><td>--</td><td>--</td></tr><tr><td>--</td><td>--</td><td>--</td></tr>
       <tr><td>--</td><td>--</td><td>--</td></tr><tr><td>--</td><td>--</td><td>--</td></tr>
       <tr><td colspan="3" class="heji">笔数:0  总金额:0</td></tr></tbody>

      </table>
      <div id="stopnumberPager" class="pagination" style="display: none;"></div><div class="clear"></div>
      <div class="right_print">
       <button class="btn" id="stopnumberBtnPrint" type="button">打印</button> <button class="btn" id="stopnumberBtnDel" type="button">删除</button>
      </div>
      <table class="table table-bordered table-condensed table-hover tablecenter">
       <thead>
       <tr class="xiazhukuang">
        <th colspan="2">删除停押号码保留区</th>
       </tr>
       <tr class="xiazhukuang2">
        <th>号码</th>
        <th>金额</th>
       </tr>
       </thead>
       <tbody id="sotpnumberdel" class="sotpnumberdel">
       <tr><td>--</td><td>--</td></tr><tr><td>--</td><td>--</td></tr><tr><td>--</td><td>--</td></tr>
       <tr><td>--</td><td>--</td></tr><tr><td>--</td><td>--</td></tr><tr><td>--</td><td>--</td></tr>
       <tr><td>--</td><td>--</td></tr><tr><td>--</td><td>--</td></tr><tr><td colspan="2" class="heji">笔数:0  总金额:0</td></tr></tbody>
      </table>
      <div id="stopnumberdelPager" class="pagination" style="display: none;"></div><div class="clear"></div>
     </div>

    </div>
    <!-- main_right end -->
   </li>
   <li id="tab_kuaixuan" style="display:none">
    <!-- 快选 start -->
    <div class="main_center select_stop" style="display:none">
     <table class="table table-bordered table-condensed tablecenter">
      <thead><tr class="xiazhukuang"><th>系统提示</th></tr></thead>
      <tbody><tr><td style="height: 100px">已经关盘。</td></tr></tbody>
     </table>
    </div>
    <div class="main_center main_center_select main_center_kuaida">
     <table class="table table-bordered table-condensed table-hover tablecenter">
      <thead>
      <tr class="xiazhukuang">
       <th colspan="8">生成号码框</th>
      </tr>
      </thead>
      <tbody id="showselectnumber"><tr><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td></tr>
      <tr><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td></tr>
      <tr><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td></tr>
      <tr><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td></tr>
      <tr><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td></tr>
      <tr><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td></tr>
      <tr><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td></tr></tbody>
     </table>
     <div class="boltsoonselect" style="display:none">发送中断，请继续下注或者点（复位），才可以操作功能。</div>
     <div class="xiazhu_main">
      <ul class="xiazhu_title">
       <li>发送框</li>
      </ul>
      <ul class="xiazhu_xia">
       <li>金额</li>
       <li><input type="text" id="selectmoney" name="selectmoney" pattern="\d" maxlength="5/" style="height:40px"> </li>
       <li><button id="sendsoonselect_but" class="btn" type="button">下注</button></li>
       <li class="soonselectBM">笔数:<span id="selectnumbertotal"></span><br>金额:<span id="selectnumbermoney">0</span></li>
      </ul>
     </div>
    </div>
    <div class="main_right main_right_select">
     <form name="selectForm" id="selectForm" onsubmit="return false;">
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table table-bordered table-condensed table-hover table-soonselect">
       <tbody><tr class="center"><td colspan="4">
        <table border="0" width="100%" cellpadding="0" cellspacing="0" class="menusoonselect"><tbody><tr>
         <td class="active" id="tabss_1"><a href="JavaScript:;" rel="tabss_1" >二字定</a></td>
         <td id="tabss_2"><a href="JavaScript:;" rel="tabss_2" >三字定</a></td>
         <td id="tabss_3"><a href="JavaScript:;" rel="tabss_3">四字定</a></td>
         <td id="tabss_4"><a href="JavaScript:;" rel="tabss_4">二字现</a></td>
         <td id="tabss_5"><a href="JavaScript:;" rel="tabss_5">三字现</a></td>
         <td id="tabss_6"><a href="JavaScript:;" rel="tabss_6">四字现</a></td>
        </tr><tr></tr></tbody></table>
       </td></tr>
       <tr id="s1" class="soon_head center">
        <td colspan="2"><dl>定位置</dl><input type="checkbox" name="__dingwei_chu" id="__dingwei_chu" onclick="__ss.__showdis(this,'__dingwei_qu');">除<input type="checkbox" name="__dingwei_qu" id="__dingwei_qu" onclick="__ss.__showdis(this,'__dingwei_chu');" checked="">取</td>
        <td colspan="2"><dl>配数全转</dl><input type="checkbox" name="__peishu_chu" id="__peishu_chu" onclick="__ss.__showdis(this,'__peishu_qu');">除<input type="checkbox" name="__peishu_qu" id="__peishu_qu" onclick="__ss.__showdis(this,'__peishu_chu');">取
        </td>
       </tr>

       <tr id="s13" class="soon_head center">
        <td colspan="4"><dl>配数</dl><input type="checkbox" name="__peishu_chu2" id="__peishu_chu2" onclick="__ss.__showdis(this,'__peishu_qu2');">除<input type="checkbox" name="__peishu_qu2" id="__peishu_qu2" onclick="__ss.__showdis(this,'__peishu_chu2');" checked="">取
        </td>
       </tr>
       <tr id="s12" class="center">
        <td colspan="4">
         <span id="ps1"><input type="text" name="__peishu_1" id="__peishu_1" class="soonselect_w soonselect_w74" maxlength="10" style="height: 30px;"></span>
         <span id="ps2"> 配,<input type="text" name="__peishu_2" id="__peishu_2" class="soonselect_w soonselect_w74" maxlength="10"style="height: 30px;"></span>
         <span id="ps3"> 配,<input type="text" name="__peishu_3" id="__peishu_3" class="soonselect_w soonselect_w74" maxlength="10"style="height: 30px;"></span>
         <span id="ps4"> 配,<input type="text" name="__peishu_4" id="__peishu_4" class="soonselect_w soonselect_w74" maxlength="10"style="height: 30px;"></span></td>
       </tr>
       <tr id="s2" class="center">
        <td>仟</td><td>佰</td><td>拾</td><td>个</td>
       </tr>
       <tr id="s3" class="center">
        <td><input type="text" name="__dingwei_1" id="__dingwei_1" class="soonselect_w soonselect_w74" maxlength="10" onkeyup="limitrepeat(this)" style="height: 30px;"></td>
        <td><input type="text" name="__dingwei_2" id="__dingwei_2" class="soonselect_w soonselect_w74" maxlength="10" onkeyup="limitrepeat(this)" style="height: 30px;"></td>
        <td><input type="text" name="__dingwei_3" id="__dingwei_3" class="soonselect_w soonselect_w74" maxlength="10" onkeyup="limitrepeat(this)" style="height: 30px;"></td>
        <td><input type="text" name="__dingwei_4" id="__dingwei_4" class="soonselect_w soonselect_w74" maxlength="10" onkeyup="limitrepeat(this)" style="height: 30px;"></td>
       </tr>
       <tr id="s4" class="soon_head center"><td colspan="4"><dl>合　分</dl><input type="checkbox" name="__hefen_chu" id="__hefen_chu" onclick="__ss.__showdis(this,'__hefen_qu');">除<input type="checkbox" name="__hefen_qu" id="__hefen_qu" onclick="__ss.__showdis(this,'__hefen_chu');" checked="">取</td></tr>
       <tr id="s5" class="center">
        <td>
         1.
         <input type="checkbox" id="__hefenzhide_w_11" name="__hefenzhide_w_11">
         <input type="checkbox" id="__hefenzhide_w_21" name="__hefenzhide_w_21">
         <input type="checkbox" id="__hefenzhide_w_31" name="__hefenzhide_w_31">
         <input type="checkbox" id="__hefenzhide_w_41" name="__hefenzhide_w_41">
         <input type="text" name="__hefenzhide_1" class="soonselect_w soonselect_w74" id="__hefenzhide_1" maxlength="10" onkeyup="limitrepeat(this)" style="height: 30px;">
        </td><td>
        2.
        <input type="checkbox" id="__hefenzhide_w_12" name="__hefenzhide_w_12">
        <input type="checkbox" id="__hefenzhide_w_22" name="__hefenzhide_w_22">
        <input type="checkbox" id="__hefenzhide_w_32" name="__hefenzhide_w_32">
        <input type="checkbox" id="__hefenzhide_w_42" name="__hefenzhide_w_42">
        <input type="text" name="__hefenzhide_2" class="soonselect_w soonselect_w74" id="__hefenzhide_2" maxlength="10" onkeyup="limitrepeat(this)" style="height: 30px;">
       </td><td>
        3.
        <input type="checkbox" id="__hefenzhide_w_13" name="__hefenzhide_w_13">
        <input type="checkbox" id="__hefenzhide_w_23" name="__hefenzhide_w_23">
        <input type="checkbox" id="__hefenzhide_w_33" name="__hefenzhide_w_33">
        <input type="checkbox" id="__hefenzhide_w_43" name="__hefenzhide_w_43">
        <input type="text" name="__hefenzhide_3" class="soonselect_w soonselect_w74" id="__hefenzhide_3" maxlength="10" onkeyup="limitrepeat(this)" style="height: 30px;">
       </td><td>
        4.
        <input type="checkbox" id="__hefenzhide_w_14" name="__hefenzhide_w_14">
        <input type="checkbox" id="__hefenzhide_w_24" name="__hefenzhide_w_24">
        <input type="checkbox" id="__hefenzhide_w_34" name="__hefenzhide_w_34">
        <input type="checkbox" id="__hefenzhide_w_44" name="__hefenzhide_w_44">
        <input type="text" name="__hefenzhide_4" class="soonselect_w soonselect_w74" id="__hefenzhide_4" maxlength="10" onkeyup="limitrepeat(this)" style="height: 30px;">
       </td>
       </tr>
       <tr id="s6">
        <td colspan="2"><span id="bdwhefen1">
		<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border: 0px;">
         <tbody><tr><td width="220" style="border: 0px;">
          <dl>不定位合分</dl>
          <span id="bd1"><input type="checkbox" id="__bdwhefen_1" name="__bdwhefen_1" onclick="__ss.__showdis(this,'__bdwhefen_2');">两数合</span>
          <span id="bd2"><input type="checkbox" id="__bdwhefen_2" name="__bdwhefen_2" onclick="__ss.__showdis(this,'__bdwhefen_1');">三数合</span>
         </td><td width="*" style="border: 0px;">
          <input type="text" name="__bdwhefen" id="__bdwhefen" class="soonselect_w soonselect_w20" style="width:80px;height: 30px;" maxlength="8" onkeyup="limitrepeat(this)"  >

         </td></tr></tbody></table></span>
        </td>
        <td class="center" colspan="2"><span id="zfw1">&nbsp;&nbsp;<dl>值 范 围</dl>&nbsp;&nbsp;从<input type="text" style="height: 30px;" name="__zhifanwei_start" id="__zhifanwei_start" onkeyup="__ss.__keyup_zhifanwei();" class="soonselect_w soonselect_w35" maxlength="8">值&nbsp;至&nbsp;&nbsp;<input type="text" name="__zhifanwei_end" id="__zhifanwei_end" onkeyup="__ss.__keyup_zhifanwei();" class="soonselect_w soonselect_w35" maxlength="8" style="height: 30px;">值</span></td>
       </tr>

       <tr id="s7">
        <td colspan="4">
         <span id="quandao"><dl>全转</dl>&nbsp;<input type="text" name="__quandao" id="__quandao" class="soonselect_w soonselect_w55" maxlength="9" style="height: 30px;"></span>
         <span id="shangjiang"><dl>上奖</dl>&nbsp;<input type="text" name="__shangjiang" id="__shangjiang" class="soonselect_w soonselect_w55" maxlength="9" style="height: 30px;"></span>
         <span id="paichu">&nbsp;<dl>排除</dl>&nbsp;<input type="text" name="__paichu" id="__paichu" class="soonselect_w soonselect_w55" maxlength="9" onkeyup="limitrepeat(this)" style="height: 30px;"></span><span id="changyong"><input type="checkbox" name="__changyong" id="__changyong" style="display:none"></span>
         &nbsp;<span id="ch1"><dl>乘号位置</dl></span>
	<span id="ch2"><input type="checkbox" name="__chenghao_1" id="__chenghao_1">
	<input type="checkbox" name="__chenghao_2" id="__chenghao_2">
	<input type="checkbox" name="__chenghao_3" id="__chenghao_3">
	<input type="checkbox" name="__chenghao_4" id="__chenghao_4"></span>
	<span id="psgdstr"><dl>固定位置</dl><input type="checkbox" name="__gd1" id="__gd1">
	<input type="checkbox" name="__gd2" id="__gd2">
	<input type="checkbox" name="__gd3" id="__gd3">
	<input type="checkbox" name="__gd4" id="__gd4"></span>
        </td>
       </tr>
       <tr id="han1">
        <td colspan="4"><input type="checkbox" name="__chu_1" id="__chu_1" onclick="__ss.__showdis(this,'__qu_1');">除<input type="checkbox" name="__qu_1" id="__qu_1" onclick="__ss.__showdis(this,'__chu_1');">取&nbsp;二字定含&nbsp;<input type="text" name="__han_1" id="__han_1" class="soonselect_w soonselect_w25" maxlength="1" style="height: 30px;">&nbsp;二字定复式<input type="text" style="height: 30px;" name="__fushi_1" id="__fushi_1" class="soonselect_w soonselect_w100" maxlength="10" onkeyup="limitrepeat(this)"></td>
       </tr>
       <tr id="han2">
        <td colspan="4"><input type="checkbox" name="__chu_2" id="__chu_2" onclick="__ss.__showdis(this,'__qu_2');">除<input type="checkbox" name="__qu_2" id="__qu_2" onclick="__ss.__showdis(this,'__chu_2');">取&nbsp;三字定含&nbsp;<input type="text" name="__han_2" id="__han_2" class="soonselect_w soonselect_w25" maxlength="2" style="height: 30px;">&nbsp;三字定复式<input type="text" style="height: 30px;" name="__fushi_2" id="__fushi_2" class="soonselect_w soonselect_w100" maxlength="10" onkeyup="limitrepeat(this)"></td>
       </tr>
       <tr id="han3">
        <td colspan="4"><input type="checkbox" name="__chu_3" id="__chu_3" onclick="__ss.__showdis(this,'__qu_3');">除<input type="checkbox" name="__qu_3" id="__qu_3" onclick="__ss.__showdis(this,'__chu_3');">取&nbsp;四字定<dl>含</dl>&nbsp;<input type="text" style="height: 30px;" name="__han_3" id="__han_3" class="soonselect_w soonselect_w25" maxlength="3">&nbsp;四字定<dl>复式</dl><input type="text" style="height: 30px;" name="__fushi_3" id="__fushi_3" class="soonselect_w soonselect_w100" maxlength="10" onkeyup="limitrepeat(this)"></td>
       </tr>
       <tr id="han4">
        <td colspan="4"><input type="checkbox" name="__chu_4" id="__chu_4" onclick="__ss.__showdis(this,'__qu_4');">除<input type="checkbox" name="__qu_4" id="__qu_4" onclick="__ss.__showdis(this,'__chu_4');">取&nbsp;二字现<dl>含</dl>&nbsp;<input type="text" style="height: 30px;" name="__han_4" id="__han_4" class="soonselect_w soonselect_w25" maxlength="1">&nbsp;二字现<dl>复式</dl><input type="text" style="height: 30px;" name="__fushi_4" id="__fushi_4" class="soonselect_w soonselect_w100" maxlength="10" onkeyup="limitrepeat(this)"></td>
       </tr>
       <tr id="han5">
        <td colspan="4"><input type="checkbox" name="__chu_5" id="__chu_5" onclick="__ss.__showdis(this,'__qu_5');">除<input type="checkbox" name="__qu_5" id="__qu_5" onclick="__ss.__showdis(this,'__chu_5');">取&nbsp;三字现<dl>含</dl>&nbsp;<input type="text" style="height: 30px;" name="__han_5" id="__han_5" class="soonselect_w soonselect_w25" maxlength="1">&nbsp;三字现<dl>复式</dl><input type="text" style="height: 30px;" name="__fushi_5" id="__fushi_5" class="soonselect_w soonselect_w100" maxlength="10" onkeyup="limitrepeat(this)"></td>
       </tr>
       <tr id="han6">
        <td colspan="4"><input type="checkbox" name="__chu_6" id="__chu_6" onclick="__ss.__showdis(this,'__qu_6');">除<input type="checkbox" name="__qu_6" id="__qu_6" onclick="__ss.__showdis(this,'__chu_6');">取&nbsp;四字现<dl>含</dl>&nbsp;<input type="text" style="height: 30px;" name="__han_6" id="__han_6" class="soonselect_w soonselect_w25" maxlength="1">&nbsp;四字现<dl>复式</dl><input type="text" style="height: 30px;" name="__fushi_6" id="__fushi_6" class="soonselect_w soonselect_w100" maxlength="10" onkeyup="limitrepeat(this)"></td>
       </tr>


       <tr id="s8">
        <td colspan="4">
         <span id="ss1">    <input type="checkbox" name="__chu_chong_1" id="__chu_chong_1" onclick="__ss.__showdis(this,'__qu_chong_1');">除<input type="checkbox" name="__qu_chong_1" id="__qu_chong_1" onclick="__ss.__showdis(this,'__chu_chong_1');">取(<dl>双重</dl>)&nbsp;</span>

         <span id="ss2"><input type="checkbox" name="__chu_chong_2" id="__chu_chong_2" onclick="__ss.__showdis(this,'__qu_chong_2');">除<input type="checkbox" name="__qu_chong_2" id="__qu_chong_2" onclick="__ss.__showdis(this,'__chu_chong_2');">取(<dl>双双重</dl>)&nbsp;</span>
         <span id="ss3">    <input type="checkbox" name="__chu_chong_3" id="__chu_chong_3" onclick="__ss.__showdis(this,'__qu_chong_3');">除<input type="checkbox" name="__qu_chong_3" id="__qu_chong_3" onclick="__ss.__showdis(this,'__chu_chong_3');">取(<dl>三重</dl>)&nbsp;</span>
         <span id="ss4"><input type="checkbox" name="__chu_chong_4" id="__chu_chong_4" onclick="__ss.__showdis(this,'__qu_chong_4');">除<input type="checkbox" name="__qu_chong_4" id="__qu_chong_4" onclick="__ss.__showdis(this,'__chu_chong_4');">取(<dl>四重</dl>)</span>
        </td>
       </tr>
       <tr id="s9">
        <td colspan="4">
         <span id="ss5">    <input type="checkbox" name="__chu_xiongdi_1" id="__chu_xiongdi_1" onclick="__ss.__showdis(this,'__qu_xiongdi_1');">除<input type="checkbox" name="__qu_xiongdi_1" id="__qu_xiongdi_1" onclick="__ss.__showdis(this,'__chu_xiongdi_1');">取(<dl>二兄弟</dl>)&nbsp;</span>
         <span id="ss6"><input type="checkbox" name="__chu_xiongdi_2" id="__chu_xiongdi_2" onclick="__ss.__showdis(this,'__qu_xiongdi_2');">除<input type="checkbox" name="__qu_xiongdi_2" id="__qu_xiongdi_2" onclick="__ss.__showdis(this,'__chu_xiongdi_2');">取(<dl>三兄弟</dl>)&nbsp;</span>
         <span id="ss7">    <input type="checkbox" name="__chu_xiongdi_3" id="__chu_xiongdi_3" onclick="__ss.__showdis(this,'__qu_xiongdi_3');">除<input type="checkbox" name="__qu_xiongdi_3" id="__qu_xiongdi_3" onclick="__ss.__showdis(this,'__chu_xiongdi_3');">取(<dl>四兄弟</dl>)</span>

        </td>
       </tr>
       <tr id="s10">
        <td colspan="4">
         <span id="ss8">    <input type="checkbox" name="__chu_duishu" id="__chu_duishu" onclick="__ss.__showdis(this,'__qu_duishu');">除<input type="checkbox" name="__qu_duishu" id="__qu_duishu" onclick="__ss.__showdis(this,'__chu_duishu');">取(<dl>对数</dl>)</span>&nbsp;
         <input type="text" style="height: 30px;" name="__duishu_1" id="__duishu_1" class="soonselect_w soonselect_w55" maxlength="2" onkeyup="limitrepeat(this)">&nbsp;
         <input type="text" style="height: 30px;" name="__duishu_2" id="__duishu_2" class="soonselect_w soonselect_w55" maxlength="2" onkeyup="limitrepeat(this)">&nbsp;
         <input type="text" style="height: 30px;" name="__duishu_3" id="__duishu_3" class="soonselect_w soonselect_w55" maxlength="2" onkeyup="limitrepeat(this)">&nbsp;

        </td>
       </tr>
       <tr id="s11">
        <td colspan="4">
		<span id="dan1">
		<span id="ss9">    <input type="checkbox" name="__dan_chu" id="__dan_chu" onclick="__ss.__showdis(this,'__dan_qu');">除<input type="checkbox" name="__dan_qu" id="__dan_qu" onclick="__ss.__showdis(this,'__dan_chu');">取(<dl>单</dl>)</span>&nbsp;

	<span id="dsd1"><input type="checkbox" name="__dan_1" id="__dan_1"></span>
	<span id="dsd2"><input type="checkbox" name="__dan_2" id="__dan_2"></span>
	<span id="dsd3"><input type="checkbox" name="__dan_3" id="__dan_3"></span>
	<span id="dsd4"><input type="checkbox" name="__dan_4" id="__dan_4"></span>
	</span><span id="dan2"></span><br>
		<span id="shuang1">
		<span id="ss10">    <input type="checkbox" name="__shuang_chu" id="__shuang_chu" onclick="__ss.__showdis(this,'__shuang_qu');">除<input type="checkbox" name="__shuang_qu" id="__shuang_qu" onclick="__ss.__showdis(this,'__shuang_chu');">取(<dl>双</dl>)</span>&nbsp;

	<span id="dss1"><input type="checkbox" name="__shuang_1" id="__shuang_1"></span>
	<span id="dss2"><input type="checkbox" name="__shuang_2" id="__shuang_2"></span>
	<span id="dss3"><input type="checkbox" name="__shuang_3" id="__shuang_3"></span>
	<span id="dss4"><input type="checkbox" name="__shuang_4" id="__shuang_4"></span></span>&nbsp;<span id="shuang2"></span>
        </td>
       </tr>

       </tbody></table>
      <div class="butcenter"><button onclick="cgSelect.loging();return false;" type="button" id="setsoonclass1" name="setsoonclass1" class="btn">生成</button>
       <button type="reset" onclick="cgSelect.__reset(1);" id="setsoonclass2" name="setsoonclass2" class="btn">复位</button>
      </div>
      <input type="hidden" name="lujingstat" value="3">
      <input type="hidden" name="selectlogsclassid" id="selectlogsclassid">
      <input type="hidden" name="selectnumber" id="selectnumber" value="">
      <input type="hidden" name="selectnumbertotal_hidden" id="selectnumbertotal_hidden" value="0">
      <input type="hidden" name="selectlogs" id="selectlogs" value="">
      <input type="hidden" name="selectnumberqiehuan" id="selectnumberqiehuan" value="0">
      <input type="hidden" name="zjzc" id="zjzc" value="0">
     </form>
    </div>
    <!-- 快选 end -->
   </li>
   <li id="tab_erziding" style="display:none">
    <div class="main_center main_center_erziding" style="display:none">
     <table class="table table-bordered table-condensed tablecenter">
      <thead><tr class="xiazhukuang"><th>系统提示</th></tr></thead>
      <tbody><tr><td style="height: 100px">已经关盘。</td></tr></tbody>
     </table>
    </div>
    <div class="main_center main_center_erziding">
     <table class="table table-bordered table-condensed table-rzd-hover table-rd-so">
      <thead>
      <tr class="xiazhukuang">
       <th colspan="11"><button class="btn" id="moshi" type="button">模式2</button>  类别 <span id="rdclassname"></span>笔数：<span id="rdcount"></span> 总金额：<span id="rdmoney"></span></th>
      </tr>
      <tr class="rdrow">
       <td> </td><th></th><th> </th><th> </th><th> </th><th> </th><th> </th><th> </th><th> </th><th> </th><th> </th>
      </tr>
      <tr class="rdImgtitle">
       <td> </td>
       <th><div class="rdL">号码</div><div class="rdR">赔率</div></th>
       <th><div class="rdL">号码</div><div class="rdR">赔率</div></th>
       <th><div class="rdL">号码</div><div class="rdR">赔率</div></th>
       <th><div class="rdL">号码</div><div class="rdR">赔率</div></th>
       <th><div class="rdL">号码</div><div class="rdR">赔率</div></th>
       <th><div class="rdL">号码</div><div class="rdR">赔率</div></th>
       <th><div class="rdL">号码</div><div class="rdR">赔率</div></th>
       <th><div class="rdL">号码</div><div class="rdR">赔率</div></th>
       <th><div class="rdL">号码</div><div class="rdR">赔率</div></th>
       <th><div class="rdL">号码</div><div class="rdR">赔率</div></th>
      </tr>

      </thead>
      <tbody id="erzidingList">
      </tbody>
     </table>
     <table id="erzidingcanshu" class="table table-bordered table-condensed table-rd-so">
      <tbody>
      <tr>
       <td rowspan="2" class="tl">定位置</td>
       <td id="erziding_qian"><span id="rzd_qian">仟</span><button class="btn b" id="dw0" data="0" type="button" onclick="cgErZiDing.ezdJ(this);">0</button><button class="btn b" id="dw1" data="1" type="button" onclick="cgErZiDing.ezdJ(this);">1</button><button class="btn b" id="dw2" data="2" type="button" onclick="cgErZiDing.ezdJ(this);">2</button><button class="btn b" id="dw3" data="3" type="button" onclick="cgErZiDing.ezdJ(this);">3</button><button class="btn b" id="dw4" data="4" type="button" onclick="cgErZiDing.ezdJ(this);">4</button><button class="btn b" id="dw5" data="5" type="button" onclick="cgErZiDing.ezdJ(this);">5</button><button class="btn b" id="dw6" data="6" type="button" onclick="cgErZiDing.ezdJ(this);">6</button><button class="btn b" id="dw7" data="7" type="button" onclick="cgErZiDing.ezdJ(this);">7</button><button class="btn b" id="dw8" data="8" type="button" onclick="cgErZiDing.ezdJ(this);">8</button><button class="btn b" id="dw9" data="9" type="button" onclick="cgErZiDing.ezdJ(this);">9</button><button class="btn b" id="dw10" data="10" type="button" onclick="cgErZiDing.ezdJ(this);">单</button><button class="btn b" id="dw11" data="11" type="button" onclick="cgErZiDing.ezdJ(this);">双</button><button class="btn b" id="dw12" data="12" type="button" onclick="cgErZiDing.ezdJ(this);">大</button><button class="btn b" id="dw13" data="13" type="button" onclick="cgErZiDing.ezdJ(this);">小</button></td>
       <td rowspan="2" class="tl">合分</td>
       <td id="erziding_hf0"><button class="btn b" id="hf0" data="0" type="button" onclick="cgErZiDing.ezdJ(this);">0</button><button class="btn b" id="hf1" data="1" type="button" onclick="cgErZiDing.ezdJ(this);">1</button><button class="btn b" id="hf2" data="2" type="button" onclick="cgErZiDing.ezdJ(this);">2</button><button class="btn b" id="hf3" data="3" type="button" onclick="cgErZiDing.ezdJ(this);">3</button><button class="btn b" id="hf4" data="4" type="button" onclick="cgErZiDing.ezdJ(this);">4</button><button class="btn b" id="ct44" type="button" onclick="cgErZiDing.ezdJ(this);">单</button></td>
       <td rowspan="2" class="rdmoney">
        金额
        <input type="text" id="erzidingmoney" name="erzidingmoney" maxlength="5/">
        <button id="serziding_but" class="btn" type="button">下注</button>
        <button id="serziding_quxiao" class="btn" type="button">取消</button>

       </td>
      </tr>
      <tr>
       <td id="erziding_shi"><span id="rzd_shi">拾</span><button class="btn b" id="dw0" data="0" type="button" onclick="cgErZiDing.ezdJ(this);">0</button><button class="btn b" id="dw1" data="1" type="button" onclick="cgErZiDing.ezdJ(this);">1</button><button class="btn b" id="dw2" data="2" type="button" onclick="cgErZiDing.ezdJ(this);">2</button><button class="btn b" id="dw3" data="3" type="button" onclick="cgErZiDing.ezdJ(this);">3</button><button class="btn b" id="dw4" data="4" type="button" onclick="cgErZiDing.ezdJ(this);">4</button><button class="btn b" id="dw5" data="5" type="button" onclick="cgErZiDing.ezdJ(this);">5</button><button class="btn b" id="dw6" data="6" type="button" onclick="cgErZiDing.ezdJ(this);">6</button><button class="btn b" id="dw7" data="7" type="button" onclick="cgErZiDing.ezdJ(this);">7</button><button class="btn b" id="dw8" data="8" type="button" onclick="cgErZiDing.ezdJ(this);">8</button><button class="btn b" id="dw9" data="9" type="button" onclick="cgErZiDing.ezdJ(this);">9</button><button class="btn b" id="dw10" data="10" type="button" onclick="cgErZiDing.ezdJ(this);">单</button><button class="btn b" id="dw11" data="11" type="button" onclick="cgErZiDing.ezdJ(this);">双</button><button class="btn b" id="dw12" data="12" type="button" onclick="cgErZiDing.ezdJ(this);">大</button><button class="btn b" id="dw13" data="13" type="button" onclick="cgErZiDing.ezdJ(this);">小</button></td>
       <td id="erziding_hf1"><button class="btn b" id="hf5" data="5" type="button" onclick="cgErZiDing.ezdJ(this);">5</button><button class="btn b" id="hf6" data="6" type="button" onclick="cgErZiDing.ezdJ(this);">6</button><button class="btn b" id="hf7" data="7" type="button" onclick="cgErZiDing.ezdJ(this);">7</button><button class="btn b" id="hf8" data="8" type="button" onclick="cgErZiDing.ezdJ(this);">8</button><button class="btn b" id="hf9" data="9" type="button" onclick="cgErZiDing.ezdJ(this);">9</button><button class="btn b" id="ct55" type="button" onclick="cgErZiDing.ezdJ(this);">双</button></td>
      </tr>
      </tbody>
     </table>
     <table id="erzidingqueding" class="table table-bordered table-condensed table-rd-so">
      <tbody>
      <tr>
       <td>
        <center><button id="serziding_but1" class="btn" type="button">下注</button></center>
       </td>
      </tr>
      </tbody>
     </table>
     <div class="clear"></div>
    </div>
   </li>
   <li id="tab_frank" style="display:none">
    <div class="main_center main_center_erziding">
     <table class="table table-bordered table-condensed table-hover tablecenter">
      <thead>
      <tr class="xiazhukuang">
       <th colspan="10">赔率变动表 <span id="frankhotname"><a href="JavaScript:;" onclick="cgFrankHot.cn(1)">二定位</a>&nbsp;&nbsp;<a href="JavaScript:;" onclick="cgFrankHot.cn(4)">三定位</a>&nbsp;&nbsp;<a href="JavaScript:;" onclick="cgFrankHot.cn(5)" class="active">四定位</a>&nbsp;&nbsp;<a href="JavaScript:;" onclick="cgFrankHot.cn(6)">二字现</a>&nbsp;&nbsp;<a href="JavaScript:;" onclick="cgFrankHot.cn(7)">三字现</a>&nbsp;&nbsp;<a href="JavaScript:;" onclick="cgFrankHot.cn(107)">四字现</a>&nbsp;&nbsp;</span></th>
      </tr>
      </thead>
      <tbody id="frankList"><tr class="xiazhukuang2"><td>号码</td><td>赔率</td><td class="fh">号码</td><td class="fh">赔率</td><td>号码</td><td>赔率</td><td class="fh">号码</td><td class="fh">赔率</td><td>号码</td><td>
       赔率</td></tr><tr><td>0000</td><td>5930</td><td class="fh">0710</td><td class="fh">5930</td><td>1111</td><td>5930</td><td class="fh">2222</td><td class="fh">5930</td><td>2710</td><td>5930</td></tr><tr><td>3333</td><td>5930</td><td class="fh">4444</td><td class="fh">5930</td><td>5157</td><td>5930</td><td class="fh">5303</td><td class="fh">5930</td><td>5555</td><td>5930</td></tr><tr><td>6666</td><td>5930</td><td class="fh">7777</td><td class="fh">5930</td><td>8157</td><td>5930</td><td class="fh">8303</td><td class="fh">5930</td><td>8888</td><td>5930</td></tr><tr><td>9999</td><td>5930</td><td class="fh">--</td><td class="fh">--</td><td>--</td><td>--</td><td class="fh">--</td><td class="fh">--</td><td>--</td><td>--</td></tr></tbody>
     </table>
     <div class="clear"></div>
    </div>
   </li>
   <li id="tab_import" style="display:none">
    <div class="main_center main_center_erziding main_import">
     <form method="post" id="fileinfo" name="fileinfo">
      <table class="table table-bordered table-condensed table-hover">
       <thead>
       <tr class="xiazhukuang">
        <th>txt导入</th>
       </tr>
       </thead>
       <tbody class="filecss">
       <tr>
        <td><b>文件路径：</b><input type="file" name="fileinput" id="fileinput"> <button id="fileinput_but" class="btn" type="button">提交</button></td>

       </tr>
       <tr>
        <td><b>格式A：</b>号码，号码，号码　　<b>格式B：</b>号码=金额，号码=金额，号码=金额 <font color="Red">(逗号也可以用空格代表)</font>　　<b>四字现格式：</b>例如1234现=a1234</td>
       </tr>
       <tr>
        <td><b>说明：</b>由于各会员使用的（txt文件）的格式不一样，如果不符合网站上要求的格式，有可能导入到网站（没有下注之前）的号码内容和自己（txt文件）里号码内容不一致，操作时请认真检查，如果出现内容不一致，请不要下注。
        </td>
       </tr>
       </tbody>
      </table>
     </form>
     <table class="table table-bordered table-condensed table-hover tablecenter">
      <thead>
      <tr class="xiazhukuang">
       <th colspan="12">文件明细</th>
      </tr>
      </thead>
      <tbody id="importList">
      </tbody>
     </table>

     <table id="import_t" class="table table-bordered table-condensed table-rd-so" style="display:none">
      <tbody>
      <tr><td class="rdmoney"><center>
						<span class="import_sntxt" style="display:none">
						发送中断，请再次下注。
						</span>
						<span id="import_t1" style="display:none">
						<button id="import_but1" class="btn importbut" type="button">下注</button>
						</span>
						<span id="import_t2" style="display:none">
						金额<input type="text" id="importmoney" name="importmoney" maxlength="5/"> <button id="import_but2" class="btn importbut" type="button">下注</button>
						</span>
						<span class="import_sntxt" style="display:none">
						<button id="importprint_but" class="btn importbut" type="button">打印</button> <button id="importreset_but" class="btn importbut" type="button">清空</button>
						</span>
      </center></td></tr>
      </tbody>
     </table>
     <div class="clear"></div>
    </div>
   </li>
   <li id="tab_rule" style="display:none">
    <div class="main_center main_center_erziding">
     <table class="table table-bordered table-condensed table-rule1">
      <tbody>
      <tr>
       <td><br><br><h3 align="center">本站销售<span class="rule1" id="rule_name"></span>电脑体育彩票游戏规则</h3>
        <p><b>第一章　总　则</b><br><br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>第一条</b>　根据财政部《彩票发行与销售管理暂行规定》和国家体育总局《体育彩票发行与销售管理暂行办法》以及《计算机销售体育彩票管理暂行办法》，制定本游戏规则。<br><br>  　　
         <b>第二条</b>　本站彩票实行自愿购买,量力而行；凡下注者即被视为同意并遵守本规则。          <b></b><br>
         <b><br>
          第二章　游戏方法</b><br><br>    　　
         <b>第三条</b>　
         <span id="rule_name_0"></span>
         <span class="rule1"><strong>本站取前面4位做为游戏规则！</strong></span><br>
         　　 <span class="text-03"></span><br>
         　　          <br>
         <b>         <span class="rule1">假设下列为开奖结果</span></b><font color="#FF0000">:</font></p>
        <table class="table table-bordered table-condensed table-rule1" style="width:50%">
         <thead>
         <tr class="xiazhukuang2">
          <th>仟</th>
          <th>佰</th>
          <th>拾</th>
          <th>个</th>
          <th>球5</th>
          <th id="rule_w6">球6</th>
          <th id="rule_w7">球7</th>
         </tr>
         </thead>
         <tbody>
         <tr>
          <td><b><font color="#cc0000">1</font></b></td>
          <td><b><font color="#cc0000">2</font></b></td>
          <td><b><font color="#cc0000">3</font></b></td>
          <td><b><font color="#cc0000">4</font></b></td>
          <td><b><font color="#cc0000">5</font></b></td>
          <td id="rule_6"><b><font color="#cc0000">6</font></b></td>
          <td id="rule_7"><b><font color="#cc0000">7</font></b></td>
         </tr>
         </tbody>
        </table><br>
        <p><strong>依照开奖结果，中奖范例如下：</strong></p><br>
        <p><strong>四字定中奖：</strong></p><br>
        <p class="rule1">1234</p><br>
        <p><strong>二字定中奖：</strong></p><br>
        <p><span class="rule1">12xx； 1x3x； 1xx4； x23x； x2x4； xx34 </span></p><br>
        <p><strong>三字定中奖：</strong></p><br>
        <p><span class="rule1">123x； 12x4； 1x34； x234 </span></p><br>
        <p><strong>二字现中奖：</strong></p><br>
        <p><span class="rule1"><strong>12；13；14；23；24；34</strong></span></p><br>
        <p><strong>三字现中奖：</strong></p><br>
        <p><span class="rule1"><strong>123；124；134；234</strong></span></p><br>
        <p><strong>四字现中奖：</strong></p><br>
        <p><span class="rule1"><strong>1234 现；</strong></span></p><br>
        <b>第三章　开奖及公告</b><br>
        <br>      　　
        <b>第四条</b>　“<span id="rule_name"><span class="rule1" id="rule_name2"></span>
					  ，摇奖过程在公证人员监督下进行，通过电视台播出。<br>
					  <br>      　　
					  <b>第五条</b>　每期开奖后，以国家体育总局体育彩票管理中心公布的开奖号码为准。<br>
					  <br>
					  <br>
					  <b>第四章　附　则</b><br>
					  <br>      　　
					  <b>第六条</b>　本游戏规则最终解释权归本公司。<p></p><br>
					  </span></td>
      </tr>
      </tbody>
     </table>
     <div class="clear"></div>
    </div>
   </li>
   <li id="tab_logs" style="display:none">
    <div class="main_center main_center_erziding">
     <table class="table table-bordered table-condensed table-hover">
      <thead>
      <tr class="xiazhukuang">
       <th colspan="6">日志 <span id="logsclass" class="title_a"><a href="JavaScript:;" onclick="cgLogs.LogsClass(this,1);">二定位</a>&nbsp;&nbsp;<a href="JavaScript:;" onclick="cgLogs.LogsClass(this,2);">三定位</a>&nbsp;&nbsp;<a href="JavaScript:;" onclick="cgLogs.LogsClass(this,3);">四定位</a>&nbsp;&nbsp;<a href="JavaScript:;" onclick="cgLogs.LogsClass(this,4);">二字现</a>&nbsp;&nbsp;<a href="JavaScript:;" onclick="cgLogs.LogsClass(this,5);">三字现</a>&nbsp;&nbsp;<a href="JavaScript:;" onclick="cgLogs.LogsClass(this,6);">四字现</a>&nbsp;&nbsp;<a href="JavaScript:;" onclick="cgLogs.LogsClass(this,0);">全部</a>&nbsp;&nbsp;</span></th>
      </tr>
      <tr class="xiazhukuang2">
       <th width="50">笔数</th>
       <th width="50">金额</th>
       <th width="*">操作内容(日志是记录操作条件，方便核对，实际下单内容已下注明细为准）</th>
       <th width="90">操作时间</th>
       <th width="50" class="center">再次生成</th>
       <th width="40" class="center"><button class="btn btnTuima" id="LogsCy" type="button">常用</button></th>

      </tr>
      </thead>
      <tbody id="logsList">
      </tbody>
     </table>
     <div id="logsListPager" class="pagination"></div><div class="clear"></div>
    </div>
   </li>
   <li id="tab_pass" style="display:none">
    <div class="main_center main_center_erziding">
     <table class="table table-bordered table-condensed table-hover table-pass">
      <thead>
      <tr class="xiazhukuang">
       <th colspan="2">&nbsp;&nbsp;帐户修改密码</th>
      </tr>
      </thead>
      <tbody>
      <tr>
       <td>原密码:</td><td><input type="password" name="oldpassword" id="oldpassword" size="25" tabindex="1" style="height: 30px;"></td>
      </tr>
      <tr>
       <td>新密码:</td><td class="passstr2"><input type="password" name="newpassword" id="newpassword" size="25" tabindex="2" style="height: 30px;">新密码不能跟账号和原密码相同。</td>
      </tr>
      <tr>
       <td>确认新密码:</td><td class="passstr2"><input type="password" name="newpassword2" id="newpassword2" size="25" tabindex="3" style="height: 30px;" >必须是数字和字母组合，至少6位以上。</td>
      </tr>
      <tr>
       <td class="span2">系统禁止不可用密码:</td><td class="passstr"><span id="passList">a12345，ab1234，abc123，a1b2c3，aaa111，123qwe</span>&nbsp;&nbsp;</td></tr>
      </tbody>
     </table>
     <center><button class="btn" id="editpass" type="button">提交</button></center>
     <div class="clear"></div>
    </div>
   </li>
  </ol>
 </div>
</div>
<script>

$("#fileinput_but").click(function(){
 alert('暂不支持！');
 return false;
});
$("#stopnumberBtnPrint").click(function(){
 alert('暂不支持！');
 return false;
});
    function countDown(times){
        var timer=null;
        timer=setInterval(function(){
            var day=0,
                    hour=0,
                    minute=0,
                    second=0;//时间默认值
            if(times > 0){
                hour = Math.floor(times / (60 * 60)) - (day * 24);
                minute = Math.floor(times / 60) - (day * 24 * 60) - (hour * 60);
                second = Math.floor(times) - (day * 24 * 60 * 60) - (hour * 60 * 60) - (minute * 60);
            }
            if (hour <= 9) hour = '0' + hour;
            if (minute <= 9) minute = '0' + minute;
            if (second <= 9) second = '0' + second;
            //
       //  $("#timeTag").text('离停盘时间：'+hour+"小时："+minute+"分："+second+"秒");
         $("#timeTag").text('已开盘');
            console.log(hour+"小时："+minute+"分："+second+"秒");
            times--;
        },1000);
        if(times<=0){
            clearInterval(timer);
        }
    }
    countDown(18024);
 $("#editpass").click(function(){
  var oldpassword = $("#oldpassword").val();
  var newpassword = $("#newpassword").val();
  var newpassword2 = $("#newpassword2").val();
  if(!oldpassword){
   alert('请输入原密码');
   return false;
  }if(!newpassword){
   alert('请输入新密码');
   return false;
  }if(!newpassword2){
   alert('请再次输入新密码');
   return false;
  }if(oldpassword.length > 16 || oldpassword.length < 6){
   alert('原密码长度不正确');
   return false;
  }
  if(newpassword.length > 16 || newpassword.length < 6){
   alert('新密码长度不正确');
   return false;
  }if(newpassword != newpassword2){
   alert('两次输入的密码不相同，请重新输入');
   return false;
  }
  $.ajax({
   type:'post',
   dataType:'json',
   url:'/Home/Index/updete_pwd',
   data:{'newpassword2':newpassword2},
   success:function(res){
    if(res == 1){
     alert('密码修改成功，需重新登录！');
     location.href='http://mytp.com/Home/Login/login';
    }if(res == 2){
     alert('数据有误');
     return false;
    }if(res == 3){
     alert('密码修改失败，请重新操作！');
     return false;
    }
   }
  })
 });
 $("#sendnumber").blur(function(){
  var bsendnumber = $("#sendnumber").val();
  if($("#timeTag").text() != '已开盘'){
   alert('已经关盘');
   return false;
  }
  if(bsendnumber.length != 0){
   $(".frankmoney").show();
   $("#sfrank").text('9870');
   $("#smoney").text('670');
  }

 });
 $("#sendsizi").click(function(){
     if($("#sendsizi").is(':checked') == true){
         $("#sendqz").removeAttr("checked");
         $("#sendxian").css('display','block');
     }else{
         $("#sendxian").css('display','none');
     }

 });
 $("#sendqz").click(function(){
     if($("#sendqz").is(':checked') == true){
         $("#sendsizi").removeAttr("checked");
         $("#sendxian").css('display','none');
     }
 });

 $("#sendxiazhu").click(function(){
     var bsendnumber = $("#sendnumber").val();
     var sendmoney = $("#sendmoney").val();
     var term_num = "<?php echo $term_number; ?>";
     var user = "<?php echo $user['user'];?>";
     if(sendmoney > 50){
         alert('不能超出单注上限50！');
         $("#sendnumber").val('');
         return false;
     }
  if(!bsendnumber){
   alert('請輸入號碼！');
   return false;
  }
  if(!sendmoney){
   alert('請輸入金額！');
   return false;
  }
  $.ajax({
   type:'post',
   url:"/Home/Index/bets",
   data:{num:bsendnumber,num_m:sendmoney,'term_num':term_num},
   success:function(res) {
    console.log(res);
    if(res != 2){
     alert('已下注');
     location.href="http://120.79.88.86"
    }else {
     alert('操作失败!');
    }

   }
  });


 });

 $("#s13").hide();
 $("#s12").hide();
 $("#bd2").hide();
 $("#zfw1").hide();
 $("#psgdstr").hide();
 $("#ss2").hide();
 $("#ss3").hide();
 $("#ss4").hide();
 $("#ss6").hide();
 $("#ss7").hide();
 $("#han1").show();
 $("#han2").hide();
 $("#han3").hide();
 $("#han4").hide();
 $("#han5").hide();
 $("#han6").hide();
 $("#ch1").show();
 $("#zfw1").hide();
 $("#ch2").show();
 $("#dss3").show();
 $("#dss4").show();
 $("#dsd3").show();
 $("#dsd4").show();
 $("#s1").show();
 $("#s7").show();
 $("#s2").show();
 $("#s3").show();
 $("#s4").show();
 $("#s5").show();
    $("#tabss_1").click(function(){
     $("#tabss_1").addClass("active");
     $("#tabss_2").removeClass("active");
     $("#tabss_3").removeClass("active");
     $("#tabss_4").removeClass("active");
     $("#tabss_5").removeClass("active");
     $("#tabss_6").removeClass("active");
        $("#s13").hide();
        $("#s12").hide();
        $("#bd2").hide();
        $("#zfw1").hide();
        $("#psgdstr").hide();
        $("#ss2").hide();
        $("#ss3").hide();
        $("#ss4").hide();
        $("#ss6").hide();
        $("#ss7").hide();
     $("#han1").show();
     $("#han2").hide();
     $("#han3").hide();
     $("#han4").hide();
     $("#han5").hide();
     $("#han6").hide();
     $("#ch1").show();
     $("#zfw1").hide();
     $("#ch2").show();
     $("#dss3").show();
     $("#dss4").show();
     $("#dsd3").show();
     $("#dsd4").show();
     $("#s1").show();
     $("#s7").show();
     $("#s2").show();
     $("#s3").show();
     $("#s4").show();
     $("#s5").show();
    });
 $("#tabss_2").click(function(){
  $("#tabss_1").removeClass("active");
  $("#tabss_2").addClass("active");
  $("#tabss_3").removeClass("active");
  $("#tabss_4").removeClass("active");
  $("#tabss_5").removeClass("active");
  $("#tabss_6").removeClass("active");
  $("#s13").hide();
  $("#s12").hide();
  $("#bd2").show();
  $("#zfw1").hide();
  $("#han1").hide();
  $("#han2").show();
  $("#han3").hide();
  $("#han4").hide();
  $("#han5").hide();
  $("#han6").hide();
  $("#psgdstr").hide();
  $("#ss2").hide();
  $("#ss3").show();
  $("#ss4").hide();
  $("#ss6").show();
  $("#ss7").hide();
  $("#ch1").show();
  $("#zfw1").hide();
  $("#ch2").show();
  $("#dss1").show();
  $("#dss2").show();
  $("#dss3").show();
  $("#dss4").show();
  $("#dsd3").show();
  $("#dsd4").show();
  $("#s1").show();
  $("#s7").show();
  $("#s2").show();
  $("#s3").show();
  $("#s4").show();
  $("#s5").show();
 });
 $("#tabss_3").click(function(){
  $("#tabss_1").removeClass("active");
  $("#tabss_2").removeClass("active");
  $("#tabss_3").addClass("active");
  $("#tabss_4").removeClass("active");
  $("#tabss_5").removeClass("active");
  $("#tabss_6").removeClass("active");
  $("#s13").hide();
  $("#s12").hide();
  $("#bd2").show();
  $("#zfw1").hide();
  $("#han1").hide();
  $("#han2").hide();
  $("#han3").show();
  $("#han4").hide();
  $("#han5").hide();
  $("#han6").hide();
  $("#psgdstr").hide();
  $("#zfw1").show();
  $("#ss2").show();
  $("#ss3").show();
  $("#ss4").show();
  $("#ss6").show();
  $("#ss7").show();
  $("#ch1").hide();
  $("#ch2").hide();
  $("#dss1").show();
  $("#dss2").show();
  $("#dss3").show();
  $("#dss4").show();
  $("#dsd3").show();
  $("#dsd4").show();
  $("#s1").show();
  $("#s7").show();
  $("#s2").show();
  $("#s3").show();
  $("#s4").show();
  $("#s5").show();
 });
 $("#tabss_4").click(function(){
  $("#tabss_1").removeClass("active");
  $("#tabss_2").removeClass("active");
  $("#tabss_3").removeClass("active");
  $("#tabss_4").addClass("active");
  $("#tabss_5").removeClass("active");
  $("#tabss_6").removeClass("active");
  $("#s13").show();
  $("#s12").show();
  $("#ps3").hide();
  $("#ps4").hide();
  $("#bd2").hide();
  $("#zfw1").hide();
  $("#han1").hide();
  $("#han2").hide();
  $("#han3").hide();
  $("#han4").show();
  $("#han5").hide();
  $("#han6").hide();
  $("#psgdstr").hide();
  $("#zfw1").hide();
  $("#ss2").hide();
  $("#ss3").hide();
  $("#ss4").hide();
  $("#ss6").hide();
  $("#ss7").hide();
  $("#ch1").hide();
  $("#ch2").hide();
  $("#dss1").show();
  $("#dss2").show();
  $("#dss3").hide();
  $("#dss4").hide();
  $("#dsd3").hide();
  $("#dsd4").hide();
  $("#s1").hide();
  $("#s7").hide();
  $("#s2").hide();
  $("#s3").hide();
  $("#s4").hide();
  $("#s5").hide();
 });
 $("#tabss_5").click(function(){
  $("#tabss_1").removeClass("active");
  $("#tabss_2").removeClass("active");
  $("#tabss_3").removeClass("active");
  $("#tabss_4").removeClass("active");
  $("#tabss_5").addClass("active");
  $("#tabss_6").removeClass("active");
  $("#s13").show();
  $("#s12").show();
  $("#ps3").show();
  $("#ps4").hide();
  $("#bd2").show();
  $("#zfw1").hide();
  $("#han1").hide();
  $("#han2").hide();
  $("#han3").hide();
  $("#han4").hide();
  $("#han5").show();
  $("#han6").hide();
  $("#psgdstr").hide();
  $("#zfw1").hide();
  $("#ss2").hide();
  $("#ss3").show();
  $("#ss4").hide();
  $("#ss6").show();
  $("#ss7").hide();
  $("#ch1").hide();
  $("#ch2").hide();
  $("#dss1").show();
  $("#dss2").show();
  $("#dss3").show();
  $("#dss4").hide();
  $("#dsd3").show();
  $("#dsd4").hide();
  $("#s1").hide();
  $("#s7").hide();
  $("#s2").hide();
  $("#s3").hide();
  $("#s4").hide();
  $("#s5").hide();
 });
 $("#tabss_6").click(function(){
  $("#tabss_1").removeClass("active");
  $("#tabss_2").removeClass("active");
  $("#tabss_3").removeClass("active");
  $("#tabss_4").removeClass("active");
  $("#tabss_5").removeClass("active");
  $("#tabss_6").addClass("active");
  $("#s13").show();
  $("#s12").show();
  $("#ps3").show();
  $("#ps4").show();
  $("#bd2").show();
  $("#zfw1").hide();
  $("#han1").hide();
  $("#han2").hide();
  $("#han3").hide();
  $("#han4").hide();
  $("#han5").hide();
  $("#han6").show();
  $("#psgdstr").hide();
  $("#zfw1").hide();
  $("#ss2").hide();
  $("#ss3").show();
  $("#ss4").show();
  $("#ss6").show();
  $("#ss7").show();
  $("#ch1").hide();
  $("#ch2").hide();
  $("#dss1").show();
  $("#dss2").show();
  $("#dss3").show();
  $("#dss4").show();
  $("#dsd3").show();
  $("#dsd4").show();
  $("#s1").hide();
  $("#s7").hide();
  $("#s2").hide();
  $("#s3").hide();
  $("#s4").hide();
  $("#s5").hide();
 });

 function memberbut(){
  alert('修改会员资料成功');
//  $.ajax({
//   type: 'post',
//   data: {pwd: pwd, user: user},
//   url: '/Home/Index/seccode',
//   success: function (res) {
//
//   }
//  });
 }
</script>
<script type="text/javascript">
 var _soonset = {};
 //$(document).ready(function(){

 $("#kuaida").click(function(){
  $(".main_center").show();
  $(".main_right").show();
 });
 $(window).load(function(){

  /*菜单*/
  $('.topmenu').on('click', 'li a', function()
  {
   $(".topmenu").children("ul").children("li").removeClass("active");
   $(this).parent().addClass("active");
   var activeTab = $(this).attr("rel");
   if(activeTab!=''&&activeTab!=undefined){

    if(activeTab=='tab_luxian') {
     var dArr = cgOrber.xianlu;
     var fn = Math.floor(Math.random() * dArr.length + 1)-1;
     jConfirm('\n您是使用时感觉卡了，才选择（换线路），系统会给您分配另外一条线路，是否换线路?','提示框',function(s){if(s)window.top.location.href='http://mytp.com/'});
    }else{
     $("#tab_main ol").children("li").hide();
     $(".main_main").removeClass("main_main_kuaixuan");
     $(".main_main").removeClass("main_main_no");
     if(cgOrber.isnumbermoney==1){
      if(activeTab=='tab_pass'){
       if($(activeTab)) $("#"+activeTab).show();
      }else{
       $(".nav_top li [rel=tab_pass]").click();//点击修改密码
      }

     }else{
      if(activeTab=='tab_kuaida') {
       $("#sendmoney").val('');
       $("#sendnumber").val('');
       $("#sendsizi").attr("checked",false);
       $("#sendqz").attr("checked",false);
       $("#stopnumberBox").attr("checked",false);
       //$("#sotpnumber input[type=checkbox]").checkBox("none");
       $("#checkboxALLID").attr("checked",false);
    //   $("#SoonOrder input[type=checkbox]").checkBox("none");
       $(".frankmoney").hide();
       setTimeout('$("#sendnumber").focus()',200);
       setTimeout("$('.main_right').scrollTop(0)",100);
      }else if(activeTab=='tab_detail') {
       $("#DetailcheckboxALLID").attr("checked",false);
       $(".main_main").addClass("main_main_no");
       cgDetail.setValInit();
       //jsonAjax("appindexajax.php","get", "action=detail", "json", cgDetail.GetDetail);
      }else if(activeTab=='tab_member') {
       $(".main_main").addClass("main_main_no");
    //   jsonAjax("appindexajax.php","get", "action=member", "json", cgMember.GetMember);
      }else if(activeTab=='tab_bill') {
       cgDetail.setValInit();
       $(".main_main").addClass("main_main_no");
     //  jsonAjax("appindexajax.php","get", "action=bill", "json", cgBill.GetBill);
      }else if(activeTab=='tab_award') {
       $(".main_main").addClass("main_main_no");
     //  jsonAjax("appindexajax.php","get", "action=numberaward", "json", cgAward.GetAward);
      }else if(activeTab=='tab_logs') {
       $(".main_main").addClass("main_main_no");
       $('#logsclass').find("a").removeClass("active");
       $('#logsclass').find("a:eq(6)").addClass("active");
      // jsonAjax("appindexajax.php","get", "action=logs", "json", cgLogs.GetLogs);
      }else if(activeTab=='tab_pass') {
       $(".main_main").addClass("main_main_no");
    //   jsonAjax("appindexajax.php","get", "action=pass&doaction=init", "json", cgPass.GetPass);
      }else if(activeTab=='tab_erziding') {
       $(".main_main").addClass("main_main_no");
       $('#erzidingList').html('');
       cgErZiDing.childid=0;
       cgErZiDing.moshi(cgOrber.erzimode,0);
      }else if(activeTab=='tab_frank') {
       $(".main_main").addClass("main_main_no");
      // jsonAjax("appindexajax.php","get", "action=frankhot", "json", cgFrankHot.GetFrank);
      }else if(activeTab=='tab_import') {
       $(".main_main").addClass("main_main_no");
       $("#fileinput").val("");
       var sfile = $("#fileinput");
       sfile.after(sfile.clone().val(""));
       sfile.remove();
    //   jsonAjax("appindexajax.php","get", "action=import&doaction=init", "json", cgImport.GetImport);
      }else if(activeTab=='tab_rule') {
       $(".main_main").addClass("main_main_no");
       if(cgOrber.caizhongselect==2){
        $("#rule_w6").hide();
        $("#rule_w7").hide();
        $("#rule_6").hide();
        $("#rule_7").hide();
        $("#rule_name").text(cgOrber.caizhongarr[2]);
        $("#rule_name_0").text("“五位数”的每注彩票由00000-99999中的任意5位自然数排列而成。");
        $("#rule_name2").text("“"+cgOrber.caizhongarr[2]+"”每天开奖一次");
       }else{
        $("#rule_name").text(cgOrber.caizhongarr[1]);
        $("#rule_name_0").text(" “七位数”的每注彩票由0000000-9999999中的任意7位自然数排列而成。");
        $("#rule_name2").text("“"+cgOrber.caizhongarr[1]+"”每周开奖三次");
       }
      }else if(activeTab=='tab_kuaixuan') {
       $(".main_main").addClass("main_main_kuaixuan");

       setTimeout("$('.main_right').scrollTop(0)",100);

      // jsonAjax("appindexajax.php","get", "action=soonselect&logid="+cgSelect.logid, "json", cgSelect.GetSoonSelect);
      }else if(activeTab!='tab_kuaida') {
       $(".main_main").addClass("main_main_no");
      }
      setTimeout("$('.main_center').scrollTop(0)",100);
      if($(activeTab)) $("#"+activeTab).show();//$("#"+activeTab).fadeIn();
     }

    }

   }


  });
  /*滚动事件
   $('.gun').unbind('click').click(function(){
   jsonAjax("appnews.php","get", "action=newsread", "json", cgOrber.GetNews);
   });*/
  $('#stopnumberBtnPrint').unbind('click').click(function(){
   var s_issueon=$("#s_issueon").val();
 //  jsonAjax("appindexajax.php","get", "action=stopnumberrefresh&doaction=print&s_issueon="+s_issueon, "json", cgStopNumber.getPrintData);
  });


  /*下注框事件 全选*/
  cgOrber.init();
  /*下注事件*/
  cgCheckSend.init();
  /*快选*/
  cgSelect.init();
  /*明细*/
  cgDetail.init();
  /*会员*/
  cgMember.init();
  /*密码*/
  cgPass.init();
  /*二字定*/
  cgErZiDing.init();
  /*导入*/
  cgImport.init();
  cgLogs.init();
  /*main*/

  //jsonAjax("appindexajax.php","get", "action=soonorder"+ "&time=" + new Date().getMilliseconds(), "json", cgOrber.GetSoonOrder);
  startTime();//newsinfo();
  setInterval("newsinfo()",60000);
  PageSetup_Null();

 });

</script>
<div id="xp" style="position: absolute; z-index: 9000; overflow: hidden; border: 0px solid rgb(255, 0, 0); width: 260px; height: 190px; right: 0; top: 80%;">
 <div id="xp_content" style="position: absolute; z-index: 1; overflow: hidden; border-width: 0px; width: 260px; height: 190px; left: 0px; top: 0px;"><a id="closeButton" class="tubiao" href="#" style="position: absolute; z-index: 2; font-size: 0px; line-height: 0px; left: 240px; top: 6px; width: 15px; height: 15px; background-image: url('/Public/img/close.gif');"></a>
  <a id="switchButton" href="#" style="position: absolute; z-index: 2; font-size: 0px; line-height: 0px; left: 220px; top: 6px; width: 15px; height: 15px; background-image: url('/Public/img/min.gif');"></a>
  <a id="switchButton_2" href="#" style="display: none;; position: absolute; z-index: 2; font-size: 0px; line-height: 0px; left: 220px; top: 6px; width: 15px; height: 15px; background-image: url('/Public/img/max.gif');"></a>
  <div class="blogrecommend"><div class="BR_title"></div><div class="BR_conts">好消息，奖虫APP有（打字聊天）功能了。安卓手机--下载奖虫（网址：jiangcho.com）--设置（会员或管理）网址，账号和密码--可以和上下级打字聊天。</div></div></div></div></body></html>
<script>
 $(".tubiao").click(function(){
  $("#xp").fadeOut(2000);
 });
 $("#switchButton").click(function(){
  $("#switchButton").hide();
  $("#switchButton_2").show();
  $("#xp").animate({top:'97%'});
 });

 $("#switchButton_2").click(function(){
  $("#switchButton").show();
  $("#switchButton_2").hide();
  $("#xp").animate({top:'80%'});
  });




</script>