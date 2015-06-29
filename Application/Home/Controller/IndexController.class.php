<?php
namespace Home\Controller;
use Home\Model\UserModel;
use Think\Controller;
use Think\Model;

class IndexController extends Controller {
    public function index(){
        $db = new UserModel();
//        $db = D('user');
        $select = $db->select();
        $this->assign('select',$select);

        $name = 'ThinkPHP';
        $this->assign('name',$name);
        $this->display();
    }
}