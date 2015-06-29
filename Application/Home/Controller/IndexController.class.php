<?php
namespace Home\Controller;
use Home\Model\UserModel;
use Think\Controller;
use Think\Model;

class IndexController extends Controller {
    public function index(){
        echo "hello world";
        $db = new UserModel();
//        $db = D('user');
        $select = $db->select();
        $this->assign('select',$select);
//        $this->display();
    }
}