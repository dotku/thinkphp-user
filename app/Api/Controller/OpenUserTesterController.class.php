<?php
namespace Api\Controller;
use Think\Controller;
class UserAccessController extends Controller {
    public function index(){
        echo 'welcome to useraccess!';
        C('URL_CASE_INSENSITIVE', true);
        var_dump(C('URL_CASE_INSENSITIVE'));
    }
    public function register(){
        R('User/index');
    }
    public function login(){
        session_destroy();
        session_unset($_SESSION['password']);
    }
}