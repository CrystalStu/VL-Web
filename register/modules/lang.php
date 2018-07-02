<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
switch ($lang) {
    case "zh":
        $regtitle = "用户注册";
        $mcid = "我的世界ID";
        $email = "邮箱";
        $email_verify_s = "发送验证码";
        $pass = "密码";
        $regbtn = "注册";
        $logged = "您已经登录";
        $db_conn_failed = "数据库连接失败";
        break;
    case "jp":
        $regtitle = "ユーザー登録";
        $mcid = "マインクラフトID";
        $email = "メールアドレス";
        $email_verify_s = "確認コードを送信する";
        $pass = "パスワード";
        $logged = "ログインしました";
        $regbtn = "登録";
        break;
    default:
        $regtitle = "User Register";
        $mcid = "Minecraft ID";
        $email = "Email";
        $email_verify_s = "Send verification code";
        $pass = "Password";
        $logged = "You are already logged";
        $register = "Register";
        $db_conn_failed = "Database Connection Failed";
        $email_verify = "Email verification code";
        $acceptLicense = "I have read and accept the license: ";
        $con_pass = "Confirm your password";
        $regbtn = "Register";
        $regmailPromptHead = "You are now registering Minecraft Vast-Light, this your email verification code:";
        $regmailPromptFoot = "If you are not the registering user, please ignore this email.";
        break;
}
?>
