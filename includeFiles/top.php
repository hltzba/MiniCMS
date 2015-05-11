<?php
include 'includeFiles/config.php';
?>
<html>
    <head>
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         <title><?php 
         echo $CurrentTitle;
         ?></title>
         <style>
             .container{background-color: #474747;height: 130px;margin: 0 auto;}
             .container a{color:#fff;}
          </style>
    </head>
    <body>
        <div class="container"><!--容器DIV-->
            <div class="top">
                <div class="logo">
                    <a href="/"><img src="/image/logo.png" alt="Jimmy and Jane 's Sweet"/></a>
                </div>
                <div class="menu">
                    <a href="/">首页</a> | <a href="/news">文章</a>
            | <a href="/userreg">注册</a>
                </div>
                <div class="userinfo">
                       <span>
            <?php
                     include 'module/webuser.php';
                 
                     echo '欢迎 '.WebUser::GetCurrentUser();
            ?>
            </span>
            <span><a href="#">退出登录</a></span>
                </div>
            </div>
        </div>
        
        
      
        <?php 
        //加载模板
        func_LoadTpl();
        ?>