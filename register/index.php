<?php

// 初始化session
session_start();

// 引入外部 PHP 以供调用.
include 'modules/config.inc.php';
include 'modules/api.php';

// 设置 date() 时区为中国时区
// 解决比系统时间差 6 小时的问题.
date_default_timezone_set('PRC');

// session初始化 & 设置
if(!isset($_SESSION['code'])){
	$_SESSION['code'] = mt_rand(99999,1000000);
}

// 页面是否显示邀请码
if($setting['fkey']['enabled']){
	$fkey_class = '';
} else {
	$fkey_class = "style='display: none;'";
}

// 输出注册页面html模版
include 'template/reg.php';

?>
