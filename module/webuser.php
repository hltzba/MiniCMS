<?php
    ///用户处理类
    class WebUser
    {
//        public  $CurrentUserName='游客';
//        public $userAlias;
        private $UserInfo=array();
        
                function __construct() {
            //echo '用户已经初始化';
        }
        
        //获取用户类属性
        function __get($name) {
            if(array_key_exists($name, $UserInfo))
            {
                return $UserInfo[$name];
            }
            else
            {
                return "";
            }
        }
        
        //设置用户类属性
        function __set($name, $value) {
          $this->UserInfo[$name]=$value;
        }
        
        function __call($name, $arguments) {
            switch ($name)
            {
                case "add":
                {}break;
            }
        }
        
       public static function GetCurrentUser()
        {
           echo 'Jimmy';
        }
    }
?>
