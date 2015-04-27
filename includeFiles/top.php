<?php
include 'includeFiles/config.php';
?>
<html>
    <head>
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         <title><?php 
         echo $CurrentTitle;
         ?></title>
    </head>
    <body>
        <div>            
            <a href="/">首页</a> | <a href="/news">文章</a>
            | <a href="/userreg">注册</a>
        </div>
        <?php 
        //加载模板
        func_LoadTpl();
        ?>