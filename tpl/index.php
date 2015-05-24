<?php 
//    include 'module/webnews.php'; 
//    $getNews=  new WebNews();
//    $result_news=$getNews->LoadNews("", "", 1, 10);

$result_news=  the_news();
?>
<style>
    .indexContainer{width: 100%;margin: 20px auto;min-height: 500px;_height:500px}
    .content{width: 1000px;margin:  0 auto;}
    .content .right{float: right;width: 29%}
    .content .left{float: left;width: 69%;}
    .newsregion{
        color:#9c9c9c;width: 100%;background: #fff;float: left;margin: 5px auto;border-radius: 10px;border: solid 1px #ddd;
    }
   .newsregion dt{
       color:#383838;width: 95%;line-height: 20px;border-bottom: solid 1px #ddd;text-align: left;padding: 6px;
   }
   .newsregion dd{width: 95%;line-height: 20px;text-align: left;padding: 10px;text-indent:2em;}
   .newsregion .pubinfo
   {
       border: 0;background: url(/image/newsbar.jpg);width: 98%;height: 25px;
       border-top: solid 1px #ddd;padding:10px 0px 5px 10px; margin-bottom: 1px; 
   }
</style>
<div class="indexContainer">
    <div class="content">
        <div class="left">
            <?php            foreach ($result_news as $item): ?>
            <dl class="newsregion">
                <dt><?php   echo $item["NewsTitle"]; ?></dt>
                <dd><?php   echo $item["NewsIntr"]; ?> </dd>
                <dd class="pubinfo"><?php   echo $item["Author"]." ".$item["PubTime"]; ?></dd>
            </dl>
            <?php endforeach; ?>
            
        </div>
        <div class="right">
            相关新闻
        </div>
    </div>
</div>