<?php
    include "module/page.php";
?>
<style>
    .bottom{width: 100%;margin: 0 auto;background: #474747;height: 80px;
    padding-top:20px;color:#fff;}
    .bottom a{color:#fff;text-decoration: none;}
    .bottom a:hover{text-decoration: underline;}
</style>
<div class="bottom">
    <p>友情链接
        <?php     
        $get_links=  GetFriendLinks();
        //    var_export($get_links);
         ?>
        <?php foreach($get_links as $link):?>
        <?php include 'tpl/friendlinks.php';?>
        <?php endforeach;?>
    </p><br>    
     <p> 闽ICP备XXXXX号
©XXXX.com Inc. All Rights Reserved </p>
</div> 
</body>
</html>

