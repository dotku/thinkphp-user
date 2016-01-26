<?php
namespace User\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
            
    }
    /*
    * 最基础的注册信息有 用户名 和 密码
    */
    public function register() {
        $model = D('user');
        $input = array();
        $output = array();
        if ($_POST) {
            /*
            unset($_POST['username']);
            unset($_POST['email']);
            unset($_POST['password']);
            */
            $input['other'] = $_POST;
            $output['data'] = $input;
        }
        echo json_encode($_POST);
    }
}