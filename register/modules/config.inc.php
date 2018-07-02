<?php

$setting = array(); // 初始化数组

// ----------------------------  WEB页面信息  ----------------------------- //
$setting['web']['Web_Url'] = 'https://vl.cstu.gq';	// 站点URL
$setting['web']['Web_Url_Msg'] = 'message.php';
$setting['web']['Web_Url_Script'] = "<script language='javascript' type='text/javascript'>window.location.href = '"; // 页面跳转js, 请勿修改.

// ----------------------------  注册设置项S  ----------------------------- //
// 条件设置
$setting['web']['reg_time'] = 8; 					// 同IP多少小时内只能注册1个ID

// ----------------------------  数据库设置项  ----------------------------- //
$setting['mysql']['ip'] = 'localhost'; 					// 数据库IP
$setting['mysql']['username'] = 'root'; 				// 数据库用户
$setting['mysql']['password'] = ''; 				// 数据库密码
$setting['mysql']['sqlname'] = 'vlw'; 				// 数据库名
$setting['mysql']['authme_db'] = 'authme'; 				// Authme表
$setting['mysql']['webreg_db'] = 'webreg'; 				// 网页表
$setting['mysql']['fkey_db'] = 'webreg_fkey'; 				// 邀请码表

// ----------------------------  Authme设置项  ----------------------------- //
// 字段设置
$setting['authme']['mySQLColumnId'] = 'id';
$setting['authme']['mySQLColumnName'] = 'username';
$setting['authme']['mySQLRealName'] = 'realname';
$setting['authme']['mySQLColumnPassword'] = 'password';
$setting['authme']['mySQLColumnEmail'] = 'email';
$setting['authme']['mySQLColumnLogged'] = 'isLogged';
$setting['authme']['mySQLColumnIp'] = 'ip';
$setting['authme']['mySQLColumnLastLogin'] = 'lastlogin';
$setting['authme']['mySQLlastlocX'] = 'x';
$setting['authme']['mySQLlastlocY'] = 'y';
$setting['authme']['mySQLlastlocZ'] = 'z';
$setting['authme']['mySQLlastlocWorld'] = 'world';
$setting['authme']['mySQLlastlocYaw'] = 'yaw';
$setting['authme']['mySQLlastlocPitch'] = 'pitch';
// 插件设置
$setting['authme']['passwordHash'] = 'SHA256'; 				// 加密算法
$setting['authme']['doubleMD5SaltLength'] = 8;				// Salt长度
$setting['authme']['spawn_world'] = 'world'; 				// 默认出生世界

// ----------------------------  SMTP邮件设置项  ----------------------------- //
$setting['smtp']['server'] = 'smtp.exmail.qq.com'; 			// SMTP地址
$setting['smtp']['port'] = 465; 						// SMTP端口
$setting['smtp']['Secure'] = 'ssl';					// 如果port为465,则填写ssl,留空则port必须为25
$setting['smtp']['from_email'] = 'master@mail.cstu.gq'; 			// 发信人地址
$setting['smtp']['from_username'] = 'Minecraft Vast-Light'; 				// 发件人名称
$setting['smtp']['username'] = 'master@mail.cstu.gq'; 				// SMTP用户名
$setting['smtp']['password'] = 'Kurisutaaruu2015';				// SMTP密码
$setting['smtp']['emtitle'] = 'Minecraft Vast-Light Registration Email Verification'; 			// 邮件标题

// ----------------------------  阿里云滑动设置  ----------------------------- //
$setting['aliyun']['Access_Key_ID'] = '';
$setting['aliyun']['Access_Key_Secret'] = '';

// ----------------------------  邀请码功能设置  ----------------------------- //
$setting['fkey']['enabled'] = false; 					// true 开启 false 关闭
$setting['fkey']['minlen'] = 4;						// 最小长度
$setting['fkey']['maxlen'] = 11;					// 最大长度

// ----------------------------  服务条款设置项  ----------------------------- //
$setting['contract']['name'] = 'License';			// 条款标题
$setting['contract']['url'] = '#';					// 条款URL

// ----------------------------  页脚版权设置项  ----------------------------- //
// TODO ...

// ----------------------------  系统功能设置项  ----------------------------- //
$setting['system']['debug'] = false;					// 是否显示错误信息

?>
