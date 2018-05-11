<?php
use NoahBuscher\Macaw\Macaw;

Macaw::get('', 'app\controllers\IndexController@index');
Macaw::get('/index', 'app\controllers\IndexController@index');
Macaw::get('/index/index', 'app\controllers\IndexController@index');

Macaw::$error_callback = function() {
    throw new Exception("路由无匹配项 404 Not Found");
};

Macaw::dispatch();
