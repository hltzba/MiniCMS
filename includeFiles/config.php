<?php

$config_DefaultTitle='_Jimmy的博客';//站点默认Title
$get_PagePath=$_SERVER["PHP_SELF"];//获取当前页面的地址
$CurrentTitle=$config_DefaultTitle;
switch ($get_PagePath)
{
    case '/index.php':
    {
         $CurrentTitle='首页'.$config_DefaultTitle;
    }break;
    case '/news.php':
    {
        $CurrentTitle='新闻'.$config_DefaultTitle;
    }break;
  case '/userreg.php':
    {
        $CurrentTitle='用户注册'.$config_DefaultTitle;
    }break;
default :
{
    $CurrentTitle='404'.$config_DefaultTitle;
}break;
}
?>

