<?php

/* 
 通用函数
 */

//页面动作
function func_DoAction($posts)
{
    $module=  filter_input(INPUT_GET, "module");
    if($module!=null&&$module!="")
    {
        if($module=="login"&&isset($posts["btnLogin"]))//定位登陆按钮被点击
        {
            //echo '我到DoAction了';
            require_once 'module/webuser.php';
            $bllUser=new WebUser();
            $bllUser->login($posts["username"],$posts["password"]);
            header("location:/");//返回首页
        }
    }
}

//加载模板页
function func_LoadTpl()
{
    $tplDir='tpl/';
$tplNameArray=array(
    "news"=>"news.php",//新闻详细
    "userreg"=>"userreg.php",//用户注册
    "index"=>"index.php",//首页
    "login"=>"login.php",//登陆
    "logout"=>"logout.php",//退出登陆
);

    $module=  filter_input(INPUT_GET, "module");   
    
    if(array_key_exists($module, $tplNameArray))
    {
         include $tplDir.$tplNameArray[$module];
    }
    else        
    {
         include $tplDir.'index.php';
    }
}
?>

