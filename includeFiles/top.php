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
             *{margin: 0 auto;text-align: center;font-size: 14px;}
             body{background: url(/image/bg.png)}
             .container{background-color: #474747;height: 130px;margin: 0 auto;
             color:#fff;}
             .container a{color:#fff;text-decoration: none;}
             .container a:hover{text-decoration: underline;}
             .container .top{width: 1000px;}
             .container .logo{float: left;}
             .container .menu{width: 400px;float: left;margin-top:30px;
                  margin-left: 15px;text-align: left;}
             .container .userinfo{float: right;text-align: right;}
             .container .search{border:solid 1px gray;width:150px;
                    text-align: left;height: 21px;line-height: 21px;
                    background: url(/image/topsearch.gif) no-repeat #fff right;}
          </style>
    </head>
    <body>
        <div class="container"><!--容器DIV-->
            <div class="top">
                <div class="logo">
                    <a href="/"><img src="/image/logo.gif" alt="Jimmy and Jane 's Sweet"/></a>
                </div>
                
                <div class="userinfo">
                   <span>
                        <?php
                            include 'module/webuser.php';                 
                            echo '欢迎回来 '.WebUser::GetCurrentUser();
                        ?>
                 </span>
            <span><a href="#">退出登录</a></span>
                </div>
                
                
                <div class="menu">
                    <a href="/">首页</a> | <a href="/news">文章</a>
            |       <a href="/userreg">注册</a>
                    <input type="text" class="search"/>
                </div>
          
            </div>
        </div>
        
        
      
        <?php 
        //加载模板
        func_LoadTpl();
        ?>