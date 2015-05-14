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
        
        //验证参数集合的个数是否符合要求
        private function ValidArgs($args,$num)
        {
            if($args && is_array($args) && count($args)==$num)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        function __call($name, $arguments) {
            switch ($name)
            {
                case "add":
                {
                    if(ValidArgs($arguments,4))
                    {
                        $this->AddUser($arguments[0], $arguments[1], $arguments[2], $arguments[3]);
                    }
                }break;
                case "login":
                {
                    
                }break;
                case "logout":
                {
                    
                }break;
            }
        }
        
        //往数据库添加用户
        private function  AddUser($username,$usermail,$userpwd1,$userpwd2)
        {
            if($userpwd1!=$userpwd2)
            {
                $this->ErrorCode="0001";
                return FALSE;
            }
            if($userpwd1==""||$username==""||$usermail=="")
            {
                $this->ErrorCode="0002";
                return FALSE;
                
            }
            if(ArgsFormatValid($usermail)==FALSE)//格式验证
            {
                $this->ErrorCode="0003";
                return FALSE;
            }
            if(UserKeyRepeatValid($username,$usermail)==FALSE)//用户键值验证是否重复
            {
                $this->ErrorCode="0004";
                return FALSE;
            }
            DBHelper::AddUser($username,$usermail,$userpwd1);//写库
        }

        public static function GetCurrentUser()
        {
           echo 'Jimmy';
        }
    }
?>
