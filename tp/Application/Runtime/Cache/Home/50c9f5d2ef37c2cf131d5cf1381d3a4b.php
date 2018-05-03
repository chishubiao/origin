<?php if (!defined('THINK_PATH')) exit();?><html><head>
    <title>A-BMW</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" id="css" href="/Public/css/User_Login.css">

    <style type="text/css">
        #showwapmsg{
            z-index: 1000;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;}
        a{color:#0088cc;text-decoration:none;font-weight: normal;font-size: 20px;vertical-align:middle;}
        .bgdivright {float: right; cursor:pointer;vertical-align:middle;}
        .bgdivleft {margin-right:20px;}
        .bgdivmain {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            text-align: center;
            margin: 0px;
            padding: 0px;
            display:none;
            color:#555666;


        }
        .bgdiv{
            position: absolute;
            zoom: 1;
            filter: alpha(opacity=50);
            zoom: 1;
            display: inline-block;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            background-color: #e0e8e0;
            opacity: 0.75;


        }
        .bgdivdx{
            background: #fff;
            z-index: 999;
            padding: 4px;
            width: 300px;
            height: 210px;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            left: 50%;
            top: 50%;

            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;

            -webkit-box-shadow: 5px 5px 2px #888888;
            -moz-box-shadow: 5px 5px 2px #888888; /* 老的 Firefox */
            box-shadow: 5px 5px 2px #888888;
            border: 1px solid #555666;


            margin-left: -150px!important;
            margin-top: -60px!important;
            margin-top: 0px;

            position: fixed!important;
            position: absolute;
            _top: expression(eval(document.compatMode &&
	 document.compatMode=="CSS1Compat") ?
	 documentElement.scrollTop + (document.documentElement.clientHeight-this.offsetHeight)/2 :/*IE6*/
	 document.body.scrollTop + (document.body.clientHeight - this.clientHeight)/2);
        }
        .bgdivdx input{font-size: 14px;vertical-align:middle;}
        .bgdivdx img{vertical-align:middle;}
        #seccodelogin{padding: 4px 8px;font-size: 18px;}
        .bgdivdxtit{
            width: 100%;
            font-size: 22px;
            border-bottom: 1px solid #555666;
            height:25px;
            margin-bottom:7px;
            font-weight:bold;
        }
        .clear{ clear:both}
        .bgdivdx ul{    padding: 0;margin: 4px 8px;}
        .bgdivdx li{display:inline-block;*display:inline;*zoom:1;padding:0;margin-left:4px;list-style:none;white-space:nowrap;}
        .mainkey{
            width:100%;position:relative;
        }
        #mainkey td{
            background-color:#54206c;
            color:#d4acf4;
            text-align:center;
            width:16.6%;
            line-height:35px;height:35px;cursor:pointer; font-size: 18px;font-weight: bold;
            -webkit-touch-callout:none;
        }


    </style>
    <link rel="stylesheet" type="text/css" id="css" href="/Public/css/login.css">
    <script language="javascript" src="/Public/js/jquery.min.js"></script>
    <script language="javascript" src="/Public/js/appcg.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="/Public/js/verify-master/css/verify.css">
    <script type="text/javascript" src="/Public/js/verify-master/js/jquery.min.js"></script>
    <script type="text/javascript" src="/Public/js/verify-master/js/verify.min.js"></script>
    <script type="text/javascript">
        var login_but="";
        login_but="#seccodelogin";$(window).load(function(){
            seccodeWin.int("925299929",1);
        });</script>

    <script language="javascript" src="/Public/js/applogincg.min.js"></script>
    <script type="text/javascript">

       function login_admin(){
          var user = $("#admin_username925299929").val();
          var pwd = $("#admin_password925299929").val();
           var reg = /^[0-9]+.?[0-9]*$/;
           if (reg.test(user)) {
               alert('账号必须是数字和字母组合');
               return false;
           }
           if(user == null || user == ''){
               alert('请输入账号');
               return false;
           }
           if(user.length > 16 || user.length < 6){
               alert('账号长度不正确');
               return false;
           }
           if(pwd == null || pwd == ''){
               alert('请输入密码');
               return false;
           }
           if(pwd.length > 16 || pwd.length < 6){
               alert('密码长度不正确');
               return false;
           }
           $.ajax({
              type:'post',
               data:{pwd:pwd,user:user},
               url:'http://mytp.com/Home/Login/seccode',
               success:function(res){
                   console.log(res);
                   if(res == 2){
                       alert('账号密码为空');
                   } if(res == 3){
                       alert('用户不存在');
                   } if(res == 1){
                       var num = $("#num").val();
                       if(num == '' || num == null){
                           $("#mpanel4").append('<img src="/Public/img/icon_close(1).png" style="z-index: 200;position: absolute;top: 100%;left: 40%;" onclick="img()">')
                       }
                     $("#tan").show();
                       $('#mpanel4').show();
                       $('#mpanel4').slideVerify({
                           type : 2,		//类型
                           vOffset : 5,	//误差量，根据需求自行调整
                           vSpace : 5,	//间隔
                           imgName : ['1.jpg', '2.jpg'],
                           imgSize : {
                               width: '400px',
                               height: '200px',
                           },
                           blockSize : {
                               width: '40px',
                               height: '40px',
                           },
                           barSize : {
                               width : '400px',
                               height : '40px',
                           },
                           ready : function() {
                           },
                           success : function() {
                               alert('登录成功');
                               location.href='http://mytp.com/Home/Login/info';
                           },
                           error : function() {
		        	alert('验证失败！');
                           }
                       });
                   }
               }
           });
       }

        function img(){
            $("#num").val('');
            $("#tan").hide();
            $('#mpanel4').hide();
            $('#mpanel4').html('');
        }
   </script>
