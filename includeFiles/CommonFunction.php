<?php

/* 
 通用函数
 */
function func_LoadTpl()
{
    $tplDir='tpl/';
$tplNameArray=array(
    "news"=>"news.tpl",
    "userreg"=>"userreg.tpl",
    "index"=>"index.tpl",
);

    $module=  filter_input(INPUT_GET, "module");   
    
    if(array_key_exists($module, $tplNameArray))
    {
         include $tplDir.$tplNameArray[$module];
    }
    else        
    {
         include $tplDir.'index.tpl';
    }
}
?>

