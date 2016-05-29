<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    
	    $auth = new \Think\Auth();
	    $rule_name=MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME;
	    
	    if($auth->check('Admin/Index/Index',1)){// 第一个参数是规则名称,第二个参数是用户UID
	       $this->display();
	    }else{
	   	   echo "222";
	     //没有显示操作按钮的权限
	   }

    }
}