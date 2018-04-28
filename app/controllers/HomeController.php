<?php

class HomeController extends BaseController{

    public function home(){
        $this->view = View::make('home')
            ->with('article',Article::first())
            ->withTitle('tiny-mvc');

        $this->mail = Mail::to(['295806460@qq.com'])
            ->from('huacat <cvisix@163.com>')
            ->title('分支合并')
            ->content('<h1>Branch Merge</h1><p>Merge dev to master and push to origin/master!</p>');

    }
}