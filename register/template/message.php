<!DOCTYPE html>
<?php include("modules/lang.php"); ?>
<!--[if lt IE 7]><html class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
<meta content="telephone=no" name="format-detection">
<meta name="description" content="Vast-Light Web">
<meta name="keywords" content="Minecraft, Minecraft Server, Minecraft Free, Vast-Light, Vast Light">
<meta name="author" content="Anan-X Studio, Crystal Studio, TURX">
<title>Register</title>
<!-- 设计: sc0utzz | 重构: Moumou | 创建: 2017-06-09 | 修改: 2017-09-11 | 个人主页: https://github.com/sc0utz -->
<link rel="stylesheet" href="https://cdn.bootcss.com/animate.css/3.5.2/animate.css">
<link rel="stylesheet" href="https://cdn.bootcss.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="css/normalize.css" />
<!-- 引入页面CSS -->
<link rel="stylesheet" href="../css/main.css">
<style>
	.ion-info { margin-left: 10px; float: left; font-size: 78px; color: #63da5c; }
	.info-div-son { float: left; padding-top: 8px; }
	.info-div-son p { padding: 0 24px; }
	.info-title-p { margin-top: 4px; margin-bottom: 6px; font-size: 36px; color: #63da5c; }
	.info-bt-p { margin-top: 8px; margin-bottom: 4px; font-size: 15px; color: #999; }
	.info-bt-p a { text-decoration: none; color: #147bc7; }
</style>
<!-- 检测浏览器信息 -->
<script type="text/javascript" src="https://cdn.bootcss.com/modernizr/2.8.3/modernizr.min.js?v.2017-08-17"></script>
<!-- 兼容IE9 -->
<!--[if lt IE 9]>
	<script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
	<!-- 注册box 开始 -->
	<div class="reg-box">
		<h3 class="is-title"><?php echo($regtitle) ?></h3>
		<div class="adbox-right"><img src="../img/ad1.jpg" /></div>
		<div class="row" style="margin-top: 200px; margin-left: auto;">
			<div class="info-div-father">
				<i id="icon-id" class="ion-info"></i>
				<div class="info-div-son">
					<p id="info-title" class="info-title-p"></p>
					<p id="info-bt" class="info-bt-p"><span id="info-bt-1"></span><span id="time">8</span>秒后跳转至首页... <a href="javascript:back();">点击跳转</a></p>
				</div>
			</div>
		</div>
	</div>
	<!-- 注册box 结束 -->
	<div class="footer">
		<p>© 2018 Crystal Studio</p>
	</div>
	<!-- 引入jQuery库 -->
	<script type="text/javascript" src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
	<!-- 引入页面控制JS -->
	<script>
		// 取URL后传来的参数的函数
	  	function GetUrlPar(name){
			var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
			var r = window.location.search.substr(1).match(reg);
			if(r!=null)return  unescape(r[2]); return null;
		}

		// 声明参数变量
		var UrlPar;

		// 取URL后的参数存入变量
		var WebUrl = GetUrlPar("s");

		// 判断URL后是否不带参数.
		// 因为只 GetUrlPar() 时如果不带参则会报错
		if(WebUrl != null && WebUrl.toString().length > 1){
			UrlPar = GetUrlPar("s"); // 存入参数变量
			if(UrlPar == "ok"){
				$("#icon-id").css("color", "#63da5c");
				$("#icon-id").removeClass("ion-close-circled");
				$("#icon-id").addClass("ion-ios-checkmark");
				$("#info-title").css("color", "#63da5c");
				$("#info-title").html("恭喜！您已注册成功！");
				$("#info-bt-1").html('您现在可以在游戏登录了，');
				delayURL('../');
			} else if(UrlPar == "fail"){
				$("#icon-id").css("color", "#e53935");
				$("#icon-id").removeClass("ion-ios-checkmark");
				$("#icon-id").addClass("ion-close-circled");
				$("#info-title").css("color", "#e53935");
				$("#info-title").html("抱歉！您的账号注册失败！");
				$("#info-bt-1").html('您的账号或邀请码有误，');
				delayURL('../');
			} else if(UrlPar == "fail_ip"){
				$("#icon-id").css("color", "#e53935");
				$("#icon-id").removeClass("ion-ios-checkmark");
				$("#icon-id").addClass("ion-close-circled");
				$("#info-title").css("color", "#e53935");
				$("#info-title").html("抱歉！您的账号注册失败！");
				$("#info-bt-1").html('您的IP在短时间内注册过了，');
				delayURL('../');
			} else {
				window.location.href = "../";
			}
		} else {
			window.location.href = "../"; // 空参则直接跳转默认页
		}

		// 返回注册页
		function back(){
			window.location.href = "../";
		}

		// 延时跳转函数
		function delayURL(url) {
			var delay = document.getElementById("time").innerHTML;
			if (delay > 1) {
				delay--;
				document.getElementById("time").innerHTML = delay;
			} else {
				window.location.href = url; // 跳转
			}
			setTimeout("delayURL('" + url + "')", 1000);
		}
	</script>
</body>
</html>
