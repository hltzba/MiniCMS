<?php
require_once 'module/webuser.php';
$blluser=new WebUser();
$blluser->logout();
?>
<p style="height: 100px;font-size: 25px;padding-top:10px;">
    退出成功...<a href="/" style="font-size: 25px">点此返回首页</a>
</p>

