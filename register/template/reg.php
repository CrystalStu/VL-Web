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
<!-- 引入阿里云盾风控API
<link type="text/css" href="https://g.alicdn.com/sd/ncpc/nc.css?t=1497857702732" rel="stylesheet"/>
<script type="text/javascript" src="https://g.alicdn.com/sd/ncpc/nc.js?t=1497857702732"></script>
-->
<!-- 引入页面CSS -->
<link rel="stylesheet" href="css/main.css">
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
		<!--<div class="adbox-right"><img src="img/ad1.jpg" /></div>-->
		<div class="row">
			<form method="post" name="reg-from" action="./modules/reg.php" onsubmit="return check()">
				<ul class="is-reg-box clearfix">
					<li class="li-row clearfix">
							<label class="is-label" for="username"><?php echo($mcid) ?></label>
							<input id="id" name="username" type="text" maxlength="10" autocomplete="off" />
							<i class="ion ion-android-person"></i>
							<div id="i-tt1" class="i-tt"></div>
					</li>
					<li class="li-row clearfix">
							<label class="is-label" for="email"><?php echo($email) ?></label>
							<input id="em" name="email" type="text" maxlength="30" autocomplete="off" />
							<i class="ion ion-ios-email"></i>
							<div id="i-tt2" class="i-tt"></div>
					</li>
					<li class="li-row clearfix">
							<label class="is-label" for="emailkey"><?php echo($email_verify) ?></label>
							<input id="emkey" name="emailkey" type="text" maxlength="6" autocomplete="off" />
							<button id="sdem" class="post-form btn-sdem btn-disabled" type="button" onclick="sendem()"><?php echo($email_verify_s) ?></button>
							<div id="i-tt3" class="i-tt" style="left: 181px;"></div>
					</li>
					<li class="li-row clearfix">
							<label class="is-label" for="password"><?php echo($pass) ?></label>
							<input id="pw" name="password" type="password" maxlength="16" autocomplete="off" />
							<i class="ion ion-android-lock"></i>
							<div id="i-tt4" class="i-tt"></div>
					</li>
					<li class="li-row clearfix">
							<label class="is-label" for="acceptpassword"><?php echo($con_pass) ?></label>
							<input id="apw" name="acceptpassword" type="password" maxlength="16" autocomplete="off" />
							<i class="ion ion-android-lock"></i>
							<div id="i-tt5" class="i-tt"></div>
					</li>
					<li id="fkey-li" class="li-row clearfix" <?php echo $fkey_class;?>>
							<label class="is-label" for="fkey">FKEY</label>
							<input id="fkey" name="fkey" type="text" maxlength="11" autocomplete="off" />
							<i class="ion ion-android-pin"></i>
							<div id="i-tt5plus" class="i-tt"></div>
					</li>
					<!--
					<li class="li-row clearfix">
							<label class="is-label">SWIPE</label>
							<div class="d_afs">
								<div id="afs"></div>
							</div>
							<div id="i-tt6" class="i-tt"></div>
					</li>
				-->
					<!-- 注册按钮 -->
					<li class="li-row">
						<p class="protocol clearfix">
							<input class="check" id="check_box" name="check_box" type="checkbox" checked="checked" onclick="ckboxOnClick()" required />
							<span><?php echo($acceptLicense) ?></span><a href="<?php echo $setting['contract']['url'];?>"><em><?php echo $setting['contract']['name'];?></em></a>
						</p>
						<div id="i-tt7" class="i-tt"></div>
						<button id="rbtn" class="post-form" name="submit" type="submit" onclick="btnclick()"><?php echo($regbtn) ?></button>
					</li>
				</ul>
				<!-- 表单隐藏域 -->
				<input type="hidden" name="session_code" value="<?php echo $_SESSION['code'];?>">
				<input type="hidden" id="csessionid" name="csessionid">
				<input type="hidden" id="sig" name="sig">
				<input type="hidden" id="token" name="token">
				<input type="hidden" id="scene" name="scene">
			</form>
		</div>
	</div>
	<!-- 注册box 结束 -->
	<div class="footer">
		<p>© 2018 Crystal Studio</p>
	</div>
	<!-- 引入jQuery库 -->
	<script type="text/javascript" src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
	<!-- 引入页面控制JS -->
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
