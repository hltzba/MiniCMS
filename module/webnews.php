<?php
    class WebNews
    {
        function WebNews()
        {}
        
        //载入新闻列表
        public function LoadNews($classids,$keywords,$pagenum,$pagesize)
        {
            $news1=array(
                "NewsTitle"=>"马化腾为《互联网+：国家战略行动路线图》亲撰前言",
                "NewsIntr"=>"作为“互联网+”最有力的建议者和实践者之一，腾讯主要创办人、董事会主席兼首席执行官马化腾亲自为《互联网+：国家战略行动路线图》一书撰写前言。 被视为“互联网+”国家战略腾讯版官方解读的《互联网+：国家战略行动路线图》，将于5月22日正式上市销售。 马化腾在前言中提出，“互联网+”，是一种“寓大于小”的生态战略。在万物互联的新生态中，企业不再是社会经济活动的最小单位，个人才是社会经济活动的最小细胞。这使得传统企业的形态、边界正在发生变化，开放、灵活、“寓大于小”成为商业变革的趋势。",
                "PubTime"=>"2015-05-19 14:14",
                "Author"=>"腾讯财经"
                );
            $news2=array(
                "NewsTitle"=>"奥巴马开通Twitter帐号 用的是iPhone手机",
                "NewsIntr"=>"美国总统巴拉克·奥巴马终于开通自己的Twitter帐号了！周一上午（编注：美国东部时间），奥巴马发出了自己的第一条Twitter消息，称“你好，Twitter！这是巴拉克·奥巴马！真的！6年时间了，他们终于给了我自己的帐号。”而且，奥巴马此番还是使用iPhone发出了自己的第一条Twitter消息。",
                "PubTime"=>"2015-05-19 06:41",
                "Author"=>"腾讯科技"
                );
       
        $result[]=$news1;
        $result[]=$news2;
        return $result;
        }
    }
    
    function the_news($params="")
    {
        $getNews=  new WebNews();
        return $getNews->LoadNews("", "", 1, 10);
    }
?>

