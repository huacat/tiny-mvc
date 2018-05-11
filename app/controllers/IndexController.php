<?php
namespace app\controllers;

use services\View;
use services\Mail;
use services\Redis;
use app\models\Article;

class IndexController extends BaseController{

    public function index(){
//        $this->mail = Mail::to(['295806460@qq.com'])
//            ->from('huacat <cvisix@163.com>')
//            ->title('分支合并')
//            ->content('<h1>Branch Merge</h1><p>Merge dev to master and push to origin/master!</p>');
//
//        return $this->view = View::make('index')
//            ->with('article',Article::first())
//            ->withTitle('tiny-mvc');
//
        Redis::set('name','yi',5,'s');
        var_dump(Redis::get('name'));

//        var_dump($_SERVER);

    }
}