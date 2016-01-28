<?php
namespace Test\Controller;
use Think\Controller;

class IndexController extends Controller {
    public function index() {
        import('Common.Index');
        var_dump(R('Common:://Index/index'));
    }
}