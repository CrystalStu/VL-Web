<?php

// 初始化session
session_start();

include 'lang.php';
include 'config.inc.php';
include 'api.php';
require './PHPMailer/PHPMailerAutoload.php'; // 引入 PHPMailer

// 禁止浏览器直接打开
$fromurl = $setting['web']['Web_Url']; //跳转往这个地址。
if($_SERVER['HTTP_REFERER'] == ""){
	header("Location:".$fromurl); exit;
}

// 判断数据库是否已连接
if (!$mysql_con){
	die('0'); // 连接失败输出错误信息
}

// 判断用户名是否可用
if($_GET['action'] == 'checkid'){
	usleep(500); //此处usleep用于缓解数据库查询压力
	$chk_username = strtolower($_GET['username']); // 转小写
		$chk_un_len = strlen($chk_username); // 取长度
		// 正则判断是否符合格式.也是为了防Sql注入
		if ($chk_un_len < 4 || $chk_un_len > 10 || !preg_match("/^[a-zA-Z][a-zA-Z0-9_]*$/", $chk_username)){
			die('0');
		}
	$sql_text = "select 1 from ".$setting['mysql']['authme_db']." where ".$setting['authme']['mySQLColumnName']." = '".$chk_username."' limit 1;";
	$sql_return = mysqli_query($mysql_con, $sql_text);
    if(is_array(mysqli_fetch_row($sql_return))){
		echo '0';
    }else{
		echo '1';
    }
}

// 判断邮箱是否可用
if($_GET['action'] == 'checkem'){
	usleep(500); // 作用同上
	$chk_email = $_GET['email'];
	$chk_em_len = strlen($chk_email);
		// 作用同上
		if ($chk_em_len <= 6 || $chk_em_len > 30 || !preg_match("/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/", $chk_email)){
			die();
		}
	$sql_text = "select 1 from ".$setting['mysql']['authme_db']." where ".$setting['authme']['mySQLColumnEmail']." = '".$chk_email. "' limit 1;";
	$sql_return = mysqli_query($mysql_con, $sql_text);
    if(is_array(mysqli_fetch_row($sql_return))){
		echo '0';
    }else{
		echo '1';
    }
}

// Smtp发送邮件
if($_GET['action'] == 'sendemkey'){

	$send_email = $_GET['email'];
	unset($_SESSION[$send_email]['em_key']); // 清空session
	//$_SESSION['email'] = $send_email; // 设置session邮箱号
	$_SESSION[$send_email]['em_key'] = mt_rand(99999,1000000); // 生成随机session
		$em_title = $setting['smtp']['emtitle']; // 邮件标题
		$em_text = $regmailPromptHead."<br><b><font size='5' color=red>".$_SESSION[$send_email]['em_key']."</font><b><br>".$regmailPromptFoot."<br><br><br><br><br>Minecraft Vast-Light<br>";

	// 使用 PHPMailer 来发送邮件
	$mail = new PHPMailer; // 创建 PHPMailer 对象
	$mail->CharSet = 'UTF-8';	// 设置编码
	$mail->isSMTP(); // 设置 mailer 为使用 SMTP
	$mail->Host = $setting['smtp']['server']; // 设置 SMTP 地址
	$mail->SMTPAuth = true; // 开启 SMTP 身份验证
	$mail->Username = $setting['smtp']['username']; // SMTP 用户名
	$mail->Password = $setting['smtp']['password']; // SMTP 密码
	$mail->SMTPSecure = $setting['smtp']['Secure']; // 开启 TLS 加密, `ssl` also accepted
	$mail->Port = $setting['smtp']['port']; // TCP端口

	$mail->setFrom($setting['smtp']['from_email'], $setting['smtp']['from_username']);
	$mail->addAddress($send_email); // 设置收件地址

	$mail->isHTML(true); // 设置 Email 内容是否为 HTML

	$mail->Subject = $em_title; // 邮件标题
	$mail->Body = $em_text; // 邮件内容

	$mail->send(); // 发送邮件

}

// 判断邮箱验证码是否和session一致
if($_GET['action'] == 'checkemkey'){
	//usleep(5500); // 作用同上
	$chk_email = $_GET['email'];
	$chk_emailkey = $_GET['key'];
	$chk_emkey_len = strlen($chk_emailkey);
		// 作用同上, 单纯判断数字而已
		if ($chk_emkey_len <= 5 || $chk_emkey_len > 6 || !preg_match("/^[0-9]*$/", $chk_emailkey)){
			die();
		}
    if(!isset($_SESSION[$chk_email]['em_key']) || $chk_emailkey != $_SESSION[$chk_email]['em_key']){
		echo '0';
    }else{
		echo '1';
    }
}

//mysql_close($mysql_con);

?>
