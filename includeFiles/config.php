<?php
require 'module/webnews.php';
require 'CommonFunction.php';//加载通用函数库
require 'lib/DbHelper.php';//加载数据库帮助类
$config_DefaultTitle='_Jimmy的博客';//站点默认Title
$get_PagePath=$_SERVER["PHP_SELF"];//获取当前页面的地址
$CurrentTitle=$config_DefaultTitle;

//统一处理用户提交的表单
if(isset($_POST)&&count($_POST)>0)
{
    func_DoAction($_POST);
}

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
        if(isset($_POST["btnRegUser"]))//点击了注册按钮
        {
            //$get_username=$_POST["username"];
            $_username=filter_input(INPUT_POST, "username");
            //$get_password=$_POST["password"];
             $_password=filter_input(INPUT_POST, "password");
            //echo '用户点击了注册按钮'.$get_username.'-'.$get_password.'<br/>';
            echo '用户点击了注册按钮[FILTER]'.$_username.'-'.$_password;
        }
    }break;
    default :
    {
        $CurrentTitle='404'.$config_DefaultTitle;
    }break;
}
?>