</head>
<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0">
<!--<div class="bgdivmain">
    <div class="bgdiv"></div>
    <div class="bgdivdx">
        <div class="bgdivdxtit"><div class="bgdivright" id="loginx">X</div><div class="bgdivleft">请回答</div></div><div class="clear"></div>
        <ul>
            <li><span id="seccodeimage" title="看不清楚，请点击"></span></li>
            <li>= <input type="text" onfocus="this.onfocus = null" id="seccodeverify" name="seccodeverify" maxlength="4" style="width: 90px;height: 40px;line-height: 39px;font-size: 29px;vertical-align:middle;border: solid 1px #a0a0a0;" readonly="readonly"></li>
            <li><a href="####" onclick="JavaScript:updateseccode();return false;">换题</a>
                <script type="text/javascript">var seccodedata = [90, 45, 4];</script>
            </li>
        </ul>
        <ul>
            <li class="mainkey">
                <table id="mainkey" class="mainkey" cellpadding="2" cellspacing="0" align="center" border="2" bordercolor="#FFFFFF">
                    <tbody>
                    <tr>
                        <td>0</td><td>1</td><td>3</td><td>7</td><td>2</td>
                    </tr>
                    <tr>
                        <td>8</td><td>4</td><td>5</td><td>9</td><td>6</td>
                    </tr>
                    </tbody><tbody>
                </tbody></table>
            </li>
        </ul>
        <ul>
            <li><input type="button" id="seccodelogin" name="seccodelogin" value=" login"></li>
        </ul>
    </div>
</div>-->




<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tbody><tr><td>

        <form method="post" id="loginfrm" name="loginfrm"><input type="hidden" id="sid" name="sid" value="7Ur9DE"><input type="hidden" name="loginaction" value="1">
            <input type="hidden" name="Hrand" value="925299929"><br><table align="center" width="928" border="0" cellpadding="0" cellspacing="0">
                <tbody><tr>
                    <td colspan="3" height="78" background="/Public/img/1_01.gif">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tbody><tr>
                                <td width="290"></td>
                                <td width="40">AT:&nbsp;&nbsp;</td>
                                <td width="120"><input type="text" id="admin_username925299929" name="admin_username925299929"  value="" style="width:100px; height:25px; background:#e9e6e6; font-size:12px; border:solid 1px #a0a0a0; color:#3b1b1b;" onkeyup="value=value.replace(/[^\w\.\/]/ig,'')"></td>
                                <td width="40">PW:&nbsp;&nbsp;</td>
                                <td width="120"><input type="password" id="admin_password925299929"  name="admin_password925299929" style="width:100px; height:25px; background:#e9e6e6; font-size:12px; border:solid 1px #a0a0a0; color:#3b1b1b;" onkeyup="value=value.replace(/[^\w\.\/]/ig,'')"></td>
                                <td height="30" width="*">&nbsp;&nbsp;
                                    <input type="button" id="login" onclick="login_admin()" value="login">
                                </td>
                            </tr>
                            </tbody></table>
                    </td>
                </tr>
                <tr>
                    <td background="/Public/img/1_02.gif" width="309" height="212"></td>
                    <td background="/Public/img/1_03.gif" width="310"></td>
                    <td background="/Public/img/1_04.gif" width="309"></td>
                </tr>
                <tr>
                    <td background="/Public/img/1_05.gif" height="145"></td>
                    <td background="/Public/img/1_06.gif"></td>
                    <td background="/Public/img/1_07.gif"></td>
                </tr>
                <tr>
                    <td background="/Public/img/1_08.gif" height="145"></td>
                    <td background="/Public/img/1_09.gif"></td>
                    <td background="/Public/img/1_10.gif"></td>
                </tr>
                </tbody></table>
        </form><script type="text/javascript">setTimeout("document.loginfrm.admin_username925299929.focus();",200);</script>	</td></tr></tbody></table>
<div style="width:100%;z-index:101; height:100%;background-color: grey; filter:alpha(Opacity=20);-moz-opacity:0.2;opacity: 0.5; position:absolute; top:0px; left:0px;display: none" id="tan"></div>
<input type="hidden" value="1" id="num">
<div id="mpanel4" style="width: 402px;height: 250px;margin: auto; top: -20%;display: block;z-index: 105">
    <img src="/Public/img/icon_close(1).png" style="z-index: 200;position: absolute;top: 100%;left: 40%;" onclick="img()">
</div>



</body></html>