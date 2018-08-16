function InstallFailed() {
    var time = new Date();
    alert('请将问题告诉群里（上面有联系按钮）的TURX或者发邮件至support@mail.cstu.gq。点击确认后您可以下载备用客户端。感谢您选择浩光域！');
    window.open('down/chineseClient.php?t='+time.getTime());
}